<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<a href="/posts/create">
    create
</a>

@foreach($posts as $post)

<a href='/posts/{{ $post-> id }}/edit'>{{ $post->title }}</a>
<h5>{{ $post->content }}</h5>

@endforeach


</body>
</html>


