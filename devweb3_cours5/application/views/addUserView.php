<?php
echo('<script type="text/javascript" src="/'.PATH_PUBLIC.'/js/addUser.js"></script>');
?>

<form class="needs-validation" novalidate>
<div class="row">
    <div class="col-12 col-6-md">
<div class="form-group">
    <label for="first_name">Prenom</label>
    <input class="form-control" id="first-name" name="first_name" required>
    <div class="invalid-feedback">
        Le nom est requis.
      </div>
  </div>
  <label for="last_name">Prenom</label>
    <input class="form-control" id="last-name" name="last_name" required>
    <div class="invalid-feedback">
        Le nom de famille est requis.
      </div>
  </div>
  <div class="form-group">
    <label for="email">addresse courriel</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <div class="invalid-feedback">
        Un addresse courriel est requis.
      </div>
  </div>
  <div class="form-group">
    <label for="phone_number">Numero de telephone</label>
    <input type="tel" class="form-control" id="phone_number" name="phone_number" required 
    pattern="^[0-9]{7}([0-9]{3})?$">
    <div class="invalid-feedback">
        Le numéro de téléphone doit etre composé de 7 ou 10 chiffres sans espaces ou simboles.
      </div>
  </div>
  <div class="col-12 col-6-md">
<div class="form-group">
    <label for="address">address</label>
    <input class="form-control" id="address" name="address" required>
    <div class="invalid-feedback">
        L'addresse' est requise.
      </div>
  </div>
  <label for="City">Ville</label>
    <input class="form-control" id="City" name="City" required>
    <div class="invalid-feedback">
        Le nom de ville est requis.
      </div>
  </div>
  <div class="form-group">
    <label for="postal_code">Code postal</label>
    <input  class="form-control" id="postal_code" name="postal_code" required>
    <div class="invalid-feedback">
        Un addresse courriel est requis.
      </div>
  </div>
  <div class="form-group">
    <label for="Age">Votre age</label>
    <input  class="form-control" id="Age" name="Age" required>
    <div class="invalid-feedback">
        Vous devez avoir plus de 18 ans
      </div>
  </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>