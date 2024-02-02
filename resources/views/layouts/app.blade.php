@include('layouts.head')

<body class="bg-gray-300 font-poppins dark:bg-gray-900">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!--  Main Content -->

    @yield('content')

    @include('layouts.footer')
</body>

@include('layouts.foot')
