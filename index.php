<?php
session_start();
require_once 'connect_database.php';

//truy vấn cơ sở dữ liệu để lấy danh sách sản phẩm

if(isset($_GET['btnSearch']) && !empty($_GET['txtsearch'])){
    $sql = "SELECT pr.id, pr.product_name, pr.price, pr.image, pr.quantity, ca.category_name FROM products AS pr INNER JOIN category AS ca WHERE ca.id = pr.id AND pr.product_name LIKE '%".$_GET['txtsearch']."%';;";
}else{
    $sql = "SELECT pr.id, pr.product_name, pr.price, pr.image, pr.quantity, ca.category_name FROM products AS pr INNER JOIN category AS ca WHERE ca.id = pr.category_id;";
}

// Hứng toàn bộ dữ liệu từ database nhả xuống
//$stmt = $conn->query($sql);
//$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
// hoặc

$resut = $conn->query($sql)->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Danh sách khóa học</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Danh Mục</a></li>
            <li><a href="#">Sản Phẩm</a></li>
        </ul>
        <div>Hello Admin</div>
    </div>

    <div class="container">
        <a href=""><button class="add-button" style="margin-left:30px;">Thêm</button></a>
        <form action="" method="get">
            <input type="text" class="search-input" name="txtsearch" placeholder="Tìm kiếm ...">
            <button class="search-button" name="btnSearch">Tìm kiếm</button>
        </form>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($resut as $value){
            ?>
            <tr>
                <td><?php echo $value['product_name'] ?></td>
                <td><img style="width: 150px; height: 150px" src="<?php echo isset($value['image'])? $value['image']:'' ?>"></td>
                <td><?php echo $value['price'] ?></td>
                <td><?php echo $value['quantity'] ?></td>
                <td><?php echo $value['category_name'] ?></td>
                <td>
                    <a class="edit-btn" href=">">Sửa</a>
                    <a class="delete-btn" href="">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
