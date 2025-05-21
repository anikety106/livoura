@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex justify-between  px-4 mx-auto max-w-screen-xl">
        <article
            class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            @foreach ($posts as $post)
                <header class="mb-4 lg:mb-6 not-format">
                    <x-post-author />
                </header>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $post->title }}
                </h1>

                <p class="lead">{{ $post->description }}</p>

                <figure>
                    @if ($post->image_url)
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                    @endif
                </figure>
            @endforeach
        </article>
    </div>
@endsection
