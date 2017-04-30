function modalFillBio(){
  $.ajax({
    url: 'scripts/profilescripts.php',
    data: {action: 'bioInfo'},
    type: 'post',
    success: function(output){
      $(".modal-body").html(output);
    }
  });
}
