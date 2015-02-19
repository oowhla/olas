<?php

include_once "include/top.php";

?>

<div class="container container-main">

<!--
	<h1>Hello!</h1>
	<div class="row">
		<div class="col-md-6">
			<h3>You have come to the webpage of Ola Hansson. Developer and currently a student at LTH. Feel free to look around and contact me if you have any questions!</h3>
		</div>
	</div>
-->
	<hr>

	<div class="row">
		<div class="col-md-4">
			<h2>About</h2>
			<br>
			<a href="about.php"><img src="include/images/about.jpg"></a>
			<h4>Check out my CV and read about what I do and who I am.</h4>
		</div>
		<div class="col-md-4">
			<h2>Portfolio</h2>
			<br>
			<a href="portfolio.php"><img src="include/images/portfolio.jpg"></a>
			<h4>In my portfolio you can see my recent work.</h4>
		</div>
		<div class="col-md-4">
			<h2>Contact</h2>
			<br>
			<a href="contact.php"><img src="include/images/contact.jpg"></a>
			<h4>Here you can find the places to contact me; e-mail, facebook etc.</h4>
		</div>

	</div>
</div>



<script>
document.getElementById('index').setAttribute( "class", "active" );
</script>


<?php

include_once "include/bottom.php";

?>