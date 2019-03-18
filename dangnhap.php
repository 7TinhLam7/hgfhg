<?php 
include('./controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['dangnhap'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = $c_user->dangnhap($email, md5($password));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="./public/css/all.css" />
	<link rel="stylesheet" href="./public/css/header.css" />
	<link rel="stylesheet" href="./public/css/main.css" />
	<link rel="stylesheet" href="./public/css/footer.css" />
	<link rel="stylesheet" href="./public/css/dangnhap.css" />
</head>
<body>
	<?php include './public/header.php';?>
	<main>
		<!-- Page Content -->
		<div class="container">

			<!-- slider -->
			<div class="row holder">
				<div class="col-md-4"></div>
				<div class="col-md-4 login">
				<?php 
				 if(isset($_SESSION['user_error'])){
					 echo "<div class='title'>".$_SESSION['user_error']." </div>";
				 }
				 ?>
					<div class="panel panel-default">
						<div class="panel-heading">Đăng nhập</div>
						<div class="panel-body">
							<form method="POST">
								<div>
									<label>Email</label>
									<input type="email" class="form-control" placeholder="Email" name="email" 
									>
								</div>
								<br>	
								<div>
									<label>Mật khẩu</label>
									<input type="password" class="form-control" name="password">
								</div>
								<br>
								<div class="btn">
									<button type="submit" class="btn btn-success" name="dangnhap">Đăng nhập
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
			<!-- end slide -->
		</div>
		<!-- end Page Content -->
	</main>
	<?php include './public/footer.php';?>

</body>
</html>