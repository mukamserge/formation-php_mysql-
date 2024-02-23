<?php
$recipes=[
    ['title' => 'Banane malaxée', 'recipe'=> 'Etape1: Eplucher d\'abord la banane, Etape2:...', 'author' => 'Mukam Marie Divine', 'email'=>'lawrence@maison.com', 'is_enabled' => true,
    ],
    ['title' => 'Couscous sauce gombo', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Lawrence', 'david@maison.com', 'is_enabled' => false,
    ],
    ['title' => 'Taro sauce jaune', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam David', 'email'=>'marie@maison.com',  'is_enabled' => true,
    ],  
    ['title' => 'Riz sauté', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Gedéon', 'email'=>'gedeon@maison.com', 'is_enabled' => true,
    ],

];
/*
$banane=['title' => 'Banane malaxée', 'recipe'=> 'Etape1: Eplucher d\'abord la banane, Etape2:...', 'author' => 'Mukam Marie Divine', 'is_enabled' => true,

];

$taro=['title' => 'taro', 'recipe'=> 'Etape1: Eplucher d\'abord la banane, Etape2:...', 'author' => 'Mukam Marie Divine', 'is_enabled' => false,

];
*/
$lawrence=['author'=> 'MUKAM LAWRENCE', 'nais'=> '20 janvier 2015', 'age'=>'9', 'email'=>'lawrence@maison.com',];
    $david=['author'=>'MUKAM DAVID', 'nais'=> '08 MARS 2019', 'age'=>'4', 'email'=>'david@maison.com' , ];
    $marie=['author'=> 'GUIKUEY MARIE', 'nais'=> '09 JUIN 2021', 'age'=>'02' , 'email'=>'marie@maison.com',];
    $gedeon=['author'=> ' Mukam Gedéon', 'nais'=> '09 JUIN 2014', 'age'=>'10' , 'email'=>'gedeon@maison.com',];

$users=[$lawrence, $david, $marie, $gedeon,];

function displayAuthor(string $authorEmail, array $users): string
 {
    foreach ($users as $user) {
        if ($authorEmail===$user['email']){
            return $user['author'] . '(' . $user['age'] . 'ans)';
        }
    }
    return 'Auteur inconnu';
 }

function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('is_enabled', $recipe)){
        $is_enabled=$recipe['is_enabled'];
    } else {
        $is_enabled=false;
    }

    return $is_enabled;
}

function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}
/*
 foreach (getRecipes($recipes) as $recipe){
    echo $recipe ['title']. '<br />';
 }
*/
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recettes de cuisine</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>Liste des recettes de cuisine</h1>

    <?php foreach (getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
    <?php endforeach ?>
</div>
</body>
</html>
