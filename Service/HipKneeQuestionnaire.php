<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'hipkneeselect':
    {

       $username = $_POST['username'];
      //  $hipquestionno="21";
        $flag=0;
        $sql1 ="SELECT * FROM hipquestionnaire WHERE username='$username'";
//echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "Yes", "hipkneeuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "Yes", "hipquestionno" : "'.$row->hipquestionno.'", "username" : "'.$row->username.'", "stiff" : "'.$row->stiff.'", "swollen" : "'.$row->swollen.'", "flatrighthip" : "'.$row->flatrighthip.'", "flatlefthip" : "'.$row->flatlefthip.'","flatrightknee" : "'.$row->flatrightknee.'","flatleftknee" : "'.$row->flatleftknee.'","stairsrighthip" : "'.$row->stairsrighthip.'","stairslefthip" : "'.$row->stairslefthip.'","stairsrightknee" : "'.$row->stairsrightknee.'","stairsleftknee" : "'.$row->stairsleftknee.'","bedrighthip" : "'.$row->bedrighthip.'","bedlefthip" : "'.$row->bedlefthip.'","bedrightknee" : "'.$row->bedrightknee.'","bedleftknee" : "'.$row->bedleftknee.'","best" : "'.$row->best.'","socks" : "'.$row->socks.'","date" : "'.$row->date.'","birthdate" : "'.$row->birthdate.'","security" : "'.$row->security.'","message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';

            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hipkneeedit':
    {
//        $hipquestionno = $_POST['hipquestionno '];
        $username=$_POST['username'];
        $stiff=$_POST['stiff'];
        $swollen=$_POST['swollen'];
        $flatrighthip=$_POST['flatrighthip'];
        $flatlefthip=$_POST['flatlefthip'];
        $flatrightknee=$_POST['flatrightknee'];
        $flatleftknee=$_POST['flatleftknee'];
        $stairsrighthip=$_POST['stairsrighthip'];
        $stairslefthip=$_POST['stairslefthip'];
       $stairsrightknee=$_POST['stairsrightknee'];
        $stairsleftknee=$_POST['stairsleftknee'];
       $bedrighthip=$_POST['bedrighthip'];
        $bedlefthip=$_POST['bedlefthip'];
       $bedrightknee=$_POST['bedrightknee'];
       $bedleftknee=$_POST['bedleftknee'];
        $best=$_POST['best'];
        $socks=$_POST['socks'];
        $date=$_POST['date'];
        $birthdate=$_POST['birthdate'];
       $security=$_POST['security'];



      /*  $hipquestionno = "20";
        $username="senthamil";
        $stiff="1";
        $swollen="2";
        $flatrighthip="3";
        $flatlefthip="4";
        $flatrightknee="5";
        $flatleftknee="6";
        $stairsrighthip ="7";
        $stairslefthip="8";
        $stairsrightknee="9";
        $stairsleftknee="10";
        $bedrighthip="11";
        $bedlefthip="40/40/2014";
        $bedrightknee="12";
        $bedleftknee="13";
        $best="14";
        $socks="software";
        $date="develoepr";
        $birthdate="coding";
        $security="ccc";*/



        $sql2="update hipquestionnaire set  stiff='".$stiff."',swollen='".$swollen."',flatrighthip='".$flatrighthip."',flatlefthip='".$flatlefthip."',flatrightknee='".$flatrightknee."',flatleftknee='".$flatleftknee."',stairsrighthip='".$stairsrighthip."',stairslefthip='".$stairslefthip."',stairsrightknee='".$stairsrightknee."',stairsleftknee='".$stairsleftknee."',bedrighthip='".$bedrighthip."',bedlefthip='".$bedlefthip."',bedrightknee='".$bedrightknee."',bedleftknee='".$bedleftknee."',best='".$best."',socks='".$socks."',date='".$date."',birthdate='".$birthdate."',security='".$security."' WHERE  username = '".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'hipkneeinsert':
    {


//
       $username=$_POST['username'];
        $stiff=$_POST['stiff'];
       $swollen=$_POST['swollen'];
        $flatrighthip=$_POST['flatrighthip'];
        $flatlefthip=$_POST['flatlefthip'];
       $flatrightknee=$_POST['flatrightknee'];
        $flatleftknee=$_POST['flatleftknee'];
        $stairsrighthip=$_POST['stairsrighthip'];
        $stairslefthip=$_POST['stairslefthip'];
        $stairsrightknee=$_POST['stairsrightknee'];
        $stairsleftknee=$_POST['stairsleftknee'];
        $bedrighthip=$_POST['bedrighthip'];
        $bedlefthip=$_POST['bedlefthip'];
       $bedrightknee=$_POST['bedrightknee'];
        $bedleftknee=$_POST['bedleftknee'];
      $best=$_POST['best'];
       $socks=$_POST['socks'];
       $date=$_POST['date'];
       $birthdate=$_POST['birthdate'];
       $security=$_POST['security'];


    /*    $username="thendral";
        $stiff="Mildly";
        $swollen="good";
        $flatrighthip="nice";
        $flatlefthip="better";
        $flatrightknee="abcdef";
        $flatleftknee="ghijk";
        $stairsrighthip ="lmno";
        $stairslefthip="pqrst";
        $stairsrightknee="uvwx";
        $stairsleftknee="yzab";
        $bedrighthip="123";
        $bedlefthip="456";
        $bedrightknee="789";
        $bedleftknee="101112";
        $best="11";
        $socks="vada";
        $date="04/22/2013";
        $birthdate="1992-01-29";
        $security="234-54-5387";*/


        $sql3="insert into hipquestionnaire(hipquestionno,username,stiff,swollen,flatrighthip,flatlefthip,flatrightknee,flatleftknee,stairsrighthip,stairslefthip,stairsrightknee,stairsleftknee,bedrighthip,bedlefthip,bedrightknee,bedleftknee,best,socks,date,birthdate,security) values ('','".$username."','".$stiff."','".$swollen."','".$flatrighthip."','".$flatlefthip."','".$flatrightknee."','".$flatleftknee."','".$stairsrighthip."','".$stairslefthip."','".$stairsrightknee."','".$stairsleftknee."','".$bedrighthip."','".$bedlefthip."','".$bedrightknee."','".$bedleftknee."','".$best."','".$socks."','".$date."','".$birthdate."','".$security."')";


        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hipkneedelete':
    {
//        $hipquestionno= $_POST['hipquestionno'];
       // $hipquestionno= "20";
        $username= $_POST['username'];
        $sql4 ="delete from hipquestionnaire where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "HipKnee Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>