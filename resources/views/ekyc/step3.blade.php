<x-app-layout>
    <div class="max-w-xl mx-auto mt-8 mb-8 bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">
            E-KYC - Langkah 3: Data Pendidikan dan Upload Dokumen
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

        <form action="{{ route('ekyc.step3.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Asal SD --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Asal Sekolah SD</label>
                <input type="text" name="asal_sd" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('asal_sd', $data->asal_sd) }}">
            </div>
            {{-- Asal SMP --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Asal Sekolah SMP</label>
                <input type="text" name="asal_smp" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('asal_smp', $data->asal_smp) }}">
            </div>
            {{-- Asal SMA --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Asal Sekolah SMA</label>
                <input type="text" name="asal_sma" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('asal_sma', $data->asal_sma) }}">
            </div>
            {{-- Upload KK --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Upload Kartu Keluarga (KK)</label>
                <input type="file" name="file_kk" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_kk)
                    <p class="text-sm text-gray-600 mt-1">File saat ini :</p>
                    <a href="{{ asset('storage/'.$data->file_kk) }}" class="text-blue-600 underline">Lihat KK</a>
                @endif
            </div>
            {{-- Upload Ijazah --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Upload Ijazah Terakhir</label>
                <input type="file" name="file_ijazah" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_ijazah)
                    <p class="text-sm text-gray-600 mt-1">File saat ini :</p>
                    <a href="{{ asset('storage/'.$data->file_ijazah) }}" class="text-blue-600 underline">Lihat Ijazah</a>
                @endif
            </div>
            <div class="flex justify-between items-center mt-4">
                <a href="{{ route('ekyc.step2') }}" class="text-sm text-gray-500 hover:text-gray-700">Kembali ke Step 2</a>
                
                @if ($data && $data->status === 'submitted')
                <a href="{{ route('ekyc.step4') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Next</a>
                @else
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Simpan & Lanjut Step 4
                </button>
                @endif
            </div>
        </form>
    </div>
</x-app-layout>