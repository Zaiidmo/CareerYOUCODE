<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, Wikinamek,Wiki, Wikis">
    <meta name="author" content="Zaiid Moumnii">
    <meta name="description" content="CarrerYOUCODE .. JobDating Events By YOUCODE School">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Announcements</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-300 font-poppins dark:bg-gray-900">
    <?php include '../resources/views/includes/navbar.blade.php' ?>
    <section class=" pt-24 h-screen">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl font-salsa tracking-wider font-bold text-gray-900 dark:text-white">Explore All Available Announcements</h2>
                <!-- <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p> -->
            </div>
            <!-- Search Section -->
                <form class="flex justify-center mb-8">
                    <div class="relative w-1/2">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="searchinput" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray -500" placeholder="Looking for something special ? ..." >
                    </div>
                </form>
            <div id="wikis-container" class="grid gap-8 lg:grid-cols-2">
                <?php //foreach($wikis as $wiki) :?>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="singlepage">Something Something</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Something Something</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-auto h-9 rounded-full" src="/images/Youcode.png" alt="author" />
                            <span class="font-medium dark:text-white">
                            Something Something?>
                            </span>
                        </div>
                        <form action="singlepage" method="POST">
                            <input type="hidden" name="id" value="Something Something">
                            <button type="submit" href="singlepage" class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="singlepage">Something Something</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Something Something</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-auto h-9 rounded-full" src="/images/Youcode.png" alt="author" />
                            <span class="font-medium dark:text-white">
                            Something Something?>
                            </span>
                        </div>
                        <form action="singlepage" method="POST">
                            <input type="hidden" name="id" value="Something Something">
                            <button type="submit" href="singlepage" class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="singlepage">Something Something</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Something Something</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-auto h-9 rounded-full" src="/images/Youcode.png" alt="author" />
                            <span class="font-medium dark:text-white">
                            Something Something?>
                            </span>
                        </div>
                        <form action="singlepage" method="POST">
                            <input type="hidden" name="id" value="Something Something">
                            <button type="submit" href="singlepage" class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="singlepage">Something Something</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Something Something</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-auto h-9 rounded-full" src="/images/Youcode.png" alt="author" />
                            <span class="font-medium dark:text-white">
                            Something Something?>
                            </span>
                        </div>
                        <form action="singlepage" method="POST">
                            <input type="hidden" name="id" value="Something Something">
                            <button type="submit" href="singlepage" class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="singlepage">Something Something</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Something Something</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-auto h-9 rounded-full" src="/images/Youcode.png" alt="author" />
                            <span class="font-medium dark:text-white">
                            Something Something?>
                            </span>
                        </div>
                        <form action="singlepage" method="POST">
                            <input type="hidden" name="id" value="Something Something">
                            <button type="submit" href="singlepage" class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="singlepage">Something Something</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Something Something</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-auto h-9 rounded-full" src="/images/Youcode.png" alt="author" />
                            <span class="font-medium dark:text-white">
                            Something Something?>
                            </span>
                        </div>
                        <form action="singlepage" method="POST">
                            <input type="hidden" name="id" value="Something Something">
                            <button type="submit" href="singlepage" class="dark:text-gray-500 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </article>
                <?php //endforeach; ?>
                
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/theme.js') }}"></script>
</html>
