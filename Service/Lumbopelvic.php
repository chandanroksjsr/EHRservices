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
    case 'lumbopelvicselect':
    {

       $user_name=$_POST['username'];
     //     $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_lumbopelvicexam WHERE username='$user_name'";

//echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "Yes", "lumbopelvic List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "Yes",  "pname":"'.$row->pname.'","date":"'.$row->date.'","gait":"'.$row->gait.'","pelvicunleveling":"'.$row->pelvicunleveling.'","ao":"'.$row->ao.'","allsoft":"'.$row->allsoft.'","leglengthcheckl":"'.$row->leglengthcheckl.'","leglengthl":"'.$row->leglengthl.'","other1":"'.$row->other1.'","leglengthcheckr":"'.$row->leglengthcheckr.'","leglengthr":"'.$row->leglengthr.'","other2":"'.$row->other2.'","piriformis":"'.$row->piriformis.'","quadlumb":"'.$row->quadlumb.'","paraspinals":"'.$row->paraspinals.'","gluteus":"'.$row->gluteus.'","gluteusmedius":"'.$row->gluteusmedius.'","hamstrings":"'.$row->hamstrings.'","iliopsoas":"'.$row->iliopsoas.'","rectus":"'.$row->rectus.'","obliques":"'.$row->obliques.'","othernotes":"'.$row->othernotes.'","functionalrangeofmotion":"'.$row->functionalrangeofmotion.'","subluxation":"'.$row->subluxation.'","orthopedic":"'.$row->orthopedic.'","flexion":"'.$row->flexion.'","t89":"'.$row->t89.'","t910":"'.$row->t910.'","trendelburgl":"'.$row->trendelburgl.'","trendelburgr":"'.$row->trendelburgr.'","extension":"'.$row->extension.'","t1011":"'.$row->t1011.'","t1112":"'.$row->t1112.'","kempsl":"'.$row->kempsl.'","kempsr":"'.$row->kempsr.'","lflexion":"'.$row->lflexion.'","rflexion":"'.$row->rflexion.'","t12l1":"'.$row->t12l1.'","l12":"'.$row->l12.'","slumpl":"'.$row->slumpl.'","slumpr":"'.$row->slumpr.'","lrotation":"'.$row->lrotation.'","rrotation":"'.$row->rrotation.'","l23":"'.$row->l23.'","l34":"'.$row->l34.'","straightlegl":"'.$row->straightlegl.'","straightlegr":"'.$row->straightlegr.'","l45":"'.$row->l45.'","l5s1":"'.$row->l5s1.'","welllegl":"'.$row->welllegl.'","welllegr":"'.$row->welllegr.'","lsi":"'.$row->lsi.'","rsi":"'.$row->rsi.'","nachlasl":"'.$row->nachlasl.'","nachlasr":"'.$row->nachlasr.'","positiveminor":"'.$row->positiveminor.'","positiveadam":"'.$row->positiveadam.'","neurologicaltest":"'.$row->neurologicaltest.'","l1l":"'.$row->l1l.'","l1r":"'.$row->l1r.'","l15l":"'.$row->l15l.'","l15r":"'.$row->l15r.'","l2l":"'.$row->l2l.'","l2r":"'.$row->l2r.'","l25l":"'.$row->l25l.'","l25r":"'.$row->l25r.'","l3l":"'.$row->l3l.'","l3r":"'.$row->l3r.'","l35l":"'.$row->l35l.'","l35r":"'.$row->l35r.'","l4l":"'.$row->l4l.'","l4r":"'.$row->l4r.'","l45l":"'.$row->l45l.'","l45r":"'.$row->l45r.'","l4l3":"'.$row->l4l3.'","l4r3":"'.$row->l4r3.'","l5l":"'.$row->l5l.'","l5r":"'.$row->l5r.'","l55l":"'.$row->l55l.'","l55r":"'.$row->l55r.'","l5l3":"'.$row->l5l3.'","l5r3":"'.$row->l5r3.'","sl":"'.$row->sl.'","sr":"'.$row->sr.'","s5l":"'.$row->s5l.'","s5r":"'.$row->s5r.'","sil":"'.$row->sil.'","sir":"'.$row->sir.'","sitting":"'.$row->sitting.'","lifting":"'.$row->lifting.'","walking":"'.$row->walking.'","stairs":"'.$row->stairs.'","otherfunctional":"'.$row->otherfunctional.'","break_text3":"'.$row->break_text3.'","assessment":"'.$row->assessment.'","patientstatus":"'.$row->patientstatus.'","diagnosis1":"'.$row->diagnosis1.'","diagnosis2":"'.$row->diagnosis2.'","diagnosis3":"'.$row->diagnosis3.'","diagnosis4":"'.$row->diagnosis4.'","diagnosis5":"'.$row->diagnosis5.'","times":"'.$row->times.'","week":"'.$row->week.'","spinal":"'.$row->spinal.'","chiropractic":"'.$row->chiropractic.'","physical":"'.$row->physical.'","orthotics":"'.$row->orthotics.'","modalities":"'.$row->modalities.'","supplementation":"'.$row->supplementation.'","hep":"'.$row->hep.'","radiographic":"'.$row->radiographic.'","mri":"'.$row->mri.'","ctscan":"'.$row->ctscan.'","nerve":"'.$row->nerve.'","emg":"'.$row->emg.'","outside":"'.$row->outside.'","dc":"'.$row->dc.'","otheraddress":"'.$row->otheraddress.'","break_text4":"'.$row->break_text4.'","sign":"'.$row->sign.'","message": "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'lumbopelvicedit':
    {
      $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $pelvicunleveling=$_POST['pelvicunleveling'];
        $ao=$_POST['ao'];
        $allsoft=$_POST['allsoft'];
        $leglengthcheckl=$_POST['leglengthcheckl'];
        $leglengthl=addslashes($_POST['leglengthl']);
        $other1=$_POST['other1'];
        $leglengthcheckr=$_POST['leglengthcheckr'];
        $leglengthr=addslashes($_POST['leglengthr']);
        $other2=$_POST['other2'];
        $piriformis=$_POST['piriformis'];
        $quadlumb=$_POST['quadlumb'];
        $paraspinals=$_POST['paraspinals'];
        $gluteus=$_POST['gluteus'];
        $gluteusmedius=$_POST['gluteusmedius'];
        $hamstrings=$_POST['hamstrings'];
        $iliopsoas=$_POST['iliopsoas'];
        $rectus=$_POST['rectus'];
        $obliques=$_POST['obliques'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $subluxation=$_POST['subluxation'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $t89=$_POST['t89'];
        $t910=$_POST['t910'];
        $trendelburgl=$_POST['trendelburgl'];
        $trendelburgr=$_POST['trendelburgr'];
        $extension=$_POST['extension'];
        $t1011=$_POST['t1011'];
        $t1112=$_POST['t1112'];
        $kempsl=$_POST['kempsl'];
        $kempsr=$_POST['kempsr'];
        $lflexion=$_POST['lflexion'];
        $rflexion=$_POST['rflexion'];
        $t12l1=$_POST['t12l1'];
        $l12=$_POST['l12'];
        $slumpl=$_POST['slumpl'];
        $slumpr=$_POST['slumpr'];
        $lrotation=$_POST['lrotation'];
        $rrotation=$_POST['rrotation'];
        $l23=$_POST['l23'];
        $l34=$_POST['l34'];
        $straightlegl=$_POST['straightlegl'];
        $straightlegr=$_POST['straightlegr'];
        $l45=$_POST['l45'];
        $l5s1=$_POST['l5s1'];
        $welllegl=$_POST['welllegl'];
        $welllegr=$_POST['welllegr'];
        $lsi=$_POST['lsi'];
        $rsi=$_POST['rsi'];
        $nachlasl=$_POST['nachlasl'];
        $nachlasr=$_POST['nachlasr'];
        $positiveminor=$_POST['positiveminor'];
        $positiveadam=$_POST['positiveadam'];
        $neurologicaltest=$_POST['neurologicaltest'];
        $l1l=$_POST['l1l'];
        $l1r=$_POST['l1r'];
        $l15l=$_POST['l15l'];
        $l15r=$_POST['l15r'];
        $l2l=$_POST['l2l'];
        $l2r=$_POST['l2r'];
        $l25l=$_POST['l25l'];
        $l25r=$_POST['l25r'];
        $l3l=$_POST['l3l'];
        $l3r=$_POST['l3r'];
        $l35l=$_POST['l35l'];
        $l35r=$_POST['l35r'];
        $l4l=$_POST['l4l'];
        $l4r=$_POST['l4r'];
        $l45l=$_POST['l45l'];
        $l45r=$_POST['l45r'];
        $l4l3=$_POST['l4l3'];
        $l4r3=$_POST['l4r3'];
        $l5l=$_POST['l5l'];
        $l5r=$_POST['l5r'];
        $l55l=$_POST['l55l'];
        $l55r=$_POST['l55r'];
        $l5l3=$_POST['l5l3'];
        $l5r3=$_POST['l5r3'];
        $sl=$_POST['sl'];
        $sr=$_POST['sr'];
        $s5l=$_POST['s5l'];
        $s5r=$_POST['s5r'];
        $sil=$_POST['sil'];
        $sir=$_POST['sir'];
        $sitting=$_POST['sitting'];
        $lifting=$_POST['lifting'];
        $walking=$_POST['walking'];
        $stairs=$_POST['stairs'];
        $otherfunctional=$_POST['otherfunctional'];
        $break_text3=$_POST['break_text3'];
        $assessment=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['assessment']);
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $times=$_POST['times'];
        $week=$_POST['week'];
        $spinal=$_POST['spinal'];
        $chiropractic=$_POST['chiropractic'];
        $physical=$_POST['physical'];
        $orthotics=addslashes($_POST['orthotics']);
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=addslashes($_POST['radiographic']);
        $mri=$_POST['mri'];
        $ctscan=$_POST['ctscan'];
        $nerve=$_POST['nerve'];
        $emg=$_POST['emg'];
        $outside=$_POST['outside'];
        $dc=addslashes($_POST['dc']);
        $otheraddress=$_POST['otheraddress'];
        $break_text4=$_POST['break_text4'];
        $sign=$_POST['sign'];




   /*           $user_name="silvi";
              $pname="qwer";
               $date="qwer";
               $gait="erq";
               $pelvicunleveling="tmni";
               $ao="tmni";
               $allsoft="tmni";
               $leglengthcheckl="tmni";
               $leglengthl="tmni";
               $other1="tmni";
               $leglengthcheckr="tmni";
               $leglengthr="tmni";
               $other2="tmni";
               $piriformis="tmni";
               $quadlumb="tmni";
               $paraspinals="tmni";
               $gluteus="tmni";
               $gluteusmedius="tmni";
               $hamstrings="tmni";
               $iliopsoas="tmni";
               $rectus="tmni";
               $obliques="tmni";
               $othernotes="tmni";
               $functionalrangeofmotion="tmni";
               $subluxation="uil";
               $orthopedic="uil";
               $flexion="uil";
               $t89="uil";
               $t910="uil";
               $trendelburgl="uil";
               $trendelburgr="uil";
               $extension="uil";
               $t1011="uil";
               $t1112="uil";
               $kempsl="uil";
               $kempsr="uil";
               $lflexion="uil";
               $rflexion="uil";
               $t12l1="uil";
               $l12="uil";
               $slumpl="uil";
               $slumpr="uil";
               $lrotation="pol";
               $rrotation="pol";
               $l23="pol";
               $l34="pol";
               $straightlegl="pol";
               $straightlegr="pol";
               $l45="pol";
               $l5s1="pol";
               $welllegl="pol";
               $welllegr="pol";
               $lsi="pol";
               $rsi="pol";
               $nachlasl="pol";
               $nachlasr="pol";
               $positiveminor="pol";
               $positiveadam="pol";
               $neurologicaltest="pol";
               $l1l="hel";
               $l1r="hel";
               $l15l="hel";
               $l15r="hel";
               $l2l="hel";
               $l2r="hel";
               $l25l="hel";
               $l25r="hel";
               $l3l="hel";
               $l3r="hel";
               $l35l="hel";
               $l35r="hel";
               $l4l="hel";
               $l4r="hel";
               $l45l="hel";
               $l45r="hel";
               $l4l3="hel";
               $l4r3="one";
               $l5l="one";
               $l5r="one";
               $l55l="one";
               $l55r="one";
               $l5l3="one";
               $l5r3="one";
               $sl="one";
               $sr="one";
               $s5l="one";
               $s5r="one";
               $sil="one";
               $sir="one";
               $sitting="one";
               $lifting="one";
               $walking="one";
               $stairs="one";
               $otherfunctional="one";
               $break_text3="one";
               $assessment="one";
               $patientstatus="one";
               $diagnosis1="one";
               $diagnosis2="one";
               $diagnosis3="one";
               $diagnosis4="one";
               $diagnosis5="one";
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


        $sql2="update tbl_lumbopelvicexam set pname ='".$pname."', date ='".$date."', gait ='".$gait."', pelvicunleveling ='".$pelvicunleveling."', ao ='".$ao."', allsoft ='".$allsoft."', leglengthcheckl ='".$leglengthcheckl."', leglengthl ='".$leglengthl."', other1 ='".$other1."', leglengthcheckr ='".$leglengthcheckr."', leglengthr ='".$leglengthr."', other2 ='".$other2."', piriformis ='".$piriformis."', quadlumb ='".$quadlumb."', paraspinals ='".$paraspinals."', gluteus ='".$gluteus."', gluteusmedius ='".$gluteusmedius."', hamstrings ='".$hamstrings."', iliopsoas ='".$iliopsoas."', rectus ='".$rectus."', obliques ='".$obliques."', othernotes ='".$othernotes."', functionalrangeofmotion ='".$functionalrangeofmotion."', subluxation ='".$subluxation."', orthopedic ='".$orthopedic."', flexion ='".$flexion."', t89 ='".$t89."', t910 ='".$t910."', trendelburgl ='".$trendelburgl."', trendelburgr ='".$trendelburgr."', extension ='".$extension."', t1011 ='".$t1011."', t1112 ='".$t1112."', kempsl ='".$kempsl."', kempsr ='".$kempsr."', lflexion ='".$lflexion."', rflexion ='".$rflexion."', t12l1 ='".$t12l1."', l12 ='".$l12."', slumpl ='".$slumpl."', slumpr ='".$slumpr."', lrotation ='".$lrotation."', rrotation ='".$rrotation."', l23 ='".$l23."', l34 ='".$l34."', straightlegl ='".$straightlegl."', straightlegr ='".$straightlegr."', l45 ='".$l45."', l5s1 ='".$l5s1."', welllegl ='".$welllegl."', welllegr ='".$welllegr."', lsi ='".$lsi."', rsi ='".$rsi."', nachlasl ='".$nachlasl."', nachlasr ='".$nachlasr."', positiveminor ='".$positiveminor."', positiveadam ='".$positiveadam."', neurologicaltest ='".$neurologicaltest."', l1l ='".$l1l."', l1r ='".$l1r."', l15l ='".$l15l."', l15r ='".$l15r."', l2l ='".$l2l."', l2r ='".$l2r."', l25l ='".$l25l."', l25r ='".$l25r."', l3l ='".$l3l."', l3r ='".$l3r."', l35l ='".$l35l."', l35r ='".$l35r."', l4l ='".$l4l."', l4r ='".$l4r."', l45l ='".$l45l."', l45r ='".$l45r."', l4l3 ='".$l4l3."', l4r3 ='".$l4r3."', l5l ='".$l5l."', l5r ='".$l5r."', l55l ='".$l55l."', l55r ='".$l55r."', l5l3 ='".$l5l3."', l5r3 ='".$l5r3."', sl ='".$sl."', sr ='".$sr."', s5l ='".$s5l."', s5r ='".$s5r."', sil ='".$sil."', sir ='".$sir."', sitting ='".$sitting."', lifting ='".$lifting."', walking ='".$walking."', stairs ='".$stairs."', otherfunctional ='".$otherfunctional."', break_text3 ='".$break_text3."', assessment ='".$assessment."', patientstatus ='".$patientstatus."', diagnosis1 ='".$diagnosis1."', diagnosis2 ='".$diagnosis2."', diagnosis3 ='".$diagnosis3."', diagnosis4 ='".$diagnosis4."', diagnosis5 ='".$diagnosis5."', times ='".$times."', week ='".$week."', spinal ='".$spinal."', chiropractic ='".$chiropractic."', physical ='".$physical."', orthotics ='".$orthotics."', modalities ='".$modalities."', supplementation ='".$supplementation."', hep ='".$hep."', radiographic ='".$radiographic."', mri ='".$mri."', ctscan ='".$ctscan."', nerve ='".$nerve."', emg ='".$emg."', outside ='".$outside."', dc ='".$dc."', otheraddress ='".$otheraddress."', break_text4 ='".$break_text4."', sign ='".$sign."' WHERE username='".$user_name."'";
//echo $sql2;

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'lumbopelvicinsert':
    {
       $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $pelvicunleveling=$_POST['pelvicunleveling'];
        $ao=$_POST['ao'];
        $allsoft=$_POST['allsoft'];
        $leglengthcheckl=$_POST['leglengthcheckl'];
        $leglengthl=addslashes($_POST['leglengthl']);
        $other1=$_POST['other1'];
        $leglengthcheckr=$_POST['leglengthcheckr'];
        $leglengthr=addslashes($_POST['leglengthr']);
        $other2=$_POST['other2'];
        $piriformis=$_POST['piriformis'];
        $quadlumb=$_POST['quadlumb'];
        $paraspinals=$_POST['paraspinals'];
        $gluteus=$_POST['gluteus'];
        $gluteusmedius=$_POST['gluteusmedius'];
        $hamstrings=$_POST['hamstrings'];
        $iliopsoas=$_POST['iliopsoas'];
        $rectus=$_POST['rectus'];
        $obliques=$_POST['obliques'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $subluxation=$_POST['subluxation'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $t89=$_POST['t89'];
        $t910=$_POST['t910'];
        $trendelburgl=$_POST['trendelburgl'];
        $trendelburgr=$_POST['trendelburgr'];
        $extension=$_POST['extension'];
        $t1011=$_POST['t1011'];
        $t1112=$_POST['t1112'];
        $kempsl=$_POST['kempsl'];
        $kempsr=$_POST['kempsr'];
        $lflexion=$_POST['lflexion'];
        $rflexion=$_POST['rflexion'];
        $t12l1=$_POST['t12l1'];
        $l12=$_POST['l12'];
        $slumpl=$_POST['slumpl'];
        $slumpr=$_POST['slumpr'];
        $lrotation=$_POST['lrotation'];
        $rrotation=$_POST['rrotation'];
        $l23=$_POST['l23'];
        $l34=$_POST['l34'];
        $straightlegl=$_POST['straightlegl'];
        $straightlegr=$_POST['straightlegr'];
        $l45=$_POST['l45'];
        $l5s1=$_POST['l5s1'];
        $welllegl=$_POST['welllegl'];
        $welllegr=$_POST['welllegr'];
        $lsi=$_POST['lsi'];
        $rsi=$_POST['rsi'];
        $nachlasl=$_POST['nachlasl'];
        $nachlasr=$_POST['nachlasr'];
        $positiveminor=$_POST['positiveminor'];
        $positiveadam=$_POST['positiveadam'];
        $neurologicaltest=$_POST['neurologicaltest'];
        $l1l=$_POST['l1l'];
        $l1r=$_POST['l1r'];
        $l15l=$_POST['l15l'];
        $l15r=$_POST['l15r'];
        $l2l=$_POST['l2l'];
        $l2r=$_POST['l2r'];
        $l25l=$_POST['l25l'];
        $l25r=$_POST['l25r'];
        $l3l=$_POST['l3l'];
        $l3r=$_POST['l3r'];
        $l35l=$_POST['l35l'];
        $l35r=$_POST['l35r'];
        $l4l=$_POST['l4l'];
        $l4r=$_POST['l4r'];
        $l45l=$_POST['l45l'];
        $l45r=$_POST['l45r'];
        $l4l3=$_POST['l4l3'];
        $l4r3=$_POST['l4r3'];
        $l5l=$_POST['l5l'];
        $l5r=$_POST['l5r'];
        $l55l=$_POST['l55l'];
        $l55r=$_POST['l55r'];
        $l5l3=$_POST['l5l3'];
        $l5r3=$_POST['l5r3'];
        $sl=$_POST['sl'];
        $sr=$_POST['sr'];
        $s5l=$_POST['s5l'];
        $s5r=$_POST['s5r'];
        $sil=$_POST['sil'];
        $sir=$_POST['sir'];
        $sitting=$_POST['sitting'];
        $lifting=$_POST['lifting'];
        $walking=$_POST['walking'];
        $stairs=$_POST['stairs'];
        $otherfunctional=$_POST['otherfunctional'];
        $break_text3=$_POST['break_text3'];
        $assessment=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['assessment']);
        $patientstatus=$_POST['patientstatus'];
        $diagnosis1=$_POST['diagnosis1'];
        $diagnosis2=$_POST['diagnosis2'];
        $diagnosis3=$_POST['diagnosis3'];
        $diagnosis4=$_POST['diagnosis4'];
        $diagnosis5=$_POST['diagnosis5'];
        $times=$_POST['times'];
        $week=$_POST['week'];
        $spinal=$_POST['spinal'];
        $chiropractic=$_POST['chiropractic'];
        $physical=$_POST['physical'];
        $orthotics=addslashes($_POST['orthotics']);
        $modalities=$_POST['modalities'];
        $supplementation=$_POST['supplementation'];
        $hep=$_POST['hep'];
        $radiographic=addslashes($_POST['radiographic']);
        $mri=$_POST['mri'];
        $ctscan=$_POST['ctscan'];
        $nerve=$_POST['nerve'];
        $emg=$_POST['emg'];
        $outside=$_POST['outside'];
        $dc=addslashes($_POST['dc']);
        $otheraddress=$_POST['otheraddress'];
        $break_text4=$_POST['break_text4'];
        $sign=$_POST['sign'];





      /*

       $user_name="silvi";
       $pname="tmni";
        $date="tmni";
        $gait="tmni";
        $pelvicunleveling="tmni";
        $ao="tmni";
        $allsoft="tmni";
        $leglengthcheckl="tmni";
        $leglengthl="tmni";
        $other1="tmni";
        $leglengthcheckr="tmni";
        $leglengthr="tmni";
        $other2="tmni";
        $piriformis="tmni";
        $quadlumb="tmni";
        $paraspinals="tmni";
        $gluteus="tmni";
        $gluteusmedius="tmni";
        $hamstrings="tmni";
        $iliopsoas="tmni";
        $rectus="tmni";
        $obliques="tmni";
        $othernotes="tmni";
        $functionalrangeofmotion="tmni";
        $subluxation="uil";
        $orthopedic="uil";
        $flexion="uil";
        $t89="uil";
        $t910="uil";
        $trendelburgl="uil";
        $trendelburgr="uil";
        $extension="uil";
        $t1011="uil";
        $t1112="uil";
        $kempsl="uil";
        $kempsr="uil";
        $lflexion="uil";
        $rflexion="uil";
        $t12l1="uil";
        $l12="uil";
        $slumpl="uil";
        $slumpr="uil";
        $lrotation="pol";
        $rrotation="pol";
        $l23="pol";
        $l34="pol";
        $straightlegl="pol";
        $straightlegr="pol";
        $l45="pol";
        $l5s1="pol";
        $welllegl="pol";
        $welllegr="pol";
        $lsi="pol";
        $rsi="pol";
        $nachlasl="pol";
        $nachlasr="pol";
        $positiveminor="pol";
        $positiveadam="pol";
        $neurologicaltest="pol";
        $l1l="hel";
        $l1r="hel";
        $l15l="hel";
        $l15r="hel";
        $l2l="hel";
        $l2r="hel";
        $l25l="hel";
        $l25r="hel";
        $l3l="hel";
        $l3r="hel";
        $l35l="hel";
        $l35r="hel";
        $l4l="hel";
        $l4r="hel";
        $l45l="hel";
        $l45r="hel";
        $l4l3="hel";
        $l4r3="one";
        $l5l="one";
        $l5r="one";
        $l55l="one";
        $l55r="one";
        $l5l3="one";
        $l5r3="one";
        $sl="one";
        $sr="one";
        $s5l="one";
        $s5r="one";
        $sil="one";
        $sir="one";
        $sitting="one";
        $lifting="one";
        $walking="one";
        $stairs="one";
        $otherfunctional="one";
        $break_text3="one";
        $assessment="one";
        $patientstatus="one";
        $diagnosis1="one";
        $diagnosis2="one";
        $diagnosis3="one";
        $diagnosis4="one";
        $diagnosis5="one";
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


        $sql3="INSERT INTO tbl_lumbopelvicexam(lumbopelvicexamid,username,pname,date,gait,pelvicunleveling,ao,allsoft,leglengthcheckl,leglengthl,other1,leglengthcheckr,leglengthr,other2,piriformis,quadlumb,paraspinals,gluteus,gluteusmedius,hamstrings,iliopsoas,rectus,obliques,othernotes,functionalrangeofmotion,subluxation,orthopedic,flexion,t89,t910,trendelburgl,trendelburgr,extension,t1011,t1112,kempsl,kempsr,lflexion,rflexion,t12l1,l12,slumpl,slumpr,lrotation,rrotation,l23,l34,straightlegl,straightlegr,l45,l5s1,welllegl,welllegr,lsi,rsi,nachlasl,nachlasr,positiveminor,positiveadam,neurologicaltest,l1l,l1r,l15l,l15r,l2l,l2r,l25l,l25r,l3l,l3r,l35l,l35r,l4l,l4r,l45l,l45r,l4l3,l4r3,l5l,l5r,l55l,l55r,l5l3,l5r3,sl,sr,s5l,s5r,sil,sir,sitting,lifting,walking,stairs,otherfunctional,break_text3,assessment,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,times,week,spinal,chiropractic,physical,orthotics,modalities,supplementation,hep,radiographic,mri,ctscan,nerve,emg,outside,dc,otheraddress,break_text4,sign) VALUES ('','".$user_name."','".$pname."','".$date."','".$gait."','".$pelvicunleveling."','".$ao."','".$allsoft."','".$leglengthcheckl."','".$leglengthl."','".$other1."','".$leglengthcheckr."','".$leglengthr."','".$other2."','".$piriformis."','".$quadlumb."','".$paraspinals."','".$gluteus."','".$gluteusmedius."','".$hamstrings."','".$iliopsoas."','".$rectus."','".$obliques."','".$othernotes."','".$functionalrangeofmotion."','".$subluxation."','".$orthopedic."','".$flexion."','".$t89."','".$t910."','".$trendelburgl."','".$trendelburgr."','".$extension."','".$t1011."','".$t1112."','".$kempsl."','".$kempsr."','".$lflexion."','".$rflexion."','".$t12l1."','".$l12."','".$slumpl."','".$slumpr."','".$lrotation."','".$rrotation."','".$l23."','".$l34."','".$straightlegl."','".$straightlegr."','".$l45."','".$l5s1."','".$welllegl."','".$welllegr."','".$lsi."','".$rsi."','".$nachlasl."','".$nachlasr."','".$positiveminor."','".$positiveadam."','".$neurologicaltest."','".$l1l."','".$l1r."','".$l15l."','".$l15r."','".$l2l."','".$l2r."','".$l25l."','".$l25r."','".$l3l."','".$l3r."','".$l35l."','".$l35r."','".$l4l."','".$l4r."','".$l45l."','".$l45r."','".$l4l3."','".$l4r3."','".$l5l."','".$l5r."','".$l55l."','".$l55r."','".$l5l3."','".$l5r3."','".$sl."','".$sr."','".$s5l."','".$s5r."','".$sil."','".$sir."','".$sitting."','".$lifting."','".$walking."','".$stairs."','".$otherfunctional."','".$break_text3."','".$assessment."','".$patientstatus."','".$diagnosis1."','".$diagnosis2."','".$diagnosis3."','".$diagnosis4."','".$diagnosis5."','".$times."','".$week."','".$spinal."','".$chiropractic."','".$physical."','".$orthotics."','".$modalities."','".$supplementation."','".$hep."','".$radiographic."','".$mri."','".$ctscan."','".$nerve."','".$emg."','".$outside."','".$dc."','".$otheraddress."','".$break_text4."','".$sign."')";

        // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'lumbopelvicdelete':
    {
      $user_name=$_POST['username'];
      //  $user_name="silvi";
        $sql4 ="delete from tbl_lumbopelvicexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "lumbopelvicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>