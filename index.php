<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>청운재 자리 예약 프로그램</title>
    <link rel="stylesheet" href="css.css">

</head>
<body>

    <h1>청운재 자리 예약</h1>
    <p>예약할 자리를 선택하십시오</p>
  </br>
  <button type="button" onclick="location.href='real.php';">예약하기</button>
    <p>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">&nbsp;&nbsp;&nbsp;&nbsp;
      <img class="desk" src="door.jpg" height="100">
    </p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      if($_POST['dn']==1){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==2){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==3){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==4){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==5){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==6){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==7){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>

<br>
    <p>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <?php
        if($_POST['dn']==8){
          echo $_POST['sid'];
        }
        else{
          echo "30900";
        }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==9){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==10){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==11){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==12){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==13){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
  <br>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
    </p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      if($_POST['dn']==15){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==16){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==17){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==18){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==19){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==20){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>

<br>

    <p>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <?php
        if($_POST['dn']==21){
          echo $_POST['sid'];
        }
        else{
          echo "30900";
        }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==22){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==23){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==24){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==25){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==26){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
  <br>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
    </p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      if($_POST['dn']==27){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==28){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==29){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==30){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==31){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==32){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
<br>

    <p>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <?php
        if($_POST['dn']==33){
          echo $_POST['sid'];
        }
        else{
          echo "30900";
        }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==34){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==35){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==36){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==37){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if($_POST['dn']==38){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
      ?>
  <br>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
    </p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      if($_POST['dn']==39){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==40){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==41){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==42){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==43){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==44){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
<br>

    <p>
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
      <img class="desk" src="https://media.istockphoto.com/id/1391180231/ko/%EB%B2%A1%ED%84%B0/%ED%95%99%EA%B5%90-%EC%B1%85%EC%83%81-%EB%B2%A1%ED%84%B0-%EA%B2%A9%EB%A6%AC-%EC%9D%BC%EB%9F%AC%EC%8A%A4%ED%8A%B8-%EB%A0%88%EC%9D%B4-%EC%85%98.jpg?s=170667a&w=0&k=20&c=2i_Dn--9BZOC_TGSDkI6nDoLgc7ExZXyByG6A7GLdyY=" height="100">
    </p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
      if($_POST['dn']==45){
        echo $_POST['sid'];
      }
      else{
        echo "30900";
      }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==46){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==47){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==48){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==49){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==50){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($_POST['dn']==51){
      echo $_POST['sid'];
    }
    else{
      echo "30900";
    }
    ?>
<br>
</body>
</html>
