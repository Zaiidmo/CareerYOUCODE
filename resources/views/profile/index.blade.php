@extends('layouts.app')

@section('title')
    {{ $user->name }} | Profile
@endsection

@section('content')
    <main>
        <!-- Header -->
        <div id="profile-card" class="p-16 lg:pl-24">
            <div class="p-8 bg-white rounded-lg dark:bg-gray-800 shadow mt-24">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="grid grid-cols-2 lg:grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                        <div class="col-span-2 lg:col-span-1">
                            <p class="font-bold dark:text-white text-gray-700 text-xl">0</p>
                            <p class="dark:text-white text-gray-400">Applications</p>
                        </div>
                        <div>
                            <p class="font-bold dark:text-white text-gray-700 text-xl">0</p>
                            <p class="dark:text-white text-gray-400">Approved</p>
                        </div>
                        <div>
                            <p class="font-bold dark:text-white text-gray-700 text-xl">0</p>
                            <p class=" dark:text-white text-gray-400">Denied</p>
                        </div>
                    </div>
                    <div class="relative justify-center">
                        <div
                            class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center dark:text-white text-indigo-500">
                            <img class="rounded-full " src="{{ asset('storage/uploads/profiles/' . 'profile.jpg') }}"
                                alt="profile">
                        </div>
                    </div>
                    <div class="lg:space-x-8 py-1 flex justify-center lg:justify-between mt-32 md:mt-0 md:justify-center">
                        <a href="{{ route('profile.edit') }}">
                            <button id="editprofile"
                                class="text-black bg-gray-300 dark:bg-gray-700 dark:text-white py- px-4 uppercase rounded bg-primary-100 hover:bg-primary-200 shadow hover:shadow-lg font-poppins font-bold transition transform hover:-translate-y-0.5">
                                Edit Profile
                            </button>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <h1 class="font-bold dark:text-white text-gray-700 text-2xl">{{ $user->name }}</h1>
                    <p class="dark:text-white text-gray-400">{{ $user->email }}</p>
                </div>
            </div>
        </div>
        <!-- Main -->
        <div id="about_section" class="grid grid-cols-1 lg:grid-cols-3 gap-3">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 col-span-3">
                <div class="flex flex-col gap-4 px-16 lg:col-span-1 lg:pl-24 lg:pr-16 lg:pt-0">
                    <div id="skills" class="">
                        <div id="skills" class="p-8  bg-white rounded-lg dark:bg-gray-800 shadow ">
                            <div class="mb-10 flex justify-between items-center">
                                <h1
                                    class="font-semibold font-poppins tracking-widest text-gray-800 text-2xl dark:text-white">
                                    My
                                    Skills
                                </h1>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" class="text-gray-800 dark:text-white">
                                        <path fill="currentColor"
                                            d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="grid grid-cols-3 md:grid-cols-5 gap-3 ">
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                            </div>
                        </div>
                    </div>
                    <div id="contact" class="">
                        <div id="contact" class="p-8  bg-white rounded-lg dark:bg-gray-800 shadow ">
                            <div class="mb-10 flex justify-between items-center">
                                <h1
                                    class="font-semibold font-poppins tracking-widest text-gray-800 text-2xl dark:text-white">
                                    Contact
                                </h1>
                            </div>
                            <div class="flex justify-center items-center gap-6 my-6">
                                <a class="text-gray-700 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-700"
                                    aria-label="Visit TrendyMinds LinkedIn" href="" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                        <path fill="currentColor"
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-700"
                                    aria-label="Visit TrendyMinds Facebook" href="" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                                        <path fill="currentColor"
                                            d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-700"
                                    aria-label="Visit TrendyMinds Instagram" href="" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                                        <path fill="currentColor"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-700 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-700"
                                    aria-label="Visit TrendyMinds Twitter" href="" target="_blank">
                                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="about" class="px-16 h-full col-span-2 lg:pl-0 lg:pr-16 lg:pt-0 ">
                    <div id="about" class="p-8 pb-0 h-full bg-white rounded-lg dark:bg-gray-800 shadow ">
                        <h1 class="font-semibold font-poppins tracking-widest text-gray-800 text-2xl dark:text-white">About
                            Me
                        </h1>
                        <div class="col-span-2 lg:px-16 lg:p-16 lg:pt-4 lg:pb-0 lg:pl-24 flex flex-col gap-3">
                            <div
                                class="py-1 sm:py-5 flex flex-row justify-between sm:px-6 border-b dark:border-gray-400 border-black">
                                <h4 class="text-sm ml-8 font-medium text-gray-500 dark:text-gray-300">
                                    Full name
                                </h4>
                                <p class="mt-1 text-sm mr-8 text-gray-900 dark:text-gray-400 sm:mt-0 sm:col-span-2">
                                    John Doe
                                </p>
                            </div>
                            <div
                                class="py-1 sm:py-5 flex flex-row justify-between sm:px-6 border-b dark:border-gray-400 border-black">
                                <h4 class="text-sm ml-8 font-medium text-gray-500 dark:text-gray-300">
                                    Email address
                                </h4>
                                <p class="mt-1 text-sm mr-8 text-gray-900 dark:text-gray-400 sm:mt-0 sm:col-span-2">
                                    johndoe@example.com
                                </p>
                            </div>
                            <div
                                class="py-1 sm:py-5 flex flex-row justify-between sm:px-6 border-b dark:border-gray-400 border-black">
                                <h4 class="text-sm ml-8 font-medium text-gray-500 dark:text-gray-300">
                                    Phone number
                                </h4>
                                <p class="mt-1 text-sm mr-8 text-gray-900 dark:text-gray-400 sm:mt-0 sm:col-span-2">
                                    (123) 456-7890
                                </p>
                            </div>
                            <div class="py-1 sm:py-5 flex flex-row justify-between sm:px-6 ">
                                <h4 class="text-sm ml-8 font-medium text-gray-500 dark:text-gray-300">
                                    Address
                                </h4>
                                <p class="mt-1 text-sm mr-8 text-gray-900 dark:text-gray-400 sm:mt-0 sm:col-span-2">
                                    123 Main St,
                                    Anytown, USA 12345
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="applications" class="px-16 lg:col-span-3 lg:pl-24 mt-16 lg:pt-0">
                <div id="applications" class="p-8  bg-white rounded-lg dark:bg-gray-800 shadow ">
                    <div class="mb-10 flex justify-between items-center">
                        <h1 class="font-semibold font-poppins tracking-widest text-gray-800 text-2xl dark:text-white">My
                            Applications
                        </h1>
                    </div>
                    <div id="application" class="w-full md:w-80 rounded-xl mb-5 bg-gray-200 dark:bg-gray-900 shadow-2xl ">
                        <div class="h-48 w-full rounded-t-xl flex flex-col justify-between p-4 bg-cover  bg-center"
                            style="background-image: url('https://images.pexels.com/photos/1592384/pexels-photo-1592384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                        </div>
                        <div class="p-4 rounded-b-xl ">
                            <div class="flex flex-col items-center justify-center">
                                <h1 class="text-black dark:text-white font-medium">Full Stack Web dev</h1>
                                <p class="text-black dark:text-white text-sm my-1">ShellBoxes</p>
                                <a class="self-end mr-4 text-black dark:text-white">
                                    <button>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="4" fill="currentColor" />
                                            <path fill="currentColor"
                                                d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68M16 22.5a6.5 6.5 0 1 1 6.5-6.5a6.51 6.51 0 0 1-6.5 6.5" />
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
