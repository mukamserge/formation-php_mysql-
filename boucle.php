  

<?php //boucle while
/*
$lines=1;
while ($lines<=5) {
    echo 'je ne dois plus regarder les mouches voler quand j\'apprends le php. <br /> ';
    $lines++;//$lines=$lines+1
}
*/
/*
//boucle for
for ($lines=1; $lines<=5; $lines++){
    echo 'je ne dois plus regarder les mouches voler quand j\'apprends le php. <br /> ';
}
*/
//boucle foreach
$recipes=[
    ['title' => 'Banane malaxée', 'recipe'=> 'Etape1: Eplucher d\'abord la banane, Etape2:...', 'author' => 'Mukam Marie Divine', 'enabled' => true,
    ],
    ['title' => 'Couscous sauce gombo', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Lawrence', 'enabled' => false,
    ],
    ['title' => 'Taro sauce jaune', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam David', 'enabled' => true,
    ],  
    ['title' => 'Riz sauté', 'recipe'=> 'Etape1:, Etape2:...', 'author' => 'Mukam Gedéon', 'enabled' => true,
    ],

];
// array_key_exists,  in_array,  array_search
$users=['Lawrence', 'David', 'Marie'];

 if (in_array('Marie', $users))
 {
    echo 'Marie fait bien partir des utilisateurs enregistrés!'. '<br />';
 }

$position=array_search('Lawrence', $users);
echo '"Lawrence" se trouve en position' . $position. '<br />';


foreach($recipes as $recipe) {
    echo $recipe['title'] . ' constitué(e) par: ' . $recipe['author'] . $recipe['recipe']. '<br />';
}

 

if (array_key_exists('title', $recipes))
{
    echo ('la clé "title" se trouve dans la recette!');
}

/**
 * AFFICHE
 * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
 */
?> 
   