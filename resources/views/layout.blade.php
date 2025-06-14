<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'FolioFST')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Portfolio FST, Kampus, Mahasiswa, Dosen, Prestasi, Proyek">
    <meta name="description" content="Website Portofolio Fakultas Sains dan Teknologi">

    @include('includes.head')
    @stack('styles')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">

    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Preloader --}}
    @include('includes.preloader')

    {{-- Scripts --}}
    @include('includes.script')
    @stack('scripts')

</body>
</html>
