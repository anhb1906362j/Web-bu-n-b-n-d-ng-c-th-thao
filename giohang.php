<style>
.khung{
    border: 1px solid black;
}
.sp:hover{
        border: 3px solid blue;
        
    }
</style>
<?php
if(isset($_POST['glgh'])){
    
    echo '
    <h1 class="text-center  chu"> QUẢN LÝ ĐƠN HÀNG </h1><br>
    <div class="col m-4 text-center">
    <a href="sql_giohang.php"><img  class= "khung sp" src=../img/giohang.png style="width:300px; height:300px;"></a>
    <br>
    <a href="sql_giohang.php" type ="submit" class="btn bg2 text-white" style="width: 300px;px;"><b> Quản Lý Giỏ hàng </b></a>
    </div>
    
    ';
    
    
}

?>
