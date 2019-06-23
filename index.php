
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="cache-control" content="no-cache"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="robots" content="index, follow" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="author Adam Marsh: Walking Through Brambles" available at thefogandwave.com and milkandbourbon.com; UI Developer at ui-design-engineering.com/>
		<meta name="author" content="Adam Marsh - adam-marsh.com">
		<meta name='apple-mobile-web-app-capable' content='yes'>
		<meta name='apple-touch-fullscreen' content='yes'>
		<meta name='apple-mobile-web-app-status-bar-style' content='black'>
		<meta name='format-detection' content='telephone=no'>
		<title>Adam L Marsh -- www.scss-template.com</title>
		<!--<link rel="dns-prefetch" href="http://www.milkandbourbon.com/">-->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/scss-template.min.css" crossorigin="anonymous">

	</head>
	<body>
		<div class="page-wrap">
			<div class="container">
				<h1 class="fixed-top">Make This Responsive</h1>
				<div class="content" id="mostImportant">
					<p>While maintaining the heirarchy of importance. Create a js function to cycle through primary image. Use inline js to change secondary story images.</p>
					<p>
						Use SASS/SCSS to produce your css files. Also, use the package manager of your choice to concatenate and minify your js and css files.
					</p>
					<article class="main-story" id="next">
						<img id="image" src="https://picsum.photos/800/391" alt="Placeholder Image" class="img-fluid"/>
						<div class="story-intro">
							<h1>Most Important Story</h1>
							<p>This article has the most visual weight. <a href="https://picsum.photos/images" target=_"blank">Find out more here</a></p>
						</div>
					</article>
					<!-- Marketing Icons Section -->
					<section class="sub-stories">
						<div class="row">
							<div class="col-lg-4 mb-2">
								<article class="sub-story">
									<img src="https://picsum.photos/250/350/?image=1062" class="img-fluid" onclick="this.src='https://picsum.photos/250/350/?image=335'"/>
									<div class="story-intro">
										<h2>Less Important Story 1</h2>
										<p>This story has less visual weight.</p>
									</div>
								</article>
							</div>
							<div class="col-lg-4" mb-2>
								<article class="sub-story">
									<img src="https://picsum.photos/250/350/?image=530" class="img-fluid" onclick="this.src='https://picsum.photos/250/350/?image=435'"/>
									<div class="story-intro">
										<h2>Less Important Story 2</h2>
										<p>This story has less visual weight.</p>
									</div>
								</article>
							</div>
							<div class="col-lg-4 mb-2">
								<article class="sub-story last">
									<img src="https://picsum.photos/250/350/?image=40" class="img-fluid" onclick="this.src='https://picsum.photos/250/350/?image=535'"/>
									<div class="story-intro">
										<h2>Less Important Story 3</h2>
										<p>This story has less visual weight.</p>
									</div>
								</article>
							</div>
						</div>
						<!-- /.row -->
					</section>
					<h2>
						READme
					</h2>
					<p>
						The "Most Important Story" div will trigger a function that randomly changes the images. My array only contains three images, but you get the idea. I wanted to demonstrate that I know how to write an array and click through items in that array.
					</p>
					<p>
						The three Less Important stories use an inline onclick to advance to another random image. I wanted to demonstrate that I can use js inline when warranted.
					</p>
					<p>
						On mobile, I lightened the background opacity of the main-story class header since it obscured the image.
					</p>
					<p>
						The black text in the Sticky Header is hidden when the image is dark, so I added a subtle gradient so you can read it against a dark background. It's virtually unnoticable on a light background.
					</p>
					<p>
						The "Find out More Here" link opens in a new window, which is the better approach for this assignment.
					</p>
					<p>
						I had to add some Lorem ipsum so you had room to scroll...and to demonstrate the back to top link.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.
					</p>
					<a href="#mostImportant">Back to top</a>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="assets/js/scss-template.min.js"></script>
	</body>
</html>



