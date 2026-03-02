<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.bundle.min.js"
            integrity="sha512-HvOjJrdwNpDbkGJIG2ZNqDlVqMo77qbs4Me4cah0HoDrfhrbA+8SBlZn1KrvAQw7cILLPFJvdwIgphzQmMm+Pw=="
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" 
          integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"></script>

    <style>
        .container {
            background-color: aliceblue;
            width: 612px;
            height: 40vh;
            margin-top: 100px;
        }

        input {
            width: 290px;
            height: 39px;
        }

        .login-inputs {
            margin-left: 118px;
            padding-top: 60px;
        }

        .input-group {
            margin-top: 12px;
            font-size: 18px;
        }

        .login-btn {
            width: 346px;
            margin-top: 20px;
        }

        .login-btn>div {
            width: 160px;
        }

    </style>
</head>
<body>
    <div class="container rounded shadow-lg">
        <form class="login-inputs" action="./api/login.php" method="post">
            <div class="input-group">
                <span class="input-group-text">帳號</span>
                <input type="text" name="acc">
            </div>

            <div class="input-group">
                <span class="input-group-text">密碼</span>
                <input type="password" name="pw">
            </div>
            <div class="login-btn d-flex justify-content-around">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">登入</button>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-secondary">註冊</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>