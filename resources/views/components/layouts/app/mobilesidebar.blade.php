<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-white">
    <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')" class="grid">
                {{-- <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('blogpost')" :current="request()->routeIs('blogpost')" wire:navigate>{{ __('Blogpost') }}</flux:navlist.item>
                    <flux:navlist.item icon="home" :href="route('categories')" :current="request()->routeIs('categories')" wire:navigate>{{ __('Category') }}</flux:navlist.item> --}}
            </flux:navlist.group>
        </flux:navlist>
        <flux:spacer />



        <!-- Desktop User Menu -->
        {{--  --}}
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>
