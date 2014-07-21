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
    case 'thoracicexamselect':
    {

        $user_name = $_POST['username'];
        //$pname="proper";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_thoracicexam WHERE username='$user_name'";

        //echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "Yes", "thoracicexam List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "Yes",  "pname":"'.$row->pname.'","date":"'.$row->date.'","muscle":"'.$row->muscle.'","swelling":"'.$row->swelling.'","acromion":"'.$row->acromion.'","inferior":"'.$row->inferior.'","iliac":"'.$row->iliac.'","ribhumping":"'.$row->ribhumping.'","allsoft":"'.$row->allsoft.'","rectus":"'.$row->rectus.'","obliques":"'.$row->obliques.'","levator":"'.$row->levator.'","serratus":"'.$row->serratus.'","pectoralis":"'.$row->pectoralis.'","trapezius":"'.$row->trapezius.'","rhomboids":"'.$row->rhomboids.'","pectoralisminor":"'.$row->pectoralisminor.'","paraspinals":"'.$row->paraspinals.'","othernotes":"'.$row->othernotes.'","functionalrangeofmotion":"'.$row->functionalrangeofmotion.'","subluxation":"'.$row->subluxation.'","orthopedic":"'.$row->orthopedic.'","flexion":"'.$row->flexion.'","t12":"'.$row->t12.'","t23":"'.$row->t23.'","adamsignl":"'.$row->adamsignl.'","adamsignr":"'.$row->adamsignr.'","extension":"'.$row->extension.'","t34":"'.$row->t34.'","t45":"'.$row->t45.'","schepelmanl":"'.$row->schepelmanl.'","schepelmanr":"'.$row->schepelmanr.'","lflexion":"'.$row->lflexion.'","rflexion":"'.$row->rflexion.'","t56":"'.$row->t56.'","t67":"'.$row->t67.'","neurologicaltest":"'.$row->neurologicaltest.'","valsalval":"'.$row->valsalval.'","valsalvar":"'.$row->valsalvar.'","lrotation":"'.$row->lrotation.'","rrotation":"'.$row->rrotation.'","t78":"'.$row->t78.'","t89":"'.$row->t89.'","dejerinel":"'.$row->dejerinel.'","dejeriner":"'.$row->dejeriner.'","t910":"'.$row->t910.'","t1011":"'.$row->t1011.'","sotohalll":"'.$row->sotohalll.'","sotohallr":"'.$row->sotohallr.'","t1112":"'.$row->t1112.'","t12l1":"'.$row->t12l1.'","sternall":"'.$row->sternall.'","sternalr":"'.$row->sternalr.'","beevorl":"'.$row->beevorl.'","beevorr":"'.$row->beevorr.'","notes":"'.$row->notes.'","intercostal":"'.$row->intercostal.'","sitting":"'.$row->sitting.'","standing":"'.$row->standing.'","driving":"'.$row->driving.'","otherfunctional":"'.$row->otherfunctional.'","break_text3":"'.$row->break_text3.'","assessment":"'.$row->assessment.'","patientstatus":"'.$row->patientstatus.'","diagnosis1":"'.$row->diagnosis1.'","diagnosis2":"'.$row->diagnosis2.'","diagnosis3":"'.$row->diagnosis3.'","diagnosis4":"'.$row->diagnosis4.'","diagnosis5":"'.$row->diagnosis5.'","diagnosis6":"'.$row->diagnosis6.'","times":"'.$row->times.'","week":"'.$row->week.'","spinal":"'.$row->spinal.'","chiropractic":"'.$row->chiropractic.'","physical":"'.$row->physical.'","orthotics":"'.$row->orthotics.'","modalities":"'.$row->modalities.'","supplementation":"'.$row->supplementation.'","hep":"'.$row->hep.'","radiographic":"'.$row->radiographic.'","mri":"'.$row->mri.'","ctscan":"'.$row->ctscan.'","nerve":"'.$row->nerve.'","emg":"'.$row->emg.'","outside":"'.$row->outside.'","dc":"'.$row->dc.'","otheraddress":"'.$row->otheraddress.'","break_text4":"'.$row->break_text4.'","sign":"'.$row->sign.'","message": "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }








    case 'thoracicexamedit':
    {

        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $acromion=$_POST['acromion'];
        $inferior=$_POST['inferior'];
        $iliac=$_POST['iliac'];
        $ribhumping=$_POST['ribhumping'];
        $allsoft=$_POST['allsoft'];
        $rectus=$_POST['rectus'];
        $obliques=$_POST['obliques'];
        $levator=$_POST['levator'];
        $serratus=$_POST['serratus'];
        $pectoralis=$_POST['pectoralis'];
        $trapezius=$_POST['trapezius'];
        $rhomboids=$_POST['rhomboids'];
        $pectoralisminor=$_POST['pectoralisminor'];
        $paraspinals=$_POST['paraspinals'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $subluxation=$_POST['subluxation'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $t12=$_POST['t12'];
        $t23=$_POST['t23'];
        $adamsignl=$_POST['adamsignl'];
        $adamsignr=$_POST['adamsignr'];
        $extension=$_POST['extension'];
        $t34=$_POST['t34'];
        $t45=$_POST['t45'];
        $schepelmanl=$_POST['schepelmanl'];
        $schepelmanr=$_POST['schepelmanr'];
        $lflexion=$_POST['lflexion'];
        $rflexion=$_POST['rflexion'];
        $t56=$_POST['t56'];
        $t67=$_POST['t67'];
        $neurologicaltest=$_POST['neurologicaltest'];
        $valsalval=$_POST['valsalval'];
        $valsalvar=$_POST['valsalvar'];
        $lrotation=$_POST['lrotation'];
        $rrotation=$_POST['rrotation'];
        $t78=$_POST['t78'];
        $t89=$_POST['t89'];
        $dejerinel=$_POST['dejerinel'];
        $dejeriner=$_POST['dejeriner'];
        $t910=$_POST['t910'];
        $t1011=$_POST['t1011'];
        $sotohalll=$_POST['sotohalll'];
        $sotohallr=$_POST['sotohallr'];
        $t1112=$_POST['t1112'];
        $t12l1=$_POST['t12l1'];
        $sternall=$_POST['sternall'];
        $sternalr=$_POST['sternalr'];
        $beevorl=$_POST['beevorl'];
        $beevorr=$_POST['beevorr'];
        $notes=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['notes']);
        $intercostal=$_POST['intercostal'];
        $sitting=$_POST['sitting'];
        $standing=$_POST['standing'];
        $driving=$_POST['driving'];
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
        $user_name="bhanu";
        $pname="pname";
        $date="date";
        $muscle="muscle";
        $swelling="swelling";
        $acromion ="acromion";
        $inferior ="inferior";
        $iliac="tmni";
        $ribhumping="ribhumping";
        $allsoft="allsoft";
        $rectus="rectus";
        $obliques="obliques";
        $levator="levator";
        $serratus="serratus";
        $pectoralis="pectoralis";
        $trapezius="uil";
        $rhomboids="uil";
        $pectoralisminor="uil";
        $paraspinals="uil";
        $functionalrangeofmotion="uil";
        $subluxation="uil";
        $extension="uil";
        $t12="uil";
        $t23="uil";
        $orthopedic="uil";
        $flexion="uil";
        $adamsignl="uil";
        $adamsignr="uil";
        $othernotes="uil";
        $t34="pol";
        $t45="pol";
        $schepelmanl="pol";
        $schepelmanr="pol";
        $lflexion="pol";
        $rflexion="pol";
        $t56="pol";
        $t67="pol";

        $neurologicaltest="pol";
        $valsalval="hel";
        $valsalvar="hel";
        $lrotation="hel";
        $rrotation="hel";
        $t78="hel";
        $t89="hel";
        $dejerinel="hel";
        $dejeriner="hel";
        $t910="hel";
        $t1011="hel";
        $sotohalll="hel";
        $sotohallr="hel";
        $t1112="hel";
        $t12l1="hel";
        $sternall="hel";
        $sternalr="hel";
        $beevorl="hel";
        $beevorr="one";
        $notes="one";
        $intercostal="one";
        $sitting="one";
        $standing="one";
        $driving="one";

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
        $sql2="update tbl_thoracicexam set pname='".$pname."',date='".$date."',muscle='".$muscle."',swelling='".$swelling."',acromion='".$acromion."',inferior='".$inferior."',iliac='".$iliac."',ribhumping='".$ribhumping."',allsoft='".$allsoft."',rectus='".$rectus."',obliques='".$obliques."',levator='".$levator."',serratus='".$serratus."',pectoralis='".$pectoralis."',trapezius='".$trapezius."',rhomboids='".$rhomboids."',pectoralisminor='".$pectoralisminor."',paraspinals='".$paraspinals."',othernotes='".$othernotes."',functionalrangeofmotion='".$functionalrangeofmotion."',subluxation='".$subluxation."',orthopedic='".$orthopedic."',flexion='".$flexion."',t12='".$t12."',t23='".$t23."',adamsignl='".$adamsignl."',adamsignr='".$adamsignr."',extension='".$extension."',t34='".$t34."',t45='".$t45."',schepelmanl='".$schepelmanl."',schepelmanr='".$schepelmanr."',lflexion='".$lflexion."',rflexion='".$rflexion."',t56='".$t56."',t67='".$t67."',valsalval='".$valsalval."',valsalvar='".$valsalvar."',lrotation='".$lrotation."',rrotation='".$rrotation."',t78='".$t78."',t89='".$t89."',dejerinel='".$dejerinel."',dejeriner='".$dejeriner."',t910='".$t910."',t1011='".$t1011."',sotohalll='".$sotohalll."',sotohallr='".$sotohallr."',t1112='".$t1112."',t12l1='".$t12l1."',sternall='".$sternall."',sternalr='".$sternalr."',beevorl='".$beevorl."',beevorr='".$beevorr."',neurologicaltest='".$neurologicaltest."',notes='".$notes."',intercostal='".$intercostal."',sitting='".$sitting."',standing='".$standing."',driving='".$driving."',otherfunctional='".$otherfunctional."',break_text3='".$break_text3."',assessment='".$assessment."',patientstatus='".$patientstatus."',diagnosis1='".$diagnosis1."',diagnosis2='".$diagnosis2."',diagnosis3='".$diagnosis3."',diagnosis4='".$diagnosis4."',diagnosis5='".$diagnosis5."',diagnosis6='".$diagnosis6."',times='".$times."',week='".$week."',spinal='".$spinal."',chiropractic='".$chiropractic."',physical='".$physical."',orthotics='".$orthotics."',modalities='".$modalities."',supplementation='".$supplementation."',hep='".$hep."',radiographic='".$radiographic."',mri='".$mri."',ctscan='".$ctscan."',nerve='".$nerve."',emg='".$emg."',outside='".$outside."',dc='".$dc."',otheraddress='".$otheraddress."',break_text4='".$break_text4."',sign='".$sign."' WHERE username='".$user_name."'";
        //echo $sql2;
        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'thoracicexaminsert':
    {

        $user_name=$_POST['username'];
        $pname=$_POST['pname'];
        $date=$_POST['date'];
        $muscle=$_POST['muscle'];
        $swelling=$_POST['swelling'];
        $acromion=$_POST['acromion'];
        $inferior=$_POST['inferior'];
        $iliac=$_POST['iliac'];
        $ribhumping=$_POST['ribhumping'];
        $allsoft=$_POST['allsoft'];
        $rectus=$_POST['rectus'];
        $obliques=$_POST['obliques'];
        $levator=$_POST['levator'];
        $serratus=$_POST['serratus'];
        $pectoralis=$_POST['pectoralis'];
        $trapezius=$_POST['trapezius'];
        $rhomboids=$_POST['rhomboids'];
        $pectoralisminor=$_POST['pectoralisminor'];
        $paraspinals=$_POST['paraspinals'];
        $othernotes=$_POST['othernotes'];
        $functionalrangeofmotion=$_POST['functionalrangeofmotion'];
        $subluxation=$_POST['subluxation'];
        $orthopedic=$_POST['orthopedic'];
        $flexion=$_POST['flexion'];
        $t12=$_POST['t12'];
        $t23=$_POST['t23'];
        $adamsignl=$_POST['adamsignl'];
        $adamsignr=$_POST['adamsignr'];
        $extension=$_POST['extension'];
        $t34=$_POST['t34'];
        $t45=$_POST['t45'];
        $schepelmanl=$_POST['schepelmanl'];
        $schepelmanr=$_POST['schepelmanr'];
        $lflexion=$_POST['lflexion'];
        $rflexion=$_POST['rflexion'];
        $t56=$_POST['t56'];
        $t67=$_POST['t67'];
        $neurologicaltest=$_POST['neurologicaltest'];
        $valsalval=$_POST['valsalval'];
        $valsalvar=$_POST['valsalvar'];
        $lrotation=$_POST['lrotation'];
        $rrotation=$_POST['rrotation'];
        $t78=$_POST['t78'];
        $t89=$_POST['t89'];
        $dejerinel=$_POST['dejerinel'];
        $dejeriner=$_POST['dejeriner'];
        $t910=$_POST['t910'];
        $t1011=$_POST['t1011'];
        $sotohalll=$_POST['sotohalll'];
        $sotohallr=$_POST['sotohallr'];
        $t1112=$_POST['t1112'];
        $t12l1=$_POST['t12l1'];
        $sternall=$_POST['sternall'];
        $sternalr=$_POST['sternalr'];
        $beevorl=$_POST['beevorl'];
        $beevorr=$_POST['beevorr'];
        $notes=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['notes']);
        $intercostal=$_POST['intercostal'];
        $sitting=$_POST['sitting'];
        $standing=$_POST['standing'];
        $driving=$_POST['driving'];
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
                   $user_name="bhanu";
                   $pname="pname";
                   $date="date";
                   $muscle="muscle";
                   $swelling="swelling";
                   $acromion ="acromion";
                   $inferior ="inferior";
                   $iliac="tmni";
                   $ribhumping="ribhumping";
                   $allsoft="allsoft";
                   $rectus="rectus";
                   $obliques="obliques";
                   $levator="levator";
                   $serratus="serratus";
                   $pectoralis="pectoralis";
                   $trapezius="uil";
                   $rhomboids="uil";
                   $pectoralisminor="uil";
                   $paraspinals="uil";
                   $functionalrangeofmotion="uil";
                   $subluxation="uil";
                  $extension="uil";
                   $t12="uil";
                   $t23="uil";
                   $orthopedic="uil";
                   $flexion="uil";
                   $adamsignl="uil";
                   $adamsignr="uil";
                   $othernotes="uil";
                   $t34="pol";
                   $t45="pol";
                   $schepelmanl="pol";
                   $schepelmanr="pol";
                   $lflexion="pol";
                   $rflexion="pol";
                   $t56="pol";
                   $t67="pol";

                   $neurologicaltest="pol";
                   $valsalval="hel";
                   $valsalvar="hel";
                   $lrotation="hel";
                   $rrotation="hel";
                   $t78="hel";
                   $t89="hel";
                   $dejerinel="hel";
                   $dejeriner="hel";
                   $t910="hel";
                   $t1011="hel";
                   $sotohalll="hel";
                   $sotohallr="hel";
                   $t1112="hel";
                   $t12l1="hel";
                   $sternall="hel";
                   $sternalr="hel";
                   $beevorl="hel";
                   $beevorr="one";
                   $notes="one";
                   $intercostal="one";
                   $sitting="one";
                   $standing="one";
                   $driving="one";

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

        $sql3="INSERT INTO tbl_thoracicexam(thoracicexamid,username,pname,date,muscle,swelling,acromion,inferior,iliac,ribhumping,allsoft,rectus,obliques,levator,serratus,pectoralis,trapezius,rhomboids,pectoralisminor,paraspinals,othernotes,functionalrangeofmotion,subluxation,orthopedic,flexion,t12,t23,adamsignl,adamsignr,extension,t34,t45,schepelmanl,schepelmanr,lflexion,rflexion,t56,t67,valsalval,valsalvar,lrotation,rrotation,t78,t89,dejerinel,dejeriner,t910,t1011,sotohalll,sotohallr,t1112,t12l1,sternall,sternalr,beevorl,beevorr,neurologicaltest,notes,intercostal,sitting,standing,driving,otherfunctional,break_text3,assessment,patientstatus,diagnosis1,diagnosis2,diagnosis3,diagnosis4,diagnosis5,diagnosis6,times,week,spinal,chiropractic,physical,orthotics,modalities,supplementation,hep,radiographic,mri,ctscan,nerve,emg,outside,dc,otheraddress,break_text4,sign) VALUES ('','".$user_name."','".$pname."','".$date."','".$muscle."','".$swelling."','".$acromion."','".$inferior."','".$iliac."','".$ribhumping."','".$allsoft."','".$rectus."','".$obliques."','".$levator."','".$serratus."','".$pectoralis."','".$trapezius."','".$rhomboids."','".$pectoralisminor."','".$paraspinals."','".$othernotes."','".$functionalrangeofmotion."','".$subluxation."','".$orthopedic."','".$flexion."','".$t12."','".$t23."','".$adamsignl."','".$adamsignr."','".$extension."','".$t34."','".$t45."','".$schepelmanl."','".$schepelmanr."','".$lflexion."','".$rflexion."','".$t56."','".$t67."','".$valsalval."','".$valsalvar."','".$lrotation."','".$rrotation."','".$t78."','".$t89."','".$dejerinel."','".$dejeriner."','".$t910."','".$t1011."','".$sotohalll."','".$sotohallr."','".$t1112."','".$t12l1."','".$sternall."','".$sternalr."','".$beevorl."','".$beevorr."','".$neurologicaltest."','".$notes."','".$intercostal."','".$sitting."','".$standing."','".$driving."','".$otherfunctional."','".$break_text3."','".$assessment."','".$patientstatus."','".$diagnosis1."','".$diagnosis2."','".$diagnosis3."','".$diagnosis4."','".$diagnosis5."','".$diagnosis6."','".$times."','".$week."','".$spinal."','".$chiropractic."','".$physical."','".$orthotics."','".$modalities."','".$supplementation."','".$hep."','".$radiographic."','".$mri."','".$ctscan."','".$nerve."','".$emg."','".$outside."','".$dc."','".$otheraddress."','".$break_text4."','".$sign."')";


        //echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'thoracicexamdelete':
    {
        $user_name=$_POST['username'];
//
        $sql4 ="delete from tbl_thoracicexam where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "thoracicexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>