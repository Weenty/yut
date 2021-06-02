<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Калькулятор</title>
</head>
<header style="padding: 30px;" class="col"><img src="/logo.png"><a href="admin.php"><button type="button"
      class="btn btn-link" style="float: right;">Админ-панель</button></a></header>

<body
  style="background-image: url(/bcg.png); background-attachment: fixed;background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <div class="container" style="max-width: 570px; color: #333; margin: 80px auto;">
    <h2 class="section-title" align="center">КАЛЬКУЛЯТОР БАЛЛОВ ЕГЭ ДЛЯ НТИ УРФУ</h2>
    <form action="index.php" method="post">
      <div style="max-width: 570px; margin: 30px auto;">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 filteEgeItemq">
          <span>Математика</span>
          <input type="number" name="mat" id="mat" min="27" max="100">
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 filteEgeItemq">
          <span>Русский</span>
          <input type="number" name="rus" id="rus" min="36" max="100">
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 filteEgeItemq">
          <span>Физика</span>
          <input type="number" name="fiz" id="fiz" min="36" max="100">
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 filteEgeItemq">
          <span>Обществознание</span>
          <input type="number" name="obshe" id="obshe" min="42" max="100">
        </div>
        <input type="hidden" name="ist">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 filteEgeItemq">
          <span>Информатика</span>
          <input type="number" name="inform" id="inform" min="40" max="100">
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 filteEgeItemq">
          <span>Химия</span>
          <input type="number" name="him" id="him" min="36" max="100">
        </div>
        <input type="hidden" name="liter">
        <input type="hidden" name="georg">
        <input type="hidden" name="inyaz">
        <div class="clearfix"></div>
        <br>
        <center><input type="submit" class="buttonForPush" value="Найти мне специальность"></center>
    </form>
    <p style="text-align: center; font-size:16px;margin-top: 20px;"><b>ВАЖНО:</b> Калькулятор соберет комбинации в
      данном вузе за вас.
      Просто введите примерные или полученные баллы по всем сдаваемым предметам, а мы вам покажем, в какие
      комбинации они складываются и дадим возможность посмотреть шансы по каждой. Для вашего удобства приводим
      комбинации, которые встречаются в этом вузе.</p>
    <p style="text-align: center; font-size:16px;margin-top: 20px;">Отборочная комиссия НТИ (филиала) УрФУ находится по
      адресу:
      Свердловская область, город Нижний Тагил, ул. Красногвардейская 59, кабинет № 220</p>
    <p style="text-align: center; font-size:16px;margin-top: 20px;">
      Телефоны:
      Вопросы приема: (3435) 23-09-00 (многоканальный телефон)
      Отборочная комиссия: (3435) 25-56-10
      Курсы подготовки к ЕГЭ и экзаменам: (3435) 25-72-85
    </p>
    <p style="text-align: center; font-size:16px;margin-top: 20px;">
      Время работы Отборочной комиссии:
      Пн-Чт: 9.00 - 17.00
      Пт: 9.00 - 16.00
      Сб, Вс - выходной.</p>
      <p style="text-align: center; font-size:16px;margin-top: 20px;">Подробнее - <a href="https://nti.urfu.ru/page/Abitur">nti.urfu.ru</a></p>
    <script type="text/javascript" charset="utf-8" async
      src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae1e23a0f82fdf7f01b67fc0ad458c8c52471f613b5585307f558f468e547a1cd&amp;width=540&amp;height=400&amp;lang=ru_RU&amp;scroll=true">
    </script>
    <div class="list-group">
      <?php
        include('statistics.php');

        ?>
    </div>
  </div>
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