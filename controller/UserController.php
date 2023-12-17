<?php 
    class UserController{

          public static  function showUser ()
          {
            $user =new UserModel();
            $result= $user->allUsers();
            require_once 'view/liste_user.php';           
           }

           public static  function  pageCreateUser ()
               {
                $city =new CityModale();
                $city= $city->showCity();
                require_once 'view/create_page.php';         
              }

          public static function userCreate () {
                    extract($_POST);
                    $user = new UserModel();
                    $res = $user->addUser($fname,$lname,$contactno,$email,$address,$city);
                    if($res){
                    header('Location:?action=listusers');
                    }
          }

          public static function readUser () 
          {
               
               if(isset($_GET['viewid'])){
               $user = new UserModel();
               $result = $user->getUser($_GET['viewid']);
               require_once 'view/read_user.php';  
               }       
          }
           
    }

   
           
   