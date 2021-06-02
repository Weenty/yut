<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Изменение направлений</title>
</head>

<body>
  <?php
  include('info.php');
  ?>
  <div class="container">
    <h1>Изменение</h1>
    <form action="delete.php" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Номер id</label>
        <input type="number" class="form-control" name="program_id" value="<?php echo $id_program; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Название</label>
        <input type="text" class="form-control" name="naz" value="<?php echo $program_name; ?>" placeholder="Название направления" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ссылка на направление</label>
        <input type="text" class="form-control" name="silka" value="<?php echo $link; ?>" placeholder="Ссылка направления" required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" <?php echo $checbox_array[0]; ?> name="checkone" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
          Очное
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" <?php echo $checbox_array[1]; ?> name="checktwo" id="defaultCheck2">
        <label class="form-check-label" for="defaultCheck2">
          Заочное
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" <?php echo $checbox_array[2]; ?> name="checkthree" id="defaultCheck3">
        <label class="form-check-label" for="defaultCheck3">
          Очно-заочное
        </label>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Описание</label>
        <textarea class="form-control" name="opis"  rows="3" required><?php echo $descr; ?></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Кол-во бюджетных мест</label>
        <input type="number" class="form-control" name="kol_mest" value="<?php echo $budget_places; ?>" placeholder="Кол-во" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Кол-во платных мест</label>
        <input type="number" class="form-control" name="kol_mest_plat" value="<?php echo $paid_places; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Баллы-математика</label>
        <input type="number" class="form-control" name="bal_mat" value="<?php echo $min_matem; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Баллы-физика</label>
        <input type="number" class="form-control" name="bal_fizika" value="<?php echo $min_physics; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Баллы-русский</label>
        <input type="number" class="form-control" name="bal_rus" value="<?php echo $min_russ; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Баллы-информатика</label>
        <input type="number" class="form-control" name="bal_inf" value="<?php echo $min_inform; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Баллы-химия</label>
        <input type="number" class="form-control" name="bal_xim" value="<?php echo $min_chemistry; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Баллы-обществознание</label>
        <input type="number" class="form-control" name="bal_obsh" value="<?php echo $min_social; ?>" placeholder="Кол-во">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Стоимость обучения</label>
        <input type="number" class="form-control" name="price" value="<?php echo $price; ?>" placeholder="Кол-во денег" required>
      </div>
      <button type="submit" class="btn btn-warning" name="action" value="change">Не нажимать</button>
      <button type="submit" class="btn btn-danger" name="action" value="delete">Удалить</button>
      <a href="admin.php"><button type="button" class="btn btn-primary">Назад</button></a>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>
