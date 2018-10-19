<?php
require_once 'core/start.php';
require VIEW_ROOT . '/templates/header.php'; 
require VIEW_ROOT . '/templates/sidebar.php';

$user = new User();

if(!$user->isLoggedIn()) {
	Redirect::to('index.php');
}

if(Input::exists()) { //csrf protection
	if(Token::check(Input::get('token'))) {

		$validate = new Validate(); //validation
		$validation = $validate->check($_POST, array(
			//fields in $_POST
			'name' => array(
				'required' 	=> true,
				'min' 		=> 2,
				'max' 		=> 50
			)
		));

		if($validation->passed()) {
			
			try {
				$user->update(array( //update
					'name' => Input::get('name') //fields in $_POST
				));

				//session:flash
				Redirect::to('profile.php');
			} catch(Exception $e) {
				die($e->getMessage()); //exception object in php
			}

		} else {
			foreach($validation->errors() as $error) {
				echo $error, '<br/>';
			}
		}

	}
}

?>

<div class="outer-container">
    <article id="slide01" class="section-1 fs">
		<div class="container portfolio-page">
           <div class="row">
        	<div class="col">
                <ul class="breadcrumbs flex align-items-center">
                	<li><a href="home.php">Home</a></li>
                	<li><a href="profile.php">Profile</a></li>
                	<li>Change Password</li>
            	</ul><!-- .breadcrumbs -->
            </div><!-- .col -->
          </div><!-- .row -->

		<div class="row list-row">
			<div class="row">
				<div class="col-12">
					<form action="" method="post">
						<div class="field">
							<label for="name">Name</label>
								<input type="text" name="name" value="<?php echo escape($user->data()->name); ?>">

								<input type="submit" value="Update">
								<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
						</div>
					</form>
	            </div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .list-row -->
	</div><!-- .container -->
</div><!-- .outer-container -->