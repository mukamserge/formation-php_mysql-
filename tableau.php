<?php 
    $lawrence=['MUKAM LAWRENCE', '20 janvier 2015', 9];
    $david=['MUKAM DAVID', '08 MARS 2019', 4 ];
    $marie=['GUIKUEY MARIE', '09 JUIN 2021', 02 ];

    $users = [$lawrence, $david, $marie];

    $lines=3;
    $counter=0;
    while ($counter < $lines){
        echo $users[$counter][$counter]. '<br />';
        $counter++;

    }

    //echo $users[2][0] ;  // 08 Mars 2019
    
?> 
   
 