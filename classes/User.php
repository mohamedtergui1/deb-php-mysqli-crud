<?php   

class User 
{

    private   $id;
    private   $fname;
    private   $lname;
    private   $email;
    private   $mobileNumber;
    private   $creationDate;
    private   $ville_id;
    private   $address;
    public function __construct($id , $fname , $lname   , $mobileNumber, $email , $address, $creationDate , $ville_id  ) 
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->mobileNumber = $mobileNumber;
        $this->creationDate = $creationDate;
        $this->ville_id = $ville_id;
        $this->address = $address;
    }
    

     
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

     
    public function getFname() 
    {
        return $this->fname;
    }

    public function setFname($fname) 
    {
        $this->fname = $fname;
    }

     
    public function getLname() 
    {
        return $this->lname;
    }

    public function setLname($lname) 
    {
        $this->lname = $lname;
    }

    
    

    
    public function getEmail() 
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    
    public function getMobileNumber() 
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber($mobileNumber) 
    {
        $this->mobileNumber = $mobileNumber;
    }

    
    public function getCreationDate() 
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate) 
    {
        $this->creationDate = $creationDate;
    }

    
    public function getVilleId() 
    {
        return $this->ville_id;
    }

    public function setVilleId($ville_id) 
    {
        $this->ville_id = $ville_id;
    }

    
    public function getAddress() 
    {
        return $this->address;
    }

    public function setAddress($address) 
    {
        $this->address = $address;
    }
}
