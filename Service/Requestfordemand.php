<?php
/**
 * Created by PhpStorm.
 * User: admin
 * paidbenefits: 14/05/14
 * Time: 7:58 PM
 */
session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'requestselect':
    {
        $username=$_POST['username'];
//        $username='silvi';
        $flag=0;
        $sql1 ="SELECT * FROM requestfordemand WHERE username='$username'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "request Data", "success" : "Yes", "requestuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "Yes", "requestid" : "'.$row->requestid.'","tonum" : "'.$row->tonum.'","fax" : "'.$row->fax.'","faultinsurer" : "'.$row->faultinsurer.'", "medpayinsurer" : "'.$row->medpayinsurer.'", "paidbenefits" : "'.$row->paidbenefits.'", "bankrupt" : "'.$row->bankrupt.'", "treatment" : "'.$row->treatment.'", "other" : "'.$row->other.'","txtare" : "'.$row->txtare.'","pleasesend" : "'.$row->pleasesend.'","copymedpay" : "'.$row->copymedpay.'","copyform" : "'.$row->copyform.'","copyassign" : "'.$row->copyassign.'","greencard" : "'.$row->greencard.'","defaultattorney" : "'.$row->defaultattorney.'","clinicrep" : "'.$row->clinicrep.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'requestedit':
    {
        $username=$_POST['username'];
        $tonum=$_POST['tonum'];
        $fax=$_POST['fax'];
        $faultinsurer = $_POST['faultinsurer'];
        $medpayinsurer=$_POST['medpayinsurer'];
        $paidbenefits=$_POST['paidbenefits'];
        $bankrupt=$_POST['bankrupt'];
        $treatment=$_POST['treatment'];
        $other=$_POST['other'];
        $txtare=$_POST['txtare'];
        $pleasesend=$_POST['pleasesend'];
        $copymedpay=$_POST['copymedpay'];
        $copyform=$_POST['copyform'];
        $copyassign=$_POST['copyassign'];
        $greencard=$_POST['greencard'];
        $defaultattorney=$_POST['defaultattorney'];
        $clinicrep=$_POST['clinicrep'];


//        $username='silvi';
//        $faultinsurer = "1dsdf4";
//        $medpayinsurer="siasdflvi";
//        $paidbenefits="1/1/sdf2014";
//        $bankrupt="sd1";
//        $treatment="dsf2";
//        $other="3dsf";
//        $txtare="4sdf";
//        $copymedpay="sdf5";
//        $copyform="1sdf";
//        $copyassign="2";
//        $greencard="3";
//        $defaultattorney="4";
//        $clinicrep="5";



        $sql2="update requestfordemand set  tonum='".$tonum."',fax='".$fax."',faultinsurer='".$faultinsurer."',medpayinsurer='".$medpayinsurer."',paidbenefits='".$paidbenefits."',bankrupt='".$bankrupt."',treatment='".$treatment."',other='".$other."',txtare='".$txtare."',pleasesend='".$pleasesend."',copymedpay='".$copymedpay."',copyform='".$copyform."',copyassign='".$copyassign."',greencard='".$greencard."',defaultattorney='".$defaultattorney."',clinicrep='".$clinicrep."' WHERE  username = '".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'requestinsert':
    {
        $username=$_POST['username'];
        $to=$_POST['tonum'];
        $fax=$_POST['fax'];
        $pleasesend=$_POST['pleasesend'];
        $faultinsurer = $_POST['faultinsurer'];
        $medpayinsurer=$_POST['medpayinsurer'];
        $paidbenefits=$_POST['paidbenefits'];
        $bankrupt=$_POST['bankrupt'];
        $treatment=$_POST['treatment'];
        $other=$_POST['other'];
        $txtare=$_POST['txtare'];
        $pleasesend=$_POST['pleasesend'];
        $copymedpay=$_POST['copymedpay'];
        $copyform=$_POST['copyform'];
        $copyassign=$_POST['copyassign'];
        $greencard=$_POST['greencard'];
        $defaultattorney=$_POST['defaultattorney'];
        $clinicrep=$_POST['clinicrep'];


//        $username='silvi';
//        $faultinsurer ='asdfasdf';
// $to='asdf';
//        $fax='asdf';
//        $pleasesend='sdf';
//        $medpayinsurer="silvi";
//        $paidbenefits="12/12/2014";
//        $bankrupt="1";
//        $treatment="2";
//        $other="3";
//        $txtare="4";
//        $copymedpay="5";
//        $copyform="1";
//        $copyassign="2";
//        $greencard="3";
//        $defaultattorney="4";
//        $clinicrep="5";



        $sql3="INSERT INTO requestfordemand(username,tonum,fax,faultinsurer,medpayinsurer,paidbenefits,bankrupt,treatment,other,txtare,pleasesend,copymedpay,copyform,copyassign,greencard,defaultattorney,clinicrep)VALUES ('".$username."','".$to."','".$fax."','".$faultinsurer."','".$medpayinsurer."','".$paidbenefits."','".$bankrupt."','".$treatment."','".$other."','".$txtare."','".$pleasesend."','".$copymedpay."','".$copyform."','".$copyassign."','".$greencard."','".$defaultattorney."','".$clinicrep."')";

//        echo $sql3;

      if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'requestdelete':
    {
        $username=$_POST['username'];
//        $username = 'silvi';


        $sql4 ="delete from requestfordemand where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "request Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>