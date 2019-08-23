
<?php  

require_once 'new_config.php';

class Database {

   // [ @connection  ] :- Handle the connection to the Database
  public $connection;
  
// [ @function __ construct ] :- Start database conncetion automatically
 function __construct(){
     $this->open_db_connection();
 }

 // [ @open_db_connection ] :- Open the connection of the database.
 public function open_db_connection (){
     $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
     if($this->connection->connect_errno){
         echo "bad connection" . "<br>" . $this->connection->connect_error;
     }
 }

/* public function open_database_connection(){
    $this->connection  = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno()){
        echo "bad connection";
    }
 }*/

 // [ @sql_query ] :- Return SQL query..
//   [ @sql ] :- SQl Query
   public function sqlQuery($sql){
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result);
        return $result;
    }


// [ @confirm_query ] :- Checkout the query result
    private function confirm_query($result)
    {
        if (!$result) {
            die("query failed");
        }
    }

    //[ @escape_string ] :- Escape any string to modify database {SQL-INJECTION}
    public function escape_string($string)
    {
        $escaped_String =  $this->connection->real_escape_string($string);
        return $escaped_String;
    }

        //(@the_insert_id ] :- Return the auto generated user id from the last mysql query.
    public function the_insert_id(){
        return $this->connection->insert_id;
    }
    //..Database close bracket.
}


// [ @databaseConnection ] :-  an object from Database class
$database = new Database();


?>








