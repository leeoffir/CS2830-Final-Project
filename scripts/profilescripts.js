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
