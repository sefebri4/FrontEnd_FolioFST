<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'FolioFST')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free Website Template">
    <meta name="description" content="Free Website Template">
    
    @include('public.includes.head')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">
    
    @include('public.includes.navbar')

    <main>
        @yield('content')
    </main>

    @include('public.includes.footer')
    @include('public.includes.preloader')
    @include('public.includes.script')
</body>
</html>
