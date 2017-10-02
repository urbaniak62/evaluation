<?php
require_once('connection.php');

/*---------request-of-connection----formulaire*/
function password($name,$password){

  $req=connection()->prepare("SELECT * FROM connection
  WHERE name = :name AND password = :password") ;
  $req->execute (array(
    'name'=>$name,
    'password'=>$password
  ));
  $donnes= $req->fetchAll();
  return $donnes;
}
/*------------END-request---conection---FORMULAIRE*/

/*--------------insert project in table------------*/
function project(){
$req=connection()->query("SELECT titre,chef,lieu,etape,description,id,date FROM project");
$donne= $req->fetchAll();

return $donne;
}

/*------------------------------view project complet-------------------------*/
function projectComplet(){

$req=connection()->prepare("SELECT * FROM project WHERE id= :id");
$req->execute (array(
  'id'=>$_GET['project']
));
$donne= $req->fetch();

return $donne;
}
/*---------------------insert new project---------------------------*/
function insert($titre,$chef,$lieu,$description,$date){
  $req=connection()->prepare("INSERT INTO project(titre,chef,lieu,description,etape,date)
                             VALUES(:titre,:chef,:lieu,:etape,:description,:date)");
  $req->execute (array(
    ':titre'=>$titre,
    ':chef'=>$chef,
    ':lieu'=>$lieu,
    'etape'=>"test",
    ':description'=>$description,
    ':date'=>$date
  ));

}
