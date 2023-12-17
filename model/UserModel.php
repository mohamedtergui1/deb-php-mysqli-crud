<?php
 


class UserModel {
    private $users = [];
    private $con;
    public function __construct() { 
        $this->con = new Orm();
    }

    public function addUser($fname,$lname,$mobileNumber,$email,$address,$ville_id) 
       {
       try {
        $user = new User(null,null,null,null,null,null,null,null);
        $user->setFname($fname);
        $user->setEmail($email);
        $user->setLname($lname);
        $user->setMobileNumber($mobileNumber);
        $user->setAddress($address);
        $user->setVilleId($ville_id);
        $res = $this->con->insert("users",["FirstName", "LastName", "MobileNumber", "Email", "Address", "ville_id"],[$fname,$lname,$mobileNumber,$email,$address,$ville_id]);
        return $res;
        }
        catch (PDOException $e) 
        {
        echo $e->getMessage();
        }
        }
    public function allUsers() {
        try {
            
            $res = $this->con->selectAll("users",["1"]);
            foreach ($res as $r) 
            {
                $user = new User($r["ID"],$r["FirstName"],$r["LastName"],$r["MobileNumber"],$r["Email"],$r["Address"],$r["CreationDate"],$r["ville_id"]);
                array_push($this->users,$user);
            }
             return $this->users;
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getUser($id) {
        try {
                $condition = "id=".$id;
                $r = $this->con->selectOne("users",[$condition]);
             
                    $user = new User($r["ID"],$r["FirstName"],$r["LastName"],$r["MobileNumber"],$r["Email"],$r["Address"],$r["CreationDate"],$r["ville_id"]);
                return $user;
                    
            } 
        catch (PDOException $e) {
            echo $e->getMessage();
            }
    }
 }  

// public static function  testInput($data) {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//       }





