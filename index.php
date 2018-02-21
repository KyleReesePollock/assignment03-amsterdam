<?php 

$page = "Home";

include "includes/html-top.php";

?>

<body>
	<div class="container">

		<?php 
		
		include "includes/header.php";
		
		include "includes/nav.php";
		
		?>

		<div>
			<h2>Fiona Jones</h2>
			<figure class="images">
				<img src="images/abroad.jpg" alt="Portugal Pic">
				<figcaption>Sunset in Lisbon, Portugal</figcaption>
			</figure>

			<p> My name is Fiona Jones and I am currently a junior in my third year at Rochester. I am currently majoring in computer
				science with a focus in web development, studio arts with concentrations in digital art and photography, as well as a
				small cluster of linguistics based around analysis of meaning. I am currently living in The Woodlands, Texas and I have
				two other siblings, one who is currently in high school in the Woodlands and another that currently attends New York
				University in New York City.
				<a href="fiona.php">
					Read More</a>
			</p>
		</div>

		<div>
			<h2>Ana Vaquera</h2>
			<figure class="firstfig">
				<img src="images/toronto.jpg" alt="Toronto, Canada">
				<figcaption>Toronto, Canada</figcaption>
			</figure>
			<p>My initital role for this assignment is coder. As coder I will be responsible for everything the user interacts with,
				from page load to every click and scroll. Checks to make sure everything in the front-end (not just JavaScript but also
				HTML and CSS) must work and work well (optimized). Images must be correctly prepped (optimized). Decides the particulars
				of plug-in usage and installation, web font installation, and general optimization and usage of all front- end technologies.
				I will also be in charge of all server interactions using PHP and MySQL including the addition of all code in the HTML
				documents to handle the server-side interactions (server- side includes too). Responsible for the set up and manipulation
				of database(s). Leads team collaboration (Github) and manages the file structure.
				<a href="ana.php"> Read More</a>
			</p>
		</div>

		<div>
			<h2>Amber Willaims</h2>
			<figure class="firstfig">
				<img src="images/favphoto.jpg" alt="new york">
				<figcaption>New York City</figcaption>
			</figure>
			<p>My initital role for this assignment is design artist. As the artist I am responsible for everything the user sees, in
				any browser type and size I decide the graphic design, colors, styles, fonts, layouts for any browser type and size.
				I will ensure that there are noreadability problems. That the presentation layer (styles) is coded in CSS so it is visually
				arranged a way that makes sense for the content and adds value to the structure layer. Also that styles (CSS) meet industry
				standards and best practices including W3C CSS validation within reason.
				<a href="amber.php"> Read More</a>
			</p>
		</div>

		<?php include "includes/footer.php"; ?>
	</div>
	<!--.container -->
	<?php include "includes/scripts.php"; ?>
</body>

</html>