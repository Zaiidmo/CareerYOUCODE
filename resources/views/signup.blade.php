<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, Wikinamek,Wiki, Wikis">
    <meta name="author" content="Zaiid Moumnii">
    <meta name="description" content="CarrerYOUCODE .. JobDating Events By YOUCODE School">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Join Us Now</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-300 font-poppins dark:bg-gray-900">
    <?php include '../resources/views/includes/navbar.blade.php' ?>

    <section class="bg-gray-50 h-screen dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 pt-24 pb-8 mx-auto md:h-screen">
            <div class="flex flex-col font-salsa items-center mb-6 text-2xl text-gray-900 dark:text-white">
                <img class="w-auto h-10 mb-2" src="/images/Youcode.png" alt="logo">
            </div>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Get Started For Free
                    </h1>
                    <?php
                    $errors = $_SESSION['errors'] ?? [];
                    unset($_SESSION['errors']);
                    if (!empty($errors)) {
                        foreach ($errors as $error) {
                            // echo '<div class="mt-10 border border-red-500 text-red-500 px-4 py-3 rounded relative text-center" role="alert">';
                            echo "<span class='block text-red-500 sm:inline'><br>
                        $error</span>";
                            // echo '</div>';
                        }
                    }
                    ?>
                    <form class="form flex flex-col space-y-4 md:space-y-6" action="signup/register" method="POST">
                        <div>
                            <label for="Full-Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Full Name</label>
                            <input type="name" name="fullname" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Full Name">
                            <span id="fullname-message"></span>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com">
                            <span id="email-message"></span>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="Confirm-Password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button id="submitBtn" type="submit" class="w-full text-white bg-black hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" disabled>Sign up </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="login" class="font-medium text-black hover:underline dark:text-black">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="{{ asset('js/theme.js')}}"></script>
</html>