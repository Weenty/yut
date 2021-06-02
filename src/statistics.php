<?php
if (isset($_POST['mat']) && isset($_POST['rus']) && isset($_POST['fiz']) && isset($_POST['obshe']) && isset($_POST['inform']) && isset($_POST['him'])) {



    $mat = 0;
    $rus = 0;
    $fiz = 0;
    $obshe = 0;
    $inform = 0;
    $him = 0;

    include('database.php');
    if ($_POST['mat'] != '') {
        $mat = $_POST['mat'];
    }
    if ($_POST['rus'] != '') {
        $rus = $_POST['rus'];
    }
    if ($_POST['fiz'] != '') {
        $fiz = $_POST['fiz'];
    }
    if ($_POST['obshe'] != '') {
        $obshe = $_POST['obshe'];
    }
    if ($_POST['inform'] != '') {
        $inform = $_POST['inform'];
    }
    if ($_POST['him'] != '') {
        $him = $_POST['him'];
    }
    $sql = "INSERT INTO `user_data` VALUES (null, :mat, :rus, :fiz, :obshe, :inform, :him)";
    $st = $pdo->prepare($sql);
    $st->execute(array(
        'mat' => $mat,
        'rus' => $rus,
        'fiz' => $fiz,
        'obshe' => $obshe,
        'inform' => $inform,
        'him' => $him
    ));
    include('show.php');
}
