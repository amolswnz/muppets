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
  <script src='https://www.google.com/recaptcha/api.js'></script>
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
        <h1>Contact</h1>

      </div>
      <!-- /.blog-main -->
    </div>
    <!-- /.row -->
  </main>
  <!-- /.container -->


  <section id='featured' ng-controller='HomeController as vm'>
    <div class="container">
      <div class="card flex-md-row mb-4 box-shadow">
        <div class="card-body">
          <h5 class="display-5 font-italic">Please submit your information</h5>
          <p class=" my-3">
            <form class="needs-validation" novalidate id='enquiryForm'>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control col-md-12" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <div class="invalid-feedback"> Please enter valid email address. </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Enquiry</label>
                <textarea name="enquiry" class='form-control' name='enquiry' rows="8" cols="80" required minlength='20'></textarea>
                <div class="invalid-feedback"> Please enter descriptive enquiry. </div>
              </div>
              <div class="g-recaptcha" name='captcha' data-sitekey="6LfxLVEUAAAAAHjisf_HKUMx5Oqt4fDjiuKesXDL"></div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </p>

          <div class="alert alert-danger alert-dismissible fade show" role="alert" id='formOutput' style='display: none'>
            <p id='msg'></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal fade" id="formSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Form submitted successfully</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class='lead'>Thank you for your enquiry</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>



  <footer class="blog-footer">
    <p>Template built with <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="//amol.co.nz">Amol</a> <Br>Source code at <a href='//github.com/amolswnz/'>Github<a></p>
    <p> <a href="#">Back to top</a> </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/formSubmit.js" charset="utf-8"></script>
</body>

</html>
