<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/stylesheets/style.css">
	</head>
	<body>
		<h1><?php echo $title; ?></h1>
		<div class="col-md-4">
			<h2>Create user</h2>
			<?php
				$attributes = array('class' => 'well');
				echo form_open('users/create', $attributes);
			?>
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<input class="btn btn-default" type="submit">
			</form>
		</div>
		<div class="col-md-6">
			<h2>Users</h2>
			<ul>
				<?php foreach ($users as $user): ?>
				<li>
					<strong><?php echo $user['username']; ?></strong>
					<a href="/users/<?php echo $user['id']; ?>/destroy"
						class="btn btn-xs btn-warning">
						delete
					</a>
					<ul>
					</ul>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</body>
	</html>
