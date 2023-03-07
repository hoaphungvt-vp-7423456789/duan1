<?php
// thêm sp mới 
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql=" insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

// xóa sản phẩm theo id
function delete_sanpham($id){
    $sql=" delete from sanpham where id=".$id;
    pdo_execute($sql);
}

// show tất cả sp top 10
function loadall_sanpham_top10(){
    $sql=" select * from sanpham where 1 order by view desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

// show tất cả sp ở trang home
function loadall_sanpham_home(){
    $sql=" select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

// show cái sp theo từ khóa tìm kiếm
function loadall_sanpham($kyw="",$iddm= 0){
    $sql=" select * from sanpham where 1 ";
    if($kyw!=""){
        $sql.="and name like '%".$kyw."%'";
    } 
    if($iddm>0){
        $sql.="and iddm = '".$iddm."'";
    } 
    $sql.=" order by id desc ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}


// tên danh mục của sp đang xem
// chi tiết sp
function load_ten_dm($iddm){
    if ($iddm>0) {
        $sql=" select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
    
}

// show 1 sp 
function loadone_sanpham($id){
    $sql=" select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

// show cái sp cùng loại
function load_sanpham_cungloai($id,$iddm){
    $sql=" select * from sanpham where iddm=" .$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

// chỉnh sửa sp
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
if($hinh == null) {
        $sql="UPDATE `sanpham` SET `name` = '$tensp', `price` = '$giasp', `mota` = '$mota', `view` = '7', `iddm` = '$iddm' WHERE `sanpham`.`id` = $id";
    }else{
            $sql="UPDATE `sanpham` SET `name` = '$tensp', `price` = '$giasp', `img` = '$hinh', `mota` = '$mota', `view` = '7', `iddm` = '$iddm' WHERE `sanpham`.`id` = $id";
        }
    pdo_execute($sql);
}
?>