<?php 

require("config/config.php");

 class DataBase{
    protected $db_database_connect;
    public function __construct($db_name=DB_NAME,$db_host=DB_HOST,$db_user=DB_USERNAME,$db_pass=DB_PASSWORD){

       try {

          $this->db_database_connect = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);

       }
      

          catch(PDOException $e){

           echo " faild". $e->getMessage();

          }

    } 
                public function getCon($sql)
                {
                      return $this->db_database_connect;
                }
       
           public function __destruct(){
               $this->db_database_connect = null;
             
           }
    }


?>

    

    









 