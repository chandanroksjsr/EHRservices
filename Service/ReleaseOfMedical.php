<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'releaseofmedselect':
    {

        $user_name = $_POST['username'];
//     $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM medical_details WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "Yes", "Releaseofmeduser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "Yes", "medical_no" : "'.$row->medical_no.'", "username" : "'.$row->username.'", "name" : "'.$row->name.'", "medicalinformation" : "'.$row->medicalinformation.'", "patientsignature" : "'.$row->patientsignature.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'releaseofmededit':
    {
        $user_name=$_POST['username'];
        $name=$_POST['name'];
        $medinfo=$_POST['medicalinformation'];
        $psign=$_POST['patientsignature'];

//        $user_name="silvi";
//        $name="silviya";
//        $medinfo="rani";
//        $psign="angel";

        $sql2="update medical_details set name='".$name."',medicalinformation='".$medinfo."',patientsignature='".$psign."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'releaseofmedinsert':
    {
        $user_name=$_POST['username'];
        $name=$_POST['name'];
        $medinfo=$_POST['medicalinformation'];
        $psign=$_POST['patientsignature'];

//       $user_name="silvi";
//        $name="silvi";
//        $medinfo="rani";
//        $psign="angel";

        $sql3="insert into medical_details(medical_no,username,name,medicalinformation,patientsignature) values ('','".$user_name."','".$name."','".$medinfo."','".$psign."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'releaseofmeddelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from medical_details where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Releaseofmed Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>