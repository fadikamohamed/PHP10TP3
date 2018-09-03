<?php
$portrait1 = array('firstname' => 'Victor', 'lastname' => 'Hugo', 'picture' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('firstname' => 'Jean', 'lastname' => 'de La Fontaine', 'picture' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('firstname' => 'Pierre', 'lastname' => 'Corneille', 'picture' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('firstname' => 'Jean', 'lastname' => 'Racine', 'picture' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showArrays($firstArray, $secondArray, $thirdArray, $fourthArray) {
    ?>
    <p>
        <?php echo print_r($firstArray['firstname']); ?>
        <?php echo print_r($firstArray['lastname']); ?>
    </p>
    <img src="<?= print_r($firstArray['picture']); ?>">
    <p>
        <?php echo print_r($secondArray['firstname']); ?>
        <?php echo print_r($secondArray['lastname']); ?>
    </p>
    <img src="<?= print_r($secondArray['picture']); ?>">
    <p>
        <?php echo print_r($thirdArray['firstname']); ?>
        <?php echo print_r($thirdArray['lastname']); ?>
    </p>
    <img src="<?= print_r($thirdArray['picture']); ?>">
    <p>
        <?php echo print_r($fourthArray['firstname']); ?>
        <?php echo print_r($fourthArray['lastname']); ?>
    </p>
    <img src="<?= print_r($fourthArray['picture']); ?>">
<?php } ?>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>title</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center bg-dark text-white">
                <div class="col-md-12">
                    <?php showArrays($portrait1, $portrait2, $portrait3, $portrait4); ?>
                </div>

            </div>
        </div>
    </body>
</html>
