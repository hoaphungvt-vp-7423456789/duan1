<?php
if(is_array($sanpham)){
    extract($sanpham);
    $masp = $id;//để ko bị trùng với $id của danhmuc
}
$hinhpath="../upload/".$img;
 if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath. "' height='80'>";
} else {
    $hinh="no phôt";
}

?>
<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                       Danh mục  <br>
                       <select name="iddm" id="">
                           <?php
                           foreach($listdanhmuc as $danhmuc){
                           extract($danhmuc);
                           if($iddm==$id) $s="selected"; else $s="";
                            echo'<option value="'.$id.'" '.$s.'>'.$name.'.</option>';
                           }
                           ?>
                           
                       </select>
                        <input type="text" name="masp" value="<?= $masp?>" hidden>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">
                        Gía  <br>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                      Hình  <br>
                        <input type="file" name="hinh">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea  cols="30" row="10" name="mota" value="<?=$mota?>"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="capnhat" value="Cập nhật ">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
                   
            </div>
        </div>