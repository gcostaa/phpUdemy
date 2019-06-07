<?php

class sql extends PDO
{
    private $con;

    public function __construct()
    {
        echo "oiins<br>";
        $this->con = new PDO("mysql:localhost;dbname=dbphp7","root","");
    }

     //prepara varios parametros e chama o setParam
     private function setParams($statment, $parameters = array()){
        
        foreach ($parameters as $key => $value) {
            
            $this->setParam($key,$value);
        }
    }

    private function setParam($statment, $key, $value){

            $statment->bindParam($key, $value);
    }

   
    //prepara a query utiliza os metodos acima
    public function query($rawQuery, $params = array())
    {
        $stmt = $this->con->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();
   
        return $stmt;
        
    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery,$params);
      
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        
    }
}

?>