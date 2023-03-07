<?php
    function loadall_taikhoan(){
    $sql=" select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql=" select * from taikhoan where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    // xóa tài khoản
    function delete_taikhoan($id){
    $sql=" delete from taikhoan where id=".$id;
    pdo_execute($sql);
    }

    // thêm tài khoản
    function insert_taikhoan($email,$user,$pass){
        $sql=" insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }

    // ktra người dùng và pass
    function checkuser($user,$pass){
        $sql=" select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

// gửi mk lại
    function checkemail($email){
        $sql=" select * from taikhoan where email='".$email."' ";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    // cập nhật tài khoản
    
    function update_taikhoan($id, $user, $pass, $email, $address, $tel, $role)
{
    $sql = "UPDATE taikhoan SET user = '$user', pass = '$pass', email = '$email', address = '$address', tel = '$tel', role = '$role' WHERE taikhoan.`id` = $id;"; /////
    pdo_execute($sql);
}
        
?>