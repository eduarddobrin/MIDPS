<!DOCTYPE html>
<html>
<head>

     <?php 
	 $title = "Feedback";
	 require_once "Z:\home\midpsSite\www\blocks\head.php" ;
	 ?>

	 <script src="/js/jquery-3.1.1.min.js"></script>
	 <script>
	   $(document).ready (function() {
	   	$("#done").click (function() {
	   		$('#messageShow').hide ();
	   		var name = $("#name").val();
	   		var email = $("#email").val();
	   		var subject = $("#subject").val();
	   		var message = $("#message").val();
	   		var fail = "";
	   		if (name.length < 3 ) fail = " Numele nu mai scrut de 3 simboale";
	   		else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
	   			fail ="Ai introdus email gresit";
	   		else if (subject.length < 5)
	   			fail = "Tema mai mica de 5 simboale";
	   		else if (message.length < 20)
	   			fail = "Mesajul mai scrut de 20 simboale";
	   		if (fail != ""){

	   			$('#messageShow').html (fail + "<div class='clear'><br></div>");
	   			$('#messageShow').show ();
	   			return false;
	   		 }
	   		 $.ajax ({
	   		 	url : '/ajax/feedback.php',
	   		 	type: 'POST',
	   		 	cache: false,
	   		 	data: {'name': name, 'email': email, 'subject':subject, 'message': message},
	   		 	dataType: 'html',
	   		 	success: function (data) {
	   		 		if(data == 'Mesajul trimis'){
	   		 			$('#messageShow').html (data + "<div class='clear'><br></div>");
	   			        $('#messageShow').show ();
	   		 		}
	   		 	}

	   		 });
	   	});
      
	   });
	 
	 </script>
</head>
<body>
     <?php require_once "Z:\home\midpsSite\www\blocks\header.php"  ?>
	 <div id="wrapper">
	    <div id="leftCol">
		
		<input type="text" placeholder="Nume" id="name" name="name"><br>
	    <input type="text" placeholder="Email" id="email" name="email"><br>
		<input type="text" placeholder="Tema mesajului" id="subjesct" name="subject"><br>
		<textarea name="message" id="message" placeholder="Introdu textul"></textarea><br>
		<div id="messageShow"></div>
		<input type="button" name="done" id="done" value="Trimite"><br>
		</div>
		<div id="rightCol">
		   <div class="banner">
		   <img src="/img/banners/1.jpg" alt="Banner 1" title="Banner 1">
		   </div>
		   <div class="banner">
		   <img src="/img/banners/2.jpg" alt="Banner 2" title="Banner 2">
		   </div>
		   <div class="banner">
		   <img src="/img/banners/5.jpg" alt="Banner 5" title="Banner 3">
		   </div>
		   <div class="banner">
		   <img src="/img/banners/4.jpg" alt="Banner 4" title="Banner 4">
		   </div>
		</div>
	 </div>
	 
	 <footer>
	       <div id="social">
		   <a href="https://www.facebook.com/profile.php?id=100005773517159" title="Facebook" target="_blank">
		   <img src="/img/facebook.png" alt="Facebook" title="Facebook"> </a>
		   <a href="https://github.com/eduarddobrin/MIDPS" title="GitHub" target="_blank">
		   <img src="/img/github.png" alt="GitHub" title="GitHub"> </a>
		   </div>
		   
		   <div id="rights">
		         All rights reserved &copy; <?php echo date ('Y')?>
		    </div>
	 </footer>
</body>
</html>
