<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/05/14
 * Time: 8:41 PM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'responseselect':
    {
        $username=$_POST['username'];
//        $username='silvi';
        $flag=0;
        $sql1 ="SELECT * FROM tbl_responseattorney WHERE username='$username'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "response Data", "success" : "Yes", "responseuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "Yes", "responseid" : "'.$row->responseid.'","name" : "'.$row->name.'", "address" : "'.$row->address.'", "regarding" : "'.$row->regarding.'", "patientname" : "'.$row->patientname.'","dateofaccident" : "'.$row->dateofaccident.'","dearname" : "'.$row->dearname.'","nameofclinic" : "'.$row->nameofclinic.'","treatingphysician" : "'.$row->treatingphysician.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'responseedit':
    {
        $username=$_POST['username'];
        $name = $_POST['name'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $regarding=$_POST['regarding'];
        $patientname=$_POST['patientname'];
        $dateofaccident=$_POST['dateofaccident'];
        $dearname=$_POST['dearname'];
        $nameofclinic=$_POST['nameofclinic'];
        $treatingphysician=$_POST['treatingphysician'];


//        $username='silvi';
//        $name = "1dsasdfdf4";
//        $address="siaaasdfsdfsdflvi";
//        $address1="1/1/sdf2014";
//        $address2="sd1asdf";
//        $regarding="dsf2";
//        $patientname="3dsf";
//        $dateofaccident="4sdf";
//        $nameofclinic="sdf5";
//        $treatingphysician="1sdf";




        $sql2="update tbl_responseattorney set  name='".$name."',address='".$address."',regarding='".$regarding."',patientname='".$patientname."',dateofaccident='".$dateofaccident."',dearname='".$dearname."',nameofclinic='".$nameofclinic."',treatingphysician='".$treatingphysician."' WHERE  username = '".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'responseinsert':
    {
        $username=$_POST['username'];
        $name = $_POST['name'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $regarding=$_POST['regarding'];
        $patientname=$_POST['patientname'];
        $dateofaccident=$_POST['dateofaccident'];
        $dearname=$_POST['dearname'];
        $nameofclinic=$_POST['nameofclinic'];
        $treatingphysician=$_POST['treatingphysician'];




//        $username='silvi';
//        $name ='asdfasdf';
//
//        $address="silvi";
//        $address1="12/12/2014";
//        $address2="1";
//        $regarding="2";
//        $patientname="3";
//        $dateofaccident="4";
//        $nameofclinic="5";
//        $treatingphysician="1";




        $sql3="INSERT INTO tbl_responseattorney(username,name,address,regarding,patientname,dateofaccident,dearname,nameofclinic,treatingphysician)VALUES ('".$username."','".$name."','".$address."','".$regarding."','".$patientname."','".$dateofaccident."','".$dearname."','".$nameofclinic."','".$treatingphysician."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'responsedelete':
    {
        $username=$_POST['username'];
//        $username = 'silvi';


        $sql4 ="delete from tbl_responseattorney where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "response Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>