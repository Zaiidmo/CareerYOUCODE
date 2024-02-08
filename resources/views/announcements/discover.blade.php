@extends('layouts.app')

@section('title')
    Announcements
@endsection

@section('content')
    <main>
        <section class=" pt-24">
            <div class="">
                <section>
                    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                        <h1
                            class="mb-4 text-3xl lg:text-4xl font-salsa tracking-wider font-bold text-gray-900 dark:text-white">
                            Explore All Available Announcements</h1>
                    </div>
                    <!-- Search Section -->
                    <form class="flex justify-center mb-8">
                        <div class="relative w-1/2">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="searchinput"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray -500"
                                placeholder="Looking for something special ? ...">
                        </div>
                    </form>
                </section>
                <section class="bg-white dark:bg-gray-800">
                    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 ">
                        <div class="flex flex-col mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                            <h2 class="mb-4 text-4xl tracking-wider font-bold text-gray-900 dark:text-white">Recommended For
                                You
                            </h2>
                            <span
                                class=" text-gray-600 dark:text-gray-400 inline-block py-1 text-xs font-semibold tracking-wide text-primary-600 dark:text-primary-500">
                                Based on your skills</span>
                        </div>
                        @if ($recommendedAnnouncements->count() > 0)
                            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 lg:grid-cols-3 ">
                                @foreach ($recommendedAnnouncements as $recommend)
                                    <div
                                        class="flex flex-col justify-center max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-900 dark:border-gray-700">
                                        <div class="text-center">
                                            <div class="h-48 w-full rounded-t-xl flex flex-col justify-between bg-cover bg-center"
                                                style="background-image: url('{{ asset('storage/uploads/jobs_image/' . $recommend->image) }}')">
                                            </div>
                                            <div class="flex flex-col mt-4 mb-8">
                                                <h5
                                                    class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                    {{ $recommend->title }} </h5>
                                                <span
                                                    class=" text-gray-700 dark:text-gray-400 inline-block py-1 text-xs font-semibold tracking-wide text-primary-600 dark:text-primary-500">
                                                    {{ $recommend->company->name }}</span>
                                            </div>
                                            <a href="{{ route('announcements.show', $recommend->id) }}">
                                                <button type="submit"
                                                    class="inline-flex mb-4 self-end items-center px-3 py-2 text-sm font-medium text-center dark:text-white text-black rounded-lg hover:bg-blue-800 dark:hover:bg-blue-700 hover:text-white">
                                                    Read more
                                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M1 5h12m0 0L9 1m4 4L9 9">
                                                    </svg>
                                                </button>
                                            </a>
                                            {{-- <div
                                                class="flex flex-wrap justify-center border-y dark:border-gray-500 border-gray-400 mt-4 w-full h-fit">
                                                @foreach ($recommend->skills as $skill)
                                                    <span>
                                                        {{ $skill->name }}
                                                    <span>
                                                @endforeach
                                            </div> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h3 class="mt-4 text-2xl tracking-wider font-bold text-gray-900 dark:text-white">
                                No Announcements Available
                            </h3>
                        @endif
                    </div>
                </section>
                <section class="bg-gray-300 dark:bg-gray-900">
                    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 ">
                        <div class="flex flex-col mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                            <h2 class="mb-4 text-4xl tracking-wider font-bold text-gray-900 dark:text-white">Here are all the Available Opportunities
                            </h2>
                        </div>
                        <div id="announcements-container" class="grid gap-8 lg:grid-cols-2">
                            @foreach ($announcements as $announcement)
                                <article
                                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                            href="{{ route('announcements.show', $announcement->id) }}">{{ $announcement->title }}
                                        </a></h2>
                                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                        {{ $announcement->description }}
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
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
