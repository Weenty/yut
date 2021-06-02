<?php
function check_bals($ball)
{
    if ($ball == "") {
        return 0;
    } else {
        return $ball;
    }
}

if (isset($_POST['naz']) && isset($_POST['silka']) && isset($_POST['opis']) && isset($_POST['kol_mest']) && isset($_POST['kol_mest_plat']) && isset($_POST['bal_mat']) && isset($_POST['bal_fizika']) && isset($_POST['bal_rus']) && isset($_POST['bal_inf']) && isset($_POST['bal_xim']) && isset($_POST['bal_obsh']) && isset($_POST['price'])) {
    include('database.php');
    $sql = "INSERT INTO `training_program` VALUES (null, :naz, :price, :kol_mest, :kol_mest_plat, :bal_mat, :bal_rus, :bal_fizika, :bal_obsh, :bal_inf, :bal_xim, :silka, :opis)";
    $st = $pdo->prepare($sql);
    $st->execute(array(
        'naz' => $_POST['naz'],
        'price' => $_POST['price'],
        'kol_mest' => $_POST['kol_mest'],
        'kol_mest_plat' => $_POST['kol_mest_plat'],
        'bal_mat' => check_bals($_POST['bal_mat']),
        'bal_rus' => check_bals($_POST['bal_rus']),
        'bal_fizika' => check_bals($_POST['bal_fizika']),
        'bal_obsh' => check_bals($_POST['bal_obsh']),
        'bal_inf' => check_bals($_POST['bal_inf']),
        'bal_xim' => check_bals($_POST['bal_xim']),
        'silka' => $_POST['silka'],
        'opis' => $_POST['opis']

    ));
    $idProgram = $pdo->lastInsertId();
    //var_dump($idProgram);
    $sql2 = "INSERT INTO `training_program_has_training_form` VALUES (:id_program, :id_form)";
    $st2 = $pdo->prepare($sql2);
    if (isset($_POST['checkone'])) {
        //Если очно, то добавляем в таблицу
        $st2->execute(array(
            'id_program' => $idProgram,
            'id_form' => 1
        ));
    }
    if (isset($_POST['checktwo'])) {
        //Если заочно, то добавляем в таблицу
        $st2->execute(array(
            'id_program' => $idProgram,
            'id_form' => 2
        ));
    }
    if (isset($_POST['checkthree'])) {
        //Если очно-заочно, то добавляем в таблицу
        $st2->execute(array(
            'id_program' => $idProgram,
            'id_form' => 3
        ));
    }
    echo 'Добавление успешно выполнено<br>';
    echo '<a href="admin.php">Вернутся в адин панель</a>';
}
