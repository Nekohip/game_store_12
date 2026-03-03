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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" 
          integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />
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
            margin-top: -40px;
        }

        .btns {
            float: right;
            /* width: 26%; */
        }

        .modal-text {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }

        .cards {
            margin: 32px 1px 0px 424px;
        }

        .title{
            width: 32%;
            margin-left: 621px;
        }
        .sub {
            margin-top: 0px;
        }
    </style>
</head>
<body>
<?php
    $rows = $Nav->all();
    $i = 0;
?>
    <div class="d-flex justify-content-around title">
        <h4>Nav</h4>
        <button class="btn btn-primary editBtn">新增+</button>
        <input type="submit" form="navForm" value="儲存全部" class="btn btn-primary"></button>
    </div>
    <div class="row">
        <form id="navForm" action="../api/edit.php?do=nav" method="post">
        <?php foreach($rows as $row_main): ?>
            <?php if($row_main["main_id"] == 0):?>
                <div class="col-6 cards shadow-lg">
                    <lable class="content">主選單:</lable>
                    <input type="hidden" name="<?= $i ?>[id]" value="<?= $row_main["id"] ?>">
                    <input type="text" name="<?= $i ?>[text]" value="<?= $row_main["text"] ?>">

                    <label class="modal-text">顯示:</label>
                    <input type="checkbox" name="<?= $i ?>[sh]" 
                           style="width:21px; height:21px" value="1" <?= $row_main["sh"] == 1 ? "checked" : ""?>><br>

                    <lable class="content">副選單:</lable><br>
                        <?php foreach($rows as $row_sub): ?>
                            <?php if($row_sub["main_id"] == $row_main["id"]): ?>
                                <div class="sub">
                                    <input type="hidden" name="<?= $i ?>[id]" value="<?= $row_sub["id"] ?>">
                                    <input type="hidden" name="<?= $i ?>[main_id]" value="<?= $row_sub["main_id"] ?>">
                                    <label>名稱:</label>
                                    <input type="text" name="<?= $i ?>[text]" value="<?= $row_sub["text"] ?>"><br>
                                    <label>URL:</label>
                                    <input type="text" name="<?= $i ?>[url]" value="<?= $row_sub["url"] ?>">

                                    <label class="modal-text">顯示:</label>
                                    <input type="checkbox" name="<?= $i ?>[sh]" 
                                           style="width:21px; height:21px" value="1" <?= $row_sub["sh"] == 1 ? "checked" : ""?>>

                                    <button type="button"
                                            class="btn btn-danger delBtn"
                                            data-bs-id="<?= $row_sub["id"] ?>"
                                            data-bs-text="<?= $row_sub["text"] ?>">
                                            刪除
                                    </button>
                                </div><br>
                            <?php endif ?>
                        <?php $i++; endforeach; ?>
                    
                    <div class="content btns">
                        <button type="submit"
                                class="btn btn-secondary subBtn" 
                                form="navForm" 
                                data-bs-mainId="<?= $row_main["id"] ?>">
                                新增副選單
                        </button>
                        
                        <button type="button"
                                class="btn btn-danger delBtn"
                                data-bs-id="<?= $row_main["id"] ?>"
                                data-bs-text="<?= $row_main["text"] ?>">
                                刪除主選單
                        </button>
                    </div>  
                </div>
            <?php endif ?>
        <?php endforeach ?>
        </form>
    </div>
    <div class="modal editModal">
        <div class="modal-dialog">
            <!-- modal區塊 -->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">新增</h3>
                </div>

                <div class="modal-body">
                    <form action="../api/edit.php?do=nav" method="post">

                        <label for="modalText" class="modal-text">主選單:</label>
                        <input type="text" id="modalText" name="text" value=""><br>

                        <label class="modal-text">顯示:</label>
                        <input type="checkbox" name="sh" 
                               style="width:21px; height:21px" value="1" checked><br>

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
                    <form action="../api/del.php?do=nav" method="post" enctype="multipart/form-data">
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
        //新增按鈕
        const editBtn = $(".editBtn");
        const dismiss = $(".dismiss");
        const editModal = $(".editModal");
        
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

        //新增副選單按鈕
        const subBtn = $(".subBtn");
        let idCount = 40;
        subBtn.click(function()
        {
            let thisId = $(this).attr("data-bs-mainId");
            $(this).parent().prevAll("br").first().after
            (`<input type="hidden" name="${idCount}[main_id]" value="${thisId}">
              <input type="text" name="${idCount}[text]" value="">

              <label class="modal-text">顯示:</label>
              <input type="checkbox" name="${idCount}[sh]" 
                     style="width:21px; height:21px" value="1" checked>

              <button type="button"
                      class="btn btn-danger delBtn"
                      data-bs-id=""
                      data-bs-text="">
                      刪除
              </button><br>`);
              idCount++;
        });
    });
</script>
</html>