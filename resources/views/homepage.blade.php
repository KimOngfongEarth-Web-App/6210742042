<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>oradeekit</title>

<!---font-->
<link href="https://fonts.googleapis.com/css2?family=Athiti&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<!-- vue.js production version, optimized for size and speed -->
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>




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

    <section class="hero is-light is-fullheight" style="margin-bottom: 5%;">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <div id="app">
          <nav class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item" style="font-family: 'Righteous', cursive; font-weight:bold; color: darkslateblue;">
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
                  <a class="navbar-item">
                    intro
                  </a>
                  <!-- <div class="navbar-item has-dropdown is-hoverable">
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
                        chapter three: quote and my question
                      </a>
                      
                    </div>
                  </div> -->
                </div>
    
                </div>
              </div>
            </div>
          </nav>
        </div>
    
    
      </div>
    
      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered" style="font-family: 'Noto Sans Mono', monospace;">
          <p class="title" id="intro">
              Hello everyone,
          </p>
          <span class="subtitle" style="font-family: 'Athiti', sans-serif;" id='intro2'></span>
        </div>

        

      </div>   
      <!-- Hero footer: will stick at the bottom -->  
    </section>

  <!-- m----------------------------------------------------------hero---------------m -->



  
  

<div id="app2">  

  <vue-typed-js :strings="['First text', 'Second Text']">
    <h1 class="typing"></h1>
  </vue-typed-js>
  

  <nav class="tabs">
    <div class="container">
      <ul>
        <li><a @click="goto('abt')" role="button">About me</a></li>
        <li><a @click="goto('myProj')" role="button">Project</a></li>
        <li><a @click="goto('edu')" role="button">Education</a></li>
        
      </ul>
    </div>
  </nav>

  <div class="block" ref="abt">
    <span class="tag is-dark">
      ABOUT ME
    </span>
  </div>
  
  <div class="block">
  
   <div class="box">
      
        <div class="level">

          <div class="level-left">
            <div class="level-item">
              <p>
                <strong>Hello, I am Oradee Kitirat</strong>
                <br>
                3rd year software-engineering student at thammasat university and cat lover.<br> 
                  Interest in cool copy-writing, love reading and enjoy trying new stuff.<br>
                  <a href="https://github.com/oradee-kit">Visit my Github</a>
                </p>
            </div>


          </div>
  
          <div class="level-right">
    
              <div class="level-item">
                <figure class="media">
                  <p class="image is-128x128 is-1by1">
                    <img  class="is-rounded" src="./image/prof-im.jpg">
                  </p>
                </figure>
              </div>
          </div>


        </div>

        <!-- <p class="level-item has-text-centered">
        <button class="button is-link is-outlined is-rounded">Contact Me</button>
        <button class="button is-link is-inverted is-rounded">My resume</button>
        </p> -->
  
   </div>
  </div>

  <div class="block" ref="myProj">
    <span class="tag is-dark">
      MY PROJECT
    </span>
  </div>

  <div class="columns is-desktop">

    <div class="column is-one-third">
      <div class="block">
        <div class="card">
          <div class="card-image">
            <figure class="image is-3by4">
              <img src="./image/asap-proj.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="./image/asap_logo.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">ASAP</p>
                <p class="subtitle is-6">3rd year class project</p>
              </div>
            </div>
        
            <div class="content">
              Application that reactivate everyone's mental health due to the effect of COVID-19 developed with
              <strong>REACT-Native</strong>
              framework together with <strong>Firebase</strong>.
              <br>
              <!-- <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time> -->
            </div>

            <div class="modal" :class="{ 'is-active': showMore }" style="padding-left: 10%; padding-right: 10%;">
              <div class="modal-background"></div>
              <div class="modal-content">
                <!-- Any other Bulma elements you want -->
                <article class="message">
                  <div class="message-header">
                    <p>ASAP</p>
                    <button class="delete" aria-label="delete"  @click="showMore = false"></button>
                  </div>
                  <div class="message-body">
                    This project assigned to slove people problem in COVID-19 issue
                    and we realize that other group think about how to visualize the numbers or about hospital things so we try to do somthing
                    different and I am a head of developers team.
                  </div>
                </article>
              </div>
              <!-- <button class="modal-close is-large" aria-label="close"></button> -->
            </div>


          </div>
          <footer class="card-footer">
            <a :class="{ 'is-active': showMore }"
            @click="showMore = !showMore" class="card-footer-item">More</a>
          </footer>
        </div>
      </div>
    </div>
    
    <div class="column is-one-third">
      <div class="block">
        <div class="card">
          <div class="card-image">
            <figure class="image is-3by4">
              <img src="./image/alertBD-proj.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <!-- <div class="media-left">
                <figure class="image is-32x32">
                  <img src="./image/alertBD-logo.png" alt="Placeholder image">
                </figure>
              </div> -->
              <div class="media-content">
                <p class="title is-4">ALERT BIRTHDAY</p>
                <p class="subtitle is-6">3rd year class project</p>
              </div>
            </div>
        
            <div class="content">
              Alert Birthday want to make a special day more special. 
              This project, I learn about how good application should be, how to design and what a business behind that.
              <br>
              
              <!-- <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time> -->
            </div>
            
          </div>
          <footer class="card-footer">
            <a class="card-footer-item" href="https://youtu.be/H26GYisxdiY">More</a>
          </footer>
        </div>
      </div>
    </div>

    <div class="column is-one-third">
      <div class="block">
        <div class="card">
          <div class="card-image">
            <figure class="image is-3by4">
              <img src="./image/nosalim_proj.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-4">WEBSITE: NOSLIM</p>
                <p class="subtitle is-6">2nd year class project</p>
              </div>
            </div>
        
            <div class="content">
              This web development project,delveloped in 2020 during first COVID-19 pandemic and Thailand trend that time.
              We wanted to gather people with same ideal to help each other.This website developed with jQuery and bootstrap.
              <br>  <br> 
              <a href="https://nosalimhost.web.app">nosalim.web.app</a>
            </div>

          </div>
        </div>
      </div>
    </div>


 </div>

 <div class="block" ref="edu">
  <span class="tag is-dark">
    EDUCATION
  </span>
</div>

 <div class="block">
  <div class="card">
    <div class="card-content">
      <p class="title">
        Software Engineering, Thammasat University
      </p>
      <p class="subtitle">
        2019-Present
      </p>
    </div>
    <footer class="card-footer">
      <p class="card-footer-item">
        <span>
          <a :class="{ 'is-active': showMoreEdu }"
          @click="showMoreEdu = !showMoreEdu" > Relevant Courses </a>
        </span>
      </p>
    </footer>

    <div class="modal" :class="{ 'is-active': showMoreEdu }" style="padding-left: 10%; padding-right: 10%;">
      <div class="modal-background"></div>
      <div class="modal-content">
        <!-- Any other Bulma elements you want -->
        <article class="message">
          <div class="message-header">
            <p>I learned about</p>
            <button class="delete" aria-label="delete"  @click="showMoreEdu = false"></button>
          </div>
          <div class="message-body">
            Web Programming, Machine Learning, Mobile Device Application Development,
             Database System, Algorithm and Data Structures, 
             Object Oriented Analytic and Software Pattern
          </div>
        </article>
      </div>
      <!-- <button class="modal-close is-large" aria-label="close"></button> -->
    </div>
  </div>
</div>


</div>


  <footer class="footer" style="margin-top: 10%;">
    <div class="content has-text-centered">
      <p>
       design by Oradee Kitirat using <em style="color: darkcyan;">Bulma</em>
      </p>
    </div>
  </footer>

  <script>

var typed = new Typed('#intro2', {
  strings: ["welcome to ord world","it's nice to meet you","let's be over the moon!","how do you do?","have a nice day","stay hydrated!"],
  typeSpeed:60,
  backSpeed:30,
  loop:true
});

  </script>
<script src="./typed.js"></script>
<script src="./script.js"></script>
</body>
    
</html>