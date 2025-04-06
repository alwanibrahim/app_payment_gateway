<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TripayController extends Controller
{
    public function testTransaction()
    {
        $apiKey = env('API_KEY');
        $privateKey = env('PRIVATE_KEY');
        $merchantCode = env('MERCHANT_CODE');
        $merchantRef = 'INV1001';
        $amount = 10000;


        $signature = hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://tripay.co.id/api-sandbox/transaction/create', [
            "method" => "QRIS",
            "merchant_ref" => $merchantRef,
            "amount" => $amount,
            "customer_name" => "Alwan Dev",
            "customer_email" => "alwan@example.com",
            "customer_phone" => "081234567890",
            "order_items" => [
                [
                    "sku" => "PRD1",
                    "name" => "Paket Belajar Flutter",
                    "price" => 10000,
                    "quantity" => 1
                ]
            ],
            "callback_url" => "https://webhook.site/a3113aa1-f5ad-451d-9831-ba74aee69a3d",
            "return_url" => "https://example.com/return",
            "expired_time" => time() + 3600,
            "signature" => $signature
        ]);

        return $response->json();
    }

    public function createTransaction(Request $request)
    {
        $apiKey = env('API_KEY');
        $privateKey = env('PRIVATE_KEY');
        $merchantCode = env('MERCHANT_CODE');

        $merchantRef = $request->merchant_ref ?? 'INV' . time();
        $amount = $request->amount ?? 10000;

        $signature = hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://tripay.co.id/api/transaction/create', [
            "method" => $request->method ?? "QRIS",
            "merchant_ref" => $merchantRef,
            "amount" => $amount,
            "customer_name" => $request->customer_name ?? "Alwan Dev",
            "customer_email" => $request->customer_email ?? "alwan@example.com",
            "customer_phone" => $request->customer_phone ?? "081234567890",
            "order_items" => $request->order_items ?? [
                [
                    "sku" => "PRD1",
                    "name" => "Paket Belajar Flutter",
                    "price" => $amount,
                    "quantity" => 1
                ]
            ],
            "callback_url" => env('APP_URL') . "/api/tripay/callback",
            "return_url" => "https://example.com/return",
            "expired_time" => time() + 3600,
            "signature" => $signature
        ]);

        return $response->json();
    }
    public function handleCallback(Request $request)
    {
        // 1. Ambil data dari Tripay
        $data = $request->all();

        // 2. Cek log untuk lihat apa aja isi callback Tripay
        Log::info('Tripay Callback:', $data);

        // 3. Contoh ambil data penting
        $merchantRef = $data['merchant_ref'] ?? null;
        $status = $data['status'] ?? null;

        // 4. Validasi basic (kalau kamu pakai signature, bisa dicek juga)
        if (!$merchantRef || !$status) {
            return response()->json(['message' => 'Invalid callback data'], 400);
        }

        // 5. Update transaksi di database kamu
        $transaksi = DB::table('transaksis')->where('merchant_ref', $merchantRef)->first();

        if (!$transaksi) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        // 6. Update status transaksi
        DB::table('transaksis')
            ->where('merchant_ref', $merchantRef)
            ->update(['status' => $status]);

        return response()->json(['message' => 'Callback diterima dan diproses'], 200);
    }
}
