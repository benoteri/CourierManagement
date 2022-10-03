<?php 
//session_start();
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
  <tr>
    <td>
<style type="text/css">

.style2 {color: #FFFFFF}

</style>

<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>
<td colspan="15">
<img src="images/Nairobi.jpg" height="109" width="900"></td>
</tr>
<!-- <tr bgcolor="#2284d5">
<td height="30" width="110"><div align="center"><span class="headtext13 style2"><strong>SHIPMENT:</strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"> <a href="add-courier.php">Add</a></div></td>
<td width="4"><div align="left">|</div></td>
<td height="30" width="74"> <div class="lowerstyle" align="center"><a href="courier-list.php">Update  </a></div></td>
<td width="4"><div align="left">|</div></td>
<td width="89"><div class="lowerstyle" align="center">
  <div align="center"><a href="search-edit.php">Search &amp; Edit </a></div>
</div></td>
<td width="3"><div align="left">|</div></td>
<td height="30" width="96"><div align="center"><span class="headtext13 style2"><strong>REPORTS</strong></span><span class="heading"><strong> : </strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"><a href="delivered-list.php">Delivered </a> </div></td>
<td width="3">|</td>
<td width="76"><div class="lowerstyle" align="center"><a href="datewise-list.php">Datewise </a> </div></td>
<td width="3">&nbsp;</td>
<td width="71"><div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div></td>
<td width="3"></td>
<td height="30" width="80"> -->

</td>
</tr>

</tbody></table>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >ADMIN MENU:</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add-courier.php">Add Shipment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Update</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Delivered</a>
          <a class="dropdown-item" href="#">Datewise</a>
        
      </li>
      <li> <button class="btn btn-outline-success my-2 my-sm-0" onclick="location.href='login.php'">LOG OUT</button></li>
      
    </ul>
   

    </form>
  </div>
</nav>
<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<!-- <table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
    <td bgcolor="#E2E2E2" width="240">&nbsp;<b>Admin Menu</b></td>
    <td bgcolor="#E2E2E2" width="130"><div align="center"><a href="offices-list.php" class="headtext13">Office Details</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	
    <td bgcolor="#E2E2E2" width="100"><div align="center"><a href="add-office.php" class="headtext13">Add New Office</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	<td bgcolor="#E2E2E2" width="162"><div align="center"><a href="manager-list.php" class="headtext13">Manager Details</a> </div></td>
    <td bgcolor="#E2E2E2" width="7">|</td>
    <td bgcolor="#E2E2E2" width="125"><div align="center"><a href="add-new-officer.php" class="headtext13">Add New Manager</a></div></td>
  </tr>
</tbody>
</table>
<?php 
}
?>
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#99CCFF" width="4">&nbsp;</td>
    <td bgcolor="#99CCFF" width="350">&nbsp;</td>
    <td bgcolor="#99CCFF" width="130"><div align="center"><a href="admin.php" class="headtext13"></a></div></td>
    <td bgcolor="#99CCFF" width="10"></td>
    <td bgcolor="#99CCFF" width="162"><div align="center"><a href="admin.php" class="headtext13">Home</a> </div></td>
    <td bgcolor="#99CCFF" width="7">|</td>
    <td bgcolor="#99CCFF" width="125"><div align="center"><a href="process.php?action=logOut" class="headtext13">Logout</a></div></td>
  </tr> -->
</tbody>
</table>