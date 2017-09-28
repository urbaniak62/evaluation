<?php
require_once('header.php');
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
               <p>titre :<?php  ?></p>
               <p>chef de projet :<?php echo $insertProjet['chef'];  ?></p>
               <p>lieu :<?php  ?></p>
               <p>date :<?php  ?></p>
             </div>
             <div class="card-action">
               <a href="#">see all</a>
             </div>
           </div>
         </div>
       </div>
     </div>



<?php
require_once('footer.php');
 ?>
