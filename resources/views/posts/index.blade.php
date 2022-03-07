<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">


<!-- bulma css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">


<style>
    /* body {font-family: 'Athiti', sans-serif;} */
    body {font-family: 'Roboto', sans-serif;
        margin-top: 10%;
        margin-left:10%;
        margin-right:10%;}

    
</style>
</head>
<body>

<div class='content'>

<h1>Course CRUD <a role="button is-info" href='/posts/create'> (Add) </a> </h1> 


<table class="table">
  <thead>
    <tr>
      <th><abbr title="Position">Course</abbr></th>
      <th>Description</th>
      
    </tr>
  </thead>
  
  <tbody>

  @foreach($posts as $post)
    <tr>
      <td> <a href='/posts/{{ $post-> id }}/edit'>{{ $post->title }}</a></td>
      <th>{{ $post->content }}</th>
    </tr>
@endforeach

  </tbody>
</table>
</div>

<a role="button is-info" href='/'> (home) </a>


</body>
</html>


