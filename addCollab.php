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
                <button data-toggle="modal" data-target="#validAdd" name="submit" type="submit" class="btn btn-success">Créer</button>
            </div>
        </div>
    </form>
</div>
<div class="modal" tabindex="-1" role="dialog" id="validAdd">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajout d'un collaborateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Vous êtes sur le point d'ajouter un nouveau collaborateur :</p><br>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Nom</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">Prénom</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Date de naissance</th>
                            <td>Larry</td>
                        </tr>
                        <tr>
                            <th scope="row">Adresse</th>
                            <td>42 rue des qqch<br> Quelque part 12345</td>
                        </tr>
                        <tr>
                            <th scope="row">Numéro de sécurité sociale</th>
                            <td>12345678912345</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="index.php">
                    <button type="button" class="btn btn-success">Save changes</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.html';
?>  