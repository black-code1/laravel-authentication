@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
        <div>
            <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Latest</option>
                <option>Last Week</option>
            </select>
        </div>
    </div>

    <x-alert/>

    <x-test/>

    @foreach ($posts as $post)

        <x-newFirstComponent name="coderInProgress" :title="$post->title" class="text-green-500">
            {{-- <div>Hello friends</div> --}}
            <x-slot name="subtitle">Mon super sous-titre</x-slot>
        </x-newFirstComponent>

    <div class="mt-6">
        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ $post->created_at->format('d/m/Y') }}</span> <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a></div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{ $post->title }}</a>
                <p class="mt-2 text-gray-600">{{ $post->content }}</p>
            </div>
             <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                    <div>
                        <a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZmlsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                            <h1 class="font-bold text-gray-700 hover:underline">{{ $post->author }}</h1>
                        </a>
                    </div>
            </div>
        </div>
    </div>

    @endforeach

    <div class="mt-8">
        <div class="flex">
            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">previous</a>
            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">1</a>

        </div>
    </div>
@endsection

