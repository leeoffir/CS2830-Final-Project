<?php

include "scripts/profilescripts.php";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tom's Info</title>
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
        <div class="row">
          <a href="http://www.patriots.com/">
          <img class="img-responsive center-block" src="pats.gif" alt="New England Patriots">
          </a>
          <!-- goes to pats home page when you click the picture-->
          <h1 class="text-center">Tom Brady's Full Profile</h1>
        </div>
        <!-- first row -->
        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading text-center">Biography</div>
              <div class="panel-body">
                  <button type="button" onclick="modalFillBio()" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">View</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading text-center">Stats</div>
              <div class="panel-body">
                  <button type="button" onclick="modalFillStats()" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">View</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading text-center">Images</div>
              <div class="panel-body">
                <button type="button" onclick="displayImages()" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">View</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Second Row -->
        <div class="row">
          <div class="col-md-offset-2 col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading text-center">Video Highlights</div>
              <div class="panel-body">
                <button type="button" onclick="displayVideos()" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">View</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading text-center">Awards</div>
              <div class="panel-body">
                <button type="button" onclick="displayAwards()" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">View</button>
              </div>
            </div>
          </div>
        </div>
        <div style="text-align:center">
        <a href="Logout.php">Click here to log out</a>
      </div>
</html>
