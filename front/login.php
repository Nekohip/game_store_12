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
            margin-top: 143px;
        }

        .input-email, .input-pw {
            width: 290px;
            height: 39px;
        }

        .span-pw {
            width: 67px;
            padding-left: 16px;
        }

        .login-inputs {
            margin-left: 118px;
            padding-top: 10px;
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

        #nav1 {
            max-height: 40px;
        }
        
        #nav2 {
            margin-top: 40px;
        }

        .error {
            padding: 20px 0 0 235px;
            color: red;
        }

        .login-header {
            padding:40px 0 0 236px;
        }
    </style>
</head>
<body>
    <?php
        include "../api/db.php";
    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="nav1">
        <div class="container-fluid con-logo justify-content-end">
            <a class="navbar-brand logo" href="#">SONY</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-white navbar-white fixed-top shadow" id="nav2">
        <div class="container-fluid">
           <!-- 左上logo -->
           <a class="navbar-brand" href="/index.php"><img src="../img/pslogo.png" width="40px"></a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
           </button>
           <!-- nav start -->
           <div class="collapse navbar-collapse " id="collapsibleNavbar">
               <ul class="navbar-nav">
                   <?php $rows = $Nav->all(); ?>
                   <?php foreach($rows as $row_main): ?>
                       <?php if($row_main["sh"] == 1 && $row_main["main_id"] == 0): ?>
                       <!-- 副選單 -->
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"><?= $row_main["text"] ?></a>
                           <ul class="dropdown-menu">
                               <?php foreach($rows as $row_sub): ?>
                                   <?php if($row_sub["sh"] == 1 && $row_main["id"] == $row_sub["main_id"]): ?>
                                   <li><a class="dropdown-item" href="<?= $row_sub["url"] ?>>"><?= $row_sub["text"] ?></a></li>
                                   <?php endif; ?>
                               <?php endforeach; ?>
                           </ul>
                       </li>
                       <?php endif; ?>
                   <?php endforeach; ?>

                   <button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-sort-by-attributes"></span>
                   </button>
               </ul>
           </div>
           <!-- nav end -->
        </div>
    </nav>
    <div class="container rounded shadow-lg">
        <h2 class="login-header">會員登入</h2>
        <form class="login-inputs" action="../api/login.php" method="post">
            <div class="input-group">
                <span class="input-group-text span-email">Email</span>
                <input class="input-email" type="text" name="email">
            </div>

            <div class="input-group">
                <span class="input-group-text span-pw">密碼</span>
                <input class="input-pw" type="password" name="pw">
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
        <?php if(!empty($_GET["error"])): ?>
            <p class="error">Email或密碼錯誤</p>
        <?php endif; ?>
    </div>
</body>
</html>