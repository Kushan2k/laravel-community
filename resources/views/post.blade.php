@extends('layout')

@section('content')

<main class="mt-10  flex-col px-5">
    <a href="/" class="rounded p-2 bg-slate-500 text-white ">Back</a>
    <div class="mb-4 mt-3 md:mb-0 w-full  mx-auto flex  items-center justify-items-center flex-col">
        <div class=" lg:px-0">
            <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
            {{$post->title}}.
            </h2>
            <a 
            href="#"
            class="py-2 text-green-700 inline-flex items-center justify-center mb-2"
            >
            @unless (!$post->tags)
                @foreach (explode(",",$post->tags) as $tag)
                    <p class="m-1 py-1 px-3 bg-blue-800 text-white rounded-full hover:cursor-pointer 
                    ">{{$tag}}</p>
                @endforeach
                
            @endunless
            </a>
            <p>{{$post->created_at}}</p>
        </div>

        <img src="{{asset($post->img)}}" style="height: 28em;"/>
    </div>

    <div class="flex items-center justify-around flex-col w-full mb-20 lg:space-x-12 ">

        <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
            <p class="pb-6">
            {{$post->content}}
            </p>

        </div>

        <div class="w-full m-auto mt-12 max-w-screen-sm flex justify-around items-center">
            <div class="p-4 border-t border-b md:border md:rounded">
                <div class="flex py-2">
                    <img src="https://randomuser.me/api/portraits/men/97.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                    <div>
                    <p class="font-semibold text-gray-700 text-sm"> Mike Sullivan </p>
                    <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                </div>
            </div>
            <p class="text-gray-700 py-3">
                Mike writes about technology
                Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it.
            </p>
            <button class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                Follow 
                <i class='bx bx-user-plus ml-2' ></i>
            </button>
            </div>
        </div>

    </div>
</main>

@endsection
