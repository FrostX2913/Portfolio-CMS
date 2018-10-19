<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>

<div class="outer-container">
	<div class="container">
    	<div class="row">
        	<div class="col">
           		<ul class="breadcrumbs flex align-items-center">
            		<li><a href="home.php">Home</a></li>
                	<li>Control Panel</li>
                	<li><a href="Panel2.php">Blog Edit</a></li>
                	<li>Edit Page</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
       	</div><!-- .row -->

	<u><h2>Edit Page</h2></u>
			<form action="<?php echo BASE_URL; ?>edit2.php" method="POST" autocomplete="off">
				<div class="col-xs-6 form-group row">
				<label for="title">
					Title
					<input type="text" name="title" id="title" value="<?php echo escape($page['title']); ?>">
				</label>

				<label for="Author">
					 Author
					<input type="text" name="author" id="author" value="<?php echo escape($page['author']); ?>">
				</label>

				<label for="slug">
					Slug
					<input type="text" name="slug" id="slug" value="<?php echo escape($page['slug']); ?>">
				</label>

				<label for="category">
					Category
					<input type="text" name="category" id="category" value="<?php echo escape($page['category']); ?>">
				</label>
				</div>
				<div class="col-xs-6 form-group">
				<label for="Content">
					Content<br>
					<textarea name="content" id="content" cols="40" rows="12"><?php echo escape($page['content']); ?></textarea>
				</label>
				</div>

				<input type="hidden" name="id" value="<?php echo escape($page['id']); ?>">
				<input type="submit" value="Edit">
			</form>
		</div><!-- .row -->
	</div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>