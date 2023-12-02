<?php
session_start();

require_once 'connect_database.php';
$listCT = "SELECT * FROM category";
$result = $conn->query($listCT)->fetchAll();

if(isset($_POST['btnSave'])){
  
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        // thư mục sẽ được lưu ảnh vào thư mục image
        $targetDir = "images/";
        //Đường dẫn đến file được lưu
        $targetFile = $targetDir.$_FILES['image']['name'];
        

        // Tiến hành upload file ảnh
        if(move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)){
            $image_url = $targetFile;
        }

        $sql = "INSERT INTO products VALUES (NULL,'$product_name', '$price', '$image_url', '$quantity', '$category_id')";
        $check =  $conn->exec($sql);
        if($check){
            header("location:index.php");
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form thêm sản phẩm</title>
</head>
<body>
    <div class="add-form">
        <h1>Thêm Khóa Học</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Tên Sản Phẩm:</label>
                <input type="text" name="product_name" id="product_name" placeholder="Nhập tên sản phẩm">
                <span></span>
            </div>

            <div class="form-group">
                <label for="category">Danh mục:</label>
                <select id="category" name="category_id">
                    <option value="">Chọn danh mục</option>
                    <?php
                    foreach ($result as $value ){
                    ?>
                        <option value="<?php echo $value['id'] ?>"><?php echo $value['category_name']?></option>
                    <?php } ?>
                </select>
                <span></span>
            </div>

            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="text" name="price" id="price" placeholder="Nhập giá">
                <span></span>
            </div>

            <div class="form-group">
                <label for="image">Ảnh:</label>
                <input type="file" name="image" accept="image/*">
                <span></span>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="text" name="quantity" id="pricee" placeholder="Nhập số lượng">
                <span></span>
            </div>

            <button class="submit-button" name="btnSave" type="submit">Thêm</button>
        </form>

    </div>

</body>
</html>