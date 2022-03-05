<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">


<!-- bulma css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<style>
    body {font-family: 'Roboto', sans-serif;}
    .content {font-family: 'Roboto', sans-serif;
        width:60%;
        margin-top: 10%;
        margin-left:20%;
        margin-right:20%;
        margin-buttom:10%;}

    
</style>
</head>
<body>

<nav class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a href="/" class="navbar-item" style="font-family: 'Righteous', cursive; font-weight:bold; color: darkslateblue;">
                  ORD's
                </a>
    
    
                <span class="navbar-burger" data-target="navbarMenuHeroA" :class="{ 'is-active': showNav }"
                  @click="showNav = !showNav">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroA" class="navbar-menu" :class="{ 'is-active': showNav }">
                <div class="navbar-end">
                  <a href="/" class="navbar-item">
                    intro
                  </a>
                  <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                      chapter
                    </a>
            
                    <div class="navbar-dropdown">
                      <a class="navbar-item">
                        chapter One: I also love design.
                      </a>
                      <a class="navbar-item">
                        chapter two: a books
                      </a>
                      <a class="navbar-item">
                        chapter three: blog
                      </a>
                      
                    </div>
                  </div>
                </div>
    
                </div>
              </div>
            </div>
          </nav>

<div class='content'>

<h1 style="color:hsl(217, 71%, 53%);">My Relevent Courses</h1> 

<input class="input" type="text" placeholder="Search..." id="search-posts">

<table class="table is-hoverable is-striped has-text-left">
  <thead>
    <tr>
      <th style="color:hsl(204, 86%, 53%);" ><abbr title="Position">Course</abbr></th>
      <th style="color:hsl(204, 86%, 53%);" >Description</th>
      
    </tr>
  </thead>
  
  <tbody id="dynamic-row">

  @foreach($posts as $post)
    <tr>
      <th>{{ $post->title }}</th>
      <th>{{ $post->content }}</th>
    </tr>
  @endforeach

  </tbody>
</table>
</div>


<script>
  $("body").on('keyup',"#search-posts", function(){

    var searchRequest = $(this).val();

    // console.log(searchRequest)

    $.ajax({
      method: 'POST',
      url: '{{ route("search-post") }}',
      dataType: 'json',
      data: {
        '_token': '{{ csrf_token() }}',
        searchRequest: searchRequest

      },
      success: function(res){
        // console.log(res)

        var tableRow = '';

        $('#dynamic-row').html('');

        $.each(res, function(index, value){
          tableRow = '<tr><th>'+value.title+'</th><th>'+value.content+'</th></tr>' ;

          $('#dynamic-row').append(tableRow);
        });
      }


    });
  });

</script>

</body>
</html>


