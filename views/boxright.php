<div class="row mb ">
    <div class="box_title">Tài khoản</div>
        <div class="box_content form_taikhoan">
                        <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                        <div class="row mb10">
                                Xin chào <br>
                                <?=$user ?>
                            </div>
                            <div class="row mb10">
                                <ul>
                                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                    <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                                </ul>
                            <?php if ($role==1) {?>
                                <li><a href="admin/index.php">Đăng nhập Admim</a></li>

                            <?php }?>
                               
                                <li><a href="index.php?act=thoat">Thoát</a></li>
                            </div>

                        <?php

                        }else{
                        ?>
                        
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" >
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass" ><br>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" >Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                        <?php } ?>
                    </div>
        </div>

                   <!-- danh mujc sp -->
                <div class="row mb ">
                    <div class="box_title">Danh mục</div>
                    <div class="box_content2 menu_doc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                   extract($dm);
                                   $linkdm="index.php?act=sanpham&iddm=".$id;
                                   echo'<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="box_footer searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                            <input type="submit" name="timkiem" value="Tìm"> 
                        </form>
                    </div>
                </div>



                <!-- top 10 sp yeu thichs -->
                <div class="row mb ">
                    <div class="box_title">Top 10 yêu thích</div>
                    <div class="box_content row">
                    <?php
                                foreach ($dstop10 as $sp) {
                                   extract($sp);
                                   $linksp="index.php?act=sanphamct&idsp=".$id;
                                   $img=$img_path.$img;
                                   echo'<div class="row mb10 top10">
                                   <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                            <a href="'.$linksp.'">'.$name.'</a>
                                        </div>';
                                }
                    ?>
    </div>
</div>