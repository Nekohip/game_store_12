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
        .submit {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="../api/carousel1.php" method="post">
        <div class="row">
            <div class="col-4">
                <label for="img" class="form-label">Carousel NO.1 圖片</label>
                    <input class="form-control" type="file" id="img" name="img">
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-3 submit">
                <button type="submit" class="btn btn-primary mb-3">儲存</button>
            </div>
        </div>
    </form>
</body>
</html>