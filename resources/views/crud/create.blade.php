@extends('layout')
@section('content')

<div class="max-w-5xl mx-auto">
    <form 
        action="{{ route('crud.store') }}" 
        method="post"
        class="flex flex-col gap-5 bg-gray-300 p-10"
    >
    @csrf
        <div>
            <label for="judul">Judul</label>
            <input 
                type="text" 
                class="flex w-full rounded-md p-4"
                name="judul"
                id="judul"
            >

        </div>
        <div>
            <label for="konten">Konten</label>
            <textarea 
                class="flex w-full rounded-md p-4"
                name="konten" 
                id="konten" 
                cols="30" 
                rows="10"
            ></textarea>

        </div>
        <button 
            class="bg-green-500 hover:bg-green-600 px-5 py-2 rounded-md text-white" 
            type="submit"
        >Simpan</button>
    </form>
</div>

@endsection
