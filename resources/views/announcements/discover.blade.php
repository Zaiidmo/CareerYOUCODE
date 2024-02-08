@extends('layouts.app')

@section('title')
    Announcements
@endsection

@section('content')
    <main>
        <section class=" pt-24">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <section>
                    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                        <h1 class="mb-4 text-3xl lg:text-4xl font-salsa tracking-wider font-bold text-gray-900 dark:text-white">
                            Explore All Available Announcements</h1>
                    </div>
                    <!-- Search Section -->
                    <form class="flex justify-center mb-8">
                        <div class="relative w-1/2">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="searchinput"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray -500"
                                placeholder="Looking for something special ? ...">
                        </div>
                    </form>
                </section>
                <section>
                    <div class="flex flex-col align-middle justify-center mb-4">
                        <h2 class="text-xl lg:text-2xl font-salsa tracking-wider font-semibold text-gray-900 dark:text-white">
                            Recommended For You</h2>
                        <p class="text-sm lg:text-xl font-poppins tracking-wide font-medium text-gray-600 dark:text-gray-700">
                            Based on your skills</p>
                    </div>
                    <div id="recommendations-container" class="grid gap-8 lg:grid-cols-2">
                        @if ($recommendedAnnouncements->isEmpty())
                            <p>No recommendations found.</p>
                        @else
                            @foreach ($recommendedAnnouncements as $recommend)
                                <article
                                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                            href="{{ route('announcements.show', $recommend->id) }}">{{ $recommend->title }}
                                        </a></h2>
                                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $recommend->description }}
                                    </p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ asset('storage/uploads/logos/' . $recommend->company->logo) }}"
                                                alt="{{ $recommend->company->name }} Logo "
                                                class="object-cover w-8 h-8 rounded-full mr-2">
                                            <span class="font-medium dark:text-white">
                                                {{ $recommend->company->name }}
                                            </span>
                                        </div>
                                        <a href="{{ route('announcements.show', $recommend->id) }}">
                                            <button type="submit" href="singlepage"
                                                class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                                Read more
                                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        @endif
                    </div>
                </section>
                <section>
                    <div class="flex flex-col align-middle justify-center mb-4 mt-8">
                        <h2 class="text-xl lg:text-2xl font-salsa tracking-wider font-semibold text-gray-900 dark:text-white">
                            Discover Them All</h2>
                    </div>
                    <div id="announcements-container" class="grid gap-8 lg:grid-cols-2">
                        @foreach ($announcements as $announcement)
                            <article
                                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                        href="{{ route('announcements.show', $announcement->id) }}">{{ $announcement->title }}
                                    </a></h2>
                                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $announcement->description }}
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        <img src="{{ asset('storage/uploads/logos/' . $announcement->company->logo) }}"
                                            alt="{{ $announcement->company->name }} Logo "
                                            class="object-cover w-8 h-8 rounded-full mr-2">
                                        <span class="font-medium dark:text-white">
                                            {{ $announcement->company->name }}
                                        </span>
                                    </div>
                                    <a href="{{ route('announcements.show', $announcement->id) }}">
                                        <button type="submit" href="singlepage"
                                            class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                            Read more
                                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </article>
                        @endforeach
    
                    </div>
                </section
               >
            </div>
        </section>
    </main>
@endsection
