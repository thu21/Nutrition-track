<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin dinh dưỡng</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header grid-container">
        <a href="./index.php">
            <div class="header-img"></div></a>
        <button class="about btn">Giới thiệu</button>
        <a href="./pages/login.php">
            <button class="login btn">Đăng nhập</button>
        </a>
        <a href="./pages/register.php">
            <button class="register btn">Đăng ký</button>
        </a>
    </div>

    <div class="home">
        <div class="home-header"></div>
        
        <form action="./pages/result.php" method="post" class="search-pos" >
            <div class="search-bar">
             <input type="text" placeholder="Tìm kiếm"  class="search"  name="searcht">
            
            <button type="submit" class="search-icon">Tìm kiếm</button>
       
    </div>
            </form>

        <h1 class="message">
            Dinh dưỡng hợp lý là nền tảng của sức khỏe, tầm vóc và trí tuệ!
        </h1>
    </div>
</body>
</html>