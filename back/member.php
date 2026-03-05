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
            margin-top: 10px;
        }

        .modal-text {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }

        .cards {
            margin: 32px 1px 0px 492px;
        }

        .title{
            width: 32%;
            margin-left: 621px;
        }
        .sub {
            margin-top: 0px;
        }
        .delBtn {
            margin: 10px 0 0 340px;
        }
        .modal-btns {
            margin-left: 346px;
        }
        .text-input {
            margin-left: 11px;
        }
    </style>
</head>
<body>
<?php
    $rows = $Member->all();
    $i = 0;
?>
    <div class="d-flex justify-content-around title">
        <h4>Members</h4>
        <button class="btn btn-primary editBtn">新增+</button>
        <input type="submit" form="memForm" value="儲存全部" class="btn btn-primary">
    </div>
    <div class="row">
        <form id="memForm" action="../api/edit.php?do=member" method="post">
        <?php foreach($rows as $row): ?>
            <div class="col-4 cards shadow-lg">
                <input type="hidden" name="<?= $i ?>[id]" value="<?= $row["id"] ?>"><br>

                <div class="content">
                    <lable>Email:</lable>
                    <input type="text" name="<?= $i ?>[email]" value="<?= $row["email"] ?>"><br>
                </div>

                <div class="content">
                    <lable>暱稱:</lable>
                    <input class="text-input" type="text" name="<?= $i ?>[name]" value="<?= $row["name"] ?>"><br>
                </div>

                <div class="content">
                    <lable>密碼:</lable>
                    <input class="text-input" type="password" name="<?= $i ?>[pw]" value="<?= $row["pw"] ?>"><br>
                </div>

                <div class="content">
                    <label class="modal-text">管理員:</label>
                    <input type="checkbox" name="<?= $i ?>[admin]" style="width:21px; height:21px" 
                           value="1" <?= $row["admin"] == 1 ? "checked" : ""?>><br>
                </div>

                <button type="button"
                        class="btn btn-danger delBtn"
                        data-bs-id="<?= $row["id"] ?>"
                        data-bs-text="<?= $row["name"] ?>">
                        移除會員
                </button>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
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
                    <form action="../api/edit.php?do=member" method="post">

                        <label for="modalText" class="modal-text">Email:</label>
                        <input type="text" id="modalText" name="email" value=""><br>

                        <label for="modalText" class="modal-text">暱稱:</label>
                        <input type="text" id="modalText" name="name" value=""><br>

                        <label for="modalText" class="modal-text">密碼:</label>
                        <input type="password" id="modalText" name="pw" value=""><br>

                        <label class="modal-text">管理員:</label>
                        <input type="checkbox" name="admin" 
                               style="width:21px; height:21px" value="1" checked><br>

                        <div class="modal-btns">
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
                    <form action="../api/del.php?do=member" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="delId" name="id" value="">

                        <label for="delModalText" class="modal-text">確定要移除</label>
                        <input type="text" id="delText" name="text" value="" readonly>？<br>

                        <div class="modal-btns">
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
    });
</script>
</html>