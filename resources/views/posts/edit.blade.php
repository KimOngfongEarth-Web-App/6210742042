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



<form method="POST" action="/posts/{{ $post->id }}">

@method('PUT')

@csrf
    

    <div class="field">
  <label class="label">Title</label>
  <div class="control">
    <input class="input" type="text" id="title" name="title" value="{{ $post->title }}">
  </div>
</div>

<div class="field">
  <label class="label">Content</label>
  <div class="control">
    <textarea class="input" id="content" name="content">{{ $post->content }}</textarea>
  </div>
</div>


<button class="button is-primary">Update</button>


<form action="/posts/{{ $post->id }}">

  @csrf

  @method('DELETE')

  <button class="button is-danger">Delete</button>
</form>

  </form>


  
</div>
</form>


</body>
</html>


