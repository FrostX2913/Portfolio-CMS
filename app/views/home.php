<?php require VIEW_ROOT . '/templates/header.php'; ?>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<?php if(Session::exists('home')) {
echo Session::flash('home');} ?> 

<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>
<div class="welcome-container outer-container">
    <article id="slide01" class="section-1 fs">
		<div class="container portfolio-page">
           <div class="row">
        	<div class="col">
                <ul class="breadcrumbs flex align-items-center">
                	<li><a href="home.php">Home</a></li>
                	<li>Intro</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
           </div><!-- .row -->
           
           <div class="row justify-content-between">
                <div class="col-sm-5">
                	<div class="home-content">
                		<header>
                			<h1>Republic.</h1>
                		</header>
                		<section>
                			<p>A creative agency that crafts experiences</p>
                		</section>
					</div><!-- .home-content -->
			   	</div><!-- .col-sm-5 -->
			   
			   	<div class="col-sm-5">
					<div class="tilt home-image" data-tilt>
						<img class="nodrag home-image-inner" src="heart sketch/actualsketch.png" width="350" height="350" alt="heart"/>
					</div><!-- .home-image -->
			   	</div><!-- .col-sm-5 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</article><!-- #slide01 -->
	
	<article id="slide02" class="section-2 fs">
		<div class="container portfolio-page">
			<div class="row">
				<h1 class="tagline"><u>We are a Creative Agency.</u></h1>
			</div><!-- .row -->
		</div><!-- .container -->
	</article><!-- .section-2 -->

	<article id="slide03" class="section-3 fs">
		<div class="container portfolio-page">
			<div class="row align-items-center">
				<div class="col-sm-5">
					<header>
						<h1>Building brands since est. 2012</h1>
					</header>
					<section>
						<p>We specialize in impactful disruptive advertising</p>
					</section>
				</div>
				<div class="col-sm-4">
					<img src="images/home.png" alt="streetimage" height="300px" class="nodrag home1">
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</article><!-- .section-2 -->
</div><!-- .outer-container -->

<div class="scroll-down flex flex-column justify-content-center align-items-center d-none d-lg-block">
    <span class="arrow-down flex justify-content-center align-items-center"><img src="images/arrow-down.png" alt="arrow"></span>
    <span class="scroll-text">Scroll Down</span>
</div><!-- .scroll-down -->
<?php require VIEW_ROOT . '/templates/footer.php'; ?>