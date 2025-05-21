@php
    $user = auth()->user();
    $date = now();
@endphp

{{-- @if ($user) --}}
    <address class="flex items-center mb-6 not-italic">
        <div class="inline-flex items-center mr-3 text-sm pt-8 text-gray-900 dark:text-white">
            <span class="relative flex h-20 w-20 m-2 shrink-0 overflow-hidden rounded-lg">
                <span
                    class="flex h-full w-full items-center justify-center text-5xl font-bold rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white uppercase">
                    {{ $user->initials() }}
                </span>
            </span>
            <div>
                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">
                    {{ $user->name }}
                </a>
                <p class="text-base text-gray-500 dark:text-gray-400">Founder & CEO of livoura</p>
                <p class="text-base text-gray-500 dark:text-gray-400">
                    <time pubdate datetime="{{ $date->toDateString() }}" title="{{ $date->format('F jS, Y') }}">
                        {{ $date->format('M. j, Y') }}
                    </time>
                </p>
            </div>
        </div>
    </address>
{{-- @endif --}}
