<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php require VIEW_ROOT . '/templates/sidebar.php'; ?>

<div class="outer-container">
	<div class="container">
    	<div class="row">
        	<div class="col">
           		<ul class="breadcrumbs flex align-items-center">
            		<li><a href="home.php">Home</a></li>
                	<li>Control Panel</li>
                	<li><a href="Panel.php">Portfolio Edit</a></li>
                	<li>Edit Page</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
       	</div><!-- .row -->

		<u><h2>Edit Page</h2></u>

		<div class="row list-row">
			<form action="<?php echo BASE_URL; ?>edit.php" method="POST" autocomplete="off">
				<label for="title">
					Title<br>
					<input type="text" name="title" id="title" value="<?php echo escape($page['title']); ?>">
				</label><br>

				<label for="label">
					Label<br>
					<input type="text" name="label" id="label" value="<?php echo escape($page['label']); ?>">
				</label><br>

				<label for="slug">
					Slug<br>
					<input type="text" name="slug" id="slug" value="<?php echo escape($page['slug']); ?>">
				</label><br>

				<label for="category">
					Category<br>
					<input type="text" name="category" id="category" value="<?php echo escape($page['category']); ?>">
				</label><br>

				<label for="body">
					Body<br>
					<textarea name="body" id="body" cols="30" rows="5"><?php echo escape($page['body']); ?></textarea>
				</label>

				<input type="hidden" name="id" value="<?php echo escape($page['id']); ?>">
				<input type="submit" value="Edit">
			</form>
		</div><!-- .row -->
	</div>
</div>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>