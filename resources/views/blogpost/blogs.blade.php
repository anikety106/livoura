@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
        <article
            class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            @foreach ($posts as $post)
                <header class=" not-format">

                    <address class="flex items-center not-italic">
                        <div class="inline-flex items-center mr-3 text-sm pt-8 mt-6 text-gray-900 dark:text-white">
                            <span class="relative flex h-15 w-15 lg:h-20 lg:w-20  m-2 shrink-0 overflow-hidden rounded-lg">
                                <span class="flex h-full w-full items-center justify-center text-5xl font-bold rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white uppercase">

                                </span>
                            </span>
                            <div>
                                <a href="#" rel="author" class="text-sm  font-bold text-gray-900 dark:text-black">
                                    {{ $post->author_name }}
                                </a>
                                <p class=" text-sm text-base text-gray-500 dark:text-gray-900">{{ $post->author_position }}
                                </p>
                                <p class=" text-sm text-base text-gray-500 dark:text-gray-900">
                                    {{ $post->created_at->format('M. j, Y') }}</p>
                            </div>
                        </div>
                    </address>


                </header>
                <p class="mb-4 text-xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-black">
                    {{ $post->title }}
                </p>

                <figure>
                    @if ($post->image_url)
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                    @endif
                </figure>

                <p class="lead text-lg lg:text-xl text-gray-600">{{ $post->description }}</p>
            @endforeach
        </article>
    </div>
@endsection
