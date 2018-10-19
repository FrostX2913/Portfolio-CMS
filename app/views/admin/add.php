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
                	<li>Add Page</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
       	</div><!-- .row -->
		<?php if(Session::exists('error')) {
			echo Session::flash('error');} ?>
		<div class="row list-row">
			<form action="<?php echo BASE_URL; ?>add.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="title" id="title" placeholder="Title"><br/><br/>
					<input type="text" name="label" id="label" placeholder="Label"><br/><br/>
					<input type="text" name="slug" id="slug" placeholder="Slug"><br/><br/>
					<input type="text" name="category" id="category" placeholder="Category"><br/><br/>
					<textarea name="body" id="body" cols="30" rows="5" placeholder="Description"></textarea><br/><br/>
					<label for="upload">
						Upload
						<input type="file" name="fileupload" required="required"/>
					</label>


				<input type="submit" value="Add"><br/><br/>
			</form>
		</div><!-- .row -->
	</div>
</div>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>