<?php 
/*
    $fullName = " Serge Mukam";
    $age=40;
    $email="spmukam@gmail.com";
    echo "Bonjour {$fullName} et bienvenue sur le site! Vous avez {$age} ans et votre email est {$email}. Profitez bien du site.";

    $isEnabled=true;
    if ($isEnabled===true) {
        echo "Vous êtes autorisé(e) à accéder au site ";
    }
    else {
        echo "Accès refusé";
    }
    */

    $recipes=[
        ['title' => 'Banane malaxée', 'recipe'=> 'Etape1: Eplucher d\'abord la banane, Etape2:...', 'author' => 'Mukam Marie Divine', 'enabled' => true,
        ],
        ['title' => 'Couscous sauce gombo', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Lawrence', 'enabled' => false,
        ],
        ['title' => 'Taro sauce jaune', 'recipe'=> 'Etape1: Faire bouillir le taro, Etape2:...', 'author' => 'Mukam David', 'enabled' => true,
        ],  
        ['title' => 'Riz sauté', 'recipe'=> 'Etape1: Laver le riz, Etape2:...', 'author' => 'Mukam Gedéon', 'enabled' => true,
        ],
    
    ];
    //$day=date('d'); $month= date('m'); $year=date('Y');
    //<?php echo 'Ici les repas sont servis à partir de ' . date('H \h i') . ; ?>
    ?>   
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>Affichage des recettes</h1>
    <?php echo 'Bonjour! Nous sommes le ' . date('d/h/Y') . '. Voici nos recettes:';?>
    <!-- Boucle sur les recettes -->
    <?php foreach ($recipes as $recipe) : ?>
        <!-- si la clé existe et a pour valeur "vrai", on affiche -->
        <?php if (array_key_exists('enabled', $recipe) && $recipe['enabled'] == true) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo $recipe['author']; ?></i>
            </article>

        <?php endif; ?>
    <?php endforeach ?>
    
</div>
</body>
</html>
