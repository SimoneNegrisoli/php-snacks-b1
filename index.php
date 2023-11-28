<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

## Bonus

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo. -->

<?php
$basketMatches = [
    [
        'homeTeam' => 'CHICAGO BULLS',
        'guestTeam' => 'BOSTON CELTICS',
    ],
    [
        'homeTeam' => 'CHICAGO BULLS',
        'guestTeam' => 'BOSTON CELTICS',
    ],
    [
        'homeTeam' => 'CHICAGO BULLS',
        'guestTeam' => 'BOSTON CELTICS',
    ],
    [
        'homeTeam' => 'CHICAGO BULLS',
        'guestTeam' => 'BOSTON CELTICS',
    ],
    [
        'homeTeam' => 'CHICAGO BULLS',
        'guestTeam' => 'BOSTON CELTICS',
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>

<body>

    <!-- SNACK1 -->
    <h2>Snack 1</h2>
    <?php
    foreach ($basketMatches as $basketMatch) {

        $homePoints = rand(10, 120);
        $guestPoints = rand(10, 120);

        echo $basketMatch['homeTeam'] . '-' . $basketMatch['guestTeam'] . '|' . $homePoints . '-' . $guestPoints . '<br>';
    }
    ;
    ?>


</body>

</html>