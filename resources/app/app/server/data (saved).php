<?php
      
      require_once("data_connector.php"); //!connector
      $dbtype = "MySQL";
      $db_name = "test";
      $conn = mysqli_connect(localhost, "root","atp1991nkt", "test") or die("Unable to connect");
      //$conn = new mysqli(localhost, "root","atp1991nkt") or die("Unable to connect");
      error_log("message", $message_type = 0, $destination = "/var/log/mysql/error.log", $extra_headers = null);
      echo "Connected";
      $data = new JSONDataConnector($conn, $dbtype);
      $data->render_sql("SELECT id, name from test.test");
      //$data->render_table("test", "id", "name");
      
      /*
         require_once("data_connector.php");
         require_once("db_mssql.php");
         $dbtype = "MySQL";
         $db_name = "test";
         $conn = mysql_connect(localhost, "root", "atp1991nkt");
         mysql_select_db($db_name, $conn);
         //$data = new DataConnector($conn, $dbtype);
         $data = new JSONDataConnector($conn, $dbtype);
         $data -> render_table("test", "id", "name");
         ///*$data -> dynamic_loading(30);
     */    
?>