<?php 
/*
- [ @Author ] :- Muhammad Alaraby
- [ @Date   ] :- 19/8/2019
- [ @Info   ] :- User Data management
*/
?>

<?php 
class User {

//User instances.
public $id;
public $userName;
public $password;
public $firstName;
public $lastName;

// [ findAllUsers ] :- Return all users in the database 
public static function findAllUsers(){

   return self::performUsersSqlQuery("SELECT * FROM users");
}

// [ findUsersByID ] :- Return all the users by id 
public static function findUsersByID($userId){

  //[ global $database ] :- database global object 
    $userID =  self::performUsersSqlQuery("SELECT * FROM users WHERE id=$userId LIMIT 1");
    return mysqli_fetch_array($userID); 
}



// [ performSqlQuery ] :- Return mysql query
public static function performUsersSqlQuery($sql){
    global $database;
    return $database->sqlQuery($sql);
}


// [ Instantiate ] :- Return any user information
// [ $userRecord ] :- The User to get it`s data
public static function Instantiate($userRecord){
    
  // [ $object ] :- Create new User class object
    $object = new self;

  //Assign user information into User class object
   // $object->id        =  $user['id'];
    //$object->userName  =  $user['username'];
    //$object->password  =  $user['password'];
    //$object->firstName =  $user['firstname'];
    //$object->lastName  =  $user['lastname'];

    foreach ($userRecord as $property => $value) {
     if($object->hasProperty($property)){
      echo  $object->property = $value . "<br>";
     }
    }


  return $object;
}

// @hasProperty :- Check if the user object has property or not
private function hasProperty($property){
  $objectProperty = get_object_vars($this);    //Gets  the properties of the given object
  return array_key_exists($property, $objectProperty); //Return used property by the User class object
}



 //..Database close bracket.
}


?>