<?php 
    function loadone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id desc ";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($email,$user,$pass){
        $sql = "INSERT INTO taikhoan(email,user,pass) VALUES('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' AND pass = '".$pass."'"; 
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){ 
        $sql = "UPDATE taikhoan SET user ='".$user."',pass ='".$pass."', email ='".$email."', address ='".$address."', tel ='".$tel."' WHERE id =".$id ;
        pdo_execute($sql);
    }
    function update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role){ 
        $sql = "UPDATE taikhoan SET user ='".$user."',pass ='".$pass."', email ='".$email."', address ='".$address."', tel ='".$tel."',role ='".$role."' WHERE id =".$id ;
        pdo_execute($sql);
    }
    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'"; 
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function delete_taikhoan($id){
        $sql = "DELETE FROM taikhoan WHERE id =".$id; 
        pdo_execute($sql);
    }
?>