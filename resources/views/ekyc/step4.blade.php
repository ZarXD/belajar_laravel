<x-app-layout>
    <div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">
            E-KYC - Langkah 4: Data Domisili dan Referensi
        </h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                <ul class="list-disc ml-4 text-sm">
                    @foreach ($errors->all as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Alamat Domisili --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Alamat Domisili</label>
                <textarea name="alamat_domisili" rows="3" class="w-full border-gray-300 rounded-md p-2"></textarea>
            </div>
            
            {{-- Provinsi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Provinsi</label>
                <select name="provinsi" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Provinsi --</option>
                    <option value="">Jawa Barat</option>
                    <option value="">Jawa Tengah</option>
                    <option value="">Jawa Timur</option>
                </select>
            </div>
            
            {{-- Kota --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kota</label>
                <select name="kota" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Kota --</option>
                    <option value="">Karawang</option>
                    <option value="">Jepara</option>
                    <option value="">Ngawi</option>
                </select>
            </div>
            
            {{-- Kecamatan --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
                <select name="kecamatan" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Kecamatan --</option>
                    <option value="">Karawang Timur</option>
                    <option value="">Donorojo</option>
                    <option value="">Jogorogo</option>
                </select>
            </div>

            {{-- Kode Pos --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kode Pos</label>
                <input type="number" name="kode_pos" class="mt-1 block w-full border-gray-300 rounded-md" max="6">
            </div>

            {{-- Ibu kandung --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Ibu Kandung</label>
                <input type="text" name="nama_ibu_kandung" class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Sumber Informasi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Sumber Informasi</label>
                <select name="sumber_informasi" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Sumber --</option>
                    <option value="">Sosial Media</option>
                    <option value="">Kerabat</option>
                    <option value="">Info Kampus</option>
                </select>
            </div>

            <div class="flex justify-between items-center mt-4">
                <a href="{{ route('ekyc.step3') }}" class="text-sm text-gray-500 hover:text-gray-700">Kembali ke Step 3</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Simpan & Lanjut Step 4
                </button>
            </div>
        </form>
    </div>
</x-app-layout>