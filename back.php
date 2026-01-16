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
        }

        .sidebar {
            background-color: red;
            height: 80vh;
        }

        .main {
            background-color: yellow;
        }

        .center {
            background-color: green;
            /* width: 500px; */
            height: 80vh;
        }
        
    </style>
</head>
<body>
    <div class="container-12 header">
    </div>

    <div class="container-12 main">
        <div class="row">
            <div class="col-sm-2 sidebar">
            
            </div>

            <div class="col-sm-10 center">
            
            </div>
        </div>

    </div>

</body>
</html>