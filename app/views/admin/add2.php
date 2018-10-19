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
                	<li>Add Page</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
       	</div><!-- .row -->
		
		<?php if(Session::exists('error')) {
		echo Session::flash('error');} ?>

		<div class="row list-row">
			<form action="<?php echo BASE_URL; ?>add2.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="title" id="title" placeholder="Title"><br/><br/>
					<input type="text" name="author" id="author" placeholder="Author"><br/><br/>
					<input type="text" name="slug" id="slug" placeholder="Slug"><br/><br/>
					<input type="text" name="category" id="category" placeholder="Category"><br/><br/>
					<textarea name="content" id="content" cols="30" rows="9" placeholder="Content"></textarea><br/><br/>
					<label for="upload">
						Upload
						<input type="file" name="fileupload" required="required"/>
					</label>


				<input type="submit" value="Add">
			</form>
		</div><!-- .row -->
	</div>
</div>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>