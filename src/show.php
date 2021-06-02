<?php
function available_forms($pdo, $id)
{
    $sql = "SELECT * FROM `training_program_has_training_form` INNER JOIN `training_form` ON  `id_training_form` = `training_form_id_training_form` WHERE `training_program_id_training_program` = :id";
    $st = $pdo->prepare($sql);
    $st->execute(array(
        ':id' => $id

    ));
    $res = $st->fetchAll(PDO::FETCH_ASSOC);
    $forms = 'Форма обучения: ';
    foreach ($res as $value) {
        $forms .= $value['name_form'] . ' ';
    }
    return $forms;
}
//include('database.php');
$req = "SELECT * FROM `training_program` WHERE min_ball_matem<=:min_mat AND min_ball_russ<=:min_rus AND min_ball_physics<=:min_fiz AND min_ball_social<=:min_obshe AND min_ball_inform<=:min_inform AND min_ball_chemistry<=:min_him";
$st1 = $pdo->prepare($req);
$st1->execute(array(
    'min_mat' => $mat,
    'min_rus' => $rus,
    'min_fiz' => $fiz,
    'min_obshe' => $obshe,
    'min_inform' => $inform,
    'min_him' => $him
));
$result = $st1->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    $forms = available_forms($pdo, $row['id_training_program']);
    $url_program = $row['url_program'];
    //$name_program = "№" . $row['id_training_program'] . " " . $row['name_program'];
    $name_program = $row['name_program'];
    $descript = $row['descript'];
    $places = "";
    if ($row['budget_places'] > 0) {
        $places .= 'Количество бюджетных мест: ' . $row['budget_places'] . " ";
    }
    if($row['paid_places']>0){
        $places .= 'Количество платных мест: ' . $row['paid_places'];
    }
    echo "<a href='$url_program' class='list-group-item list-group-item-action '>
    <div class='d-flex w-100 justify-content-between'>
      <h5 class='mb-1'>$name_program</h5>
      <small>$forms</small>
    </div>
    <p class='mb-1'>$descript</p>
    <small>$places</small>
  </a>";
}
