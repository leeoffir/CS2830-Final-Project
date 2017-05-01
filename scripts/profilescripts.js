function modalFillBio(){
  $.ajax({
    url: 'scripts/profilescripts.php',
    data: {action: 'bioInfo'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
      $(".modal-header").html("Wiki Bio");
    }
  });
}

function modalFillStats(){
  $.ajax({
    url: 'scripts/profilescripts.php',
    data: {action: 'stats'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
      $(".modal-header").html("Player Statistics");
    }
  });
}

function displayImages(){
  $.ajax({
    url: 'scripts/profilescripts.php',
    data: {action: 'images'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
      $(".modal-header").html("Images");
    }
  });
}

function displayVideos(){
  $.ajax({
    url: 'scripts/profilescripts.php',
    data: {action: 'videos'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
      $(".modal-header").html("Highlights");
    }
  });
}
git
function displayAwards(){
  $.ajax({
    url: 'scripts/profilescripts.php',
    data: {action: 'awards'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
      $(".modal-header").html("Awards and Honors");
    }
  });
}

function displayAbout(){
  $.ajax({
    url: 'scripts/process.php',
    data: {action: 'about'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
      $(".modal-header").html("About this page");
    }
  });
}
