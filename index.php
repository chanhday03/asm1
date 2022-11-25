<?php
// Thông tin đưa vào form
$thong_tin_sinh_vien = [
    'id' => 'PH28830',
    'name' => 'LÊ THỊ TRANG',
];

// Đổi thành mảng 2 chiều gồm nhiều thông tin sv
$ds_sinh_vien = [
    [
        'id' => 'PH28830',
        'name' => 'LÊ THỊ TRANG',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT1 - CHANHDAY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Roboto Mono', monospace;
        }
        h1{
            margin-top: 30px;
            color: #216FA0;
            font-weight: bold;
        }
        tr{
            color: black;
        }
        table{
            margin-top: 10px;
            font-size: 20px;
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
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="manage">Trang Thông Tin </h1>
        </div>
    </header>


    <div class="container">
        <div class="all">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Mã Sinh Viên</th>
                        <th>Họ Tên</th>                                     
                    </tr>
                </thead>

                <tbody>
                    <?php for($i = 0; $i < count($ds_sinh_vien); $i++) {?>
                        <tr>
                            <td> <?php echo $ds_sinh_vien[$i]['id'] ?></td>                      
                            <td> <?php echo $ds_sinh_vien[$i]['name'] ?></td>                       
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>  

        <div class="container">
                <a href="./login.php"> 
                    <button type="submit" class="btn btn-success">Login</button>
                </a>
                <a href="./QLVN/list_pet.php"> <button type="submit" class="btn btn-success">Quản lý vật nuôi</button></a>
                <a href="./QLDMVN/list_category.php"> <button type="submit" class="btn btn-success">Quản lý loại vật nuôi</button></a>
        </div>
    </div>
    

    

</body>
</html>






