<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 06/05/14
 * Time: 3:08 PM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'wristexamselect':
    {

    $user_name = $_POST['username'];
     //   $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM wristexam WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "shoulderexam Data", "success" : "Yes", "wristexamuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "Yes", "wristexamno" : "'.$row->wristexamno.'", "username" : "'.$row->username.'", "pname" : "'.$row->pname.'", "date" : "'.$row->date.'",  "muscle" : "'.$row->muscle.'", "swelling" : "'.$row->swelling.'","dominanthand" : "'.$row->dominanthand.'","ao" : "'.$row->ao.'","dysfunction" : "'.$row->dysfunction.'",  "thenareminence" : "'.$row->thenareminence.'", "flexorcarpiradialis" : "'.$row->flexorcarpiradialis.'", "commonflexors" : "'.$row->commonflexors.'", "hypothenareminence" : "'.$row->hypothenareminence.'", "extensorcarpiradialis" : "'.$row->extensorcarpiradialis.'", "commonextensor" : "'.$row->commonextensor.'", "abductorpolliuslongus" : "'.$row->abductorpolliuslongus.'", "abductorpollicisbrevis" : "'.$row->abductorpollicisbrevis.'","extensorpollicisbrevis" : "'.$row->extensorpollicisbrevis.'","note" : "'.$row->note.'","functional" : "'.$row->functional.'","orthotpedic" : "'.$row->orthotpedic.'","flexionleft" : "'.$row->flexionleft.'","flexionright" : "'.$row->flexionright.'","extensionleft" : "'.$row->extensionleft.'","extensionright" : "'.$row->extensionright.'","ulnarleft" : "'.$row->ulnarleft.'","ulnarright" : "'.$row->ulnarright.'","radialleft" : "'.$row->radialleft.'","radialright" : "'.$row->radialright.'","pronationleft" : "'.$row->pronationleft.'","pronationright" : "'.$row->pronationright.'","allenleft" : "'.$row->allenleft.'","allenright" : "'.$row->allenright.'","phalenleft" : "'.$row->phalenleft.'","phalenright" : "'.$row->phalenright.'","reverseleft" : "'.$row->reverseleft.'","reverseright" : "'.$row->reverseright.'","tenosynovitisleft" : "'.$row->tenosynovitisleft.'","tenosynovitisright" : "'.$row->tenosynovitisright.'","tinnelsleft" : "'.$row->tinnelsleft.'","tinnelsright" : "'.$row->tinnelsright.'","ulttleft" : "'.$row->ulttleft.'","ulttright" : "'.$row->ulttright.'","neurological" : "'.$row->neurological.'","latdeltoidleft" : "'.$row->latdeltoidleft.'","latdeltoidright" : "'.$row->latdeltoidright.'","latarmleft" : "'.$row->latarmleft.'","latarmright" : "'.$row->latarmright.'","thirdleft" : "'.$row->thirdleft.'","thirdright" : "'.$row->thirdright.'","medforearmleft" : "'.$row->medforearmleft.'","medforearmright" : "'.$row->medforearmright.'","medelbowleft" : "'.$row->medelbowleft.'","medelbowright" : "'.$row->medelbowright.'","shdleft" : "'.$row->shdleft.'","shdright" : "'.$row->shdright.'","elbflexleft" : "'.$row->elbflexleft.'","elbflexright" : "'.$row->elbflexright.'","elbextleft" : "'.$row->elbextleft.'","elbextright" : "'.$row->elbextright.'","digitflexionleft" : "'.$row->digitflexionleft.'","digitflexionright" : "'.$row->digitflexionright.'","digitabdleft" : "'.$row->digitabdleft.'","digitabdright" : "'.$row->digitabdright.'","bicepsleft" : "'.$row->bicepsleft.'","bicepsright" : "'.$row->bicepsright.'","brachioradleft" : "'.$row->brachioradleft.'","brachioradright" : "'.$row->brachioradright.'","tricepsleft" : "'.$row->tricepsleft.'","tricepsright" : "'.$row->tricepsright.'","typing" : "'.$row->typing.'","driving" : "'.$row->driving.'","other" : "'.$row->other.'","otherdefict" : "'.$row->otherdefict.'","comments" : "'.$row->comments.'","patientstatus" : "'.$row->patientstatus.'","diagnosis1" : "'.$row->diagnosis1.'","diagnosis2" : "'.$row->diagnosis2.'","diagnosis3" : "'.$row->diagnosis3.'","diagnosis4" : "'.$row->diagnosis4.'","diagnosis5" : "'.$row->diagnosis5.'","diagnosis6" : "'.$row->diagnosis6.'","times" : "'.$row->times.'","weeks" : "'.$row->weeks.'","spinaldecompression" : "'.$row->spinaldecompression.'","chiropractic" : "'.$row->chiropractic.'","physicaltherapy" : "'.$row->physicaltherapy.'","bracing" : "'.$row->bracing.'","modalities" : "'.$row->modalities.'","supplementation" : "'.$row->supplementation.'","hep" : "'.$row->hep.'","radiographic" : "'.$row->radiographic.'","mri" : "'.$row->mri.'","scan" : "'.$row->scan.'","conduction" : "'.$row->conduction.'","emg" : "'.$row->emg.'","outsiderefferal" : "'.$row->outsiderefferal.'","dc" : "'.$row->dc.'","others" : "'.$row->others.'","othervalue" : "'.$row->othervalue.'","signature" : "'.$row->signature.'","message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'wristexamedit':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $dominanthand=$_POST['dominanthand'];
        $ao=$_POST['ao'];
        $dysfunction=$_POST['dysfunction'];
        $thenareminence=$_POST['thenareminence'];
        $flexorcarpiradialis=$_POST['flexorcarpiradialis'];
        $commonflexors=$_POST['commonflexors'];
        $hypothenareminence=$_POST['hypothenareminence'];
        $extensorcarpiradialis=$_POST['extensorcarpiradialis'];
        $commonextensor=$_POST['commonextensor'];
        $abductorpolliuslongus=$_POST['abductorpolliuslongus'];
        $abductorpollicisbrevis=$_POST['abductorpollicisbrevis'];
        $extensorpollicisbrevis=$_POST['extensorpollicisbrevis'];
        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthotpedic=$_POST['orthotpedic'];
        $flexionleft=$_POST['flexionleft'];
        $flexionright=$_POST['flexionright'];
        $extensionleft=$_POST['extensionleft'];
        $extensionright=$_POST['extensionright'];
        $ulnarleft=$_POST['ulnarleft'];
        $ulnarright=$_POST['ulnarright'];
        $radialleft=$_POST['radialleft'];
        $radialright=$_POST['radialright'];
        $pronationleft=$_POST['pronationleft'];
        $pronationright=$_POST['pronationright'];
        $allenleft=$_POST['allenleft'];
        $allenright =$_POST['allenright'];
        $phalenleft=$_POST['phalenleft'];
        $phalenright=$_POST['phalenright'];
        $reverseleft=$_POST['reverseleft'];
        $reverseright=$_POST['reverseright'];

        $tenosynovitisleft=$_POST['tenosynovitisleft'];
        $tenosynovitisright=$_POST['tenosynovitisright'];
        $tinnelsleft=$_POST['tinnelsleft'];
        $tinnelsright=$_POST['tinnelsright'];
        $ulttleft=$_POST['ulttleft'];
        $ulttright=$_POST['ulttright'];
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
        $typing=$_POST['typing'];
        $driving=$_POST['driving'];
        $other=$_POST['other'];
        $otherdefict=$_POST['otherdefict'];
        $comments=str_replace(array("\r\n","\n","\t","\r"),'',str_replace(array("\r\n","\n","\t","\r"),'',str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments'])));
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $diagnosis6=$_POST['diagnosis6'];
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



//
//        $user_name="silvi";
//        $pname="silviya";
//        $date="45/87/8745";
//
//        $muscle="muscle";
//        $swelling="swelling";
//        $dominanthand="dominanthand";
//        $dysfunction="dysfunction";
//        $ao="ao";
//        $thenareminence="thenareminence";
//        $flexorcarpiradialis="flexorcarpiradialis";
//        $commonflexors="commonflexors";
//        $hypothenareminence="hypothenareminence";
//        $extensorcarpiradialis="extensorcarpiradialis";
//        $commonextensor="commonextensor";
//        $abductorpolliuslongus="abductorpolliuslongus";
//        $abductorpollicisbrevis="abductorpollicisbrevis";
//        $extensorpollicisbrevis="extensorpollicisbrevis";
//        $note="note";
//        $functional="functional";
//        $orthotpedic="orthotpedic";
//        $flexionleft="flexionleft";
//        $flexionright="flexionright";
//        $extensionleft="extensionleft";
//        $extensionright="extensionright";
//        $ulnarleft="ulnarleft";
//        $ulnarright="ulnarright";
//        $radialleft="radialleft";
//        $radialright="radialright";
//        $pronationleft="pronationleft";
//        $pronationright="pronationright";
//        $allenleft="allenleft";
//        $allenright ="allenright";
//        $phalenleft="phalenleft";
//        $phalenright="phalenright";
//        $reverseleft="reverseleft";
//        $reverseright="reverseright";
//        $tenosynovitisleft="tenosynovitisleft";
//        $tenosynovitisright="tenosynovitisright";
//        $tinnelsleft="tinnelsleft";
//        $tinnelsright="tinnelsright";
//        $ulttleft="ulttleft";
//        $ulttright="ulttright";
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
//        $typing="typing";
//        $driving="driving";
//        $other="other";
//        $otherdefict="otherdefict";
//        $comments="comments";
//        $patientstatus="patientstatus";
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//        $diagnosis6="diagnosis6";
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


        $sql2="update wristexam set pname='".$pname."',date='".$date."',muscle='".$muscle."',swelling='".$swelling."',dominanthand='".$dominanthand."',dysfunction='".$dysfunction."',ao='".$ao."',thenareminence='".$thenareminence."',flexorcarpiradialis='".$flexorcarpiradialis."',commonflexors='".$commonflexors."',hypothenareminence='".$hypothenareminence."',extensorcarpiradialis='".$extensorcarpiradialis."',commonextensor='".$commonextensor."',abductorpolliuslongus='".$abductorpolliuslongus."',abductorpollicisbrevis='".$abductorpollicisbrevis."',extensorpollicisbrevis='".$extensorpollicisbrevis."',note='".$note."',functional='".$functional."',orthotpedic='".$orthotpedic."',flexionleft='".$flexionleft."',flexionright='".$flexionright."',extensionleft='".$extensionleft."',extensionright='".$extensionright."',ulnarleft='".$ulnarleft."',ulnarright='".$ulnarright."',radialleft='".$radialleft."',radialright='".$radialright."',pronationleft='".$pronationleft."',pronationright='".$pronationright."',allenleft='".$allenleft."',allenright='".$allenright."',phalenleft='".$phalenleft."',phalenright='".$phalenright."',reverseleft='".$reverseleft."',reverseright='".$reverseright."',tenosynovitisleft='".$tenosynovitisleft."',tenosynovitisright='".$tenosynovitisright."',tinnelsleft='".$tinnelsleft."',tinnelsright='".$tinnelsright."',ulttleft='".$ulttleft."',ulttright='".$ulttright."',neurological='".$neurological."',latdeltoidleft='".$latdeltoidleft."',latdeltoidright='".$latdeltoidright."',latarmleft='".$latarmleft."',latarmright='".$latarmright."',thirdleft='".$thirdleft."',thirdright='".$thirdright."',medforearmleft='".$medforearmleft."',medforearmright='".$medforearmright."',medelbowleft='".$medelbowleft."',medelbowright='".$medelbowright."',shdleft='".$shdleft."',shdright='".$shdright."',elbflexleft='".$elbflexleft."',elbflexright='".$elbflexright."',elbextleft='".$elbextleft."',elbextright='".$elbextright."',digitflexionleft='".$digitflexionleft."',digitflexionright='".$digitflexionright."',digitabdleft='".$digitabdleft."',digitabdright='".$digitabdright."',bicepsleft='".$bicepsleft."',bicepsright='".$bicepsright."',brachioradleft='".$brachioradleft."',brachioradright='".$brachioradright."',tricepsleft='".$tricepsleft."',tricepsright='".$tricepsright."',typing='".$typing."',driving='".$driving."',other='".$other."',otherdefict='".$otherdefict."',comments='".$comments."',patientstatus='".$patientstatus."',diagnosis1='".$diagnosis1."',diagnosis2='".$diagnosis2."',diagnosis3='".$diagnosis3."',diagnosis4='".$diagnosis4."',diagnosis5='".$diagnosis5."',diagnosis6='".$diagnosis6."',times='".$times."',weeks='".$weeks."',spinaldecompression='".$spinaldecompression."',chiropractic='".$chiropractic."',physicaltherapy='".$physicaltherapy."',bracing='".$bracing."',modalities='".$modalities."',supplementation='".$supplementation."',hep='".$hep."',radiographic='".$radiographic."',mri='".$mri."',scan='".$scan."',conduction='".$conduction."',emg='".$emg."',outsiderefferal='".$outsiderefferal."',dc='".$dc."',others='".$others."',othervalue='".$othervalue."',signature='".$signature."' WHERE username='".$user_name."'";

        // echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'wristexaminsert':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];

        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $dominanthand=$_POST['dominanthand'];
        $dysfunction=$_POST['dysfunction'];
        $ao=$_POST['ao'];
        $thenareminence=$_POST['thenareminence'];
        $flexorcarpiradialis=$_POST['flexorcarpiradialis'];
        $commonflexors=$_POST['commonflexors'];
        $hypothenareminence=$_POST['hypothenareminence'];
        $extensorcarpiradialis=$_POST['extensorcarpiradialis'];
        $commonextensor=$_POST['commonextensor'];
        $abductorpolliuslongus=$_POST['abductorpolliuslongus'];
        $abductorpollicisbrevis=$_POST['abductorpollicisbrevis'];
        $extensorpollicisbrevis=$_POST['extensorpollicisbrevis'];
        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthotpedic=$_POST['orthotpedic'];
        $flexionleft=$_POST['flexionleft'];
        $flexionright=$_POST['flexionright'];
        $extensionleft=$_POST['extensionleft'];
        $extensionright=$_POST['extensionright'];
        $ulnarleft=$_POST['ulnarleft'];
        $ulnarright=$_POST['ulnarright'];
        $radialleft=$_POST['radialleft'];
        $radialright=$_POST['radialright'];
        $pronationleft=$_POST['pronationleft'];
        $pronationright=$_POST['pronationright'];
        $allenleft=$_POST['allenleft'];
        $allenright =$_POST['allenright'];
        $phalenleft=$_POST['phalenleft'];
        $phalenright=$_POST['phalenright'];
        $reverseleft=$_POST['reverseleft'];
        $reverseright=$_POST['reverseright'];
        $tenosynovitisleft=$_POST['tenosynovitisleft'];
        $tenosynovitisright=$_POST['tenosynovitisright'];
        $tinnelsleft=$_POST['tinnelsleft'];
        $tinnelsright=$_POST['tinnelsright'];
        $ulttleft=$_POST['ulttleft'];
        $ulttright=$_POST['ulttright'];
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
        $typing=$_POST['typing'];
        $driving=$_POST['driving'];
        $other=$_POST['other'];
        $otherdefict=$_POST['otherdefict'];
        $comments=str_replace(array("\r\n","\n","\t","\r"),'',str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments']));
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $diagnosis6=$_POST['diagnosis6'];
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
//        $dominanthand="dominanthand";
//        $dysfunction="dysfunction";
//        $ao="ao";
//        $thenareminence="thenareminence";
//        $flexorcarpiradialis="flexorcarpiradialis";
//        $commonflexors="commonflexors";
//        $hypothenareminence="hypothenareminence";
//        $extensorcarpiradialis="extensorcarpiradialis";
//        $commonextensor="commonextensor";
//        $abductorpolliuslongus="abductorpolliuslongus";
//        $abductorpollicisbrevis="abductorpollicisbrevis";
//        $extensorpollicisbrevis="extensorpollicisbrevis";
//        $note="note";
//        $functional="functional";
//        $orthotpedic="orthotpedic";
//        $flexionleft="flexionleft";
//        $flexionright="flexionright";
//        $extensionleft="extensionleft";
//        $extensionright="extensionright";
//        $ulnarleft="ulnarleft";
//        $ulnarright="ulnarright";
//        $radialleft="radialleft";
//        $radialright="radialright";
//        $pronationleft="pronationleft";
//        $pronationright="pronationright";
//        $allenleft="allenleft";
//        $allenright ="allenright";
//        $phalenleft="phalenleft";
//        $phalenright="phalenright";
//        $reverseleft="reverseleft";
//        $reverseright="reverseright";
//        $tenosynovitisleft="tenosynovitisleft";
//        $tenosynovitisright="tenosynovitisright";
//        $tinnelsleft="tinnelsleft";
//        $tinnelsright="tinnelsright";
//        $ulttleft="ulttleft";
//        $ulttright="ulttright";
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
//        $typing="typing";
//        $driving="driving";
//        $other="other";
//        $otherdefict="otherdefict";
//        $comments="comments";
//        $patientstatus="patientstatus";
//        $diagnosis1="diagnosis1";
//        $diagnosis2="diagnosis2";
//        $diagnosis3="diagnosis3";
//        $diagnosis4="diagnosis4";
//        $diagnosis5="diagnosis5";
//        $diagnosis6="diagnosis6";
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


        $sql3="INSERT INTO wristexam(wristexamno,username,pname,date,muscle,swelling,dominanthand,ao,dysfunction,thenareminence,flexorcarpiradialis,commonflexors,hypothenareminence,extensorcarpiradialis,commonextensor,abductorpolliuslongus,abductorpollicisbrevis,extensorpollicisbrevis,note,functional,orthotpedic,flexionleft,flexionright,extensionleft,extensionright,ulnarleft,ulnarright,radialleft,radialright,pronationleft,pronationright,allenleft,allenright,phalenleft,phalenright,reverseleft,reverseright,tenosynovitisleft,tenosynovitisright,tinnelsleft,tinnelsright,ulttleft,ulttright,neurological,latdeltoidleft,latdeltoidright,latarmleft,latarmright,thirdleft,thirdright,medforearmleft,medforearmright,medelbowleft,medelbowright,shdleft,shdright,elbflexleft,elbflexright,elbextleft,elbextright,digitflexionleft,digitflexionright,digitabdleft,digitabdright,bicepsleft,bicepsright,brachioradleft,brachioradright,tricepsleft,tricepsright,typing,driving,other,otherdefict,comments,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,diagnosis6,times,weeks,spinaldecompression,chiropractic,physicaltherapy,bracing,modalities,supplementation,hep,radiographic,mri,scan,conduction,emg,outsiderefferal,dc,others,othervalue,signature) VALUES ('','".$user_name."','".$pname."','".$date."','".$muscle."','".$swelling."','".$dominanthand."','".$ao."','".$dysfunction."','".$thenareminence."','".$flexorcarpiradialis."','".$commonflexors."','".$hypothenareminence."','".$extensorcarpiradialis."','".$commonextensor."','".$abductorpolliuslongus."','".$abductorpollicisbrevis."','".$extensorpollicisbrevis."','".$note."','".$functional."','".$orthotpedic."','".$flexionleft."','".$flexionright."','".$extensionleft."','".$extensionright."','".$ulnarleft."','".$ulnarright."','".$radialleft."','".$radialright."','".$pronationleft."','".$pronationright."','".$allenleft."','".$allenright."','". $phalenleft."','". $phalenright."','". $reverseleft."','". $reverseright."','". $tenosynovitisleft."','". $tenosynovitisright."','". $tinnelsleft."','". $tinnelsright."','". $ulttleft."','". $ulttright."','". $neurological."','". $latdeltoidleft."','". $latdeltoidright."','". $latarmleft."','". $latarmright."','". $thirdleft."','". $thirdright."','". $medforearmleft."','". $medforearmright."','". $medelbowleft."','". $medelbowright."','". $shdleft."','". $shdright."','". $elbflexleft."','". $elbflexright."','". $elbextleft."','". $elbextright."','". $digitflexionleft."','". $digitflexionright."','". $digitabdleft."','". $digitabdright."','". $bicepsleft."','". $bicepsright."','". $brachioradleft."','". $brachioradright."','". $tricepsleft."','". $tricepsright."','". $typing."','". $driving."','". $other."','". $otherdefict."','". $comments."','". $patientstatus."','". $diagnosis1."','". $diagnosis2."','". $diagnosis3."','". $diagnosis4."','". $diagnosis5."','". $diagnosis6."','". $times."','". $weeks."','". $spinaldecompression."','". $chiropractic."','". $physicaltherapy."','". $bracing."','". $modalities."','". $supplementation."','". $hep."','". $radiographic."','". $mri."','". $scan."','". $conduction."','". $emg."','". $outsiderefferal."','". $dc."','". $others."','". $othervalue."','". $signature."')";

        //echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'wristexamdelete':
    {
       $user_name=$_POST['username'];
    //    $user_name="silvi";
        $sql4 ="delete FROM wristexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "wristexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>