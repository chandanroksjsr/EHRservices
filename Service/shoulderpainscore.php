<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'shoulderpainselect':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
     $username=$_POST['username'];
//        $username="silviya";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_shoulderpainscore WHERE username='".$username."' and symptom='".$symptom."'";
//echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "Yes", "Shoulderpainuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "Yes", "shoulderpainno" : "'.$row->shoulderpainno.'", "pname" : "'.$row->pname.'", "number" : "'.$row->number.'", "date" : "'.$row->date.'", "painatrest" : "'.$row->painatrest.'", "paininmotion" : "'.$row->paininmotion.'","nightlypain" : "'.$row->nightlypain.'","sleepingproblem" : "'.$row->sleepingproblem.'","incapability" : "'.$row->incapability.'","degreeofradiation" : "'.$row->degreeofradiation.'","painscale" : "'.$row->painscale.'","date1" : "'.$row->date1.'","total" : "'.$row->total.'","f" : "'.$row->f.'","name123" : "'.$row->name123.'","age" : "'.$row->age.'","headache" : "'.$row->headache.'","myheadache" : "'.$row->myheadache.'","handihapped" : "'.$row->handihapped.'","restricted" : "'.$row->restricted.'","understand" : "'.$row->understand.'","recreational" : "'.$row->recreational.'","angry" : "'.$row->angry.'","control" : "'.$row->control.'","socialize" : "'.$row->socialize.'","family" : "'.$row->family.'","insane" : "'.$row->insane.'","outlook" : "'.$row->outlook.'","afraid" : "'.$row->afraid.'","desperate" : "'.$row->desperate.'","penalties" : "'.$row->penalties.'","relationship" : "'.$row->relationship.'","avoid" : "'.$row->avoid.'","goals" : "'.$row->goals.'","clear" : "'.$row->clear.'","tension" : "'.$row->tension.'","gatherings" : "'.$row->gatherings.'","irritable" : "'.$row->irritable.'","travelling" : "'.$row->travelling.'","confused" : "'.$row->confused.'","frustrated" : "'.$row->frustrated.'","difficult" : "'.$row->difficult.'","attention" : "'.$row->attention.'" "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'shoulderpainedit':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username=$_POST['username'];
        $pname=$_POST['pname'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $painatrest=$_POST['painatrest'];
        $paininmotion=$_POST['paininmotion'];
        $nightlypain=$_POST['nightlypain'];
        $sleepingproblem=$_POST['sleepingproblem'];
        $incapability=$_POST['incapability'];
        $degreeofradiation=$_POST['degreeofradiation'];
        $painscale=$_POST['painscale'];
        $date1=$_POST['date1'];
        $total=$_POST['total'];
        $f=$_POST['f'];
        $name123=$_POST['name123'];
        $age=$_POST['age'];
        $headache=$_POST['headache'];
        $myheadache=$_POST['myheadache'];
        $handihapped=$_POST['handihapped'];
        $restricted=$_POST['restricted'];
        $understand=$_POST['understand'];
        $recreational=$_POST['recreational'];
        $angry=$_POST['angry'];
        $control=$_POST['control'];
        $socialize =$_POST['socialize'];
        $family =$_POST['family'];
        $insane =$_POST['insane'];
        $outlook  =$_POST['outlook'];
        $afraid =$_POST['afraid'];
        $desperate=$_POST['desperate'];
        $penalties=$_POST['penalties'];
        $relationship=$_POST['relationship'];
        $avoid=$_POST['avoid'];
        $goals=$_POST['goals'];
        $clear=$_POST['clear'];
        $tension=$_POST['tension'];
        $gatherings=$_POST['gatherings'];
        $irritable=$_POST['irritable'];
        $travelling=$_POST['travelling'];
        $confused=$_POST['confused'];
        $frustrated=$_POST['frustrated'];
        $difficult=$_POST['difficult'];
        $attention=$_POST['attention'];

//$username="silviya";
//        $pname="11";
//        $number="11";
//        $date="11";
//        $painatrest="12";
//        $paininmotion="13";
//        $nightlypain="14";
//        $sleepingproblem="5";
//        $incapability="1";
//        $degreeofradiation="2";
//        $painscale="3";
//        $date1="4";
//        $total="5";
//        $f="sdf";
////
//        $name123="21";
//        $age="10";
//        $headache="0.0005";
//        $myheadache="asdf";
//        $handihapped="develoepr";
//        $restricted="coding";
//        $understand="cc";
//        $recreational="cc";
//        $angry="c1c";
//        $control="c1c";
//        $socialize ="c1c";
//        $family="cc";
//        $insane ="cc";
//        $outlook ="c";
//        $afraid ="c";
//        $desperate="hello";
//        $penalties="hello";
//        $relationship="hello";
//        $avoid="hello";
//        $goals="hello";
//        $clear="hello";
//        $tension="hello";
//        $gatherings="hello";
//        $irritable="hello";
//        $travelling="hello";
//        $confused="hello";
//        $frustrated="hello";
//        $difficult="hello";
//        $attention="hello";


        $sql2="update tbl_shoulderpainscore set  pname='".$pname."',number='".$number."',date='".$date."',painatrest='".$painatrest."',paininmotion='".$paininmotion."',nightlypain='".$nightlypain."',sleepingproblem='".$sleepingproblem."',incapability='".$incapability."',degreeofradiation='".$degreeofradiation."',painscale='".$painscale."',date1='".$date1."',total='".$total."',f='".$f."',name123='".$name123."',age='".$age."',headache='".$headache."',myheadache='".$myheadache."',handihapped='".$handihapped."',restricted='".$restricted."',understand='".$understand."',recreational='".$recreational."',angry='".$angry."',control='".$control."',socialize='".$socialize."',family='".$family."',insane='".$insane."',outlook='".$outlook."',afraid='".$afraid."',desperate='".$desperate."',penalties='".$penalties."',relationship='".$relationship."',avoid='".$avoid."',goals='".$goals."',clear='".$clear."',tension='".$tension."',gatherings='".$gatherings."',irritable='".$irritable."',travelling='".$travelling."',confused='".$confused."',frustrated='".$frustrated."',difficult='".$difficult."',attention='".$attention."' WHERE  username = '".$username."' and symptom='".$symptom."'";
//echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'shoulderpaininsert':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $username=$_POST['username'];
        $pname=$_POST['pname'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $painatrest=$_POST['painatrest'];
        $paininmotion=$_POST['paininmotion'];
        $nightlypain=$_POST['nightlypain'];
        $sleepingproblem=$_POST['sleepingproblem'];
        $incapability=$_POST['incapability'];
        $degreeofradiation=$_POST['degreeofradiation'];
        $painscale=$_POST['painscale'];
        $date1=$_POST['date1'];
        $total=$_POST['total'];
        $f=$_POST['f'];
        $name123=$_POST['name123'];
        $age=$_POST['age'];
        $headache=$_POST['headache'];
        $myheadache=$_POST['myheadache'];
        $handihapped=$_POST['handihapped'];
        $restricted=$_POST['restricted'];
        $understand=$_POST['understand'];
        $recreational=$_POST['recreational'];
        $angry=$_POST['angry'];
        $control=$_POST['control'];
        $socialize =$_POST['socialize'];
        $family =$_POST['family'];
        $insane =$_POST['insane'];
        $outlook  =$_POST['outlook'];
        $afraid =$_POST['afraid'];
        $desperate=$_POST['desperate'];
        $penalties=$_POST['penalties'];
        $relationship=$_POST['relationship'];
        $avoid=$_POST['avoid'];
        $goals=$_POST['goals'];
        $clear=$_POST['clear'];
        $tension=$_POST['tension'];
        $gatherings=$_POST['gatherings'];
        $irritable=$_POST['irritable'];
        $travelling=$_POST['travelling'];
        $confused=$_POST['confused'];
        $frustrated=$_POST['frustrated'];
        $difficult=$_POST['difficult'];
        $attention=$_POST['attention'];



//$username="silviya";
//        $pname="1";
//        $number="1";
//        $date="1";
//        $painatrest="2";
//        $paininmotion="3";
//        $nightlypain="4";
//        $sleepingproblem="5";
//        $incapability="1";
//        $degreeofradiation="2";
//        $painscale="3";
//        $date1="4";
//        $total="5";
//        $f="sdf";
//
//        $name123="21";
//        $age="10";
//        $headache="0.0005";
//        $myheadache="asdf";
//        $handihapped="develoepr";
//        $restricted="coding";
//        $understand="cc";
//        $recreational="cc";
//        $angry="cc";
//        $control="cc";
//        $socialize ="cc";
//        $family="cc";
//        $insane ="cc";
//        $outlook ="c";
//        $afraid ="c";
//        $desperate="hello";
//        $penalties="hello";
//        $relationship="hello";
//        $avoid="hello";
//        $goals="hello";
//        $clear="hello";
//        $tension="hello";
//        $gatherings="hello";
//        $irritable="hello";
//        $travelling="hello";
//        $confused="hello";
//        $frustrated="hello";
//        $difficult="hello";
//        $attention="hello";


        $sql3="INSERT INTO tbl_shoulderpainscore(shoulderpainno,symptom,username,pname,number,date,painatrest,paininmotion,nightlypain,sleepingproblem,incapability,degreeofradiation,painscale,date1,total,f,name123,age,headache,myheadache,handihapped,restricted,understand,recreational,angry,control,socialize,family,insane,outlook,afraid,desperate,penalties,relationship,avoid,goals,clear,tension,gatherings,irritable,travelling,confused,frustrated,difficult,attention)VALUES ('','".$symptom."','".$username."','".$pname."','".$number."','".$date."','".$painatrest."','".$paininmotion."','".$nightlypain."','".$sleepingproblem."','".$incapability."','".$degreeofradiation."','".$painscale."','".$date1."','".$total."','".$f."','".$name123."','".$age."','".$headache."','".$myheadache."','".$handihapped."','".$restricted."','".$understand."','".$recreational."','".$angry."','".$control."','".$socialize."','".$family."','".$insane."','".$outlook."','".$afraid."','".$desperate."','".$penalties."','".$relationship."','".$avoid."','".$goals."','".$clear."','".$tension."','".$gatherings."','".$irritable."','".$travelling."','".$confused."','".$frustrated."','".$difficult."','".$attention."')";

//       echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'shoulderpaindelete':
    {
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
      $username=$_POST['username'];
//        $username="silviya";
        $sql4 ="delete from tbl_shoulderpainscore where username='".$username."' and symptom='".$symptom."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "Shoulderpain Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>