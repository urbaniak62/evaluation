<?php
require_once('header.php');
var_dump($donne);
 ?>


     <div class="progress">
       <div class="indeterminate"></div>
     </div>
     <div class="container">
       <div class=" project row">
         <div class="col s12 m6">
           <div class="card blue-grey darken-1">
             <div class="card-content white-text">
               <span class="card-title">Project</span>
               <p>title :<?php echo $donne['titre'];   ?></p>
               <p>chief of project :<?php    ?></p>
               <p>place :<?php  ?></p>
               <p>date :<?php  ?></p>
             </div>
             <div class="card-action">
               <a href="projectComplet.php">view this project</a>
             </div>
           </div>
         </div>
       </div>
     </div>



<?php
require_once('footer.php');
 ?>
