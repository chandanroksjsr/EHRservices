<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/05/14
 * Time: 6:24 PM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'feereductionselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_copyofrequest WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "Yes", "feereductionuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "Yes", "copyofrequestno" : "'.$row->copyofrequestno.'", "username" : "'.$row->username.'", "patient" : "'.$row->patient.'", "address" : "'.$row->address.'", "regarding" : "'.$row->regarding.'", "dateofaccident" : "'.$row->dateofaccident.'", "claimnumber" : "'.$row->claimnumber.'", "todaydate" : "'.$row->todaydate.'", "dear" : "'.$row->dear.'", "sign" : "'.$row->sign.'" , "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'feereductionedit':
    {
        $user_name=$_POST['username'];
        $patient=$_POST['patient'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $regarding=$_POST['regarding'];
        $dateofaccident=$_POST['dateofaccident'];
        $claimnumber=$_POST['claimnumber'];
        $todaydate=$_POST['todaydate'];
        $dear=$_POST['dear'];
        $sign=$_POST['sign'];

//        $user_name="silvi";
//        $patient="silviya";
//        $address="september";
//        $regarding="silvi";
//
//        $dateofaccident="12";
//        $claimnumber="06";
//        $todaydate="silviya";
//        $dear="silviya";
//        $sign="14/12/2014";


        $sql2="update tbl_copyofrequest set patient='".$patient."',address='".$address."',regarding='".$regarding."',dateofaccident='".$dateofaccident."',claimnumber='".$claimnumber."',todaydate='".$todaydate."',dear='".$dear."',sign='".$sign."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'feereductioninsert':
    {
        $user_name=$_POST['username'];
        $patient=$_POST['patient'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $regarding=$_POST['regarding'];

        $dateofaccident=$_POST['dateofaccident'];
        $claimnumber=$_POST['claimnumber'];
        $todaydate=$_POST['todaydate'];
        $dear=$_POST['dear'];
        $sign=$_POST['sign'];

//
//        $user_name="silvi";
//        $patient="proofof";
//        $address="september";
//        $regarding="silvi";
//
//        $dateofaccident="asdf";
//        $claimnumber="asdf";
//        $todaydate="silviya";
//        $dear="silviya";
//        $sign="12/12/2012";

        $sql3="INSERT INTO tbl_copyofrequest(copyofrequestno,username,patient,address,regarding,dateofaccident,claimnumber,todaydate,dear,sign) VALUES ('','".$user_name."','".$patient."','".$address."','".$regarding."','".$dateofaccident."','".$claimnumber."','".$todaydate."','".$dear."','".$sign."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'feereductiondelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from tbl_copyofrequest where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "feereduction Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>