<!DOCTYPE html>
<html>
<head>

     <?php 
	 require_once "functions/functions.php";
	 $news = getNews(3, $_GET["id"]);
	 $title = "Edya[Lab#3 MIDPS]";
	 require_once "Z:\home\midpsSite\www\blocks\head.php" ;
	
	 ?>
	 
</head>
<body>
     <?php
	 
      require_once "Z:\home\midpsSite\www\blocks\header.php" 
	    
	 ?>
	 <div id="wrapper">
	    <div id="leftCol">
		<?php
		    for ($i = 0; $i < count($news); $i++) {
			if ($i == 0)
				echo "<div id=\"bigArticle\">";
			else 
				echo "<div class=\"article\">";
			echo '<img src="/img/articles/'.$news[$i]["id"].'.jpg" alt="article '.$news[$i]["id"].'" title="article '.$news[$i]["id"].'">
	                          <h2>'.$news[$i]["title"].' </h2>
    <p>'.$news[$i]["intro_text"].' </p>
	 <a href="/article.php?id='.$news[$i]["id"].'"> 
	 <div class="more"> Continuare</div>
	 </a>
		   </div>';
		   if($i == 0)
			   echo "<div class=\"clear\"><br></div>";
			}
		
		?>
	
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





 