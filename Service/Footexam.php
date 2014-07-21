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
    case 'footexamselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM footexam WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "Yes", "footexamuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "Yes", "footexamno" : "'.$row->footexamno.'", "username" : "'.$row->username.'", "pname" : "'.$row->pname.'", "date" : "'.$row->date.'", "gait" : "'.$row->gait.'", "muscle" : "'.$row->muscle.'", "swelling" : "'.$row->swelling.'", "ao" : "'.$row->ao.'", "pronation" : "'.$row->pronation.'", "suspination" : "'.$row->supination.'", "calcaneus" : "'.$row->calcaneus.'", "valgus" : "'.$row->valgus.'", "forefoot" : "'.$row->forefoot.'", "forefootvalgus" : "'.$row->forefootvalgus.'", "dysfunction" : "'.$row->dysfunction.'", "note" : "'.$row->note.'","functional" : "'.$row->functional.'","orthopedic" : "'.$row->orthotpedic.'","plantarflexionleft" : "'.$row->plantarflexionleft.'","plantarflexionright" : "'.$row->plantarflexionright.'","dorsiflexionleft" : "'.$row->dorsiflexionleft.'","dorsiflexionright" : "'.$row->dorsiflexionright.'","inversionleft" : "'.$row->inversionleft.'","inversionright" : "'.$row->inversionright.'","eversionleft" : "'.$row->eversionleft.'","eversionright" : "'.$row->eversionright.'","greattoextensionleft" : "'.$row->greattoeextensionleft.'","greattoextensionright" : "'.$row->greattoeextensionright.'","greattoflexionleft" : "'.$row->greattoeflexionleft.'","greattoflexionright" : "'.$row->greattoeflexionright.'","tinelstapleft" : "'.$row->tinelstapleft.'","tinelstapright" : "'.$row->tinelstapright.'","achillestapleft" : "'.$row->achillestapleft.'","achillestapright" : "'.$row->achillestapright.'","longleft" : "'.$row->longleft.'","longright" : "'.$row->longright.'","thompsonsleft" : "'.$row->thompsonsleft.'","thompsonsright" : "'.$row->thompsonsright.'","drawerleft" : "'.$row->drawerleft.'","drawerright" : "'.$row->drawerright.'","lateralleft" : "'.$row->lateralleft.'","lateralright" : "'.$row->lateralright.'","medialstabilityleft" : "'.$row->medialstabilityleft.'","medialstabilityright" : "'.$row->medialstabilityright.'","neurological" : "'.$row->neurological.'","inguinalarealeft" : "'.$row->inguinalarealeft.'","inguinalarearight" : "'.$row->inguinalarearight.'","antleft" : "'.$row->antleft.'","antright" : "'.$row->antright.'","kneeleft" : "'.$row->kneeleft.'","kneeright" : "'.$row->kneeright.'","medialleft" : "'.$row->medialleft.'","medialright" : "'.$row->medialright.'","latleft" : "'.$row->latleft.'","latright" : "'.$row->latright.'","plantarleft" : "'.$row->plantarleft.'","plantarright" : "'.$row->plantarright.'","iliopsoasfirstleft" : "'.$row->iliopsoasfirstleft.'","iliopsoasfirstright" : "'.$row->iliopsoasfirstright.'","iliopsoas1left" : "'.$row->iliopsoas1left.'","iliopsoas1right" : "'.$row->iliopsoas1right.'","kneeextensionleft" : "'.$row->kneeextensionleft.'","kneeextensionright" : "'.$row->kneeextensionright.'","kneeflexionleft" : "'.$row->kneeflexionleft.'","kneeflexionright" : "'.$row->kneeflexionright.'","dorsiflexionleft1" : "'.$row->dorsiflexionleft1.'","dorsiflexionright1" : "'.$row->dorsiflexionright1.'","pfleft" : "'.$row->pfleft.'","pfright" : "'.$row->pfright.'","patellarleft" : "'.$row->patellarleft.'","patellarright" : "'.$row->patellarright.'","hsleft" : "'.$row->hsleft.'","hsright" : "'.$row->hsright.'","achillesleft" : "'.$row->achillesleft.'","achillesright" : "'.$row->achillesright.'","walking" : "'.$row->walking.'","standing" : "'.$row->standing.'","stairs" : "'.$row->stairs.'","other" : "'.$row->other.'","otherdefict" : "'.$row->otherdefict.'","comments" : "'.$row->comments.'","patientstatus" : "'.$row->patientstatus.'","diagnosis1" : "'.$row->diagnosis1.'","diagnosis2" : "'.$row->diagnosis2.'","diagnosis3" : "'.$row->diagnosis3.'","diagnosis4" : "'.$row->diagnosis4.'","diagnosis5" : "'.$row->diagnosis5.'","times" : "'.$row->times.'","weeks" : "'.$row->weeks.'","spinaldecompression" : "'.$row->spinaldecompression.'","chiropractic" : "'.$row->chiropractic.'","physicaltherapy" : "'.$row->physicaltherapy.'","bracing" : "'.$row->bracing.'","modalities" : "'.$row->modalities.'","supplementation" : "'.$row->supplementation.'","hep" : "'.$row->hep.'","radiographic" : "'.$row->radiographic.'","mri" : "'.$row->mri.'","scan" : "'.$row->scan.'","conduction" : "'.$row->conduction.'","emg" : "'.$row->emg.'","outsidereferral" : "'.$row->outsidereferral.'","dc" : "'.$row->dc.'","others" : "'.$row->others.'","othervalue" : "'.$row->othervalue.'","signature" : "'.$row->signature.'","message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'footexamedit':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $ao=$_POST['ao'];
        $pronation=$_POST['pronation'];
        $suspination=$_POST['suspination'];
        $calcaneus=$_POST['calcaneus'];
        $valgus=$_POST['valgus'];
        $forefoot=$_POST['forefoot'];
        $forefootvalgus=$_POST['forefootvalgus'];
        $dysfunction=$_POST['dysfunction'];
        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthopedic=$_POST['orthopedic'];
        $plantarflexionleft=$_POST['plantarflexionleft'];
        $plantarflexionright=$_POST['plantarflexionright'];
        $dorsiflexionleft=$_POST['dorsiflexionleft'];
        $dorsiflexionright=$_POST['dorsiflexionright'];
        $inversionleft=$_POST['inversionleft'];
        $inversionright=$_POST['inversionright'];
        $eversionleft=$_POST['eversionleft'];
        $eversionright=$_POST['eversionright'];
        $greattoextensionleft=$_POST['greattoextensionleft'];
        $greattoextensionright=$_POST['greattoextensionright'];
        $greattoflexionleft=$_POST['greattoflexionleft'];
        $greattoflexionright=$_POST['greattoflexionright'];
        $tinelstapleft =$_POST['tinelstapleft'];
        $tinelstapright=$_POST['tinelstapright'];
        $achillestapleft=$_POST['achillestapleft'];
        $achillestapright=$_POST['achillestapright'];
        $longleft=$_POST['longleft'];
        $longright=$_POST['longright'];
        $thompsonleft=$_POST['thompsonleft'];
        $thompsonright=$_POST['thompsonright'];
        $drawerleft=$_POST['drawerleft'];
        $drawerright=$_POST['drawerright'];
        $lateralleft=$_POST['lateralleft'];
        $lateralright=$_POST['lateralright'];
        $medicalstabilityleft=$_POST['medicalstabilityleft'];
        $medicalstabilityright=$_POST['medicalstabilityright'];
        $neurological=$_POST['neurological'];
        $inguinalarealeft=$_POST['inguinalarealeft'];
        $inguinalarearight=$_POST['inguinalarearight'];
        $antleft=$_POST['antleft'];
        $antright=$_POST['antright'];
        $kneeleft=$_POST['kneeleft'];
        $kneeright=$_POST['kneeright'];
        $medialleft=$_POST['medialleft'];
        $medialright=$_POST['medialright'];
        $latleft=$_POST['latleft'];
        $latright=$_POST['latright'];
        $plantarleft=$_POST['plantarleft'];
        $plantarright=$_POST['plantarright'];
        $iliopsoasfirstleft=$_POST['iliopsoasfirstleft'];
        $iliopsoasfirstright=$_POST['iliopsoasfirstright'];
        $iliopsoas1left=$_POST['iliopsoas1left'];
        $iliopsoas1right=$_POST['iliopsoas1right'];
        $kneeextensionleft=$_POST['kneeextensionleft'];
        $kneeextensionright=$_POST['kneeextensionright'];
        $kneeflexionleft=$_POST['kneeflexionleft'];
        $kneeflexionright=$_POST['kneeflexionright'];
        $dorsiflexionleft1=$_POST['dorsiflexionleft1'];
        $dorsiflexionright1=$_POST['dorsiflexionright1'];
        $pfleft=$_POST['pfleft'];
        $pfright=$_POST['pfright'];
        $patellarleft=$_POST['patellarleft'];
        $patellarright=$_POST['patellarright'];
        $hsleft=$_POST['hsleft'];
        $hsright=$_POST['hsright'];
        $achillesleft=$_POST['achillesleft'];
        $achillesright=$_POST['achillesright'];
        $walking=$_POST['walking'];
        $standing=$_POST['standing'];
        $stairs=$_POST['stairs'];
        $other=$_POST['other'];
        $otherdefict=$_POST['otherdefict'];
        $comments=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments']);
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $times=$_POST['times'];
        $weeks=$_POST['weeks'];
        $spinaldecompression=$_POST['spinaldecompression'];
        $chiropractic=$_POST['chiropractic'];
        $physicaltherapy=$_POST['physicaltherapy'];
        $bracing=addslashes($_POST['bracing']);
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=addslashes($_POST['radiographic']);
        $mri=$_POST['mri'];
        $scan=$_POST['scan'];
        $conduction=$_POST['conduction'];
        $emg=$_POST['emg'];
        $outsidereferral=$_POST['outsidereferral'];
        $dc=addslashes($_POST['dc']);
        $others=$_POST['others'];
        $othervalue=$_POST['othervalue'];
        $signature=$_POST['signature'];




//        $user_name="silvi";
//        $pname="silviya";
//        $date="45/87/8745";
//        $gait="gait";
//        $muscle="muscle";
//        $swelling="swelling";
//        $ao="ao";
//        $pronation="pronation";
//        $suspination="suspination";
//        $calcaneus="calcaneus";
//        $valgus="valgus";
//        $forefoot="forefoot";
//        $forefootvalgus="forefootvalgus";
//        $dysfunction="dysfunction";
//        $note="note";
//        $functional="functional";
//        $orthopedic="orthopedic";
//        $plantarflexionleft="plantarflexionleft";
//        $plantarflexionright="plantarflexionright";
//        $dorsiflexionleft="dorsiflexionleft";
//        $dorsiflexionright="dorsiflexionright";
//        $inversionleft="inversionleft";
//        $inversionright="inversionright";
//        $eversionleft="eversionleft";
//        $eversionright="eversionright";
//        $greattoextensionleft="greattoextensionleft";
//        $greattoextensionright="greattoextensionright";
//        $greattoflexionleft="greattoflexionleft";
//        $greattoflexionright="greattoflexionright";
//        $tinelstapleft ="tinelstapleft";
//        $tinelstapright="tinelstapright";
//        $achillestapleft="achillestapleft";
//        $achillestapright="achillestapright";
//        $longleft="longleft";
//        $longright="longright";
//        $thompsonleft="thompsonleft";
//        $thompsonright="thompsonright";
//        $drawerleft="drawerleft";
//        $drawerright="drawerright";
//        $lateralleft="lateralleft";
//        $lateralright="lateralright";
//        $medicalstabilityleft="medicalstabilityleft";
//        $medicalstabilityright="medicalstabilityright";
//        $neurological="neurological";
//        $inguinalarealeft="inguinalarealeft";
//        $inguinalarearight="inguinalarearight";
//        $antleft="antleft";
//        $antright="antright";
//        $kneeleft="kneeleft";
//        $kneeright="kneeright";
//        $medialleft="medialleft";
//        $medialright="medialright";
//        $latleft="latleft";
//        $latright="latright";
//        $plantarleft="plantarleft";
//        $plantarright="plantarright";
//        $iliopsoasfirstleft="iliopsoasfirstleft";
//        $iliopsoasfirstright="iliopsoasfirstright";
//        $iliopsoas1left="iliopsoas1left";
//        $iliopsoas1right="iliopsoas1right";
//        $kneeextensionleft="kneeextensionleft";
//        $kneeextensionright="kneeextensionright";
//        $kneeflexionleft="kneeflexionleft";
//        $kneeflexionright="kneeflexionright";
//        $dorsiflexionleft1="dorsiflexionleft1";
//        $dorsiflexionright1="dorsiflexionright1";
//        $pfleft="pfleft";
//        $pfright="pfright";
//        $patellarleft="patellarleft";
//        $patellarright="patellarright";
//        $hsleft="hsleft";
//        $hsright="hsright";
//        $achillesleft="achillesleft";
//        $achillesright="achillesright";
//        $walking="walking";
//        $standing="standing";
//        $stairs="stairs";
//        $other="other";
//        $otherdefict="otherdefict";
//        $comments="comments";
//        $patientstatus="patientstatus";
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//        $times="times";
//        $weeks="weeks";
//        $spinaldecompression="spinaldecompression";
//        $chiropractic="chiropractic";
//        $physicaltherapy="physicaltherapy";
//        $bracing="bracing";
//        $modalities="modalities";
//        $supplementation="supplementation";
//        $hep="hep";
//        $radiographic="radiographic";
//        $mri="mri";
//        $scan="scan";
//        $conduction="conduction";
//        $emg="emg";
//        $outsidereferral="outsidereferral";
//        $dc="dc";
//        $others="others";
//        $othervalue="othervalue";
//        $signature="signature";


        $sql2="update footexam set pname='".$pname."',date='".$date."',gait='".$gait."',muscle='".$muscle."',swelling='".$swelling."',ao='".$ao."',pronation='".$pronation."',supination='".$suspination."',calcaneus='".$calcaneus."',valgus='".$valgus."',forefoot='".$forefoot."',forefootvalgus='".$forefootvalgus."',dysfunction='".$dysfunction."',note='".$note."',functional='".$functional."',orthotpedic='".$orthopedic."',plantarflexionleft='".$plantarflexionleft."',plantarflexionright='".$plantarflexionright."',dorsiflexionleft='".$dorsiflexionleft."',dorsiflexionright='".$dorsiflexionright."',inversionleft='".$inversionleft."',inversionright='".$inversionright."',eversionleft='".$eversionleft."',eversionright='".$eversionright."',greattoeextensionleft='".$greattoextensionleft."',greattoeextensionright='".$greattoextensionright."',greattoeflexionleft='".$greattoflexionleft."',greattoeflexionright='".$greattoflexionright."',tinelstapleft='".$tinelstapleft."',tinelstapright='".$tinelstapright."',achillestapleft='".$achillestapleft."',achillestapright='".$achillestapright."',longleft='".$longleft."',longright='".$longright."',thompsonsleft='".$thompsonleft."',thompsonsright='".$thompsonright."',drawerleft='".$drawerleft."',drawerright='".$drawerright."',lateralleft='".$lateralleft."',lateralright='".$lateralright."',medialstabilityleft='".$medicalstabilityleft."',medialstabilityright='".$medicalstabilityright."',neurological='".$neurological."',inguinalarealeft='".$inguinalarealeft."',inguinalarearight='".$inguinalarearight."',antleft='".$antleft."',antright='".$antright."',kneeleft='".$kneeleft."',kneeright='".$kneeright."',medialleft='".$medialleft."',medialright='".$medialright."',latleft='".$latleft."',latright='".$latright."',plantarleft='".$plantarleft."',plantarright='".$plantarright."',iliopsoasfirstleft='".$iliopsoasfirstleft."',iliopsoasfirstright='".$iliopsoasfirstright."',iliopsoas1left='".$iliopsoas1left."',iliopsoas1right='".$iliopsoas1right."',kneeextensionleft='".$kneeextensionleft."',kneeextensionright='".$kneeextensionright."',kneeflexionleft='".$kneeflexionleft."',kneeflexionright='".$kneeflexionright."',dorsiflexionleft1='".$dorsiflexionleft1."',dorsiflexionright1='".$dorsiflexionright1."',pfleft='".$pfleft."',pfright='".$pfright."',patellarleft='".$patellarleft."',patellarright='".$patellarright."',hsleft='".$hsleft."',hsright='".$hsright."',achillesleft='".$achillesleft."',achillesright='".$achillesright."',walking='".$walking."',standing='".$standing."',stairs='".$stairs."',other='".$other."',otherdefict='".$otherdefict."',comments='".$comments."',patientstatus='".$patientstatus."',diagnosis1='".$diagnosis1."',diagnosis2='".$diagnosis2."',diagnosis3='".$diagnosis3."',diagnosis4='".$diagnosis4."',diagnosis5='".$diagnosis5."',times='".$times."',weeks='".$weeks."',spinaldecompression='".$spinaldecompression."',chiropractic='".$chiropractic."',physicaltherapy='".$physicaltherapy."',bracing='".$bracing."',modalities='".$modalities."',supplementation='".$supplementation."',hep='".$hep."',radiographic='".$radiographic."',mri='".$mri."',scan='".$scan."',conduction='".$conduction."',emg='".$emg."',outsidereferral='".$outsidereferral."',dc='".$dc."',others='".$others."',othervalue='".$othervalue."',signature='".$signature."' WHERE username='".$user_name."'";

       // echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'footexaminsert':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $ao=$_POST['ao'];
        $pronation=$_POST['pronation'];
        $suspination=$_POST['suspination'];
        $calcaneus=$_POST['calcaneus'];
        $valgus=$_POST['valgus'];
        $forefoot=$_POST['forefoot'];
        $forefootvalgus=$_POST['forefootvalgus'];
        $dysfunction=$_POST['dysfunction'];
        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthopedic=$_POST['orthopedic'];
        $plantarflexionleft=$_POST['plantarflexionleft'];
        $plantarflexionright=$_POST['plantarflexionright'];
        $dorsiflexionleft=$_POST['dorsiflexionleft'];
        $dorsiflexionright=$_POST['dorsiflexionright'];
        $inversionleft=$_POST['inversionleft'];
        $inversionright=$_POST['inversionright'];
        $eversionleft=$_POST['eversionleft'];
        $eversionright=$_POST['eversionright'];
        $greattoextensionleft=$_POST['greattoextensionleft'];
        $greattoextensionright=$_POST['greattoextensionright'];
        $greattoflexionleft=$_POST['greattoflexionleft'];
        $greattoflexionright=$_POST['greattoflexionright'];
        $tinelstapleft =$_POST['tinelstapleft'];
        $tinelstapright=$_POST['tinelstapright'];
        $achillestapleft=$_POST['achillestapleft'];
        $achillestapright=$_POST['achillestapright'];
        $longleft=$_POST['longleft'];
        $longright=$_POST['longright'];
        $thompsonleft=$_POST['thompsonleft'];
        $thompsonright=$_POST['thompsonright'];
        $drawerleft=$_POST['drawerleft'];
        $drawerright=$_POST['drawerright'];
        $lateralleft=$_POST['lateralleft'];
        $lateralright=$_POST['lateralright'];
        $medicalstabilityleft=$_POST['medicalstabilityleft'];
        $medicalstabilityright=$_POST['medicalstabilityright'];
        $neurological=$_POST['neurological'];
        $inguinalarealeft=$_POST['inguinalarealeft'];
        $inguinalarearight=$_POST['inguinalarearight'];
        $antleft=$_POST['antleft'];
        $antright=$_POST['antright'];
        $kneeleft=$_POST['kneeleft'];
        $kneeright=$_POST['kneeright'];
        $medialleft=$_POST['medialleft'];
        $medialright=$_POST['medialright'];
        $latleft=$_POST['latleft'];
        $latright=$_POST['latright'];
        $plantarleft=$_POST['plantarleft'];
        $plantarright=$_POST['plantarright'];
        $iliopsoasfirstleft=$_POST['iliopsoasfirstleft'];
        $iliopsoasfirstright=$_POST['iliopsoasfirstright'];
        $iliopsoas1left=$_POST['iliopsoas1left'];
        $iliopsoas1right=$_POST['iliopsoas1right'];
        $kneeextensionleft=$_POST['kneeextensionleft'];
        $kneeextensionright=$_POST['kneeextensionright'];
        $kneeflexionleft=$_POST['kneeflexionleft'];
        $kneeflexionright=$_POST['kneeflexionright'];
        $dorsiflexionleft1=$_POST['dorsiflexionleft1'];
        $dorsiflexionright1=$_POST['dorsiflexionright1'];
        $pfleft=$_POST['pfleft'];
        $pfright=$_POST['pfright'];
        $patellarleft=$_POST['patellarleft'];
        $patellarright=$_POST['patellarright'];
        $hsleft=$_POST['hsleft'];
        $hsright=$_POST['hsright'];
        $achillesleft=$_POST['achillesleft'];
        $achillesright=$_POST['achillesright'];
        $walking=$_POST['walking'];
        $standing=$_POST['standing'];
        $stairs=$_POST['stairs'];
        $other=$_POST['other'];
        $otherdefict=$_POST['otherdefict'];
        $comments=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments']);
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $times=$_POST['times'];
        $weeks=$_POST['weeks'];
        $spinaldecompression=$_POST['spinaldecompression'];
        $chiropractic=$_POST['chiropractic'];
        $physicaltherapy=$_POST['physicaltherapy'];
        $bracing=addslashes($_POST['bracing']);
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=addslashes($_POST['radiographic']);
        $mri=$_POST['mri'];
        $scan=$_POST['scan'];
        $conduction=$_POST['conduction'];
        $emg=$_POST['emg'];
        $outsidereferral=$_POST['outsidereferral'];
        $dc=addslashes($_POST['dc']);
        $others=$_POST['others'];
        $othervalue=$_POST['othervalue'];
        $signature=$_POST['signature'];



//        $user_name="username";
//        $pname="pname";
//        $date="date";
//        $gait="gait";
//        $muscle="muscle";
//        $swelling="swelling";
//        $ao="ao";
//        $pronation="pronation";
//        $suspination="suspination";
//        $calcaneus="calcaneus";
//        $valgus="valgus";
//        $forefoot="forefoot";
//        $forefootvalgus="forefootvalgus";
//        $dysfunction="dysfunction";
//        $note="note";
// $functional="functional";
//        $orthopedic="orthopedic";
//        $plantarflexionleft="plantarflexionleft";
//        $plantarflexionright="plantarflexionright";
//        $dorsiflexionleft="dorsiflexionleft";
//        $dorsiflexionright="dorsiflexionright";
//        $inversionleft="inversionleft";
//        $inversionright="inversionright";
//        $eversionleft="eversionleft";
//        $eversionright="eversionright";
//        $greattoextensionleft="greattoextensionleft";
//        $greattoextensionright="greattoextensionright";
//        $greattoflexionleft="greattoflexionleft";
//        $greattoflexionright="greattoflexionright";
//        $tinelstapleft ="tinelstapleft";
//        $tinelstapright="tinelstapright";
//        $achillestapleft="achillestapleft";
//        $achillestapright="achillestapright";
//        $longleft="longleft";
//        $longright="longright";
//        $thompsonleft="thompsonleft";
//        $thompsonright="thompsonright";
//        $drawerleft="drawerleft";
//        $drawerright="drawerright";
//        $lateralleft="lateralleft";
//        $lateralright="lateralright";
//        $medicalstabilityleft="medicalstabilityleft";
//        $medicalstabilityright="medicalstabilityright";
//        $neurological="neurological";
//        $inguinalarealeft="inguinalarealeft";
//        $inguinalarearight="inguinalarearight";
//        $antleft="antleft";
//        $antright="antright";
//        $kneeleft="kneeleft";
//        $kneeright="kneeright";
//        $medialleft="medialleft";
//        $medialright="medialright";
//        $latleft="latleft";
//        $latright="latright";
//        $plantarleft="plantarleft";
//        $plantarright="plantarright";
//        $iliopsoasfirstleft="iliopsoasfirstleft";
//        $iliopsoasfirstright="iliopsoasfirstright";
//        $iliopsoas1left="iliopsoas1left";
//        $iliopsoas1right="iliopsoas1right";
//        $kneeextensionleft="kneeextensionleft";
//        $kneeextensionright="kneeextensionright";
//        $kneeflexionleft="kneeflexionleft";
//        $kneeflexionright="kneeflexionright";
//        $dorsiflexionleft1="dorsiflexionleft1";
//        $dorsiflexionright1="dorsiflexionright1";
//        $pfleft="pfleft";
//        $pfright="pfright";
//        $patellarleft="patellarleft";
//        $patellarright="patellarright";
//        $hsleft="hsleft";
//        $hsright="hsright";
//        $achillesleft="achillesleft";
//        $achillesright="achillesright";
//        $walking="walking";
//        $standing="standing";
//        $stairs="stairs";
//        $other="other";
//        $otherdefict="otherdefict";
//        $comments="comments";
//        $patientstatus="patientstatus";
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//        $times="times";
//        $weeks="weeks";
//        $spinaldecompression="spinaldecompression";
//        $chiropractic="chiropractic";
//        $physicaltherapy="physicaltherapy";
//        $bracing="bracing";
//        $modalities="modalities";
//        $supplementation="supplementation";
//        $hep="hep";
//        $radiographic="radiographic";
//        $mri="mri";
//        $scan="scan";
//        $conduction="conduction";
//        $emg="emg";
//        $outsidereferral="outsidereferral";
//        $dc="dc";
//        $others="others";
//        $othervalue="othervalue";
//        $signature="signature";


        $sql3="INSERT INTO footexam(footexamno,username,pname,date,gait,muscle,swelling,ao,pronation,supination,calcaneus,valgus,forefoot,forefootvalgus,dysfunction,note,functional,orthotpedic,plantarflexionleft,plantarflexionright,dorsiflexionleft,dorsiflexionright,inversionleft,inversionright,eversionleft,eversionright,greattoeextensionleft,greattoeextensionright,greattoeflexionleft,greattoeflexionright,tinelstapleft,tinelstapright,achillestapleft,achillestapright,longleft,longright,thompsonsleft,thompsonsright,drawerleft,drawerright,lateralleft,lateralright,medialstabilityleft,medialstabilityright,neurological,inguinalarealeft,inguinalarearight,antleft,antright,kneeleft,kneeright,medialleft,medialright,latleft,latright,plantarleft,plantarright,iliopsoasfirstleft,iliopsoasfirstright,iliopsoas1left,iliopsoas1right,kneeextensionleft,kneeextensionright,kneeflexionleft,kneeflexionright,dorsiflexionleft1,dorsiflexionright1,pfleft,pfright,patellarleft,patellarright,hsleft,hsright,achillesleft,achillesright,walking,standing,stairs,other,otherdefict,comments,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,times,weeks,spinaldecompression,chiropractic,physicaltherapy,bracing,modalities,supplementation,hep,radiographic,mri,scan,conduction,emg,outsidereferral,dc,others,othervalue,signature) VALUES ('','".$user_name."','".$pname."','".$date."','".$gait."','".$muscle."','".$swelling."','".$ao."','".$pronation."','".$suspination."','".$calcaneus."','".$valgus."','".$forefoot."','".$forefootvalgus."','".$dysfunction."','".$note."','".$functional."','".$orthopedic."','".$plantarflexionleft."','".$plantarflexionright."','".$dorsiflexionleft."','".$dorsiflexionright."','".$inversionleft."','".$inversionright."','".$eversionleft."','".$eversionright."','".$greattoextensionleft."','".$greattoextensionright."','".$greattoflexionleft."','".$greattoflexionright."','".$tinelstapleft."','". $tinelstapright."','". $achillestapleft."','". $achillestapright."','". $longleft."','". $longright."','". $thompsonleft."','". $thompsonright."','". $drawerleft."','". $drawerright."','". $lateralleft."','". $lateralright."','". $medicalstabilityleft."','". $medicalstabilityright."','". $neurological."','". $inguinalarealeft."','". $inguinalarearight."','". $antleft."','". $antright."','". $kneeleft."','". $kneeright."','". $medialleft."','". $medialright."','". $latleft."','". $latright."','". $plantarleft."','". $plantarright."','". $iliopsoasfirstleft."','". $iliopsoasfirstright."','". $iliopsoas1left."','". $iliopsoas1right."','". $kneeextensionleft."','". $kneeextensionright."','". $kneeflexionleft."','". $kneeflexionright."','". $dorsiflexionleft1."','". $dorsiflexionright1."','". $pfleft."','". $pfright."','". $patellarleft."','". $patellarright."','". $hsleft."','". $hsright."','". $achillesleft."','". $achillesright."','". $walking."','". $standing."','". $stairs."','". $other."','". $otherdefict."','". $comments."','". $patientstatus."','". $diagnosis1."','". $diagnosis2."','". $diagnosis3."','". $diagnosis4."','". $diagnosis5."','". $times."','". $weeks."','". $spinaldecompression."','". $chiropractic."','". $physicaltherapy."','". $bracing."','". $modalities."','". $supplementation."','". $hep."','". $radiographic."','". $mri."','". $scan."','". $conduction."','". $emg."','". $outsidereferral."','". $dc."','". $others."','". $othervalue."','". $signature."')";

//        echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'footexamdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from footexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "footexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>