<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $host = "localhost";
    $user = "root";
    $pw = "root";
    $dbname = "myservice";

    if($this->dbConnection == null){
       $this->dbConnection = new mysqli($host, $user, $pw, $dbname);
       $this->dbConnection->set_charset("utf8");
    }
    if(mysqli_connect_errno()){
      echo '실패';
      echo mysqli_connect_error();
    }
    ?>

    <?php
      class myMember{
        //데이처베이스 접속 정보를 데입할 프라퍼티
        protected $dbConnection = null;

        //mode
        protected $mode;
        //데이터베이스 접속 정보 가져오는 메소드
        protected function dbConnection(){
          include_once $_SERVER['DOCUMENT_ROOT'].'/myservice/connect/connect.php';
      }

    function signUP(){
      $userPw = $_POST['userPw'];
      if($userPw == ''){
        echo '비밀번호 값이 공백입니다.';
        exit;
      }
      $userPw = shal('mySalt'.$userPw);
      $regTime = time();
      $desknum = shal('mySalt'.$userPw);

      $sql = "INSERT INTO mymember(username, pw, regTime, desknum) ";
      $sql .= "VALUES('{$userName}', '{$pw}', '$regTime', '$Desknum')";
      $res = $this->dbConnection->query($sql);


    }

    function usernameCheck($username){

    }
    $mymember = new myMember;
    ?>

  </body>
</html>*/
