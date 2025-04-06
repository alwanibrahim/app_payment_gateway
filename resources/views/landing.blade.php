<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayEase - Payment Gateway Terpercaya</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Header/Navbar -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-blue-600">PayEase</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-blue-600">Beranda</a>
                <a href="#products" class="text-gray-600 hover:text-blue-600">Produk</a>
                <a href="#features" class="text-gray-600 hover:text-blue-600">Fitur</a>
                <a href="#pricing" class="text-gray-600 hover:text-blue-600">Harga</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600">Kontak</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">Masuk</a>
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Daftar</a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Solusi Pembayaran Digital Terpercaya</h2>
                <p class="text-xl mb-8">Terima pembayaran dari pelanggan Anda dengan mudah, cepat, dan aman melalui berbagai metode pembayaran.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 text-center">Mulai Sekarang</a>
                    <a href="#" class="border border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 text-center">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="md:w-1/2">
                {{-- <img src="{{ asset('images/payment-illustration.png') }}" alt="Payment Illustration" class="rounded-lg shadow-xl"> --}}
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h3 class="text-center text-gray-500 mb-8">Dipercaya oleh ribuan bisnis di Indonesia</h3>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                {{-- <img src="{{ asset('images/client-1.png') }}" alt="Client 1" class="h-8 grayscale opacity-70">
                <img src="{{ asset('images/client-2.png') }}" alt="Client 2" class="h-8 grayscale opacity-70">
                <img src="{{ asset('images/client-3.png') }}" alt="Client 3" class="h-8 grayscale opacity-70">
                <img src="{{ asset('images/client-4.png') }}" alt="Client 4" class="h-8 grayscale opacity-70">
                <img src="{{ asset('images/client-5.png') }}" alt="Client 5" class="h-8 grayscale opacity-70"> --}}
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Produk Kami</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Solusi pembayaran yang sesuai dengan kebutuhan bisnis Anda</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:transform hover:scale-105">
                    {{-- <img src="{{ asset('images/product-checkout.jpg') }}" alt="PayEase Checkout" class="w-full h-48 object-cover"> --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">PayEase Checkout</h3>
                        <p class="text-gray-600 mb-4">Halaman pembayaran yang dapat disesuaikan untuk bisnis online Anda.</p>
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Integrasi mudah</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tampilan responsif</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Berbagai metode pembayaran</span>
                            </li>
                        </ul>
                        <a href="#" class="block text-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:transform hover:scale-105">
                    {{-- <img src="{{ asset('images/product-api.jpg') }}" alt="PayEase API" class="w-full h-48 object-cover"> --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">PayEase API</h3>
                        <p class="text-gray-600 mb-4">API pembayaran yang kuat untuk integrasi yang lebih fleksibel.</p>
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Dokumentasi lengkap</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Dukungan berbagai bahasa</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Keamanan tingkat tinggi</span>
                            </li>
                        </ul>
                        <a href="#" class="block text-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:transform hover:scale-105">
                    {{-- <img src="{{ asset('images/product-pos.jpg') }}" alt="PayEase POS" class="w-full h-48 object-cover"> --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">PayEase POS</h3>
                        <p class="text-gray-600 mb-4">Solusi point of sale untuk bisnis fisik Anda.</p>
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Hardware terintegrasi</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Manajemen inventori</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Laporan penjualan</span>
                            </li>
                        </ul>
                        <a href="#" class="block text-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Fitur Unggulan</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Nikmati berbagai fitur yang dirancang untuk memudahkan bisnis Anda</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-credit-card text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Berbagai Metode Pembayaran</h3>
                    <p class="text-gray-600">Terima pembayaran melalui kartu kredit, transfer bank, e-wallet, dan QRIS.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-lock text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Keamanan Tingkat Tinggi</h3>
                    <p class="text-gray-600">Dilengkapi dengan enkripsi data dan kepatuhan terhadap standar keamanan internasional.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-globe text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Integrasi Mudah</h3>
                    <p class="text-gray-600">Integrasikan dengan berbagai platform e-commerce dan sistem manajemen bisnis.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-shield-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Perlindungan Penipuan</h3>
                    <p class="text-gray-600">Sistem deteksi penipuan otomatis untuk melindungi bisnis Anda.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-chart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Laporan Real-time</h3>
                    <p class="text-gray-600">Pantau transaksi dan analisis bisnis Anda secara real-time.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-sync text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Pembayaran Berlangganan</h3>
                    <p class="text-gray-600">Kelola pembayaran berlangganan dan pembayaran berulang dengan mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Harga Terjangkau</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Starter Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2">Starter</h3>
                        <div class="text-blue-600 text-4xl font-bold mb-2">Rp 99.000<span class="text-gray-500 text-lg font-normal">/bulan</span></div>
                        <p class="text-gray-600 mb-6">Untuk bisnis kecil yang baru memulai</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>100 transaksi/bulan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Fee 2.9% + Rp 2.000</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Dukungan email</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Integrasi dasar</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Laporan bulanan</span>
                            </li>
                        </ul>
                        <a href="#" class="block text-center bg-gray-200 text-gray-800 py-3 px-4 rounded-lg hover:bg-gray-300 font-semibold">Pilih Paket</a>
                    </div>
                </div>

                <!-- Business Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform scale-105 border-2 border-blue-600">
                    <div class="bg-blue-600 text-white text-center py-2">
                        <span class="font-semibold">PALING POPULER</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2">Business</h3>
                        <div class="text-blue-600 text-4xl font-bold mb-2">Rp 299.000<span class="text-gray-500 text-lg font-normal">/bulan</span></div>
                        <p class="text-gray-600 mb-6">Untuk bisnis yang sedang berkembang</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>500 transaksi/bulan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Fee 2.5% + Rp 1.500</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Dukungan prioritas</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Integrasi lanjutan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Laporan real-time</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Deteksi penipuan</span>
                            </li>
                        </ul>
                        <a href="#" class="block text-center bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 font-semibold">Pilih Paket</a>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                        <div class="text-blue-600 text-4xl font-bold mb-2">Hubungi Kami</div>
                        <p class="text-gray-600 mb-6">Untuk bisnis besar dengan kebutuhan khusus</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Transaksi tidak terbatas</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Fee khusus</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Dukungan 24/7</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Integrasi kustom</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Laporan lanjutan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Deteksi penipuan lanjutan</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Manajer akun dedikasi</span>
                            </li>
                        </ul>
                        <a href="#" class="block text-center bg-gray-200 text-gray-800 py-3 px-4 rounded-lg hover:bg-gray-300 font-semibold">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Apa Kata Mereka</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Dengarkan pengalaman dari pelanggan yang telah menggunakan layanan kami</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        {{-- <img src="{{ asset('images/testimonial-1.jpg') }}" alt="Budi Santoso" class="w-12 h-12 rounded-full mr-4"> --}}
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <p class="text-sm text-gray-600">Toko Online Sukses</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"PayEase telah membantu bisnis kami tumbuh dengan cepat. Proses pembayaran yang mudah dan aman membuat pelanggan kami puas."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        {{-- <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Siti Rahayu" class="w-12 h-12 rounded-full mr-4"> --}}
                        <div>
                            <h4 class="font-bold">Siti Rahayu</h4>
                            <p class="text-sm text-gray-600">Butik Fashion</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Sejak menggunakan PayEase, kami melihat peningkatan konversi yang signifikan. Dukungan pelanggan mereka juga sangat responsif."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        {{-- <img src="{{ asset('images/testimonial-3.jpg') }}" alt="Andi Wijaya" class="w-12 h-12 rounded-full mr-4"> --}}
                        <div>
                            <h4 class="font-bold">Andi Wijaya</h4>
                            <p class="text-sm text-gray-600">Restoran Cepat Saji</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Integrasi yang mudah dan berbagai metode pembayaran membuat PayEase menjadi pilihan terbaik untuk bisnis kami."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Siap Untuk Memulai?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Bergabunglah dengan ribuan bisnis yang telah menggunakan PayEase untuk solusi pembayaran mereka</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">Daftar Sekarang</a>
                <a href="#" class="border border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600">Hubungi Tim Penjualan</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Punya pertanyaan? Tim kami siap membantu Anda</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <form  method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium mb-2">Nama</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-600 focus:border-blue-600" placeholder="Nama Anda" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-600 focus:border-blue-600" placeholder="email@anda.com" required>
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium mb-2">Subjek</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-600 focus:border-blue-600" placeholder="Subjek pesan Anda" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-600 focus:border-blue-600" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 font-semibold">Kirim Pesan</button>
                    </form>
                </div>
                <div>
                    <div class="bg-gray-50 p-8 rounded-lg h-full">
                        <h3 class="text-xl font-bold mb-4">Informasi Kontak</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="font-medium">Alamat</p>
                                <p class="text-gray-600">Jl. Gatot Subroto No. 123, Jakarta Selatan</p>
                            </div>
                            <div>
                                <p class="font-medium">Email</p>
                                <p class="text-gray-600">info@payease.id</p>
                            </div>
                            <div>
                                <p class="font-medium">Telepon</p>
                                <p class="text-gray-600">+62 21 1234 5678</p>
                            </div>
                            <div>
                                <p class="font-medium">Jam Operasional</p>
                                <p class="text-gray-600">Senin - Jumat: 09.00 - 17.00 WIB</p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-medium mb-2">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </a>
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fab fa-linkedin-in text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Pertanyaan Umum</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Temukan jawaban atas pertanyaan yang sering diajukan</p>
            </div>

            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="flex justify-between items-center w-full text-left font-semibold">
                        <span>Bagaimana cara mendaftar di PayEase?</span>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="mt-3 text-gray-600">
                        <p>Anda dapat mendaftar dengan mengklik tombol "Daftar" di halaman utama kami. Isi formulir pendaftaran dengan informasi bisnis Anda, verifikasi email, dan ikuti langkah-langkah selanjutnya untuk mengaktifkan akun Anda.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="flex justify-between items-center w-full text-left font-semibold">
                        <span>Berapa biaya untuk menggunakan PayEase?</span>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="mt-3 text-gray-600">
                        <p>Kami menawarkan berbagai paket dengan harga yang berbeda sesuai dengan kebutuhan bisnis Anda. Silakan lihat bagian "Harga" untuk informasi lebih lanjut atau hubungi tim penjualan kami untuk penawaran khusus.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="flex justify-between items-center w-full text-left font-semibold">
                        <span>Metode pembayaran apa saja yang didukung?</span>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="mt-3 text-gray-600">
                        <p>PayEase mendukung berbagai metode pembayaran termasuk kartu kredit/debit, transfer bank, e-wallet (OVO, GoPay, DANA, LinkAja), QRIS, dan pembayaran melalui gerai ritel.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="flex justify-between items-center w-full text-left font-semibold">
                        <span>Berapa lama waktu yang dibutuhkan untuk menerima pembayaran?</span>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="mt-3 text-gray-600">
                        <p>Waktu pencairan dana bervariasi tergantung pada metode pembayaran dan bank tujuan. Umumnya, dana akan masuk ke rekening Anda dalam 1-3 hari kerja setelah transaksi berhasil.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <button class="flex justify-between items-center w-full text-left font-semibold">
                        <span>Apakah PayEase aman digunakan?</span>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="mt-3 text-gray-600">
                        <p>Ya, keamanan adalah prioritas utama kami. PayEase menggunakan enkripsi tingkat tinggi, mematuhi standar keamanan internasional, dan dilengkapi dengan sistem deteksi penipuan untuk melindungi bisnis dan pelanggan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <h2 class="text-2xl font-bold text-blue-400">PayEase</h2>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Solusi pembayaran terpercaya untuk bisnis Anda. Aman, cepat, dan mudah.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Produk</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">PayEase Checkout</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">PayEase API</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">PayEase POS</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pembayaran Berlangganan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pembayaran Internasional</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Perusahaan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Karir</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mitra</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Dukungan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Dokumentasi API</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Status Sistem</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Keamanan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center md:flex md:justify-between md:text-left">
                <p class="text-gray-400">
                    &copy; {{ date('Y') }} PayEase. Hak Cipta Dilindungi.
                </p>
                <div class="mt-4 md:mt-0">
                    {{-- <img src="{{ asset('images/payment-methods.png') }}" alt="Metode Pembayaran" class="h-8 mx-auto md:mx-0"> --}}
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.md\\:hidden button');
            const mobileMenu = document.querySelector('nav');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
                mobileMenu.classList.toggle('flex-col');
                mobileMenu.classList.toggle('absolute');
                mobileMenu.classList.toggle('top-16');
                mobileMenu.classList.toggle('left-0');
                mobileMenu.classList.toggle('right-0');
                mobileMenu.classList.toggle('bg-white');
                mobileMenu.classList.toggle('p-4');
                mobileMenu.classList.toggle('shadow-md');
                mobileMenu.classList.toggle('z-50');
            });

            // FAQ accordion
            const faqButtons = document.querySelectorAll('.bg-white.p-6 button');

            faqButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('i');

                    content.classList.toggle('hidden');
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                });
            });
        });
    </script>
</body>
</html>
