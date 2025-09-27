<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen p-4">

    <!-- Kontainer Kartu Nama -->
    <div class="business-card bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-6 flex flex-col justify-between transition-transform transform hover:scale-105">
        
        <!-- Bagian Atas: Foto, Nama, dan Jabatan -->
        <div class="flex items-center space-x-4">
            <img class="w-16 h-16 rounded-full object-cover border-2 border-blue-500 dark:border-blue-400" src="https://placehold.co/100x100/E2E8F0/4A5568?text=Foto" alt="Foto Profil">
            <div>
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Nama Anda</h2>
                <p class="text-sm font-medium text-blue-600 dark:text-blue-400">Jabatan / Posisi Anda</p>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <div class="border-t border-gray-200 dark:border-gray-700 my-3"></div>

        <!-- Bagian Bawah: Info Kontak -->
        <div class="space-y-2 text-xs">
            <!-- Email -->
            <div class="flex items-center text-gray-600 dark:text-gray-300">
                <svg class="w-4 h-4 mr-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <span>email.anda@contoh.com</span>
            </div>
            <!-- Telepon -->
            <div class="flex items-center text-gray-600 dark:text-gray-300">
                <svg class="w-4 h-4 mr-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.211-.998-.552-1.348l-5.48-5.48a.75.75 0 00-1.06 0l-1.06 1.06c-.293.293-.768.293-1.06 0l-2.122-2.122a.75.75 0 00-1.061 0l-1.06 1.06a.75.75 0 000 1.06l5.48 5.48a.75.75 0 001.06 0l1.06-1.06" />
                </svg>
                <span>+62 812-3456-7890</span>
            </div>
            <!-- Website -->
            <div class="flex items-center text-gray-600 dark:text-gray-300">
                <svg class="w-4 h-4 mr-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0012 13.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0021 12c0 .778-.099 1.533-.284 2.253M12 21a9.004 9.004 0 008.716-6.747" />
                </svg>
                <span>www.websiteanda.com</span>
            </div>
        </div>

    </div>

</body>
</x-app-layout>
