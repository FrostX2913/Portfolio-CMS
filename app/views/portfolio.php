<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>

<div class="outer-container">
	<div class="container">
    	<div class="row">
        	<div class="col">
           		<ul class="breadcrumbs flex align-items-center">
            		<li><a href="home.php">Home</a></li>
                	<li>Portfolio</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
       	</div><!-- .row -->

		<div class="row list-row">
			<div class="row">
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
			                        <h3><a href="<?php echo BASE_URL; ?>page.php?page=<?php echo escape($page['slug']); ?>"><?php echo escape($page['title']); ?></a></h3>
			                        </ul>
			                    </div><!-- .entry-content -->
			                </div><!-- .portfolio-content -->
			            </div><!-- .col -->
					<?php endforeach; ?>
					<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .list-row -->
	</div><!-- .container -->
</div><!-- .outer-container -->
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
	