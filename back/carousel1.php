<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set_carousel1_img</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.bundle.min.js"
            integrity="sha512-HvOjJrdwNpDbkGJIG2ZNqDlVqMo77qbs4Me4cah0HoDrfhrbA+8SBlZn1KrvAQw7cILLPFJvdwIgphzQmMm+Pw=="
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"></script>

    <style>
        .container1 {
            width: 80%;
            height: 50vh;
            border: 1px black solid;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container1">
        <form action="../api/carousel1.php" method="get">
            set_carousel1_img
        </form>
    </div>
</body>
</html>