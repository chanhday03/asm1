<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm vật nuôi</title>
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
            margin: 10px;
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
		<a href="./list_pet.php">
			<button class="btn back">Back</button>
		</a>
		<h1>Form thêm vật nuôi</h1>
		<form action="./list_pet.php" method="get">
			<label for="">Mã vật nuôi</label><br>
			<input type="number" name="id" placeholder="Mã vật nuôi"><br><br>

			<label for="">Tên vật nuôi</label><br>
			<input type="text" name="name" placeholder="Tên vật nuôi"><br><br>

			<label for="">Kiểu vật nuôi</label><br>
			<input type="text" name="type" placeholder="Loại vật nuôi"><br><br>

			<label for="">Tuổi vật nuôi</label><br>
			<input type="number" name="age" placeholder="Tuổi vật nuôi"><br><br>

			<label for="">Cận nặng </label><br>
			<input type="number" name="weight" placeholder="Cân nặng vật nuôi"><br><br>

			<label for="">Image</label><br>
			<input type="text" name="image" placeholder="Hình ảnh vật nuôi"> <br>
			<button class="btn update">Tạo mới</button>
		</form>
	</div>
	
</body>
</html>