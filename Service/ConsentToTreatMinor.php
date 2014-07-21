<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'consentminorselect':
    {


        $user_name = $_POST['username'];
      //$user_name="sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM minor_details WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "Yes", "consentminoruser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "Yes", "minor_no" : "'.$row->minor_no.'", "username" : "'.$row->username.'", "guardian" : "'.$row->guardian.'", "age" : "'.$row->age.'", "Drname" : "'.$row->Drname.'", "signed" : "'.$row->signed.'", "pdate" : "'.$row->pdate.'", "pwitness" : "'.$row->pwitness.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "No", "message" : "'.$error.'" } }';
        }

       echo $json;

        break;
    }
    case 'consentminoredit':
    {
        $user_name=$_POST['username'];
        $guardian=$_POST['guardian'];
        $age=$_POST['age'];
        $Drname=$_POST['Drname'];
        $signed=$_POST['signed'];
        $pdate=$_POST['pdate'];
        $pwitness=$_POST['pwitness'];


      /*  $user_name="thendral";
        $guardian="thendral";
        $age="20";
        $Drname="amul";
        $signed="sda";
        $pdate="12/1/1212";
        $pwitness="123";*/

        $sql2="update minor_details set guardian='".$guardian."',age='".$age."',Drname='".$Drname."',signed='".$signed."',pdate='".$pdate."',pwitness='".$pwitness."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'consentminorinsert':
    {
         $user_name=$_POST['username'];
        $guardian=$_POST['guardian'];
        $age=$_POST['age'];
        $Drname=$_POST['Drname'];
        $signed=$_POST['signed'];
        $pdate=$_POST['pdate'];
        $pwitness=$_POST['pwitness'];


      /*  $user_name="sedhu";
        $guardian="thendral";
        $age="20";
        $Drname="amul";
        $signed="sda";
        $pdate="12/1/1212";
        $pwitness="123";

*/

        $sql3="insert into minor_details(minor_no,username,guardian,age,Drname,signed,pdate,pwitness) values ('','".$user_name."','".$guardian."','".$age."','".$Drname."','".$signed."','".$pdate."','".$pwitness."')";

        //echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "No", "message" : "'.$error.'" } }';
        }

       echo $json;

        break;
    }
    case 'consentminordelete':
    {
       $user_name=$_POST['username'];
       //$user_name="z";
        $sql4 ="delete from minor_details where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "consentminor Data", "success" : "No", "message" : "'.$error.'" } }';
        }

      echo $json;

        break;
    }
}
?>