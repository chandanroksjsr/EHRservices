<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'soapnotesselect':
    {

       $username = $_POST['username'];
      //   $username = "username";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_soapnotes WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "Yes", "soapnotesuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "Yes", "soapid": "'.$row->soapid.'","username": "'.$row->username.'","pname": "'.$row->pname.'","headache": "'.$row->headache.'","neckpain": "'.$row->neckpain.'","rightshoulderpain": "'.$row->rightshoulderpain.'","leftshoulderpain": "'.$row->leftshoulderpain.'","chestpain": "'.$row->chestpain.'","rightarmpain": "'.$row->rightarmpain.'","rightproxi": "'.$row->rightproxi.'","leftarmpain": "'.$row->leftarmpain.'","leftproxi": "'.$row->leftproxi.'","rightelbowpain": "'.$row->rightelbowpain.'","leftelbowpain": "'.$row->leftelbowpain.'","rightwristpain": "'.$row->rightwristpain.'","leftwristpain": "'.$row->leftwristpain.'","righthandpain": "'.$row->righthandpain.'","lefthandpain": "'.$row->lefthandpain.'","mbp": "'.$row->mbp.'","rightribpain": "'.$row->rightribpain.'","painscale1": "'.$row->painscale1.'","leftribpain": "'.$row->leftribpain.'","painscale2": "'.$row->painscale2.'","lbp": "'.$row->lbp.'","rightsipain": "'.$row->rightsipain.'","leftsipain": "'.$row->leftsipain.'","righthippain": "'.$row->righthippain.'","lefthippain": "'.$row->lefthippain.'","rightgluteulpain": "'.$row->rightgluteulpain.'","leftgluteulpain": "'.$row->leftgluteulpain.'","rightlegpain": "'.$row->rightlegpain.'","leftlegpain": "'.$row->leftlegpain.'","rightkneepain": "'.$row->rightkneepain.'","leftkneepain": "'.$row->leftkneepain.'","rightanklepain": "'.$row->rightanklepain.'","leftanklepain": "'.$row->leftanklepain.'","rightfootpain": "'.$row->rightfootpain.'","leftfootpain": "'.$row->leftfootpain.'","painscale": "'.$row->painscale.'","date1": "'.$row->date1.'","improved": "'.$row->improved.'","worsened": "'.$row->worsened.'","e1e2": "'.$row->e1e2.'","xray": "'.$row->xray.'","offwork1": "'.$row->offwork1.'","reeval1": "'.$row->reeval1.'","date2": "'.$row->date2.'","improved1": "'.$row->improved1.'","worsened1": "'.$row->worsened1.'","fixation1": "'.$row->fixation1.'","notimproved1": "'.$row->notimproved1.'","scsm1": "'.$row->scsm1.'","date3": "'.$row->date3.'","improved2": "'.$row->improved2.'","worsened2": "'.$row->worsened2.'","fixation2": "'.$row->fixation2.'","notimproved2": "'.$row->notimproved2.'","scsm2": "'.$row->scsm2.'","date4": "'.$row->date4.'","improved3": "'.$row->improved3.'","worsened3": "'.$row->worsened3.'","fixation3": "'.$row->fixation3.'","notimproved3": "'.$row->notimproved3.'","scsm3": "'.$row->scsm3.'","date5": "'.$row->date5.'","improved4": "'.$row->improved4.'","worsened4": "'.$row->worsened4.'","fixation4": "'.$row->fixation4.'","notimproved4": "'.$row->notimproved4.'","scsm4": "'.$row->scsm4.'","date6": "'.$row->date6.'","improved5": "'.$row->improved5.'","worsened5": "'.$row->worsened5.'","fixation5": "'.$row->fixation5.'","notimproved5": "'.$row->notimproved5.'","scsm5": "'.$row->scsm5.'","date7": "'.$row->date7.'","improved6": "'.$row->improved6.'","worsened6": "'.$row->worsened6.'","fixation6": "'.$row->fixation6.'","notimproved6": "'.$row->notimproved6.'","scsm6": "'.$row->scsm6.'","date8": "'.$row->date8.'","improved7": "'.$row->improved7.'","worsened7": "'.$row->worsened7.'","fixation7": "'.$row->fixation7.'","notimproved7": "'.$row->notimproved7.'","scsm7": "'.$row->scsm7.'","date9": "'.$row->date9.'","improved8": "'.$row->improved8.'","worsened8": "'.$row->worsened8.'","fixation8": "'.$row->fixation8.'","notimproved8": "'.$row->notimproved8.'","scsm8": "'.$row->scsm8.'","sign": "'.$row->sign.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'soapnotesedit':
    {
        $username=$_POST['username'];
        $pname=$_POST['pname'];
        $headache=$_POST['headache'];
        $neckpain=$_POST['neckpain'];
        $rightshoulderpain=$_POST['rightshoulderpain'];
        $leftshoulderpain=$_POST['leftshoulderpain'];
        $chestpain=$_POST['chestpain'];
        $rightarmpain=$_POST['rightarmpain'];
        $rightproxi=$_POST['rightproxi'];
        $leftarmpain=$_POST['leftarmpain'];
        $leftproxi=$_POST['leftproxi'];
        $rightelbowpain=$_POST['rightelbowpain'];
        $leftelbowpain=$_POST['leftelbowpain'];
        $rightwristpain=$_POST['rightwristpain'];
        $leftwristpain=$_POST['leftwristpain'];
        $righthandpain=$_POST['righthandpain'];
        $lefthandpain=$_POST['lefthandpain'];
        $mbp=$_POST['mbp'];
        $rightribpain=$_POST['rightribpain'];
        $painscale1=$_POST['painscale1'];
        $leftribpain=$_POST['leftribpain'];
        $painscale2=$_POST['painscale2'];
        $lbp=$_POST['lbp'];
        $rightsipain=$_POST['rightsipain'];
        $leftsipain=$_POST['leftsipain'];
        $righthippain=$_POST['righthippain'];
        $lefthippain=$_POST['lefthippain'];
        $rightgluteulpain=$_POST['rightgluteulpain'];
        $leftgluteulpain=$_POST['leftgluteulpain'];
        $rightlegpain=$_POST['rightlegpain'];
        $leftlegpain=$_POST['leftlegpain'];
        $rightkneepain=$_POST['rightkneepain'];
        $leftkneepain=$_POST['leftkneepain'];
        $rightanklepain=$_POST['rightanklepain'];
        $leftanklepain=$_POST['leftanklepain'];
        $rightfootpain=$_POST['rightfootpain'];
        $leftfootpain=$_POST['leftfootpain'];
        $painscale=$_POST['painscale'];
        $date1=$_POST['date1'];
        $improved=$_POST['improved'];
        $worsened=$_POST['worsened'];
       $e1e2=$_POST['e1e2'];

        $xray=$_POST['xray'];
        $offwork1=$_POST['offwork1'];
        $reeval1=$_POST['reeval1'];
        $date2=$_POST['date2'];
        $improved1=$_POST['improved1'];
        $worsened1=$_POST['worsened1'];
        $fixation1=$_POST['fixation1'];
        $notimproved1=$_POST['notimproved1'];
        $scsm1=$_POST['scsm1'];
        $date3=$_POST['date3'];
        $improved2=$_POST['improved2'];
        $worsened2=$_POST['worsened2'];
        $fixation2=$_POST['fixation2'];
        $notimproved2=$_POST['notimproved2'];
        $scsm2=$_POST['scsm2'];
        $date4=$_POST['date4'];
        $improved3=$_POST['improved3'];
        $worsened3=$_POST['worsened3'];
        $fixation3=$_POST['fixation3'];
        $notimproved3=$_POST['notimproved3'];
        $scsm3=$_POST['scsm3'];
        $date5=$_POST['date5'];
        $improved4=$_POST['improved4'];
        $worsened4=$_POST['worsened4'];
        $fixation4=$_POST['fixation4'];
        $notimproved4=$_POST['notimproved4'];
        $scsm4=$_POST['scsm4'];
        $date6=$_POST['date6'];
        $improved5=$_POST['improved5'];
        $worsened5=$_POST['worsened5'];
        $fixation5=$_POST['fixation5'];
        $notimproved5=$_POST['notimproved5'];
        $scsm5=$_POST['scsm5'];
        $date7=$_POST['date7'];
        $improved6=$_POST['improved6'];
        $worsened6=$_POST['worsened6'];
        $fixation6=$_POST['fixation6'];
        $notimproved6=$_POST['notimproved6'];
        $scsm6=$_POST['scsm6'];
        $date8=$_POST['date8'];
        $improved7=$_POST['improved7'];
        $worsened7=$_POST['worsened7'];
        $fixation7=$_POST['fixation7'];
        $notimproved7=$_POST['notimproved7'];
        $scsm7=$_POST['scsm7'];
        $date9=$_POST['date9'];
        $improved8=$_POST['improved8'];
        $worsened8=$_POST['worsened8'];
        $fixation8=$_POST['fixation8'];
        $notimproved8=$_POST['notimproved8'];
        $scsm8=$_POST['scsm8'];
        $sign=$_POST['sign'];



        // $username="username";$pname="pn2ame";$headache="hea2dache";$neckpain="neck2pain";$rightshoulderpain="rights2houlderpain";$leftshoulderpain="leftshoulderpain";$chestpain="chestpain";$rightarmpain="rightarmpain";$rightproxi="rightproxi";$leftarmpain="leftarmpain";$leftproxi="leftproxi";$rightelbowpain="rightelbowpain";$leftelbowpain="leftelbowpain";$rightwristpain="rightwristpain";$leftwristpain="leftwristpain";$righthandpain="righthandpain";$lefthandpain="lefthandpain";$mbp="mbp";$rightribpain="rightribpain";$painscale1="painscale1";$leftribpain="leftribpain";$painscale2="painscale2";$lbp="lbp";$rightsipain="rightsipain";$leftsipain="leftsipain";$righthippain="righthippain";$lefthippain="lefthippain";$rightgluteulpain="rightgluteulpain";$leftgluteulpain="leftgluteulpain";$rightlegpain="rightlegpain";$leftlegpain="leftlegpain";$rightkneepain="rightkneepain";$leftkneepain="leftkneepain";$rightanklepain="rightanklepain";$leftanklepain="leftanklepain";$rightfootpain="rightfootpain";$leftfootpain="leftfootpain";$painscale="painscale";$date1="date1";$improved="improved";$worsened="worsened";$e1e2="e1e2";$xray="xray";$offwork1="offwork1";$reeval1="reeval1";$date2="date2";$improved1="improved1";$worsened1="worsened1";$fixation1="fixation1";$notimproved1="notimproved1";$scsm1="scsm1";$date3="date3";$improved2="improved2";$worsened2="worsened2";$fixation2="fixation2";$notimproved2="notimproved2";$scsm2="scsm2";$date4="date4";$improved3="improved3";$worsened3="worsened3";$fixation3="fixation3";$notimproved3="notimproved3";$scsm3="scsm3";$date5="date5";$improved4="improved4";$worsened4="worsened4";$fixation4="fixation4";$notimproved4="notimproved4";$scsm4="scsm4";$date6="date6";$improved5="improved5";$worsened5="worsened5";$fixation5="fixation5";$notimproved5="notimproved5";$scsm5="scsm5";$date7="date7";$improved6="improved6";$worsened6="worsened6";$fixation6="fixation6";$notimproved6="notimproved6";$scsm6="scsm6";$date8="date8";$improved7="improved7";$worsened7="worsened7";$fixation7="fixation7";$notimproved7="notimproved7";$scsm7="scsm7";$date9="date9";$improved8="improved8";$worsened8="worsened8";$fixation8="fixation8";$notimproved8="notimproved8";$scsm8="scsm8";$sign="sign";

        $sql2="update tbl_soapnotes set pname='".$pname."',headache='".$headache."',neckpain='".$neckpain."',rightshoulderpain='".$rightshoulderpain."',leftshoulderpain='".$leftshoulderpain."',chestpain='".$chestpain."',rightarmpain='".$rightarmpain."',rightproxi='".$rightproxi."',leftarmpain='".$leftarmpain."',leftproxi='".$leftproxi."',rightelbowpain='".$rightelbowpain."',leftelbowpain='".$leftelbowpain."',rightwristpain='".$rightwristpain."',leftwristpain='".$leftwristpain."',righthandpain='".$righthandpain."',lefthandpain='".$lefthandpain."',mbp='".$mbp."',rightribpain='".$rightribpain."',painscale1='".$painscale1."',leftribpain='".$leftribpain."',painscale2='".$painscale2."',lbp='".$lbp."',rightsipain='".$rightsipain."',leftsipain='".$leftsipain."',righthippain='".$righthippain."',lefthippain='".$lefthippain."',rightgluteulpain='".$rightgluteulpain."',leftgluteulpain='".$leftgluteulpain."',rightlegpain='".$rightlegpain."',leftlegpain='".$leftlegpain."',rightkneepain='".$rightkneepain."',leftkneepain='".$leftkneepain."',rightanklepain='".$rightanklepain."',leftanklepain='".$leftanklepain."',rightfootpain='".$rightfootpain."',leftfootpain='".$leftfootpain."',painscale='".$painscale."',date1='".$date1."',improved='".$improved."',worsened='".$worsened."',e1e2='".$e1e2."',xray='".$xray."',offwork1='".$offwork1."',reeval1='".$reeval1."',date2='".$date2."',improved1='".$improved1."',worsened1='".$worsened1."',fixation1='".$fixation1."',notimproved1='".$notimproved1."',scsm1='".$scsm1."',date3='".$date3."',improved2='".$improved2."',worsened2='".$worsened2."',fixation2='".$fixation2."',notimproved2='".$notimproved2."',scsm2='".$scsm2."',date4='".$date4."',improved3='".$improved3."',worsened3='".$worsened3."',fixation3='".$fixation3."',notimproved3='".$notimproved3."',scsm3='".$scsm3."',date5='".$date5."',improved4='".$improved4."',worsened4='".$worsened4."',fixation4='".$fixation4."',notimproved4='".$notimproved4."',scsm4='".$scsm4."',date6='".$date6."',improved5='".$improved5."',worsened5='".$worsened5."',fixation5='".$fixation5."',notimproved5='".$notimproved5."',scsm5='".$scsm5."',date7='".$date7."',improved6='".$improved6."',worsened6='".$worsened6."',fixation6='".$fixation6."',notimproved6='".$notimproved6."',scsm6='".$scsm6."',date8='".$date8."',improved7='".$improved7."',worsened7='".$worsened7."',fixation7='".$fixation7."',notimproved7='".$notimproved7."',scsm7='".$scsm7."',date9='".$date9."',improved8='".$improved8."',worsened8='".$worsened8."',fixation8='".$fixation8."',notimproved8='".$notimproved8."',scsm8='".$scsm8."',sign='".$sign."' WHERE  username ='".$username."'";

       // echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'soapnotesinsert':
    {

        $username=$_POST['username'];
        $pname=$_POST['pname'];
        $headache=$_POST['headache'];
        $neckpain=$_POST['neckpain'];
        $rightshoulderpain=$_POST['rightshoulderpain'];
        $leftshoulderpain=$_POST['leftshoulderpain'];
        $chestpain=$_POST['chestpain'];
        $rightarmpain=$_POST['rightarmpain'];
        $rightproxi=$_POST['rightproxi'];
        $leftarmpain=$_POST['leftarmpain'];
        $leftproxi=$_POST['leftproxi'];
        $rightelbowpain=$_POST['rightelbowpain'];
        $leftelbowpain=$_POST['leftelbowpain'];
        $rightwristpain=$_POST['rightwristpain'];
        $leftwristpain=$_POST['leftwristpain'];
        $righthandpain=$_POST['righthandpain'];
        $lefthandpain=$_POST['lefthandpain'];
        $mbp=$_POST['mbp'];
        $rightribpain=$_POST['rightribpain'];
        $painscale1=$_POST['painscale1'];
        $leftribpain=$_POST['leftribpain'];
        $painscale2=$_POST['painscale2'];
        $lbp=$_POST['lbp'];
        $rightsipain=$_POST['rightsipain'];
        $leftsipain=$_POST['leftsipain'];
        $righthippain=$_POST['righthippain'];
        $lefthippain=$_POST['lefthippain'];
        $rightgluteulpain=$_POST['rightgluteulpain'];
        $leftgluteulpain=$_POST['leftgluteulpain'];
        $rightlegpain=$_POST['rightlegpain'];
        $leftlegpain=$_POST['leftlegpain'];
        $rightkneepain=$_POST['rightkneepain'];
        $leftkneepain=$_POST['leftkneepain'];
        $rightanklepain=$_POST['rightanklepain'];
        $leftanklepain=$_POST['leftanklepain'];
        $rightfootpain=$_POST['rightfootpain'];
        $leftfootpain=$_POST['leftfootpain'];
        $painscale=$_POST['painscale'];
        $date1=$_POST['date1'];
        $improved=$_POST['improved'];
        $worsened=$_POST['worsened'];
        $e1e2=$_POST['e1e2'];
        $xray=$_POST['xray'];
        $offwork1=$_POST['offwork1'];
        $reeval1=$_POST['reeval1'];
        $date2=$_POST['date2'];
        $improved1=$_POST['improved1'];
        $worsened1=$_POST['worsened1'];
        $fixation1=$_POST['fixation1'];
        $notimproved1=$_POST['notimproved1'];
        $scsm1=$_POST['scsm1'];
        $date3=$_POST['date3'];
        $improved2=$_POST['improved2'];
        $worsened2=$_POST['worsened2'];
        $fixation2=$_POST['fixation2'];
        $notimproved2=$_POST['notimproved2'];
        $scsm2=$_POST['scsm2'];
        $date4=$_POST['date4'];
        $improved3=$_POST['improved3'];
        $worsened3=$_POST['worsened3'];
        $fixation3=$_POST['fixation3'];
        $notimproved3=$_POST['notimproved3'];
        $scsm3=$_POST['scsm3'];
        $date5=$_POST['date5'];
        $improved4=$_POST['improved4'];
        $worsened4=$_POST['worsened4'];
        $fixation4=$_POST['fixation4'];
        $notimproved4=$_POST['notimproved4'];
        $scsm4=$_POST['scsm4'];
        $date6=$_POST['date6'];
        $improved5=$_POST['improved5'];
        $worsened5=$_POST['worsened5'];
        $fixation5=$_POST['fixation5'];
        $notimproved5=$_POST['notimproved5'];
        $scsm5=$_POST['scsm5'];
        $date7=$_POST['date7'];
        $improved6=$_POST['improved6'];
        $worsened6=$_POST['worsened6'];
        $fixation6=$_POST['fixation6'];
        $notimproved6=$_POST['notimproved6'];
        $scsm6=$_POST['scsm6'];
        $date8=$_POST['date8'];
        $improved7=$_POST['improved7'];
        $worsened7=$_POST['worsened7'];
        $fixation7=$_POST['fixation7'];
        $notimproved7=$_POST['notimproved7'];
        $scsm7=$_POST['scsm7'];
        $date9=$_POST['date9'];
        $improved8=$_POST['improved8'];
        $worsened8=$_POST['worsened8'];
        $fixation8=$_POST['fixation8'];
        $notimproved8=$_POST['notimproved8'];
        $scsm8=$_POST['scsm8'];
        $sign=$_POST['sign'];



        //   $username="username";$pname="pname";$headache="headache";$neckpain="neckpain";$rightshoulderpain="rightshoulderpain";$leftshoulderpain="leftshoulderpain";$chestpain="chestpain";$rightarmpain="rightarmpain";$rightproxi="rightproxi";$leftarmpain="leftarmpain";$leftproxi="leftproxi";$rightelbowpain="rightelbowpain";$leftelbowpain="leftelbowpain";$rightwristpain="rightwristpain";$leftwristpain="leftwristpain";$righthandpain="righthandpain";$lefthandpain="lefthandpain";$mbp="mbp";$rightribpain="rightribpain";$painscale1="painscale1";$leftribpain="leftribpain";$painscale2="painscale2";$lbp="lbp";$rightsipain="rightsipain";$leftsipain="leftsipain";$righthippain="righthippain";$lefthippain="lefthippain";$rightgluteulpain="rightgluteulpain";$leftgluteulpain="leftgluteulpain";$rightlegpain="rightlegpain";$leftlegpain="leftlegpain";$rightkneepain="rightkneepain";$leftkneepain="leftkneepain";$rightanklepain="rightanklepain";$leftanklepain="leftanklepain";$rightfootpain="rightfootpain";$leftfootpain="leftfootpain";$painscale="painscale";$date1="date1";$improved="improved";$worsened="worsened";$e1e2="e1e2";$xray="xray";$offwork1="offwork1";$reeval1="reeval1";$date2="date2";$improved1="improved1";$worsened1="worsened1";$fixation1="fixation1";$notimproved1="notimproved1";$scsm1="scsm1";$date3="date3";$improved2="improved2";$worsened2="worsened2";$fixation2="fixation2";$notimproved2="notimproved2";$scsm2="scsm2";$date4="date4";$improved3="improved3";$worsened3="worsened3";$fixation3="fixation3";$notimproved3="notimproved3";$scsm3="scsm3";$date5="date5";$improved4="improved4";$worsened4="worsened4";$fixation4="fixation4";$notimproved4="notimproved4";$scsm4="scsm4";$date6="date6";$improved5="improved5";$worsened5="worsened5";$fixation5="fixation5";$notimproved5="notimproved5";$scsm5="scsm5";$date7="date7";$improved6="improved6";$worsened6="worsened6";$fixation6="fixation6";$notimproved6="notimproved6";$scsm6="scsm6";$date8="date8";$improved7="improved7";$worsened7="worsened7";$fixation7="fixation7";$notimproved7="notimproved7";$scsm7="scsm7";$date9="date9";$improved8="improved8";$worsened8="worsened8";$fixation8="fixation8";$notimproved8="notimproved8";$scsm8="scsm8";$sign="sign";


        $sql3="insert into tbl_soapnotes(soapid,username,pname,headache,neckpain,rightshoulderpain,leftshoulderpain,chestpain,rightarmpain,rightproxi,leftarmpain,leftproxi,rightelbowpain,leftelbowpain,rightwristpain,leftwristpain,righthandpain,lefthandpain,mbp,rightribpain,painscale1,leftribpain,painscale2,lbp,rightsipain,leftsipain,righthippain,lefthippain,rightgluteulpain,leftgluteulpain,rightlegpain,leftlegpain,rightkneepain,leftkneepain,rightanklepain,leftanklepain,rightfootpain,leftfootpain,painscale,date1,improved,worsened,e1e2,xray,offwork1,reeval1,date2,improved1,worsened1,fixation1,notimproved1,scsm1,date3,improved2,worsened2,fixation2,notimproved2,scsm2,date4,improved3,worsened3,fixation3,notimproved3,scsm3,date5,improved4,worsened4,fixation4,notimproved4,scsm4,date6,improved5,worsened5,fixation5,notimproved5,scsm5,date7,improved6,worsened6,fixation6,notimproved6,scsm6,date8,improved7,worsened7,fixation7,notimproved7,scsm7,date9,improved8,worsened8,fixation8,notimproved8,scsm8,sign) values ('','".$username."','".$pname."','".$headache."','".$neckpain."','".$rightshoulderpain."','".$leftshoulderpain."','".$chestpain."','".$rightarmpain."','".$rightproxi."','".$leftarmpain."','".$leftproxi."','".$rightelbowpain."','".$leftelbowpain."','".$rightwristpain."','".$leftwristpain."','".$righthandpain."','".$lefthandpain."','".$mbp."','".$rightribpain."','".$painscale1."','".$leftribpain."','".$painscale2."','".$lbp."','".$rightsipain."','".$leftsipain."','".$righthippain."','".$lefthippain."','".$rightgluteulpain."','".$leftgluteulpain."','".$rightlegpain."','".$leftlegpain."','".$rightkneepain."','".$leftkneepain."','".$rightanklepain."','".$leftanklepain."','".$rightfootpain."','".$leftfootpain."','".$painscale."','".$date1."','".$improved."','".$worsened."','".$e1e2."','".$xray."','".$offwork1."','".$reeval1."','".$date2."','".$improved1."','".$worsened1."','".$fixation1."','".$notimproved1."','".$scsm1."','".$date3."','".$improved2."','".$worsened2."','".$fixation2."','".$notimproved2."','".$scsm2."','".$date4."','".$improved3."','".$worsened3."','".$fixation3."','".$notimproved3."','".$scsm3."','".$date5."','".$improved4."','".$worsened4."','".$fixation4."','".$notimproved4."','".$scsm4."','".$date6."','".$improved5."','".$worsened5."','".$fixation5."','".$notimproved5."','".$scsm5."','".$date7."','".$improved6."','".$worsened6."','".$fixation6."','".$notimproved6."','".$scsm6."','".$date8."','".$improved7."','".$worsened7."','".$fixation7."','".$notimproved7."','".$scsm7."','".$date9."','".$improved8."','".$worsened8."','".$fixation8."','".$notimproved8."','".$scsm8."','".$sign."')";

      //  echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'soapnotesdelete':
    {
        $username= $_POST['username'];
//        $username= "samples";
        $sql4 ="delete from tbl_soapnotes where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            $sql4 ="delete from soapnotes_diagnosis where username='".$username."'";
            if(mysql_query($sql4))
            {
                //echo $sql4;

                $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "Yes", "message" : "1" } }';

            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "No", "message" : "'.$error.'" } }';
            }



        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "soapnotes Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>