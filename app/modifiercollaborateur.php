<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/google-service-account.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
   /* ->withDatabaseUri('https://my-project.firebaseio.com')*/
    ->create();

$database = $firebase->getDatabase();


$nouveauCollaborateur = $database
    ->getReference('collaborateurs')
     ->push([
        'civilite' => $_POST['civilite'],
         'nom' => $_POST['nom'],
         'prenom' => $_POST['prenom'],
         'datenaissance' => $_POST['datenaissance'],
         'adresse' => $_POST['adresse'],
         'numeross' => $_POST['numeross'],
         'telephone' => $_POST['telephone'],
         'departement' => $_POST['departement'],
         'nomposte' => $_POST['nomposte'],
         'iban' => $_POST['iban'],
         'bic' => $_POST['bic']

     ]);

/*$newPost->getKey();*/ // => -KVr5eu8gcTv7_AHb-3-
/*$newPost->getUri();*/ // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

/*$newPost->getChild('title')->set('Changed post title');*/
/*$newPost->getValue();*/ // Fetches the data from the realtime database

/*var_dump($newPost->getValue());

var_dump($newPost);*/

$reference = $database->getReference('collaborateurs')->orderByChild('prenom')->equalTo('janine');





$snapshot = $reference->getSnapshot();




var_dump($snapshot);


?>