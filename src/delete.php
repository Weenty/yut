<?php
if (isset($_POST['action']) && isset($_POST['program_id'])) {
    //$sql_del_check = '';
    include('database.php');
    if ($_POST['action'] == "delete") {
        $sql1 = "DELETE FROM `training_program_has_training_form` WHERE training_program_id_training_program = :id1";
        $sql = "DELETE FROM `training_program` WHERE id_training_program = :id";
        $st1 = $pdo->prepare($sql1);
        $st1->execute(array(

            ':id1' => $_POST['program_id']
        ));
        $st = $pdo->prepare($sql);
        $st->execute(array(

            ':id' => $_POST['program_id']
        ));
    } else if ($_POST['action'] == "change") {
        $sql = "UPDATE `training_program` SET name_program=:naz , price=:price , budget_places=:kol_mest , paid_places=:kol_mest_plat , min_ball_matem=:bal_mat , 
        min_ball_russ=:bal_rus , min_ball_physics=:bal_fizika , min_ball_social=:bal_obsh , min_ball_inform=:bal_inf , min_ball_chemistry=:bal_xim , url_program=:silka , descript=:opis";
        $st = $pdo->prepare($sql);
        $st->execute(array(
            'naz' => $_POST['naz'],
            'price' => $_POST['price'],
            'kol_mest' => $_POST['kol_mest'],
            'kol_mest_plat' => $_POST['kol_mest_plat'],
            'bal_mat' => $_POST['bal_mat'],
            'bal_rus' => $_POST['bal_rus'],
            'bal_fizika' => $_POST['bal_fizika'],
            'bal_obsh' => $_POST['bal_obsh'],
            'bal_inf' => $_POST['bal_inf'],
            'bal_xim' => $_POST['bal_xim'],
            'silka' => $_POST['silka'],
            'opis' => $_POST['opis']

        ));

        $sql_del_check = "DELETE FROM `training_program_has_training_form` WHERE training_program_id_training_program = :id1";
        $st_del_check = $pdo->prepare($sql_del_check);
        $st_del_check->execute(array(
           ':id1' => $_POST['program_id']
        ));;

        $sql2 = "INSERT INTO `training_program_has_training_form` VALUES (:id_program, :id_form)";
        $st2 = $pdo->prepare($sql2);
        if (isset($_POST['checkone'])) {
            //Если очно, то добавляем в таблицу
            $st2->execute(array(
                'id_program' => $_POST['program_id'],
                'id_form' => 1
            ));
        }
        if (isset($_POST['checktwo'])) {
            //Если заочно, то добавляем в таблицу
            $st2->execute(array(
                'id_program' => $_POST['program_id'],
                'id_form' => 2
            ));
        }
        if (isset($_POST['checkthree'])) {
            //Если очно-заочно, то добавляем в таблицу
            $st2->execute(array(
                'id_program' => $_POST['program_id'],
                'id_form' => 3
            ));
        }
    }
    header('location: admin.php');
}
echo "произошла ошибка";
