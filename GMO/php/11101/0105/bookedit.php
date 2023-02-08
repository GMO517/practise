<!DOCTYPE html>
<?php
require_once("dbconnectbook.inc");
$bookid = $_GET["bookid"]; //帶入所有該本書籍的所有欄位
$sql = "SELECT * FROM mybooks WHERE bookid=" . $bookid;
$result = mysqli_query($link, $sql);
$total_records = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
?>
<html>

<head>
  <title>資料庫CRUD管理系統_修改書籍基本資料</title>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>
  <center>
    <h1>資料庫CRUD管理系統_修改書籍基本資料</h1>
  </center>
  <hr>
  <table width="80%" align="center" border="0">
    <tr>
      <td align="middle">
        <h2><strong>修改書籍基本資料</strong></h2>
      </td>
    </tr>
    <tr>
      <td align=center valign="middle">
        <form action="book_update.php" method="POST" name="form1">
          <table width="100%" border="2" cellspacing="0">
            <tr>
              <td align="center" valign="center" width="20%">欄位</td>
              <td align="center" valign="center" width="80%">資料</td>
            </tr>
            <tr>
              <td align="center">書籍編號:</td>
              <td align="left"><input type="hidden" name="bookid" value="<?php echo $row["bookid"]; ?>">
                <?php echo $row["bookid"]; ?> </td>
            </tr>
            <tr>
              <td align="center">書籍名稱:</td>
              <td align="left"><input type="text" name="bookname" value="<?php echo $row["bookname"]; ?>" size="50"></td>
            </tr>
            <!-- placeholder=說明文字-->
            <tr>
              <td align="center">作者名稱:</td>
              <td align="left"><input type="text" name="author" value="<?php echo $row["author"]; ?>" size="50"></td>
            </tr>
            <tr>
              <td align="center">書籍價格:</td>
              <td align="left"><input type="text" name="price" value="<?php echo $row["price"]; ?>" size="10"></td>
            </tr>
            <tr>
              <td align="center" colspan="2"><input type="submit" name="submit" value="更新此書籍資料"></td>

            </tr>
          </table>
        </form>
    </tr>
  </table>
</body>

</html>