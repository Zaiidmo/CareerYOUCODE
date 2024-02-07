@extends('layouts.app')

@section('title')
    Users Management
@endsection
@include('layouts.sidebar')
@section('content')
    <main id="main" class="md:h-screen flex flex-col justify-center items-center md:px-28 px-16 ml-64 ">
        <h2 class="text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-black dark:text-gray-400">Registered </span>Users
        </h2>
        <div class="w-full mb-4 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class=" mt-8  w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Role</th>
                            <!-- <th class="px-4 py-3">Status</th> -->
                            <!-- <th class="px-4 py-3">Purshased Tickets</th> -->
                            <!-- <th class="px-4 py-3"></th> -->
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($users as $user)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="self-center px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="flex items-center">
                                            <img src="{{ asset('storage/uploads/logos/' . $user->picture) }}"
                                                alt="{{ $user->name }}" class="object-cover w-8 h-8 rounded-full mr-2">
                                            <p class="font-semibold">{{ $user->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $user->email }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @foreach ($user->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center justify-center space-x-4 text-sm">
                                        <form class="p-0 m-0" action="{{ route('users.update', ['user' => $user]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="text-white p-0 dark:text-gray-400 bg-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
                                                aria-label="Edit">
                                                Make Admin
                                            </button>
                                        </form>
                                        <form class="p-0 m-0" action="{{ route('users.destroy', ['user' => $user]) }}"
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
    </main>
@endsection
