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
            <tr>
                <td>OPPO A58</td>
                <td><img src="images/image1.png" alt=""></td>
                <td>4990000</td>
                <td>50</td>
                <td>Điện thoại</td>
                <td>
                    <a class="edit-btn" href="#">Sửa</a>
                    <a class="delete-btn" href="#">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>iPhone 15 Pro Max</td>
                <td><img src="images/image2.png" alt=""></td>
                <td>33990000</td>
                <td>50</td>
                <td>Điện thoại</td>
                <td>
                    <a class="edit-btn" href="#">Sửa</a>
                    <a class="delete-btn" href="#">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>MacBook Pro 16</td>
                <td><img src="images/image4.png" alt=""></td>
                <td>64990000</td>
                <td>50</td>
                <td>Laptop</td>
                <td>
                    <a class="edit-btn" href="#">Sửa</a>
                    <a class="delete-btn" href="#">Xóa</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
