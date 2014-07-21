<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'soapnotesdiagnosisselect':
    {

       $username = $_POST['username'];
       // $username = "silviya";
        $flag=0;
        $sql1 ="SELECT * FROM soapnotes_diagnosis WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "Yes", "soapnotesdiagnosisuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "Yes", "diagnosis":"'.$row->diagnosis.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'soapnotesdiagnosisedit':
    {


          $username = $_POST['username'];
        $nubofcontent=$_POST['no'];
       // $nubofcontent=2;

        $sql4 ="delete from soapnotes_diagnosis where username='".$username."'";
        mysql_query($sql4);


        for($i=1;$i<=$nubofcontent;$i++)
        {
            $name="diagnosis".$i."";
            $diagnosis=addslashes($_POST["$name"]);
            $sql3="insert into soapnotes_diagnosis(diagnosis_id,username,diagnosis) values ('','".$username."','".$diagnosis."')";
            if(mysql_query($sql3))
            {
                $success=1;
            }
            else
            {
                $success=0;
            }
        }


     /*
        $username="thendral";

        $diagnosis="diagnossafsdfsdfis";
        */

       // $sql3="insert into soapnotes_diagnosis(diagnosis_id,username,diagnosis) values ('','".$username."','".$diagnosis."')";

        // echo $sql2;


        if($success==1)
        {

            $json	= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'soapnotesdiagnosisinsert':
    {

        $username = $_POST['username'];
        $nubofcontent=$_POST['no'];
        $sql4 ="delete from soapnotes_diagnosis where username='".$username."'";
        mysql_query($sql4);
        for($i=1;$i<=$nubofcontent;$i++)
        {
            $name="diagnosis".$i."";
            $diagnosis=addslashes($_POST["$name"]);
            $sql3="insert into soapnotes_diagnosis(diagnosis_id,username,diagnosis) values ('','".$username."','".$diagnosis."')";
            if(mysql_query($sql3))
            {
                $success=1;
            }
            else
            {
                $success=0;
            }
        }


        if($success==1)
        {

            $json	= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'soapnotesdiagnosisdelete':
    {
        $username= $_POST['username'];
        // $username= "thendral";
        $sql4 ="delete from soapnotes_diagnosis where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "soapnotesdiagnosis Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>