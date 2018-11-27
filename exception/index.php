<?php

use MongoDB\Driver\Exception\ExecutionTimeoutException;
use String\Utils;

require_once 'Testeur.php';
require_once 'Utilisateur.php';

try{
    $a = false;

    if($a == false) {
        // on jette une exception (une erreur) avec son message
        throw new Exception('Je voulais que $a soit vrai');
    }

    // quand une exception est jetée, le code qui suit
    // dans le bloc try ne s'exécute pas et on rentre
    // directement dans le bloc catch
    echo 'ici';

    // si une exception a été jeté on entre dans le bloc catch
} catch (Exception $e) {
    // affichage du message de l'exception
    echo $e->getMessage();

}
echo'<br>';
$testeur = new Testeur();
// si une exception est jetée en dehors d'un try... catch : Fatal error
//$testeur->accepteDix(5);

try{
    $testeur->accepteDix(5);
} catch (Exception $e) {
    file_put_contents(
       'log.txt',
       '[' .date('Y-m-d H:i:s') . '|'
           .$e->getFile()
           .' line ' . $e->getLine()
           .' ' . $e->getMessage()
           ."\n" . $e->getTraceAsString() . "\n",
        FILE_APPEND
    );
}

echo'<br>';
// le bloc try ... catch est dans la méthode
$testeur->raleSiNonDix(5);
echo'<br>';
try{
    $testeur->raleSiNonDix(5);
    //echo'<br>';
    //$testeur->accepteDix(5);

    // ce code s'exécute pas parce que l'exception jetée dans la méthode accepteDix()
    // a été attrapée dans le try ... catch de la méthode raleSiNonDix()
    echo '<br>Suite du bloc try';

}catch (Exception $e) {
    // l'exception a deja été attrapée, on ne rentre pas dans ce bloc catch
    echo "bloc catch de l'index";
}

echo'<br>';

try {
    $moi = new Utilisateur();

    $moi
        ->setPseudo('Jax')
        ->setAge(20)
        ->setStatut('autre')
    ;

// on peut chainer plusieurs catch pour un meme try avec différentes
// classes d'exception (Exception doit etre en dernier à cause de l'héritage)

} catch (InvalidArgumentException $e) {
    echo 'Une méthode a reçu une valeur non valide : ' . $e->getMessage();

} catch (UnexpectedValueException $e) {
    echo 'Une méthode a reçu une valeur inattendue : ' . $e->getMessage();

} catch (Exception $e) {
    echo 'Il y a eu un probleme indéterminé : ' . $e->getMessage();
} finally {
    echo "<br>Du code qui va s'exécuter qu'une exception ait été attrapée ou non";
}