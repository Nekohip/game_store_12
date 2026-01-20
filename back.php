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

    <style>
        * {
            box-sizing: border-box;
        }

        .header {
            background-color: blue;
            height: 20vh;
            width: 100%;
        }

        .sidebar {
            /* background-color: red; */
            border: 1px black solid;
            height: 70vh;
            width: 13%;
            margin-top: 219px;
        }

        .main {
            /* background-color: yellow; */
        }

        .main>.row {
            display: flex;
            justify-content: center;
        }

        .center {
            /* background-color: green; */
            border: 1px black solid;
            height: 120vh;
            width: 65%;
            margin-top: 233px;
            margin-left: 417px;
        }

        .nav-item {
            margin-top: 5px;
        }
        
    </style>
</head>
<body>
    <div class="header position-fixed top-0 end-0">
    </div>

    <div class="d-flex flex-row container-fluid main">
        <div class="container d-flex flex-column flex-shrink-0 position-fixed start-0 sidebar">
            <ul class="nav nav-pills nav-fill d-flex flex-column">
                <li class="nav-item">
                    <a href="?do=carousel1" class="nav-link active">
                        Carousel NO.1
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link active">
                        AAA
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link active">
                        BBB
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
                            case "carousel1" :
                                include "./back/carousel1.php";
                                break;
                        }
                    }
                    else
                    {
                        include "./back/white.php";
                    }
                ?>
        </div>

    </div>

</body>
</html>