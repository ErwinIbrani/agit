<?php
include 'koneksi.php';
$id_issue = $_GET['id_issue'];

$query     = mysql_query("SELECT * FROM ft_form_6 WHERE inc_ticket = '$id_issue'") or die(mysql_error());
$row       = mysql_fetch_array($query);
$data      = array(
              'data1' =>  $row['issue'],
              'data2' =>  $row['responsibility_unit']
            );
 echo json_encode($data);
?>
