<?php
if (isset($_POST['naz']) && isset($_POST['silka']) && isset($_POST['opis']) && isset($_POST['kol_mest']) && isset($_POST['kol_mest_plat']) && isset($_POST['bal_mat']) && isset($_POST['bal_fizika']) && isset($_POST['bal_rus']) && isset($_POST['bal_inf']) && isset($_POST['bal_xim']) && isset($_POST['bal_obsh']) && isset($_POST['price'])) {
    include('database.php');
    echo 'привет';
    $sql = "INSERT INTO `training_program` VALUES (null, :naz, :price, :kol_mest, :kol_mest_plat, :bal_mat, :bal_rus, :bal_fizika, :bal_obsh, :bal_inf, :bal_xim, :silka, :opis)";
    $st=$pdo->prepare($sql);
    $st->execute(array(
        'naz'=>$_POST['naz'],
        'price'=>$_POST['price'],
        'kol_mest'=>$_POST['kol_mest'],
        'kol_mest_plat'=>$_POST['kol_mest_plat'],
        'bal_mat'=>$_POST['bal_mat'],
        'bal_rus'=>$_POST['bal_rus'],
        'bal_fizika'=>$_POST['bal_fizika'],
        'bal_obsh'=>$_POST['bal_obsh'],
        'bal_inf'=>$_POST['bal_inf'],
        'bal_xim'=>$_POST['bal_xim'],
        'silka'=>$_POST['silka'],
        'opis'=>$_POST['opis']

    ));
    $res=$pdo->lastInsertId();
    var_dump($res);
}
