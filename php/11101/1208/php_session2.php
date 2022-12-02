<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['membername']) || ($_SESSION['membername'] = "")) {
  if (!isset($_POST['username']) && isset($_POST['passwd'])) {
    //預設帳號密碼
    $username = "admin";
    $passwd = "1234";
    //比對帳號是否正確
    if (($_POST['username'] == $username) && ($_POST['passwd'] == $passwd)) {
      $_SESSION['membername'] = $username;
    }
    header("Location: php_session2.php");
  }
}
if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) {
  unset($_SESSION['membername']);
  header("Location: php_session2.php");
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SESSION_登入處理</title>
</head>

<body>
  <center>
    <h1>SESSION_登入處理</h1>
  </center>
  <hr>
  <?php
  if (!isset($_SESSION['membername']) || ($_SESSION['membername'] = "")) {
  ?>
    <!-- 登入頁面表單 -->
    <form id="form1" name="form1" method="POST" action="php_session2.php">
      <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
        <tr>
          <td colspan="2" align="center" bgcolor="#CCC">
            <font color="#FFF">會員登入系統</font>
          </td>
        </tr>

        <tr>
          <td width="80" align="center" valign="baseline">帳號:</td>
          <td valign="baseline"><input type="username" name="username" id="username"></td>
        </tr>
        <tr>
          <td width="80" align="center" valign="baseline">密碼:</td>
          <td valign="baseline"><input type="passwd" name="passwd" id="passwd">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#CCC">
            <input type="submit" name="button1" id="button1" value="登入">
            <input type="reset" name="button2" id="button2" value="重設">
          </td>
        </tr>
      </table>
    </form>
  <?php } else {
  ?>
    <!-- 已登入頁面-->
    <br><br>
    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor=#F2F2F2>
      <tr>
        <td align="center" bgcolor="#CCC">
          <font color=#FFF>會員登入系統</font>
        </td>
      </tr>
      <tr>
        <td align="center" valign="baseline">
          您好，恭喜您登入成功!!!
        </td>
      </tr>
      <tr>
        <td align="center" bgcolor="#CCC"><a href="php_session2.php?logout=true">登出系統</a></td>
      </tr>
    </table>
  <?php } ?>
</body>

</html>