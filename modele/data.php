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
function projet(){
$req=connection()->query("SELECT titre,chef,lieu FROM project");
 $donne= $req->fetchAll();
return $donne;
}
