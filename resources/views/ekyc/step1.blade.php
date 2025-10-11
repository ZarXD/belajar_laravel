<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-8">
        <h2 class="text-xl font-semibold mb-4">E-KYC - Langkah 1: Data Pribadi</h2>

        @if (session('success'))
            
        @endif

        @if ($errors->any())
            
        @endif

        <form action="{{ route('ekyc.storeStep1') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full border-gray-300 rounded-md p-2" value="{{ old('nama', $ekyc->nama ?? '') }}">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">NIK</label>
                <input type="text" name="nik" class="w-full border-gray-300 rounded-md p-2" value="{{ old('nama', $ekyc->nik ?? '') }}">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="w-full border-gray-300 rounded-md p-2" value="{{ old('nama', $ekyc->tanggal_lahir ?? '') }}">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Alamat</label>
                <textarea name="alamat" rows="3" class="w-full border-gray-300 rounded-md p-2">{{ old('alamat', $ekyc->alamat ?? '') }}</textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Lanjut Step 2
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
