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
                <textarea name="alamatDomisili" rows="3" class="w-full border-gray-300 rounded-md p-2">{{ old('alamatDomisili', $data->alamatDomisili) }}</textarea>
            </div>
            
            {{-- Provinsi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Provinsi</label>
                <select name="provinsi" id="provinsi" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Provinsi --</option> 
                    @foreach($provinsiList as $prov) 
                        <option value="{{ $prov }}" {{ (old('provinsi', $data->provinsi ?? '') == $prov) ? 'selected' : '' }}>{{ $prov }}</option> 
                    @endforeach
                </select>
            </div>
            
            {{-- Kota --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kota</label>
                <select name="kota" id="kota" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Kota --</option> 
                    @foreach($kotaList as $kota) {{-- Inisialisasi $kotaList ada di controller --}}
                        <option value="{{ $kota }}" {{ (old('kota', $data->kota ?? '') == $kota) ? 'selected' : '' }}>{{ $kota }}</option> 
                    @endforeach
                </select>
            </div>
            
            {{-- Kecamatan --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
                <select name="kecamatan" id="kecamatan" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Kecamatan --</option>
                    @foreach($kecamatanList as $kec) {{-- Inisialisasi $kecamatanList ada di controller --}}
                        <option value="{{ $kec }}" {{ (old('kecamatan', $data->kecamatan ?? '') == $kec) ? 'selected' : '' }}>{{ $kec }}</option> 
                    @endforeach
                </select>
            </div>

            {{-- Kode Pos --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kode Pos</label>
                <input type="number" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $data->kode_pos ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Ibu kandung --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Ibu Kandung</label>
                <input type="text" name="nama_ibu_kandung" value="{{ old('nama_ibu_kandung', $data->nama_ibu_kandung) }}" class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Sumber Informasi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Sumber Informasi</label>
                <select name="referensi_sumber" class="border-gray-300 rounded-md w-full">
                    <option value="">-- Pilih Sumber --</option>
                    <option value="Sosial Media" {{ (old('referensi_sumber', $data->referensi_sumber ?? '') == 'Sosial Media') ? 'selected' : '' }}>Sosial Media</option>
                    <option value="Kerabat" {{ (old('referensi_sumber', $data->referensi_sumber ?? '') == 'Kerabat') ? 'selected' : '' }}>Kerabat</option>
                    <option value="Info Kampus" {{ (old('referensi_sumber', $data->referensi_sumber ?? '') == 'Info Kampus') ? 'selected' : '' }}>Info Kampus</option>
                </select>
            </div>

            <div class="flex justify-between items-center mt-4">
                <a href="{{ route('ekyc.step3') }}" class="text-sm text-gray-500 hover:text-gray-700">Kembali ke Step 3</a>
                @if ($data && $data->status === 'submitted')
                <a href="{{ route('ekyc.step5') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Next</a>
                @else
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Simpan
                </button>
                @endif
            </div>
        </form>
    </div>

    {{-- Script Dinamis (Provinsi > Kota > Kecamatan > Kode Pos) --}}
    <script>
        // Ambil semua data alamat dari controller 
        const alamatData = @json($alamatList);
        
        document.getElementById('provinsi').addEventListener('change', function () {
            const prov = this.value;
            const kotaSelect = document.getElementById('kota');
            kotaSelect.innerHTML = '<option value="">-- Pilih Kota --</option>';

            const filteredKota = alamatData.filter(item => item.provinsi === prov).map(item => item.kota);
            const unik = [...new Set(filteredKota)];
            unik.forEach(item => {
                kotaSelect.innerHTML += `<option value="${item}">${item}</option>`;
            });
        })
        document.getElementById('kota').addEventListener('change', function () {
            const kota = this.value;
            const kecSelect = document.getElementById('kecamatan');
            kecSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

            const filteredKec = alamatData.filter(item => item.kota === kota);
            const unik = [...new Set(filteredKec)];
            unik.forEach(item => {
                kecSelect.innerHTML += `<option value="${item.kecamatan}">${item.kecamatan}</option>`;
            });
        })
        document.getElementById('kecamatan').addEventListener('change', function () {
            const kec = this.value;
            const kodeInput = document.getElementById('kode_pos');
            const selected = alamatData.find(item => item.kecamatan === kec);
            kodeInput.value = selected ? selected.kode_pos : '';
        })
        </script>
</x-app-layout>