$(document).ready(function () {
    
    AnimateRotate(360);

    $('html').css({
    	'background-color': 'gray',
    	
    });

    $('#home').mouseenter(function() {
    	$('html').css({
    		'background-color': 'green'
    	});
    	$('.opaque').css({
    		'z-index': '1'
    	});
    	$(this).css({
    		'z-index': '2'
    	});
    	$({deg: 360}).animate({deg: 0}, {
    	    duration: 500,
    	    step: function(now){
    	        $("#home").css({
    	             transform: "rotate(" + now + "deg)"
    	        });
    	    }
    	});
    	$('#navigate').html('Intranet');

    });
    $('#book').mouseenter(function() {
    	$('html').css({
    		'background-color': 'brown'
    	});
    	$('.opaque').css({
    		'z-index': '1'
    	});
    	$(this).css({
    		'z-index': '2'
    	});
    	$({deg: 360}).animate({deg: 0}, {
    	    duration: 500,
    	    step: function(now){
    	        $("#book").css({
    	             transform: "rotate(" + now + "deg)"
    	        });
    	    }
    	});
    	$('#navigate').html('Moodle');
    });
    $('#mail').mouseenter(function() {
    	$('html').css({
    		'background-color': 'red'
    	});
    	$('.opaque').css({
    		'z-index': '1'
    	});
    	$(this).css({
    		'z-index': '2'
    	});
    	$({deg: 360}).animate({deg: 0}, {
    	    duration: 500,
    	    step: function(now){
    	        $("#mail").css({
    	             transform: "rotate(" + now + "deg)"
    	        });
    	    }
    	});
    	$('#navigate').html('Webmail');
    });
    $('#folder').mouseenter(function() {
    	$('html').css({
    		'background-color': 'teal'
    	});
    	$('.opaque').css({
    		'z-index': '1'
    	});
    	$(this).css({
    		'z-index': '2'
    	});
    	$({deg: 360}).animate({deg: 0}, {
    	    duration: 500,
    	    step: function(now){
    	        $("#folder").css({
    	             transform: "rotate(" + now + "deg)"
    	        });
    	    }
    	});
    	$('#navigate').html('Workspace');
    });
    $('#group').mouseenter(function() {
    	$('html').css({
    		'background-color': 'orange'
    	});
    	$('.opaque').css({
    		'z-index': '1'
    	});
    	$(this).css({
    		'z-index': '2'
    	});
    	$({deg: 360}).animate({deg: 0}, {
    	    duration: 500,
    	    step: function(now){
    	        $("#group").css({
    	             transform: "rotate(" + now + "deg)"
    	        });
    	    }
    	});
    	$('#navigate').html('Social');
    });
    $('#gear').mouseenter(function() {
    	$('html').css({
    		'background-color': 'purple'
    	});
    	$('.opaque').css({
    		'z-index': '1'
    	});
    	$(this).css({
    		'z-index': '2'
    	});
    	$({deg: 360}).animate({deg: 0}, {
    	    duration: 500,
    	    step: function(now){
    	        $("#gear").css({
    	             transform: "rotate(" + now + "deg)"
    	        });
    	    }
    	});
    	$('#navigate').html('Utilities');
    });
});

function AnimateRotate(d){
    var elem = $("#circles");

    $({deg: 0}).animate({deg: d}, {
        duration: 2000,
        step: function(now){
            elem.css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
    $({deg: d}).animate({deg: 0}, {
        duration: 2000,
        step: function(now){
            $(".opaque").css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
}