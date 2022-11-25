@extends('layout')
@section('content')

<div class="py-10 max-w-5xl mx-auto bg-white rounded-t-md divide-y">
    <div class="px-10 pb-2 flex justify-between">
        <h1 class="text-xl font-bold">Halaman CRUD</h1>
        <a class="text-lg text-blue-500" href="{{ route('crud.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>                           
        </a>
    </div>
    <div class="flex-1 px-10 py-10">
        <table class="min-w-full shadow-md">
            <thead class="">
                <tr class="bg-gray-50">
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm" width="30">No</th>
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">Judul</th>
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">Konten</th>
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($konten as $index => $item)
                    <tr @class([
                        $index%2 == 1 ? 'bg-gray-50' : '',
                        'hover:bg-amber-50'
                    ])>
                        <td class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">
                            {{ $index + 1 }}
                        </td>
                        <td class="border text-left px-3 py-2 leading-4 tracking-wider text-sm whitespace-nowrap">
                            {{ $item->judul }}
                        </td>
                        <td class="border text-left px-3 py-2 leading-4 tracking-wider text-sm">
                            {{ $item->konten }}
                        </td>
                        <td class="border text-center px-3 py-2 leading-4 tracking-wider text-sm whitespace-nowrap">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('crud.edit', $item->id) }}" class="hover:text-teal-700 text-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>

                                <form 
                                    class="hover:text-red-700 text-red-500"
                                    action="{{ route('crud.delete', $item->id) }}" 
                                    method="post"
                                >
                                    @csrf
                                    @method('delete')
                                    <button type="submit">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-gray-50">
                        <td class="border text-center px-3 py-2 leading-4 tracking-wider" colspan="12">
                            Tidak Ada Konten
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection