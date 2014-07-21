<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'hippaselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM hippa_privacy WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "Yes", "Hippauser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "Yes", "hippa_no" : "'.$row->hippa_no.'", "username" : "'.$row->username.'", "date" : "'.$row->date.'", "printpname" : "'.$row->printpname.'", "printpdate" : "'.$row->printpdate.'", "legalguardian" : "'.$row->legalguardian.'","staffwitness" : "'.$row->staffwitness.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hippaedit':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $pname=$_POST['printpname'];
        $pdate=$_POST['printpdate'];
        $lguard=$_POST['legalguardian'];
        $switness=$_POST['staffwitness'];

//        $user_name="silvi";
//        $date="11/11/2014";
//        $pname="silvi";
//        $pdate="11/11/2014";
//        $lguard="silviya";
//        $switness="silviya";


        $sql2="update hippa_privacy set date='".$date."',printpname='".$pname."',printpdate='".$pdate."',legalguardian='".$lguard."',staffwitness='".$switness."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'hippainsert':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $pname=$_POST['printpname'];
        $pdate=$_POST['printpdate'];
        $lguard=$_POST['legalguardian'];
        $switness=$_POST['staffwitness'];

//        $user_name="silvi";
//        $date="12/12/2014";
//        $pname="silvi";
//        $pdate="12/12/2014";
//        $lguard="silvi";
//        $switness="silvi";

        $sql3="insert into hippa_privacy(hippa_no,username,date,printpname,printpdate,legalguardian,staffwitness) values ('','".$user_name."','".$date."','".$pname."','".$pdate."','".$lguard."','".$switness."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hippadelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from hippa_privacy where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Hippa Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>