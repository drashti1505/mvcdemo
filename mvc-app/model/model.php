<?php 

//class name
class model 
{
    //Contection 

    public $conn="";
    
    //Member Function
    public function __construct()
    {
    //database connection 
     try 
     {
        $this->conn=new mysqli("localhost","root","","mvc-app");
      //   echo "Connection successfully";
     }
     catch(Exception)
     {

        die(mysqli_error($this->conn));
     }
    }
}


?>