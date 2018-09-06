<?php
require_once 'header.php';
?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-3 d-flex align-items-center">
            <img class="img-fluid"  src="https://dummyimage.com/500x500/000000/fff.png" alt="Dummy">
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-9">
                    <h1>DUSSE Jean-Claude - 123456789</h1>
                </div>
                <div class="col-3 d-flex align-items-center">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="deactivate" name="deactivate">
                            <label class="custom-control-label" for="deactivate">Désactiver</label>
                        </div>
                </div>
            </div>
            <br>
            <form action="index.php" method="GET">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Identité
                            </button>
                        </h5>
                    </div>
                    
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="container card-body">
                            <div class="form-group row">
                                <label for="civilite" class="col-4 col-form-label">Civilité</label> 
                                <div class="col-8">
                                    <select id="civilite" class="form-control here" name="civilite" required="required">
                                        <option value="M">Monsieur</option>
                                        <option value="Mme">Madame</option>
                                    </select>
                                </div>
                            </div>
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
                                <label for="telephone" class="col-4 col-form-label">Téléphone</label> 
                                <div class="col-8">
                                    <input id="telephone" name="telephone" class="form-control here" required="required" type="text">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Poste
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="container  card-body">
                            <div class="form-group row">
                                <label for="departement" class="col-4 col-form-label">Departement</label> 
                                <div class="col-8">
                                    <select id="departement" class="form-control here" name="departement" required="required">
                                        <option value="">Comptabilité</option>
                                        <option value="">Ressources humaines</option>
                                        <option value="">Informatique</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-4 col-form-label">Nom du poste</label> 
                                <div class="col-8">
                                    <input id="position" name="position" required="required" class="form-control here" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Coordonnées bancaires
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="container card-body">
                            <div class="form-group row">
                                <label for="iban" class="col-4 col-form-label">IBAN</label> 
                                <div class="col-8">
                                    <input id="iban" name="iban" required="required" class="form-control here" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bic" class="col-4 col-form-label">BIC</label> 
                                <div class="col-8">
                                <input id="bic" name="bic" class="form-control here" required="required" type="text">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">

                        <a href="index.php" class="float-right">
                            <button type="button" class="btn btn-success">Enregistrer les modifications</button>
                        </a>
                    </div>
                </div>
            </form>
            </div>
        </div>
            
        </div>
    </div>
<?php
require_once 'footer.html';