<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'wristhandselect':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username=$_POST['username'];
//        $wristindexno = $_POST['wristindexno'];
//      $wristindexno="14";
        $flag=0;
        $sql1 ="SELECT * FROM wristindex WHERE username='".$username."' and symptom='".$symptom."'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "Yes", "Wristhanduser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "Yes", "Wristhand_no" : "'.$row->wristindexno.'", "name" : "'.$row->name.'", "date" : "'.$row->date.'", "painintensity" : "'.$row->painintensity.'", "work" : "'.$row->work.'", "numbness" : "'.$row->numbness.'","driving" : "'.$row->driving.'","personal" : "'.$row->personal.'","sleeping" : "'.$row->sleeping.'","strength" : "'.$row->strength.'","house" : "'.$row->house.'","writing" : "'.$row->writing.'","recreation" : "'.$row->recreation.'","painscale" : "'.$row->painscale.'","score" : "'.$row->score.'","total" : "'.$row->total.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'wristhandedit':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username=$_POST['username'];
        $wristindexno = $_POST['wristindexno'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        $painintensity=$_POST['painintensity'];
        $work=$_POST['work'];
        $numbness=$_POST['numbness'];
        $driving=$_POST['driving'];
        $personal=$_POST['personal'];
        $sleeping=$_POST['sleeping'];
        $strength=$_POST['strength'];
        $house=$_POST['house'];
        $writing=$_POST['writing'];
        $recreation=$_POST['recreation'];
        $painscale=$_POST['painscale'];
        $score=$_POST['score'];
        $total=$_POST['total'];


//        $wristindexno = "14";
//        $name="silvi";
//        $date="1/1/2014";
//        $painintensity="1";
//        $work="2";
//        $numbness="3";
//        $driving="4";
//        $personal="5";
//        $sleeping="1";
//        $strength="2";
//        $house="3";
//        $writing="4";
//        $recreation="5";
//        $painscale="1";
//        $score="40";
//        $total="0.55";


        $sql2="update wristindex set  name='".$name."',date='".$date."',painintensity='".$painintensity."',work='".$work."',numbness='".$numbness."',driving='".$driving."',personal='".$personal."',sleeping='".$sleeping."',strength='".$strength."',house='".$house."',writing='".$writing."',recreation='".$recreation."',painscale='".$painscale."',score='".$score."',total='".$total."' WHERE  username = '".$username."' and symptom='".$symptom."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'wristhandinsert':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username=$_POST['username'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        $painintensity=$_POST['painintensity'];
        $work=$_POST['work'];
        $numbness=$_POST['numbness'];
        $driving=$_POST['driving'];
        $personal=$_POST['personal'];
        $sleeping=$_POST['sleeping'];
        $strength=$_POST['strength'];
        $house=$_POST['house'];
        $writing=$_POST['writing'];
        $recreation=$_POST['recreation'];
        $painscale=$_POST['painscale'];
        $score=$_POST['score'];
        $total=$_POST['total'];


//        $name="silvi";
//        $date="12/12/2014";
//        $painintensity="1";
//        $work="2";
//        $numbness="3";
//        $driving="4";
//        $personal="5";
//        $sleeping="1";
//        $strength="2";
//        $house="3";
//        $writing="4";
//        $recreation="5";
//        $painscale="1";
//        $score="40";
//        $total="0.66";


        $sql3="INSERT INTO wristindex(symptom,username,name,date,painintensity,work,numbness,driving,personal,sleeping,strength,house,writing,recreation,painscale,score,total)VALUES ('".$symptom."','".$username."','".$name."','".$date."','".$painintensity."','".$work."','".$numbness."','".$driving."','".$personal."','".$sleeping."','".$strength."','".$house."','".$writing."','".$recreation."','".$painscale."','".$score."','".$total."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'wristhanddelete':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username=$_POST['username'];
//        $wristindexno = $_POST['wristindexno'];

//    $wristindexno = "14";
        $sql4 ="delete from wristindex where username='".$username."' and symptom='".$symptom."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Wristhand Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>