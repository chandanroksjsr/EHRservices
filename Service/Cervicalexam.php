<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/05/14
 * Time: 12:40 PM
 */
session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'cervicalexamselect':
    {

          $user_name = $_POST['username'];
//        $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_cervicalexam WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "Yes", "cervicalexamuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "Yes", "cervicalexamid" : "'.$row->cervicalexamid.'", "username" : "'.$row->username.'", "pname" : "'.$row->pname.'", "date" : "'.$row->date.'",  "muscle" : "'.$row->muscle.'", "swelling" : "'.$row->swelling.'","headposture" : "'.$row->headposture.'","roundshoulder" : "'.$row->roundshoulder.'", "ao" : "'.$row->ao.'", "allsoft" : "'.$row->allsoft.'", "suboccipital" : "'.$row->suboccipital.'", "scalenes" : "'.$row->scalenes.'", "levator" : "'.$row->levator.'", "teresminor" : "'.$row->teresminor.'", "teresmajor" : "'.$row->teresmajor.'", "rhomboids" : "'.$row->rhomboids.'", "trapezius" : "'.$row->trapezius.'","pectoralis" : "'.$row->pectoralis.'","paraspinals" : "'.$row->paraspinals.'","othernotes" : "'.$row->othernotes.'","functionalrangeofmotion" : "'.$row->functionalrangeofmotion.'","subluxation" : "'.$row->subluxation.'","orthopedic" : "'.$row->orthopedic.'","flexion" : "'.$row->flexion.'","c01" : "'.$row->c01.'","c12" : "'.$row->c12.'","c23" : "'.$row->c23.'","hautantl" : "'.$row->hautantl.'","hautantr" : "'.$row->hautantr.'","extension" : "'.$row->extension.'","c34" : "'.$row->c34.'","c45" : "'.$row->c45.'","c56" : "'.$row->c56.'","foraminall" : "'.$row->foraminall.'","foraminalr" : "'.$row->foraminalr.'","lflexion" : "'.$row->lflexion.'","rflexion" : "'.$row->rflexion.'","c67" : "'.$row->c67.'","c7t1" : "'.$row->c7t1.'","t12" : "'.$row->t12.'","sotohalll" : "'.$row->sotohalll.'","sotohallr" : "'.$row->sotohallr.'","lrotation" : "'.$row->lrotation.'","rrotation" : "'.$row->rrotation.'","t23" : "'.$row->t23.'","t34" : "'.$row->t34.'","t45" : "'.$row->t45.'","adsonsl" : "'.$row->adsonsl.'","adsonsr" : "'.$row->adsonsr.'","t56" : "'.$row->t56.'","t67" : "'.$row->t67.'","t78" : "'.$row->t78.'","ulttl" : "'.$row->ulttl.'","ulttr" : "'.$row->ulttr.'","neurologicaltest" : "'.$row->neurologicaltest.'","c5l" : "'.$row->c5l.'","c5r" : "'.$row->c5r.'","c51l" : "'.$row->c51l.'","c51r" : "'.$row->c51r.'","c53l" : "'.$row->c53l.'","c53r" : "'.$row->c53r.'","c6l" : "'.$row->c6l.'","c6r" : "'.$row->c6r.'","c61l" : "'.$row->c61l.'","c61r" : "'.$row->c61r.'","c63l" : "'.$row->c63l.'","c63r" : "'.$row->c63r.'","c7l" : "'.$row->c7l.'","c7r" : "'.$row->c7r.'","c71l" : "'.$row->c71l.'","c71r" : "'.$row->c71r.'","c73l" : "'.$row->c73l.'","c73r" : "'.$row->c73r.'","c8l" : "'.$row->c8l.'","c8r" : "'.$row->c8r.'","c81l" : "'.$row->c81l.'","c81r" : "'.$row->c81r.'","t1l" : "'.$row->t1l.'","t1r" : "'.$row->t1r.'","t11l" : "'.$row->t11l.'","t11r" : "'.$row->t11r.'","sitting" : "'.$row->sitting.'","standing" : "'.$row->standing.'","driving" : "'.$row->driving.'","computeruse" : "'.$row->computeruse.'","otherfunctional" : "'.$row->otherfunctional.'","break_text3" : "'.$row->break_text3.'","assessment" : "'.$row->assessment.'","patientstatus" : "'.$row->patientstatus.'","diagnosis1" : "'.$row->diagnosis1.'","diagnosis2" : "'.$row->diagnosis2.'","diagnosis3" : "'.$row->diagnosis3.'","diagnosis4" : "'.$row->diagnosis4.'","diagnosis5" : "'.$row->diagnosis5.'","diagnosis6" : "'.$row->diagnosis6.'","times" : "'.$row->times.'","week" : "'.$row->week.'","spinal" : "'.$row->spinal.'","chiropractic" : "'.$row->chiropractic.'","physical" : "'.$row->physical.'","orthotics" : "'.$row->orthotics.'","modalities" : "'.$row->modalities.'","supplementation" : "'.$row->supplementation.'","hep" : "'.$row->hep.'","radiographic" : "'.$row->radiographic.'","mri" : "'.$row->mri.'","ctscan" : "'.$row->ctscan.'","nerve" : "'.$row->nerve.'","emg" : "'.$row->emg.'","outside" : "'.$row->outside.'","dc" : "'.$row->dc.'","otheraddress" : "'.$row->otheraddress.'","break_text4" : "'.$row->break_text4.'","sign" : "'.$row->sign.'" "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'cervicalexamedit':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $headposture=$_POST['headposture'];
        $roundshoulder=$_POST['roundshoulder'];
        $ao=$_POST['ao'];
        $allsoft=$_POST['allsoft'];
        $suboccipital=$_POST['suboccipital'];
        $scalenes=$_POST['scalenes'];
        $levator=$_POST['levator'];
        $teresminor=$_POST['teresminor'];
        $teresmajor=$_POST['teresmajor'];
        $rhomboids=$_POST['rhomboids'];
        $trapezius=$_POST['trapezius'];
        $pectoralis=$_POST['pectoralis'];
        $paraspinals=$_POST['paraspinals'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $subluxation=$_POST['subluxation'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $c01=$_POST['c01'];
        $c12=$_POST['c12'];
        $c23=$_POST['c23'];
        $hautantl=$_POST['hautantl'];
        $hautantr=$_POST['hautantr'];
        $extension=$_POST['extension'];
        $c34=$_POST['c34'];
        $c45 =$_POST['c45'];
        $c56=$_POST['c56'];
        $foraminall=$_POST['foraminall'];
        $foraminalr=$_POST['foraminalr'];
        $lflexion=$_POST['lflexion'];
        $rflexion=$_POST['rflexion'];
        $c67=$_POST['c67'];
        $c7t1=$_POST['c7t1'];
        $t12=$_POST['t12'];
        $sotohalll=$_POST['sotohalll'];
        $sotohallr=$_POST['sotohallr'];
        $lrotation=$_POST['lrotation'];
        $rrotation=$_POST['rrotation'];
        $t23=$_POST['t23'];
        $t34=$_POST['t34'];
        $t45=$_POST['t45'];
        $adsonsl=$_POST['adsonsl'];
        $adsonsr=$_POST['adsonsr'];
        $t56=$_POST['t56'];
        $t67=$_POST['t67'];
        $t78=$_POST['t78'];
        $ulttl=$_POST['ulttl'];
        $ulttr=$_POST['ulttr'];
        $neurologicaltest=$_POST['neurologicaltest'];
        $c5l=$_POST['c5l'];
        $c5r=$_POST['c5r'];
        $c51l=$_POST['c51l'];
        $c51r=$_POST['c51r'];
        $c53l=$_POST['c53l'];
        $c53r=$_POST['c53r'];
        $c6l=$_POST['c6l'];
        $c6r=$_POST['c6r'];
        $c61l=$_POST['c61l'];
        $c61r=$_POST['c61r'];
        $c63l=$_POST['c63l'];
        $c63r=$_POST['c63r'];
        $c7l=$_POST['c7l'];
        $c7r=$_POST['c7r'];
        $c71l=$_POST['c71l'];
        $c71r=$_POST['c71r'];
        $c73l=$_POST['c73l'];
        $c73r=$_POST['c73r'];
        $c8l=$_POST['c8l'];
        $c8r=$_POST['c8r'];
        $c81l=$_POST['c81l'];
        $c81r=$_POST['c81r'];
        $t1l=$_POST['t1l'];
        $t1r=$_POST['t1r'];
        $t11l=$_POST['t11l'];
        $t11r=$_POST['t11r'];
        $sitting=$_POST['sitting'];
        $standing=$_POST['standing'];
        $driving=$_POST['driving'];
        $computeruse=$_POST['computeruse'];
        $otherfunctional=$_POST['otherfunctional'];
        $break_text3=$_POST['break_text3'];
        $assessment=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['assessment']);
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $diagnosis6=$_POST['diagnosis6'];
        $times=$_POST['times'];
        $week=$_POST['week'];
        $spinal=$_POST['spinal'];
        $chiropractic=$_POST['chiropractic'];
        $physical=$_POST['physical'];
        $orthotics=$_POST['orthotics'];
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=$_POST['radiographic'];
        $mri=$_POST['mri'];
        $ctscan=$_POST['ctscan'];
        $nerve=$_POST['nerve'];
        $emg=$_POST['emg'];
        $outside=$_POST['outside'];
        $dc=$_POST['dc'];
        $otheraddress=$_POST['otheraddress'];
        $break_text4=$_POST['break_text4'];
        $sign=$_POST['sign'];




//        $user_name="silvi";
//        $pname="silviya";
//        $date="45/87/8745";
//
//        $muscle="muscle";
//        $swelling="swelling";
//        $headposture="headposture";
//        $roundshoulder="roundshoulder";
//        $ao="ao";
//        $allsoft="allsoft";
//        $suboccipital="suboccipital";
//        $scalenes="scalenes";
//        $levator="levator";
//        $teresminor="teresminor";
//        $teresmajor="teresmajor";
//        $rhomboids="rhomboids";
//        $trapezius="trapezius";
//        $pectoralis="pectoralis";
//        $paraspinals="paraspinals";
//        $othernotes="othernotes";
//        $functionalrangeofmotion="functionalrangeofmotion";
//        $subluxation="subluxation";
//        $orthopedic="orthopedic";
//        $flexion="flexion";
//        $c01="c01";
//        $c12="c12";
//        $c23="c23";
//        $hautantl="hautantl";
//        $hautantr="hautantr";
//        $extension="extension";
//        $c34="c34";
//        $c45 ="c45";
//        $c56="c56";
//        $foraminall="foraminall";
//        $foraminalr="foraminalr";
//        $lflexion="lflexion";
//        $rflexion="rflexion";
//        $c67="c67";
//        $c7t1="c7t1";
//        $t12="t12";
//        $sotohalll="sotohalll";
//        $sotohallr="sotohallr";
//        $lrotation="lrotation";
//        $rrotation="rrotation";
//        $t23="t23";
//        $t34="t34";
//        $t45="t45";
//        $adsonsl="adsonsl";
//        $adsonsr="adsonsr";
//        $t56="t56";
//        $t67="t67";
//        $t78="t78";
//        $ulttl="ulttl";
//        $ulttr="ulttr";
//        $neurologicaltest="neurologicaltest";
//        $c5l="c5l";
//        $c5r="c5r";
//        $c51l="c51l";
//        $c51r="c51r";
//        $c53l="c53l";
//        $c53r="c53r";
//        $c6l="c6l";
//        $c6r="c6r";
//        $c61l="c61l";
//        $c61r="c61r";
//        $c63l="c63l";
//        $c63r="c63r";
//        $c7l="c7l";
//        $c7r="c7r";
//        $c71l="c71l";
//        $c71r="c71r";
//        $c73l="c73l";
//        $c73r="c73r";
//        $c8l="c8l";
//        $c8r="c8r";
//        $c81l="c81l";
//        $c81r="c81r";
//        $t1l="t1l";
//        $t1r="t1r";
//        $t11l="t11l";
//        $t11r="t11r";
//        $sitting="sitting";
//        $standing="standing";
//        $driving="driving";
//        $computeruse="computeruse";
//        $otherfunctional="otherfunctional";
//        $break_text3="break_text3";
//        $assessment="assessment";
//        $patientstatus="patientstatus";
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//        $diagnosis6="diagnosis6";
//        $times="times";
//        $week="week";
//        $spinal="spinal";
//        $chiropractic="chiropractic";
//        $physical="physical";
//        $orthotics="orthotics";
//        $modalities="modalities";
//        $supplementation="supplementation";
//        $hep="hep";
//        $radiographic="radiographic";
//        $mri="mri";
//        $ctscan="ctscan";
//        $nerve="nerve";
//        $emg="emg";
//        $outside="outside";
//        $dc="dc";
//        $otheraddress="otheraddress";
//        $break_text4="break_text4";
//        $sign="sign";


        $sql2="update tbl_cervicalexam set pname='".$pname."',date='".$date."',muscle='".$muscle."',swelling='".$swelling."',headposture='".$headposture."',roundshoulder='".$roundshoulder."',ao='".$ao."',allsoft='".$allsoft."',suboccipital='".$suboccipital."',scalenes='".$scalenes."',levator='".$levator."',teresminor='".$teresminor."',teresmajor='".$teresmajor."',rhomboids='".$rhomboids."',trapezius='".$trapezius."',pectoralis='".$pectoralis."',paraspinals='".$paraspinals."',othernotes='".$othernotes."',functionalrangeofmotion='".$functionalrangeofmotion."',subluxation='".$subluxation."',orthopedic='".$orthopedic."',flexion='".$flexion."',c01='".$c01."',c12='".$c12."',c23='".$c23."',hautantl='".$hautantl."',hautantr='".$hautantr."',extension='".$extension."',c34='".$c34."',c45='".$c45."',c56='".$c56."',foraminall='".$foraminall."',foraminalr='".$foraminalr."',lflexion='".$lflexion."',rflexion='".$rflexion."',c67='".$c67."',c7t1='".$c7t1."',t12='".$t12."',sotohalll='".$sotohalll."',sotohallr='".$sotohallr."',lrotation='".$lrotation."',rrotation='".$rrotation."',t23='".$t23."',t34='".$t34."',t45='".$t45."',adsonsl='".$adsonsl."',adsonsr='".$adsonsr."',t56='".$t56."',t67='".$t67."',t78='".$t78."',ulttl='".$ulttl."',ulttr='".$ulttr."',neurologicaltest='".$neurologicaltest."',c5l='".$c5l."',c5r='".$c5r."',c51l='".$c51l."',c51r='".$c51r."',c53l='".$c53l."',c53r='".$c53r."',c6l='".$c6l."',c6r='".$c6r."',c61l='".$c61l."',c61r='".$c61r."',c63l='".$c63l."',c63r='".$c63r."',c7l='".$c7l."',c7r='".$c7r."',c71l='".$c71l."',c71r='".$c71r."',c73l='".$c73l."',c73r='".$c73r."',c8l='".$c8l."',c8r='".$c8r."',c81l='".$c81l."',c81r='".$c81r."',t1l='".$t1l."',t1r='".$t1r."',t11l='".$t11l."',t11r='".$t11r."',sitting='".$sitting."',standing='".$standing."',driving='".$driving."',computeruse='".$computeruse."',otherfunctional='".$otherfunctional."',break_text3='".$break_text3."',assessment='".$assessment."',patientstatus='".$patientstatus."',diagnosis1='".$diagnosis1."',diagnosis2='".$diagnosis2."',diagnosis3='".$diagnosis3."',diagnosis4='".$diagnosis4."',diagnosis5='".$diagnosis5."',diagnosis6='".$diagnosis6."',times='".$times."',week='".$week."',spinal='".$spinal."',chiropractic='".$chiropractic."',physical='".$physical."',orthotics='".$orthotics."',modalities='".$modalities."',supplementation='".$supplementation."',hep='".$hep."',radiographic='".$radiographic."',mri='".$mri."',ctscan='".$ctscan."',nerve='".$nerve."',emg='".$emg."',outside='".$outside."',dc='".$dc."',otheraddress='".$otheraddress."',break_text4='".$break_text4."',sign='".$sign."' WHERE username='".$user_name."'";

        // echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'cervicalexaminsert':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];

        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $headposture=$_POST['headposture'];
        $roundshoulder=$_POST['roundshoulder'];
        $ao=$_POST['ao'];
        $allsoft=$_POST['allsoft'];
        $suboccipital=$_POST['suboccipital'];
        $scalenes=$_POST['scalenes'];
        $levator=$_POST['levator'];
        $teresminor=$_POST['teresminor'];
        $teresmajor=$_POST['teresmajor'];
        $rhomboids=$_POST['rhomboids'];
        $trapezius=$_POST['trapezius'];
        $pectoralis=$_POST['pectoralis'];
        $paraspinals=$_POST['paraspinals'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $subluxation=$_POST['subluxation'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $c01=$_POST['c01'];
        $c12=$_POST['c12'];
        $c23=$_POST['c23'];
        $hautantl=$_POST['hautantl'];
        $hautantr=$_POST['hautantr'];
        $extension=$_POST['extension'];
        $c34=$_POST['c34'];
        $c45 =$_POST['c45'];
        $c56=$_POST['c56'];
        $foraminall=$_POST['foraminall'];
        $foraminalr=$_POST['foraminalr'];
        $lflexion=$_POST['lflexion'];
        $rflexion=$_POST['rflexion'];
        $c67=$_POST['c67'];
        $c7t1=$_POST['c7t1'];
        $t12=$_POST['t12'];
        $sotohalll=$_POST['sotohalll'];
        $sotohallr=$_POST['sotohallr'];
        $lrotation=$_POST['lrotation'];
        $rrotation=$_POST['rrotation'];
        $t23=$_POST['t23'];
        $t34=$_POST['t34'];
        $t45=$_POST['t45'];
        $adsonsl=$_POST['adsonsl'];
        $adsonsr=$_POST['adsonsr'];
        $t56=$_POST['t56'];
        $t67=$_POST['t67'];
        $t78=$_POST['t78'];
        $ulttl=$_POST['ulttl'];
        $ulttr=$_POST['ulttr'];
        $neurologicaltest=$_POST['neurologicaltest'];
        $c5l=$_POST['c5l'];
        $c5r=$_POST['c5r'];
        $c51l=$_POST['c51l'];
        $c51r=$_POST['c51r'];
        $c53l=$_POST['c53l'];
        $c53r=$_POST['c53r'];
        $c6l=$_POST['c6l'];
        $c6r=$_POST['c6r'];
        $c61l=$_POST['c61l'];
        $c61r=$_POST['c61r'];
        $c63l=$_POST['c63l'];
        $c63r=$_POST['c63r'];
        $c7l=$_POST['c7l'];
        $c7r=$_POST['c7r'];
        $c71l=$_POST['c71l'];
        $c71r=$_POST['c71r'];
        $c73l=$_POST['c73l'];
        $c73r=$_POST['c73r'];
        $c8l=$_POST['c8l'];
        $c8r=$_POST['c8r'];
        $c81l=$_POST['c81l'];
        $c81r=$_POST['c81r'];
        $t1l=$_POST['t1l'];
        $t1r=$_POST['t1r'];
        $t11l=$_POST['t11l'];
        $t11r=$_POST['t11r'];
        $sitting=$_POST['sitting'];
        $standing=$_POST['standing'];
        $driving=$_POST['driving'];
        $computeruse=$_POST['computeruse'];
        $otherfunctional=$_POST['otherfunctional'];
        $break_text3=$_POST['break_text3'];
        $assessment=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['assessment']);
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $diagnosis6=$_POST['diagnosis6'];
        $times=$_POST['times'];
        $week=$_POST['week'];
        $spinal=$_POST['spinal'];
        $chiropractic=$_POST['chiropractic'];
        $physical=$_POST['physical'];
        $orthotics=$_POST['orthotics'];
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=$_POST['radiographic'];
        $mri=$_POST['mri'];
        $ctscan=$_POST['ctscan'];
        $nerve=$_POST['nerve'];
        $emg=$_POST['emg'];
        $outside=$_POST['outside'];
        $dc=$_POST['dc'];
        $otheraddress=$_POST['otheraddress'];
        $break_text4=$_POST['break_text4'];
        $sign=$_POST['sign'];



//        $user_name="silvi";
//        $pname="pname";
//        $date="date";
//
//        $muscle="muscle";
//        $swelling="swelling";
//        $headposture="headposture";
//        $roundshoulder="roundshoulder";
//        $ao="ao";
//        $allsoft="allsoft";
//        $suboccipital="suboccipital";
//        $scalenes="scalenes";
//        $levator="levator";
//        $teresminor="teresminor";
//        $teresmajor="teresmajor";
//        $rhomboids="rhomboids";
//        $trapezius="trapezius";
// $pectoralis="pectoralis";
//        $paraspinals="paraspinals";
//        $othernotes="othernotes";
//        $functionalrangeofmotion="functionalrangeofmotion";
//        $subluxation="subluxation";
//        $orthopedic="orthopedic";
//        $flexion="flexion";
//        $c01="c01";
//        $c12="c12";
//        $c23="c23";
//        $hautantl="hautantl";
//        $hautantr="hautantr";
//        $extension="extension";
//        $c34="c34";
//        $c45 ="c45";
//        $c56="c56";
//        $foraminall="foraminall";
//        $foraminalr="foraminalr";
//        $lflexion="lflexion";
//        $rflexion="rflexion";
//        $c67="c67";
//        $c7t1="c7t1";
//        $t12="t12";
//        $sotohalll="sotohalll";
//        $sotohallr="sotohallr";
//        $lrotation="lrotation";
//        $rrotation="rrotation";
//        $t23="t23";
//        $t34="t34";
//        $t45="t45";
//        $adsonsl="adsonsl";
//        $adsonsr="adsonsr";
//        $t56="t56";
//        $t67="t67";
//        $t78="t78";
//        $ulttl="ulttl";
//        $ulttr="ulttr";
//        $neurologicaltest="neurologicaltest";
//        $c5l="c5l";
//        $c5r="c5r";
//        $c51l="c51l";
//        $c51r="c51r";
//        $c53l="c53l";
//        $c53r="c53r";
//        $c6l="c6l";
//        $c6r="c6r";
//        $c61l="c61l";
//        $c61r="c61r";
//        $c63l="c63l";
//        $c63r="c63r";
//        $c7l="c7l";
//        $c7r="c7r";
//        $c71l="c71l";
//        $c71r="c71r";
//        $c73l="c73l";
//        $c73r="c73r";
//        $c8l="c8l";
//        $c8r="c8r";
//        $c81l="c81l";
//        $c81r="c81r";
//        $t1l="t1l";
//        $t1r="t1r";
//        $t11l="t11l";
//        $t11r="t11r";
//        $sitting="sitting";
//        $standing="standing";
//        $driving="driving";
//        $computeruse="computeruse";
//        $otherfunctional="otherfunctional";
//        $break_text3="break_text3";
//        $assessment="assessment";
//        $patientstatus="patientstatus";
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//        $diagnosis6="diagnosis6";
//        $times="times";
//        $week="week";
//        $spinal="spinal";
//        $chiropractic="chiropractic";
//        $physical="physical";
//        $orthotics="orthotics";
//        $modalities="modalities";
//        $supplementation="supplementation";
//        $hep="hep";
//        $radiographic="radiographic";
//        $mri="mri";
//        $ctscan="ctscan";
//        $nerve="nerve";
//        $emg="emg";
//        $outside="outside";
//        $dc="dc";
//        $otheraddress="otheraddress";
//        $break_text4="break_text4";
//        $sign="sign";


        $sql3="INSERT INTO tbl_cervicalexam(cervicalexamid,username,pname,date,muscle,swelling,headposture,roundshoulder,ao,allsoft,suboccipital,scalenes,levator,teresminor,teresmajor,rhomboids,trapezius,pectoralis,paraspinals,othernotes,functionalrangeofmotion,subluxation,orthopedic,flexion,c01,c12,c23,hautantl,hautantr,extension,c34,c45,c56,foraminall,foraminalr,lflexion,rflexion,c67,c7t1,t12,sotohalll,sotohallr,lrotation,rrotation,t23,t34,t45,adsonsl,adsonsr,t56,t67,t78,ulttl,ulttr,neurologicaltest,c5l,c5r,c51l,c51r,c53l,c53r,c6l,c6r,c61l,c61r,c63l,c63r,c7l,c7r,c71l,c71r,c73l,c73r,c8l,c8r,c81l,c81r,t1l,t1r,t11l,t11r,sitting,standing,driving,computeruse,otherfunctional,break_text3,assessment,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,diagnosis6,times,week,spinal,chiropractic,physical,orthotics,modalities,supplementation,hep,radiographic,mri,ctscan,nerve,emg,outside,dc,otheraddress,break_text4,sign) VALUES ('','".$user_name."','".$pname."','".$date."','".$muscle."','".$swelling."','".$headposture."','".$roundshoulder."','".$ao."','".$allsoft."','".$suboccipital."','".$scalenes."','".$levator."','".$teresminor."','".$teresmajor."','".$rhomboids."','".$trapezius."','".$pectoralis."','".$paraspinals."','".$othernotes."','".$functionalrangeofmotion."','".$subluxation."','".$orthopedic."','".$flexion."','".$c01."','".$c12."','".$c23."','".$hautantl."','".$hautantr."','".$extension."','".$c34."','".$c45."','". $c56."','". $foraminall."','". $foraminalr."','". $lflexion."','". $rflexion."','". $c67."','". $c7t1."','". $t12."','". $sotohalll."','". $sotohallr."','". $lrotation."','". $rrotation."','". $t23."','". $t34."','". $t45."','". $adsonsl."','". $adsonsr."','". $t56."','". $t67."','". $t78."','". $ulttl."','". $ulttr."','". $neurologicaltest."','". $c5l."','". $c5r."','". $c51l."','". $c51r."','". $c53l."','". $c53r."','". $c6l."','". $c6r."','". $c61l."','". $c61r."','". $c63l."','". $c63r."','". $c7l."','". $c7r."','". $c71l."','". $c71r."','". $c73l."','". $c73r."','". $c8l."','". $c8r."','". $c81l."','". $c81r."','". $t1l."','". $t1r."','". $t11l."','". $t11r."','". $sitting."','". $standing."','". $driving."','". $computeruse."','". $otherfunctional."','". $break_text3."','". $assessment."','". $patientstatus."','". $diagnosis1."','". $diagnosis2."','". $diagnosis3."','". $diagnosis4."','". $diagnosis5."','". $diagnosis6."','". $times."','". $week."','". $spinal."','". $chiropractic."','". $physical."','". $orthotics."','". $modalities."','". $supplementation."','". $hep."','". $radiographic."','". $mri."','". $ctscan."','". $nerve."','". $emg."','". $outside."','". $dc."','". $otheraddress."','". $break_text4."','". $sign."')";

//        echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'cervicalexamdelete':
    {
          $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete FROM tbl_cervicalexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "cervicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>