<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'medpayselect':
    {

        $username = $_POST['username'];
      //  $username = "sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM pimedpay WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "Yes", "medpayuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "Yes", "insurance":"'.$row->insurance.'","address":"'.$row->address.'","reg":"'.$row->reg.'","nameofperson":"'.$row->nameofperson.'","dateofaccident":"'.$row->dateofaccident.'","subject":"'.$row->subject.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'medpayedit':
    {

         $username = $_POST['username'];
        $insurance=addslashes($_POST['insurance']);
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $reg=$_POST['reg'];
        $nameofperson=$_POST['nameofperson'];
        $dateofaccident=$_POST['dateofaccident'];
        $subject=$_POST['subject'];


   /*     $username="thendral";

        $insurance="insurasnce";
        $address="addresss";$reg="resg";
        $nameofperson="nameofsperson";
        $dateofaccident="datesofaccident";
        $subject="subjecst";*/
        $sql2="update pimedpay set insurance='".$insurance."',address='".$address."',reg='".$reg."',nameofperson='".$nameofperson."',dateofaccident='".$dateofaccident."',subject='".$subject."' WHERE  username ='".$username."'";

      //  echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'medpayinsert':
    {
       $username = $_POST['username'];
        $insurance=addslashes($_POST['insurance']);
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $reg=$_POST['reg'];
        $nameofperson=$_POST['nameofperson'];
        $dateofaccident=$_POST['dateofaccident'];
        $subject=$_POST['subject'];


/*$username="thendral";

        $insurance="insurance";
        $address="address";$reg="reg";
        $nameofperson="nameofperson";
        $dateofaccident="dateofaccident";
        $subject="subject";*/
        $sql3="insert into pimedpay(medpayid,username,insurance,address,reg,nameofperson,dateofaccident,subject) values ('','".$username."','".$insurance."','".$address."','".$reg."','".$nameofperson."','".$dateofaccident."','".$subject."')";

       // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'medpaydelete':
    {
          $username= $_POST['username'];
       // $username= "thendral";
        $sql4 ="delete from pimedpay where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "medpay Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>