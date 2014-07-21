<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'authorizationconsentselect':
    {


         $user_name = $_POST['username'];
       // $user_name="sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM treat_details WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "Yes", "authorizationconsentuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "Yes", "treat_no" : "'.$row->treat_no.'", "username" : "'.$row->username.'", "patientsname" : "'.$row->patientsname.'", "patientssign" : "'.$row->patientssign.'", "todaydate" : "'.$row->todaydate.'", "witness" : "'.$row->witness.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'authorizationconsentedit':
    {
         $username=$_POST['username'];
        $patientsname=$_POST['patientsname'];
        $patientssign=$_POST['patientssign'];
        $todaydate=$_POST['todaydate'];
        $witness=$_POST['witness'];


      /*  $username="asha";
        $patientsname="thendral";
        $patientssign="20";
        $todaydate="12/1/1212";
        $witness="123";
*/

        $sql2="update treat_details set patientsname='".$patientsname."',patientssign='".$patientssign."',todaydate='".$todaydate."',witness='".$witness."' WHERE username='".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'authorizationconsentinsert':
    {
     $username=$_POST['username'];
        $patientsname=$_POST['patientsname'];
        $patientssign=$_POST['patientssign'];
        $todaydate=$_POST['todaydate'];
        $witness=$_POST['witness'];


       /* $username="sedhu";
        $patientsname="thendral";
        $patientssign="20";
        $todaydate="12/1/1212";
        $witness="123";*/



        $sql3="insert into treat_details(treat_no,username,patientsname,patientssign,todaydate,witness) values ('','".$username."','".$patientsname."','".$patientssign."','".$todaydate."','".$witness."')";

       // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'authorizationconsentdelete':
    {
         $username=$_POST['username'];
       // $username="priya";
        $sql4 ="delete from treat_details where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "authorizationconsent Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>