$(document).ready(function() {
    
    $(document).on('submit','#routeForm',function(){
        let value = $('#routeStart').val();
        $("#list").append('<li>'+value+'</li>');
        event.preventDefault();
    });
});