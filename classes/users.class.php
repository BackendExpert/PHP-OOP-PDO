<?php 

class users extends db{
    public function getUsers(){
        $get_user = "SELECT * FROM user_tbl";
        $get_user_ex = $this->connect()->prepare($get_user);
        $get_user_ex->execute();

        while($all_user_result = $get_user_ex->fetchAll()){
            return $all_user_result;
        }
    }

    public function addUser($fn, $ln, $address){
        $insert_user = "INSERT INTO user_tbl(fname, lname, address_user) VALUES (?, ?, ?)";
        $insert_exc = $this->connect()->prepare($insert_user);
        $insert_exc->execute([$fn, $ln, $address]);

        header("location: {$_SERVER['HTTP_REFERER']}");
        
    }

    public function editUser($id){
        $update_view = "SELECT * FROM user_tbl WHERE id = ?";
        $update_view_exc = $this->connect()->prepare($update_view);
        $update_view_exc->execute([$id]);
        $result = $update_view_exc->fetch();
        return $result;
    }

    public function updateUser($fn, $ln, $address, $id){
        $data_update = "UPDATE user_tbl SET fname = ?, lname = ?, address_user = ? WHERE id = ?";
        $data_update_exc = $this->connect()->prepare($data_update);
        $data_update_exc->execute([$fn, $ln, $address, $id]);
                
    }
}