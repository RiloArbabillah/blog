@extends('layout')
@section('content')

<div class="pt-10 max-w-5xl mx-auto bg-white rounded-t-md divide-y">
    <div class="px-10 pb-2">
        <h1 class="text-xl font-bold">Halaman Konten</h1>
    </div>
    <div class="flex flex-col px-10 gap-10 py-10">
        @forelse ($konten as $item)
            <div class="border rounded-md p-5 hover:bg-gray-50">
                <h1 class="text-lg font-semibold">
                    {{ $item->judul }}
                </h1>
                <p class="text-sm mt-4">
                    {{ $item->konten }}
                </p>
            </div>
        @empty
            <div class="border rounded-md p-5">
                <h1 class="text-lg font-semibold">
                    Judul
                </h1>
                <p class="text-sm mt-4">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. In corporis numquam repellendus cum tempora sit architecto voluptates harum eveniet eius officia ullam magnam temporibus quia, obcaecati sapiente nihil repudiandae blanditiis?
                </p>
            </div>
        @endforelse
    </div>
</div>

@endsection