<?php
require_once('header.php');

 ?>
 <div class="row">
 <form method="post" action="../controleur/newProject.php"class="col s12">
   <div class="row">
     <div class="input-field col s6">
       <input placeholder="titre"  type="text" name="titre">
       <label >titre</label>
     </div>
     <div class="input-field col s6">
     <input placeholder="chef de project"  type="text" name="chef">
       <label >chef de projet</label>
     </div>
     <div class="input-field col s6">
     <input placeholder="identifiant"  type="text" name="id_chef">
       <label >identifiant</label>
     </div>
   </div>
   <div class="row">
     <div class="input-field col s6">
       <input placeholder="lieu"  type="text" name="lieu">
       <label>lieu</label>
     </div>
   </div>
   <div class="row">
     <div class="input-field col s12">
       <input placeholder="description"  type="text" name="description">
       <label>description</label>
     </div>
   </div>
   <!-- <div class="row">
     <div class="input-field col s6">
       <input placeholder="etape"  type="checkbox" name="etape">
       <label>etape 1</label>
     </div>
   </div>
   <div class="row">
     <div class="input-field col s6">
       <input placeholder="etape"  type="checkbox" name="etape2">
       <label>etape 2</label>
     </div>
   </div>
   <div class="row">
     <div class="input-field col s6">
       <input placeholder="etape"  type="checkbox" name="etape3">
       <label>etape 3</label>
     </div>
   </div> -->
     <div class="row">
       <div class="input-field col s3">
         <input placeholder="date"  type="date" name="date">
         <label>date de livraison</label>
       </div>
    </div>
    <button type="submite" name="submite" value="submite">submit</button>
   </div>
 </form>
 </div>

<?php
require_once('footer.php');
 ?>
