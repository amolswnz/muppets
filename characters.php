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
  <title>The Muppets - Characters</title>
</head>

<body ng-controller='CharactersController as vm'>

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
        <h1>List of Muppets</h1>
        <p>The Muppets are an ensemble group of comedic puppet characters originally created by Jim Henson. The Muppets have appeared in multiple television series, films, and other media appearances since the 1950s. The majority of the characters listed here originated on The Muppet Show, a television series that aired from 1976 to 1981. Since then, several more characters have been introduced in other television series, as well as theatrical films.</p>

        <p>The first Muppet characters appeared in Sam and Friends, a Washington, D.C.–based show which was broadcast from 1955 to 1961. Kermit the Frog was one of the show's regulars, and thus was one of Henson's first Muppet creations.[1] The characters became a household name after their appearance in the children's television program Sesame Street.[1] Henson was initially reluctant to become involved with Sesame Street because he feared being pigeon-holed as a children's performer, but agreed to work on the show to further his social goals.[2]:5 The characters created for that series are now owned by the Sesame Workshop, the producers of Sesame Street, and are now considered a separate franchise.</p>

        <p>These characters have been owned by The Muppets Studio, a division of The Walt Disney Company, since 2004 when Disney acquired the characters from The Jim Henson Company.</p>
      </div>
      <!-- /.blog-main -->
    </div>
    <!-- /.row -->
  </main>
  <!-- /.container -->


  <section id='featured'>
    <div class="container">
      <div class="row row-eq-height">
          <div class="d-flex flex-wrap col-md-3 card box-shadow p-2" ng-repeat='muppet in vm.list'>
            <a href="#" class='no-decorate' data-toggle="modal" ng-click="vm.showDetail(muppet.id)" data-target="#exampleModal">
              <h4 class='text-center'> {{ muppet.name }}</h4>
              <img class=" mx-auto d-block img-fluid " alt="{{ muppet.name }}" ng-src="{{ muppet.img }}" >
            </a>
          </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ vm.currentMuppet.name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p ng-bind-html='vm.currentMuppet.details'></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <footer class="blog-footer">
    <p>Template built with <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="//amol.co.nz">Amol</a> <Br>Source code at <a href='//github.com/amolswnz/'>Github<a></p>
    <p> <a href="#">Back to top</a> </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.js'>
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-route.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.6.9/angular-sanitize.min.js" charset="utf-8"></script>
  <script src="app/characters.app.js" charset="utf-8"></script>
</body>

</html>
