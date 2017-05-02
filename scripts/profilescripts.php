<?php
  if(isset($_POST['action']) && !empty($_POST['action'])){
    $action = $_POST['action'];
    switch ($action) {
      case 'bioInfo': printBioInfo(); break;
      case 'stats': printStatsInfo(); break;
      case 'images': showImages(); break;
      case 'videos': showVideos(); break;
      case 'awards': showAwards(); break;
      case 'about': printAbout(); break;
      default:  break;
    }
  }

function printBioInfo(){
echo 'Thomas Edward Patrick Brady Jr. (born August 3, 1977) is an American football quarterback for the New England Patriots of the National Football League (NFL). He is one of only two players to win five Super Bowls (the other being Charles Haley), the only quarterback to win five and the only player to win them all playing for one team.
<br><hr><br>
After playing college football for the University of Michigan, Brady was drafted by the Patriots in the sixth round of the 2000 NFL Draft. In Brady'.'s 15 seasons as a starter,[a] he has quarterbacked the Patriots to seven Super Bowl appearances, the most for any player in history.
<br><hr><br>
Brady has been honored with four Super Bowl MVP awards (Super Bowl XXXVI, XXXVIII, XLIX, and LI), the most ever by a single player, has won two league MVP awards (2007 and 2010), has been selected to 12 Pro Bowls, and has led his team to more division titles (14) than any other quarterback in NFL history. As of the end of the 2016 season, Brady is fourth all-time in career passing yards, fourth in career touchdown passes, and third in career passer rating. His career postseason record is 25–9, winning more playoff games than any other quarterback, and he has appeared in more playoff games than any player at any position. Brady has never had a losing season as a starting quarterback in the NFL. His 208 combined regular-season and postseason wins are also the most of any quarterback in NFL history. Because of his accomplishments and accolades, many analysts and sportswriters consider Brady to be among the greatest quarterbacks of all time. Due to his late draft selection, Brady is considered to be the biggest "steal" in the history of the NFL Draft.
<br><hr><br>
For his alleged involvement in the highly publicized Deflategate football tampering scandal, Brady was suspended for the first four games of the 2016 NFL season.[10] Subsequently, Brady went on to win Super Bowl LI and Super Bowl MVP.
<br><hr><br>
@en.wikipedia.org/wiki/Tom_Brady';
}

function printStatsInfo(){
  echo '<table class="table table-hover table-responsive">
  <thead>
    <tr>
      <th>Year</th>
      <th>Completion %</th>
      <th>Yards</th>
      <th>Touchdowns</th>
      <th>Intereptions</th>
      <th>QB Raiting</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2016</th>
      <td class="text-center">67.4%</td>
      <td class="text-center">3,554</td>
      <td class="text-center">28</td>
      <td class="text-center">2</td>
      <td class="text-center"d>112.2</td>
    </tr>
    <tr>
      <th scope="row">2015</th>
      <td class="text-center">64.4%</td>
      <td class="text-center">4,770</td>
      <td class="text-center">36</td>
      <td class="text-center">7</td>
      <td class="text-center">102.2</td>
    </tr>
    <tr>
      <th scope="row">2014</th>
      <td class="text-center">64.1%</td>
      <td class="text-center">4,109</td>
      <td class="text-center">33</td>
      <td class="text-center">9</td>
      <td class="text-center">97.4</td>
    </tr>
    <tr>
      <th scope="row">2013</th>
      <td class="text-center">60.5%</td>
      <td class="text-center">4,343</td>
      <td class="text-center">25</td>
      <td class="text-center">11</td>
      <td class="text-center">87.3</td>
    </tr>
    <tr>
      <th scope="row">2012</th>
      <td class="text-center">63.0%</td>
      <td class="text-center">4,827</td>
      <td class="text-center">34</td>
      <td class="text-center">8</td>
      <td class="text-center">98.7</td>
    </tr>
    <tr>
      <th scope="row">2011</th>
      <td class="text-center">65.6%</td>
      <td class="text-center">5,235</td>
      <td class="text-center">39</td>
      <td class="text-center">12</td>
      <td class="text-center">105.6</td>
    </tr>
    <tr>
      <th scope="row">2010</th>
      <td class="text-center">65.9%</td>
      <td class="text-center">3,900</td>
      <td class="text-center">36</td>
      <td class="text-center">4</td>
      <td class="text-center">111.0</td>
    </tr>
    <tr>
      <th scope="row">2009</th>
      <td class="text-center">65.7%</td>
      <td class="text-center">4,398</td>
      <td class="text-center">28</td>
      <td class="text-center">13</td>
      <td class="text-center">96.2</td>
    </tr>
    <tr>
      <th scope="row">2008</th>
      <td class="text-center">63.6%</td>
      <td class="text-center">76</td>
      <td class="text-center">0</td>
      <td class="text-center">0</td>
      <td class="text-center">83.9</td>
    </tr>
    <tr>
      <th scope="row">2007</th>
      <td class="text-center">68.9%</td>
      <td class="text-center">4,806</td>
      <td class="text-center">50</td>
      <td class="text-center">8</td>
      <td class="text-center">117.2</td>
    </tr>
    <tr>
      <th scope="row">2006</th>
      <td class="text-center">61.8%</td>
      <td class="text-center">3,529</td>
      <td class="text-center">24</td>
      <td class="text-center">12</td>
      <td class="text-center">87.9</td>
    </tr>
    <tr>
      <th scope="row">2005</th>
      <td class="text-center">63.0%</td>
      <td class="text-center">4,110</td>
      <td class="text-center">26</td>
      <td class="text-center">14</td>
      <td class="text-center">87.3</td>
    </tr>
    <tr>
      <th scope="row">2004</th>
      <td class="text-center">60.8%</td>
      <td class="text-center">3,692</td>
      <td class="text-center">28</td>
      <td class="text-center">14</td>
      <td class="text-center">92.6</td>
    </tr>
    <tr>
      <th scope="row">2003</th>
      <td class="text-center">60.2%</td>
      <td class="text-center">3,620</td>
      <td class="text-center">23</td>
      <td class="text-center">12</td>
      <td class="text-center">85.9</td>
    </tr>
    <tr>
      <th scope="row">2002</th>
      <td class="text-center">62.1%</td>
      <td class="text-center">3,764</td>
      <td class="text-center">28</td>
      <td class="text-center">14</td>
      <td class="text-center">85.7</td>
    </tr>
    <tr>
      <th scope="row">2001</th>
      <td class="text-center">63.9%</td>
      <td class="text-center">2,843</td>
      <td class="text-center">18</td>
      <td class="text-center">12</td>
      <td class="text-center">86.5</td>
    </tr>
    <tr>
      <th scope="row">2000</th>
      <td class="text-center">33.3%</td>
      <td class="text-center">6</td>
      <td class="text-center">0</td>
      <td class="text-center">0</td>
      <td class="text-center">42.4</td>
    </tr>
    <tr>
      <th scope="row">Career</th>
      <td class="text-center">63.8%</td>
      <td class="text-center">61,582</td>
      <td class="text-center">456</td>
      <td class="text-center">152</td>
      <td class="text-center">97.2</td>
    </tr>
  </tbody>
</table>
';
}

function showImages(){
  $dirname = "../images/";
	$images = glob($dirname."*.{gif,jpg,jpeg,png,JPG}",GLOB_BRACE);

	foreach($images as $image) {
    		echo '<img src="CS2830-Final-Project/'.$image.'" class="img-responsive" alt="image"><br>';
		}

	if (file_exists($dirname)) {
		echo "";
	} else {
    		echo "The dir $dirname does not exist";
		}
}

function showVideos(){
  echo '<div>
    <div>
      <h2 class="text-center">Superbowl 51 Highlights</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/7OybpnSW-DE" frameborder="0" allowfullscreen></iframe>
    </div>
    <div>
    <h3 class="text-center">2016-2017 Season Highlights</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/FUfU8tLXvAw" frameborder="0" allowfullscreen></iframe>
    </div>
    <div>
    <h4 class="text-center">2001-2015 Highlights</h4>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/bBQa8R8vr_o" frameborder="0" allowfullscreen></iframe>
  </div>';
}

function showAwards(){
  echo'5× Super Bowl champion (XXXVI, XXXVIII, XXXIX, XLIX, LI)<br><br>
4× Super Bowl MVP (XXXVI, XXXVIII, XLIX, LI)<br><br>
12× Pro Bowl (2001, 2004, 2005, 2007, 2009–2016)<br><br>
2× First-team All-Pro (2007, 2010)<br><br>
2× Second-team All-Pro (2005, 2016)<br><br>
2× NFL Most Valuable Player (2007, 2010)<br><br>
2× NFL Offensive Player of the Year (2007, 2010)<br><br>
NFL Comeback Player of the Year (2009)<br><br>
Bert Bell Award (2007)<br><br>
Associated Press Male Athlete of the Year (2007)<br><br>
Sports Illustrated Sportsman of the Year (2005)<br><br>
2× NFL passing yards leader (2005, 2007)<br><br>
4× NFL passing touchdowns leader (2002, 2007, 2010, 2015)<br><br>
NFL 2000s All-Decade Team<br><br>
National champion (1997)
<br><hr><br>
@en.wikipedia.org/wiki/Tom_Brady';
}


function print_modal(){
  echo '<div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="text-center modal-title">Modal Header</h4>
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
function printAbout(){
echo 'This is the fan page for the greatest Quarterback of all time Tom Brady.
<br><br>
Only a true fan knows the login credientials to view this page.
<br><br>
Creator: Lee Offir
';
}




 ?>
