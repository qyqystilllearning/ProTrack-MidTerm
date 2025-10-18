<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ProTrack</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
    <nav>
        {{-- Arahkan judul ke halaman pemilihan proyek --}}
        <a href="{{ route('projects.index') }}"><h1>ProTrack</h1></a>
        
        {{-- Hapus link-link lama. Nanti kita bisa tambahkan link baru di sini --}}
    </nav>
</header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>