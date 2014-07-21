<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05/05/14
 * Time: 6:43 PM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'shoulderexamselect':
    {

        $user_name = $_POST['username'];
        //$user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM shoulderexam WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "Yes", "shoulderexamuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "Yes", "shoulderexamno" : "'.$row->shoulderexamno.'", "username" : "'.$row->username.'", "pname" : "'.$row->pname.'", "date" : "'.$row->date.'",  "muscle" : "'.$row->muscle.'", "swelling" : "'.$row->swelling.'", "ao" : "'.$row->ao.'", "dysfunction" : "'.$row->dysfunction.'", "pectoralisminor" : "'.$row->pectoralisminor.'", "supraspinatus" : "'.$row->supraspinatus.'", "infraspinatus" : "'.$row->infraspinatus.'", "serratusant" : "'.$row->serratusant.'","teresminor" : "'.$row->teresminor.'", "teresmajor" : "'.$row->teresmajor.'", "rhomboids" : "'.$row->rhomboids.'", "trapezius" : "'.$row->trapezius.'","note" : "'.$row->note.'","functional" : "'.$row->functional.'","orthopedic" : "'.$row->orthotpedic.'","flexionleft" : "'.$row->flexionleft.'","flexionright" : "'.$row->flexionright.'","extensionleft" : "'.$row->extensionleft.'","extensionright" : "'.$row->extensionright.'","abductionleft" : "'.$row->abductionleft.'","abductionright" : "'.$row->abductionright.'","adductionleft" : "'.$row->adductionleft.'","adductionright" : "'.$row->adductionright.'","internalrotationleft" : "'.$row->internalrotationleft.'","internalrotationright" : "'.$row->internalrotationright.'","externalrotationleft" : "'.$row->externalrotationleft.'","externalrotationright" : "'.$row->externalrotationright.'","emptycanleft" : "'.$row->emptycanleft.'","emptycanright" : "'.$row->emptycanright.'","impingementsignleft" : "'.$row->impingementsignleft.'","impingementsignright" : "'.$row->impingementsignright.'","apleysscratchleft" : "'.$row->apleysscratchleft.'","apleysscratchright" : "'.$row->apleysscratchright.'","subacrominalpushleft" : "'.$row->subacrominalpushleft.'","subacrominalpushright" : "'.$row->subacrominalpushright.'","dawbarnsleft" : "'.$row->dawbarnsleft.'","dawbarnsright" : "'.$row->dawbarnsright.'","yergasonsleft" : "'.$row->yergasonsleft.'","yergasonsright" : "'.$row->yergasonsright.'","codmansleft" : "'.$row->codmansleft.'","codmansright" : "'.$row->codmansright.'","apprehensionleft" : "'.$row->apprehensionleft.'","apprehensionright" : "'.$row->apprehensionright.'","neurological" : "'.$row->neurological.'","latdeltoidleft" : "'.$row->latdeltoidleft.'","latdeltoidright" : "'.$row->latdeltoidright.'","latarmleft" : "'.$row->latarmleft.'","latarmright" : "'.$row->latarmright.'","thirdleft" : "'.$row->thirdleft.'","thirdright" : "'.$row->thirdright.'","medforearmleft" : "'.$row->medforearmleft.'","medforearmright" : "'.$row->medforearmright.'","medelbowleft" : "'.$row->medelbowleft.'","medelbowright" : "'.$row->medelbowright.'","shdleft" : "'.$row->shdleft.'","shdright" : "'.$row->shdright.'","elbflexleft" : "'.$row->elbflexleft.'","elbflexright" : "'.$row->elbflexright.'","elbextleft" : "'.$row->elbextleft.'","elbextright" : "'.$row->elbextright.'","digitflexionleft" : "'.$row->digitflexionleft.'","digitflexionright" : "'.$row->digitflexionright.'","digitabdleft" : "'.$row->digitabdleft.'","digitabdright" : "'.$row->digitabdright.'","bicepsleft" : "'.$row->bicepsleft.'","bicepsright" : "'.$row->bicepsright.'","brachioradleft" : "'.$row->brachioradleft.'","brachioradright" : "'.$row->brachioradright.'","tricepsleft" : "'.$row->tricepsleft.'","tricepsright" : "'.$row->tricepsright.'","overhead" : "'.$row->overhead.'","lifting" : "'.$row->lifting.'","other" : "'.$row->other.'","otherdefict" : "'.$row->otherdefict.'","comments" : "'.$row->comments.'","patientstatus" : "'.$row->patientstatus.'","diagnosis1" : "'.$row->diagnosis1.'","diagnosis2" : "'.$row->diagnosis2.'","diagnosis3" : "'.$row->diagnosis3.'","diagnosis4" : "'.$row->diagnosis4.'","diagnosis5" : "'.$row->diagnosis5.'","times" : "'.$row->times.'","weeks" : "'.$row->weeks.'","spinaldecompression" : "'.$row->spinaldecompression.'","chiropractic" : "'.$row->chiropractic.'","physicaltherapy" : "'.$row->physicaltherapy.'","bracing" : "'.$row->bracing.'","modalities" : "'.$row->modalities.'","supplementation" : "'.$row->supplementation.'","hep" : "'.$row->hep.'","radiographic" : "'.$row->radiographic.'","mri" : "'.$row->mri.'","scan" : "'.$row->scan.'","conduction" : "'.$row->conduction.'","emg" : "'.$row->emg.'","outsiderefferal" : "'.$row->outsiderefferal.'","dc" : "'.$row->dc.'","others" : "'.$row->others.'","othervalue" : "'.$row->othervalue.'","signature" : "'.$row->signature.'" ,"message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'shoulderexamedit':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];


        $ao=$_POST['ao'];
        $dysfunction=$_POST['dysfunction'];
        $pectoralisminor=$_POST['pectoralisminor'];
        $supraspinatus=$_POST['supraspinatus'];
        $infraspinatus=$_POST['infraspinatus'];
        $serratusant=$_POST['serratusant'];
        $teresminor=$_POST['teresminor'];
        $teresmajor=$_POST['teresmajor'];
        $rhomboids=$_POST['rhomboids'];
        $trapezius=$_POST['trapezius'];

        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthopedic=$_POST['orthopedic'];
        $flexionleft=$_POST['flexionleft'];
        $flexionright=$_POST['flexionright'];
        $extensionleft=$_POST['extensionleft'];
        $extensionright=$_POST['extensionright'];
        $abductionleft=$_POST['abductionleft'];
        $abductionright=$_POST['abductionright'];

        $adductionleft=$_POST['adductionleft'];
        $adductionright =$_POST['adductionright'];
        $internalrotationleft=$_POST['internalrotationleft'];
        $internalrotationright=$_POST['internalrotationright'];
        $externalrotationleft=$_POST['externalrotationleft'];
        $externalrotationright=$_POST['externalrotationright'];
        $emptycanleft=$_POST['emptycanleft'];
        $emptycanright=$_POST['emptycanright'];
        $impingementsignleft=$_POST['impingementsignleft'];
        $impingementsignright=$_POST['impingementsignright'];
        $apleysscratchleft=$_POST['apleysscratchleft'];
        $apleysscratchright=$_POST['apleysscratchright'];

        $subacrominalpushleft=$_POST['subacrominalpushleft'];
        $subacrominalpushright=$_POST['subacrominalpushright'];
        $dawbarnsleft=$_POST['dawbarnsleft'];
        $dawbarnsright=$_POST['dawbarnsright'];
        $yergasonsleft=$_POST['yergasonsleft'];
        $yergasonsright=$_POST['yergasonsright'];
        $codmansleft=$_POST['codmansleft'];
        $codmansright=$_POST['codmansright'];
        $apprehensionleft=$_POST['apprehensionleft'];
        $apprehensionright=$_POST['apprehensionright'];
        $neurological=$_POST['neurological'];
        $latdeltoidleft=$_POST['latdeltoidleft'];
        $latdeltoidright=$_POST['latdeltoidright'];
        $latarmleft=$_POST['latarmleft'];
        $latarmright=$_POST['latarmright'];
        $thirdleft=$_POST['thirdleft'];
        $thirdright=$_POST['thirdright'];
        $medforearmleft=$_POST['medforearmleft'];
        $medforearmright=$_POST['medforearmright'];
        $medelbowleft=$_POST['medelbowleft'];
        $medelbowright=$_POST['medelbowright'];
        $shdleft=$_POST['shdleft'];
        $shdright=$_POST['shdright'];
        $elbflexleft=$_POST['elbflexleft'];
        $elbflexright=$_POST['elbflexright'];
        $elbextleft=$_POST['elbextleft'];
        $elbextright=$_POST['elbextright'];
        $digitflexionleft=$_POST['digitflexionleft'];
        $digitflexionright=$_POST['digitflexionright'];
        $digitabdleft=$_POST['digitabdleft'];
        $digitabdright=$_POST['digitabdright'];
        $bicepsleft=$_POST['bicepsleft'];
        $bicepsright=$_POST['bicepsright'];
        $brachioradleft=$_POST['brachioradleft'];
        $brachioradright=$_POST['brachioradright'];
        $tricepsleft=$_POST['tricepsleft'];
        $tricepsright=$_POST['tricepsright'];
        $overhead=$_POST['overhead'];
        $lifting=$_POST['lifting'];
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
        $bracing=$_POST['bracing'];
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=$_POST['radiographic'];
        $mri=$_POST['mri'];
        $scan=$_POST['scan'];
        $conduction=$_POST['conduction'];
        $emg=$_POST['emg'];
        $outsiderefferal=$_POST['outsiderefferal'];
        $dc=$_POST['dc'];
        $others=$_POST['others'];
        $othervalue=$_POST['othervalue'];
        $signature=$_POST['signature'];




//        $user_name="silvi";
//        $pname="silviya";
//        $date="45/87/8745";
//
//        $muscle="muscle";
//        $swelling="swelling";
//        $teresminor="teresminor";
//        $roundshoulder="roundshoulder";
//        $ao="ao";
//        $dysfunction="dysfunction";
//        $pectoralisminor="pectoralisminor";
//        $supraspinatus="supraspinatus";
//        $infraspinatus="infraspinatus";
//        $serratusant="serratusant";
//        $teresmajor="teresmajor";
//        $rhomboids="rhomboids";
//        $trapezius="trapezius";
//
//
//        $note="note";
//        $functional="functional";
//        $orthopedic="orthopedic";
//        $flexionleft="flexionleft";
//
//
//        $flexionright="flexionright";
//        $extensionleft="extensionleft";
//        $extensionright="extensionright";
//        $abductionleft="abductionleft";
//        $abductionright="abductionright";
//
//        $adductionleft="adductionleft";
//        $adductionright ="adductionright";
//        $internalrotationleft="internalrotationleft";
//        $internalrotationright="internalrotationright";
//        $externalrotationleft="externalrotationleft";
//        $externalrotationright="externalrotationright";
//        $emptycanleft="emptycanleft";
//        $emptycanright="emptycanright";
//        $impingementsignleft="impingementsignleft";
//        $impingementsignright="impingementsignright";
//        $apleysscratchleft="apleysscratchleft";
//        $apleysscratchright="apleysscratchright";
//
//        $subacrominalpushleft="subacrominalpushleft";
//        $subacrominalpushright="subacrominalpushright";
//        $dawbarnsleft="dawbarnsleft";
//        $dawbarnsright="dawbarnsright";
//        $yergasonsleft="yergasonsleft";
//        $yergasonsright="yergasonsright";
//        $codmansleft="codmansleft";
//        $codmansright="codmansright";
//        $apprehensionleft="apprehensionleft";
//        $apprehensionright="apprehensionright";
//        $neurological="neurological";
//        $latdeltoidleft="latdeltoidleft";
//        $latdeltoidright="latdeltoidright";
//        $latarmleft="latarmleft";
//        $latarmright="latarmright";
//        $thirdleft="thirdleft";
//        $thirdright="thirdright";
//        $medforearmleft="medforearmleft";
//        $medforearmright="medforearmright";
//        $medelbowleft="medelbowleft";
//        $medelbowright="medelbowright";
//        $shdleft="shdleft";
//        $shdright="shdright";
//        $elbflexleft="elbflexleft";
//        $elbflexright="elbflexright";
//       $elbextleft="elbextleft";
//       $elbextright="elbextright";
//        $digitflexionleft="digitflexionleft";
//        $digitflexionright="digitflexionright";
//        $digitabdleft="digitabdleft";
//        $digitabdright="digitabdright";
//        $bicepsleft="bicepsleft";
//        $bicepsright="bicepsright";
//        $brachioradleft="brachioradleft";
//        $brachioradright="brachioradright";
//        $tricepsleft="tricepsleft";
//        $tricepsright="tricepsright";
//        $overhead="overhead";
//        $lifting="lifting";
//        $other="other";
//        $otherdefict="otherdefict";
//        $comments="comments";
//        $patientstatus="patientstatus";
//
//
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//
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
//        $outsiderefferal="outsiderefferal";
//        $dc="dc";
//        $others="others";
//        $othervalue="othervalue";
//        $signature="signature";


        $sql2="update shoulderexam set pname='".$pname."',date='".$date."',muscle='".$muscle."',swelling='".$swelling."',teresminor='".$teresminor."',ao='".$ao."',dysfunction='".$dysfunction."',pectoralisminor='".$pectoralisminor."',supraspinatus='".$supraspinatus."',infraspinatus='".$infraspinatus."',serratusant='".$serratusant."',teresmajor='".$teresmajor."',rhomboids='".$rhomboids."',trapezius='".$trapezius."',note='".$note."',functional='".$functional."',orthotpedic='".$orthopedic."',flexionleft='".$flexionleft."',flexionright='".$flexionright."',extensionleft='".$extensionleft."',extensionright='".$extensionright."',abductionleft='".$abductionleft."',abductionright='".$abductionright."',adductionleft='".$adductionleft."',adductionright='".$adductionright."',internalrotationleft='".$internalrotationleft."',internalrotationright='".$internalrotationright."',externalrotationleft='".$externalrotationleft."',externalrotationright='".$externalrotationright."',emptycanleft='".$emptycanleft."',emptycanright='".$emptycanright."',impingementsignleft='".$impingementsignleft."',impingementsignright='".$impingementsignright."',apleysscratchleft='".$apleysscratchleft."',apleysscratchright='".$apleysscratchright."',subacrominalpushleft='".$subacrominalpushleft."',subacrominalpushright='".$subacrominalpushright."',dawbarnsleft='".$dawbarnsleft."',dawbarnsright='".$dawbarnsright."',yergasonsleft='".$yergasonsleft."',yergasonsright='".$yergasonsright."',codmansleft='".$codmansleft."',codmansright='".$codmansright."',apprehensionleft='".$apprehensionleft."',apprehensionright='".$apprehensionright."',neurological='".$neurological."',latdeltoidleft='".$latdeltoidleft."',latdeltoidright='".$latdeltoidright."',latarmleft='".$latarmleft."',latarmright='".$latarmright."',thirdleft='".$thirdleft."',thirdright='".$thirdright."',medforearmleft='".$medforearmleft."',medforearmright='".$medforearmright."',medelbowleft='".$medelbowleft."',medelbowright='".$medelbowright."',shdleft='".$shdleft."',shdright='".$shdright."',elbflexleft='".$elbflexleft."',elbflexright='".$elbflexright."',elbextleft='".$elbextleft."',elbextright='".$elbextright."',digitflexionleft='".$digitflexionleft."',digitflexionright='".$digitflexionright."',digitabdleft='".$digitabdleft."',digitabdright='".$digitabdright."',bicepsleft='".$bicepsleft."',bicepsright='".$bicepsright."',brachioradleft='".$brachioradleft."',brachioradright='".$brachioradright."',tricepsleft='".$tricepsleft."',tricepsright='".$tricepsright."',overhead='".$overhead."',lifting='".$lifting."',other='".$other."',otherdefict='".$otherdefict."',comments='".$comments."',patientstatus='".$patientstatus."',diagnosis1='".$diagnosis1."',diagnosis2='".$diagnosis2."',diagnosis3='".$diagnosis3."',diagnosis4='".$diagnosis4."',diagnosis5='".$diagnosis5."',times='".$times."',weeks='".$weeks."',spinaldecompression='".$spinaldecompression."',chiropractic='".$chiropractic."',physicaltherapy='".$physicaltherapy."',bracing='".$bracing."',modalities='".$modalities."',supplementation='".$supplementation."',hep='".$hep."',radiographic='".$radiographic."',mri='".$mri."',scan='".$scan."',conduction='".$conduction."',emg='".$emg."',outsiderefferal='".$outsiderefferal."',dc='".$dc."',others='".$others."',othervalue='".$othervalue."',signature='".$signature."' WHERE username='".$user_name."'";

        // echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'shoulderexaminsert':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];

        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];

        $ao=$_POST['ao'];
        $dysfunction=$_POST['dysfunction'];
        $pectoralisminor=$_POST['pectoralisminor'];
        $supraspinatus=$_POST['supraspinatus'];
        $infraspinatus=$_POST['infraspinatus'];
        $serratusant=$_POST['serratusant'];
        $teresminor=$_POST['teresminor'];
        $teresmajor=$_POST['teresmajor'];
        $rhomboids=$_POST['rhomboids'];
        $trapezius=$_POST['trapezius'];

        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthopedic=$_POST['orthopedic'];
        $flexionleft=$_POST['flexionleft'];
        $flexionright=$_POST['flexionright'];
        $extensionleft=$_POST['extensionleft'];
        $extensionright=$_POST['extensionright'];
        $abductionleft=$_POST['abductionleft'];
        $abductionright=$_POST['abductionright'];
        $adductionleft=$_POST['adductionleft'];
        $adductionright =$_POST['adductionright'];
        $internalrotationleft=$_POST['internalrotationleft'];
        $internalrotationright=$_POST['internalrotationright'];
        $externalrotationleft=$_POST['externalrotationleft'];
        $externalrotationright=$_POST['externalrotationright'];
        $emptycanleft=$_POST['emptycanleft'];
        $emptycanright=$_POST['emptycanright'];
        $impingementsignleft=$_POST['impingementsignleft'];
        $impingementsignright=$_POST['impingementsignright'];
        $apleysscratchleft=$_POST['apleysscratchleft'];
        $apleysscratchright=$_POST['apleysscratchright'];

        $subacrominalpushleft=$_POST['subacrominalpushleft'];
        $subacrominalpushright=$_POST['subacrominalpushright'];
        $dawbarnsleft=$_POST['dawbarnsleft'];
        $dawbarnsright=$_POST['dawbarnsright'];
        $yergasonsleft=$_POST['yergasonsleft'];
        $yergasonsright=$_POST['yergasonsright'];
        $codmansleft=$_POST['codmansleft'];
        $codmansright=$_POST['codmansright'];
        $apprehensionleft=$_POST['apprehensionleft'];
        $apprehensionright=$_POST['apprehensionright'];
        $neurological=$_POST['neurological'];
        $latdeltoidleft=$_POST['latdeltoidleft'];
        $latdeltoidright=$_POST['latdeltoidright'];
        $latarmleft=$_POST['latarmleft'];
        $latarmright=$_POST['latarmright'];
        $thirdleft=$_POST['thirdleft'];
        $thirdright=$_POST['thirdright'];
        $medforearmleft=$_POST['medforearmleft'];
        $medforearmright=$_POST['medforearmright'];
        $medelbowleft=$_POST['medelbowleft'];
        $medelbowright=$_POST['medelbowright'];
        $shdleft=$_POST['shdleft'];
        $shdright=$_POST['shdright'];
        $elbflexleft=$_POST['elbflexleft'];
        $elbflexright=$_POST['elbflexright'];
                $elbextleft=$_POST['elbextleft'];
        $elbextright=$_POST['elbextright'];
        $digitflexionleft=$_POST['digitflexionleft'];
        $digitflexionright=$_POST['digitflexionright'];
        $digitabdleft=$_POST['digitabdleft'];
        $digitabdright=$_POST['digitabdright'];
        $bicepsleft=$_POST['bicepsleft'];
        $bicepsright=$_POST['bicepsright'];
        $brachioradleft=$_POST['brachioradleft'];
        $brachioradright=$_POST['brachioradright'];
        $tricepsleft=$_POST['tricepsleft'];
        $tricepsright=$_POST['tricepsright'];
        $overhead=$_POST['overhead'];
        $lifting=$_POST['lifting'];
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
        $bracing=$_POST['bracing'];
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=$_POST['radiographic'];
        $mri=$_POST['mri'];
        $scan=$_POST['scan'];
        $conduction=$_POST['conduction'];
        $emg=$_POST['emg'];
        $outsiderefferal=$_POST['outsiderefferal'];
        $dc=$_POST['dc'];
        $others=$_POST['others'];
        $othervalue=$_POST['othervalue'];
        $signature=$_POST['signature'];



//        $user_name="silvi";
//        $pname="pname";
//        $date="date";
//
//        $muscle="muscle";
//        $swelling="swelling";
//        $teresminor="teresminor";
//        $roundshoulder="roundshoulder";
//        $ao="ao";
//        $dysfunction="dysfunction";
//        $pectoralisminor="pectoralisminor";
//        $supraspinatus="supraspinatus";
//        $infraspinatus="infraspinatus";
//        $serratusant="serratusant";
//        $teresmajor="teresmajor";
//        $rhomboids="rhomboids";
//        $trapezius="trapezius";
//
//        $note="note";
//        $functional="functional";
//        $orthopedic="orthopedic";
//        $flexionleft="flexionleft";
//
//        $flexionright="flexionright";
//        $extensionleft="extensionleft";
//        $extensionright="extensionright";
//        $abductionleft="abductionleft";
//        $abductionright="abductionright";
//
//        $adductionleft="adductionleft";
//        $adductionright ="adductionright";
//        $internalrotationleft="internalrotationleft";
//        $internalrotationright="internalrotationright";
//        $externalrotationleft="externalrotationleft";
//        $externalrotationright="externalrotationright";
//        $emptycanleft="emptycanleft";
//        $emptycanright="emptycanright";
//        $impingementsignleft="impingementsignleft";
//        $impingementsignright="impingementsignright";
//        $apleysscratchleft="apleysscratchleft";
//        $apleysscratchright="apleysscratchright";
//
//        $subacrominalpushleft="subacrominalpushleft";
//        $subacrominalpushright="subacrominalpushright";
//        $dawbarnsleft="dawbarnsleft";
//        $dawbarnsright="dawbarnsright";
//        $yergasonsleft="yergasonsleft";
//        $yergasonsright="yergasonsright";
//        $codmansleft="codmansleft";
//        $codmansright="codmansright";
//        $apprehensionleft="apprehensionleft";
//        $apprehensionright="apprehensionright";
//        $neurological="neurological";
//        $latdeltoidleft="latdeltoidleft";
//        $latdeltoidright="latdeltoidright";
//        $latarmleft="latarmleft";
//        $latarmright="latarmright";
//        $thirdleft="thirdleft";
//        $thirdright="thirdright";
//        $medforearmleft="medforearmleft";
//        $medforearmright="medforearmright";
//        $medelbowleft="medelbowleft";
//        $medelbowright="medelbowright";
//        $shdleft="shdleft";
//        $shdright="shdright";
//        $elbflexleft="elbflexleft";
//        $elbflexright="elbflexright";
//        $elbextleft="elbextleft";
//        $elbextright="elbextright";
//        $digitflexionleft="digitflexionleft";
//        $digitflexionright="digitflexionright";
//        $digitabdleft="digitabdleft";
//        $digitabdright="digitabdright";
//        $bicepsleft="bicepsleft";
//        $bicepsright="bicepsright";
//        $brachioradleft="brachioradleft";
//        $brachioradright="brachioradright";
//        $tricepsleft="tricepsleft";
//        $tricepsright="tricepsright";
//        $overhead="overhead";
//        $lifting="lifting";
//        $other="other";
//        $otherdefict="otherdefict";
//        $comments="comments";
//        $patientstatus="patientstatus";
//
//
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//
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
//        $outsiderefferal="outsiderefferal";
//        $dc="dc";
//        $others="others";
//        $othervalue="othervalue";
//        $signature="signature";


        $sql3="INSERT INTO shoulderexam(shoulderexamno,username,pname,date,muscle,swelling,ao,dysfunction,pectoralisminor,supraspinatus,infraspinatus,serratusant,teresminor,teresmajor,rhomboids,trapezius,note,functional,orthotpedic,flexionleft,flexionright,extensionleft,extensionright,abductionleft,abductionright,adductionleft,adductionright,internalrotationleft,internalrotationright,externalrotationleft,externalrotationright,emptycanleft,emptycanright,impingementsignleft,impingementsignright,apleysscratchleft,apleysscratchright,subacrominalpushleft,subacrominalpushright,dawbarnsleft,dawbarnsright,yergasonsleft,yergasonsright,codmansleft,codmansright,apprehensionleft,apprehensionright,neurological,latdeltoidleft,latdeltoidright,latarmleft,latarmright,thirdleft,thirdright,medforearmleft,medforearmright,medelbowleft,medelbowright,shdleft,shdright,elbflexleft,elbflexright,elbextleft,elbextright,digitflexionleft,digitflexionright,digitabdleft,digitabdright,bicepsleft,bicepsright,brachioradleft,brachioradright,tricepsleft,tricepsright,overhead,lifting,other,otherdefict,comments,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,times,weeks,spinaldecompression,chiropractic,physicaltherapy,bracing,modalities,supplementation,hep,radiographic,mri,scan,conduction,emg,outsiderefferal,dc,others,othervalue,signature) VALUES ('','".$user_name."','".$pname."','".$date."','".$muscle."','".$swelling."','".$ao."','".$dysfunction."','".$pectoralisminor."','".$supraspinatus."','".$infraspinatus."','".$serratusant."','".$teresminor."','".$teresmajor."','".$rhomboids."','".$trapezius."','".$note."','".$functional."','".$orthopedic."','".$flexionleft."','".$flexionright."','".$extensionleft."','".$extensionright."','".$abductionleft."','".$abductionright."','".$adductionleft."','".$adductionright."','". $internalrotationleft."','". $internalrotationright."','". $externalrotationleft."','". $externalrotationright."','". $emptycanleft."','". $emptycanright."','". $impingementsignleft."','". $impingementsignright."','". $apleysscratchleft."','". $apleysscratchright."','". $subacrominalpushleft."','". $subacrominalpushright."','". $dawbarnsleft."','". $dawbarnsright."','". $yergasonsleft."','". $yergasonsright."','". $codmansleft."','". $codmansright."','". $apprehensionleft."','". $apprehensionright."','". $neurological."','". $latdeltoidleft."','". $latdeltoidright."','". $latarmleft."','". $latarmright."','". $thirdleft."','". $thirdright."','". $medforearmleft."','". $medforearmright."','". $medelbowleft."','". $medelbowright."','". $shdleft."','". $shdright."','". $elbflexleft."','". $elbflexright."','". $elbextleft."','". $elbextright."','". $digitflexionleft."','". $digitflexionright."','". $digitabdleft."','". $digitabdright."','". $bicepsleft."','". $bicepsright."','". $brachioradleft."','". $brachioradright."','". $tricepsleft."','". $tricepsright."','". $overhead."','". $lifting."','". $other."','". $otherdefict."','". $comments."','". $patientstatus."','". $diagnosis1."','". $diagnosis2."','". $diagnosis3."','". $diagnosis4."','". $diagnosis5."','". $times."','". $weeks."','". $spinaldecompression."','". $chiropractic."','". $physicaltherapy."','". $bracing."','". $modalities."','". $supplementation."','". $hep."','". $radiographic."','". $mri."','". $scan."','". $conduction."','". $emg."','". $outsiderefferal."','". $dc."','". $others."','". $othervalue."','". $signature."')";
        //echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'shoulderexamdelete':
    {
        $user_name=$_POST['username'];
    //    $user_name="silvi";
        $sql4 ="delete FROM shoulderexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>