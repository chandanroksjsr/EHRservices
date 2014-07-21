<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'xrayselect':
    {

        $username = $_POST['username'];
      //  $username = "sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM xray WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "Yes", "xrayuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "Yes", "name":"'.$row->name.'","date":"'.$row->date.'","date1":"'.$row->date1.'","sign":"'.$row->sign.'","date2":"'.$row->date2.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'xrayedit':
    {

       $username=$_POST['username'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        $date1=$_POST['date1'];
        $sign=$_POST['sign'];
        $date2=$_POST['date2'];


      /*  $username="sedhu";
        $name="thensdfdral";
        $date="iosdfai";
        $date1="sfsdfaf";
        $sign="dsfdssdfsdfacsd";
        $date2="sdfesfdres";*/
        $sql2="update xray set  name='".$name."',date='".$date."',date1='".$date1."',sign='".$sign."',date2='".$date2."' WHERE  username ='".$username."'";

        //echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'xrayinsert':
    {


        $username=$_POST['username'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        $date1=$_POST['date1'];
        $sign=$_POST['sign'];
        $date2=$_POST['date2'];


       /* $username="sedhu";
        $name="thendral";
        $date="ioi";
        $date1="saf";
        $sign="dsfdsacsd";
        $date2="sdferes";*/


        $sql3="insert into xray(xrayid,username,name,date,date1,sign,date2) values ('','".$username."','".$name."','".$date."','".$date1."','".$sign."','".$date2."')";

       // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'xraydelete':
    {
          $username= $_POST['username'];
     //   $username= "sedhu";
        $sql4 ="delete from xray where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "xray Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>