<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, CareerYOUCODE,YOUCODE, Job, Career, Jobdating">
    <meta name="author" content="Zaiid Moumnii">
    <meta name="description" content="CarrerYOUCODE .. JobDating Events By YOUCODE School">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin - Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-300 font-poppins dark:bg-gray-900">
    <?php include '../resources/views/includes/navbar.blade.php' ?>
    <main id="main" class="px-16 md:px-28 ">
        <div class="pt-24 md:h-screen overflow-y-auto">
            <div class="container  md:px-6 md:mx-auto grid">
                <h4 class="md:ml-16 md:mt-6 font-semibold font-poppins tracking-widest text-gray-700 dark:text-gray-200">
                    DASHBOARD
                </h4>
                <p class="md:ml-16 mb-6 text-gray-600 dark:text-gray-700">
                    Admin/Dashboard
                </p>
                <!-- Cards -->
                <div class="grid gap-10 mb-8  grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                    <!-- Card -->
                    <div id="users" class="flex items-center p-4 bg-white rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 dark:bg-white dark:border-none bg-black rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white dark:text-black" width="26" height="20" viewBox="0 0 30 24">
                                    <path fill="currentColor" d="M4.5 10.5C6.15469 10.5 7.5 9.15469 7.5 7.5C7.5 5.84531 6.15469 4.5 4.5 4.5C2.84531 4.5 1.5 5.84531 1.5 7.5C1.5 9.15469 2.84531 10.5 4.5 10.5ZM25.5 10.5C27.1547 10.5 28.5 9.15469 28.5 7.5C28.5 5.84531 27.1547 4.5 25.5 4.5C23.8453 4.5 22.5 5.84531 22.5 7.5C22.5 9.15469 23.8453 10.5 25.5 10.5ZM27 12H24C23.175 12 22.4297 12.3328 21.8859 12.8719C23.775 13.9078 25.1156 15.7781 25.4062 18H28.5C29.3297 18 30 17.3297 30 16.5V15C30 13.3453 28.6547 12 27 12ZM15 12C17.9016 12 20.25 9.65156 20.25 6.75C20.25 3.84844 17.9016 1.5 15 1.5C12.0984 1.5 9.75 3.84844 9.75 6.75C9.75 9.65156 12.0984 12 15 12ZM18.6 13.5H18.2109C17.2359 13.9688 16.1531 14.25 15 14.25C13.8469 14.25 12.7687 13.9688 11.7891 13.5H11.4C8.41875 13.5 6 15.9188 6 18.9V20.25C6 21.4922 7.00781 22.5 8.25 22.5H21.75C22.9922 22.5 24 21.4922 24 20.25V18.9C24 15.9188 21.5812 13.5 18.6 13.5ZM8.11406 12.8719C7.57031 12.3328 6.825 12 6 12H3C1.34531 12 0 13.3453 0 15V16.5C0 17.3297 0.670312 18 1.5 18H4.58906C4.88438 15.7781 6.225 13.9078 8.11406 12.8719Z" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Total Users
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                users  </p>
                        </div>
                    </div>
                    <div id="Authors" class="flex items-center p-4 bg-white  rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 dark:bg-white dark:border-none bg-black rounded-full flex justify-center items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="text-white dark:text-black" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_66_410)">
                                        <path d="M9 12C12.309 12 15 9.309 15 6C15 2.691 12.309 0 9 0C5.691 0 3 2.691 3 6C3 9.309 5.691 12 9 12ZM16.086 24H13V20.914L20.275 13.639C21.127 12.787 22.509 12.787 23.361 13.639C24.213 14.491 24.213 15.873 23.361 16.725L16.086 24ZM11 24H0V19C0 16.243 2.243 14 5 14H13C14.145 14 15.189 14.403 16.033 15.053L11 20.086V24Z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_66_410">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Total Admins </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                admins  </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div id="Readers" class="flex items-center p-4 bg-white  rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 dark:bg-white dark:border-none bg-black rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white dark:text-black" width="24" height="24" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M352 96c0-53.02-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96s96-42.98 96-96M233.59 241.1c-59.33-36.32-155.43-46.3-203.79-49.05C13.55 191.13 0 203.51 0 219.14v222.8c0 14.33 11.59 26.28 26.49 27.05c43.66 2.29 131.99 10.68 193.04 41.43c9.37 4.72 20.48-1.71 20.48-11.87V252.56c-.01-4.67-2.32-8.95-6.42-11.46m248.61-49.05c-48.35 2.74-144.46 12.73-203.78 49.05c-4.1 2.51-6.41 6.96-6.41 11.63v245.79c0 10.19 11.14 16.63 20.54 11.9c61.04-30.72 149.32-39.11 192.97-41.4c14.9-.78 26.49-12.73 26.49-27.06V219.14c-.01-15.63-13.56-28.01-29.81-27.09" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Total Students
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Students  </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div id="Wikis" class="flex items-center p-4 bg-white  rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 dark:bg-white bg-black dark:border-none rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="text-white dark:text-black">
                                    <path fill="currentColor" d="M5.615 20q-.69 0-1.152-.462Q4 19.075 4 18.385V5.615q0-.69.463-1.152Q4.925 4 5.615 4h12.77q.69 0 1.152.463q.463.462.463 1.152v12.77q0 .69-.462 1.152q-.463.463-1.153.463zM7.5 16.5h6v-1h-6zm0-4h9v-1h-9zm0-4h9v-1h-9z" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Companies
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Company  </p>
                        </div>

                    </div>
                    <!-- Card -->
                    <div id="Pending" class="flex items-center p-4 bg-white  rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 dark:bg-white bg-black dark:border-none rounded-full flex justify-center items-center">
                                <svg class="text-white dark:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M7 13.5q.625 0 1.063-.437T8.5 12q0-.625-.437-1.062T7 10.5q-.625 0-1.062.438T5.5 12q0 .625.438 1.063T7 13.5m5 0q.625 0 1.063-.437T13.5 12q0-.625-.437-1.062T12 10.5q-.625 0-1.062.438T10.5 12q0 .625.438 1.063T12 13.5m5 0q.625 0 1.063-.437T18.5 12q0-.625-.437-1.062T17 10.5q-.625 0-1.062.438T15.5 12q0 .625.438 1.063T17 13.5M12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Announcements
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                jobs  </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div id="Categories" class="flex items-center p-4 bg-white  rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 dark:bg-white bg-black dark:border-none rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" class="text-white dark:text-black">
                                    <path fill="currentColor" d="M5 7h13v10H2V4h7l2 2H4v9h1z" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Categories
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                category  </p>
                        </div>

                    </div>
                    <!-- Card -->
                    <div id="tags" class="flex items-center p-4 bg-white  rounded-2xl shadow-xs dark:bg-gray-800">
                        <div class="p-3 mr-4 rounded-full">
                            <span class="h-12 w-12 border border-black dark:border-none bg-white rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15">
                                    <path fill="currentColor" d="M10 4.5a.5.5 0 1 1 1 0a.5.5 0 0 1-1 0" />
                                    <path fill="currentColor" fill-rule="evenodd" d="M7.146.146A.5.5 0 0 1 7.5 0h6A1.5 1.5 0 0 1 15 1.5v6a.5.5 0 0 1-.146.354l-7 7a.5.5 0 0 1-.708 0l-7-7a.5.5 0 0 1 0-.708zM10.5 3a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                Tags
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                tags  </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>
<script src="{{ asset('js/theme.js')}}"></script>
</html>