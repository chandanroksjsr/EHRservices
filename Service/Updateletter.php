<?php
/**
 * Created by PhpStorm.
 * User: admin
 * reg: 13/05/14
 * Time: 5:28 PM
 */


session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'updateletterselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM updateletter WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "Yes", "updateletteruser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "Yes", "updateid" : "'.$row->updateid.'", "username" : "'.$row->username.'", "toattorney1" : "'.$row->toattorney1.'", "toattorney2" : "'.$row->toattorney2.'", "toattorney3" : "'.$row->toattorney3.'", "reg" : "'.$row->reg.'", "injury" : "'.$row->injury.'", "todaydate" : "'.$row->todaydate.'",  "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'updateletteredit':
    {
        $user_name=$_POST['username'];
        $toattorney1=$_POST['toattorney1'];
        $toattorney2=$_POST['toattorney2'];
        $toattorney3=$_POST['toattorney3'];

        $reg=$_POST['reg'];
        $injury=$_POST['injury'];
        $todaydate=$_POST['todaydate'];



//        $user_name="silvi";
//        $toattorney1="silvi";
//        $toattorney2="Jakkappan nagar";
//        $toattorney3="silvi";
//
//        $reg="06/12/2014";
//        $injury="silviya";
//        $todaydate="14/12/2014";

//

        $sql2="update updateletter set toattorney1='".$toattorney1."',toattorney2='".$toattorney2."',toattorney3='".$toattorney3."',reg='".$reg."',injury='".$injury."',todaydate='".$todaydate."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'updateletterinsert':
    {
        $user_name=$_POST['username'];
        $toattorney1=$_POST['toattorney1'];
        $toattorney2=$_POST['toattorney2'];
        $toattorney3=$_POST['toattorney3'];

        $reg=$_POST['reg'];
        $injury=$_POST['injury'];
        $todaydate=$_POST['todaydate'];



//        $user_name="silvi";
//        $toattorney1="proofof";
//        $toattorney2="september";
//        $toattorney3="silvi";
//

//        $reg="asdf";
//        $injury="silviya";
//        $todaydate="12/12/2012";

        $sql3="INSERT INTO updateletter(updateid,username,toattorney1,toattorney2,toattorney3,reg,injury,todaydate) VALUES ('','".$user_name."','".$toattorney1."','".$toattorney2."','".$toattorney3."','".$reg."','".$injury."','".$todaydate."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'updateletterdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from updateletter where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "updateletter Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}


?>