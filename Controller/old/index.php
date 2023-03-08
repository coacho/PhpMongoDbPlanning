<?php

function getMongoDB(){

    try{
        //Connection MongoDb Atlas
        $manager = new MongoDB\Driver\Manager(
            'mongodb+srv://Mathieu:MmhD5OLApcFvYoVB@cluster0.n9u83qq.mongodb.net/test'
        );
    }
    catch (MongoDB\Driver\Exception\InvalidArgumentException $e)
    {
        echo $e->getMessage();
    }

}

function getAllUser(){ //récupère les user depuis la base

    //Definition de la requête
    $filter = [];
    $option = [];
    $connection = new MongoDB\Driver\Query($filter,$option);

    //Exécution de la requête
    $cursor = $manager->executeQuery('Planning.Personnes',$connection);

    // Affichage Résultats
    foreach($cursor as $user){
       
        // echo '<tr><td>'.$user->nom.'</td>';
        // echo '<td>'.$user->nbSemaines.'</td>';
        // echo '<td>'.$user->couleur.'</td><td></tr>';
    }
    
    // echo '</table>';


    //$nomUser = $user->nom;
    //$nbSemainesUser = $user->nbSemaines;
    //$couleurUser = $user->couleur;

}

function getOneUser($id){
 
}

function getNomUser(){ // get nomUser pr affichage DropdownList

}


function addSemaineToUser($user){ // add 1+ Semaine à la selecttion dans dropdown list

    // $user.nbSemaine++;

    // return $user.nbSemaine;
}

function getUserColor($user){ //get color de l'user pour affichage html

    // $tabColor = $user.color;

    return $tabColor;
}


?>