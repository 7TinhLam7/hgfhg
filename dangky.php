<?php 
include('./controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['dangki'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['passwordAgain'];
	if($password == $repassword){
		$user = $c_user->dangkiTK($name,$email,$password);
	}
	else{
		echo "<div class='title'>".$_SESSION['error']." </div>";
	}
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
	<link rel="stylesheet" href="./public/css/dangky.css" />
</head>
<body>
	<?php require './public/header.php';?>
	<main>
		<div class="row holder">
			<div class="col-md-2">
			</div>
			<div class="col-md-8 signup">
				 <?php 
				 if(isset($_SESSION['error'])){
					 echo "<div class='title'>".$_SESSION['error']." </div>";
				 }
				 ?>

				<div class="panel panel-default">
					<div class="panel-heading">Đăng ký tài khoản</div>
					<div class="panel-body">
						<form method="POST" action="#">
							<div>
								<label>Họ tên</label>
								<input type="text" class="form-control" placeholder="Họ Tên" name="name" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
								<label>Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							>
							</div>
							<br>	
							<div>
								<label>Nhập mật khẩu</label>
								<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
								<label>Nhập lại mật khẩu</label>
								<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<div class="btn">
								<button type="submit" name="dangki">Đăng ký </button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<!-- end slide -->
	</div>
	<!-- end Page Content -->
</main>
<?php include './public/footer.php';?>

</body>
</html>