<?php

include "scripts/profilescripts.php";
print_modal();

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
      <div class="row">
        <h1 class="text-center">Tom Brady's Fan Page!</h1>
        <h2 class="text-center">Quarterback for the New England Patriots</h2>
      </div>
      <div class="row">
        <img class="img-responsive" src="gettyimages-6339588401.jpg"alt="Tom Brady">
      </div>

      <div class="row">
        <h3>Please sign in to continue...</h3>
      </div>
      <div class="row">
        <form action="process.php" method="POST">
          <div class="form-group">
            <label for="user">User:</label>
            <input class="form-control" type="text" name="user" placeholder="Username...">
          </div>
          <div class="form-group">
            <label for="pass">Password:</label>
            <input class="form-control" type="password" name="pass" placeholder="Password..."><br>
          </div>
    		  <input class="btn btn-success center-block" type="submit" value="Submit" name="submit">
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
