<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p><a href="input-shiploader1.php?act=add">Tambah Data</a></p>
<p>
  <?php
include "class-shiploader1.php";
$db=new shiploader1();
if (isset($_GET['act']))
{
	if($_GET['act']=="add")
	{

?>
</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="textfield">Tanggal</label>
    <input type="text" name="tgl" id="tgl" /> 
  </p>
  <p>
    <label for="select">Shift Group</label>
    <select name="select" id="select">
    </select>
  </p>
  <p>
    <label for="textfield3">Nama Kapal</label>
    <input type="text" name="textfield" id="textfield3" />
  </p>
  <p>
    <label for="Waktu Tiba"></label>
    <label for="textfield4">Waktu Tiba</label>
    <input type="text" name="textfield2" id="textfield4" />
  </p>
  <p>
    <label for="textfield5">Waktu Mulai Muat</label>
    <input type="text" name="textfield3" id="textfield5" />
  </p>
  <p>
    <label for="Waktu Selesai Muat"></label>
    <label for="textfield6">Waktu Selesai Muat</label>
    <input type="text" name="textfield4" id="textfield6" />
  </p>
  <p>
    <label for="textfield7">Lama Waktu Muat (Dalam Jam)</label>
    <input type="text" name="textfield5" id="textfield7" />
  </p>
  <p>
    <label for="textfield7">Lama Waktu Muat (Dalam Menit)</label>
    <input type="text" name="textfield5" id="textfield7" />
  </p>
  <p>
    <label for="textfield7">SOP</label>
    <input type="text" name="textfield5" id="textfield7" />
  </p>
  <p>
    <label for="textfield7">DEV</label>
    <input type="text" name="textfield5" id="textfield7" />
  </p>
  <p>
    <label for="textfield7">Jenis Batu Bara</label>
    <input type="text" name="textfield5" id="textfield7" />
  </p>
  <p>
    <label for="textfield7">B.Pass</label>
    <input type="text" name="textfield5" id="textfield7" />
  </p>
  
</form>
<p>&nbsp;</p>

<p>
  <?php		
	}
}
?>
</p>
</body>
</html>