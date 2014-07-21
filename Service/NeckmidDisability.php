<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'neckmidselect':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
//      $username="15";
        $flag=0;
        $sql1 ="SELECT * FROM neckindex WHERE username='".$username."' and symptom='".$symptom."'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "Yes", "Neckindexuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "Yes", "Neckindex_no" : "'.$row->neckindexno.'","username" : "'.$row->username.'", "name" : "'.$row->name.'", "date" : "'.$row->date.'", "painintensity" : "'.$row->painintensity.'", "work" : "'.$row->work.'", "personal" : "'.$row->personal.'","driving" : "'.$row->driving.'","lifting" : "'.$row->lifting.'","sleeping" : "'.$row->sleeping.'","reading" : "'.$row->reading.'","recreation" : "'.$row->recreation.'","headache" : "'.$row->headache.'","concentration" : "'.$row->concentration.'","score" : "'.$row->score.'","status" : "'.$row->status.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'neckmidedit':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        $painintensity=$_POST['painintensity'];
        $work=$_POST['work'];
        $personal=$_POST['personal'];
        $driving=$_POST['driving'];
        $lifting=$_POST['lifting'];
        $sleeping=$_POST['sleeping'];
        $reading=$_POST['reading'];
        $recreation=$_POST['recreation'];
        $headache=$_POST['headache'];
        $concentration=$_POST['concentration'];
        $score=$_POST['score'];
        $status=$_POST['status'];


//        $username = "15";
//        $name="silvi";
//        $date="1/1/2014";
//        $painintensity="1";
//        $work="2";
//        $personal="3";
//        $driving="4";
//        $lifting="5";
//        $sleeping="1";
//        $reading="2";
//        $recreation="3";
//        $headache="4";
//        $concentration="5";
//        $score="40";
//        $status="BAD";


        $sql2="update neckindex set  name='".$name."',date='".$date."',painintensity='".$painintensity."',work='".$work."',personal='".$personal."',driving='".$driving."',lifting='".$lifting."',sleeping='".$sleeping."',reading='".$reading."',recreation='".$recreation."',headache='".$headache."',concentration='".$concentration."',score='".$score."',status='".$status."' WHERE  username = '".$username."' and symptom='".$symptom."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'neckmidinsert':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
        $name=$_POST['name'];
        $date=$_POST['date'];
        $painintensity=$_POST['painintensity'];
        $work=$_POST['work'];
        $personal=$_POST['personal'];
        $driving=$_POST['driving'];
        $lifting=$_POST['lifting'];
        $sleeping=$_POST['sleeping'];
        $reading=$_POST['reading'];
        $recreation=$_POST['recreation'];
        $headache=$_POST['headache'];
        $concentration=$_POST['concentration'];
        $score=$_POST['score'];
        $status=$_POST['status'];

//        $username="silviya";
//        $name="silvi";
//        $date="12/12/2014";
//        $painintensity="1";
//        $work="2";
//        $personal="3";
//        $driving="4";
//        $lifting="5";
//        $sleeping="1";
//        $reading="2";
//        $recreation="3";
//        $headache="4";
//        $concentration="5";
//        $score="40";
//        $status="GOOD";


        $sql3="INSERT INTO neckindex(neckindexno,symptom,username,name,date,painintensity,work,personal,driving,lifting,sleeping,reading,recreation,headache,concentration,score,status)VALUES ('','".$symptom."','".$username."','".$name."','".$date."','".$painintensity."','".$work."','".$personal."','".$driving."','".$lifting."','".$sleeping."','".$reading."','".$recreation."','".$headache."','".$concentration."','".$score."','".$status."')";
//echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'neckmiddelete':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];

//    $username = "15";
        $sql4 ="delete from neckindex where username='".$username."' and symptom='".$symptom."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Neckindex Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>