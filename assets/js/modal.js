
$("#delete_but").on( "click", function() {
        $('#delete_but').modal('hide');  
});
$("#delete_but").on( "click", function() {
        $('#message_delete').modal('show');  
});



//set button id on click to hide first modal
$("#edit_possibility").on( "click", function() {
        $('#edit_but').modal('hide');  
});
//trigger next modal
$("#edit_possibility").on( "click", function() {
        $('#edit_delete').modal('show');  
});



