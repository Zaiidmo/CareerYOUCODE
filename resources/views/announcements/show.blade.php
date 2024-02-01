@extends('layouts.app')

@section('title')
    Single Page
@endsection

@section('content')
    <!-- Content Section -->
    <section class="bg-white dark:bg-gray-900 pt-24">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:flex lg:flex-col lg:py-16 lg:px-6">
            <div class="font-light text-center sm:text-lg dark:text-gray-400">
                <h2 class="mb-8 text-4xl tracking-wider font-salsa font-extrabold text-gray-900 dark:text-white"><?= $announcement['title']?></h2>
                <!-- <p class="text-black dark:text-gray-500 ">Somthing Something</p> -->
                <p class="mt-8 text-left text-gray-500 dark:text-gray-700 mb-4">by : <?= $announcement->company->name?> <br> at <?= $announcement['created_at']?>
                <p>
            </div>
                <img src="{{ asset('storage/uploads/logos/' . $announcement->company->logo) }}" alt="{{ $announcement->company->name }} Logo "
                    class="rounded-lg">
            <div class="mt-2 text-black dark:text-gray-300">
                <p class="mb-4"><?= $announcement['description']?>
            </div>
            <div class="flex flex-row">
                <?php //foreach ($tags as $tag) : ?>
                    {{-- <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">Some Tags</span> --}}
                <?php //endforeach ?>
            </div>
        </div>
    </section>
@endsection