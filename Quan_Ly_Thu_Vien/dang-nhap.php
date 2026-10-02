
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>

    <div class="login-container">
        <h2>Đăng Nhập</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên " required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email" required>
            </div>

            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>

            <div class="actions">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    Ghi nhớ đăng nhập
                </label>
                <a href="#" class="forgot-password">Quên mật khẩu?</a>
            </div>

            <button type="submit" class="btn-login">Đăng Nhập</button>

            <div class="register-link">
                Chưa có tài khoản? <a href="#">Đăng ký ngay</a>
            </div>
        </form>
    </div>

</body>
</html>