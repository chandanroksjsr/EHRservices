<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'footankleselect':
    {

//       $footquestionno = $_POST['footquestionno'];
        $username=$_POST['username'];
         //$footquestionno="15";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_footquestionnarie WHERE username='$username'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {


                $json = '{ "serviceresponse" : { "servicename" : "FootAnkle Data", "success" : "Yes", "footankleuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "FootAnkle Data", "success" : "Yes", "footquestionno" : "'.$row->footquestionno.'", "username" : "'.$row->username.'", "stiff" : "'.$row->stiff.'", "swollen" : "'.$row->swollen.'", "unevensurface" : "'.$row->unevensurface.'", "flatsurface" : "'.$row->flatsurface.'","updownstairs" : "'.$row->updownstairs.'","lyinginbed" : "'.$row->lyinginbed.'","sternous" : "'.$row->sternous.'","moderateactivity" : "'.$row->moderateactivity.'","lightactivity" : "'.$row->lightactivity.'","best" : "'.$row->best.'","trouble" : "'.$row->trouble.'","socks" : "'.$row->socks.'","heavywork" : "'.$row->heavywork.'","jogging" : "'.$row->jogging.'","walking" : "'.$row->walking.'","stand" : "'.$row->stand.'","fewminutes" : "'.$row->fewminutes.'","difficulty" : "'.$row->difficulty.'","women" : "'.$row->women.'","dress" : "'.$row->dress.'","shoes" : "'.$row->shoes.'","orthopedic" : "'.$row->orthopedic.'","allversion" : "'.$row->allversion.'","foot" : "'.$row->foot.'","ankle" : "'.$row->ankle.'","date" : "'.$row->date.'","birthdate" : "'.$row->birthdate.'","security" : "'.$row->security.'","message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';

            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "FootAnkle Data", "successnnn" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'footankleedit':
    {
//        $footquestionno = $_POST['footquestionno'];
        $username=$_POST['username'];
      $stiff=$_POST['stiff'];
      $swollen=$_POST['swollen'];
      $unevensurface=$_POST['unevensurface'];
      $flatsurface=$_POST['flatsurface'];
      $updownstairs=$_POST['updownstairs'];
      $lyinginbed=$_POST['lyinginbed'];
      $sternous=$_POST['sternous'];
      $moderateactivity=$_POST['moderateactivity'];
      $lightactivity=$_POST['lightactivity'];
      $best=$_POST['best'];
      $trouble=$_POST['trouble'];
      $socks=$_POST['socks'];
      $heavywork=$_POST['heavywork'];
      $jogging=$_POST['jogging'];
      $walking=$_POST['walking'];
      $stand=$_POST['stand'];
      $fewminutes=$_POST['fewminutes'];
      $difficulty=$_POST['difficulty'];
      $women=$_POST['women'];
      $dress=$_POST['dress'];
      $shoes=$_POST['shoes'];
      $orthopedic=$_POST['orthopedic'];
      $allversion=$_POST['allversion'];
      $foot=$_POST['foot'];
      $ankle=$_POST['ankle'];
      $date=$_POST['date'];
      $birthdate=$_POST['birthdate'];
      $security=$_POST['security'];

     /*   $footquestionno = "7";
        $username="username";
        $stiff="11";
        $swollen="12";
        $unevensurface="13";
        $flatsurface="14";
        $updownstairs="15";
        $lyinginbed="16";
        $sternous="17";
        $moderateactivity="18";
        $lightactivity="19";
        $best="100";
        $trouble="101";
        $socks="102";
        $heavywork="103";
        $jogging="104";
        $walking="105";
        $stand="106";
        $fewminutes="107";
        $difficulty="108";
        $women="109";
        $dress="110";
        $shoes="111";

        $orthopedic="113";
        $allversion="114";
        $foot="115";
        $ankle="116";
        $date="117";
        $birthdate="118";
        $security="119";

*/
        $sql2="update tbl_footquestionnarie set  stiff='".$stiff."',swollen='".$swollen."',unevensurface='".$unevensurface."',flatsurface='".$flatsurface."',updownstairs='".$updownstairs."',lyinginbed='".$lyinginbed."',sternous='".$sternous."',moderateactivity='".$moderateactivity."',lightactivity='".$lightactivity."',best='".$best."',trouble='".$trouble."',socks='".$socks."',heavywork='".$heavywork."',jogging='".$jogging."',walking='".$walking."',stand='".$stand."',fewminutes='".$fewminutes."',difficulty='".$difficulty."',women='".$women."',dress='".$dress."',shoes='".$shoes."',orthopedic='".$orthopedic."',allversion='".$allversion."',foot='".$foot."',ankle='".$ankle."',date='".$date."',birthdate='".$birthdate."',security='".$security."' WHERE  username = '".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "footankle Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "footankle Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'footankleinsert':
    {


//
        $username=$_POST['username'];
        $stiff=$_POST['stiff'];
        $swollen=$_POST['swollen'];
        $unevensurface=$_POST['unevensurface'];
        $flatsurface=$_POST['flatsurface'];
        $updownstairs=$_POST['updownstairs'];
        $lyinginbed=$_POST['lyinginbed'];
        $sternous=$_POST['sternous'];
        $moderateactivity=$_POST['moderateactivity'];
        $lightactivity=$_POST['lightactivity'];
        $best=$_POST['best'];
        $trouble=$_POST['trouble'];
        $socks=$_POST['socks'];
        $heavywork=$_POST['heavywork'];
        $jogging=$_POST['jogging'];
        $walking=$_POST['walking'];
        $stand=$_POST['stand'];
        $fewminutes=$_POST['fewminutes'];
        $difficulty=$_POST['difficulty'];
        $women=$_POST['women'];
        $dress=$_POST['dress'];
        $shoes=$_POST['shoes'];
        $orthopedic=$_POST['orthopedic'];
        $allversion=$_POST['allversion'];
        $foot=$_POST['foot'];
        $ankle=$_POST['ankle'];
        $date=$_POST['date'];
        $birthdate=$_POST['birthdate'];
        $security=$_POST['security'];


      /*  $username="username";
        $stiff="11";
        $swollen="12";
        $unevensurface="13";
        $flatsurface="14";
        $updownstairs="15";
        $lyinginbed="16";
        $sternous="17";
        $moderateactivity="18";
        $lightactivity="19";
        $best="100";
        $trouble="101";
        $socks="102";
        $heavywork="103";
        $jogging="104";
        $walking="105";
        $stand="106";
        $fewminutes="107";
        $difficulty="108";
        $women="109";
        $dress="110";
        $shoes="111";

        $orthopedic="113";
        $allversion="114";
        $foot="115";
        $ankle="116";
        $date="117";
        $birthdate="118";
        $security="119";
*/
       // tbl_footquestionnarie
        $sql3="insert into tbl_footquestionnarie(footquestionno,username,stiff,swollen,unevensurface,flatsurface,updownstairs,lyinginbed,sternous,moderateactivity,lightactivity,best,trouble,socks,heavywork,jogging,walking,stand,fewminutes,difficulty,women,dress,shoes,orthopedic,allversion,foot,ankle,date,birthdate,security) values ('','".$username."','".$stiff."','".$swollen."','".$unevensurface."','".$flatsurface."','".$updownstairs."','".$lyinginbed."','".$sternous."','".$moderateactivity."','".$lightactivity."','".$best."','".$trouble."','".$socks."','".$heavywork."','".$jogging."','".$walking."','".$stand."','".$fewminutes."','".$difficulty."','".$women."','".$dress."','".$shoes."','".$orthopedic."','".$allversion."','".$foot."','".$ankle."','".$date."','".$birthdate."','".$security."')";


        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "footankle Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "footankle Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'footankledelete':
    {
        $username=$_POST['username'];
//        $hipquestionno= $_POST['hipquestionno'];
//       $hipquestionno= "14";
        $sql4 ="delete from tbl_footquestionnarie where username='".$username."'";

        if(mysql_query($sql4))
        {


            $json	= '{ "serviceresponse" : { "servicename" : "footankle Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "footanvbvkle Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>