<?php
/*$result = mysqli_query("SELECT id, name FROM test");
while ($row = mysql_fetch_array($result)) {
   echo "SITE_ID:"
   echo $row['SITE_ID']
   echo " 3G_SITE_ID:"
   echo $row['3G_SITE_ID']
   echo "<br>";
}*/



//include ("../../../../../../../../Downloads/samples/common/data_connector.php");
//include ("data_connector.php");
$conn = mysqli_connect("localhost","root","atp1991nkt", "test");
$sql = "select * from test";
$result = mysqli_query($conn, $sql);
$emparray = array();
while($row = mysqli_fetch_assoc($result))
{
		$emparray[] = $row;
}
$response = array();
$response['data'] = $emparray
echo json_encode($response);



[["1","Bob"],["2","Alice"]]




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
     
     
     
     	require_once("./data_connector.php"); //!connector
		require_once("./db_mysqli.php");
		//require_once("db_mysql.php");
      $dbtype = "MySQLi";
      $db_name = "test";
      $conn = mysqli_connect(localhost, "root","atp1991nkt", "test") or die("Unable to connect");
      //$conn = new mysqli(localhost, "root","atp1991nkt") or die("Unable to connect");
      //error_log("message", $message_type = 0, $destination = "/var/log/mysql/error.log", $extra_headers = null);
      //echo "Connected";
      $data = new JSONDataConnector($conn, $dbtype);
      //$data->render_sql("SELECT id, name from test.test");
      $data->render_table("test","id","name");
      
      
      require_once("./data_connector.php"); //!connector
		require_once("./db_mysqli.php");
		//require_once("db_mysql.php");
      $dbtype = "MySQLi";
      $db_name = "test";
      $conn = mysqli_connect(localhost, "root","atp1991nkt", "test") or die("Unable to connect");
      //$conn = new mysqli(localhost, "root","atp1991nkt") or die("Unable to connect");
      //error_log("message", $message_type = 0, $destination = "/var/log/mysql/error.log", $extra_headers = null);
      //echo "Connected";
      $data = new JSONDataConnector($conn, $dbtype);
      //$data->render_sql("SELECT id, name from test.test");
      $data->render_table("test","id","name");
      
      
$mysqli = new mysqli("localhost","root","atp1991nkt", "test");
if (mysqli_connect_errno()) { printf("Connect failed: %s\n", mysqli_connect_error()); exit(); }
$query = "SELECT * FROM test";
$res = $mysqli->query($query);
$data = array();
while($rec = $res->fetch_array(MYSQL_ASSOC))
{
		$data[] = $rec;
}
echo json_encode($data);
$res->close(); $mysqli->close();

?>