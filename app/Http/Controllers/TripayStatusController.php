<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TripayStatusController extends Controller
{
    public function checkStatus(Request $request)
    {
        $apiKey = env('API_KEY');
        $reference = $request->query('reference');

        if (!$reference) {
            return response()->json([
                'success' => false,
                'message' => 'Reference is required.'
            ], 400);
        }

        $response = Http::withToken($apiKey)
            ->get('https://tripay.co.id/api-sandbox/transaction/detail', [
                'reference' => $reference
            ]);

        return $response->json();
    }
}
