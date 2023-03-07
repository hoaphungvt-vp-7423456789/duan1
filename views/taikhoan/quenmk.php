<div class="row mb  ">
    <div class="boxtrai mr ">
    <div class="row mb">
        
        <div class="boxtitle row mb10">Quên mật khẩu</div>
        <div class="row boxcontent form_taikhoan">
            <form action="index.php?act=quenmk" method="post">
                <div class="row mb10">
                    Email
                    <input type="email" name="email">
                </div>
                <div class="row mb10">
                    <input type="submit" value="Gửi" name="guiemail">
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