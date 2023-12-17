<?php  
 class CityModale {
    private $cities = [];
    private $con;
    public function __construct() { 
        $this->con = new Orm();
    }
    public function showCity() {
          $res= $this->con->selectAll("villes",["1"]);
          foreach($res as $r) {
                     $city= new City($r["id"],$r["ville"]);
                     array_push($this->cities,$city);
          }
          return $this->cities;
    }
 }