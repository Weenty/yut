<?php
include('database.php');
$sql1 = "SELECT * FROM `training_program`";
$st = $pdo->prepare($sql1);
$st->execute();
$result=$st->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $value) {
    $dir= "№" . $value['id_training_program'] . " " . $value['name_program'];
    $pash= "update.php?program_id=".$value['id_training_program'];
    echo "<a href='$pash'><li class='list-group-item'>$dir</li></a>";
}
