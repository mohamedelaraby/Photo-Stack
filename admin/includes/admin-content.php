<?php
/*
- [ @Author ] :- Muhammad Alaraby
- [ @Date   ] :- 19/8/2019
- [ @Info   ] :- Admin page Content.
*/
?>
<!----------------------------------------------------------------------------------------------->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>


            <?php

          // [ $userInfo ] :- Return the user from the database 
          $userInfo = User::findUsersByID(2);

          // [ $user ] :- User object that store it`s information 
          $user = User::Instantiate($userInfo);

          
          
            ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

<?php

/*
//function test_query(){$sql = "SELECT * FROM users WHERE lastname='daiana'";
    $result = $databaseConnection->sqlQuery($sql);
    $user_found = mysqli_fetch_array($result);
    for($i=0;$i<3;$i++){
    echo " Hi " . $user_found[$i] . "<br>"; 
    }

*/


?>
</div>