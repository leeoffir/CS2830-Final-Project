function modalFillBio(){
  $.ajax({
    url: 'profilescripts.php',
    data: {action: 'bioInfo'},
    type: 'post',
    success: function(ouput){
      $(".modal-body").html(output);
    }
  });
}
