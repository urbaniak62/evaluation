<?php
require_once("../modele/data.php");

/*-----------found-name of POST formulaire conection------------*/
if(isset($_POST['name']) && isset($_POST['password'])){
  $name=$_POST['name'];
  $password=sha1($_POST['password']);
  $getData=password($name,$password);
  var_dump($getData);

if( $getData){

  header('Location: ../vue/project.php');
}
else{
  echo "veuillez verifier vos identifiant";
}

}
require_once('../vue/indexvue.php');
/*------------END-OF-CONNECTION-ON-ENTERPRISE-LOGICIEL*/

/*------------begin-of-view-all-project-enterprise-------*/
