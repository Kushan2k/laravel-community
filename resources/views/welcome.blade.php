@extends('layout')

@section('content')

@unless (!$posts)
    <div class="grid d-flex grid-cols-1 gap-y-3 justify-items-center  lg:grid-cols-2  gap-x-5 gap-3 my-4 p-5">
    @foreach ($posts as $post)

    
        <a href="/post/{{$post->id}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{asset($post->img)}}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ucfirst($post->title)}}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{$post->content}}
                </p>
            </div>
        </a>

        
    @endforeach
    </div>
@endunless


    
@endsection