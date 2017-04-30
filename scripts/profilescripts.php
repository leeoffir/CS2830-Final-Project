<?php
  if(isset($_POST['action']) && !empty($_POST['action'])){
    $action = $_POST['action'];
    switch ($action) {
      case 'bioInfo': printBioInfo(); break;
      case 'stats': printStatsInfo(); break;

      default:  break;
    }
  }

function printBioInfo(){
echo 'Thomas Edward Patrick Brady Jr. (born August 3, 1977) is an American football quarterback for the New England Patriots of the National Football League (NFL). He is one of only two players to win five Super Bowls (the other being Charles Haley), the only quarterback to win five and the only player to win them all playing for one team.
<br><hr><br>
After playing college football for the University of Michigan, Brady was drafted by the Patriots in the sixth round of the 2000 NFL Draft. In Brady'.'s 15 seasons as a starter,[a] he has quarterbacked the Patriots to seven Super Bowl appearances, the most for any player in history.
<br><hr><br>
Brady has been honored with four Super Bowl MVP awards (Super Bowl XXXVI, XXXVIII, XLIX, and LI), the most ever by a single player, has won two league MVP awards (2007 and 2010), has been selected to 12 Pro Bowls, and has led his team to more division titles (14) than any other quarterback in NFL history. As of the end of the 2016 season, Brady is fourth all-time in career passing yards, fourth in career touchdown passes, and third in career passer rating. His career postseason record is 25–9, winning more playoff games than any other quarterback, and he has appeared in more playoff games than any player at any position. Brady has never had a losing season as a starting quarterback in the NFL. His 208 combined regular-season and postseason wins are also the most of any quarterback in NFL history. Because of his accomplishments and accolades, many analysts and sportswriters consider Brady to be among the greatest quarterbacks of all time.[3][4][5][6] Due to his late draft selection, Brady is considered to be the biggest "steal" in the history of the NFL Draft.[7][8][9]
<br><hr><br>
For his alleged involvement in the highly publicized Deflategate football tampering scandal, Brady was suspended for the first four games of the 2016 NFL season.[10] Subsequently, Brady went on to win Super Bowl LI and Super Bowl MVP.
<br><hr><br>
@en.wikipedia.org/wiki/Tom_Brady;
}

function printStatsInfo(){
  echo '<div class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-2">
      <!-- Content -->
    </div>
    <div class="col-sm-8">
      <!-- Content -->
    </div>
  </div>
</div>';
}


function print_modal(){
  echo '<div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>';
}




 ?>
