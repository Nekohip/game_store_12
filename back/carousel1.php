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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"></script>

    <style>
        .submit {
            margin-top: 10px;
        }

        .content {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        .btns {
            float: right;
            width: 32%;
        }

        .modal-text {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
<?php
    include "./api/db.php";
    $rows = $Carousel1->all();
?>
    <h4>Carousel 1</h4>
    <div class="row">
        <?php foreach($rows as $row): ?>
        <div class="col-6">
            <div class="content">標題:<?= $row["text"] ?></div>
            <div class="content">
                圖片:<img src="../upload/<?= $row["img"] ?>" style="width:500px;">
            </div>
            <div class="content">
                縮圖:<img src="../upload/<?= $row["thumb"] ?>" style="width:500px;">
            </div>
            <div class="content btns">
                <button class="btn btn-primary editBtn" 
                        data-bs-id="<?= $row["id"] ?>"
                        data-bs-text="<?= $row["text"] ?>"
                        data-bs-img="<?= $row["img"] ?>"
                        data-bs-thumb="<?= $row["thumb"] ?>">
                    編輯
                </button>

                <button class="btn btn-danger">刪除</button>
            </div>       
        </div> 
        <?php endforeach ?>
    </div>
    <div class="modal editModal">
        <div class="modal-dialog">
            <!-- modal區塊 -->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">編輯</h3>
                </div>

                <div class="modal-body">
                    <form action="../api/carousel1.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="modalId" name="id" value="" >

                        <label for="modalText" class="modal-text">標題:</label>
                        <input type="text" id="modalText" name="text" value=""><br>

                        <label for="modalImg" class="modal-text">上傳圖片:</label>
                        <input type="file" id="modalImg" name="img" value=""><br>

                        <label for="modalThumb" class="modal-text">上傳縮圖:</label>
                        <input type="file" id="modalThumb" name="thumb" value=""><br>

                        <label for="modalThumb" class="modal-text">顯示:</label>
                        <input type="checkbox" id = "modalThumb" name="sh" 
                               style="width:21px; height:21px"
                               value=<?= $row["id"] ?>
                               <?= $row["sh"] == 1 ? "checked" : ""?>><br>

                        <input type="submit" class="btn btn-primary" value="確定"></button>
                        <button type="button" class="btn btn-light dismiss">取消</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    $(document).ready(function()
    {
        const editBtn = $(".editBtn");
        const dismiss = $(".dismiss");
        const editModal = $(".editModal");
        const id = $("#modalId");
        const text = $("#modalText");
        const img = $("#modalImg");
        const thumb = $("#modalThumb");

        console.log("img", img);
        console.log("thumb", thumb);
        
        editBtn.click(function()
        {
            editModal.show();
            let thisId = $(this).attr("data-bs-id");
            let thisText = $(this).attr("data-bs-text");
            let thisImg = $(this).attr("data-bs-img");
            let thisThumb = $(this).attr("data-bs-thumb");

            id.attr("value", thisId);
            text.attr("value", thisText);
            img.attr("value",thisImg);
            thumb.attr("value",thisThumb);
        });

        dismiss.click(function()
        {
            editModal.hide();
        });
    });
</script>
</html>