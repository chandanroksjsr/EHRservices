<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'oswestryselect':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
//        $username="13";
        $flag=0;
        $sql1 ="SELECT * FROM oswestryindex WHERE username='".$username."' and symptom='".$symptom."'";
//echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "Yes", "Oswestryuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "Yes", "oswestryno" : "'.$row->oswestryno.'","username" : "'.$row->username.'", "painintensity" : "'.$row->painintensity.'", "standing" : "'.$row->standing.'", "personal" : "'.$row->personal.'", "sleeping" : "'.$row->sleeping.'", "lifting" : "'.$row->lifting.'","life" : "'.$row->life.'","walking" : "'.$row->walking.'","social" : "'.$row->social.'","sitting" : "'.$row->sitting.'","traveling" : "'.$row->traveling.'","comments" : "'.$row->comments.'","name" : "'.$row->name.'","date" : "'.$row->date.'","scores" : "'.$row->scores.'","painscale" : "'.$row->painscale.'","painscale1" : "'.$row->painscale1.'","job" : "'.$row->job.'","joboptional" : "'.$row->joboptional.'","work" : "'.$row->work.'","worka" : "'.$row->worka.'","workb" : "'.$row->workb.'","workc" : "'.$row->workc.'","sport" : "'.$row->sport.'","sportoptional" : "'.$row->sportoptional.'","instrument" : "'.$row->instrument.'","instrumenta" : "'.$row->instrumenta.'","instrumentb" : "'.$row->instrumentb.'","instrumentc" : "'.$row->instrumentc.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'oswestryedit':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
        $painintensity=$_POST['painintensity'];
        $standing=$_POST['standing'];
        $personal=$_POST['personal'];
        $sleeping=$_POST['sleeping'];
        $lifting=$_POST['lifting'];
        $life=$_POST['life'];
        $walking=$_POST['walking'];
        $social=$_POST['social'];
        $sitting=$_POST['sitting'];
        $traveling=$_POST['traveling'];
        $comments=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments']);
        $name=$_POST['name'];
        $date=$_POST['date'];
        $scores=$_POST['scores'];
        $painscale=$_POST['painscale'];
        $painscale1=$_POST['painscale1'];
        $job=$_POST['job'];
        $joboptional=$_POST['joboptional'];
        $work=$_POST['work'];
        $worka=$_POST['worka'];
        $workb=$_POST['workb'];
        $workc=$_POST['workc'];
        $sport=$_POST['sport'];
        $sportoptional =$_POST['sportoptional'];
        $instrument =$_POST['instrument'];
        $instrumenta =$_POST['instrumenta'];
        $instrumentb  =$_POST['instrumentb'];
        $instrumentc =$_POST['instrumentc'];

//        $username = "13";
//        $painintensity="0";
//        $standing="1";
//        $personal="1";
//        $sleeping="2";
//        $lifting="3";
//        $life="4";
//        $walking="5";
//        $social="1";
//        $sitting="2";
//        $traveling="3";
//        $comments="4";
//        $name="5";
//        $date="40/40/2014";
//        $scores="21";
//        $painscale="1.0005";
//        $painscale1="11";
//        $job="software";
//        $joboptional="develoepr";
//        $work="coding";
//        $worka="ccc";
//        $workb="ccc";
//        $workc="ccc";
//        $sport="ccc";
//        $sportoptional ="ccc";
//        $instrument="ccc";
//        $instrumenta ="ccc";
//        $instrumentb ="cc";
//        $instrumentc ="ccc";


        $sql2="update oswestryindex set  painintensity='".$painintensity."',standing='".$standing."',personal='".$personal."',sleeping='".$sleeping."',lifting='".$lifting."',life='".$life."',walking='".$walking."',social='".$social."',sitting='".$sitting."',traveling='".$traveling."',comments='".$comments."',name='".$name."',date='".$date."',scores='".$scores."',painscale='".$painscale."',painscale1='".$painscale1."',job='".$job."',joboptional='".$joboptional."',work='".$work."',worka='".$worka."',workb='".$workb."',workc='".$workc."',sport='".$sport."',sportoptional='".$sportoptional."',instrument='".$instrument."',instrumenta='".$instrumenta."',instrumentb='".$instrumentb."',instrumentc='".$instrumentc."' WHERE  username = '".$username."' and symptom='".$symptom."'";
//echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'oswestryinsert':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
        $painintensity=$_POST['painintensity'];
        $standing=$_POST['standing'];
        $personal=$_POST['personal'];
        $sleeping=$_POST['sleeping'];
        $lifting=$_POST['lifting'];
        $life=$_POST['life'];
        $walking=$_POST['walking'];
        $social=$_POST['social'];
        $sitting=$_POST['sitting'];
        $traveling=$_POST['traveling'];
        $comments=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments']);
        $name=$_POST['name'];
        $date=$_POST['date'];
        $scores=$_POST['scores'];
        $painscale=$_POST['painscale'];
        $painscale1=$_POST['painscale1'];
        $job=$_POST['job'];
        $joboptional=$_POST['joboptional'];
        $work=$_POST['work'];
        $worka=$_POST['worka'];
        $workb=$_POST['workb'];
        $workc=$_POST['workc'];
        $sport=$_POST['sport'];
        $sportoptional =$_POST['sportoptional'];
        $instrument =$_POST['instrument'];
        $instrumenta =$_POST['instrumenta'];
        $instrumentb  =$_POST['instrumentb'];
        $instrumentc =$_POST['instrumentc'];

//        $username="ss";
//        $painintensity="1";
//        $standing="1";
//        $personal="1";
//        $sleeping="2";
//        $lifting="3";
//        $life="4";
//        $walking="5";
//        $social="1";
//        $sitting="2";
//        $traveling="3";
//        $comments="4";
//        $name="5";
//        $date="10/20/2014";
//        $scores="21";
//        $painscale="0.0005";
//        $painscale1="";
//        $painscale="1.0005";
//        $painscale1="1";
//        $job="software";
//        $joboptional="develoepr";
//        $work="coding";
//        $worka="cc";
//        $workb="cc";
//        $workc="cc";
//        $sport="cc";
//        $sportoptional ="cc";
//        $instrument="cc";
//        $instrumenta ="cc";
//        $instrumentb ="c";
//        $instrumentc ="c";


        $sql3="INSERT INTO oswestryindex(oswestryno,symptom,username,painintensity,standing,personal,sleeping,lifting,life,walking,social,sitting,traveling,comments,name,date,scores,painscale,painscale1,job,joboptional,work,worka,workb,workc,sport,sportoptional,instrument,instrumenta,instrumentb,instrumentc)VALUES ('','".$symptom."','".$username."','".$painintensity."','".$standing."','".$personal."','".$sleeping."','".$lifting."','".$life."','".$walking."','".$social."','".$sitting."','".$traveling."','".$comments."','".$name."','".$date."','".$scores."','".$painscale."','".$painscale1."','".$job."','".$joboptional."','".$work."','".$worka."','".$workb."','".$workc."','".$sport."','".$sportoptional."','".$instrument."','".$instrumenta."','".$instrumentb."','".$instrumentc."')";

//        echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'oswestrydelete':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username = $_POST['username'];
  //  $username = "13";
        $sql4 ="delete from oswestryindex where username='".$username."' and symptom='".$symptom."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Oswestry Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>