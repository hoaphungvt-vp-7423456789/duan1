<div class=" row">
            <div class="row frmtitle">
                <Center><h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>  </Center>
            </div>
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
    
                       <th></th>
                        <th>Mã DANH MỤC </th>
                        <th>TÊN DANH MỤC </th>
                        <th>SỐ LƯỢNG </th>
                        <th>GIÁ CAO NHẤT </th>
                        <th>GIÁ THẤP NHẤT </th>
                        <th>GIÁ TRUNG BÌNH </th>

                        
                    </tr>
                    <?php
                    foreach($listthongke as $thongke){
                        extract($thongke);
                        
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td> '.$madm.' </td>
                        <td> '.$tendm.' </td>
                        <td> '.$countsp.' </td>
                        <td> '.$maxprice.' </td>
                        <td> '.$minprice.' </td>
                        <td> '.$avgprice.' </td>
                        
                        </tr>';
                    } 
                    ?>
                    

                </table>
            </div>
            <div class="row mb10">
               
                <a href="index.php?act=bieudo"><input type="button" value="xem biểu đồ"></a>
            </div>
        </div>