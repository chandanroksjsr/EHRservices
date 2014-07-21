<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/05/14
 * Time: 4:48 PM
 */


session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'faxcoverselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_faxdetails WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "Yes", "faxcoveruser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "Yes", "faxid" : "'.$row->faxid.'", "username" : "'.$row->username.'", "date" : "'.$row->date.'", "tos" : "'.$row->tos.'", "faxno" : "'.$row->faxno.'", "froms" : "'.$row->froms.'", "reply" : "'.$row->reply.'", "regarding" : "'.$row->regarding.'", "pages" : "'.$row->pages.'", "msg" : "'.$row->msg.'" ,"claimno" : "'.$row->claimno.'" ,"doi" : "'.$row->doi.'" , "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'faxcoveredit':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $tos=$_POST['tos'];
        $faxno=$_POST['faxno'];
        $froms=$_POST['froms'];
        $reply=$_POST['reply'];
        $regarding=$_POST['regarding'];
        $pages=$_POST['pages'];
        $msg=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['msg']);
        $claimno=$_POST['claimno'];
        $doi=$_POST['doi'];

//        $user_name="silvi";
//        $date="silviya";
//        $tos="september";
//        $faxno="silvi";
//        $froms="12";
//        $reply="06";
//        $regarding="silviya";
//        $pages="silviya";
//        $msg="14/12/2014";
//        $claimno="132";
//        $doi="12/87/2410";


        $sql2="update tbl_faxdetails set date='".$date."',tos='".$tos."',faxno='".$faxno."',froms='".$froms."',reply='".$reply."',regarding='".$regarding."',pages='".$pages."',msg='".$msg."',claimno='".$claimno."',doi='".$doi."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'faxcoverinsert':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $tos=$_POST['tos'];
        $faxno=$_POST['faxno'];
        $froms=$_POST['froms'];
        $reply=$_POST['reply'];
        $regarding=$_POST['regarding'];
        $pages=$_POST['pages'];
        $msg=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['msg']);
        $claimno=$_POST['claimno'];
        $doi=$_POST['doi'];


//        $user_name="silvi";
//        $date="asdfasdf";
//        $tos="adfsdf";
//        $faxno="silvi";
//
//        $froms="asdf";
//        $reply="asdf";
//        $regarding="silviya";
//        $pages="silviya";
//        $msg="12/12/2012";
//                $claimno="132";
//        $doi="12/87/2410";

        $sql3="INSERT INTO tbl_faxdetails(faxid,username,date,tos,faxno,froms,reply,regarding,pages,msg,claimno,doi) VALUES ('','".$user_name."','".$date."','".$tos."','".$faxno."','".$froms."','".$reply."','".$regarding."','".$pages."','".$msg."','".$claimno."','".$doi."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'faxcoverdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from tbl_faxdetails where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "faxcover Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}


?>