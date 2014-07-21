<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'signup':
    {

        $username = $_POST['username'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        $role=$_POST['role'];

//      $username="arulll";
//        $email="arul@gmail.com";
//        $pass="silvi";
//        $cpass="silvi";
//        $role="1";
        $sql = "SELECT * FROM login WHERE email ='".$email."'";
        $count1 = mysql_num_rows(mysql_query($sql));
        $sqlusername="SELECT * FROM login WHERE username='".$username."'";

        $count2 = mysql_num_rows(mysql_query($sqlusername));
        if (($count2>0)||($count1>0))
        {
            if($count1 > 0)
            {
                $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "emailexist",  "message" : "Already Exist" } }';

            }
            if($count2 > 0)
            {
                $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "usernameexist",  "message" : "Already Exist" } }';

            }

        }
        else{

            if($role==0)
            {
            $sql1="INSERT INTO tbl_signup (Num,username,password,confirm,email,enabled) VALUES ('','".$username."','".$pass."','".$cpass."','".$email."','1')";
            if(mysql_query($sql1))
            {
                $sql2="INSERT INTO login (loginid,username,password,email,role,enabled) VALUES ('','".$username."','".$pass."','".$email."','".$role."','1')";

                if(mysql_query($sql2))
                {

                    $lastid = mysql_insert_id();
                    $sql3="INSERT INTO user_roles(USER_ROLE_ID,USER_ID,AUTHORITY) VALUES('','".$lastid."','ROLE_USER')";
                    if(mysql_query($sql3))
                    {

                        $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "Yes", "message" : "1" } }';

                    }
                    else
                    {
                        $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "NULL",  "message" : "'.$error.'" } }';
                    }
                }
                else
                {
                    $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "NULL",  "message" : "'.$error.'" } }';
                }

            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "NULL",  "message" : "'.$error.'" } }';
            }


            }
            elseif($role==1)
            {
                $sql1="INSERT INTO tbl_doctorsignup (doctor_id,doctorusername,doctorpassword,doctorconfirm,doctoremail,enabled) VALUES ('','".$username."','".$pass."','".$cpass."','".$email."','1')";
                if(mysql_query($sql1))
                {
                    $sql2="INSERT INTO login (loginid,username,password,email,role,enabled) VALUES ('','".$username."','".$pass."','".$email."','".$role."','1')";
                    if(mysql_query($sql2))
                    {
                        $lastid = mysql_insert_id();
                        $sql3="INSERT INTO user_roles(USER_ROLE_ID,USER_ID,AUTHORITY) VALUES('','".$lastid."','ROLE_DOCTOR')";
                        if(mysql_query($sql3))
                        {

                            $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "Yes", "message" : "1" } }';

                        }
                        else
                        {
                            $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "NULL",  "message" : "'.$error.'" } }';
                        }
                    }
                    else
                    {
                        $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "NULL",  "message" : "'.$error.'" } }';
                    }
                }
                else
                {
                    $json	= '{ "serviceresponse" : { "servicename" : "Signup", "success" : "No", "emaill" : "NULL",  "message" : "'.$error.'" } }';
                }


            }


        }




        echo $json;

        break;
    }

}
?>