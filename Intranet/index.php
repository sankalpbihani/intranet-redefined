
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Intranet</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styles-validate.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/look.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	
	<?php
		if (!isset($_SESSION)) {
	        session_start();
	    }
		if (isset($_SESSION['logged_in'])) {
			if ($_SESSION['logged_in']) {
				$logged_in = true;
				// echo $_SESSION['user_nm'];
		  //  		echo $_SESSION['name'];
		  //  		echo $_SESSION['role'];
			}else{
				$logged_in = false;
			}
		}else{
			var_dump('not logged');
			$logged_in = false;
		}

	?>
	
	<script type="text/javascript">
		$(function() {
			if(!$.support.placeholder) { 
				var active = document.activeElement;
				$(':text').focus(function () {
					if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
						$(this).val('').removeClass('hasPlaceholder');
					}
				}).blur(function () {
					if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
						$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
					}
				});
				$(':text').blur();
				$(active).focus();
				$('form').submit(function () {
					$(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
				});
			}
		});
	</script>

</head>
<body>


<div id="page">

       <div id="content_container">
       
               <div id="content">
               <div id="logout">
               		<a  class="btn" href="logout.php"><i class="fa fa-lock fa-fw"></i> Log Out</a>
               		
               </div>
               	<div id="top-box"></div>
               	<div id="login-box">
               
	               	<form class="contact_form" action="login.php" method="post" name="contact_form">
               
	                     <!START input>
	                     <div class="input-prepend">
	                     <div class="arrow-right"></div>
	                     <span class="add-on"><i class="icon-user"></i></span>
	                     <input name="username" class="username" type="text" placeholder="Username" required /> 
	                     
	                     </div><!END input>
	                     
	                     <!START input>
	                     <div class="input-prepend">
	                     <div class="arrow-right"></div>
	                     <span class="add-on"><i class="icon-key"></i></span>
	                     <input name="password" type="password" placeholder="Password" required />
	                     <!END input>
	                     
	                     <!START submit>
	                     <a class="btn" id="submit" href="#"><i class=" icon-caret-right"></i></a>
	                     </div>
                    </form>
                     
                </div><!END login-box>
              
            </div><!END content>
      </div><!END content-container>
</div><!END page>

<div id="label">
	<label id="navigate"></label>
</div>

<div id="circles">
	<span id="home" class="fa-stack fa-5x opaque">
	  <a href="http://intranet.iitg.ernet.in">
	  	<i class="fa fa-circle fa-stack-2x trans"></i>
	  	<i class="fa fa-home fa-stack-1x fa-inverse color "></i>
	  </a>
	</span>
	<span id="book" class="fa-stack fa-5x opaque">
	<a href="../moodle/index.php">
	  <i class="fa fa-circle fa-stack-2x trans"></i>
	  <i class="fa fa-book fa-stack-1x fa-inverse color "></i>
	  </a>
	</span>
	<span id="mail" class="fa-stack fa-5x opaque">
	<a href="https://webmail.iitg.ernet.in">
	  <i class="fa fa-circle fa-stack-2x trans"></i>
	  <i class="fa  fa-envelope fa-stack-1x fa-inverse color "></i>
	  </a>
	</span>
	<span id="folder" class="fa-stack fa-5x opaque">
	<a href="../pydio">
	  <i class="fa fa-circle fa-stack-2x trans"></i>
	  <i class="fa fa-folder-open fa-stack-1x fa-inverse color "></i>
	  </a>
	</span>
	<span id="group" class="fa-stack fa-5x opaque">
	<a href="../Social/elgg">
	  <i class="fa fa-circle fa-stack-2x trans"></i>
	  <i class="fa fa-group fa-stack-1x fa-inverse color "></i>
	  </a>
	</span>
	<span id="gear" class="fa-stack fa-5x opaque">
	<a href="utilities/">
	  <i class="fa fa-circle fa-stack-2x trans"></i>
	  <i class="fa fa-gears fa-stack-1x fa-inverse color "></i>
	  </a>
	</span>
</div>

<script type="text/javascript" src="js/rotate.js"></script>
<script type="text/javascript">
	var logged_in = "<?php echo $logged_in; ?>";
	if (logged_in) {
		$('#login-box').hide();
	}else{
		$('#logout').hide();
	}

	$("input").keypress(function(event) {
	    if (event.which == 13) {
	        event.preventDefault();
	        $("form").submit();
	    }
	});
	$('#submit').click(function() {
		$("form").submit();
	});
</script>
</body>
</html>

<!-- <button id="login">
	Login
</button>

<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/look.css">
<script type="text/javascript">
	$('#login').click(function() {

		window.location = 'login.php';
	});
</script> -->

