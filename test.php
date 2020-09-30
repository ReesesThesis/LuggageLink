<?php

$top = 2600;

//define PDO - tell about the db file.
$db = new PDO('sqlite:Leaderboard.db');


//write query

$statement = $db->query("SELECT score FROM Leaders");
$scores = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($scores as &$score){
    $number = $score['score'];
    $tempArray = array();
    if($top > $number) {
        $tempArray[0] = $top;
        for($x = 0; $x < count($scores)-1; $x++){
            $a = $scores[$x];
            $b = $x+1;
            $tempArray[$b] = $a;
        }
        $scores = $tempArray;
    break;
    }
}

foreach($scores as $score){
    //We need to push the new $scores array to the db, but I am struggling with this step
    $query = $db->query("UPDATE Leaders SET score()");

}


?>