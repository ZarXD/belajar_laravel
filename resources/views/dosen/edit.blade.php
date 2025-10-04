<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Dosen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow  sm:rounded-lg p-6">
                <form method="POST" action="{{ route('dosen.update', $dsn->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700">NID</label>
                        <input type="text" name="nid" value="{{ old('nid', $dsn->nid) }}" class="border rounded w-full px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama', $dsn->nama) }}" class="border rounded w-full px-3 py-2">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-amber-600 text-white rounded">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>