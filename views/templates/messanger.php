
<?php if(isset($_SESSION['msg'])){?>
    <script> message("<?=$_SESSION['msg']?>"); </script>
    <?php unset($_SESSION['msg']); }?>