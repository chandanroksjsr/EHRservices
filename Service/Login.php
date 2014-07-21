<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/07/14
 * Time: 12:30 PM
 */


session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'login':
    {

        $username = $_POST['username'];
        $pass=$_POST['password'];
        $role=$_POST['role'];



        $sql1="SELECT * FROM login WHERE binary username='".$username."' AND binary password='".$pass."' And role='".$role."'";

        $count2 = mysql_num_rows(mysql_query($sql1));
        if ($count2>0)
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Login Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Login Data", "success" : "No", "message" : "1" } }';
        }



        echo $json;

        break;
    }
    case 'patientnameverify':
    {

        $username = $_POST['username'];
        $sql1="SELECT * FROM tbl_signup WHERE binary username='".$username."'";

        $count2 = mysql_num_rows(mysql_query($sql1));
        if ($count2>0)
        {
            $sql1="SELECT Name FROM patient_details WHERE binary username='".$username."'";
            $query1=mysql_query($sql1);
            $count2 = mysql_num_rows($query1);
            if ($count2>0)
            {
                $row		= mysql_fetch_object($query1);
            $json	= '{ "serviceresponse" : { "servicename" : "Login Data", "username" : "1","patientname" :"'.$row->Name.'", "message" : "1" } }';
            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "Login Data", "username" : "1","patientname" :"", "message" : "1" } }';
            }
        }
        else
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Login Data", "username" : "0", "message" : "1" } }';
        }



        echo $json;

        break;
    }
    case 'doctorusernameselect':
    {

//        $patientusername = "priya";
//        $table="assignment_details";
        $patientusername = $_POST['username'];
        $table = $_POST['table'];
        $flag=0;
        $sql1 ="SELECT * FROM ".$table."  WHERE patient_id='".$patientusername."'";


//echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "user Data", "success" : "Yes", "user List" : [ ';
                if(mysql_num_rows($query1)>0)
                {


                    $row		= mysql_fetch_object($query1);

//echo $row->username;
                    $json 		.= '{ "serviceresponse" : { "servicename" : "user Data", "success" : "Yes", "table" : "'.$table.'", "available" : "1", "message" : "1" } }';

                }
                else
                {
                    $json 		.= '{ "serviceresponse" : { "servicename" : "user Data", "success" : "Yes", "table" : "'.$table.'", "available" : "0", "message" : "1" } }';
                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "user Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }

    case 'patientageselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT Name,DateOfBirth FROM patient_details WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "age Data", "success" : "Yes", "age List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "age Data", "success" : "Yes", "DateOfBirth":"'.$row->DateOfBirth.'","Name":"'.$row->Name.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "age Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }

}
?>