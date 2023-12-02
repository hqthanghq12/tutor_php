<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form thêm khóa học</title>
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
                        <option value="">Danh Mục</option>
                        <option value="">Danh Mục</option>
                </select>
                <span></span>
            </div>

            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="text" name="price" id="pricee" placeholder="Nhập giá">
                <span></span>
            </div>

            <div class="form-group">
                <label for="image">Ảnh:</label>
                <input type="file" name="image_url" accept="image/*">
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