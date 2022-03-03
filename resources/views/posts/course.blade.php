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
        width:60%;
        margin-top: 10%;
        margin-left:20%;
        margin-right:20%;}

    
</style>
</head>
<body>

<div class='content'>

<h1>My Relevent Courses</h1> 

<input class="input" type="text" placeholder="Search...">

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
      <th>{{ $post->title }}</th>
      <th>{{ $post->content }}</th>
    </tr>
  @endforeach

  </tbody>
</table>
</div>




</body>
</html>


