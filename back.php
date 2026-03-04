<?php include "./api/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理</title>

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
        * {
            box-sizing: border-box;
        }

        .sidebar {
            /* background-color: red; */
            height: 80vh;
            width: 13%;
            margin-top: 144px;
        }

        .main>.row {
            display: flex;
            justify-content: center;
        }

        .center {
            /* background-color: green; */
            /* border: 1px black solid; */
            /* height: 160vh; */
            width: 65%;
            margin-top: 130px;
            margin-left: 560px;
            margin-bottom: 50px;
        }

        .nav-item {
            margin: 6px 0 0 20px;
            width: 200px;
        }

        .btn {
            margin-top: 10px;
        }

        #nav1 {
            max-height: 40px;
        }
    
        #nav2 {
            margin-top: 40px;
        }

        .welcome {
            margin: 6px 20px 0 0;
            font-weight: bold;
            font-size: 18px;
        }

        .switch-btn {
            margin-left: 10px;
        }

        .nav {
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="nav1">
        <div class="container-fluid con-logo justify-content-end">
            <a class="navbar-brand logo" href="#">SONY</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-white navbar-white fixed-top shadow" id="nav2">
    <div class="container-fluid">
        <!-- 左上logo -->
        <a class="navbar-brand" href="/index.php"><img src="./img/pslogo.png" width="40px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- nav start -->
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-sort-by-attributes"></span>
                </button>
            </ul>
        </div>

        <p class="welcome"><?= $_SESSION["mem"] ?> 已登入</p>
        <a href="./api/logout.php">
            <button type="button" class="btn btn-secondary">
                登出
            </button>
        </a>

        <a href="/index.php">
            <button type="button" class="btn btn-secondary switch-btn">
                前台
            </button>
        </a>
        
        <!-- nav end -->
    </div>
</nav>

    <div class="d-flex flex-row container-fluid main ">
        <div class="d-flex flex-column flex-shrink-0 position-fixed start-0 sidebar shadow">
            <ul class="nav nav-pills d-flex flex-column">
                <li class="nav-item">
                    <a href="?do=carousel" class="btn btn-primary w-100">
                        Carousel
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?do=boxes" class="btn btn-primary w-100">
                        Boxes
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?do=nav" class="btn btn-primary w-100">
                        Nav
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?do=member" class="btn btn-primary w-100">
                        Members
                    </a>
                </li>
            </ul>

        </div>

        <div class="container center">
            <?php
                if(isset($_GET["do"]))
                {
                    switch($_GET["do"])
                    {
                        case "carousel" :
                            include "./back/carousel.php";
                            break;
                        case "boxes" :
                            include "./back/boxes.php";
                            break;
                        case "nav" :
                            include "./back/nav.php";
                            break;
                        case "member" :
                            include "./back/member.php";
                            break;
                    }
                }
                else
                {
                    include "./back/carousel.php";
                }
            ?>
        </div>

    </div>

</body>
</html>