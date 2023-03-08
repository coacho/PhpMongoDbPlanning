<?php

function setConnexion(){
    try{
        
        $connexion = new Mongo();

        $connecting_string = sprintf('mongo://%s:%/d/%s',$host,$port,$database);
        $connexion = new Mongo($connecting_string,array('username'=>$username,'password'=>$password));
        //Connection MongoDb Atlas
        //$connexionString = "mongodb+srv://Mathieu:MmhD5OLApcFvYoVB@cluster0.n9u83qq.mongodb.net/test";
        //$connexion = new MongoDB\Driver\Manager($connexionString);
    
        $dbname = $connexion->selectedDB('test');
        $collection = $dbname->collection;

    }
    catch (MongoDB\Driver\Exception\InvalidArgumentException $e)
    {
        echo $e->getMessage();
    }
}


?>