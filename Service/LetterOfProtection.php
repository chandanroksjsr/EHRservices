<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'letterofprotectionselect':
    {

        $username = $_POST['username'];
      //  $username = "sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM letterofprotection WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "Yes", "letterofprotectionuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "Yes", "date":"'.$row->date.'","dc":"'.$row->dc.'","clinicname":"'.$row->clinicname.'","address1":"'.$row->address1.'","myclient":"'.$row->myclient.'","dateofaccident":"'.$row->dateofaccident.'","dearsir":"'.$row->dearsir.'","esq":"'.$row->esq.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'letterofprotectionedit':
    {

        $username = $_POST['username'];

        $date=addslashes($_POST['date']);
        $dc=addslashes($_POST['dc']);
        $clinicname=addslashes($_POST['clinicname']);
        $address1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address1']);

        $myclient=addslashes($_POST['myclient']);
        $dateofaccident=addslashes($_POST['dateofaccident']);
        $dearsir=addslashes($_POST['dearsir']);
        $esq=addslashes($_POST['esq']);

        $sql2="update letterofprotection set  date='".$date."',dc='".$dc."',clinicname='".$clinicname."',address1='".$address1."',myclient='".$myclient."',dateofaccident='".$dateofaccident."',dearsir='".$dearsir."',esq='".$esq."' WHERE  username ='".$username."'";

       // echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'letterofprotectioninsert':
    {
        $username = $_POST['username'];

        $date=addslashes($_POST['date']);
        $dc=addslashes($_POST['dc']);
        $clinicname=addslashes($_POST['clinicname']);
        $address1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address1']);
        $address2=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address2']);
        $myclient=addslashes($_POST['myclient']);
        $dateofaccident=addslashes($_POST['dateofaccident']);
        $dearsir=addslashes($_POST['dearsir']);$esq=addslashes($_POST['esq']);
//$username="thendral";

         //$date="date";$dc="dc";$clinicname="clinicname";$address1="address1";$address2="address2";$myclient="myclient";$dateofaccident="dateofaccident";$dearsir="dearsir";$esq="esq";

        $sql3="insert into letterofprotection(letterid,username,date,dc,clinicname,address1,myclient,dateofaccident,dearsir,esq) values ('','".$username."','".$date."','".$dc."','".$clinicname."','".$address1."','".$myclient."','".$dateofaccident."','".$dearsir."','".$esq."')";

        //echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'letterofprotectiondelete':
    {
        $username= $_POST['username'];
        //$username= "thendral";
        $sql4 ="delete from letterofprotection where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "letterofprotection Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>