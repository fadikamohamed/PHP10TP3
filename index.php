<?php
$portrait1 = array('name' => 'Victor', 'firstname' => ' Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => ' de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => ' Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => ' Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showArrays($firstArray, $secondArray, $thirdArray, $fourthArray) {
    //Nom
    print_r($firstArray['name']);
    //Prénom
    print_r($firstArray['firstname']);
    //Portrait
    ?><br /><img src="<?php
    print_r($firstArray['portrait']);
    ?>">
    <br /><br />
    <?php
    //Nom
    print_r($secondArray['name']);

    //Prénom
    print_r($secondArray['firstname']);
    //Portrait
    ?><br /><img src="<?php
    print_r($secondArray['portrait']);
    ?>">
    <br /><br />
    <?php
    //Nom
    print_r($thirdArray['name']);

    //Prénom
    print_r($thirdArray['firstname']);
    //Portrait
    ?><br /><img src="<?php
    print_r($thirdArray['portrait']);
    ?>">
    <br /><br />
    <?php
    //Nom
    print_r($fourthArray['name']);

    //Prénom
    print_r($fourthArray['firstname']);
    //Portrait
    ?><br /><img src="<?php
    print_r($fourthArray['portrait']);
    ?>"><br /><br /><?php
           }
           ?>

<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>TP3</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center bg-dark text-white">
                <div class="col-md-12">
                    <p class="text-center">
                        <?php showArrays($portrait1, $portrait2, $portrait3, $portrait4); ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
