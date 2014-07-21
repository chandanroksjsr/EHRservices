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
    case 'hipexamselect':
    {

        $user_name = $_POST['username'];
     //$user_name="oney";
        $flag=0;
        $sql1 ="SELECT * FROM hipexam WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "Yes", "hipexamuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "Yes","pname":"'.$row->pname.'","date":"'.$row->date.'","gait":"'.$row->gait.'","pelvic":"'.$row->pelvic.'","ao":"'.$row->ao.'","dysfunction":"'.$row->dysfunction.'","shortlegleft":"'.$row->shortlegleft.'","shortlegleftvalue":"'.$row->shortlegleftvalue.'","shortlegleftother":"'.$row->shortlegleftother.'","shortlegright":"'.$row->shortlegright.'","shortlegrightvalue":"'.$row->shortlegrightvalue.'","shortlegrightother":"'.$row->shortlegrightother.'","piriformisleft":"'.$row->piriformisleft.'","gluteusleft":"'.$row->gluteusleft.'","iliopsoasleft":"'.$row->iliopsoasleft.'","hamstringsleft":"'.$row->hamstringsleft.'""note":"'.$row->note.'","functional":"'.$row->functional.'","orthotpedic":"'.$row->orthotpedic.'","flexionleft":"'.$row->flexionleft.'","flexionright":"'.$row->flexionright.'","extensionleft":"'.$row->extensionleft.'","extensionright":"'.$row->extensionright.'","abductionleft":"'.$row->abductionleft.'","abductionright":"'.$row->abductionright.'","adductionleft":"'.$row->adductionleft.'","adductionright":"'.$row->adductionright.'","internalrotationleft":"'.$row->internalrotationleft.'","internalrotationright":"'.$row->internalrotationright.'","externalrotationleft":"'.$row->externalrotationleft.'","externalrotationright":"'.$row->externalrotationright.'","fabereleft":"'.$row->fabereleft.'","fabereright":"'.$row->fabereright.'","nachlasleft":"'.$row->nachlasleft.'","nachlasright":"'.$row->nachlasright.'","elysleft":"'.$row->elysleft.'","elysright":"'.$row->elysright.'","yeomansleft":"'.$row->yeomansleft.'","yeomansright":"'.$row->yeomansright.'","obersleft":"'.$row->obersleft.'","obersright":"'.$row->obersright.'","hibbsleft":"'.$row->hibbsleft.'","hibbsright":"'.$row->hibbsright.'","thomasleft":"'.$row->thomasleft.'","thomasright":"'.$row->thomasright.'","neurological":"'.$row->neurological.'","inguinalarealeft":"'.$row->inguinalarealeft.'","inguinalarearight":"'.$row->inguinalarearight.'","antleft":"'.$row->antleft.'","antright":"'.$row->antright.'","kneeleft":"'.$row->kneeleft.'","kneeright":"'.$row->kneeright.'","medialleft":"'.$row->medialleft.'","medialright":"'.$row->medialright.'","latleft":"'.$row->latleft.'","latright":"'.$row->latright.'","plantarleft":"'.$row->plantarleft.'","plantarright":"'.$row->plantarright.'","iliopsoasfirstleft":"'.$row->iliopsoasfirstleft.'","iliopsoasfirstright":"'.$row->iliopsoasfirstright.'","iliopsoas1left":"'.$row->iliopsoas1left.'","iliopsoas1right":"'.$row->iliopsoas1right.'","iliopsoas2left":"'.$row->iliopsoas2left.'","iliopsoas2right":"'.$row->iliopsoas2right.'","femleft":"'.$row->femleft.'","femright":"'.$row->femright.'","medleft":"'.$row->medleft.'","medright":"'.$row->medright.'","maxleft":"'.$row->maxleft.'","maxright":"'.$row->maxright.'","patellarleft":"'.$row->patellarleft.'","patellarright":"'.$row->patellarright.'","hsleft":"'.$row->hsleft.'","hsright":"'.$row->hsright.'","achillesleft":"'.$row->achillesleft.'","achillesright":"'.$row->achillesright.'","walking":"'.$row->walking.'","standing":"'.$row->standing.'","stairs":"'.$row->stairs.'","other":"'.$row->other.'","otherdefict":"'.$row->otherdefict.'","comments":"'.$row->comments.'","patientstatus":"'.$row->patientstatus.'","diagnosis1":"'.$row->diagnosis1.'","diagnosis2":"'.$row->diagnosis2.'","diagnosis3":"'.$row->diagnosis3.'","diagnosis4":"'.$row->diagnosis4.'","diagnosis5":"'.$row->diagnosis5.'","times":"'.$row->times.'","weeks":"'.$row->weeks.'","spinaldecompression":"'.$row->spinaldecompression.'","chiropractic":"'.$row->chiropractic.'","physicaltherapy":"'.$row->physicaltherapy.'","bracing":"'.$row->bracing.'","modalities":"'.$row->modalities.'","supplementation":"'.$row->supplementation.'","hep":"'.$row->hep.'","radiographic":"'.$row->radiographic.'","mri":"'.$row->mri.'","scan":"'.$row->scan.'","conduction":"'.$row->conduction.'","emg":"'.$row->emg.'","outsidereferral":"'.$row->outsidereferral.'","dc":"'.$row->dc.'","signature":"'.$row->signature.'","message" : "1" } }';
//"note":"'.$row->note.'","functional":"'.$row->functional.'","orthotpedic":"'.$row->orthotpedic.'","flexionleft":"'.$row->flexionleft.'","flexionright":"'.$row->flexionright.'","extensionleft":"'.$row->extensionleft.'","extensionright":"'.$row->extensionright.'","abductionleft":"'.$row->abductionleft.'","abductionright":"'.$row->abductionright.'","adductionleft":"'.$row->adductionleft.'","adductionright":"'.$row->adductionright.'","internalrotationleft":"'.$row->internalrotationleft.'","internalrotationright":"'.$row->internalrotationright.'","externalrotationleft":"'.$row->externalrotationleft.'","externalrotationright":"'.$row->externalrotationright.'","fabereleft":"'.$row->fabereleft.'","fabereright":"'.$row->fabereright.'","nachlasleft":"'.$row->nachlasleft.'","nachlasright":"'.$row->nachlasright.'","elysleft":"'.$row->elysleft.'","elysright":"'.$row->elysright.'","yeomansleft":"'.$row->yeomansleft.'","yeomansright":"'.$row->yeomansright.'","obersleft":"'.$row->obersleft.'","obersright":"'.$row->obersright.'","hibbsleft":"'.$row->hibbsleft.'","hibbsright":"'.$row->hibbsright.'","thomasleft":"'.$row->thomasleft.'","thomasright":"'.$row->thomasright.'","neurological":"'.$row->neurological.'","inguinalarealeft":"'.$row->inguinalarealeft.'","inguinalarearight":"'.$row->inguinalarearight.'","antleft":"'.$row->antleft.'","antright":"'.$row->antright.'","kneeleft":"'.$row->kneeleft.'","kneeright":"'.$row->kneeright.'","medialleft":"'.$row->medialleft.'","medialright":"'.$row->medialright.'","latleft":"'.$row->latleft.'","latright":"'.$row->latright.'","plantarleft":"'.$row->plantarleft.'","plantarright":"'.$row->plantarright.'","iliopsoasfirstleft":"'.$row->iliopsoasfirstleft.'","iliopsoasfirstright":"'.$row->iliopsoasfirstright.'","iliopsoas1left":"'.$row->iliopsoas1left.'","iliopsoas1right":"'.$row->iliopsoas1right.'","iliopsoas2left":"'.$row->iliopsoas2left.'","iliopsoas2right":"'.$row->iliopsoas2right.'","femleft":"'.$row->femleft.'","femright":"'.$row->femright.'","medleft":"'.$row->medleft.'","medright":"'.$row->medright.'","maxleft":"'.$row->maxleft.'","maxright":"'.$row->maxright.'","patellarleft":"'.$row->patellarleft.'","patellarright":"'.$row->patellarright.'","hsleft":"'.$row->hsleft.'","hsright":"'.$row->hsright.'","achillesleft":"'.$row->achillesleft.'","achillesright":"'.$row->achillesright.'","walking":"'.$row->walking.'","standing":"'.$row->standing.'","stairs":"'.$row->stairs.'","other":"'.$row->other.'","otherdefict":"'.$row->otherdefict.'","comments":"'.$row->comments.'",patientstatus":"'.$row->patientstatus.'","diagnosis1":"'.$row->diagnosis1.'","diagnosis2":"'.$row->diagnosis2.'","diagnosis3":"'.$row->diagnosis3.'","diagnosis4":"'.$row->diagnosis4.'","diagnosis5":"'.$row->diagnosis5.'","times":"'.$row->times.'","weeks":"'.$row->weeks.'","spinaldecompression":"'.$row->spinaldecompression.'","chiropractic":"'.$row->chiropractic.'","physicaltherapy":"'.$row->physicaltherapy.'","bracing":"'.$row->bracing.'","modalities":"'.$row->modalities.'","supplementation":"'.$row->supplementation.'","hep":"'.$row->hep.'","radiographic":"'.$row->radiographic.'","mri":"'.$row->mri.'","scan":"'.$row->scan.'","conduction":"'.$row->conduction.'","emg":"'.$row->emg.'","outsidereferral":"'.$row->outsidereferral.'","dc":"'.$row->dc.'","signature":"'.$row->signature.'",
                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hipexamedit':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $pelvic=$_POST['pelvic'];
        $ao=$_POST['ao'];
        $dysfunction=$_POST['dysfunction'];
        $shortlegleft=$_POST['shortlegleft'];
        $shortlegleftvalue=$_POST['shortlegleftvalue'];
        $shortlegleftother=$_POST['shortlegleftother'];
        $shortlegright=$_POST['shortlegright'];
        $shortlegrightvalue=$_POST['shortlegrightvalue'];
        $shortlegrightother=$_POST['shortlegrightother'];
        $piriformisleft=$_POST['piriformisleft'];
        $gluteusleft=$_POST['gluteusleft'];
        $iliopsoasleft=$_POST['iliopsoasleft'];
        $hamstringsleft=$_POST['hamstringsleft'];
        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthotpedic=$_POST['orthotpedic'];
        $flexionleft=$_POST['flexionleft'];
        $flexionright=$_POST['flexionright'];
        $extensionleft=$_POST['extensionleft'];
        $extensionright=$_POST['extensionright'];
        $abductionleft=$_POST['abductionleft'];
        $abductionright=$_POST['abductionright'];
        $adductionleft=$_POST['adductionleft'];
        $adductionright=$_POST['adductionright'];
        $internalrotationleft=$_POST['internalrotationleft'];
        $internalrotationright=$_POST['internalrotationright'];
        $externalrotationleft=$_POST['externalrotationleft'];
        $externalrotationright=$_POST['externalrotationright'];
        $fabereleft =$_POST['fabereleft'];
        $fabereright=$_POST['fabereright'];
        $nachlasleft=$_POST['nachlasleft'];
        $nachlasright=$_POST['nachlasright'];
        $elysleft=$_POST['elysleft'];
        $elysright=$_POST['elysright'];
        $yeomansleft=$_POST['yeomansleft'];
        $yeomansright=$_POST['yeomansright'];
        $obersleft=$_POST['obersleft'];
        $obersright=$_POST['obersright'];
        $hibbsleft=$_POST['hibbsleft'];
        $hibbsright=$_POST['hibbsright'];
        $thomasleft=$_POST['thomasleft'];
        $thomasright=$_POST['thomasright'];
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
        $iliopsoas2left=$_POST['iliopsoas2left'];
        $iliopsoas2right=$_POST['iliopsoas2right'];
        $femleft=$_POST['femleft'];
        $femright=$_POST['femright'];
        $medleft=$_POST['medleft'];
        $medright=$_POST['medright'];
        $maxleft=$_POST['maxleft'];
        $maxright=$_POST['maxright'];
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
        $bracing=$_POST['bracing'];
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=$_POST['radiographic'];
        $mri=$_POST['mri'];
        $scan=$_POST['scan'];
        $conduction=$_POST['conduction'];
        $emg=$_POST['emg'];
        $outsidereferral=$_POST['outsidereferral'];
        $dc=$_POST['dc'];
        $signature=$_POST['signature'];

//        $user_name="username";
//        $pname="pname";
//        $date="date";
//        $gait="gait";
//        $pelvic="pelvic";
//        $ao="ao";
//        $dysfunction="dysfunction";
//        $shortlegleft="shortlegleft";
//        $shortlegleftvalue="shortlegleftvalue";
//        $shortlegleftother="shortlegleftother";
//        $shortlegright="shortlegright";
//        $shortlegrightvalue="shortlegrightvalue";
//        $shortlegrightother="shortlegrightother";
//        $piriformisleft="piriformisleft";
//        $gluteusleft="gluteusleft";
//        $iliopsoasleft="iliopsoasleft";
//        $hamstringsleft="hamstringsleft";
//        $note="note";
//        $functional="functional";
//        $orthotpedic="orthotpedic";
//        $flexionleft="flexionleft";
//        $flexionright="flexionright";
//        $extensionleft="extensionleft";
//        $extensionright="extensionright";
//        $abductionleft="abductionleft";
//        $abductionright="abductionright";
//        $adductionleft="adductionleft";
//        $adductionright="adductionright";
//        $internalrotationleft="internalrotationleft";
//        $internalrotationright="internalrotationright";
//        $externalrotationleft="externalrotationleft";
//        $externalrotationright="externalrotationright";
//        $fabereleft ="fabereleft";
//        $fabereright="fabereright";
//        $nachlasleft="nachlasleft";
//        $nachlasright="nachlasright";
//        $elysleft="elysleft";
//        $elysright="elysright";
//        $yeomansleft="yeomansleft";
//        $yeomansright="yeomansright";
//        $obersleft="obersleft";
//        $obersright="obersright";
//        $hibbsleft="hibbsleft";
//        $hibbsright="hibbsright";
//        $thomasleft="thomasleft";
//        $thomasright="thomasright";
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
//        $iliopsoas2left="iliopsoas2left";
//
//        $iliopsoas2right="iliopsoas2right";
//        $femleft="femleft";
//        $femright="femright";
//        $medleft="medleft";
//        $medright="medright";
//        $maxleft="maxleft";
//        $maxright="maxright";
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
//        $signature="signature";


        $sql2="update hipexam set pname='".$pname."',date='".$date."',gait='".$gait."',pelvic='".$pelvic."',ao='".$ao."',dysfunction='".$dysfunction."',shortlegleft='".$shortlegleft."',shortlegleftvalue='".$shortlegleftvalue."',shortlegleftother='".$shortlegleftother."',shortlegright='".$shortlegright."',shortlegrightvalue='".$shortlegrightvalue."',shortlegrightother='".$shortlegrightother."',piriformisleft='".$piriformisleft."',gluteusleft='".$gluteusleft."',iliopsoasleft='".$iliopsoasleft."',hamstringsleft='".$hamstringsleft."',note='".$note."',functional='".$functional."',orthotpedic='".$orthotpedic."',flexionleft='".$flexionleft."',flexionright='".$flexionright."',extensionleft='".$extensionleft."',extensionright='".$extensionright."',abductionleft='".$abductionleft."',abductionright='".$abductionright."',adductionleft='".$adductionleft."',adductionright='".$adductionright."',internalrotationleft='".$internalrotationleft."',internalrotationright='".$internalrotationright."',externalrotationleft='".$externalrotationleft."',externalrotationright='".$externalrotationright."',fabereleft ='".$fabereleft."',fabereright='".$fabereright."',nachlasleft='".$nachlasleft."',nachlasright='".$nachlasright."',elysleft='".$elysleft."',elysright='".$elysright."',yeomansleft='".$yeomansleft."',yeomansright='".$yeomansright."',obersleft='".$obersleft."',obersright='".$obersright."',hibbsleft='".$hibbsleft."',hibbsright='".$hibbsright."',thomasleft='".$thomasleft."',thomasright='".$thomasright."',neurological='".$neurological."',inguinalarealeft='".$inguinalarealeft."',inguinalarearight='".$inguinalarearight."',antleft='".$antleft."',antright='".$antright."',kneeleft='".$kneeleft."',kneeright='".$kneeright."',medialleft='".$medialleft."',medialright='".$medialright."',latleft='".$latleft."',latright='".$latright."',plantarleft='".$plantarleft."',plantarright='".$plantarright."',iliopsoasfirstleft='".$iliopsoasfirstleft."',iliopsoasfirstright='".$iliopsoasfirstright."',iliopsoas1left='".$iliopsoas1left."',iliopsoas1right='".$iliopsoas1right."',iliopsoas2left='".$iliopsoas2left."',iliopsoas2right='".$iliopsoas2right."',femleft='".$femleft."',femright='".$femright."',medleft='".$medleft."',medright='".$medright."',maxleft='".$maxleft."',maxright='".$maxright."',patellarleft='".$patellarleft."',patellarright='".$patellarright."',hsleft='".$hsleft."',hsright='".$hsright."',achillesleft='".$achillesleft."',achillesright='".$achillesright."',walking='".$walking."',standing='".$standing."',stairs='".$stairs."',other='".$other."',otherdefict='".$otherdefict."',comments='".$comments."',patientstatus='".$patientstatus."',diagnosis1='".$diagnosis1."',diagnosis2='".$diagnosis2."',diagnosis3='".$diagnosis3."',diagnosis4='".$diagnosis4."',diagnosis5='".$diagnosis5."',times='".$times."',weeks='".$weeks."',spinaldecompression='".$spinaldecompression."',chiropractic='".$chiropractic."',physicaltherapy='".$physicaltherapy."',bracing='".$bracing."',modalities='".$modalities."',supplementation='".$supplementation."',hep='".$hep."',radiographic='".$radiographic."',mri='".$mri."',scan='".$scan."',conduction='".$conduction."',emg='".$emg."',outsidereferral='".$outsidereferral."',dc='".$dc."',signature='".$signature."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'hipexaminsert':
    {
        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $pelvic=$_POST['pelvic'];
        $ao=$_POST['ao'];
        $dysfunction=$_POST['dysfunction'];
        $shortlegleft=$_POST['shortlegleft'];
        $shortlegleftvalue=$_POST['shortlegleftvalue'];
        $shortlegleftother=$_POST['shortlegleftother'];
        $shortlegright=$_POST['shortlegright'];
        $shortlegrightvalue=$_POST['shortlegrightvalue'];
        $shortlegrightother=$_POST['shortlegrightother'];
        $piriformisleft=$_POST['piriformisleft'];
        $gluteusleft=$_POST['gluteusleft'];
        $iliopsoasleft=$_POST['iliopsoasleft'];
        $hamstringsleft=$_POST['hamstringsleft'];
        $note=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['note']);
        $functional=$_POST['functional'];
        $orthotpedic=$_POST['orthotpedic'];
        $flexionleft=$_POST['flexionleft'];
        $flexionright=$_POST['flexionright'];
        $extensionleft=$_POST['extensionleft'];
        $extensionright=$_POST['extensionright'];
        $abductionleft=$_POST['abductionleft'];
        $abductionright=$_POST['abductionright'];
        $adductionleft=$_POST['adductionleft'];
        $adductionright=$_POST['adductionright'];
        $internalrotationleft=$_POST['internalrotationleft'];
        $internalrotationright=$_POST['internalrotationright'];
        $externalrotationleft=$_POST['externalrotationleft'];
        $externalrotationright=$_POST['externalrotationright'];
        $fabereleft =$_POST['fabereleft'];
        $fabereright=$_POST['fabereright'];
        $nachlasleft=$_POST['nachlasleft'];
        $nachlasright=$_POST['nachlasright'];
        $elysleft=$_POST['elysleft'];
        $elysright=$_POST['elysright'];
        $yeomansleft=$_POST['yeomansleft'];
        $yeomansright=$_POST['yeomansright'];
        $obersleft=$_POST['obersleft'];
        $obersright=$_POST['obersright'];
        $hibbsleft=$_POST['hibbsleft'];
        $hibbsright=$_POST['hibbsright'];
        $thomasleft=$_POST['thomasleft'];
        $thomasright=$_POST['thomasright'];
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
        $iliopsoas2left=$_POST['iliopsoas2left'];
        $iliopsoas2right=$_POST['iliopsoas2right'];
        $femleft=$_POST['femleft'];
        $femright=$_POST['femright'];
        $medleft=$_POST['medleft'];
        $medright=$_POST['medright'];
        $maxleft=$_POST['maxleft'];
        $maxright=$_POST['maxright'];
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
        $bracing=$_POST['bracing'];
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=$_POST['radiographic'];
        $mri=$_POST['mri'];
        $scan=$_POST['scan'];
        $conduction=$_POST['conduction'];
        $emg=$_POST['emg'];
        $outsidereferral=$_POST['outsidereferral'];
        $dc=$_POST['dc'];
        $signature=$_POST['signature'];



//        $user_name="silviya";
//        $pname="silviya";
//        $date="date";
//        $gait="gait";
//        $pelvic="pelvic";
//        $ao="ao";
//        $dysfunction="dysfunction";
//        $shortlegleft="shortlegleft";
//        $shortlegleftvalue="shortlegleftvalue";
//        $shortlegleftother="shortlegleftother";
//        $shortlegright="shortlegright";
//        $shortlegrightvalue="shortlegrightvalue";
//        $shortlegrightother="shortlegrightother";
//        $piriformisleft="piriformisleft";
//        $gluteusleft="gluteusleft";
//        $iliopsoasleft="iliopsoasleft";
//        $hamstringsleft="hamstringsleft";
//        $note="note";
//        $functional="functional";
//        $orthotpedic="orthotpedic";
//        $flexionleft="flexionleft";
//        $flexionright="flexionright";
//        $extensionleft="extensionleft";
//        $extensionright="extensionright";
//        $abductionleft="abductionleft";
//        $abductionright="abductionright";
//        $adductionleft="adductionleft";
//        $adductionright="adductionright";
//        $internalrotationleft="internalrotationleft";
//        $internalrotationright="internalrotationright";
//        $externalrotationleft="externalrotationleft";
//        $externalrotationright="externalrotationright";
//        $fabereleft ="fabereleft";
//        $fabereright="fabereright";
//        $nachlasleft="nachlasleft";
//        $nachlasright="nachlasright";
//        $elysleft="elysleft";
//        $elysright="elysright";
//        $yeomansleft="yeomansleft";
//        $yeomansright="yeomansright";
//        $obersleft="obersleft";
//        $obersright="obersright";
//        $hibbsleft="hibbsleft";
//        $hibbsright="hibbsright";
//        $thomasleft="thomasleft";
//        $thomasright="thomasright";
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
//        $iliopsoas2left="iliopsoas2left";
//
//        $iliopsoas2right="iliopsoas2right";
//        $femleft="femleft";
//        $femright="femright";
//        $medleft="medleft";
//        $medright="medright";
//        $maxleft="maxleft";
//        $maxright="maxright";
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
//        $signature="signature";

        $sql3="INSERT INTO hipexam(hipexamno,username,pname,date,gait,pelvic,ao,dysfunction,shortlegleft,shortlegleftvalue,shortlegleftother,shortlegright,shortlegrightvalue,shortlegrightother,piriformisleft,gluteusleft,iliopsoasleft,hamstringsleft,note,functional,orthotpedic,flexionleft,flexionright,extensionleft,extensionright,abductionleft,abductionright,adductionleft,adductionright,internalrotationleft,internalrotationright,externalrotationleft,externalrotationright,fabereleft,fabereright,nachlasleft,nachlasright,elysleft,elysright,yeomansleft,yeomansright,obersleft,obersright,hibbsleft,hibbsright,thomasleft,thomasright,neurological,inguinalarealeft,inguinalarearight,antleft,antright,kneeleft,kneeright,medialleft,medialright,latleft,latright,plantarleft,plantarright,iliopsoasfirstleft,iliopsoasfirstright,iliopsoas1left,iliopsoas1right,iliopsoas2left,iliopsoas2right,femleft,femright,medleft,medright,maxleft,maxright,patellarleft,patellarright,hsleft,hsright,achillesleft,achillesright,walking,standing,stairs,other,otherdefict,comments,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,times,weeks,spinaldecompression,chiropractic,physicaltherapy,bracing,modalities,supplementation,hep,radiographic,mri,scan,conduction,emg,outsidereferral,dc,signature) VALUES ('','".$user_name."','".$pname."','".$date."','".$gait."','".$pelvic."','".$ao."','".$dysfunction."','".$shortlegleft."','".$shortlegleftvalue."','".$shortlegleftother."','".$shortlegright."','".$shortlegrightvalue."','".$shortlegrightother."','".$piriformisleft."','".$gluteusleft."','".$iliopsoasleft."','".$hamstringsleft."','".$note."','".$functional."','".$orthotpedic."','".$flexionleft."','".$flexionright."','".$extensionleft."','".$extensionright."','".$abductionleft."','".$abductionright."','".$adductionleft."','".$adductionright."','".$internalrotationleft."','".$internalrotationright."','".$externalrotationleft."','".$externalrotationright."','".$fabereleft."','". $fabereright."','". $nachlasleft."','". $nachlasright."','". $elysleft."','". $elysright."','". $yeomansleft."','". $yeomansright."','". $obersleft."','". $obersright."','". $hibbsleft."','". $hibbsright."','". $thomasleft."','". $thomasright."','". $neurological."','". $inguinalarealeft."','". $inguinalarearight."','". $antleft."','". $antright."','". $kneeleft."','". $kneeright."','". $medialleft."','". $medialright."','". $latleft."','". $latright."','". $plantarleft."','". $plantarright."','". $iliopsoasfirstleft."','". $iliopsoasfirstright."','". $iliopsoas1left."','". $iliopsoas1right."','". $iliopsoas2left."','". $iliopsoas2right."','". $femleft."','". $femright."','". $medleft."','". $medright."','". $maxleft."','". $maxright."','". $patellarleft."','". $patellarright."','". $hsleft."','". $hsright."','". $achillesleft."','". $achillesright."','". $walking."','". $standing."','". $stairs."','". $other."','". $otherdefict."','". $comments."','". $patientstatus."','". $diagnosis1."','". $diagnosis2."','". $diagnosis3."','". $diagnosis4."','". $diagnosis5."','". $times."','". $weeks."','". $spinaldecompression."','". $chiropractic."','". $physicaltherapy."','". $bracing."','". $modalities."','". $supplementation."','". $hep."','". $radiographic."','". $mri."','". $scan."','". $conduction."','". $emg."','". $outsidereferral."','". $dc."','". $signature."')";

       // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hipexamdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from hipexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hipexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>