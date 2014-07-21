<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'lowbackselect':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
//      $user_name="12";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_lowback WHERE username='".$username."' and symptom='".$symptom."'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "Yes", "Lowbackuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);

                    $message=str_replace(array("\r\n","\n","\t","\r"),'',$row->comment);
                    $json 		.= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "Yes", "Lowback_no" : "'.$row->lowbackno.'", "pname" : "'.$row->pname.'", "date" : "'.$row->date.'", "tolerate" : "'.$row->tolerate.'", "withoutpain" : "'.$row->withoutpain.'", "withoutcausingpain" : "'.$row->withoutcausingpain.'","sleepingwell" : "'.$row->sleepingwell.'","canlift" : "'.$row->canlift.'","normal" : "'.$row->normal.'","walkingdistance" : "'.$row->walkingdistance.'","withoutextrapain" : "'.$row->withoutextrapain.'","cansit" : "'.$row->cansit.'","rapidlybetter" : "'.$row->rapidlybetter.'","score" : "'.$row->score.'","section" : "'.$row->section.'","adl" : "'.$row->adl.'","adl2" : "'.$row->adl2.'","comment" : "'.$message.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'lowbackedit':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
        $pname = $_POST['pname'];
        $date=$_POST['date'];
        $tolerate=$_POST['tolerate'];
        $withoutpain=$_POST['withoutpain'];
        $withoutcausingpain=$_POST['withoutcausingpain'];
        $sleepingwell=$_POST['sleepingwell'];
        $canlift=$_POST['canlift'];
        $normal=$_POST['normal'];
        $walkingdistance=$_POST['walkingdistance'];
        $withoutextrapain=$_POST['withoutextrapain'];
        $cansit=$_POST['cansit'];
        $rapidlybetter=$_POST['rapidlybetter'];
        $score=$_POST['score'];
        $section=$_POST['section'];
        $adl=$_POST['adl'];
        $adl2=$_POST['adl2'];
        $comment=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comment']);

//        $username = "12";
//        $user_name="silvi";
//        $date="1/1/2014";
//        $tolerate="1";
//        $withoutpain="2";
//        $withoutcausingpain="3";
//        $sleepingwell="4";
//        $canlift="5";
//        $normal="1";
//        $walkingdistance="2";
//        $withoutextrapain="3";
//        $cansit="4";
//        $rapidlybetter="5";
//        $score="40";
//        $section="21";
//        $adl="1.0005";
//        $adl2="";
//        $comment="hello";


        $sql2="update tbl_lowback set  pname='".$pname."',date='".$date."',tolerate='".$tolerate."',withoutpain='".$withoutpain."',withoutcausingpain='".$withoutcausingpain."',sleepingwell='".$sleepingwell."',canlift='".$canlift."',normal='".$normal."',walkingdistance='".$walkingdistance."',withoutextrapain='".$withoutextrapain."',cansit='".$cansit."',rapidlybetter='".$rapidlybetter."',score='".$score."',section='".$section."',adl='".$adl."',adl2='".$adl2."',comment='".$comment."' WHERE  username = '".$username."' and symptom='".$symptom."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'lowbackinsert':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $tolerate=$_POST['tolerate'];
        $withoutpain=$_POST['withoutpain'];
        $withoutcausingpain=$_POST['withoutcausingpain'];
        $sleepingwell=$_POST['sleepingwell'];
        $canlift=$_POST['canlift'];
        $normal=$_POST['normal'];
        $walkingdistance=$_POST['walkingdistance'];
        $withoutextrapain=$_POST['withoutextrapain'];
        $cansit=$_POST['cansit'];
        $rapidlybetter=$_POST['rapidlybetter'];
        $score=$_POST['score'];
        $section=$_POST['section'];
        $adl=$_POST['adl'];
        $adl2=$_POST['adl2'];
        $comment=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comment']);

//        $user_name="silvi";
//        $date="12/12/2014";
//        $tolerate="1";
//        $withoutpain="2";
//        $withoutcausingpain="3";
//        $sleepingwell="4";
//        $canlift="5";
//        $normal="1";
//        $walkingdistance="2";
//        $withoutextrapain="3";
//        $cansit="4";
//        $rapidlybetter="5";
//        $score="40";
//        $section="2";
//        $adl="0.0005";
//        $adl2="";
//        $comment="hello";

        $sql3="INSERT INTO tbl_lowback(symptom,username,pname,date,tolerate,withoutpain,withoutcausingpain,sleepingwell,canlift,normal,walkingdistance,withoutextrapain,cansit,rapidlybetter,score,section,adl,adl2,comment)VALUES ('".$symptom."','".$user_name."','".$pname."','".$date."','".$tolerate."','".$withoutpain."','".$withoutcausingpain."','".$sleepingwell."','".$canlift."','".$normal."','".$walkingdistance."','".$withoutextrapain."','".$cansit."','".$rapidlybetter."','".$score."','".$section."','".$adl."','".$adl2."','".$comment."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'lowbackdelete':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
//    $username = "12";
        $sql4 ="delete from tbl_lowback where username='".$username."' and symptom='".$symptom."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Lowback Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>