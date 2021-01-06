<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Administrator</title>
  </head>



  <body>
  <nav class="navbar  fixed-top navbar-expand-lg navbar-dark" style = "background-color:#112340;">
  <div class="container">
  <a class="navbar-brand" href="/admin">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">HOME</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>	<div class="container pt-5" style="min-height: 700px;">

<div class="row mt-3">
  
    <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item" id="list-home-list" data-toggle="list" href="#list-home" role="tab" style ="background-color:#112340;color:white;font-weight:bold" aria-controls="home">Dashboard</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" href ="/admin/FAQ" role="tab" aria-controls="profile">FAQ</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list"  href ="/admin/FAQ" role="tab" aria-controls="messages">Organisations</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list"  href ="/admin/FAQ" role="tab" aria-controls="settings">Users</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" href ="/admin/FAQ" role="tab" aria-controls="settings">Events</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list"  href ="/admin/FAQ" role="tab" aria-controls="settings">Admins</a>
            </div>
    </div>

  
    <div class="col-9">

            @yield('admin_content')

    </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>