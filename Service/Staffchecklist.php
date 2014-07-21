<?php
/**
 * Created by PhpStorm.
 * User: admin
 * insure: 16/05/14
 * Time: 7:12 PM
 */


session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'staffselect':
    {

        $patientusername = $_POST['patientusername'];
//      $patientusername="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_staffchecklist WHERE patientusername='$patientusername'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "staffuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "form_no" : "'.$row->form_no.'","patientusername" : "'.$row->patientusername.'", "pat_name" : "'.$row->pat_name.'", "insure" : "'.$row->insure.'", "damage_amount" : "'.$row->damage_amount.'", "fault_insure" : "'.$row->fault_insure.'", "med_pay" : "'.$row->med_pay.'","other_attorney" : "'.$row->other_attorney.'","protect_received" : "'.$row->protect_received.'","bill" : "'.$row->bill.'","re_date" : "'.$row->re_date.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'staffedit':
    {
        $patientusername = $_POST['patientusername'];
        $pat_name=$_POST['pat_name'];
        $insure=$_POST['insure'];
        $damage_amount=$_POST['damage_amount'];
        $fault_insure=$_POST['fault_insure'];
        $med_pay=$_POST['med_pay'];
        $other_attorney=$_POST['other_attorney'];
        $protect_received=$_POST['protect_received'];
        $bill=$_POST['bill'];
        $re_date=$_POST['re_date'];
    


//        $patientusername = "silvi";
//        $pat_name="silvi";
//        $insure="1/1/2014";
//        $damage_amount="sss1";
//        $fault_insure="ss2";
//        $med_pay="sss3";
//        $other_attorney="ss4";
//        $protect_received="ss5";
//        $bill="ss1";
//        $re_date="ss2";



        $sql2="update tbl_staffchecklist set  pat_name='".$pat_name."',insure='".$insure."',damage_amount='".$damage_amount."',fault_insure='".$fault_insure."',med_pay='".$med_pay."',other_attorney='".$other_attorney."',protect_received='".$protect_received."',bill='".$bill."',re_date='".$re_date."' WHERE  patientusername = '".$patientusername."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'staffinsert':
    {
        $patientusername = $_POST['patientusername'];
        $pat_name=$_POST['pat_name'];
        $insure=$_POST['insure'];
        $damage_amount=$_POST['damage_amount'];
        $fault_insure=$_POST['fault_insure'];
        $med_pay=$_POST['med_pay'];
        $other_attorney=$_POST['other_attorney'];
        $protect_received=$_POST['protect_received'];
        $bill=$_POST['bill'];
        $re_date=$_POST['re_date'];


//        $patientusername="silvi";
//        $pat_name="silvi";
//        $insure="12/12/2014";
//        $damage_amount="1";
//        $fault_insure="2";
//        $med_pay="3";
//        $other_attorney="4";
//        $protect_received="5";
//        $bill="1";
//        $re_date="2";


        $sql3="INSERT INTO tbl_staffchecklist(form_no,patientusername,pat_name,insure,damage_amount,fault_insure,med_pay,other_attorney,protect_received,bill,re_date)VALUES ('','".$patientusername."','".$pat_name."','".$insure."','".$damage_amount."','".$fault_insure."','".$med_pay."','".$other_attorney."','".$protect_received."','".$bill."','".$re_date."')";
//echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'staffdelete':
    {
        $patientusername = $_POST['patientusername'];

//    $patientusername = "silvi";
        $sql4 ="delete from tbl_staffchecklist where patientusername='".$patientusername."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
    case 'staffuserselect':
    {

//        $patientusername = "priya";
//        $table="assignment_details";
        $patientusername = $_POST['patientusername'];
        $table = $_POST['table'];
        $flag=0;
         $sql1 ="SELECT * FROM ".$table."  WHERE username='".$patientusername."'";


//echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "staffuser List" : [ ';
                if(mysql_num_rows($query1)>0)
                {


                    $row		= mysql_fetch_object($query1);

//echo $row->username;
                    $json 		.= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "username" : "'.$row->username.'", "available" : "1", "message" : "1" } }';

                }
                else
                {
                    $json 		.= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "Yes", "username" : "'.$row->username.'", "available" : "0", "message" : "1" } }';
                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "staff Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>