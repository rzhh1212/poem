<?php 
	error_reporting(E_ALL);
    ini_set( 'display_errors', 'On' );

    $mysql_server_name = "104.224.163.239";
    $mysql_username = "root";
    $mysql_password = "rzhh1212";
    $mysql_database = "demo";
    
    $conn = mysqli_connect($mysql_server_name, $mysql_username, $mysql_password, $mysql_database);
    $strsql = "SELECT poemid, sum(choice) FROM poem GROUP BY poemid";
    $result = mysqli_query($conn, $strsql);
    $data = array();
    while ($array = mysqli_fetch_row($result)) {
        $data[] = $array;
    }
    echo json_encode($data);

?>