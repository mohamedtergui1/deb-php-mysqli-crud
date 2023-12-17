<?php  
class City {
    private $id;
    private $ville;

  
    public function __construct($id, $ville ) {
        $this->id = $id;
        $this->ville = $ville;
    }

 
    public function getId() {
        return $this->id;
    }

     
    public function setId($id) {
        $this->id = $id;
    }

     
    public function getVille() {
        return $this->ville;
    }

     
    public function setVille($ville) {
        $this->ville = $ville;
    }
}
