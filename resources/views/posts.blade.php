<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h1>Post List</h1>
    <ul>
        @foreach($posts as $post)
            <li><strong>{{ $post->title }}</strong>: {{ $post->content }}</li>
        @endforeach
    </ul>
</body>
</html>
