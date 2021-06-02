<?php
$program_name = '';
$link = '';
$budget_places = '';
$paid_places = '';
$min_matem = '';
$min_russ = '';
$min_physics = '';
$min_social = '';
$min_inform = '';
$min_chemistry = '';
$price = '';
$descr = '';
$id_program = '';
$checbox_array = ['', '', ''];
if (isset($_GET['program_id'])) {
    include('database.php');
    $sql1 = "SELECT * FROM `training_program` WHERE `id_training_program` = :id";
    $st = $pdo->prepare($sql1);
    $st->execute(array(
        ':id' => $_GET['program_id']
    ));
    $result = $st->fetchAll(PDO::FETCH_ASSOC);
    if (isset($result)) {
        $program_name = $result[0]['name_program'];
        $link = $result[0]['url_program'];
        $budget_places = $result[0]['budget_places'];
        $paid_places = $result[0]['paid_places'];
        $min_matem = $result[0]['min_ball_matem'];
        $min_russ = $result[0]['min_ball_russ'];
        $min_physics = $result[0]['min_ball_physics'];
        $min_social = $result[0]['min_ball_social'];
        $min_inform = $result[0]['min_ball_inform'];
        $min_chemistry = $result[0]['min_ball_chemistry'];
        $price = $result[0]['price'];
        $descr = $result[0]['descript'];
        $id_program = $result[0]['id_training_program'];
    }
    $sql_checbox = "SELECT * FROM `training_program_has_training_form` WHERE `training_program_id_training_program` = :id";
    $st_checbox = $pdo->prepare($sql_checbox);
    $st_checbox->execute(array(
        ':id' => $_GET['program_id']
    ));
    $result_checkbox = $st_checbox->fetchAll(PDO::FETCH_ASSOC);
    if (isset($result_checkbox)) {
        foreach ($result_checkbox as $value) {
            switch ($value['training_form_id_training_form']) {
                case '1':
                    $checbox_array[0] = 'checked';
                    break;
                case '2':
                    $checbox_array[1] = 'checked';
                    break;
                case '3':
                    $checbox_array[2] = 'checked';
                    break;
            }
        }
    }
}
