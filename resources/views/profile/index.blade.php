@extends('layouts.app')

@section('title')
    {{ $user->name }} | Profile
@endsection

@section('content')
    <main id="main" class="h-screen">
        <div id="profile-card" class="p-16 lg:pl-24">
            <div class="p-8 bg-white rounded-lg dark:bg-gray-800 shadow mt-24">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="grid grid-cols-2 lg:grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                        <div>
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
                        <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center dark:text-white text-indigo-500">
                            <img class="rounded-full " src="{{ asset('storage/uploads/profiles/' . "profile.jpg") }}" alt="profile">
                        </div>
                    </div>
                    <div class="lg:space-x-8 py-1 flex justify-center lg:justify-between mt-32 md:mt-0 md:justify-center">
                        <a href="{{ route('profile.edit')}}">
                            <button id="editprofile" class="text-black bg-gray-300 dark:bg-gray-700 dark:text-white py- px-4 uppercase rounded bg-primary-100 hover:bg-primary-200 shadow hover:shadow-lg font-poppins font-bold transition transform hover:-translate-y-0.5">
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
        <div id="about_section" class="grid grid-cols-1 lg:grid-cols-3 gap-3">
            <div id="Skills" class="p-16 pt-0 pl-24">
                <div id="skills" class=" p-8 bg-white rounded-lg  dark:bg-gray-800 shadow ">
                    <h1 class="font-poppins tracking-widest text-gray-800 mb-10 text-2xl dark:text-white">My Skills</h1>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-3 ">
                        <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                        <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                        <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                        <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                        <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                        <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">skill</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
