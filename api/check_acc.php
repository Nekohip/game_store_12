<?php
    include "./db.php";
    if($Member->count($_POST["email"]) == 1)
    {
        header("location:../front/register.php?error=1");
    }
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"></script>

<script>
    $.post("./edit.php?do=member", $_POST);
</script>