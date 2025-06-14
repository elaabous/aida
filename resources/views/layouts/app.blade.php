<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aida')</title>
    @vite('resources/css/app.css')
</head>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        lucide.createIcons();
    });
</script>

<body class="bg-[#0f0f0f] text-white flex h-screen">

    {{-- Sidebar à gauche --}}
    @include('layouts.partials.sidebar')

    {{-- Zone principale --}}
    <div class="flex flex-col flex-1 overflow-hidden">
        @include('layouts.partials.header')

        <main class="p-6 overflow-y-auto bg-[#1a1a1a] flex-1">
            @yield('content')
        </main>
    </div>

    {{-- Injecte les scripts poussés depuis les vues --}}
    @stack('scripts')
</body
