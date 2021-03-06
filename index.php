<?php

include "scripts/profilescripts.php";


 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts/profilescripts.js" charset="utf-8"></script>
  </head>
<body>

  <div class="container">
    <div class="jumbotron">
      <?php
        print_modal();
       ?>
      <div class="row text-center">
        <a href="http://www.patriots.com/">
        <img class="img-responsive center-block" src="pats.gif" alt="New England Patriots">
        </a>
        <!-- goes to pats home page when you click the picture-->
      </div>
      <div class="row">
        <h1 class="text-center">Tom Brady's Fan Page!</h1>
        <h2 class="text-center">Quarterback for the New England Patriots</h2>
      </div>
      <div class="row">
        <a href="http://www.tb12sports.com/">
        <img class="img-responsive" src="gettyimages-6339588401.jpg" alt="Tom Brady">
        </a>
        <!-- if you click the image goes to bradys personal website -->
      </div>
      <div class="row">
        <h3>Please sign in to continue...</h3>
      </div>
      <div class="row">
        <form action="process.php" method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="user" placeholder="Username...">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="pass" placeholder="Password..."><br>
            <input class="btn btn-success center-block" type="submit" value="Submit" name="submit">
          </div>

        </form>
      </div>
      <div class="row">
        <div class="col-md-16 text-center">
          <div class="panel panel-default">
            <div class="panel-heading text-center">About this page</div>
            <div class="panel-body">
              <button type="button" onclick="displayAbout()" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">View</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
