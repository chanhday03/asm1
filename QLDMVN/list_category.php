<?php
$ds_danhmuc = [
    [
        'id' => 1,
        'name' => 'Cat'
    ],
    [
        'id' => 2,
        'name' => 'Dog'
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List-category</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Roboto Mono', monospace;
            text-align: center; 
        }
        img{
            display: inline-block;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn{
            outline: none;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            font-weight: 500;
            background-color: #4eb8dd;
            padding: 10px;
            margin: 10px;
        }
        table{
            display: inline-block;
            text-align: center;
            font-size: 20px;
        }
        th {
            padding: 30px;
        }
        td{
            padding: 20px;
        }
        </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="https://matpetfamily.com/wp-content/uploads/2019/11/m%E1%BA%ADt-pet-logo-300x297.png" alt="">
    </div>
    <table class="table table-hover">
       <thead>
        <tr>
            <th> id</th>
            <th> Tên</th>
        </tr>
       </thead>
    
    <tbody>
        <?php
        for($i=0; $i<count($ds_danhmuc); $i++){?>
           <tr>
            <td><?= $ds_danhmuc[$i]['id']?></td>
            <td><?= $ds_danhmuc[$i]['name']?></td>
            <td><a href="edit_category.php"><button class="btn btn-edit"> Sửa </button> </a></td>
            <td> <button class="btn btn-delete"> Xóa</button></td>
           </tr>  
           <?php  }?>  
    </tbody>
    </table>
    <a href="./create_category.php"> <button class="btn btn-add"> Thêm mới </button> </a>
        </div>
</body>
</html>