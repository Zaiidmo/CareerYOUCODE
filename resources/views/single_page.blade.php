<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, CareerYOUCODE,YOUCODE, Job, Career, Jobdating">
    <meta name="author" content="Zaiid Moumnii">
    <meta name="description" content="CarrerYOUCODE .. JobDating Events By YOUCODE School">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Announcemet Job</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-300 font-poppins dark:bg-gray-900">
    <?php include '../resources/views/includes/navbar.blade.php' ?>
    <!-- Content Section -->
    <section class="bg-white dark:bg-gray-900 pt-24">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:flex lg:flex-col lg:py-16 lg:px-6">
            <div class="font-light text-center sm:text-lg dark:text-gray-400">
                <h2 class="mb-8 text-4xl tracking-wider font-salsa font-extrabold text-gray-900 dark:text-white">Super Title</h2>
                <!-- <p class="text-black dark:text-gray-500 ">Somthing Something</p> -->
                <p class="mt-8 text-left text-gray-500 dark:text-gray-700 mb-4">by : Company Name <br> at Creation Date
                <p>
            </div>
            <div class="mt-2 self-center">
                <img class=" rounded-lg" src="/images/Youcode.png" alt="Company Logo">
            </div>
            <div class="mt-2 text-black dark:text-gray-300">
                <p class="mb-4">Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets Announcemets 
            </div>
            <div class="flex flex-row">
                <?php //foreach ($tags as $tag) : ?>
                    <span class="bg-gray-100 text-gray-800  text-xs font-medium me-2 px-2.5 py-2 rounded-full dark:bg-gray-700 dark:text-white border border-gray-500">Some Tags</span>
                <?php //endforeach ?>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/theme.js')}}"></script>

</html>