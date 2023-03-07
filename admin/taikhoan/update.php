<?php
if(is_array($taikhoan)){
    extract($taikhoan);
    $matk = $id;//để ko bị trùng với $id của danhmuc
}
?>
<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhật tài khoản</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatetk" method="post" >
               
                    <div class="row mb10">
                       <br>
                        <input type="text" name="iduser" value="<?=$matk?>"   hidden>
                    </div>
                    <div class="row mb10">
                        User <br>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Pass word <br>
                        <input type="text" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                      Email <br>
                        <input type="text" name="email" value="<?=$email?>">
                       
                    </div>
                    <div class="row mb10">
                       
                       Address <br>
                       <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                       
                       Điện thoại <br>
                       <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                       Vai trò <br>
                       <input type="text" name="role" value="<?=$role?>">
                    </div>
                    <div class="row mb10">
                        
                        <input type="submit" name="capnhat" value="Cập nhật ">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listtk"> <input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
                   
            </div>
</div>