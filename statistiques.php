<?php

require_once 'header.php';
?>

<div class="container">
    <br>
    <h1>Statistiques</h1>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Chemin</th>
        <th scope="col">Nombre de visites</th>
        <th scope="col">Min (ms)</th>
        <th scope="col">Max (ms)</th>
        <th scope="col">Moyenne (ms)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>/collaborateurs/editer</td>
        <td>500</td>
        <td>10</td>
        <td>1000</td>
        <td>500</td>
        </tr>
        <tr>
        <td>/collaborateurs/lister</td>
        <td>125</td>
        <td>5</td>
        <td>600</td>
        <td>90</td>
        </tr>
        <tr>
        <td>/collaborateurs/nouveau</td>
        <td>200</td>
        <td>2</td>
        <td>58</td>
        <td>789</td>
        </tr>
    </tbody>
    </table>
</div>

<?php
require_once 'footer.html';
?>