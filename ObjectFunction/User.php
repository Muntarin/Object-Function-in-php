<?php


namespace App\classes;


class User
{
    //public function test(){
   // echo'hello';
   // }


    public function makeFullName(){
        $user=(object)$_POST;
        $firstName= $user->first_name;
        $lastName=  $user->last_name;
        $fullName=  $firstName.' '.$lastName;
        return $fullName;

        //echo "In make full name";
        //echo $_POST ['first_name'];

       //$firstName= $_POST['first_name'];
       // $lastName= $_POST['last_name'];
       // $fullName= $firstName.''.$lastName;
       // return $fullName;
    }
}
