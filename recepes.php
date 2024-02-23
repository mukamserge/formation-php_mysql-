<?php
/*
// Déclaration du tableau des recettes
// tableau de valeur
$recipes = [
    ['Banane malaxée','[...]',' Mukam Marie Divine',true,],
    ['Couscous sauce gombo','[...]','Mukam Lawrence',false,],
    ['Taro sauce jaune','[...]','Mukam David',false,],
    ['Riz sauté','[...]','Mukam Gedéon',false,],
];=> 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
<h1> Ceci constitue une liste des repas préferés de mes enfants</h1>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
*/
// delaraton des recettes 
//tableau associatif
$recipes=[
    ['title' => 'Banane malaxée', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Marie Divine', 'enabled' => true,
    ],
    ['title' => 'Couscous sauce gombo', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Lawrence', 'enabled' => true,
    ],
    ['title' => 'Taro sauce jaune', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam David', 'enabled' => true,
    ],  
    ['title' => 'Riz sauté', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Gedéon', 'enabled' => true,
    ],

];

?>
!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>
<body>
<h1> Ceci constitue une liste des repas préferés de mes enfants</h1>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++): ?>
            <li><?php echo $recipes[$lines]['title'] . ';' . $recipes[$lines]['recipe'] .  '(' . $recipes[$lines]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>