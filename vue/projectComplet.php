<?php
require_once('header.php');
require_once('../controleur/projectComplet.php');

 ?>
     <div class="container">
       <div class=" project row">
         <div class="col s12 ">
           <div class="card blue-grey darken-1">
             <div class="card-content white-text">
               <span class="card-title">Project</span>
               <p>title : <?php echo $donne['titre']; ?></p>
               <p>chief of project : <?php echo $donne['chef'];?></p>
               <p>place : <?php echo $donne['lieu']; ?></p>
               <p>description : <?php echo $donne['description']; ?></p>
               <p>etape : <?php echo $donne['etape']; ?></p>
               <p>date : <?php echo $donne['date']; ?></p>
             </div>
             <div class="card-action">
              <a href="../controleur/project.php">back</a>
             </div>
           </div>
         </div>
       </div>
     </div>

<?php
require_once('footer.php');
 ?>
