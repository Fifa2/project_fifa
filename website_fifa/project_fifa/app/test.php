<?php
require('../app/database.php');
require('../app/matches.php');
$matches = new \project_fifa\matches();


function scheduler($teams){
    if (count($teams)%2 != 0){
        array_push($teams,0);
    }
    $away = array_splice($teams,(count($teams)/2));
    $home = $teams;
    for ($i=0; $i < count($home)+count($away)-1; $i++){
        for ($j=0; $j<count($home); $j++){
            $round[$i][$j]["Home"]=$home[$j];
            $round[$i][$j]["Away"]=$away[$j];
        }
        if(count($home)+count($away)-1 > 2){
            array_unshift($away,array_shift(array_splice($home,1,1)));
            array_push($home,array_pop($away));
        }
    }
    return $round;
}
$pouleid = 2;
$sql = "SELECT id FROM tbl_teams WHERE poule_id = $pouleid";
$poule =  $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($poule) ; $i++)
{
    $teams[$i] = $poule[$i]['id'];
}
//var_dump($teams);


$members = array(1,2,3,4);
$schedule = scheduler($teams);
foreach($schedule AS $round => $games){
//    var_dump($games);
    foreach($games AS $play){
//        var_dump($play);
//
        $id1 = $play["Home"];
        $id2 = $play['Away'];
        var_dump($id1);

        if ($id1 != '0' && $id2 != '0')
        {
            $matches->AddMatch($id1,$id2);
        }


//        var_dump($id1);

    }
}

// select teamid from tbl_teams where poolid = $poolid         echo $play["Home"]." - ".$play["Away"]."<BR>";

