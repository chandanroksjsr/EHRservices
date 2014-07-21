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
    case 'kneeexamselect':
    {

   $user_name = $_POST['username'];
      //$user_name="dfg";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_kneeexam WHERE username='$user_name'";
       // echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "Yes", "kneeexamuserList" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "Yes",  "pname":"'.$row->pname.'","date":"'.$row->date.'","gait":"'.$row->gait.'","pelvicunleveling":"'.$row->pelvicunleveling.'","ao":"'.$row->ao.'","allsoft":"'.$row->allsoft.'","leglengthtextl":"'.$row->leglengthtextl.'","leglengthl":"'.$row->leglengthl.'","leglengthtextr":"'.$row->leglengthtextr.'","leglengthr":"'.$row->leglengthr.'","vmo":"'.$row->vmo.'","quads":"'.$row->quads.'","semimemb":"'.$row->semimemb.'","semitend":"'.$row->semitend.'","gastroc":"'.$row->gastroc.'","soleus":"'.$row->soleus.'","iliotibband":"'.$row->iliotibband.'","bicepsfem":"'.$row->bicepsfem.'","patdll":"'.$row->patdll.'","patdlr":"'.$row->patdlr.'","functionalrangeofmotion":"'.$row->functionalrangeofmotion.'","orthopedic":"'.$row->orthopedic.'","flexion":"'.$row->flexion.'","acll":"'.$row->acll.'","aclr":"'.$row->aclr.'","cmpl":"'.$row->cmpl.'","cmpr":"'.$row->cmpr.'","extension":"'.$row->extension.'","pcll":"'.$row->pcll.'","pclr":"'.$row->pclr.'","internalrotationl":"'.$row->internalrotationl.'","internalrotationr":"'.$row->internalrotationr.'","lcll":"'.$row->lcll.'","lclr":"'.$row->lclr.'","externalrotationl":"'.$row->externalrotationl.'","externalrotationr":"'.$row->externalrotationr.'","mcll":"'.$row->mcll.'","mclr":"'.$row->mclr.'","circumferential":"'.$row->circumferential.'","meniscusl":"'.$row->meniscusl.'","meniscusr":"'.$row->meniscusr.'","apleysl":"'.$row->apleysl.'","apleysr":"'.$row->apleysr.'","cmabovel":"'.$row->cmabovel.'","suprapatellarl":"'.$row->suprapatellarl.'","infrapatellarl":"'.$row->infrapatellarl.'","belowl":"'.$row->belowl.'","distractionl":"'.$row->distractionl.'","distractionr":"'.$row->distractionr.'","cmabover":"'.$row->cmabover.'","suprapatellarr":"'.$row->suprapatellarr.'","infrapatellarr":"'.$row->infrapatellarr.'","belowr":"'.$row->belowr.'","neurologicaltest":"'.$row->neurologicaltest.'","l1l":"'.$row->l1l.'","l1r":"'.$row->l1r.'","l15l":"'.$row->l15l.'","l15r":"'.$row->l15r.'","l2l":"'.$row->l2l.'","l2r":"'.$row->l2r.'","l25l":"'.$row->l25l.'","l25r":"'.$row->l25r.'","l3l":"'.$row->l3l.'","l3r":"'.$row->l3r.'","l35l":"'.$row->l35l.'","l35r":"'.$row->l35r.'","l4l":"'.$row->l4l.'","l4r":"'.$row->l4r.'","l45l":"'.$row->l45l.'","l45r":"'.$row->l45r.'","l4l3":"'.$row->l4l3.'","l4r3":"'.$row->l4r3.'","l5l":"'.$row->l5l.'","l5r":"'.$row->l5r.'","l55l":"'.$row->l55l.'","l55r":"'.$row->l55r.'","l5l3":"'.$row->l5l3.'","l5r3":"'.$row->l5r3.'","sl":"'.$row->sl.'","sr":"'.$row->sr.'","s5l":"'.$row->s5l.'","s5r":"'.$row->s5r.'","sil":"'.$row->sil.'","sir":"'.$row->sir.'","standing":"'.$row->standing.'","walking":"'.$row->walking.'","stairs":"'.$row->stairs.'","otherfunctional":"'.$row->otherfunctional.'","break_text3":"'.$row->break_text3.'","assessment":"'.$row->assessment.'","patientstatus":"'.$row->patientstatus.'","diagnosis1":"'.$row->diagnosis1.'","diagnosis2":"'.$row->diagnosis2.'","diagnosis3":"'.$row->diagnosis3.'","diagnosis4":"'.$row->diagnosis4.'","diagnosis5":"'.$row->diagnosis5.'","diagnosis6":"'.$row->diagnosis6.'","times":"'.$row->times.'","week":"'.$row->week.'","spinal":"'.$row->spinal.'","chiropractic":"'.$row->chiropractic.'","physical":"'.$row->physical.'","orthotics":"'.$row->orthotics.'","modalities":"'.$row->modalities.'","supplementation":"'.$row->supplementation.'","hep":"'.$row->hep.'","radiographic":"'.$row->radiographic.'","mri":"'.$row->mri.'","ctscan":"'.$row->ctscan.'","nerve":"'.$row->nerve.'","emg":"'.$row->emg.'","outside":"'.$row->outside.'","dc":"'.$row->dc.'","otheraddress":"'.$row->otheraddress.'","break_text4":"'.$row->break_text4.'","sign":"'.$row->sign.'","message": "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }








    case 'kneeexamedit':
    {
      $user_name = $_POST['username'];

        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $pelvicunleveling=$_POST['pelvicunleveling'];
        $ao=$_POST['ao'];
        $allsoft=$_POST['allsoft'];
        $leglengthl=$_POST['leglengthl'];
        $leglengthtextl=$_POST['leglengthtextl'];
        $leglengthr=$_POST['leglengthr'];
        $leglengthtextr=$_POST['leglengthtextr'];
        $vmo=$_POST['vmo'];
        $quads=$_POST['quads'];
        $semimemb=$_POST['semimemb'];
        $semitend=$_POST['semitend'];
        $gastroc=$_POST['gastroc'];
        $soleus=$_POST['soleus'];
        $iliotibband=$_POST['iliotibband'];
        $bicepsfem=$_POST['bicepsfem'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $acll=$_POST['acll'];
        $aclr=$_POST['aclr'];
        $extension=$_POST['extension'];
        $pcll=$_POST['pcll'];
        $pclr=$_POST['pclr'];
        $internalrotationl=$_POST['internalrotationl'];
        $internalrotationr=$_POST['internalrotationr'];
        $lcll=$_POST['lcll'];
        $lclr=$_POST['lclr'];
        $externalrotationl=$_POST['externalrotationl'];
        $externalrotationr=$_POST['externalrotationr'];
        $mcll=$_POST['mcll'];
        $mclr=$_POST['mclr'];
        $circumferential=$_POST['circumferential'];
        $meniscusl=$_POST['meniscusl'];
        $meniscusr=$_POST['meniscusr'];
        $apleysl=$_POST['apleysl'];
        $apleysr=$_POST['apleysr'];
        $cmabovel=$_POST['cmabovel'];
        $suprapatellarl=$_POST['suprapatellarl'];
        $infrapatellarl=$_POST['infrapatellarl'];
        $belowl=$_POST['belowl'];
        $distractionl=$_POST['distractionl'];
        $distractionr=$_POST['distractionr'];
        $cmabover=$_POST['cmabover'];
        $suprapatellarr=$_POST['suprapatellarr'];
        $infrapatellarr=$_POST['infrapatellarr'];
        $belowr=$_POST['belowr'];
        $cmpl=$_POST['cmpl'];
        $cmpr=$_POST['cmpr'];
        $patdll=$_POST['patdll'];
        $patdlr=$_POST['patdlr'];
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
        $walking=$_POST['walking'];
        $standing=$_POST['standing'];
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
        $user_name="silvi"; $pname="qwert";
        $date="qwer";
        $gait="qwer";
        $pelvicunleveling="qwer";
        $ao="qwer";
        $allsoft="qwer";
        $leglengthl="qwer";
        $leglengthtextl="qwer";
        $leglengthr="tmni";
        $leglengthtextr="tmni";
        $vmo="tmni";
        $quads="tmni";
        $semimemb="tmni";
        $semitend="tmni";
        $gastroc="tmni";
        $soleus="tmni";
        $iliotibband="tmni";
        $bicepsfem="tmni";
        $functionalrangeofmotion="tmni";
        $orthopedic="uil";
        $flexion="uil";
        $acll="uil";
        $aclr="uil";
        $extension="uil";
        $pcll="uil";
        $pclr="uil";
        $internalrotationl="uil";
        $internalrotationr="uil";
        $lcll="uil";
        $lclr="uil";
        $externalrotationl="uil";
        $externalrotationr="uil";
        $mcll="uil";
        $mclr="uil";
        $circumferential="pol";
        $meniscusl="pol";
        $meniscusr="pol";
        $apleysl="pol";
        $apleysr="pol";
        $cmabovel="pol";
        $suprapatellarl="pol";
        $infrapatellarl="pol";
        $belowl="pol";
        $distractionl="pol";
        $distractionr="pol";
        $cmabover="pol";
        $suprapatellarr="pol";
        $infrapatellarr="pol";
        $belowr="pol";
        $cmpl="uil";
        $cmpr="uil";
        $patdll="tmni";
        $patdlr="tmni";
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
        $standing="one";
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
        $sql2="update tbl_kneeexam set pname ='".$pname."', date ='".$date."', gait ='".$gait."', pelvicunleveling ='".$pelvicunleveling."', ao ='".$ao."', allsoft ='".$allsoft."', leglengthtextl ='".$leglengthtextl."', leglengthl ='".$leglengthl."', leglengthtextr ='".$leglengthtextr."', leglengthr ='".$leglengthr."', vmo ='".$vmo."', quads ='".$quads."', semimemb ='".$semimemb."', semitend ='".$semitend."', gastroc ='".$gastroc."', soleus ='".$soleus."', iliotibband ='".$iliotibband."', bicepsfem ='".$bicepsfem."', patdll ='".$patdll."', patdlr ='".$patdlr."', functionalrangeofmotion ='".$functionalrangeofmotion."', orthopedic ='".$orthopedic."', flexion ='".$flexion."', acll ='".$acll."', aclr ='".$aclr."', cmpl ='".$cmpl."', cmpr ='".$cmpr."', extension ='".$extension."', pcll ='".$pcll."', pclr ='".$pclr."', internalrotationl ='".$internalrotationl."', internalrotationr ='".$internalrotationr."', lcll ='".$lcll."', lclr ='".$lclr."', externalrotationl ='".$externalrotationl."', externalrotationr ='".$externalrotationr."', mcll ='".$mcll."', mclr ='".$mclr."', circumferential ='".$circumferential."', meniscusl ='".$meniscusl."', meniscusr ='".$meniscusr."', apleysl ='".$apleysl."', apleysr ='".$apleysr."', cmabovel ='".$cmabovel."', suprapatellarl ='".$suprapatellarl."', infrapatellarl ='".$infrapatellarl."', belowl ='".$belowl."', distractionl ='".$distractionl."', distractionr ='".$distractionr."', cmabover ='".$cmabover."', suprapatellarr ='".$suprapatellarr."', infrapatellarr ='".$infrapatellarr."', belowr ='".$belowr."', neurologicaltest ='".$neurologicaltest."', l1l ='".$l1l."', l1r ='".$l1r."', l15l ='".$l15l."', l15r ='".$l15r."', l2l ='".$l2l."', l2r ='".$l2r."', l25l ='".$l25l."', l25r ='".$l25r."', l3l ='".$l3l."', l3r ='".$l3r."', l35l ='".$l35l."', l35r ='".$l35r."', l4l ='".$l4l."', l4r ='".$l4r."', l45l ='".$l45l."', l45r ='".$l45r."', l4l3 ='".$l4l3."', l4r3 ='".$l4r3."', l5l ='".$l5l."', l5r ='".$l5r."', l55l ='".$l55l."', l55r ='".$l55r."', l5l3 ='".$l5l3."', l5r3 ='".$l5r3."', sl ='".$sl."', sr ='".$sr."', s5l ='".$s5l."', s5r ='".$s5r."', sil ='".$sil."', sir ='".$sir."', standing ='".$standing."', walking ='".$walking."', stairs ='".$stairs."', otherfunctional ='".$otherfunctional."', break_text3 ='".$break_text3."', assessment ='".$assessment."', patientstatus ='".$patientstatus."', diagnosis1 ='".$diagnosis1."', diagnosis2 ='".$diagnosis2."', diagnosis3 ='".$diagnosis3."', diagnosis4 ='".$diagnosis4."', diagnosis5 ='".$diagnosis5."',diagnosis6 ='".$diagnosis6."', times ='".$times."', week ='".$week."', spinal ='".$spinal."', chiropractic ='".$chiropractic."', physical ='".$physical."', orthotics ='".$orthotics."', modalities ='".$modalities."', supplementation ='".$supplementation."', hep ='".$hep."', radiographic ='".$radiographic."', mri ='".$mri."', ctscan ='".$ctscan."', nerve ='".$nerve."', emg ='".$emg."', outside ='".$outside."', dc ='".$dc."', otheraddress ='".$otheraddress."', break_text4 ='".$break_text4."', sign ='".$sign."' WHERE username='".$user_name."'";
//echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'kneeexaminsert':
    {
        $user_name = $_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $gait=$_POST['gait'];
        $pelvicunleveling=$_POST['pelvicunleveling'];
        $ao=$_POST['ao'];
        $allsoft=$_POST['allsoft'];
        $leglengthl=$_POST['leglengthl'];
        $leglengthtextl=$_POST['leglengthtextl'];
        $leglengthr=$_POST['leglengthr'];
        $leglengthtextr=$_POST['leglengthtextr'];
        $vmo=$_POST['vmo'];
        $quads=$_POST['quads'];
        $semimemb=$_POST['semimemb'];
        $semitend=$_POST['semitend'];
        $gastroc=$_POST['gastroc'];
        $soleus=$_POST['soleus'];
        $iliotibband=$_POST['iliotibband'];
        $bicepsfem=$_POST['bicepsfem'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $acll=$_POST['acll'];
        $aclr=$_POST['aclr'];
        $extension=$_POST['extension'];
        $pcll=$_POST['pcll'];
        $pclr=$_POST['pclr'];
        $internalrotationl=$_POST['internalrotationl'];
        $internalrotationr=$_POST['internalrotationr'];
        $lcll=$_POST['lcll'];
        $lclr=$_POST['lclr'];
        $externalrotationl=$_POST['externalrotationl'];
        $externalrotationr=$_POST['externalrotationr'];
        $mcll=$_POST['mcll'];
        $mclr=$_POST['mclr'];
        $circumferential=$_POST['circumferential'];
        $meniscusl=$_POST['meniscusl'];
        $meniscusr=$_POST['meniscusr'];
        $apleysl=$_POST['apleysl'];
        $apleysr=$_POST['apleysr'];
        $cmabovel=$_POST['cmabovel'];
        $suprapatellarl=$_POST['suprapatellarl'];
        $infrapatellarl=$_POST['infrapatellarl'];
        $belowl=$_POST['belowl'];
        $distractionl=$_POST['distractionl'];
        $distractionr=$_POST['distractionr'];
        $cmabover=$_POST['cmabover'];
        $suprapatellarr=$_POST['suprapatellarr'];
        $infrapatellarr=$_POST['infrapatellarr'];
        $belowr=$_POST['belowr'];
        $cmpl=$_POST['cmpl'];
        $cmpr=$_POST['cmpr'];
        $patdll=$_POST['patdll'];
        $patdlr=$_POST['patdlr'];
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
        $walking=$_POST['walking'];
        $standing=$_POST['standing'];
        $stairs=$_POST['stairs'];
        $otherfunctional=$_POST['otherfunctional'];
        $break_text3=$_POST['break_text3'];
       // $comments=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['comments']);
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





       /*  $user_name="thendral"; $pname="tmni";
         $date="tmni";
         $gait="tmni";
         $pelvicunleveling="tmni";
         $ao="tmni";
         $allsoft="tmni";
         $leglengthl="tmni";
         $leglengthtextl="tmni";
         $leglengthr="tmni";
         $leglengthtextr="tmni";
         $vmo="tmni";
         $quads="tmni";
         $semimemb="tmni";
         $semitend="tmni";
         $gastroc="tmni";
         $soleus="tmni";
         $iliotibband="tmni";
         $bicepsfem="tmni";
         $functionalrangeofmotion="tmni";
         $orthopedic="uil";
         $flexion="uil";
         $acll="uil";
         $aclr="uil";
         $extension="uil";
         $pcll="uil";
         $pclr="uil";
         $internalrotationl="uil";
         $internalrotationr="uil";
         $lcll="uil";
         $lclr="uil";
         $externalrotationl="uil";
         $externalrotationr="uil";
         $mcll="uil";
         $mclr="uil";
         $circumferential="pol";
         $meniscusl="pol";
         $meniscusr="pol";
         $apleysl="pol";
         $apleysr="pol";
         $cmabovel="pol";
         $suprapatellarl="pol";
         $infrapatellarl="pol";
         $belowl="pol";
         $distractionl="pol";
         $distractionr="pol";
         $cmabover="pol";
         $suprapatellarr="pol";
         $infrapatellarr="pol";
         $belowr="pol";
         $cmpl="uil";
         $cmpr="uil";
         $patdll="tmni";
         $patdlr="tmni";
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
         $standing="one";
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


        $sql3="INSERT INTO tbl_kneeexam(kneeexamid,username,pname,date,gait,pelvicunleveling,ao,allsoft,leglengthl,leglengthtextl,leglengthr,leglengthtextr,vmo,quads,semimemb,semitend,gastroc,soleus,iliotibband,bicepsfem,functionalrangeofmotion,orthopedic,flexion,acll,aclr,extension,pcll,pclr,internalrotationl,internalrotationr,lcll,lclr,externalrotationl,externalrotationr,mcll,mclr,circumferential,meniscusl,meniscusr,apleysl,apleysr,cmabovel,suprapatellarl,infrapatellarl,belowl,distractionl,distractionr,cmabover,suprapatellarr,infrapatellarr,belowr,cmpl,cmpr,patdll,patdlr,neurologicaltest,l1l,l1r,l15l,l15r,l2l,l2r,l25l,l25r,l3l,l3r,l35l,l35r,l4l,l4r,l45l,l45r,l4l3,l4r3,l5l,l5r,l55l,l55r,l5l3,l5r3,sl,sr,s5l,s5r,sil,sir,walking,standing,stairs,otherfunctional,break_text3,assessment,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,diagnosis6,times,week,spinal,chiropractic,physical,orthotics,modalities,supplementation,hep,radiographic,mri,ctscan,nerve,emg,outside,dc,otheraddress,break_text4,sign) VALUES ('','".$user_name."','".$pname."','".$date."','".$gait."','".$pelvicunleveling."','".$ao."','".$allsoft."','".$leglengthl."','".$leglengthtextl."','".$leglengthr."','".$leglengthtextr."','".$vmo."','".$quads."','".$semimemb."','".$semitend."','".$gastroc."','".$soleus."','".$iliotibband."','".$bicepsfem."','".$functionalrangeofmotion."','".$orthopedic."','".$flexion."','".$acll."','".$aclr."','".$extension."','".$pcll."','".$pclr."','".$internalrotationl."','".$internalrotationr."','".$lcll."','".$lclr."','".$externalrotationl."','".$externalrotationr."','".$mcll."','".$mclr."','".$circumferential."','".$meniscusl."','".$meniscusr."','".$apleysl."','".$apleysr."','".$cmabovel."','".$suprapatellarl."','".$infrapatellarl."','".$belowl."','".$distractionl."','".$distractionr."','".$cmabover."','".$suprapatellarr."','".$infrapatellarr."','".$belowr."','".$cmpl."','".$cmpr."','".$patdll."','".$patdlr."','".$neurologicaltest."','".$l1l."','".$l1r."','".$l15l."','".$l15r."','".$l2l."','".$l2r."','".$l25l."','".$l25r."','".$l3l."','".$l3r."','".$l35l."','".$l35r."','".$l4l."','".$l4r."','".$l45l."','".$l45r."','".$l4l3."','".$l4r3."','".$l5l."','".$l5r."','".$l55l."','".$l55r."','".$l5l3."','".$l5r3."','".$sl."','".$sr."','".$s5l."','".$s5r."','".$sil."','".$sir."','".$walking."','".$standing."','".$stairs."','".$otherfunctional."','".$break_text3."','".$assessment."','".$patientstatus."','".$diagnosis1."','".$diagnosis2."','".$diagnosis3."','".$diagnosis4."','".$diagnosis5."','".$diagnosis6."','".$times."','".$week."','".$spinal."','".$chiropractic."','".$physical."','".$orthotics."','".$modalities."','".$supplementation."','".$hep."','".$radiographic."','".$mri."','".$ctscan."','".$nerve."','".$emg."','".$outside."','".$dc."','".$otheraddress."','".$break_text4."','".$sign."')";

       //  echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'kneeexamdelete':
    {
    $user_name=$_POST['username'];
//$user_name="silvi";
        $sql4 ="delete from tbl_kneeexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "kneeexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>