<div class="row mb  ">
    <div class="boxtrai mr ">
    <div class="row mb">
        
        <div class="boxtitle row mb10">CẬP NHẬT TÀI KHOẢN</div>
        <div class="row boxcontent form_taikhoan">
            <?php
                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <div class="row mb10">
                    Email
                    <input type="email" name="email" value="<?= $email ?>">
                </div><div class="row mb10">
                    Tên đăng nhập
                    <input type="text" name="user" value="<?= $user ?>">
                </div>
                <div class="row mb10">
                    Mật khẩu
                    <input type="password" name="pass" value="<?= $pass ?>">
                </div>
                <div class="row mb10">
                    Địa chỉ
                    <input type="text" name="address" value="<?= $address ?>">
                </div>
                <div class="row mb10">
                    Điện thoại
                    <input type="text" name="tel" value="<?= $tel ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?= $id?>">
                    <input type="submit" value="Cập nhật " name="capnhat">
                    <input type="reset" value="Nhập lại">
                </div>
            </form>
            <h2 class="thongbao">
            <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
            </h2>
        </div>
    </div>
    
    </div>
    <div class="boxphai  ">
        <?php include "views/boxright.php"; ?>
    </div>
</div>