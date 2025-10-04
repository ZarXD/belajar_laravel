<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Matakuliah
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow  sm:rounded-lg p-6">
                <form method="POST" action="{{ route('matakuliah.update', $mk->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Matakuliah</label>
                        <input type="text" name="namaMatkul" value="{{ old('namaMatkul', $mk->namaMatkul) }}" class="border rounded w-full px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Deskripsi</label>
                        <input type="text" name="deskripsi" value="{{ old('deskripsi', $mk->deskripsi) }}" class="border rounded w-full px-3 py-2">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-amber-600 text-white rounded">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>