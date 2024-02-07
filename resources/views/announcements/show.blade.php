@extends('layouts.app')

@section('title')
    <?= $announcement['title']?>
@endsection

@section('content')
    <!-- Content Section -->
    <section class="bg-white dark:bg-gray-900 pt-24">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:flex lg:flex-col lg:py-16 lg:px-6">
            <div class="font-light w-full text-center sm:text-lg dark:text-gray-400">
                <h2 class="mb-8 text-4xl tracking-wider font-salsa font-extrabold text-gray-900 dark:text-white"><?= $announcement['title']?></h2>
                <!-- <p class="text-black dark:text-gray-500 ">Somthing Something</p> -->
                <p class="mt-8 text-left text-gray-500 dark:text-gray-700 mb-4">by : <?= $announcement->company->name?> <br> at <?= $announcement['created_at']?>
                <p>
            </div>
                <img src="{{ asset('storage/uploads/jobs_image/' . $announcement->image) }}" alt="{{ $announcement->name }} Logo "
                    class="rounded-lg">
            <div class="mt-2 text-black dark:text-gray-300">
                <p class="mb-4"><?= $announcement['description']?>
            </div>
            To allow users to add multiple skills using a select input displayed upon clicking a button, you can implement a JavaScript solution. Here's how you can achieve this:

    Create a hidden select input initially, which will be displayed upon clicking the button.
    Use JavaScript to toggle the visibility of the select input when the button is clicked.
    Allow users to select multiple skills from the dropdown.
    Display the selected skills below the select input.
    On form submission, include the selected skills in the form data for processing.

Here's an example implementation:

HTML:

html

<div id="skills" class="p-8 bg-white rounded-lg dark:bg-gray-800 shadow">
    <div class="mb-10 flex justify-between items-center">
        <h1 class="font-semibold font-poppins tracking-widest text-gray-800 text-2xl dark:text-white">
            My Skills
        </h1>
        <button id="add-skill-button" class="text-gray-800 dark:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
            </svg>
        </button>
    </div>
    <div id="select-skill-wrapper" class="hidden">
        <select id="select-skills" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
            @foreach ($skills as $skill)
                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
            @endforeach
        </select>
    </div>
    <div id="selected-skills" class="flex flex-row">
        <!-- Selected skills will be displayed here -->
    </div>
</div>

JavaScript (using vanilla JavaScript):

javascript

document.addEventListener('DOMContentLoaded', function () {
    const addSkillButton = document.getElementById('add-skill-button');
    const selectSkillWrapper = document.getElementById('select-skill-wrapper');
    const selectSkills = document.getElementById('select-skills');
    const selectedSkills = document.getElementById('selected-skills');

    addSkillButton.addEventListener('click', function () {
        selectSkillWrapper.classList.toggle('hidden');
    });

    selectSkills.addEventListener('change', function () {
        selectedSkills.innerHTML = ''; // Clear existing selected skills

        const selectedOptions = 
        </div>
    </section>
@endsection