<?php
require_once 'header.html';
?>
<div class="container">
<h1>Ajouter un collaborateur</h1><br>
  <form action="index.php" method="GET">
    <div class="form-group row">
      <label class="col-4 col-form-label" for="name">Nom</label> 
      <div class="col-8">
        <input id="name" name="name" class="form-control here" required="required" type="text">
      </div>
    </div>
    <div class="form-group row">
      <label for="surname" class="col-4 col-form-label">Prenom</label> 
      <div class="col-8">
        <input id="surname" name="surname" class="form-control here" required="required" type="text">
      </div>
    </div>
    <div class="form-group row">
      <label for="birthdate" class="col-4 col-form-label">Date de naissance</label> 
      <div class="col-8">
        <input id="birthdate" name="birthdate" placeholder="DD/MM/AAAA" class="form-control here" required="required" type="date">
      </div>
    </div>
    <div class="form-group row">
      <label for="address" class="col-4 col-form-label">Adresse</label> 
      <div class="col-8">
        <textarea id="address" name="address" cols="40" rows="4" class="form-control" required="required"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="ss-number" class="col-4 col-form-label">Numéro de sécurité sociale</label> 
      <div class="col-8">
        <input id="ss-number" name="ss-number" class="form-control here" required="required" type="text">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-success">Créer</button>
      </div>
    </div>
  </form>
</div>
<?php
require_once 'footer.html';
?>  