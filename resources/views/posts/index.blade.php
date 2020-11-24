<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    <h1>Posts</h1>

    {{-- POSTS AUSGEBEN --}}
    @foreach($posts as $post)

    <p>{{ $post->title }}</p>
    <p>{{ $post->description }}</p>
    <p>{{ $post->user->name }}</p>
    @endforeach
</body>

</body>
</html>
