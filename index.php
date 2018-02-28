<?php

$page = "Home";

include "includes/html-top.php";

?>

<!-- Start of index/home page. Similarity between students is that their all from Texas  -->

<body>
	<?php

		include "includes/nav.php";
		include "includes/header.php";

	?>

	<div class="head">
		<h1> Assignment 3: Updated Team Portfolio </h1>
		<h2>Texans by Team Amsterdam</h2>
	</div>

	<div class="container">

		<!-- This will be where we put our JS component. We have a couple pictures of Texas to switch between -->

		<!-- Each "about me" is currently followed by an image. I'll need to find a better image for all of em, or remove em completely -->

		<div>
			<h2>Fiona Jones</h2>
			<figure class="images">
				<img src="images/fiona.jpg" alt="Portugal Pic">
				<figcaption>Fiona Jones</figcaption>
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
				<img src="images/soccer.jpg" alt="Toronto, Canada">
				<figcaption>Toronto, Canada</figcaption>
			</figure>
			<p>I like to spend time watching shows and reading. Currently I am watching the Grey’s Anatomy, a show about the main character
				Meredith Grey who works in a hospital in Seattle, Washington. The show is about the people who work in the hospital and
				what they go through in and outside the hospital. As for reading my favorite book is Catcher in the Rye. The book is
				a 1951 novel by J. D. Salinger. It is about the main character Holden Caulfield, a teenager from New York City, is living
				in an unspecified institution in southern California near Hollywood in 1951. Caulfield intends to live with his brother
				D.B, an author and World War II veteran whom Holden resents for becoming a screenwriter, after his release in one month.
				As he waits, Holden recalls the events of the previous Christmas.
				<a href="ana.php"> Read More</a>
			</p>
		</div>

		<div>
			<h2>Amber Williams</h2>
			<figure class="firstfig">
				<img src="images/favphoto.jpg" alt="new york">
				<figcaption>New York City</figcaption>
			</figure>
			<p>I love photography and art, but I am very shy about sharing them. I have designed several merchandises for clubs the past
				3 years. My advisor gets upset because I refuse to put my signature on them. I just prefer to internally shriek with
				happiness when I see my designs on people's laptops or around campus. I have hearing issues, so I sometimes have look
				at people's lips to make sure I am hearing things correctly.
				<a href="amber.php"> Read More</a>
			</p>
		</div>
	</div>
	<!--.container -->
	<?php include "includes/footer.php"; ?>
	<?php include "includes/scripts.php"; ?>
</body>

</html>
