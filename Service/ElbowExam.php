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
    case 'elbowexamselect':
    {

       $user_name = $_POST['username'];
     // $user_name="vino";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_elbowexam WHERE username='$user_name'";

        //echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "Yes", "elbowexam List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "Yes", "pname":"'.$row->pname.'","date":"'.$row->date.'","muscle":"'.$row->muscle.'","swelling":"'.$row->swelling.'","dominanthand":"'.$row->dominanthand.'","allsoft":"'.$row->allsoft.'","triceps":"'.$row->triceps.'","biceps":"'.$row->biceps.'","common":"'.$row->common.'","pronator":"'.$row->pronator.'","anconeus":"'.$row->anconeus.'","commonextensors":"'.$row->commonextensors.'","othernotes":"'.$row->othernotes.'","functionalrangeofmotion":"'.$row->functionalrangeofmotion.'","orthopedic":"'.$row->orthopedic.'","flexionl":"'.$row->flexionl.'","flexionr":"'.$row->flexionr.'","mclr":"'.$row->mclr.'","mcll":"'.$row->mcll.'","extensionl":"'.$row->extensionl.'","extensionr":"'.$row->extensionr.'","lcll":"'.$row->lcll.'","lclr":"'.$row->lclr.'","pronationl":"'.$row->pronationl.'","pronationr":"'.$row->pronationr.'","varusl":"'.$row->varusl.'","varusr":"'.$row->varusr.'","circumferential":"'.$row->circumferential.'","suppinationl":"'.$row->suppinationl.'","suppinationr":"'.$row->suppinationr.'","mcl1l":"'.$row->mcl1l.'","mcl1r":"'.$row->mcl1r.'","tinnelsl":"'.$row->tinnelsl.'","tinnelsr":"'.$row->tinnelsr.'","ulttl":"'.$row->ulttl.'","ulttr":"'.$row->ulttr.'","neurologicaltest":"'.$row->neurologicaltest.'","c5l":"'.$row->c5l.'","c5r":"'.$row->c5r.'","c51l":"'.$row->c51l.'","c51r":"'.$row->c51r.'","c53l":"'.$row->c53l.'","c53r":"'.$row->c53r.'","c6l":"'.$row->c6l.'","c6r":"'.$row->c6r.'","c61l":"'.$row->c61l.'","c61r":"'.$row->c61r.'","c63l":"'.$row->c63l.'","c63r":"'.$row->c63r.'","c7l":"'.$row->c7l.'","c7r":"'.$row->c7r.'","c71l":"'.$row->c71l.'","c71r":"'.$row->c71r.'","c73l":"'.$row->c73l.'","c73r":"'.$row->c73r.'","c8l":"'.$row->c8l.'","c8r":"'.$row->c8r.'","c81l":"'.$row->c81l.'","c81r":"'.$row->c81r.'","t1l":"'.$row->t1l.'","t1r":"'.$row->t1r.'","t11l":"'.$row->t11l.'","t11r":"'.$row->t11r.'","overheadactivities":"'.$row->overheadactivities.'","lifting":"'.$row->lifting.'","otherfunctional":"'.$row->otherfunctional.'","break_text3":"'.$row->break_text3.'","assessment":"'.$row->assessment.'","patientstatus":"'.$row->patientstatus.'","diagnosis1":"'.$row->diagnosis1.'","diagnosis2":"'.$row->diagnosis2.'","diagnosis3":"'.$row->diagnosis3.'","diagnosis4":"'.$row->diagnosis4.'","diagnosis5":"'.$row->diagnosis5.'","diagnosis6":"'.$row->diagnosis6.'","times":"'.$row->times.'","week":"'.$row->week.'","spinal":"'.$row->spinal.'","chiropractic":"'.$row->chiropractic.'","physical":"'.$row->physical.'","orthotics":"'.$row->orthotics.'","modalities":"'.$row->modalities.'","supplementation":"'.$row->supplementation.'","hep":"'.$row->hep.'","radiographic":"'.$row->radiographic.'","mri":"'.$row->mri.'","ctscan":"'.$row->ctscan.'","nerve":"'.$row->nerve.'","emg":"'.$row->emg.'","outside":"'.$row->outside.'","dc":"'.$row->dc.'","otheraddress":"'.$row->otheraddress.'","break_text4":"'.$row->break_text4.'","sign":"'.$row->sign.'","message": "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }








    case 'elbowexamedit':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $dominanthand=$_POST['dominanthand'];
        $allsoft=$_POST['allsoft'];
        $biceps=$_POST['biceps'];
        $triceps=$_POST['triceps'];
        $common=$_POST['common'];
        $pronator=$_POST['pronator'];
        $anconeus=$_POST['anconeus'];
        $commonextensors=$_POST['commonextensors'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $orthopedic=$_POST['orthopedic'];
        $flexionl=$_POST['flexionl'];
        $flexionr=$_POST['flexionr'];
        $mcll=$_POST['mcll'];
        $mclr=$_POST['mclr'];
        $extensionl=$_POST['extensionl'];
        $extensionr=$_POST['extensionr'];
        $lcll=$_POST['lcll'];
        $lclr=$_POST['lclr'];
        $pronationl=$_POST['pronationl'];
        $pronationr=$_POST['pronationr'];
        $varusl=$_POST['varusl'];
        $varusr=$_POST['varusr'];
        $circumferential=$_POST['circumferential'];
        $suppinationl=$_POST['suppinationl'];
        $suppinationr=$_POST['suppinationr'];
        $mcl1l=$_POST['mcl1l'];
        $mcl1r=$_POST['mcl1r'];
        $tinnelsl=$_POST['tinnelsl'];
        $tinnelsr=$_POST['tinnelsr'];
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
        $overheadactivities=$_POST['overheadactivities'];
        $lifting=$_POST['lifting'];
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



        /*      $user_name="silvi";
              $pname="asdf";
              $date="asd";
              $muscle="adf";
              $swelling="adf";
              $dominanthand="adf";
              $allsoft="tmni";
              $biceps="asdf";
              $triceps="triceps";
              $common="common";
              $pronator="pronator";
              $anconeus="anconeus";
              $commonextensors="commonextensors";
              $othernotes="tmni";
              $functionalrangeofmotion="tmni";
              $orthopedic="uil";
              $flexionl="uil";
              $flexionr="uil";
              $mcll="uil";
              $extensionl="uil";
              $extensionr="uil";
              // $pclr="uil";
              $pronationl="uil";
              $pronationr="uil";
              $lcll="uil";
              $lclr="uil";
              $varusl="uil";
              $varusr="uil";
              $mclr="uil";
              $suppinationl="pol";
              $suppinationr="pol";
              $mcl1l="pol";
              $mcl1r="pol";
              $tinnelsl="pol";
              $tinnelsr="pol";
              $ulttl="pol";
              $ulttr="pol";

              $neurologicaltest="pol";
              $c5l="hel";
              $c5r="hel";
              $c51l="hel";
              $c51r="hel";
              $c53l="hel";
              $c53r="hel";
              $c6l="hel";
              $c6r="hel";
              $c61l="hel";
              $c61r="hel";
              $c63l="hel";
              $c63r="hel";
              $c7l="hel";
              $c7r="hel";
              $c71l="hel";
              $c71r="hel";
              $c73l="hel";
              $c73r="one";
              $c8l="one";
              $c8r="one";
              $c81l="one";
              $c81r="one";
              $t1l="one";
              $t1r="one";
              $t11l="one";
              $t11r="one";

              $lifting="one";
              $overheadactivities="one";

              $otherfunctional="one";
              $break_text3="one";
              $assessment="one";
              $patientstatus="one";
              $diagnosis1="one";
              $diagnosis2="one";
              $diagnosis3="one";
              $diagnosis4="one";
              $diagnosis5="one";
              $diagnosis6="one";
              $times="one";
              $week="2";
              $spinal="2";
              $chiropractic="2";
              $physical="2";
              $orthotics="2";
              $modalities="2";
              $supplementation="2";
              $hep="2";
              $radiographic="2";
              $mri="2";
              $ctscan="2";
              $nerve="2";
              $emg="2";
              $outside="2";
              $dc="2";
              $otheraddress="2";
              $break_text4="2";
              $sign="2";
              */
        $sql2="update tbl_elbowexam set pname ='".$pname."', date ='".$date."', muscle ='".$muscle."', swelling ='".$swelling."', dominanthand ='".$dominanthand."', allsoft ='".$allsoft."', triceps ='".$triceps."', biceps ='".$biceps."', common ='".$common."', pronator ='".$pronator."', anconeus ='".$anconeus."', commonextensors ='".$commonextensors."', othernotes ='".$othernotes."', functionalrangeofmotion ='".$functionalrangeofmotion."', orthopedic ='".$orthopedic."', flexionl ='".$flexionl."', flexionr ='".$flexionr."', mcll ='".$mcll."', mclr ='".$mclr."', extensionl ='".$extensionl."', extensionr ='".$extensionr."', lcll ='".$lcll."', lclr ='".$lclr."', pronationl ='".$pronationl."', pronationr ='".$pronationr."', varusl ='".$lcll."', lclr ='".$lclr."', varusl ='".$varusl."', varusr ='".$varusr."', suppinationl ='".$suppinationl."', suppinationr ='".$suppinationr."', mcl1l ='".$mcl1l."', mcl1r ='".$mcl1r."', tinnelsl ='".$tinnelsl."', tinnelsr ='".$tinnelsr."', ulttl ='".$ulttl."', ulttr ='".$ulttr."', neurologicaltest ='".$neurologicaltest."', c5l ='".$c5l."', c5r ='".$c5r."', c51l ='".$c51l."', c51r ='".$c51r."', c53l ='".$c53l."', c53r ='".$c53r."', c6l ='".$c6l."', c6r ='".$c6r."', c61l ='".$c61l."', c61r ='".$c61r."', c63l ='".$c63l."', c63r ='".$c63r."', c7l ='".$c7l."', c7r ='".$c7r."', c71l ='".$c71r."', c73l ='".$c73l."', c73r ='".$c73r."', c8l ='".$c8l."',  c81l='".$c81l."', c81r ='".$c81r."', t1l ='".$t1l."', t1r ='".$t1r."', t11l ='".$t11l."', t11r ='".$t11r."',  overheadactivities='".$overheadactivities."', lifting ='".$lifting."', otherfunctional ='".$otherfunctional."', break_text3 ='".$break_text3."', assessment ='".$assessment."', patientstatus ='".$patientstatus."',  diagnosis1 ='".$diagnosis1."', diagnosis2 ='".$diagnosis2."', diagnosis3 ='".$diagnosis3."', diagnosis4 ='".$diagnosis4."', diagnosis5 ='".$diagnosis5."',diagnosis6 ='".$diagnosis6."', times ='".$times."', week ='".$week."', spinal ='".$spinal."', chiropractic ='".$chiropractic."', physical ='".$physical."', orthotics ='".$orthotics."', modalities ='".$modalities."', supplementation ='".$supplementation."', hep ='".$hep."', radiographic ='".$radiographic."', mri ='".$mri."', ctscan ='".$ctscan."', nerve ='".$nerve."', emg ='".$emg."', outside ='".$outside."', dc ='".$dc."', otheraddress ='".$otheraddress."', break_text4 ='".$break_text4."', sign ='".$sign."' WHERE username='".$user_name."'";

        //echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'elbowexaminsert':
    {

       $user_name=$_POST['username'];
      $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $dominanthand=$_POST['dominanthand'];
        $allsoft=$_POST['allsoft'];
        $biceps=$_POST['biceps'];
        $triceps=$_POST['triceps'];
        $common=$_POST['common'];
        $pronator=$_POST['pronator'];
        $anconeus=$_POST['anconeus'];
        $commonextensors=$_POST['commonextensors'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $orthopedic=$_POST['orthopedic'];
        $flexionl=$_POST['flexionl'];
        $flexionr=$_POST['flexionr'];
        $mcll=$_POST['mcll'];
        $mclr=$_POST['mclr'];
        $extensionl=$_POST['extensionl'];
        $extensionr=$_POST['extensionr'];
        $lcll=$_POST['lcll'];
        $lclr=$_POST['lclr'];
        $pronationl=$_POST['pronationl'];
        $pronationr=$_POST['pronationr'];
        $varusl=$_POST['varusl'];
        $varusr=$_POST['varusr'];
        $circumferential=$_POST['circumferential'];
        $suppinationl=$_POST['suppinationl'];
        $suppinationr=$_POST['suppinationr'];
        $mcl1l=$_POST['mcl1l'];
        $mcl1r=$_POST['mcl1r'];
        $tinnelsl=$_POST['tinnelsl'];
        $tinnelsr=$_POST['tinnelsr'];
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
        $overheadactivities=$_POST['overheadactivities'];
        $lifting=$_POST['lifting'];
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





/*
  $user_name="silvi";
                $pname="tmni";
           $date="tmni";
           $muscle="tmni";
           $swelling="tmni";
           $dominanthand="tmni";
           $allsoft="tmni";
           $biceps="tmni";
           $triceps="triceps";
           $common="common";
           $pronator="pronator";
           $anconeus="anconeus";
           $commonextensors="commonextensors";
           $othernotes="tmni";
           $functionalrangeofmotion="tmni";
           $orthopedic="uil";
           $flexionl="uil";
           $flexionr="uil";
           $mcll="uil";
           $extensionl="uil";
           $extensionr="uil";
          // $pclr="uil";
           $pronationl="uil";
           $pronationr="uil";
           $lcll="uil";
           $lclr="uil";
           $varusl="uil";
           $varusr="uil";
           $mclr="uil";
           $suppinationl="pol";
           $suppinationr="pol";
           $mcl1l="pol";
           $mcl1r="pol";
           $tinnelsl="pol";
           $tinnelsr="pol";
           $ulttl="pol";
           $ulttr="pol";

           $neurologicaltest="pol";
           $c5l="hel";
           $c5r="hel";
           $c51l="hel";
           $c51r="hel";
           $c53l="hel";
           $c53r="hel";
           $c6l="hel";
           $c6r="hel";
           $c61l="hel";
           $c61r="hel";
           $c63l="hel";
           $c63r="hel";
           $c7l="hel";
           $c7r="hel";
           $c71l="hel";
           $c71r="hel";
           $c73l="hel";
           $c73r="one";
           $c8l="one";
           $c8r="one";
           $c81l="one";
           $c81r="one";
           $t1l="one";
           $t1r="one";
           $t11l="one";
           $t11r="one";

           $lifting="one";
           $overheadactivities="one";

           $otherfunctional="one";
           $break_text3="one";
           $assessment="one";
           $patientstatus="one";
           $diagnosis1="one";
           $diagnosis2="one";
           $diagnosis3="one";
           $diagnosis4="one";
           $diagnosis5="one";
           $diagnosis6="one";
           $times="one";
           $week="2";
           $spinal="2";
           $chiropractic="2";
           $physical="2";
           $orthotics="2";
           $modalities="2";
           $supplementation="2";
           $hep="2";
           $radiographic="2";
           $mri="2";
           $ctscan="2";
           $nerve="2";
           $emg="2";
           $outside="2";
           $dc="2";
           $otheraddress="2";
           $break_text4="2";
           $sign="2";

*/

        $sql3="INSERT INTO tbl_elbowexam(elbowexamid,username,pname,date,muscle,swelling,dominanthand,allsoft,biceps,triceps,common,pronator,anconeus,commonextensors,othernotes,functionalrangeofmotion,orthopedic,flexionl,flexionr,mcll,mclr,extensionl,extensionr,lcll,lclr,pronationl,pronationr,varusl,varusr,suppinationl,suppinationr,mcl1l,mcl1r,tinnelsl,tinnelsr,ulttl,ulttr,neurologicaltest,c5l,c5r,c51l,c51r,c53l,c53r,c6l,c6r,c61l,c61r,c63l,c63r,c7l,c7r,c71l,c71r,c73l,c73r,c8l,c8r,c81l,c81r,t1l,t1r,t11l,t11r,overheadactivities,lifting,otherfunctional,break_text3,assessment,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,diagnosis6,times,week,spinal,chiropractic,physical,orthotics,modalities,supplementation,hep,radiographic,mri,ctscan,nerve,emg,outside,dc,otheraddress,break_text4,sign) VALUES ('','".$user_name."','".$pname."','".$date."','".$muscle."','".$swelling."','".$dominanthand."','".$allsoft."','".$biceps."','".$triceps."','".$common."','".$pronator."','".$anconeus."','".$commonextensors."','".$othernotes."','".$functionalrangeofmotion."','".$orthopedic."','".$flexionl."','".$flexionr."','".$mcll."','".$mclr."','".$extensionl."','".$extensionr."','".$lcll."','".$lclr."','".$pronationl."','".$pronationr."','".$varusl."','".$varusr."','".$suppinationl."','".$suppinationr."','".$mcl1l."','".$mcl1r."','".$tinnelsl."','".$tinnelsr."','".$ulttl."','".$ulttr."','".$neurologicaltest."','".$c5l."','".$c5r."','".$c51l."','".$c51r."','".$c53l."','".$c53r."','".$c6l."','".$c6r."','".$c61l."','".$c61r."','".$c63l."','".$c63r."','".$c7l."','".$c7r."','".$c71l."','".$c71r."','".$c73l."','".$c73r."','".$c8l."','".$c8r."','".$c81l."','".$c81r."','".$t1l."','".$t1r."','".$t11l."','".$t11r."','".$overheadactivities."','".$lifting."','".$otherfunctional."','".$break_text3."','".$assessment."','".$patientstatus."','".$diagnosis1."','".$diagnosis2."','".$diagnosis3."','".$diagnosis4."','".$diagnosis5."','".$diagnosis6."','".$times."','".$week."','".$spinal."','".$chiropractic."','".$physical."','".$orthotics."','".$modalities."','".$supplementation."','".$hep."','".$radiographic."','".$mri."','".$ctscan."','".$nerve."','".$emg."','".$outside."','".$dc."','".$otheraddress."','".$break_text4."','".$sign."')";

       // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'elbowexamdelete':
    {
        $user_name=$_POST['username'];
// $user_name="silvi";
        $sql4 ="delete from tbl_elbowexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "elbowexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>