@extends('layouts.app')

@section('title')
    {{ $announcement->title }}
@endsection

@section('content')
    <!-- Content Section -->
    <section class="bg-white dark:bg-gray-900 pt-24">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:flex lg:flex-col lg:py-16 lg:px-6">
            <div class="font-light w-full text-center sm:text-lg dark:text-gray-400">
                <h2 class="mb-8 text-4xl tracking-wider font-salsa font-extrabold text-gray-900 dark:text-white">
                    {{ $announcement->title }}
                </h2>
                <!-- <p class="text-black dark:text-gray-500 ">Somthing Something</p> -->
                <p class="mt-8 text-left text-gray-500 dark:text-gray-700 mb-4">by :{{ $announcement->company->name }}
                    <br>
                    at {{ $announcement->created_at }}
                <p>
            </div>
            <img src="{{ asset('storage/uploads/jobs_image/' . $announcement->image) }}" alt="{{ $announcement->title }} Logo "
                class="rounded-lg">
            <div class="mt-2 text-black dark:text-gray-300">
                <p class="mb-4">{{ $announcement->description }} </p>
            </div>
            <div class="flex flex-row">
                @foreach ($announcement->skills as $skill)
                    <span
                        class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">{{ $skill->name }}</span>
                @endforeach
            </div>
            <form action="{{ route('announcements.apply', ['announcement' => $announcement->id])}}" method="POST"> 
                @csrf
                @method('POST')
                <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
                <button 
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-l px-5 py-2.5 me-2 mb-2 dark:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none dark:focus:ring-blue-800">Apply Now
                </button>
            </form>
        </div>
    </section>
@endsection
