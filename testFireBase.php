<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/../fileConfigFirebase.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://sgp-app-bootstrap-training.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

// $newPost = $database
//     ->getReference('posts')
//     ->push(
//         [
//             'title' => 'Post title 2',
//             'body' => 'A small test'
//         ]
//     );
// var_dump($newPost);
// $newPost->getKey(); // => --LLj2XwjgO6keGzu58vT 
// $newPost->getUri(); // => https://sgp-app-bootstrap-training.firebaseio.com//blog/posts/-LLj2XwjgO6keGzu58vT 

// $newPost->getChild('title')->set('Changed post title');
// $newPost->getValue(); // Fetches the data from the realtime database
// // $newPost->remove();
$ref = $database->getReference('posts')->orderByChild('id');
var_dump($ref);
$res = $ref->getValue();
// $res = $ref->orderByChild()->getSnapshot();
var_dump($res);