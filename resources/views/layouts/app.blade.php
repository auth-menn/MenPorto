<!-- resources/views/layouts/app.blade.php -->
@include('layouts.partials.header') <!-- Include header -->

<main class="relative z-10">
    @yield('content')
</main>

@include('layouts.partials.footer') <!-- Include footer -->
 
