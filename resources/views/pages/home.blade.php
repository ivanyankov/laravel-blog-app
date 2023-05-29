@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Laravel Blog App</h1>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    @foreach ($posts as $post)
        <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">{{$post->created_at}}</time>
                <a href="/posts/{{$post->id}}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$post->title}}</a>
            </div>
            <div class="group relative">
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{Str::limit($post->content, 50)}}</p>
            </div>
        </article>
    @endforeach
    </div>
  </div>
</div>
@endsection