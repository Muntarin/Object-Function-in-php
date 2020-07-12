<?php

require_once './User.php';
use App\classes\User;

//$x=10;
//echo isset($x);

//$result='';
if( isset ($_POST['btn']) ) {
    $user = new User();
    $result = $user->makeFullName();
}else{
    $result='';



      // print_r($_POST);

    }

//$user =new User();
//$user->test();
?>
<form action="" method="POST">
<table>
    <tr>
        <th>First Name</th>
        <td><input type="text" name=" first_name"/></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><input type="text" name="last_name"/></td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" value="<?php echo $result;?>"/></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="Submit"/></td>
    </tr>
</table>
</form>
