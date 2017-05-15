<?php
header("Content-Type: application/xls");   
header("Content-Disposition: attachment; filename=active-mo-mo.xls");
 //header
echo "MO\tCUSTOMER\tSTART_DATE\t SOD\tRSOD\tSTART\t RUNNING\tQUEUE\tCOMPLETED\tYIELD %\tCURRENT OPERATION\tMO INV VALUE in $\tMTL USAGE COST in $\t\n";
//content
require ('controllers/activeMOController.php'); 
$packages = new ActiveMOController($_REQUEST);
if($data = $packages->getActiveMoSaveXlsMo()){
    foreach($data as $row){

        @$TOTAL_CTR_MO              += $row['CTR_MO'];
        @$TOTAL_SCHEDULED_QUANTITY  += $row['SCHEDULED_QUANTITY'];
        @$TOTAL_QUANTITY_RUNNING    += $row['QUANTITY_RUNNING'];
        @$TOTAL_QUANTITY_IN_QUEUE   += $row['QUANTITY_IN_QUEUE'];
        @$TOTAL_QUANTITY_COMPLETED  += $row['QUANTITY_COMPLETED'];
        @$TOTAL_INV_VALUE_USD       += $row['INV_VALUE_USD'];

        @$INIT_YIELD                = ($row['QUANTITY_RUNNING'] + $row['QUANTITY_IN_QUEUE'] + $row['QUANTITY_COMPLETED']);
        @$YIELD                     = ($INIT_YIELD/$row['SCHEDULED_QUANTITY'])*100;

        @$TOTAL_INIT_YIELD          += $INIT_YIELD;
        @$TOTAL_YIELD               += $YIELD;
        @$TOTAL_PERCENTAGE_YIELD    = ($TOTAL_INIT_YIELD / $TOTAL_SCHEDULED_QUANTITY)*100;

        if ($row['START_DATE'] != '') { $START_DATE = date("Y-m-d",strtotime($row['START_DATE'])); }
        else{$START_DATE = '';}

        if ($row['SOD'] != '') { $SOD = date("Y-m-d",strtotime($row['SOD'])); }
        else{$SOD = '';}

        if ($row['RSOD'] != '') { $RSOD = date("Y-m-d",strtotime($row['RSOD'])); }
        else{$RSOD = '';}

        echo $row['MO']."\t";
        echo $row['CUSTOMER']."\t";
        echo $row['START_DATE']."\t";
        echo $row['SOD']."\t";
        echo $row['RSOD']."\t";
        echo number_format($row['SCHEDULED_QUANTITY'],2)."\t";
        echo number_format($row['QUANTITY_RUNNING'],2)."\t";
        echo number_format($row['QUANTITY_IN_QUEUE'],2)."\t";
        echo number_format($row['QUANTITY_COMPLETED'],2)."\t";
        echo number_format($YIELD,2)."\t";
        echo $row['DESCRIPTION']."\t";
        echo number_format($row['INV_VALUE_USD'],2)."\t";
        echo "null"."\t";
        echo "\n";
    }
}
?>