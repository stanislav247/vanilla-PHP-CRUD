 
// Modal Trigger

$(document).ready(function(){
    $('.modal').modal({
        onOpenEnd: function() {
            $('#firstName').focus();
        }
    });
});


// Search Bar

$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#users-table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

// Autofocus on edit 

$(function() {
      var input = $("#inputContact1");
    var len = input.val().length;
    input[0].focus();
    input[0].setSelectionRange(len, len);
    });