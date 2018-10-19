<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>

<div class="nav-bar-sep d-lg-none"></div>

<div class="outer-container">
    <div class="single-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li>Single</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- .col -->
            </div><!-- .row -->
            
            <?php if (!$page): ?>
                <p>No page found</p>
            <?php else: ?>
            <div class="row">
                <div class="col-12">
                    <div class="featured-img">
                        <figure>
                            <img src="images/single-blog.jpg" alt="blog">
                        </figure>
                    </div><!-- .content-area -->
                </div><!-- .col -->

                <div class="col-12 col-lg-8">
                    <div class="content-area">
                        <header class="entry-header">
                            <div class="post-meta">
                                <a href="blog.php">Blog</a>
                            </div><!-- .meta-post -->

                            <h1><?php echo escape($page['title']); ?></h1>

                            <span class="byline">by <span class="author"><?php echo escape($page['author']); ?></a></span></span>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?php echo escape($page['content']); ?></p>
                        </div><!-- .entry-content -->
                    </div><!-- .content-area -->
                </div><!-- .col-12 -->

                <aside class="col-12 col-lg-3 offset-lg-1">
                    <div class="entry-meta">
                        <div class="posted-date">
                            <label>Date</label>

                            <span class="date-format"><a href="#"><?php echo $page['created']->format('jS M Y'); ?></a></span>
                        </div><!-- .posted-date -->

                        <div class="post-category">
                            <label>Category</label>
                            <span><a href="#">Photography</a></span>
                        </div><!-- .post-category -->

                        <div class="post-share">
                            <label>share</label>
                            <ul>
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!-- .post-share -->
                    </div><!-- .entry-meta -->
                </aside><!-- .col-md-3 -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
            <?php endif; ?>
        </div><!-- .container -->
    </div><!-- .single-post -->
</div><!-- .outer-container -->

<?php require VIEW_ROOT . '/templates/footer.php'; ?>