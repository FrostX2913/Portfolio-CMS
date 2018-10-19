<?php require VIEW_ROOT . '/templates/header.php'; ?>
<body class="list">
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>

<?php
if(!$user->hasPermission('moderator')) {
	Redirect::to('home.php');
}
?>

<div class="outer-container">
	<div class="container">
    	<div class="row">
        	<div class="col">
           		<ul class="breadcrumbs flex align-items-center">
            		<li><a href="home.php">Home</a></li>
                	<li><a href="profile.php">Profile</a></li>
                	<li><a href="list.php">Blog Edit</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
       	</div><!-- .row -->

		<div class="row list-row">
			<div class="col">
				<a class= "button" href="<?php echo BASE_URL; ?>add2.php">New Entry</a>
				<?php if(Session::exists('successful')) {
				echo Session::flash('successful');} ?> 
			</div>
		</div>

		<div class="row list-row">
					<?php if (empty($pages)): ?> 
						<p> No Pages </p>
					<?php else: ?>
					<?php foreach($pages as $page): ?>
						<div class="col-12 col-md-6 col-lg-3">
			                <div class="portfolio-content">
			                    <figure>
			                        <img src="<?php echo BASE_URL?>
									<?php if($page['imgloc']) : ?><?php echo escape($page['imgloc']); ?>
									<?php else : ?>images/4.jpg
			                    	<?php endif; ?>"alt="">
			                    </figure>

			                    <div class="entry-content flex flex-column align-items-center justify-content-center">
			                        <h3><a href="<?php echo BASE_URL; ?>article.php?page=<?php echo escape($page['slug']); ?>"><?php echo escape($page['title']); ?></a></h3>
									<?php if($user->hasPermission('admin')) : ?>
			                        <ul class="flex flex-wrap justify-content-center">
			                            <li><a href="<?php echo BASE_URL; ?>edit2.php?id=<?php echo escape($page['id']); ?>">Edit</a></li>
			                            <li><a href="<?php echo BASE_URL; ?>delete2.php?id=<?php echo escape($page['id']);?>">Delete</a></li>
			                        </ul>
			                    	<?php endif; ?>
			                    </div><!-- .entry-content -->
			                </div><!-- .portfolio-content -->
			            </div><!-- .col -->
					<?php endforeach; ?>
				<?php endif; ?>
		</div><!-- .row -->
	</div>
</div>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>