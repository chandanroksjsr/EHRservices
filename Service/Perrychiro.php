<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/05/14
 * Time: 4:17 PM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'perryselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM perrychiropractic WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "Yes", "perryuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);

                    $result=str_replace(array("\r\n","\n","\t","\r"),'',$row->address);
                    $json 		.= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "Yes", "perryid" : "'.$row->perryid.'", "username" : "'.$row->username.'", "insurance" : "'.$row->insurance.'", "address" : "'.$result.'", "reg" : "'.$row->reg.'", "nameofperson" : "'.$row->nameofperson.'", "DateofAccident" : "'.$row->DateofAccident.'", "subject" : "'.$row->subject.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'perryedit':
    {
        $user_name=$_POST['username'];
        $insurance=$_POST['insurance'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $reg=$_POST['reg'];
        $nameofperson=$_POST['nameofperson'];
        $DateofAccident=$_POST['DateofAccident'];
        $subject=$_POST['subject'];


//        $user_name="silvi";
//        $insurance="insurance";
//        $address="address";
//        $reg="reg";
//        $nameofperson="silvi";
//        $DateofAccident="06/12/1222";
//        $subject="silviya";


        $sql2="update perrychiropractic set insurance='".$insurance."',address='".$address."',reg='".$reg."',nameofperson='".$nameofperson."',DateofAccident='".$DateofAccident."',subject='".$subject."' WHERE username='".$user_name."'";

//        echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'perryinsert':
    {
        $user_name=$_POST['username'];
        $insurance=$_POST['insurance'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $reg=$_POST['reg'];
        $nameofperson=$_POST['nameofperson'];
        $DateofAccident=$_POST['DateofAccident'];
        $subject=$_POST['subject'];


//        $user_name="silvi";
//        $insurance="proofof";
//        $address="september";
//        $reg="silvi";
//        $nameofperson="asdf";
//        $DateofAccident="asdf";
//        $subject="silviya";

        $sql3="INSERT INTO perrychiropractic(perryid,username,insurance,address,reg,nameofperson,DateofAccident,subject) VALUES ('','".$user_name."','".$insurance."','".$address."','".$reg."','".$nameofperson."','".$DateofAccident."','".$subject."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'perrydelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from perrychiropractic where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "perry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>