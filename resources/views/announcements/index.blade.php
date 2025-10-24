@extends('layouts.app')

@section('title')
    Announcements Management
@endsection
@include('layouts.sidebar')
@section('content')
    <main id="main" class="h-full flex flex-col justify-center items-center md:px-28 px-16 ml-64 ">
        <h2 class="text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-black dark:text-gray-400">Available </span>Announcements
        </h2>
        <!-- New Announcement Button -->
        <div class="flex justify-end self-start">
            <a href="{{ route('announcements.create') }}">
                <button
                    class="flex items-center justify-between px-4 py-2 mt-8 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0m149.3 277.3c0 11.8-9.5 21.3-21.3 21.3h-85.3V384c0 11.8-9.5 21.3-21.3 21.3h-42.7c-11.8 0-21.3-9.6-21.3-21.3v-85.3H128c-11.8 0-21.3-9.6-21.3-21.3v-42.7c0-11.8 9.5-21.3 21.3-21.3h85.3V128c0-11.8 9.5-21.3 21.3-21.3h42.7c11.8 0 21.3 9.6 21.3 21.3v85.3H384c11.8 0 21.3 9.6 21.3 21.3z" />
                    </svg>
                    <span class="ml-2">New Announcement</span>
                </button>
            </a>
        </div>
        <div class="w-full mb-4 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class=" mt-8  w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Company</th>
                            <th class="px-4 py-3">Posted At</th>
                            <!-- <th class="px-4 py-3">Purshased Tickets</th> -->
                            <!-- <th class="px-4 py-3"></th> -->
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($announcements as $announcement)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="self-center px-4 py-3">
                                    <p class="font-semibold ">{{ $announcement->title }} </p>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $announcement->description }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $announcement->company->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $announcement->created_at }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center justify-center space-x-4 text-sm">
                                        <a href="{{ route('announcements.edit', ['announcement' => $announcement]) }}">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                        <form class="p-0 m-0"
                                            action="{{ route('announcements.destroy', ['announcement' => $announcement]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="confirmDelete()"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        {{-- Applications --}}
        <h2 class="text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            Posted <span class="text-black dark:text-gray-400">Applications</span>
        </h2>
        <div class="w-full mb-4 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class=" mt-8  w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Announcement's Title</th>
                            <th class="px-4 py-3">Made By</th>
                            <th class="px-4 py-3">Applied At</th>
                            <!-- <th class="px-4 py-3">Purshased Tickets</th> -->
                            <!-- <th class="px-4 py-3"></th> -->
                            <th class="px-4 py-3">Check</th>
                        </tr>
                    </thead>
                    <tbody class="text-center bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($announcements as $announcement)
                        <tr class="text-gray-700 dark:text-gray-400">
                            @forelse ($announcement->applicants as $application)
                            <tr class="text-gray-700 dark:text-gray-400">
                            
                                    <td class="self-center px-4 py-3">
                                        <p class="font-semibold">{{ $announcement->title }}</p>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $application->name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $application->created_at }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <a href="{{ route('announcements.show', $announcement) }}"
                                        class="self-end mr-4 text-black dark:text-white">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="4" fill="currentColor" />
                                                <path fill="currentColor"
                                                    d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68M16 22.5a6.5 6.5 0 1 1 6.5-6.5a6.51 6.51 0 0 1-6.5 6.5" />
                                            </svg>
                                        </button>
                                    </a>
                                    </td>
                                @empty
                                    <td colspan="3" class="px-4 py-3 text-sm">
                                        No Applications Have Been Made Yet
                                    </td>
                                </tr>
                                @endforelse
                            </tr>
                                @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
