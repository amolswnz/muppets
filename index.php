<!doctype html>
<html lang="en" ng-app='muppetsApp'>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>The Muppets</title>
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row align-items-center justify-content-center">
        <img alt="The Muppets logo.svg" src="//upload.wikimedia.org/wikipedia/en/thumb/3/3b/The_Muppets_logo.svg/252px-The_Muppets_logo.svg.png" class='figure-img img-fluid rounded col-3'>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-center">
        <a class="p-2 pr-5 text-muted" href="/">Home</a>
        <a class="p-2 pr-5 text-muted" href="/characters">Characters</a>
        <a class="p-2 text-muted" href="/contact">Contact</a>
      </nav>
    </div>

  </div>

  <main role="main" class="container">
    <div class="row">
      <div class="col-md-12 blog-main">
        <h1>The Muppets</h1>
        <p>The Muppets are an ensemble cast of puppet characters known for their self-aware, burlesque, and meta-referential style of variety-sketch comedy. Created by Jim Henson and his wife Jane Henson in 1955, they are the namesake for the Disney media franchise that encompasses feature films, television series, music recordings, theme park attractions, print publications, merchandising, and other media works associated with the characters.</p>
        <p>The Muppets debuted on the television program Sam and Friends, which aired from 1955 to 1961. After appearing on skits in several late night talk shows and advertising commercials during the 1960s, the Muppets began appearing on Sesame Street in 1969. The Muppets attained celebrity status and international recognition through their breakout roles in The Muppet Show (1976–1981), a primetime television series that garnered four Primetime Emmy Award wins and twenty-one nominations during its five-year run. </p>

      </div>
      <!-- /.blog-main -->
    </div>
    <!-- /.row -->
  </main>
  <!-- /.container -->


  <section id='featured' ng-controller='HomeController as vm'>
    <div class="container">
      <div class="card flex-md-row mb-4 box-shadow">
        <div class="card-body d-flex flex-column align-items-start">
          <h5 class="display-4 font-italic">{{ vm.muppet.name }}</h5>
          <p class=" my-3" ng-bind-html='vm.muppet.details'></p>
        </div>
        <img ng-src="{{ vm.muppet.img }}" class='img-fluid' alt="">
      </div>
    </div>
  </section>



  <footer class="blog-footer">
    <p>Template built with <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="//amol.co.nz">Amol</a> <Br>Source code at <a href='//github.com/amolswnz/'>Github<a></p>
    <p> <a href="#">Back to top</a> </p>
  </footer>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.js'>
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-route.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.6.9/angular-sanitize.min.js" charset="utf-8"></script>
  <script src="app/home.app.js" charset="utf-8"></script>
</body>

</html>
