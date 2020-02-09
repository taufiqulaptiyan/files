<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		  <ul class="navbar-nav">
		    <li class="nav-item ">
		      <a class="nav-link" href="<?= base_url('user/');?>">Home</a>
		    </li>
		    <li class="nav-item active">
		      <a class="nav-link" href="">Login</a>
		    </li>
		    <li class="nav-item ">
		      <a class="nav-link" href="<?= base_url('post/');?>">Feed</a>
		    </li>
		  </ul>		  
	</nav>

	<div class="container">

		<br><br><br><br>
		<center>
		<div class="jumbotron">
		<h1>Login</h1>
		<?=$this->session->flashdata('gagal');?>
		<form action="<?= base_url('user/authenticate');?>" method="POST">
		<table>
			<tr>
			<div class="form-group">
        		<td><label>Username</label></td>
        		<td><input type="text" class="form-control" placeholder="Username" name="username"></td>
        	</div>
			</tr>
			<tr>
			<div class="form-group">
        		<td><label>Password</label></td>
        		<td><input type="password" class="form-control" placeholder="Password" name="password"></td>
        	</div>
			</tr>
		<br>
		</table>
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<br>
		<a href="<?= base_url('user/register');?>">Belum punya akun ?</a>
	</div>

</center>
	</div>
</body>
</html>