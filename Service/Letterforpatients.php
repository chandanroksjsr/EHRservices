<?php
/**
 * Created by PhpStorm.
 * User: admin
 * re: 14/05/14
 * Time: 5:29 PM
 */


session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'lettertopatientsselect':
    {

        $user_name = $_POST['username'];
   ///  $user_name="silviya";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_lettertopatient WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "Yes", "lettertopatientsuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "Yes", "letterid" : "'.$row->letterid.'", "username" : "'.$row->username.'", "re" : "'.$row->re.'", "ssn" : "'.$row->ssn.'", "claim" : "'.$row->claim.'", "doi" : "'.$row->doi.'", "adjuster" : "'.$row->adjuster.'", "date1" : "'.$row->date1.'", "date2" : "'.$row->date2.'", "letter" : "'.$row->letter.'" ,"date" : "'.$row->date.'","dear" : "'.$row->dear.'"   , "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'lettertopatientsedit':
    {
        $user_name=$_POST['username'];
        $re=$_POST['re'];
        $ssn=$_POST['ssn'];
        $claim=$_POST['claim'];
        $doi=$_POST['doi'];
        $adjuster=$_POST['adjuster'];
        $date=$_POST['date'];
        $dear=$_POST['dear'];
        $date1=$_POST['date1'];
        $date2=$_POST['date2'];
        $letter=$_POST['letter'];
        $doi=$_POST['doi'];

//        $user_name="silvi";
//        $re="silviya";
//        $ssn="september";
//        $claim="silvi";
//        $doi="12";
//        $adjuster="06";
//        $date3="date";
//        $dear="dear";
//        $date1="silviya";
//        $date2="silviya";
//        $letter="14/12/2014";

//        $doi="12/87/2410";


        $sql2="update tbl_lettertopatient set re='".$re."',ssn='".$ssn."',claim='".$claim."',doi='".$doi."',adjuster='".$adjuster."',date='".$date."',dear='".$dear."',date1='".$date1."',date2='".$date2."',letter='".$letter."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'lettertopatientsinsert':
    {
        $user_name=$_POST['username'];
        $re=$_POST['re'];
        $ssn=$_POST['ssn'];
        $claim=$_POST['claim'];
        $doi=$_POST['doi'];
        $adjuster=$_POST['adjuster'];
        $date=$_POST['date'];
        $dear=$_POST['dear'];
        $date1=$_POST['date1'];
        $date2=$_POST['date2'];
        $letter=$_POST['letter'];




//        $user_name="silvi";
//        $re="asdfasdf";
//        $ssn="adfsdf";
//        $claim="silvi";
//$date="date";
//        $dear="dear";
//        $doi="asdf";
//        $adjuster="asdf";
//        $date1="silviya";
//        $date2="silviya";
//        $letter="12/12/2012";



        $sql3="INSERT INTO tbl_lettertopatient(username,re,ssn,claim,doi,adjuster,date,dear,date1,date2,letter) VALUES ('".$user_name."','".$re."','".$ssn."','".$claim."','".$doi."','".$adjuster."','".$date."','".$dear."','".$date1."','".$date2."','".$letter."')";

       // echo $sql3;

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'lettertopatientsdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from tbl_lettertopatient where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "lettertopatients Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}



?>