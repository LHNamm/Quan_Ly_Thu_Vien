<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <style>
        body {
            text-align: center;
            min-height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: center;    
            background: linear-gradient(180deg, #a4c8ea 0%, #c488cf 50%, #f472bc 100%);
        }

        .login-container {
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 50px 100px;
            border: 3px solid #ddd;
            border-radius: 50px;
            background-color: #FFFFFF;
        }

        h2
        {
            font-size: 150px;
            transform: translateY(-15px);
        }

        .input-group
        {
            font-size: 20px;
            border: 1px solid #ccc;  
            border-radius: 30px;      
            padding: 8px 16px;
            background-color: #fff;
            margin-bottom: 15px;
        }

        .input-group input 
        {
            border: none;             
            outline: none;           
            font-size: 15px;
            background: transparent;
            margin-left: 15px;
        }

        .btn-login
        {
            font-size: 20px;
            border: 1px solid #ccc;  
            border-radius: 30px;      
            padding: 15px 120px;
            background-color: #D195C9;
            margin: 15px 0 20px 0;
        }

        .remember-me
        {
            accent-color: #D195C9;
            display: flex;
            gap: 10px;
            transform: translateX(10px);
        }

        .remember-me label {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fa-brands fa-github" style="color: rgb(209, 149, 201);"></i></h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username"> <i class="fa-solid fa-user-secret"></i></label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <label for="email"><i class="fa-solid fa-envelope"></i></label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <label for="password"><i class="fa-solid fa-lock"></i></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>

            <div>
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <p>Remember me</p>
                </label>
            </div>
        </form>
    </div>
</body>
</html>