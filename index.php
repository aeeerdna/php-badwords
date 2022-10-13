<!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
-->

<?php

    $paragraph = "Growing up in the Netherlands, with its network of pathways, its flat landscape and its bicycle-friendly traffic laws, the brothers Ties and Taco Carlier were commuting with their parents on bikes by age 4.";

    $paragraphLength = strlen($paragraph);

    $badWord = $_GET ['badWord'];
?>

<div>
    <p>
        PARAGRAPH: <?= $paragraph ?>
    </p>

    <p>
        PARAGRAPH LENGTH: <?= $paragraphLength ?>
    </p>
</div>