<?php


$Intranet_database = 'default';
//$database = 'zyqa';
$database = 'default';
$date = '2021-04-12';
$arr = ['cs_100_1','cs_101_1','cs_101_2','cs_102_1','cs_200_1','cs_201_1','cs_202_1','cs_2_10','cs_2_101','cs_2_110','cs_2_111','cs_2_12','cs_2_2','cs_3_101','cs_3_2','cs_3_3','cs_400_1','cs_500_1','cs_500_2','cs_998_4','cs_998_41','cs_998_42','cs_998_43','cs_998_44','cs_998_45','cs_998_46','cs_998_47','cs_998_48','cs_998_49','cs_998_5','cs_998_51','cs_998_52','cs_998_53','cs_998_54','gs_1_2','gs_1_21','gs_1_4','gs_1_5','gs_2_1','gs_2_100','gs_2_105','gs_2_108','gs_2_13','gs_2_3','gs_2_4','gs_2_5','gs_2_6','gs_2_7','gs_2_8','gs_3_2','gs_3_3','gs_3_34','gs_3_35','gs_3_4','gs_998_6','gs_998_7','gs_998_9','merge_2_99','merge_300_1','merge_301_1','merge_998_1','merge_998_2','merge_998_3','pay_300_2','pay_301_2','pay_888_1'];

echo '日期:'.$date;
foreach($arr as $v){
    $exec = "clickhouse-client  --port 9000 -u default -h 101.132.138.164 -q ".'"'."alter table $database.$v delete where date = '$date'".'"';
    exec($exec);
    $select_intranet_sql = '"'."SELECT * FROM $Intranet_database.$v where date = '$date' FORMAT CSVWithNames".'"';
    $insert_sql = '"'."INSERT INTO $database.$v FORMAT CSVWithNames".'"';
    exec("clickhouse-client --port 9000 -u default -h 127.0.0.1 --password qikucdch -q $select_intranet_sql | \
clickhouse-client --port 9000 -u default -h 101.132.138.164 -q $insert_sql");

    echo $v."表 导入执行完毕";
    echo "\n";
}
