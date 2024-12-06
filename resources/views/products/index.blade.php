<x-app-layout>
    <div class="py-12">
        @if(session()->has('success'))
            <x-alert message="{{session('success')}}"/>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="item-center flex justify-between">
                        <h2 class="font-semibold text-xl">Daftar Product</h2>
                        <a href="{{route('products.create')}}">
                            <button class="bg-gray-100 px-10 py-2  rounded-md font-semibold">Tambah</button>

                        </a>

                    </div>
                    <div class="grid md:grid-cols-3 grid-cols-1 mt-4 gap-6">
                        @foreach($products as $product)
                        <div>
                            <img src="{{url('storage/' . $product->foto)}}" class="h-96 w-full object-cover" />
                            <div class="my-2">
                                <p class="text-xl font-light">{{$product->nama}}</p>
                                <p class="text-gray-400 ">Rp . {{number_format($product->harga)}}</p>
                            </div>
                            <a href="{{route('products.edit', $product)}}">
                            <button class="bg-gray-100 px-10 py-2 w-full rounded-md font-semibold">Edit</button>
                            </a>
                        </div>
                        @endforeach

                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>