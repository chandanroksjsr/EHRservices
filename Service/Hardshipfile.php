<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'hardshipselect':
    {


$user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_hardshipagreement WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "Yes", "Hardshipuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "Yes", "agreement_no" : "'.$row->agreement_no.'", "username" : "'.$row->username.'", "date" : "'.$row->date.'", "print_pat_name" : "'.$row->print_pat_name.'", "pat_sign" : "'.$row->pat_sign.'", "witness_sign" : "'.$row->witness_sign.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hardshipedit':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $pname=$_POST['print_pat_name'];
        $psign=$_POST['pat_sign'];
        $wsign=$_POST['witness_sign'];
//        $user_name="silvi";
//        $date="12/12/2014";
//        $pname="silviya";
//        $psign="rani";
//        $wsign="angel";

$sql2="update tbl_hardshipagreement set date='".$date."',print_pat_name='".$pname."',pat_sign='".$psign."',witness_sign='".$wsign."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'hardshipinsert':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $pname=$_POST['print_pat_name'];
        $psign=$_POST['pat_sign'];
        $wsign=$_POST['witness_sign'];
//       $user_name="thendral";
//       $date="12/12/2014";
//       $pname="arul";
//        $psign="silviya";
//       $wsign="angel";
        $sql3="insert into tbl_hardshipagreement(agreement_no,username,date,print_pat_name,pat_sign,witness_sign) values ('','".$user_name."','".$date."','".$pname."','".$psign."','".$wsign."')";


        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hardshipdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from tbl_hardshipagreement where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Hardship Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>