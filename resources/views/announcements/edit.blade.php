@extends('layouts.app')

@section('title')
    Edit an Announcement
@endsection
@include('layouts.sidebar')
@section('content')
    <main id="main" class="md:h-screen mt-18 md:px-28 px-16 ml-64 ">
        <div aria-hidden="true" class="flex flex-col justify-center px-2 mt-18 lg:px-2 text-gray-900 dark:text-white">
            <h2
                class="pt-36 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
                Edit The Announcement: <br>"{{ $announcement->title }}"
            </h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mt-10 self-center w-1/2">
                <form class="" action="{{ route('announcements.update', $announcement->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title
                                <span class="text-red-500 text-l"> *</span></label>
                            <input type="text" name="title" id="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="{{ $announcement->title }}" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                                <span class="text-red-500 text-l"> *</span></label>
                            <input type="text" name="description" id="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white "
                                placeholder="Announcement description" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="Company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                                <span class="text-red-500 text-l"> *</span></label>
                            <select name="company_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                @foreach ($companies as $company)
                                    <option class="text-gray-900 dark:text-white" value="{{ $company->id }}">
                                        {{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="image"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">image<span
                                    class="text-red-500 text-l"> *</span></label>
                            <input type="file" name="image" id="image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Announcement image">
                        </div>
                        <button type="submit"
                            class="px-5 py-2.5 mt-4 col-span-2 sm:mt-6 text-sm font-medium text-center text-white bg-gray-700 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-gray-800">
                            S U B M I T
                        </button>
                    </div>
                </form>
            </div>
            </form>
        </div>
        </div>
    </main>
@endsection
