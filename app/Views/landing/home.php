<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body class="font-sans">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="#" class="flex items-center space-x-2">
                    <span class="text-2xl font-bold text-gray-900">Tani</span>
                    <span class="text-2xl text-primary">Maju</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#profile" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Profil</a>
                    <a href="#visi-misi" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Visi & Misi</a>
                    <a href="#calendar" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Kalendar</a>
                    <a href="#gallery" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Galeri</a>
                    <a href="#contact" class="ml-2 px-4 py-2 text-sm text-gray-700 hover:text-gray-900 transition-colors">Hubungi Kami</a>
                    <a href="/auth/login" class="px-4 py-2 text-sm bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors">Log in</a>
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" class="md:hidden text-gray-600" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="container mx-auto px-4 py-4 space-y-4">
                <a href="#profile" class="block text-gray-600 hover:text-primary transition-colors">Profil</a>
                <a href="#visi-misi" class="block text-gray-600 hover:text-primary transition-colors">Visi & Misi</a>
                <a href="#calendar" class="block text-gray-600 hover:text-primary transition-colors">Kalendar</a>
                <a href="#gallery" class="block text-gray-600 hover:text-primary transition-colors">Galeri</a>
                <a href="#contact" class="block text-gray-600 hover:text-primary transition-colors">Hubungi Kami</a>
                <a href="/auth/login" class="block text-gray-600 hover:text-primary transition-colors">Log in</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center bg-gradient-to-b from-green-50 to-white pt-20">
        <div class="absolute inset-0 bg-[url('/img/grid-pattern.svg')] opacity-10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex flex-col items-center justify-center text-center max-w-4xl mx-auto" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full text-sm text-gray-700 mb-8">
                    <span>Kelompok Tani Maju Bersama</span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Membangun <span class="text-primary">pertanian</span><br>
                    <span class="text-gray-900">berkelanjutan</span>
                </h1>
                <p class="text-xl text-gray-600 mb-12 max-w-2xl">
                    Bersama menciptakan masa depan pertanian yang lebih baik<br>
                    untuk kesejahteraan petani Indonesia.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="px-8 py-4 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors text-center">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </header>

    <!-- Profile Section -->
    <section id="profile" class="py-24 bg-gradient-to-b from-white to-green-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/img/grid-pattern.svg')] opacity-5"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 rounded-full text-sm text-blue-600 mb-4 font-medium">
                    <span>WHAT WE DO</span>
                </div>
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6">Membangun Masa Depan<br>Pertanian Indonesia</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kami berkomitmen untuk mengembangkan pertanian berkelanjutan dengan menerapkan teknologi modern dan praktik ramah lingkungan.</p>
            </div>

            <!-- Profile Content -->
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div class="space-y-8 order-1 md:order-1" data-aos="fade-right" data-aos-delay="100">
                <!-- Stats and Features Section -->
                <div class="space-y-8">
                    <!-- Image Section -->
                    <div class="relative order-2 md:order-2" data-aos="fade-left" data-aos-delay="100">
                        <div class="relative">
                            <!-- Background Decorative Elements -->
                            <div class="absolute -top-6 -right-6 w-24 h-24 bg-green-50 rounded-full z-0 animate-pulse"></div>
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-50 rounded-full z-0 animate-pulse delay-150"></div>
                            
                            <!-- Main Image -->
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-xl">
                                <div class="aspect-w-16 aspect-h-9">
                                    <img src="<?= base_url('img/profile.jpg') ?>" alt="Profil Kelompok Tani" 
                                        class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Features -->
            <div class="space-y-6">
                <div class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-50 p-3 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pertanian Modern</h3>
                            <p class="text-gray-600 leading-relaxed">Mengembangkan pertanian dengan teknologi modern dan praktik ramah lingkungan untuk hasil yang optimal dan berkelanjutan.</p>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-green-50 p-3 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pemberdayaan Komunitas</h3>
                            <p class="text-gray-600 leading-relaxed">Aktif dalam berbagai kegiatan pemberdayaan masyarakat dan edukasi pertanian untuk kesejahteraan bersama.</p>
                        </div>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="flex gap-6">
                    <div class="w-1/2 bg-white px-6 py-4 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex items-center gap-4">
                        <div class="bg-blue-50 p-3 rounded-xl">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">500+</div>
                            <div class="text-sm text-gray-600">Anggota Aktif</div>
                        </div>
                    </div>

                    <div class="w-1/2 bg-white px-6 py-4 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex items-center gap-4">
                        <div class="bg-green-50 p-3 rounded-xl">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-900">13+</div>
                            <div class="text-sm text-gray-600">Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="bg-gradient-to-b from-green-50 to-white py-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-green-50 rounded-full text-sm text-green-600 font-medium mb-4">
                    <span>VISI & MISI</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Komitmen Kami untuk<br>Masa Depan Pertanian</h2>
                <p class="text-lg text-gray-600">Bersama membangun pertanian berkelanjutan dan kesejahteraan masyarakat pedesaan</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Visi -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start gap-6">
                        <div class="bg-blue-50 p-4 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Menjadi kelompok tani terdepan dalam pengembangan pertanian berkelanjutan dan
                                pemberdayaan ekonomi masyarakat pedesaan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Misi -->
                <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start gap-6">
                        <div class="bg-green-50 p-4 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Mengembangkan pertanian ramah lingkungan</span>
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Meningkatkan kesejahteraan anggota</span>
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Membangun kerjasama dengan berbagai pihak</span>
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Menerapkan teknologi pertanian modern</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section id="calendar" class="py-24 bg-white" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-yellow-50 rounded-full text-sm text-yellow-600 font-medium mb-4">
                    <span>KALENDER KEGIATAN</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Jadwal Kegiatan<br>Kelompok Tani</h2>
                <p class="text-lg text-gray-600">Berbagai kegiatan rutin dan program pengembangan untuk kemajuan pertanian</p>
            </div>

            <!-- Timeline Container -->
            <div class="max-w-4xl mx-auto relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gray-200"></div>

                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- Item 1 -->
                    <div class="relative" data-aos="fade-up">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-yellow-500 text-white text-sm font-semibold px-4 py-2 rounded-full z-10">
                                Maret 2025
                            </div>
                        </div>
                        <div class="flex items-start justify-between">
                            <div class="w-5/12"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2">
                                <div class="w-4 h-4 bg-yellow-500 rounded-full border-4 border-white shadow"></div>
                            </div>
                            <div class="w-5/12 bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Pelatihan Pertanian Organik</h3>
                                <p class="text-gray-600 mb-4">Workshop teknik pertanian organik dan pembuatan pupuk alami untuk meningkatkan hasil panen.</p>
                                <div class="flex items-center gap-3 text-sm text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Balai Desa Sukamaju</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="relative" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-yellow-500 text-white text-sm font-semibold px-4 py-2 rounded-full z-10">
                                April 2025
                            </div>
                        </div>
                        <div class="flex items-start justify-between">
                            <div class="w-5/12 bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Panen Raya Bersama</h3>
                                <p class="text-gray-600 mb-4">Kegiatan panen bersama dan evaluasi hasil pertanian musim ini bersama seluruh anggota.</p>
                                <div class="flex items-center gap-3 text-sm text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Lahan Pertanian Bersama</span>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2">
                                <div class="w-4 h-4 bg-yellow-500 rounded-full border-4 border-white shadow"></div>
                            </div>
                            <div class="w-5/12"></div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-yellow-500 text-white text-sm font-semibold px-4 py-2 rounded-full z-10">
                                Mei 2025
                            </div>
                        </div>
                        <div class="flex items-start justify-between">
                            <div class="w-5/12"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2">
                                <div class="w-4 h-4 bg-yellow-500 rounded-full border-4 border-white shadow"></div>
                            </div>
                            <div class="w-5/12 bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Studi Banding</h3>
                                <p class="text-gray-600 mb-4">Kunjungan ke kelompok tani lain untuk berbagi pengalaman dan pembelajaran bersama.</p>
                                <div class="flex items-center gap-3 text-sm text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Kabupaten Tetangga</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-24 bg-gradient-to-b from-white to-green-50 overflow-hidden" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 rounded-full text-sm text-blue-600 font-medium mb-4">
                    <span>GALERI KEGIATAN</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Dokumentasi<br>Kegiatan Kami</h2>
                <p class="text-lg text-gray-600">Momen-momen berharga dalam perjalanan kami membangun pertanian yang lebih baik</p>
            </div>

            <!-- Swiper Gallery -->
            <div class="swiper gallerySwiper max-w-5xl mx-auto">
                <div class="swiper-wrapper pb-8">
                    <?php foreach ($gallery as $item): ?>
                    <div class="swiper-slide p-2">
                        <div class="relative group rounded-2xl overflow-hidden bg-white shadow-lg hover:shadow-xl transition-all duration-300">
                            <img src="<?= base_url($item['image']) ?>" alt="<?= esc($item['title']) ?>" 
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                                <h3 class="text-lg font-bold mb-1"><?= esc($item['title']) ?></h3>
                                <p class="text-xs text-gray-200"><?= esc($item['description']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation Buttons -->
                <div class="swiper-button-next after:!text-sm !text-gray-800 !right-0"></div>
                <div class="swiper-button-prev after:!text-sm !text-gray-800 !left-0"></div>
                
                <!-- Pagination -->
                <div class="swiper-pagination !-bottom-2"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gradient-to-b from-green-50 to-white" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-green-50 rounded-full text-sm text-green-600 font-medium mb-4">
                    <span>HUBUNGI KAMI</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Kami Siap<br>Membantu Anda</h2>
                <p class="text-lg text-gray-600">Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut</p>
            </div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>
                        
                        <!-- Address -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="bg-green-50 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">Alamat</h4>
                                <p class="text-gray-600">Jl. Pertanian No. 123<br>Desa Sukamaju, Kec. Sejahtera<br>Kab. Makmur, 12345</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="bg-blue-50 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">Telepon</h4>
                                <p class="text-gray-600">+62 123 4567 8900<br>+62 098 7654 3210</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 mb-6">
                            <div class="bg-yellow-50 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">Email</h4>
                                <p class="text-gray-600">info@kelompoktani.com<br>admin@kelompoktani.com</p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="flex items-start gap-4">
                            <div class="bg-purple-50 p-3 rounded-xl">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-1">Media Sosial</h4>
                                <div class="flex gap-4">
                                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.952912260219!2d3.375295414770757!3d6.5276316452169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzEnNDAuMyJOIDPCsDIyJzMxLjQiRQ!5e0!3m2!1sen!2sid!4v1620981345219!5m2!1sen!2sid"
                                    class="w-full h-full rounded-xl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2">No. Telepon</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
                            <input type="text" id="subject" name="subject" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="4" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"></textarea>
                        </div>
                        <button type="submit" 
                            class="w-full px-6 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-300 transition-colors duration-200 flex items-center justify-center gap-2">
                            <span>Kirim Pesan</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </form>
                </div>
        </div>
    </section>

     <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 md:pt-16 pb-6 md:pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-8 md:mb-12">
                <!-- About Section -->
                <div class="space-y-4 mb-6 sm:mb-0">
                    <h3 class="text-xl font-bold text-green-500 mb-4">Kelompok Tani Maju Bersama</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Kami adalah komunitas petani yang berkomitmen untuk memajukan pertanian modern dan berkelanjutan melalui inovasi dan kolaborasi.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold text-green-500 mb-4">Menu Utama</h3>
                    <ul class="space-y-2.5 md:space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#profile" class="text-gray-400 hover:text-white transition-colors">Profil</a></li>
                        <li><a href="#visi" class="text-gray-400 hover:text-white transition-colors">Visi & Misi</a></li>
                        <li><a href="#gallery" class="text-gray-400 hover:text-white transition-colors">Galeri</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-xl font-bold text-green-500 mb-4">Layanan</h3>
                    <ul class="space-y-2.5 md:space-y-2">
                        <li class="text-gray-400">Pelatihan Pertanian</li>
                        <li class="text-gray-400">Konsultasi Agribisnis</li>
                        <li class="text-gray-400">Penyediaan Bibit</li>
                        <li class="text-gray-400">Distribusi Hasil Tani</li>
                        <li class="text-gray-400">Kemitraan Petani</li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold text-green-500 mb-4">Kontak</h3>
                    <ul class="space-y-4 md:space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-400 text-sm sm:text-base">Jl. Pertanian No. 123, Desa Sukamaju</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-400 text-sm sm:text-base">info@kelompoktani.com</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-400 text-sm sm:text-base">+62 123 4567 8900</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-6 md:pt-8 mt-6 md:mt-8 border-t border-gray-800">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <p class="text-gray-400 text-sm">&copy; 2024 Kelompok Tani Maju Bersama. All rights reserved.</p>
                    <div class="flex items-center gap-4 text-sm mt-4 sm:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 64, // Adjust for navbar height
                        behavior: 'smooth'
                    });
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow');
            } else {
                nav.classList.remove('shadow');
            }
        });
    </script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        // Initialize Swiper
        const gallerySwiper = new Swiper('.gallerySwiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                }
            },
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>
</html>
