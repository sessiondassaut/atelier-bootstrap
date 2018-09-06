<?php
require_once 'header.php';
?>
    
        <div class="container-fluid">
        <h1 id="titleCollab">Les collaborateurs</h1>
        <a href="addCollab.php"><button type="button" class="btn btn-success" id="addCollab">Ajouter un collaborateur</button></a>
        
        <form>
            
            <div class="row">
                <div class=col-4>
                    <div class="form-group">
                        <label class="float-right" for="nomSearch">Rechercher un nom ou prénom qui commence par :</label>
                    </div>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="nomSearch">
                </div> 
                <div class="col-4">
                    <div class="row">
                        <div class="col-xl-4 col">

                            <div class="form-group form-check col">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <div class="col-xl-8 col">
                            <input type="checkbox" class="form-check-input" id="show-desactivated">
                            <label class="form-check-label" for="show-desactivated">Voir les collaborateurs désactivés</label>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-4">
                    <label class="float-right" for="departement">Filtrer par departement : </label>
                </div>
                <div class="col-4">
                    <select class="form-control" id="departement">
                        <option>Comptabilité</option>
                        <option>Ressources humaines</option>
                        <option>Informatique</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="card">
                            <h5 class="card-header">
                                Jean-Claude DUSSE
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-4">
                                        <img class="img-fluid"  src="https://dummyimage.com/200x200/000000/fff.png" alt="Dummy">
                                    </div>
                                    <div class="col-8">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Fonction :</th>
                                                    <td>Blagueur</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Département</th>
                                                    <td>Ressources Humaines</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email :</th>
                                                    <td>Larry</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Téléphone :</th>
                                                    <td>01.23.45.67.89</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col float-right">
                                        <a class ="float-right" href="editCollab.php">
                                            <button class="float-right btn btn-warning">Modifier</button>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="card">
                            <h5 class="card-header">
                                Jean-Claude DUSSE
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-4">
                                        <img class="img-fluid"  src="https://dummyimage.com/200x200/000000/fff.png" alt="Dummy">
                                    </div>
                                    <div class="col-8">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Fonction :</th>
                                                    <td>Blagueur</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Département</th>
                                                    <td>Ressources Humaines</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email :</th>
                                                    <td>Larry</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Téléphone :</th>
                                                    <td>01.23.45.67.89</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col float-right">
                                        <a class ="float-right" href="editCollab.php">
                                            <button class="float-right btn btn-warning">Modifier</button>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="card">
                            <h5 class="card-header">
                                Jean-Claude DUSSE
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-4">
                                        <img class="img-fluid"  src="https://dummyimage.com/200x200/000000/fff.png" alt="Dummy">
                                    </div>
                                    <div class="col-8">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Fonction :</th>
                                                    <td>Blagueur</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Département</th>
                                                    <td>Ressources Humaines</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email :</th>
                                                    <td>Larry</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Téléphone :</th>
                                                    <td>01.23.45.67.89</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col float-right">
                                        <a class ="float-right" href="editCollab.php">
                                            <button class="float-right btn btn-warning">Modifier</button>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="card">
                            <h5 class="card-header">
                                Jean-Claude DUSSE
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-4">
                                        <img class="img-fluid"  src="https://dummyimage.com/200x200/000000/fff.png" alt="Dummy">
                                    </div>
                                    <div class="col-8">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Fonction :</th>
                                                    <td>Blagueur</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Département</th>
                                                    <td>Ressources Humaines</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email :</th>
                                                    <td>Larry</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Téléphone :</th>
                                                    <td>01.23.45.67.89</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col float-right">
                                        <a class ="float-right" href="editCollab.php">
                                            <button class="float-right btn btn-warning">Modifier</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once "footer.html";