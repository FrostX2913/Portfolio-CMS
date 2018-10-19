<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>



	<?php if (!$page): ?>
		<p>No page found</p>
	<?php else: ?>
<div class="outer-container">
    <div class="container single-portfolio">
        <div class="row">
            <div class="col-12">
                <div class="featured-img">
                    <figure>
                        <img src="<?php echo BASE_URL?><?php if($page['imgloc']) : ?><?php echo escape($page['imgloc']); ?><?php else : ?>images/single-portfolio.png<?php endif; ?>"alt="No big image">
                    </figure>
                </div><!-- .content-area -->
            </div><!-- .col-12 -->

            <div class="col-12 col-lg-8">
                <div class="content-area">
                    <header class="entry-header">
                        <h1><?php echo escape($page['title']); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p><?php echo escape($page['body']); ?></p>
                    </div><!-- .entry-content -->

                    <div class="post-share flex align-items-center">
                        <label>share:</label>

                        <ul class="flex align-items-center">
                            <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div><!-- .post-share -->
                </div><!-- .content-area -->
            </div><!-- .col-12 -->

            <aside class="col-12 col-lg-3 offset-lg-1">
                <div class="entry-meta">
                    <div class="posted-date">
                        <label>Date</label>

                        <span class="date-format"><a href="#"><?php echo escape($page['created']->format('jS M Y')); ?></a></span>
                    </div><!-- .posted-date -->

                    <div class="post-category">
                        <label>Category</label>
                        <span><a href="#"><?php echo escape($page['category']); ?></a></span>
                    </div><!-- .post-category -->
                </div><!-- .entry-meta -->
            </aside><!-- .col-md-3 -->
        </div><!-- .row -->

        <div class="row">
            <div class="col">
                <nav class="post-nav">
                    <ul class="flex justify-content-between align-items-center">
                        <li><a href="#"><img src="images/angle-left.png" alt="Previous"></a></li>
                        <li><a href="portfolio.php"><img src="images/portfolio-icon.png" alt="Back to Portfolio"></a></li>
                        <li><a href="#"><img src="images/angle-right.png" alt="Next"></a></li>
                    </ul>
                </nav><!-- .post-nav -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->
		
	<?php endif; ?>
	
<?php require VIEW_ROOT . '/templates/footer.php'; ?>