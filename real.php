<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br/><br/><br/><br/><br/>
    <center>
      <form name="data" method="post" action="index.php">
        <label for="SID">학번</label>
        <input type="sid" name="sid" id="sid" placeholder="학번 입력"/><br/><br/>
        <label for="DN">책상번호</label>
        <input type="dn" name="dn" id="dn" placeholder="책상 번호 입력"/><br/><br/>
        <label for="password">비밀번호</label>
        <input type="password" name="password" id="password" placeholder="비밀번호 입력"/><br/><br/><br/>
        <input style="height:40px;" type="submit" id="reservationSubmit" value="예약하기"/><br/><br/><br/><br/>
      </form>

    <button type="button" onclick="location.href='index.php';">뒤로가기</button>
  </center>
  </body>
</html>
