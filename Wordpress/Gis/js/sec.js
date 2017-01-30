$(function(){
	$(document).bind("contextmenu",function(e){
		return false;
	});
});


$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});