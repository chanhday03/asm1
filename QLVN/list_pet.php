<?php
$animalArray = [
    [
        'id' => 01,
        'name' => 'Cat',
        'type' => 'Pet',
        'age' => '1 year',
        'weight' => 3.5,
        'image' => 'https://www.google.com/search?q=con+v%E1%BB%8Bt+con&tbm=isch&ved=2ahUKEwj7kfPbrcj7AhUTgpQKHU9JAzQQ2-cCegQIABAA&oq=con+v%E1%BB%8Bt+con&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAgQHjoGCAAQBxAeUJgCWNkZYJ0daAFwAHgCgAGJA4gBxhKSAQc5LjUuMi4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=CTKAY7vpC5OE0gTPko2gAw&bih=736&biw=767#imgrc=10BcV1BiT0WVMM&imgdii=O-JHTsKKWH_nWM'
        // 'image' => 'https://wasabi.sgp1.digitaloceanspaces.com/sgkphattriennangluc.vn/2022/05/Mo-ta-cua-con-meo.jpg'

    ],
    [
        'id' => 02,
        'name' => 'Dog',
        'type' => 'Pet',
        'age' => '1 years',
        'weight' => 5.5,
        'image' => 'https://www.google.com/search?q=con+v%E1%BB%8Bt+con&tbm=isch&ved=2ahUKEwj7kfPbrcj7AhUTgpQKHU9JAzQQ2-cCegQIABAA&oq=con+v%E1%BB%8Bt+con&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAgQHjoGCAAQBxAeUJgCWNkZYJ0daAFwAHgCgAGJA4gBxhKSAQc5LjUuMi4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=CTKAY7vpC5OE0gTPko2gAw&bih=736&biw=767#imgrc=10BcV1BiT0WVMM&imgdii=O-JHTsKKWH_nWM'
        // 'image' => 'http://khoahocphattrien.vn/Images/Uploaded/Share/2018/05/22/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA4OC85MTEvb3JpZ2luYWwvZ29sZGVuLXJldHJpZXZlci1wdXBweS5qcGVn.jpg'

    ],
    [
        'id' => 03,
        'name' => 'Dog',
        'type' => 'Pet',
        'age' => '2 years',
        'weight' => 2.5,
        'image' => 'https://www.google.com/search?q=con+v%E1%BB%8Bt+con&tbm=isch&ved=2ahUKEwj7kfPbrcj7AhUTgpQKHU9JAzQQ2-cCegQIABAA&oq=con+v%E1%BB%8Bt+con&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAgQHjoGCAAQBxAeUJgCWNkZYJ0daAFwAHgCgAGJA4gBxhKSAQc5LjUuMi4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=CTKAY7vpC5OE0gTPko2gAw&bih=736&biw=767#imgrc=10BcV1BiT0WVMM&imgdii=O-JHTsKKWH_nWM'
        // 'image' => 'https://www.google.com/search?q=con+cho&tbm=isch&ved=2ahUKEwjIhK_dycf7AhXN6mEKHajuB8wQ2-cCegQIABAA&oq=con+cho&gs_lcp=CgNpbWcQAzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BwgAEIAEEBhQ7ARYlA9guxFoAHAAeACAAfEDiAHVDZIBCTAuMy4yLjEuMZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=MMl_Y8isLM3VhwOo3Z_gDA&bih=736&biw=767#imgrc=yqY5IRfd-asc8M'

    ],
    [
        'id' => 04,
        'name' => 'Pig',
        'type' => 'Pet',
        'age' => '3 months',
        'weight' => 10,
        'image' => 'https://www.google.com/search?q=con+v%E1%BB%8Bt+con&tbm=isch&ved=2ahUKEwj7kfPbrcj7AhUTgpQKHU9JAzQQ2-cCegQIABAA&oq=con+v%E1%BB%8Bt+con&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAgQHjoGCAAQBxAeUJgCWNkZYJ0daAFwAHgCgAGJA4gBxhKSAQc5LjUuMi4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=CTKAY7vpC5OE0gTPko2gAw&bih=736&biw=767#imgrc=10BcV1BiT0WVMM&imgdii=O-JHTsKKWH_nWM'
        // 'image' => 'https://img4.thuthuatphanmem.vn/uploads/2020/03/20/anh-con-heo-dang-yeu_030600702.jpg'

    ],
    [
        'id' => 05,
        'name' => 'Duck',
        'type' => 'Pet',
        'age' => '2 months',
        'weight' => 2.5,
        'image' => 'https://www.google.com/search?q=con+v%E1%BB%8Bt+con&tbm=isch&ved=2ahUKEwj7kfPbrcj7AhUTgpQKHU9JAzQQ2-cCegQIABAA&oq=con+v%E1%BB%8Bt+con&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAgQHjoGCAAQBxAeUJgCWNkZYJ0daAFwAHgCgAGJA4gBxhKSAQc5LjUuMi4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=CTKAY7vpC5OE0gTPko2gAw&bih=736&biw=767#imgrc=10BcV1BiT0WVMM&imgdii=O-JHTsKKWH_nWM'
        // 'image' => 'https://dogstar.vn/wp-content/uploads/2022/07/unnamed-file.jpg'

    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý vật nuôi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Roboto Mono', monospace;
            text-align: center; 
        }
        .container{
            margin: 0;
            padding: 0;
        }
        h1{
            color: #216FA0;
            font-weight: bold;
        }
        .header button{
            outline: none;
            border-radius: 5px;
            width: 100px;
            color: white;
            font-size: 20px;
            font-weight: 700;
            background-color: #216FA0;
            padding: 8px;
            
        }

        table{
            display: inline-block;
            text-align: center;
            font-size: 20px;
        }
        th {
            padding: 20px;
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
        a:hover{
            color: white;
        }
        .btn-new{
            outline: none;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            font-weight: 500;
            background-color: #4eb8dd;
            padding: 10px;
            margin-top: 20px;
        }
        image{
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="https://matpetfamily.com/wp-content/uploads/2019/11/m%E1%BA%ADt-pet-logo-300x297.png" alt="">
            </div>
            <h1>Danh sách vật nuôi</h1>
            <a href="">
                <button class="button color">Back</button>
            </a>
        </div>
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Cân nặng (kg)</th>
                        <th scope="col">Hình Ảnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($i = 0; $i<count($animalArray);$i++){
                        $id = $animalArray[$i]['id'];
                        $name = $animalArray[$i]['name'];
                        $type = $animalArray[$i]['type'];
                        $age = $animalArray[$i]['age'];
                        $weight = $animalArray[$i]['weight'];
                        $image = $animalArray[$i]['image'];
                        $url_edit = "edit_pet.php?id=$id&name=$name&type=$type&age=$age&weight=$weight&image=$image";
                        $url_delete = "delete_pet.php?id=$id&name=$name&type=$type&age=$age&weight=$weight&image=$image";                        
                                  
                    ?>

                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $type ?></td>
                            <td><?= $age ?></td>
                            <td><?= $weight ?></td>
                            <td><img src=" <?= $animalArray[$i]['image'] ?> "></td>
                            <td>
                                <a href="<?= $url_edit ?>"><button class="btn">Edit</button></a>
                                <a href="<?= $url_delete ?>"><button class="btn">Delete</button></a>
                            </td>                          
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
            <div class="add">
                        <a href="./create_pet.php">
                            <button class="btn-new">Thêm vật nuôi mới</button>
                        </a>
            </div>
        </div>
    </div>
</body>
</html>