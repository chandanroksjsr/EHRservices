<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'noticeselect':
    {
        $username=$_POST['username'];
//    $username='silvi';

        $flag=0;
        $sql1 ="SELECT * FROM tbl_noticeassignment WHERE username='$username'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "Yes", "noticeuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "Yes", "noticeid" : "'.$row->noticeid.'", "nameofins" : "'.$row->nameofins.'", "nameofattorney" : "'.$row->nameofattorney.'", "address1" : "'.$row->address1.'", "address2" : "'.$row->address2.'","regarding" : "'.$row->regarding.'","patientname" : "'.$row->patientname.'","dateofaccident" : "'.$row->dateofaccident.'","todaysdate" : "'.$row->todaysdate.'","letter" : "'.$row->letter.'","letter1" : "'.$row->letter1.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'noticeedit':
    {
        $username=$_POST['username'];
        $nameofins=$_POST['nameofins'];
        $nameofattorney=$_POST['nameofattorney'];
        $address1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address1']);
        $address2=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address2']);
        $regarding=$_POST['regarding'];
        $patientname=$_POST['patientname'];
        $dateofaccident=$_POST['dateofaccident'];
        $todaysdate=$_POST['todaysdate'];
        $letter=$_POST['letter'];
        $letter1=$_POST['letter1'];



//        $username='silvi';
//        $name="silvi";
//        $nameofattorney="1/1/2014";
//        $address1="61";
//        $address2="62";
//        $patientname="63";
//        $dateofaccident="46";
//        $todaysdate="6";
//        $letter="61";
//        $letter1="406";


        $sql2="update tbl_noticeassignment set  nameofins='".$nameofins."',nameofattorney='".$nameofattorney."',address1='".$address1."',address1='".$address1."',regarding='".$regarding."',patientname='".$patientname."',dateofaccident='".$dateofaccident."',todaysdate='".$todaysdate."',letter='".$letter."',letter1='".$letter1."' WHERE  username = '".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'noticeinsert':
    {
        $username=$_POST['username'];
        $nameofins=$_POST['nameofins'];
        $nameofattorney=$_POST['nameofattorney'];
        $address1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address1']);
        $address2=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address2']);
        $regarding=$_POST['regarding'];
        $patientname=$_POST['patientname'];
        $dateofaccident=$_POST['dateofaccident'];
        $todaysdate=$_POST['todaysdate'];
        $letter=$_POST['letter'];
        $letter1=$_POST['letter1'];


//        $username='silvi';
//        $nameofins="silvi";
//        $nameofattorney="12/12/2014";
//        $address1="1";
//        $address2="2";
//        $regarding="2";
//        $patientname="3";
//        $dateofaccident="4";
//        $todaysdate="5";
//        $letter="1";
//        $letter1="40";



        $sql3="INSERT INTO tbl_noticeassignment(noticeid,username,nameofins,nameofattorney,address1,address2,regarding,patientname,dateofaccident,todaysdate,letter,letter1)VALUES ('','".$username."','".$nameofins."','".$nameofattorney."','".$address1."','".$address2."','".$regarding."','".$patientname."','".$dateofaccident."','".$todaysdate."','".$letter."','".$letter1."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'noticedelete':
    {
        $username=$_POST['username'];
//        $username='silvi';
        $sql4 ="delete from tbl_noticeassignment where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "notice Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>