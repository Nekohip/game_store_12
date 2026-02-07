<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set_nav</title>

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
            width: 26%;
        }

        .modal-text {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }

        .cards {
            border: 1px black solid;
            margin: 32px 1px 0px 227px;
        }

        .title{
            width: 32%;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
    include "./api/db.php";
    $rows = $Nav->all();
?>
    <div class="d-flex justify-content-around title">
        <h4>Nav</h4>
        <button class="btn btn-primary editBtn">新增+</button>
    </div>
    <div class="row">
        <?php foreach($rows as $row_main): ?>
            <?php if($row_main["main_id"] == 0):?>
                <div class="col-6 cards">
                    <lable class="content">主選單:</lable>
                    <input type="text" name="text" value="<?= $row_main["text"] ?>">

                    <label for="modalSh" class="modal-text">顯示:</label>
                    <input type="checkbox" id="modalSh" name="sh" 
                           style="width:21px; height:21px" value="" <?= $row_main["sh"] == 1 ? "checked" : ""?>><br>

                    <div class="content btns">
                        <input type="submit" value="編輯" class="btn btn-primary editBtn"></button>
                        <button class="btn btn-danger delBtn"
                                data-bs-id="<?= $row_main["id"] ?>"
                                data-bs-text="<?= $row_main["text"] ?>">
                            刪除
                        </button>
                    </div>  
                </div> 
            <?php endif ?>
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
                    <form action="../api/edit.php?do=boxes" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="modalId" name="id" value="" >

                        <label for="modalText" class="modal-text">主選單:</label>
                        <input type="text" id="modalText" name="text" value=""><br>

                        <label for="modalSh" class="modal-text">顯示:</label>
                        <input type="checkbox" id="modalSh" name="sh" 
                               style="width:21px; height:21px" value="" checked><br>

                        <div class="content btns">
                            <button type="button" class="btn btn-light dismiss">取消</button>
                            <input type="submit" class="btn btn-primary" value="確定"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal delModal">
        <div class="modal-dialog">
            <!-- modal區塊 -->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">刪除</h3>
                </div>

                <div class="modal-body">
                    <form action="../api/del.php?do=boxes" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="delId" name="id" value="">

                        <label for="delModalText" class="modal-text">確定要刪除</label>
                        <input type="text" id="delText" name="text" value="" readonly>？<br>
                        <div class="content btns">
                            <input type="submit" class="btn btn-danger" value="確定"></button>
                            <button type="button" class="btn btn-light delDismiss">取消</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function()
    {
        //編輯按鈕
        const editBtn = $(".editBtn");
        const dismiss = $(".dismiss");
        const editModal = $(".editModal");

        const id = $("#modalId");
        const text = $("#modalText");
        const sh = $("#modalSh");
        
        editBtn.click(function()
        {
            editModal.show();
        });

        dismiss.click(function()
        {
            editModal.hide();
        });

        //刪除按鈕
        const delModal = $(".delModal");
        const delBtn = $(".delBtn");
        const delDismiss = $(".delDismiss");
        const delId = $("#delId");
        const delText = $("#delText");

        delBtn.click(function()
        {
            delModal.show();
            let thisId = $(this).attr("data-bs-id");
            let thisText = $(this).attr("data-bs-text");

            delId.attr("value", thisId);
            delText.attr("value", thisText);
        });

        delDismiss.click(function()
        {
            delModal.hide();
        });
    });
</script>
</html>