<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">


<!-- bulma css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">


<style>
    /* body {font-family: 'Athiti', sans-serif;} */
    body {font-family: 'Roboto', sans-serif;}
    .block {margin-left:7.5% ; margin-right: 7.5%;}
    .columns {margin-left:7.5% ; margin-right: 7.5%;}
    #app2 {font-family: 'Athiti', sans-serif;}
    
</style>
</head>
<body>

<!-- <a href="/posts/create">
    create
</a> -->

@foreach($posts as $post)

<a href='/posts/{{ $post-> id }}/edit'>{{ $post->title }}</a>
<h5>{{ $post->content }}</h5>

@endforeach


</body>
</html>


