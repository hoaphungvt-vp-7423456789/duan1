
<div class="row">
            <div class="row frmtitle">
                <h1 style="font-size:20px">Thêm mới sản phẩm </h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                       Danh mục <br>
                       <select name="iddm" id="">
                           <?php
foreach( $listdanhmuc as $danhmuc){
    extract($danhmuc);
    echo'<option value="'.$id.'">'.$name.'</option>';
}
                           ?>
                           
                       </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Gía  <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                      Hình  <br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea  cols="30" row="10" name="mota" ></textarea>
                      
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI ">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>