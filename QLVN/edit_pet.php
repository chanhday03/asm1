
<?php 
	//Dung PHP de lay du lieu
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	$type = isset($_GET['type']) ? $_GET['type'] : '';
	$age = isset($_GET['age']) ? $_GET['age'] : 0;
	$weight = isset($_GET['weight']) ? $_GET['weight'] : 0;
	$image = isset($_GET['image']) ? $_GET['image'] :  0;
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chỉnh sửa vật nuôi</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
		<style>
	    html {
			box-sizing: border-box;
            font-family: 'Roboto Mono', monospace;

		}
		h1{
            color: #216FA0;
            font-weight: bold;
        }
		.container {
			width: 980px;
			max-width: 100%;
			margin-right: auto;
			margin-left: auto;
			border: 2px solid #4eb8dd;
			padding: 20px;
			text-align: center;

		}
		
		.btn{
            margin-top: 10px;
            outline: none;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            font-weight: 500;
            background-color: #4eb8dd;
            padding: 10px;
            margin: 20px;
        }

		.color {
			background-color: #6dd9c5;
			color: #fff;
			border: none;
			width: 100px;
		}

		a {
			display: block;
			text-decoration: none;
		}
		input {
			width: 200px;
			height: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- <a href="./list_pet.php">
			<button class="btn color">Back</button>
		</a> -->
		<h1>Form cập nhật</h1>
		<form action="./list_pet.php" method="get">
			<label for="">Mã vật nuôi</label><br>
			<input type="number" name="id" placeholder="Mã vật nuôi" value="<?= $id ?>"><br><br>
			<label for="">Tên</label><br>

			<input type="text" name="name" placeholder="Tên " value="<?= $name ?>"><br><br>
			<label for="">Kiểu</label><br>

			<input type="text" name="type" placeholder="Loại" value="<?= $type ?>"><br><br>
			<label for="">Tuổi</label><br>

			<input type="number" name="age" placeholder="Tuổi vật nuôi" value="<?= $age ?>"><br><br>
			<label for="">Cân nặng</label><br>

			<input type="number" name="weight" placeholder="Cân nặng vật nuôi" value="<?= $weight ?>"><br><br>
			<label for="">Link ảnh</label><br>

			<input type="text" name="image" placeholder="Hình ảnh vật nuôi" value="<?= $image ?>"> <br>
			<button class="btn">Chỉnh sửa</button>
		</form>
	</div>
	
</body>
</html>