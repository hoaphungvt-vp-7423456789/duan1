<div class=" row">
            <div class="row frmtitle">
                <Center><h1 style="font-size:20px">DANH SÁCH TÀI KHOẢN</h1>  </Center>
            </div>
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
    
                       <th></th>
                        <th>Mã TK </th>
                        <th>Username </th>
                        <th>Password</th>
                        <th>Email </th>
                        <th>Địa chỉ </th>
                        <th>Điện thoại </th>
                        <th>Vai trò</th>

                        
                    </tr>
                    <?php
                    foreach($listtaikhoan as $taikhoan){
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td> '.$id.' </td>
                        <td> '.$user.' </td>
                        <td> '.$pass.' </td>
                        <td> '.$email.' </td>
                        <td> '.$address.' </td>
                        <td> '.$tel.' </td>
                        <td> '.$role.' </td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"> <input type="button" value="Xóa "></a></td>
                    </tr>';
                    } 
                    ?>
                    

                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả ">
                <input type="button" value="Bỏ chọn tất cả ">
                <input type="button" value="Xóa các mục đã chọn ">
                <a href="index.php?act=addtk"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>