<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>
<?php $i = 1; ?>
<div class="nav-bar-sep d-lg-none"></div>

<div class="outer-container blog-page">
    <div class="container-fluid">
        <div class="row">
			<?php if (empty($pages)): ?> 
				<p> No Pages </p>
			<?php else: ?>
			<?php foreach($pages as $page): ?>
	            <div class="col-12 col-xl-6 no-padding">
	                <?php if($i%4 == 1 || $i%4 == 2) : ?>
	                <div class="blog-content flex flex-xl-row-reverse">
	                <?php else : ?>
					<div class="blog-content flex">
					<?php endif; ?><?php $i++; ?>
	                    <figure>
	                        <a href="<?php echo BASE_URL; ?>page.php?page=<?php echo escape($page['slug']); ?>">
	                        <img src="<?php echo BASE_URL?>
							<?php if($page['imgloc']) : ?><?php echo escape($page['imgloc']); ?>
							<?php else : ?>images/9.jpg
	                    	<?php endif; ?>"alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column justify-content-between align-items-start">
	                        <header>
	                            <h3><a href="<?php echo BASE_URL; ?>article.php?page=<?php echo escape($page['slug']); ?>">
	                            <?php echo escape($page['title']); ?></a></h3>

	                            <div class="posted-by"><?php echo escape($page['author']); ?></div>
	                        </header>

	                        <footer class="flex flex-wrap align-items-center">
								<div class="posted-on"><?php echo $page['created']; ?></div>
	                        </footer>
	                    </div><!-- .entry-content -->
	                </div><!-- .blog-content -->
	            </div><!-- .col -->
			<?php endforeach; ?>
			<?php endif; ?>
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</div><!-- .outer-container -->

<?php require VIEW_ROOT . '/templates/footer.php'; ?>