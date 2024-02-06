@extends('layouts.app')

@section('title')
    CareerYOUCODE
@endsection

@section('content')
    <main>
        {{-- {{ Auth::check() ? 'Authenticated' : 'Not Authenticated' }} --}}
        <section class="bg-gray-300 dark:bg-gray-900 pt-24">
            <div
                class="grid max-w-screen-xl px-4 py-8 mx-auto justify-center items-center align-middle lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="w-fit place-self-center lg:mt-0 md:hidden lg:col-span-5 lg:flex">
                    <img src="/images/Youcode.png" alt="YouCode">
                </div>
                <div class="mr-auto place-self-center text-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mb-4 text-4xl  tracking-tight font-salsa leading-none md:text-5xl xl:text-6xl dark:text-white">
                        Job Dating Event</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        Welcome to Job Dating Event, the ultimate platform bridging the gap between YOUCODE and your dream
                        career! Unleash the power of connections at our exclusive Job Dating event. Connect, network, and
                        pave the way for your future success. Swipe right on your dream career with CareerYoucode!</p>
                    @auth
                        <a href="discover"
                            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-800  rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Discover Announcements
                        </a>
                    @else
                        <a href="discover"
                            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-800  rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Discover Announcements
                        </a>
                        <a href="register"
                            class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-gray-800 dark:text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Get started
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    @endauth
                </div>
            </div>
        </section>

        <section class="bg-white dark:bg-gray-800">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 ">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-wider font-bold text-gray-900 dark:text-white">Explore the last posted
                        Opportunities
                    </h2>
                </div>
                @if ($announcements->count() > 0)
                    <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($announcements as $announcement)
                        <div
                            class="max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-900 dark:border-gray-700">
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{$announcement->title}} </h5>
                                <div class="">
                                    <p
                                        class="line-clamp-1 p-3 rounded overflow-hidden font-normal text-gray-700  dark:text-gray-400">
                                        {{$announcement->description}}
                                    </p>
                                </div>
                                <a href="{{ route('announcements.show', $announcement->id) }}">
                                    <button type="submit" href="singlepage"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9">
                                        </svg>
                                    </button>
                                </a>
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
    </main>
@endsection
