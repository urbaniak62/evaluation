<?php
require_once('header.php');
require_once('../controleur/project.php');
 ?>

 <?php foreach ($donne as $key)
 {
   ?>
  
     <div  id="project" class="container">
       <div class=" project row">
         <div class="col s12 m6">
           <div class="card blue-grey darken-1">
             <div class="card-content white-text">
               <span class="card-title">Project</span>

               <p>title : <?php echo $key['titre'];   ?></p>
               <p>chief of project : <?php echo $key['chef'];   ?></p>
               <p>place : <?php echo $key['lieu']; ?></p>
               <p>date : <?php echo $key['date'];  ?></p>
             </div>
             <div class="card-action">
               <a href="projectComplet.php?project=<?php echo $key['id']?>">view this project</a>
             </div>
           </div>
         </div>
       </div>
     </div>
<?php
 }
?>

<?php
require_once('footer.php');
 ?>
