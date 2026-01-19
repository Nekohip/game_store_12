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
            background-color: red;
            border: 1px black solid;
            height: 70vh;
            width: 13%;
            margin-top: 219px;
        }

        .main {
            background-color: yellow;
        }

        .main>.row {
            display: flex;
            justify-content: center;
        }

        .center {
            background-color: green;
            height: 120vh;
            width: 90%;
            margin-top: 242px;
            margin-left: 700px;
            padding-left: 100px;
        }
        
    </style>
</head>
<body>
    <div class="header position-fixed top-0 end-0">
    </div>

    <div class="d-flex flex-row main">
        <div class="d-flex flex-column sidebar flex-shrink-0 position-fixed start-0">

        </div>

        <div class="row">
            <div class="col-sm-10 center">
            1111111111111111111111
            </div>
        </div>

    </div>

</body>
</html>