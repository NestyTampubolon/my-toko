<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="item-center flex justify-between">
                        <h2 class="font-semibold text-xl">Tambah Product</h2>
                    </div>

                    <div class="mt-4" x-data="{ imageUrl: '/storage/noimage.png' }">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('products.store') }}" class="flex gap-8">
                            @csrf
                            <div class="w-1/2">
                                <img :src="imageUrl" class="rounded-md" />
                            </div>
                            <div class="w-1/2">
                                <div class="mt-4>
                            <x-input-label for=" foto"
                                    :value="__('Foto')" />
                                <x-text-input accept="image/*" id="foto" class="block mt-1 w-full border p-2" type="file"
                                    name="foto" :value="old('foto')" 
                                    @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                                <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                            </div>
                            <div class="mt-4>
                            <x-input-label for=" nama"
                                :value="__('Nama')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                :value="old('nama')" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div class="mt-4>
                                        <x-input-label for=" harga"
                        :value="__('Harga')" />
                    <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga"
                        :value="old('harga')" />
                    <x-input-error :messages="$errors->get('harga')" class="mt-2" />
                </div>
                <div class="mt-4>
                                            <x-input-label for=" deskripsi"
                    :value="__('deskripsi')" />
                <x-text-area id="deskripsi" class="block mt-1 w-full" type="text"
                    name="deskripsi">{{ old('deskripsi') }}</x-text-area>
                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
            </div>
        </div>
        <x-primary-button class="ml-3 mt-4" type="submit">
            {{ __('Submit') }}
        </x-primary-button>

        </form>

    </div>


    </div>
    </div>
    </div>
    </div>
</x-app-layout>
