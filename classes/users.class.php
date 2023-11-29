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
}