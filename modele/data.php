<?php
require_once('connection.php');

/*---------request-of-connection-by--formulaire*/
function password($name,$password){

  $req=connection()->prepare("SELECT connection.id,project.id_chef FROM connection
    INNER JOIN project ON connection.id=project.id_chef
  WHERE name = :name AND password = :password") ;
  $req->execute (array(
    'name'=>$name,
    'password'=>$password
  ));
  $donnes= $req->fetchAll();
  return $donnes;
}
/*------------END-request---conection---FORMULAIRE*/

/*--------------view project ------------*/
function project(){
$req=connection()->query("SELECT titre,chef,lieu,etape,description,id,date FROM project");
$donne= $req->fetchAll();

return $donne;
}
/*-------------end view project--------------*/

/*------------------------------view project complet-------------------------*/
function projectComplet(){

$req=connection()->prepare("SELECT * FROM project WHERE id= :id");
$req->execute (array(
  'id'=>$_GET['project']
));
$donne= $req->fetch();

return $donne;
}
/*----------------------end view project complet----------------------*/


/*---------------------insert new project---------------------------*/
function insert($titre,$chef,$lieu,$description,$date,$id_chef){
  $req=connection()->prepare("INSERT INTO project(titre,chef,lieu,description,etape,date,id_chef)
                             VALUES(:titre,:chef,:lieu,:etape,:description,:date,:id_chef)");
  $req->execute (array(
    'titre'=>$titre,
    'chef'=>$chef,
    'lieu'=>$lieu,
    'etape'=>"test",
    'description'=>$description,
    'date'=>$date,
    'id_chef'=>$id_chef
  ));

}
/*----------------------end insert project------------------------*/

/*----------------------delete project-----------------------------*/
