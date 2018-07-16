<?php
require_once 'RSTLibEDC/config.php';
$table ='participant';
$result = $rstObj->RstfetchValues($table);


header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="participant.csv"');
header('Pragma: no-cache');
header('Expires: 0');
// create a file pointer connected to the output stream
$file = fopen('php://output', 'w');
// send the column headers
fputcsv($file, array('p_id', 'p_name', 'age', 'address', 'religion', 'education', 'occupation', 'gravida', 'trimester','family_type','family_income','socio_eco_class','ration_card_type','diet'));
// Sample data. This can be fetched from mysql too
$data = array();
foreach($result as $value){
  $data[] =
  	array($value['0'], $value['1'], $value['2'], $value['3'], $value['4'], $value['5'], $value['6'], $value['7'], $value['8'],$value['9'],$value['10'],$value['11'],$value['12'],$value['13']);
}
// output each row of the data
foreach ($data as $row)
{
fputcsv($file, $row);
}
exit();
?>





















 /*
$filename="simple.xls";
/*header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-type:appplication/vnd.ms-excel"); */
/*
$user_query = mysql_query('SELECT * FROM `student` ORDER BY id ASC');
 $flag = false;
    while ($row = mysql_fetch_assoc($user_query)) {
        if (!$flag) {
            // display field/column names as first row
            echo implode("\t", array_keys($row)) . "\r\n";
            $flag = true;
        }
        echo implode("\t", array_values($row)) . "\r\n";
    }*/