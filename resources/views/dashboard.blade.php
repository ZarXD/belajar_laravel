<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto max-w-4xl bg-white rounded-lg shadow-lg my-8 p-8 sm:p-12">

        <!-- Bagian Header -->
        <header class="flex flex-col sm:flex-row items-center gap-8 border-b border-gray-200 pb-8">
            <div class="w-32 h-32 flex-shrink-0">
                <img src="https://placehold.co/200x200/E0E7FF/4F46E5?text=Fahad" alt="Foto Profil Fahad" class="rounded-full object-cover w-full h-full border-4 border-white shadow-md">
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-4xl font-bold text-gray-900">Fahad Vidjar Apriza</h1>
                <p class="text-xl font-medium text-indigo-600 mt-1">Mahasiswa Application Software Engineering</p>
                <div class="mt-4 flex flex-wrap justify-center sm:justify-start gap-x-6 gap-y-2 text-gray-600">
                    <a href="mailto:fahad.vidjar@example.com" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        <span>fahad.vidjar@example.com</span>
                    </a>
                    <a href="#" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        <span>+62 812-3456-7890</span>
                    </a>
                </div>
            </div>
        </header>

        <main class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Kolom Kiri -->
            <div class="md:col-span-2">
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-gray-200 pb-2">Tentang Saya</h2>
                    <p class="mt-4 text-gray-700 leading-relaxed">
                        Saya seorang mahasiswa Application Software Engineering di LP3I Karawang dengan minat besar pada pengembangan perangkat lunak dan teknologi. 
                        Sejak SMP saya tertarik dengan dunia teknologi, lalu melanjutkan pendidikan di SMK jurusan TKJ dan sekarang memperdalam pemrograman aplikasi. 
                        Fokus saya saat ini adalah menguasai PHP dan JavaScript untuk pengembangan web.
                    </p>
                </section>

                <section class="mt-10">
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-gray-200 pb-2">Proyek Pilihan</h2>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-900">
                            <a href="#" class="hover:text-indigo-600 hover:underline">Website Streaming Anime (Proyek Pribadi)</a>
                        </h3>
                        <p class="mt-2 text-gray-700">
                            Membangun platform streaming anime modern menggunakan **Next.js** (framework React) dan **Tailwind CSS**. 
                            Aplikasi ini mengonsumsi data secara dinamis dari API publik (seperti Jikan API) dan memanfaatkan fitur Next.js seperti Server-Side Rendering (SSR) untuk performa yang cepat. 
                            Fitur utama mencakup pencarian, halaman detail, dan daftar episode yang responsif.
                        </p>
                    </div>
                </section>
            </div>

            <!-- Kolom Kanan -->
            <div>
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-gray-200 pb-2">Keahlian</h2>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">Next.js</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">React</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">Tailwind CSS</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">JavaScript</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">PHP</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">HTML & CSS</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">MySQL</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">Problem Solving</span>
                    </div>
                </section>

                <section class="mt-10">
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-gray-200 pb-2">Pendidikan</h2>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-gray-900">D3 - Application Software Engineering</h3>
                        <p class="text-md text-gray-700 italic">Politeknik LP3I Kampus Karawang</p>
                        <p class="text-sm text-gray-500 font-medium">2023 - Sekarang</p>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-900">SMK - Teknik Komputer dan Jaringan</h3>
                        <p class="text-md text-gray-700 italic">SMK Negeri Pertanian Karawang</p>
                        <p class="text-sm text-gray-500 font-medium">2019 - 2022</p>
                    </div>
                </section>

                <section class="mt-10">
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-gray-200 pb-2">Bahasa</h2>
                    <div class="mt-4 space-y-2">
                        <p class="text-gray-700"><span class="font-semibold">Bahasa Indonesia:</span> Lisan & Tulisan (Native)</p>
                        <p class="text-gray-700"><span class="font-semibold">Bahasa Inggris:</span> Cukup untuk membaca dokumentasi teknis dan mengikuti tutorial online.</p>
                    </div>
                </section>
            </div>
        </main>
    </div>

</body>
</x-app-layout>
