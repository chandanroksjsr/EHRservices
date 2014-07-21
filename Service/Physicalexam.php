<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07/05/14
 * Time: 11:25 AM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'physicalexamselect':
    {

       $patient_id = $_POST['username'];
      // $patient_id = "silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_physicalexam WHERE patient_id='$patient_id'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "Yes", "physicalexamuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "Yes", "patient_number" : "'.$row->patient_number.'", "patient_id" : "'.$row->patient_id.'", "sign" : "'.$row->sign.'", "name" : "'.$row->name.'", "id" : "'.$row->id.'", "date" : "'.$row->date.'","age" : "'.$row->age.'","sex" : "'.$row->sex.'","height" : "'.$row->height.'","height1" : "'.$row->height1.'","weight" : "'.$row->weight.'","temp" : "'.$row->temp.'","bp" : "'.$row->bp.'","pulse" : "'.$row->pulse.'","appearance" : "'.$row->appearance.'","weight1" : "'.$row->weight1.'","gait" : "'.$row->gait.'","head" : "'.$row->head.'","path" : "'.$row->path.'","posture" : "'.$row->posture.'","romber" : "'.$row->romber.'","exam" : "'.$row->exam.'","abnormal" : "'.$row->abnormal.'","headtiltright" : "'.$row->headtiltright.'","headtiltleft" : "'.$row->headtiltleft.'","headtiltnormal" : "'.$row->headtiltnormal.'","rotationright" : "'.$row->rotationright.'","rotationleft" : "'.$row->rotationleft.'","rotationnormal" : "'.$row->rotationnormal.'","tmjright" : "'.$row->tmjright.'","tmjleft" : "'.$row->tmjleft.'" ,"tmjnormal" : "'.$row->tmjnormal.'","highright" : "'.$row->highright.'","highleft": "'.$row->highleft.'","highnormal": "'.$row->highnormal.'","lordhyper": "'.$row->lordhyper.'","lordhypo": "'.$row->lordhypo.'","lordnormal" : "'.$row->lordnormal.'","lymphedema": "'.$row->lymphedema.'","lymphnormal": "'.$row->lymphnormal.'","paraspain": "'.$row->paraspain.'","parasspasm": "'.$row->parasspasm.'","parasedema": "'.$row->parasedema.'","parastriggerpoint": "'.$row->parastriggerpoint.'","trapeziusrl": "'.$row->trapeziusrl.'","trapeziusrl1" : "'.$row->trapeziusrl1.'","scm" : "'.$row->scm.'","scm1" : "'.$row->scm1.'","vertebraefix" : "'.$row->vertebraefix.'","vertebraenofix" : "'.$row->vertebraenofix.'","flexpain": "'.$row->flexpain.'","flexspasm" : "'.$row->flexspasm.'","flexstiff" : "'.$row->flexstiff.'","extpain" : "'.$row->extpain.'","extspasm": "'.$row->extspasm.'","extstiff": "'.$row->extstiff.'","rlfpain" : "'.$row->rlfpain.'","rlfspasm": "'.$row->rlfspasm.'","rlfstiff" : "'.$row->rlfstiff.'","llfpain": "'.$row->llfpain.'","llfspasm": "'.$row->llfspasm.'","llfstiff" : "'.$row->llfstiff.'","rrpain" : "'.$row->rrpain.'","rrspasm" : "'.$row->rrspasm.'","rrstiff": "'.$row->rrstiff.'","lrpain" : "'.$row->lrpain.'","lrspasm" : "'.$row->lrspasm.'","lrstiff" : "'.$row->lrstiff.'","c5": "'.$row->c5.'","c5right": "'.$row->c5right.'","c5left" : "'.$row->c5left.'","c6": "'.$row->c6.'","c6right" : "'.$row->c6right.'", "c6left" : "'.$row->c6left.'", "c7" : "'.$row->c7.'", "c7right" : "'.$row->c7right.'", "c7left" : "'.$row->c7left.'","c8" : "'.$row->c8.'","c8right" : "'.$row->c8right.'","c8left" : "'.$row->c8left.'","t1" : "'.$row->t1.'","t1right" : "'.$row->t1right.'","t1left" : "'.$row->t1left.'","other" : "'.$row->other.'","otherright" : "'.$row->otherright.'","otherleft" : "'.$row->otherleft.'","deltoidright" : "'.$row->deltoidright.'","deltoidleft" : "'.$row->deltoidleft.'","wristright" : "'.$row->wristright.'","wristleft" : "'.$row->wristleft.'","wristflexright" : "'.$row->wristflexright.'","wristflexleft" : "'.$row->wristflexleft.'","fingerflexright" : "'.$row->fingerflexright.'","fingerflexleft" : "'.$row->fingerflexleft.'","fingeraddright" : "'.$row->fingeraddright.'","fingeraddleft" : "'.$row->fingeraddleft.'","bicepright" : "'.$row->bicepright.'","bicepleft" : "'.$row->bicepleft.'","bracioradright" : "'.$row->bracioradright.'" ,"bracioradleft" : "'.$row->bracioradleft.'","tricepright" : "'.$row->tricepright.'","tricepleft": "'.$row->tricepleft.'","presentvisual": "'.$row->presentvisual.'","presentrl": "'.$row->presentrl.'","highshoulderright": "'.$row->highshoulderright.'","highshoulderleft": "'.$row->highshoulderleft.'","highshouldernormal": "'.$row->highshouldernormal.'","curvatureright" : "'.$row->curvatureright.'","curvatureleft": "'.$row->curvatureleft.'","curvaturenormal": "'.$row->curvaturenormal.'","wingingright": "'.$row->wingingright.'","wingingleft": "'.$row->wingingleft.'","wingingnormal": "'.$row->wingingnormal.'","ribhumpright": "'.$row->ribhumpright.'","ribhumpleft": "'.$row->ribhumpleft.'","ribhumpnormal" : "'.$row->ribhumpnormal.'","chestmeasurein" : "'.$row->chestmeasurein.'","kyphosishyper" : "'.$row->kyphosishyper.'","kyphosishypo" : "'.$row->kyphosishypo.'","kyphosisnormal": "'.$row->kyphosisnormal.'","parapain" : "'.$row->parapain.'","paraspasm" : "'.$row->paraspasm.'","paraedema" : "'.$row->paraedema.'","paratriggerpoint" : "'.$row->paratriggerpoint.'","ribspost": "'.$row->ribspost.'","ribsnor": "'.$row->ribsnor.'","vertefix" : "'.$row->vertefix.'","vertenofix" : "'.$row->vertenofix.'","thoracicpain" : "'.$row->thoracicpain.'","thoracicspasm": "'.$row->thoracicspasm.'","thoracicstiff": "'.$row->thoracicstiff.'","thoextpain" : "'.$row->thoextpain.'","thoextspasm" : "'.$row->thoextspasm.'","thoextstiff" : "'.$row->thoextstiff.'","thorlfpain": "'.$row->thorlfpain.'","thorlfspasm" : "'.$row->thorlfspasm.'","thorlfstiff" : "'.$row->thorlfstiff.'","thollfpain" : "'.$row->thollfpain.'","thollfspasm": "'.$row->thollfspasm.'","thollfstiff": "'.$row->thollfstiff.'","thorrpain": "'.$row->thorrpain.'","thorrspasm" : "'.$row->thorrspasm.'", "thorrstiff" : "'.$row->thorrstiff.'", "tholrnormal" : "'.$row->tholrnormal.'", "tholrpain" : "'.$row->tholrpain.'", "tholrspasm" : "'.$row->tholrspasm.'","tholrstiff" : "'.$row->tholrstiff.'","thot1" : "'.$row->thot1.'","thot1right" : "'.$row->thot1right.'","thot1left" : "'.$row->thot1left.'","thot4" : "'.$row->thot4.'","thot4right" : "'.$row->thot4right.'","thot4left" : "'.$row->thot4left.'","thot10" : "'.$row->thot10.'","thot10right" : "'.$row->thot10right.'","thot10left" : "'.$row->thot10left.'","thoother" : "'.$row->thoother.'","thootherright" : "'.$row->thootherright.'","thootherleft" : "'.$row->thootherleft.'","myotomes" : "'.$row->myotomes.'","positiveruq" : "'.$row->positiveruq.'","positiveluq" : "'.$row->positiveluq.'","positiverlq" : "'.$row->positiverlq.'","positivellq" : "'.$row->positivellq.'",  "negativeruq" : "'.$row->negativeruq.'", "negativeluq" : "'.$row->negativeluq.'", "negativerlq" : "'.$row->negativerlq.'","negativellq" : "'.$row->negativellq.'","patientsmoker" : "'.$row->patientsmoker.'","highcrestright" : "'.$row->highcrestright.'","highcrestleft" : "'.$row->highcrestleft.'","highcrestnormal" : "'.$row->highcrestnormal.'","highhpsisright" : "'.$row->highhpsisright.'","highhpsisleft" : "'.$row->highhpsisleft.'","highhpsisnormal" : "'.$row->highhpsisnormal.'" ,"curveright" : "'.$row->curveright.'","curveleft" : "'.$row->curveleft.'","curvenormal": "'.$row->curvenormal.'","lordosishyper": "'.$row->lordosishyper.'","lordosishypo": "'.$row->lordosishypo.'","lordosisnormal": "'.$row->lordosisnormal.'","paraspinalpain" : "'.$row->paraspinalpain.'","paraspinalspasm": "'.$row->paraspinalspasm.'","paraspinaledema": "'.$row->paraspinaledema.'","paraspinaltp": "'.$row->paraspinaltp.'","quadrl": "'.$row->quadrl.'","quadtono": "'.$row->quadtono.'","quadnor": "'.$row->quadnor.'","hamstringrl": "'.$row->hamstringrl.'","hamstringtono" : "'.$row->hamstringtono.'","hamstringnor" : "'.$row->hamstringnor.'","verfix" : "'.$row->verfix.'","vernofix" : "'.$row->vernofix.'","abdomentender" : "'.$row->abdomentender.'","abdomenpulse": "'.$row->abdomenpulse.'","abdomenascites" : "'.$row->abdomenascites.'","lumflexnormal" : "'.$row->lumflexnormal.'","lumflexpain" : "'.$row->lumflexpain.'","lumflexspasm" : "'.$row->lumflexspasm.'","lumflexstiff": "'.$row->lumflexstiff.'","lumextnormal": "'.$row->lumextnormal.'","lumextpain" : "'.$row->lumextpain.'","lumextspasm" : "'.$row->lumextspasm.'","lumextstiff": "'.$row->lumextstiff.'","lumrlfpain": "'.$row->lumrlfpain.'","lumrlfspasm": "'.$row->lumrlfspasm.'","lumrlfstiff": "'.$row->lumrlfstiff.'","lumllfnormal" : "'.$row->lumllfnormal.'","lumllfpain" : "'.$row->lumllfpain.'","lumllfspasm" : "'.$row->lumllfspasm.'","lumllfstiff" : "'.$row->lumllfstiff.'","lumrrnormal": "'.$row->lumrrnormal.'","lumrrpain" : "'.$row->lumrrpain.'","lumrrspasm" : "'.$row->lumrrspasm.'","lumrrstiff" : "'.$row->lumrrstiff.'","lumlrnormal" : "'.$row->lumlrnormal.'","lumlrpain": "'.$row->lumlrpain.'","lumlrspasm": "'.$row->lumlrspasm.'","lumlrstiff" : "'.$row->lumlrstiff.'", "lu1" : "'.$row->lu1.'", "lu1right" : "'.$row->lu1right.'", "lu1left" : "'.$row->lu1left.'", "lu2" : "'.$row->lu2.'","lu2right" : "'.$row->lu2right.'","lu2left" : "'.$row->lu2left.'","lu3" : "'.$row->lu3.'","lu3right" : "'.$row->lu3right.'","lu3left" : "'.$row->lu3left.'","lu4" : "'.$row->lu4.'","lu4right" : "'.$row->lu4right.'","lu4left" : "'.$row->lu4left.'","lu5" : "'.$row->lu5.'","lu5right" : "'.$row->lu5right.'","lu5left" : "'.$row->lu5left.'","lu6" : "'.$row->lu6.'","lu6right" : "'.$row->lu6right.'","lu6left" : "'.$row->lu6left.'","lu7" : "'.$row->lu7.'", "lu7right" : "'.$row->lu7right.'", "lu7left" : "'.$row->lu7left.'","hipflexright": "'.$row->hipflexright.'","hipflexleft" : "'.$row->hipflexleft.'", "legextright" : "'.$row->legextright.'", "legextleft" : "'.$row->legextleft.'", "dorsiflexright" : "'.$row->dorsiflexright.'", "dorsiflexleft" : "'.$row->dorsiflexleft.'","digitflexright" : "'.$row->digitflexright.'","digitflexleft" : "'.$row->digitflexleft.'","heelright" : "'.$row->heelright.'","heelleft" : "'.$row->heelleft.'","toeright" : "'.$row->toeright.'","toeleft" : "'.$row->toeleft.'","patellarright" : "'.$row->patellarright.'","patellarleft" : "'.$row->patellarleft.'","achillesright" : "'.$row->achillesright.'","achillesleft" : "'.$row->achillesleft.'","babinskiright" : "'.$row->babinskiright.'","babinskileft" : "'.$row->babinskileft.'","message" : "1" } }';




                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'physicalexamedit':
    {
        $patient_id = $_POST['username'];
        $sign=$_POST['sign'];
        $name=$_POST['name'];
        $id=$_POST['id'];

        $date=$_POST['date'];
        $age=$_POST['age'];
        $sex=$_POST['sex'];
        $height=$_POST['height'];
     $height1=$_POST['height1'];
     $weight=$_POST['weight'];
        $temp=$_POST['temp'];
        $bp=$_POST['bp'];
        $pulse=$_POST['pulse'];
        $appearance=$_POST['appearance'];
        $weight1=$_POST['weight1'];
        $gait=$_POST['gait'];
        $head=$_POST['head'];
        $path=$_POST['path'];
        $posture=$_POST['posture'];
        $romber=$_POST['romber'];
        $exam=$_POST['exam'];
        $abnormal=$_POST['abnormal'];
        $headtiltright=$_POST['headtiltright'];
        $headtiltleft=$_POST['headtiltleft'];
        $headtiltnormal=$_POST['headtiltnormal'];
        $rotationright=$_POST['rotationright'];
        $rotationleft=$_POST['rotationleft'];
        $rotationnormal=$_POST['rotationnormal'];
        $tmjright=$_POST['tmjright'];
        $tmjleft=$_POST['tmjleft'];
        $tmjnormal=$_POST['tmjnormal'];
        $highright=$_POST['highright'];
        $highleft=$_POST['highleft'];
        $highnormal=$_POST['highnormal'];
        $lordhyper=$_POST['lordhyper'];
        $lordhypo=$_POST['lordhypo'];
        $lordnormal=$_POST['lordnormal'];

        $lymphedema=$_POST['lymphedema'];
        $lymphnormal=$_POST['lymphnormal'];
        $paraspain=$_POST['paraspain'];
        $parasspasm=$_POST['parasspasm'];
        $parasedema=$_POST['parasedema'];
        $parastriggerpoint=$_POST['parastriggerpoint'];
        $trapeziusrl=$_POST['trapeziusrl'];
        $trapeziusrl1=$_POST['trapeziusrl1'];
         $scm=$_POST['scm'];
      $scm1=$_POST['scm1'];
     $vertebraefix=$_POST['vertebraefix'];
        $vertebraenofix=$_POST['vertebraenofix'];

        $flexpain=$_POST['flexpain'];
        $flexspasm=$_POST['flexspasm'];
        $flexstiff=$_POST['flexstiff'];
        $extpain=$_POST['extpain'];
        $extspasm=$_POST['extspasm'];
        $extstiff=$_POST['extstiff'];
        $rlfpain=$_POST['rlfpain'];
        $rlfspasm=$_POST['rlfspasm'];
        $rlfstiff=$_POST['rlfstiff'];
        $llfpain=$_POST['llfpain'];
        $llfspasm=$_POST['llfspasm'];
        $llfstiff=$_POST['llfstiff'];
        $rrpain=$_POST['rrpain'];
        $rrspasm=$_POST['rrspasm'];
        $rrstiff=$_POST['rrstiff'];
        $lrpain=$_POST['lrpain'];
        $lrspasm=$_POST['lrspasm'];
        $lrstiff=$_POST['lrstiff'];

        $c5=$_POST['c5'];
        $c5right=$_POST['c5right'];
        $c5left=$_POST['c5left'];
        $c6=$_POST['c6'];
        $c6right=$_POST['c6right'];

        $c6left=$_POST['c6left'];
        $c7=$_POST['c7'];
        $c7right=$_POST['c7right'];
        $c7left=$_POST['c7left'];
        $c8=$_POST['c8'];
        $c8right=$_POST['c8right'];
        $c8left=$_POST['c8left'];
        $t1=$_POST['t1'];
        $t1right=$_POST['t1right'];
        $t1left=$_POST['t1left'];
        $other=$_POST['other'];
        $otherright=$_POST['otherright'];
        $otherleft=$_POST['otherleft'];
        $deltoidright=$_POST['deltoidright'];
        $deltoidleft=$_POST['deltoidleft'];
        $wristright=$_POST['wristright'];
        $wristleft=$_POST['wristleft'];
        $wristflexright=$_POST['wristflexright'];
        $wristflexleft=$_POST['wristflexleft'];
        $fingerflexright=$_POST['fingerflexright'];
        $fingerflexleft=$_POST['fingerflexleft'];
        $fingeraddright=$_POST['fingeraddright'];
        $fingeraddleft=$_POST['fingeraddleft'];

        $bicepright=$_POST['bicepright'];
        $bicepleft=$_POST['bicepleft'];
        $bracioradright=$_POST['bracioradright'];
        $bracioradleft=$_POST['bracioradleft'];
        $tricepright=$_POST['tricepright'];
        $tricepleft=$_POST['tricepleft'];
     $presentvisual=$_POST['presentvisual'];
        $presentrl=$_POST['presentrl'];
        $highshoulderright=$_POST['highshoulderright'];
        $highshoulderleft=$_POST['highshoulderleft'];
        $highshouldernormal=$_POST['highshouldernormal'];
        $curvatureright=$_POST['curvatureright'];
        $curvatureleft=$_POST['curvatureleft'];
        $curvaturenormal=$_POST['curvaturenormal'];
        $wingingright=$_POST['wingingright'];
        $wingingleft=$_POST['wingingleft'];
        $wingingnormal=$_POST['wingingnormal'];
        $ribhumpright=$_POST['ribhumpright'];
        $ribhumpleft=$_POST['ribhumpleft'];
        $ribhumpnormal=$_POST['ribhumpnormal'];
        $chestmeasurein=$_POST['chestmeasurein'];

        $kyphosishyper=$_POST['kyphosishyper'];
        $kyphosishypo=$_POST['kyphosishypo'];
        $kyphosisnormal=$_POST['kyphosisnormal'];
        $parapain=$_POST['parapain'];
        $paraspasm=$_POST['paraspasm'];
        $paraedema=$_POST['paraedema'];
        $paratriggerpoint=$_POST['paratriggerpoint'];
        $ribspost=$_POST['ribspost'];
        $ribsnor=$_POST['ribsnor'];
        $vertefix=$_POST['vertefix'];
        $vertenofix=$_POST['vertenofix'];

        $thoracicpain=$_POST['thoracicpain'];
        $thoracicspasm=$_POST['thoracicspasm'];
        $thoracicstiff=$_POST['thoracicstiff'];
        $thoextpain=$_POST['thoextpain'];
        $thoextspasm=$_POST['thoextspasm'];
        $thoextstiff=$_POST['thoextstiff'];
        $thorlfpain=$_POST['thorlfpain'];
        $thorlfspasm=$_POST['thorlfspasm'];
        $thorlfstiff=$_POST['thorlfstiff'];
        $thollfpain=$_POST['thollfpain'];
        $thollfspasm=$_POST['thollfspasm'];
        $thollfstiff=$_POST['thollfstiff'];

        $thorrpain=$_POST['thorrpain'];
        $thorrspasm=$_POST['thorrspasm'];
        $thorrstiff=$_POST['thorrstiff'];
        $tholrpain=$_POST['tholrpain'];
        $tholrspasm=$_POST['tholrspasm'];
        $tholrstiff=$_POST['tholrstiff'];

        $thot1=$_POST['thot1'];
        $thot1right=$_POST['thot1right'];
        $thot1left=$_POST['thot1left'];
        $thot4=$_POST['thot4'];
        $thot4right=$_POST['thot4right'];
        $thot4left=$_POST['thot4left'];
        $thot10=$_POST['thot10'];
        $thot10right=$_POST['thot10right'];
        $thot10left=$_POST['thot10left'];
        $thoother=$_POST['thoother'];
        $thootherright=$_POST['thootherright'];
        $thootherleft=$_POST['thootherleft'];

        $myotomes=$_POST['myotomes'];
        $positiveruq=$_POST['positiveruq'];
        $positiveluq=$_POST['positiveluq'];
        $positiverlq=$_POST['positiverlq'];
        $positivellq=$_POST['positivellq'];

        $negativeruq=$_POST['negativeruq'];
        $negativeluq=$_POST['negativeluq'];
        $negativerlq=$_POST['negativerlq'];
        $negativellq=$_POST['negativellq'];

        $patientsmoker=$_POST['patientsmoker'];
        $highcrestright=$_POST['highcrestright'];
        $highcrestleft=$_POST['highcrestleft'];
        $highcrestnormal=$_POST['highcrestnormal'];
        $highpsisright=$_POST['highpsisright'];
        $highpsisleft=$_POST['highpsisleft'];
        $highpsisnormal=$_POST['highpsisnormal'];
        $curveright=$_POST['curveright'];
        $curveleft=$_POST['curveleft'];
        $curvenormal=$_POST['curvenormal'];
        $lordosishyper=$_POST['lordosishyper'];
        $lordosishypo=$_POST['lordosishypo'];
        $lordosisnormal=$_POST['lordosisnormal'];
        $paraspinalpain=$_POST['paraspinalpain'];
        $paraspinalspasm=$_POST['paraspinalspasm'];
        $paraspinaledema=$_POST['paraspinaledema'];
        $paraspinaltp=$_POST['paraspinaltp'];
        $quadrl=$_POST['quadrl'];
        $quadrl1=$_POST['quadrl1'];
        $hamstringrl=$_POST['hamstringrl'];
        $hamstringrl1=$_POST['hamstringrl1'];
        $verfix=$_POST['verfix'];
        $vernofix=$_POST['vernofix'];
        $abdomentender=$_POST['abdomentender'];
        $abdomenpulse=$_POST['abdomenpulse'];
        $abdomenascites=$_POST['abdomenascites'];

        $lumflexpain=$_POST['lumflexpain'];
        $lumflexspasm=$_POST['lumflexspasm'];
        $lumflexstiff=$_POST['lumflexstiff'];
        $lumextpain=$_POST['lumextpain'];
        $lumextspasm=$_POST['lumextspasm'];
        $lumextstiff=$_POST['lumextstiff'];

        $lumrlfpain=$_POST['lumrlfpain'];
        $lumrlfspasm=$_POST['lumrlfspasm'];
        $lumrlfstiff=$_POST['lumrlfstiff'];
        $lumllfpain=$_POST['lumllfpain'];
        $lumllfspasm=$_POST['lumllfspasm'];
        $lumllfstiff=$_POST['lumllfstiff'];
        $lumrrpain=$_POST['lumrrpain'];
        $lumrrspasm=$_POST['lumrrspasm'];
        $lumrrstiff=$_POST['lumrrstiff'];

        $lumlrpain=$_POST['lumlrpain'];
        $lumlrspasm=$_POST['lumlrspasm'];
        $lumlrstiff=$_POST['lumlrstiff'];
             $lu1=$_POST['lu1'];
        $lu1right=$_POST['lu1right'];
        $lu1left=$_POST['lu1left'];
        $lu2=$_POST['lu2'];
        $lu2right=$_POST['lu2right'];
        $lu2left=$_POST['lu2left'];
        $lu3=$_POST['lu3'];
        $lu3right=$_POST['lu3right'];
        $lu3left=$_POST['lu3left'];
        $lu4=$_POST['lu4'];
        $lu4right=$_POST['lu4right'];
        $lu4left=$_POST['lu4left'];
        $lu5=$_POST['lu5'];
        $lu5right=$_POST['lu5right'];
        $lu5left=$_POST['lu5left'];
        $lu6=$_POST['lu6'];
        $lu6right=$_POST['lu6right'];
        $lu6left=$_POST['lu6left'];
        $lu7=$_POST['lu7'];
       $lu7right=$_POST['lu7right'];
        $lu7left=$_POST['lu7left'];
        $hipflexright=$_POST['hipflexright'];
        $hipflexleft=$_POST['hipflexleft'];
        $legextright=$_POST['legextright'];
        $legextleft=$_POST['legextleft'];
        $dorsiflexright=$_POST['dorsiflexright'];
        $dorsiflexleft=$_POST['dorsiflexleft'];
        $digitflexright=$_POST['digitflexright'];
        $digitflexleft=$_POST['digitflexleft'];
        $heelright=$_POST['heelright'];
        $heelleft=$_POST['heelleft'];
        $toeright=$_POST['toeright'];
        $toeleft=$_POST['toeleft'];
        $patellarright=$_POST['patellarright'];
        $patellarleft=$_POST['patellarleft'];
        $achillesright=$_POST['achillesright'];
        $achillesleft=$_POST['achillesleft'];
        $babinskiright=$_POST['babinskiright'];
        $babinskileft=$_POST['babinskileft'];



    /*
        $patient_id="silvi";
           $sign="sivliya rani";
           $name="sivliya";
           $id="07";
           $date="07/05/2014";
           $age="age";
           $sex="sex";
           $height="height";
        $height1="height1";
        $weight="weight";
           $temp="temp";
           $bp="bp";
           $pulse="pulse";
           $appearance="appearance";
           $weight1="weight1";
           $gait="gait";
           $head="head";
           $path="path";
           $posture="posture";
           $romber="romber";
           $exam="exam";
           $abnormal="abnormal";
           $headtiltright="headtiltright";
           $headtiltleft="headtiltleft";
           $headtiltnormal="headtiltnormal";
           $rotationright="rotationright";
           $rotationleft="rotationleft";
           $rotationnormal="rotationnormal";
           $tmjright="tmjright";
           $tmjleft="tmjleft";

           $tmjnormal="tmjnormal";
           $highright="highright";
           $highleft="highleft";
           $highnormal="highnormal";
           $lordhyper="lordhyper";
           $lordhypo="lordhypo";
           $lordnormal="lordnormal";
           $lymphedema="lymphedema";
           $lymphnormal="lymphnormal";

           $paraspain="paraspain";
           $parasspasm="parasspasm";
           $parasedema="parasedema";
           $parastriggerpoint="parastriggerpoint";
           $trapeziusrl="trapeziusrl";
        $trapeziusrl1="trapeziusrl1";
        $scm="scm";
        $scm1="scm1";
           $vertebraefix="vertebraefix";
           $vertebraenofix="vertebraenofix";

           $flexpain="flexpain";
           $flexspasm="flexspasm";
           $flexstiff="flexstiff";

           $extpain="extpain";
           $extspasm="extspasm";
           $extstiff="extstiff";

           $rlfpain="rlfpain";
           $rlfspasm="rlfspasm";
           $rlfstiff="rlfstiff";

           $llfpain="llfpain";
           $llfspasm="llfspasm";
           $llfstiff="llfstiff";

           $rrpain="rrpain";
           $rrspasm="rrspasm";
           $rrstiff="rrstiff";

           $lrpain="lrpain";
           $lrspasm="lrspasm";
           $lrstiff="lrstiff";
           $c5="c5";
           $c5right="c5right";
           $c5left="c5left";
           $c6="c6";
           $c6right="c6right";
        $c6left="c6left";
           $c7="c7";
           $c7right="c7right";
           $c7left="c7left";
           $c8="c8";
           $c8right="c8right";
           $c8left="c8left";
           $t1="t1";
           $t1right="t1right";
           $t1left="t1left";
           $other="other";
           $otherright="otherright";
           $otherleft="otherleft";
           $deltoidright="deltoidright";
           $deltoidleft="deltoidleft";
           $wristright="wristright";
           $wristleft="wristleft";
           $wristflexright="wristflexright";
           $wristflexleft="wristflexleft";
           $fingerflexright="fingerflexright";
           $fingerflexleft="fingerflexleft";
           $fingeraddright="fingeraddright";
           $fingeraddleft="fingeraddleft";

           $bicepright="bicepright";
           $bicepleft="bicepleft";
           $bracioradright="bracioradright";

           $bracioradleft="bracioradleft";
           $tricepright="tricepright";
           $tricepleft="tricepleft";
        $presentvisual="presentvisual";
        $presentrl="presentrl";
           $highshoulderright="highshoulderright";
           $highshoulderleft="highshoulderleft";
           $highshouldernormal="highshouldernormal";
           $curvatureright="curvatureright";
           $curvatureleft="curvatureleft";
           $curvaturenormal="curvaturenormal";
           $curvatureright_explain="curvatureright_explain";
           $during_after_crash="during_after_crash";
           $wingingright="wingingright";
           $wingingleft="wingingleft";
           $wingingnormal="wingingnormal";
           $ribhumpright="ribhumpright";
           $ribhumpleft="ribhumpleft";
           $ribhumpnormal="ribhumpnormal";
           $chestmeasurein="chestmeasurein";

           $kyphosishyper="kyphosishyper";
           $kyphosishypo="kyphosishypo";
           $kyphosisnormal="kyphosisnormal";
           $parapain="parapain";
           $paraspasm="paraspasm";
           $paraedema="paraedema";
           $paratriggerpoint="paratriggerpoint";
           $ribspost="ribspost";
           $ribsnor="ribsnor";
           $vertefix="vertefix";
           $vertenofix="vertenofix";

           $thoracicpain="thoracicpain";
           $thoracicspasm="thoracicspasm";
           $thoracicstiff="thoracicstiff";

           $thoextpain="thoextpain";
           $thoextspasm="thoextspasm";
           $thoextstiff="thoextstiff";

           $thorlfpain="thorlfpain";
           $thorlfspasm="thorlfspasm";
           $thorlfstiff="thorlfstiff";

           $thollfpain="thollfpain";
           $thollfspasm="thollfspasm";
           $thollfstiff="thollfstiff";

           $thorrpain="thorrpain";
           $thorrspasm="thorrspasm";
        $thorrstiff="thorrstiff";

           $tholrpain="tholrpain";
           $tholrspasm="tholrspasm";
           $tholrstiff="tholrstiff";
           $thot1="thot1";
           $thot1right="thot1right";
           $thot1left="thot1left";
           $thot4="thot4";
           $thot4right="thot4right";
           $thot4left="thot4left";
           $thot10="thot10";
           $thot10right="thot10right";
           $thot10left="thot10left";
           $thoother="thoother";
           $thootherright="thootherright";
           $thootherleft="thootherleft";
           $myotomes="myotomes";
           $positiveruq="positiveruq";
           $positiveluq="positiveluq";
           $positiverlq="positiverlq";
           $positivellq="positivellq";

        $negativeruq="negativeruq";
        $negativeluq="negativeluq";
        $negativerlq="negativerlq";
        $negativellq="negativellq";
        $patientsmoker="patientsmoker";
           $highcrestright="highcrestright";
           $highcrestleft="highcrestleft";
           $highcrestnormal="highcrestnormal";
           $highpsisright="highpsisright";
           $highpsisleft="highpsisleft";
           $highpsisnormal="highpsisnormal";

           $curveright="curveright";
           $curveleft="curveleft";
           $curvenormal="curvenormal";
           $lordosishyper="lordosishyper";
           $lordosishypo="lordosishypo";
           $lordosisnormal="lordosisnormal";
           $paraspinalpain="paraspinalpain";
           $paraspinalspasm="paraspinalspasm";
           $paraspinaledema="injury_text";
           $paraspinalpain_explain="paraspinalpain_explain";
           $during_after_crash="during_after_crash";
           $paraspinaltp="paraspinaltp";
           $quadrl="quadrl";
           $quadrl1="quadrl1";
           $hamstringrl="hamstringrl";
           $hamstringrl1="hamstringrl1";
           $verfix="verfix";
           $vernofix="vernofix";
           $abdomentender="abdomentender";
           $abdomenpulse="abdomenpulse";
           $abdomenascites="abdomenascites";

           $lumflexpain="lumflexpain";
           $lumflexspasm="lumflexspasm";
           $lumflexstiff="lumflexstiff";

           $lumextpain="lumextpain";
           $lumextspasm="lumextspasm";
           $lumextstiff="lumextstiff";

           $lumrlfpain="lumrlfpain";
           $lumrlfspasm="lumrlfspasm";
           $lumrlfstiff="lumrlfstiff";

           $lumllfpain="lumllfpain";
           $lumllfspasm="lumllfspasm";
           $lumllfstiff="lumllfstiff";

           $lumrrpain="lumrrpain";
           $lumrrspasm="lumrrspasm";
           $lumrrstiff="lumrrstiff";

           $lumlrpain="lumlrpain";
           $lumlrspasm="lumlrspasm";
           $lumlrstiff="lumlrstiff";
        $lu1="1";
        $lu1right="2";
        $lu1left="3";
        $lu2="4";
        $lu2right="5";
        $lu2left="6";
        $lu3 ="7";
        $lu3right="8";
        $lu3left="9";
        $lu4="10";
        $lu4right="11";
        $lu4left="40/40/2014";
        $lu5="12";
        $lu5right="13";
        $lu5left="14";
        $lu6="software";
        $lu6right="develoepr";
        $lu6left="coding";
        $lu7="ccc";
        $lu7right="good";
        $lu7left="nice";
           $hipflexright="hipflexright";
           $hipflexleft="hipflexleft";
        $legextright="1";
          $legextleft="2";
          $dorsiflexright="3";
          $dorsiflexleft="4";
          $digitflexright="5";
          $digitflexleft="6";
          $heelright ="7";
          $heelleft="8";
          $toeright="9";
          $toeleft="10";
          $patellarright="11";
          $patellarleft="40/40/2014";
          $achillesright="12";
          $achillesleft="13";
          $babinskiright="14";
          $babinskileft="software";
  // */

        $sql2="update tbl_physicalexam set patient_id ='".$patient_id."',sign ='".$sign."',name ='" .$name."',id ='".$id."',date ='" .$date."',age ='" .$age."',sex ='" .$sex."',height ='" .$height."',height1 ='" .$height1."',weight ='" .$weight."',temp ='" .$temp."',bp ='" .$bp."',pulse ='" .$pulse."',appearance ='" .$appearance."',weight1 ='" .$weight1."',gait ='" .$gait."',head ='" .$head."',path ='" .$path."',posture ='" .$posture."',romber ='" .$romber."',exam ='" .$exam."',abnormal ='" .$abnormal."',headtiltright ='" .$headtiltright."',headtiltleft ='" .$headtiltleft."',headtiltnormal ='" .$headtiltnormal."',rotationright ='" .$rotationright."',rotationleft ='" .$rotationleft."',rotationnormal ='" .$rotationnormal."',tmjright ='" .$tmjright."',tmjleft ='" .$tmjleft. "',tmjnormal ='" .$tmjnormal."',highright ='" .$highright."',highleft='" .$highleft."',highnormal='" .$highnormal."',lordhyper='" .$lordhyper."',lordhypo='" .$lordhypo."',lordnormal ='" .$lordnormal."',lymphedema='" .$lymphedema."',lymphnormal='" .$lymphnormal."',paraspain='" .$paraspain."',parasspasm='" .$parasspasm."',parasedema='" .$parasedema."',parastriggerpoint='" .$parastriggerpoint."',trapeziusrl='" .$trapeziusrl."',trapeziusrl1 ='" .$trapeziusrl1."',scm ='" .$scm."',scm1 ='" .$scm1."',vertebraefix ='" .$vertebraefix."',vertebraenofix ='" .$vertebraenofix."',flexpain='" .$flexpain."',flexspasm ='" .$flexspasm."',flexstiff ='" .$flexstiff."',extpain ='" .$extpain."',extspasm='" .$extspasm."',extstiff='" .$extstiff."',rlfpain ='" .$rlfpain."',rlfspasm='" .$rlfspasm."',rlfstiff ='" .$rlfstiff."',llfpain='" .$llfpain."',llfspasm='" .$llfspasm."',llfstiff ='" .$llfstiff."',rrpain ='" .$rrpain."',rrspasm ='" .$rrspasm."',rrstiff='" .$rrstiff."',lrpain ='" .$lrpain."',lrspasm ='" .$lrspasm."',lrstiff ='" .$lrstiff."',c5='" .$c5."',c5right='" .$c5right."',c5left ='" .$c5left."',c6='" .$c6."',c6right ='".$c6right."' ,c6left ='".$c6left."',c7 ='" .$c7."',c7right ='".$c7right."',c7left ='" .$c7left."',c8 ='" .$c8."',c8right ='" .$c8right."',c8left ='" .$c8left."',t1 ='" .$t1."',t1right ='" .$t1right."',t1left ='" .$t1left."',other ='" .$other."',otherright ='" .$otherright."',otherleft ='" .$otherleft."',deltoidright ='" .$deltoidright."',deltoidleft ='" .$deltoidleft."',wristright ='" .$wristright."',wristleft ='" .$wristleft."',wristflexright ='" .$wristflexright."',wristflexleft ='" .$wristflexleft."',fingerflexright ='" .$fingerflexright."',fingerflexleft ='" .$fingerflexleft."',fingeraddright ='" .$fingeraddright."',fingeraddleft ='" .$fingeraddleft."',bicepright ='" .$bicepright."',bicepleft ='" .$bicepleft."',bracioradright ='" .$bracioradright. "',bracioradleft ='" .$bracioradleft."',tricepright ='" .$tricepright."',tricepleft='" .$tricepleft."',presentvisual='" .$presentvisual."',presentrl='" .$presentrl."',highshoulderright='" .$highshoulderright."',highshoulderleft='" .$highshoulderleft."',highshouldernormal='" .$highshouldernormal."',curvatureright ='" .$curvatureright."',curvatureleft='" .$curvatureleft."',curvaturenormal='" .$curvaturenormal."',wingingright='" .$wingingright."',wingingleft='" .$wingingleft."',wingingnormal='" .$wingingnormal."',ribhumpright='" .$ribhumpright."',ribhumpleft='" .$ribhumpleft."',ribhumpnormal ='" .$ribhumpnormal."',chestmeasurein ='" .$chestmeasurein."',kyphosishyper ='" .$kyphosishyper."',kyphosishypo ='" .$kyphosishypo."',kyphosisnormal='" .$kyphosisnormal."',parapain ='" .$parapain."',paraspasm ='" .$paraspasm."',paraedema ='" .$paraedema."',paratriggerpoint ='" .$paratriggerpoint."',ribspost='" .$ribspost."',ribsnor='" .$ribsnor."',vertefix ='" .$vertefix."',vertenofix ='" .$vertenofix."',thoracicpain ='" .$thoracicpain."',thoracicspasm='" .$thoracicspasm."',thoracicstiff='" .$thoracicstiff."',thoextpain ='" .$thoextpain."',thoextspasm ='" .$thoextspasm."',thoextstiff ='" .$thoextstiff."',thorlfpain='" .$thorlfpain."',thorlfspasm ='" .$thorlfspasm."',thorlfstiff ='" .$thorlfstiff."',thollfpain ='" .$thollfpain."',thollfspasm='" .$thollfspasm."',thollfstiff='" .$thollfstiff."',thorrpain='" .$thorrpain."',thorrspasm ='".$thorrspasm."' ,thorrstiff ='".$thorrstiff."',tholrpain ='".$tholrpain."',tholrspasm ='" .$tholrspasm."',tholrstiff ='" .$tholrstiff."',thot1 ='" .$thot1."',thot1right ='" .$thot1right."',thot1left ='" .$thot1left."',thot4 ='" .$thot4."',thot4right ='" .$thot4right."',thot4left ='" .$thot4left."',thot10 ='" .$thot10."',thot10right ='" .$thot10right."',thot10left ='" .$thot10left."',thoother ='" .$thoother."',thootherright ='" .$thootherright."',thootherleft ='" .$thootherleft."',myotomes ='" .$myotomes."',positiveruq ='" .$positiveruq."',positiveluq ='" .$positiveluq."',positiverlq ='" .$positiverlq."',positivellq ='" .$positivellq."',negativeruq ='" .$negativeruq."',negativeluq ='".$negativeluq."',negativerlq ='" .$negativerlq."',negativellq ='" .$negativellq."',patientsmoker ='" .$patientsmoker."',highcrestright ='" .$highcrestright."',highcrestleft ='" .$highcrestleft."',highcrestnormal ='" .$highcrestnormal."',highpsisright ='" .$highpsisright."',highpsisleft ='" .$highpsisleft."',highpsisnormal ='" .$highpsisnormal. "',curveright ='" .$curveright."',curveleft ='" .$curveleft."',curvenormal='" .$curvenormal."',lordosishyper='" .$lordosishyper."',lordosishypo='" .$lordosishypo."',lordosisnormal='" .$lordosisnormal."',paraspinalpain ='" .$paraspinalpain."',paraspinalspasm='" .$paraspinalspasm."',paraspinaledema='" .$paraspinaledema."',paraspinaltp='" .$paraspinaltp."',quadrl='" .$quadrl."',quadrl1='" .$quadrl1."',hamstringrl='" .$hamstringrl."',hamstringrl1 ='" .$hamstringrl1."',verfix ='" .$verfix."',vernofix ='" .$vernofix."',abdomentender ='" .$abdomentender."',abdomenpulse='" .$abdomenpulse."',abdomenascites ='" .$abdomenascites."',lumflexpain ='" .$lumflexpain."',lumflexspasm ='" .$lumflexspasm."',lumflexstiff='" .$lumflexstiff."',lumextpain ='" .$lumextpain."',lumextspasm ='" .$lumextspasm."',lumextstiff='" .$lumextstiff."',lumrlfpain='" .$lumrlfpain."',lumrlfspasm='" .$lumrlfspasm."',lumrlfstiff='" .$lumrlfstiff."',lumllfpain ='" .$lumllfpain."',lumllfspasm ='" .$lumllfspasm."',lumllfstiff ='" .$lumllfstiff."',lumrrpain ='" .$lumrrpain."',lumrrspasm ='" .$lumrrspasm."',lumrrstiff ='" .$lumrrstiff."',lumlrpain='" .$lumlrpain."',lumlrspasm='" .$lumlrspasm."',lumlrstiff ='" .$lumlrstiff."',lu1='".$lu1."',lu1right='".$lu1right."',lu1left='".$lu1left."',lu2='".$lu2."',lu2right='".$lu2right."',lu2left='".$lu2left."',lu3='".$lu3."',lu3right='".$lu3right."',lu3left='".$lu3left."',lu4='".$lu4."',lu4right='".$lu4right."',lu4left='".$lu4left."',lu5='".$lu5."',lu5right='".$lu5right."',lu5left='".$lu5left."',lu6='".$lu6."',lu6right='".$lu6right."',lu6left='".$lu6left."',lu7='".$lu7."',lu7right='".$lu7right."',lu7left='".$lu7left."',hipflexright='" .$hipflexright."',hipflexleft ='".$hipflexleft."', legextright='".$legextright."',legextleft='".$legextleft."',dorsiflexright='".$dorsiflexright."',dorsiflexleft='".$dorsiflexleft."',digitflexright='".$digitflexright."',digitflexleft='".$digitflexleft."',heelright='".$heelright."',heelleft='".$heelleft."',toeright='".$toeright."',toeleft='".$toeleft."',patellarright='".$patellarright."',patellarleft='".$patellarleft."',achillesright='".$achillesright."',achillesleft='".$achillesleft."',babinskiright='".$babinskiright."',babinskileft='".$babinskileft."' WHERE  patient_id ='".$patient_id."'";




//echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'physicalexaminsert':
    {


        $patient_id=$_POST['username'];
        $sign=$_POST['sign'];
        $name=$_POST['name'];
        $id=$_POST['id'];
        $date=$_POST['date'];
        $age=$_POST['age'];
        $sex=$_POST['sex'];
        $height=$_POST['height'];
   $height1=$_POST['height1'];
        $weight=$_POST['weight'];
        $temp=$_POST['temp'];
        $bp=$_POST['bp'];
        $pulse=$_POST['pulse'];
        $appearance=$_POST['appearance'];
        $weight1=$_POST['weight1'];
        $gait=$_POST['gait'];
        $head=$_POST['head'];
        $path=$_POST['path'];
        $posture=$_POST['posture'];
        $romber=$_POST['romber'];
        $exam=$_POST['exam'];
        $abnormal=$_POST['abnormal'];
        $headtiltright=$_POST['headtiltright'];
        $headtiltleft=$_POST['headtiltleft'];
        $headtiltnormal=$_POST['headtiltnormal'];
        $rotationright=$_POST['rotationright'];
        $rotationleft=$_POST['rotationleft'];
        $rotationnormal=$_POST['rotationnormal'];
        $tmjright=$_POST['tmjright'];
        $tmjleft=$_POST['tmjleft'];
        $tmjnormal=$_POST['tmjnormal'];
        $highright=$_POST['highright'];
        $highleft=$_POST['highleft'];
        $highnormal=$_POST['highnormal'];
        $lordhyper=$_POST['lordhyper'];
        $lordhypo=$_POST['lordhypo'];
        $lordnormal=$_POST['lordnormal'];

        $lymphedema=$_POST['lymphedema'];
        $lymphnormal=$_POST['lymphnormal'];
        $paraspain=$_POST['paraspain'];
        $parasspasm=$_POST['parasspasm'];
        $parasedema=$_POST['parasedema'];
        $parastriggerpoint=$_POST['parastriggerpoint'];
        $trapeziusrl=$_POST['trapeziusrl'];
        $trapeziusrl1=$_POST['trapeziusrl1'];
   $scm=$_POST['scm'];
      $scm1=$_POST['scm1'];

        $vertebraefix=$_POST['vertebraefix'];
        $vertebraenofix=$_POST['vertebraenofix'];
        $flexpain=$_POST['flexpain'];
        $flexspasm=$_POST['flexspasm'];
        $flexstiff=$_POST['flexstiff'];
        $extpain=$_POST['extpain'];
        $extspasm=$_POST['extspasm'];
        $extstiff=$_POST['extstiff'];
        $rlfpain=$_POST['rlfpain'];
        $rlfspasm=$_POST['rlfspasm'];
        $rlfstiff=$_POST['rlfstiff'];
        $llfpain=$_POST['llfpain'];
        $llfspasm=$_POST['llfspasm'];
        $llfstiff=$_POST['llfstiff'];
        $rrpain=$_POST['rrpain'];
        $rrspasm=$_POST['rrspasm'];
        $rrstiff=$_POST['rrstiff'];
        $lrpain=$_POST['lrpain'];
        $lrspasm=$_POST['lrspasm'];
        $lrstiff=$_POST['lrstiff'];

        $c5=$_POST['c5'];
        $c5right=$_POST['c5right'];
        $c5left=$_POST['c5left'];
        $c6=$_POST['c6'];
        $c6right=$_POST['c6right'];

        $c6left=$_POST['c6left'];
        $c7=$_POST['c7'];
        $c7right=$_POST['c7right'];
        $c7left=$_POST['c7left'];
        $c8=$_POST['c8'];
        $c8right=$_POST['c8right'];
        $c8left=$_POST['c8left'];
        $t1=$_POST['t1'];
        $t1right=$_POST['t1right'];
        $t1left=$_POST['t1left'];
        $other=$_POST['other'];
        $otherright=$_POST['otherright'];
        $otherleft=$_POST['otherleft'];
        $deltoidright=$_POST['deltoidright'];
        $deltoidleft=$_POST['deltoidleft'];
        $wristright=$_POST['wristright'];
        $wristleft=$_POST['wristleft'];
        $wristflexright=$_POST['wristflexright'];
        $wristflexleft=$_POST['wristflexleft'];
        $fingerflexright=$_POST['fingerflexright'];
        $fingerflexleft=$_POST['fingerflexleft'];
        $fingeraddright=$_POST['fingeraddright'];
        $fingeraddleft=$_POST['fingeraddleft'];
        $bicepright=$_POST['bicepright'];
        $bicepleft=$_POST['bicepleft'];
        $bracioradright=$_POST['bracioradright'];
        $bracioradleft=$_POST['bracioradleft'];
        $tricepright=$_POST['tricepright'];
        $tricepleft=$_POST['tricepleft'];
  $presentvisual=$_POST['presentvisual'];
        $presentrl=$_POST['presentrl'];

        $highshoulderright=$_POST['highshoulderright'];
        $highshoulderleft=$_POST['highshoulderleft'];
        $highshouldernormal=$_POST['highshouldernormal'];
        $curvatureright=$_POST['curvatureright'];
        $curvatureleft=$_POST['curvatureleft'];
        $curvaturenormal=$_POST['curvaturenormal'];
        $wingingright=$_POST['wingingright'];
        $wingingleft=$_POST['wingingleft'];
        $wingingnormal=$_POST['wingingnormal'];
        $ribhumpright=$_POST['ribhumpright'];
        $ribhumpleft=$_POST['ribhumpleft'];
        $ribhumpnormal=$_POST['ribhumpnormal'];
        $chestmeasurein=$_POST['chestmeasurein'];

        $kyphosishyper=$_POST['kyphosishyper'];
        $kyphosishypo=$_POST['kyphosishypo'];
        $kyphosisnormal=$_POST['kyphosisnormal'];
        $parapain=$_POST['parapain'];
        $paraspasm=$_POST['paraspasm'];
        $paraedema=$_POST['paraedema'];
        $paratriggerpoint=$_POST['paratriggerpoint'];
        $ribspost=$_POST['ribspost'];
        $ribsnor=$_POST['ribsnor'];
        $vertefix=$_POST['vertefix'];
        $vertenofix=$_POST['vertenofix'];

        $thoracicpain=$_POST['thoracicpain'];
        $thoracicspasm=$_POST['thoracicspasm'];
        $thoracicstiff=$_POST['thoracicstiff'];

        $thoextpain=$_POST['thoextpain'];
        $thoextspasm=$_POST['thoextspasm'];
        $thoextstiff=$_POST['thoextstiff'];

        $thorlfpain=$_POST['thorlfpain'];
        $thorlfspasm=$_POST['thorlfspasm'];
        $thorlfstiff=$_POST['thorlfstiff'];

        $thollfpain=$_POST['thollfpain'];
        $thollfspasm=$_POST['thollfspasm'];
        $thollfstiff=$_POST['thollfstiff'];

        $thorrpain=$_POST['thorrpain'];
        $thorrspasm=$_POST['thorrspasm'];
        $thorrstiff=$_POST['thorrstiff'];

        $tholrpain=$_POST['tholrpain'];

        $tholrspasm=$_POST['tholrspasm'];
        $tholrstiff=$_POST['tholrstiff'];
        $thot1=$_POST['thot1'];
        $thot1right=$_POST['thot1right'];
        $thot1left=$_POST['thot1left'];
        $thot4=$_POST['thot4'];
        $thot4right=$_POST['thot4right'];
        $thot4left=$_POST['thot4left'];
        $thot10=$_POST['thot10'];
        $thot10right=$_POST['thot10right'];
        $thot10left=$_POST['thot10left'];
        $thoother=$_POST['thoother'];
        $thootherright=$_POST['thootherright'];
        $thootherleft=$_POST['thootherleft'];
        $myotomes=$_POST['myotomes'];
        $positiveruq=$_POST['positiveruq'];
        $positiveluq=$_POST['positiveluq'];
        $positiverlq=$_POST['positiverlq'];
        $positivellq=$_POST['positivellq'];

        $negativeruq=$_POST['negativeruq'];
        $negativeluq=addslashes($_POST['negativeluq']);
        $negativerlq=$_POST['negativerlq'];
        $negativellq=$_POST['negativellq'];
        $patientsmoker=$_POST['patientsmoker'];

        $highcrestright=$_POST['highcrestright'];
        $highcrestleft=$_POST['highcrestleft'];
        $highcrestnormal=$_POST['highcrestnormal'];
        $highpsisright=$_POST['highpsisright'];
        $highpsisleft=$_POST['highpsisleft'];
        $highpsisnormal=$_POST['highpsisnormal'];
        $curveright=$_POST['curveright'];
        $curveleft=$_POST['curveleft'];
        $curvenormal=$_POST['curvenormal'];
        $lordosishyper=$_POST['lordosishyper'];
        $lordosishypo=$_POST['lordosishypo'];
        $lordosisnormal=$_POST['lordosisnormal'];
        $paraspinalpain=$_POST['paraspinalpain'];
        $paraspinalspasm=$_POST['paraspinalspasm'];
        $paraspinaledema=$_POST['paraspinaledema'];
        $paraspinaltp=$_POST['paraspinaltp'];
        $quadrl=$_POST['quadrl'];
        $quadrl1=$_POST['quadrl1'];

        $hamstringrl=$_POST['hamstringrl'];
        $hamstringrl1=$_POST['hamstringrl1'];
        $verfix=$_POST['verfix'];
        $vernofix=$_POST['vernofix'];
        $abdomentender=$_POST['abdomentender'];
        $abdomenpulse=$_POST['abdomenpulse'];
        $abdomenascites=$_POST['abdomenascites'];

        $lumflexpain=$_POST['lumflexpain'];
        $lumflexspasm=$_POST['lumflexspasm'];
        $lumflexstiff=$_POST['lumflexstiff'];

        $lumextpain=$_POST['lumextpain'];
        $lumextspasm=$_POST['lumextspasm'];
        $lumextstiff=$_POST['lumextstiff'];

        $lumrlfpain=$_POST['lumrlfpain'];
        $lumrlfspasm=$_POST['lumrlfspasm'];
        $lumrlfstiff=$_POST['lumrlfstiff'];

        $lumllfpain=$_POST['lumllfpain'];
        $lumllfspasm=$_POST['lumllfspasm'];
        $lumllfstiff=$_POST['lumllfstiff'];

        $lumrrpain=$_POST['lumrrpain'];
        $lumrrspasm=$_POST['lumrrspasm'];
        $lumrrstiff=$_POST['lumrrstiff'];

        $lumlrpain=$_POST['lumlrpain'];
        $lumlrspasm=$_POST['lumlrspasm'];
        $lumlrstiff=$_POST['lumlrstiff'];
          $lu1=$_POST['lu1'];
        $lu1right=$_POST['lu1right'];
        $lu1left=$_POST['lu1left'];
        $lu2=$_POST['lu2'];
        $lu2right=$_POST['lu2right'];
        $lu2left=$_POST['lu2left'];
        $lu3=$_POST['lu3'];
        $lu3right=$_POST['lu3right'];
        $lu3left=$_POST['lu3left'];
        $lu4=$_POST['lu4'];
        $lu4right=$_POST['lu4right'];
        $lu4left=$_POST['lu4left'];
        $lu5=$_POST['lu5'];
        $lu5right=$_POST['lu5right'];
        $lu5left=$_POST['lu5left'];
        $lu6=$_POST['lu6'];
        $lu6right=$_POST['lu6right'];
        $lu6left=$_POST['lu6left'];
        $lu7=$_POST['lu7'];
    $lu7right=$_POST['lu7right'];
        $lu7left=$_POST['lu7left'];
        $hipflexright=$_POST['hipflexright'];
        $hipflexleft=$_POST['hipflexleft'];
        $legextright=$_POST['legextright'];
        $legextleft=$_POST['legextleft'];
        $dorsiflexright=$_POST['dorsiflexright'];
        $dorsiflexleft=$_POST['dorsiflexleft'];
        $digitflexright=$_POST['digitflexright'];
        $digitflexleft=$_POST['digitflexleft'];
        $heelright=$_POST['heelright'];
        $heelleft=$_POST['heelleft'];
        $toeright=$_POST['toeright'];
        $toeleft=$_POST['toeleft'];
        $patellarright=$_POST['patellarright'];
        $patellarleft=$_POST['patellarleft'];
        $achillesright=$_POST['achillesright'];
        $achillesleft=$_POST['achillesleft'];
        $babinskiright=$_POST['babinskiright'];
        $babinskileft=$_POST['babinskileft'];




        /*
        $patient_id="silvi";
         $sign="sign";
         $name="name";
         $id="id";
         $date="date";
         $age="age";
         $sex="sex";
         $height="height";
        $height1="height1";
         $weight="weight";
         $temp="temp";
         $bp="bp";
         $pulse="pulse";
         $appearance="appearance";
         $weight1="weight1";
         $gait="gait";
         $head="head";
         $path="path";
         $posture="posture";
         $romber="romber";
         $exam="exam";
         $abnormal="abnormal";
         $headtiltright="headtiltright";
         $headtiltleft="headtiltleft";
         $headtiltnormal="headtiltnormal";
         $rotationright="rotationright";
         $rotationleft="rotationleft";
         $rotationnormal="rotationnormal";
         $tmjright="tmjright";
         $tmjleft="tmjleft";

       $tmjnormal="tmjnormal";
       $highright="highright";
       $highleft="highleft";
       $highnormal="highnormal";
       $lordhyper="lordhyper";
       $lordhypo="lordhypo";
       $lordnormal="lordnormal";
       $lymphedema="lymphedema";
       $lymphnormal="lymphnormal";
       $paraspain="paraspain";
       $parasspasm="parasspasm";
       $parasedema="parasedema";
       $parastriggerpoint="parastriggerpoint";
       $trapeziusrl="trapeziusrl";
        $trapeziusrl1="trapeziusrl1";
        $scm="scm";
        $scm1="scm1";
       $vertebraefix="vertebraefix";
       $vertebraenofix="vertebraenofix";
       $flexpain="flexpain";
       $flexspasm="flexspasm";
       $flexstiff="flexstiff";

       $extpain="extpain";
       $extspasm="extspasm";
       $extstiff="extstiff";

       $rlfpain="rlfpain";
       $rlfspasm="rlfspasm";
       $rlfstiff="rlfstiff";

       $llfpain="llfpain";
       $llfspasm="llfspasm";
       $llfstiff="llfstiff";

       $rrpain="rrpain";
       $rrspasm="rrspasm";
       $rrstiff="rrstiff";

       $lrpain="lrpain";
       $lrspasm="lrspasm";
       $lrstiff="lrstiff";
       $c5="c5";
       $c5right="c5right";
       $c5left="c5left";
       $c6="c6";
       $c6right="c6right";
        $c6left="c6left";
         $c7="c7";
         $c7right="c7right";
         $c7left="c7left";
         $c8="c8";
         $c8right="c8right";
         $c8left="c8left";
         $t1="t1";
         $t1right="t1right";
         $t1left="t1left";
         $other="other";
         $otherright="otherright";
         $otherleft="otherleft";
         $deltoidright="deltoidright";
         $deltoidleft="deltoidleft";
         $wristright="wristright";
         $wristleft="wristleft";
         $wristflexright="wristflexright";
         $wristflexleft="wristflexleft";
         $fingerflexright="fingerflexright";
         $fingerflexleft="fingerflexleft";
         $fingeraddright="fingeraddright";
         $fingeraddleft="fingeraddleft";

         $bicepright="bicepright";
         $bicepleft="bicepleft";
         $bracioradright="bracioradright";

       $bracioradleft="bracioradleft";
       $tricepright="tricepright";
       $tricepleft="tricepleft";
        $presentvisual="presentvisual";
        $presentrl="presentrl";
       $highshoulderright="highshoulderright";
       $highshoulderleft="highshoulderleft";
       $highshouldernormal="highshouldernormal";
       $curvatureright="curvatureright";
       $curvatureleft="curvatureleft";
       $curvaturenormal="curvaturenormal";
       $wingingright="wingingright";
       $wingingleft="wingingleft";
       $wingingnormal="wingingnormal";
       $ribhumpright="ribhumpright";
       $ribhumpleft="ribhumpleft";
       $ribhumpnormal="ribhumpnormal";
       $chestmeasurein="chestmeasurein";

       $kyphosishyper="kyphosishyper";
       $kyphosishypo="kyphosishypo";
       $kyphosisnormal="kyphosisnormal";
       $parapain="parapain";
       $paraspasm="paraspasm";
       $paraedema="paraedema";
       $paratriggerpoint="paratriggerpoint";
       $ribspost="ribspost";
       $ribsnor="ribsnor";
       $vertefix="vertefix";
       $vertenofix="vertenofix";

       $thoracicpain="thoracicpain";
       $thoracicspasm="thoracicspasm";
       $thoracicstiff="thoracicstiff";

       $thoextpain="thoextpain";
       $thoextspasm="thoextspasm";
       $thoextstiff="thoextstiff";

       $thorlfpain="thorlfpain";
       $thorlfspasm="thorlfspasm";
       $thorlfstiff="thorlfstiff";

       $thollfpain="thollfpain";
       $thollfspasm="thollfspasm";
       $thollfstiff="thollfstiff";

       $thorrpain="thorrpain";
       $thorrspasm="thorrspasm";
        $thorrstiff="thorrstiff";

           $tholrpain="tholrpain";
           $tholrspasm="tholrspasm";
           $tholrstiff="tholrstiff";
           $thot1="thot1";
           $thot1right="thot1right";
           $thot1left="thot1left";
           $thot4="thot4";
           $thot4right="thot4right";
           $thot4left="thot4left";
           $thot10="thot10";
           $thot10right="thot10right";
           $thot10left="thot10left";
           $thoother="thoother";
           $thootherright="thootherright";
           $thootherleft="thootherleft";
           $myotomes="myotomes";
           $positiveruq="positiveruq";
           $positiveluq="positiveluq";
           $positiverlq="positiverlq";
           $positivellq="positivellq";

        $negativeruq="negativeruq";
        $negativeluq="negativeluq";
        $negativerlq="negativerlq";
        $negativellq="negativellq";
        $patientsmoker="patientsmoker";
           $highcrestright="highcrestright";
           $highcrestleft="highcrestleft";
           $highcrestnormal="highcrestnormal";
           $highpsisright="highpsisright";
           $highpsisleft="highpsisleft";
           $highpsisnormal="highpsisnormal";

           $curveright="curveright";
           $curveleft="curveleft";
           $curvenormal="curvenormal";
           $lordosishyper="lordosishyper";
           $lordosishypo="lordosishypo";
           $lordosisnormal="lordosisnormal";
           $paraspinalpain="paraspinalpain";
           $paraspinalspasm="paraspinalspasm";
           $paraspinaledema="injury_text";
           $paraspinalpain_explain="paraspinalpain_explain";
           $during_after_crash="during_after_crash";
           $paraspinaltp="paraspinaltp";
           $quadrl="quadrl";

           $quadrl1="quadrl1";
           $hamstringrl="hamstringrl";
           $hamstringrl1="hamstringrl1";


           $verfix="verfix";
           $vernofix="vernofix";
           $abdomentender="abdomentender";
           $abdomenpulse="abdomenpulse";
           $abdomenascites="abdomenascites";

           $lumflexpain="lumflexpain";
           $lumflexspasm="lumflexspasm";
           $lumflexstiff="lumflexstiff";

           $lumextpain="lumextpain";
           $lumextspasm="lumextspasm";
           $lumextstiff="lumextstiff";

           $lumrlfpain="lumrlfpain";
           $lumrlfspasm="lumrlfspasm";
           $lumrlfstiff="lumrlfstiff";

           $lumllfpain="lumllfpain";
           $lumllfspasm="lumllfspasm";
           $lumllfstiff="lumllfstiff";

           $lumrrpain="lumrrpain";
           $lumrrspasm="lumrrspasm";
           $lumrrstiff="lumrrstiff";

           $lumlrpain="lumlrpain";
           $lumlrspasm="lumlrspasm";
           $lumlrstiff="lumlrstiff";
        $lu1="1";
        $lu1right="2";
        $lu1left="3";
        $lu2="4";
        $lu2right="5";
        $lu2left="6";
        $lu3 ="7";
        $lu3right="8";
        $lu3left="9";
        $lu4="10";
        $lu4right="11";
        $lu4left="40/40/2014";
        $lu5="12";
        $lu5right="13";
        $lu5left="14";
        $lu6="software";
        $lu6right="develoepr";
        $lu6left="coding";
        $lu7="ccc";
        $lu7right="good";
        $lu7left="nice";
           $hipflexright="hipflexright";
           $hipflexleft="hipflexleft";
        $legextright="1";
          $legextleft="2";
          $dorsiflexright="3";
          $dorsiflexleft="4";
          $digitflexright="5";
          $digitflexleft="6";
          $heelright ="7";
          $heelleft="8";
          $toeright="9";
          $toeleft="10";
          $patellarright="11";
          $patellarleft="40/40/2014";
          $achillesright="12";
          $achillesleft="13";
          $babinskiright="14";
          $babinskileft="software";


*/

        $sql3="insert into tbl_physicalexam(physical_id,patient_id,sign,name,id,date,age,sex,height,height1,weight,temp,bp,pulse,appearance,weight1,gait,head,path,posture,romber,exam,abnormal,headtiltright,headtiltleft,headtiltnormal,rotationright,rotationleft,rotationnormal,tmjright,tmjleft,tmjnormal,highright,highleft,highnormal,lordhyper,lordhypo,lordnormal,lymphedema,lymphnormal,paraspain,parasspasm,parasedema,parastriggerpoint,trapeziusrl,trapeziusrl1,scm,scm1,vertebraefix,vertebraenofix,flexpain,flexspasm,flexstiff,extpain,extspasm,extstiff,rlfpain,rlfspasm,rlfstiff,llfpain,llfspasm,llfstiff,rrpain,rrspasm,rrstiff,lrpain,lrspasm,lrstiff,c5,c5right,c5left,c6,c6right,c6left,c7,c7right,c7left,c8,c8right,c8left,t1,t1right,t1left,other,otherright,otherleft,deltoidright,deltoidleft,wristright,wristleft,wristflexright,wristflexleft,fingerflexright,fingerflexleft,fingeraddright,fingeraddleft,bicepright,bicepleft,bracioradright,bracioradleft,tricepright,tricepleft,presentvisual,presentrl,highshoulderright,highshoulderleft,highshouldernormal,curvatureright,curvatureleft,curvaturenormal,wingingright,wingingleft,wingingnormal,ribhumpright,ribhumpleft,ribhumpnormal,chestmeasurein,kyphosishyper,kyphosishypo,kyphosisnormal,parapain,paraspasm,paraedema,paratriggerpoint,ribspost,ribsnor,vertefix,vertenofix,thoracicpain,thoracicspasm,thoracicstiff,thoextpain,thoextspasm,thoextstiff,thorlfpain,thorlfspasm,thorlfstiff,thollfpain,thollfspasm,thollfstiff,thorrpain,thorrspasm,thorrstiff,tholrpain,tholrspasm,tholrstiff,thot1,thot1right,thot1left,thot4,thot4right,thot4left,thot10,thot10right,thot10left,thoother,thootherright,thootherleft,myotomes,positiveruq,positiveluq,positiverlq,positivellq,negativeruq,negativeluq,negativerlq,negativellq,patientsmoker,highcrestright,highcrestleft,highcrestnormal,highpsisright,highpsisleft,highpsisnormal,curveright,curveleft,curvenormal,lordosishyper,lordosishypo,lordosisnormal,paraspinalpain,paraspinalspasm,paraspinaledema,paraspinaltp,quadrl,quadrl1,hamstringrl,hamstringrl1,verfix,vernofix,abdomentender,abdomenpulse,abdomenascites,lumflexpain,lumflexspasm,lumflexstiff,lumextpain,lumextspasm,lumextstiff,lumrlfpain,lumrlfspasm,lumrlfstiff,lumllfpain,lumllfspasm,lumllfstiff,lumrrpain,lumrrspasm,lumrrstiff,lumlrpain,lumlrspasm,lumlrstiff,lu1,lu1right,lu1left,lu2,lu2right,lu2left,lu3,lu3right,lu3left,lu4,lu4right,lu4left,lu5,lu5right,lu5left,lu6,lu6right,lu6left,lu7,lu7right,lu7left,hipflexright,hipflexleft,legextright,legextleft,dorsiflexright,dorsiflexleft,digitflexright,digitflexleft,heelright,heelleft,toeright,toeleft,patellarright,patellarleft,achillesright,achillesleft,babinskiright,babinskileft) values ('', '".$patient_id."', '".$sign."','".$name."', '".$id."','".$date."', '".$age."', '".$sex."', '".$height."','".$height1."', '".$weight."','".$temp."', '".$bp."','".$pulse."', '".$appearance."','".$weight1."', '".$gait."', '".$head."', '".$path."','".$posture."', '".$romber."', '".$exam."', '".$abnormal."', '".$headtiltright."', '".$headtiltleft."', '".$headtiltnormal."','".$rotationright."','".$rotationleft."', '".$rotationnormal."','".$tmjright."', '".$tmjleft."' ,'".$tmjnormal."','".$highright."','".$highleft."', '".$highnormal."', '".$lordhyper."','".$lordhypo."','".$lordnormal."', '".$lymphedema."','".$lymphnormal."','".$paraspain."','".$parasspasm."','".$parasedema."','".$parastriggerpoint."','".$trapeziusrl."','".$trapeziusrl1."','".$scm."','".$scm1."','".$vertebraefix."', '".$vertebraenofix."','".$flexpain."','".$flexspasm."','".$flexstiff."','".$extpain."','".$extspasm."', '".$extstiff."', '".$rlfpain."','".$rlfspasm."','".$rlfstiff."','".$llfpain."','".$llfspasm."','".$llfstiff."','".$rrpain."','".$rrspasm."','".$rrstiff."','".$lrpain."','".$lrspasm."','".$lrstiff."','".$c5."','".$c5right."','".$c5left."','".$c6."','".$c6right."', '".$c6left."','".$c7."', '".$c7right."','".$c7left."', '".$c8."', '".$c8right."', '".$c8left."', '".$t1."','".$t1right."', '".$t1left."','".$other."', '".$otherright."','".$otherleft."', '".$deltoidright."', '".$deltoidleft."', '".$wristright."','".$wristleft."', '".$wristflexright."', '".$wristflexleft."', '".$fingerflexright."', '".$fingerflexleft."', '".$fingeraddright."', '".$fingeraddleft."', '".$bicepright."','".$bicepleft."', '".$bracioradright."' ,'".$bracioradleft."','".$tricepright."','".$tricepleft."','".$presentvisual."','".$presentrl."', '".$highshoulderright."', '".$highshoulderleft."','".$highshouldernormal."','".$curvatureright."', '".$curvatureleft."','".$curvaturenormal."','".$wingingright."','".$wingingleft."','".$wingingnormal."','".$ribhumpright."','".$ribhumpleft."','".$ribhumpnormal."','".$chestmeasurein."', '".$kyphosishyper."','".$kyphosishypo."','".$kyphosisnormal."','".$parapain."','".$paraspasm."','".$paraedema."','".$paratriggerpoint."','".$ribspost."', '".$ribsnor."', '".$vertefix."', '".$vertenofix."','".$thoracicpain."','".$thoracicspasm."','".$thoracicstiff."','".$thoextpain."','".$thoextspasm."','".$thoextstiff."','".$thorlfpain."','".$thorlfspasm."','".$thorlfstiff."','".$thollfpain."','".$thollfspasm."','".$thollfstiff."','".$thorrpain."','".$thorrspasm."', '".$thorrstiff."', '".$tholrpain."','".$tholrspasm."', '".$tholrstiff."', '".$thot1."', '".$thot1right."', '".$thot1left."','".$thot4."', '".$thot4right."','".$thot4left."', '".$thot10."','".$thot10right."', '".$thot10left."', '".$thoother."', '".$thootherright."','".$thootherleft."', '".$myotomes."', '".$positiveruq."', '".$positiveluq."', '".$positiverlq."', '".$positivellq."','".$negativeruq."', '".$negativeluq."','".$negativerlq."', '".$negativellq."', '".$patientsmoker."', '".$highcrestright."','".$highcrestleft."','".$highcrestnormal."', '".$highpsisright."','".$highpsisleft."', '".$highpsisnormal."' ,'".$curveright."','".$curveleft."','".$curvenormal."', '".$lordosishyper."', '".$lordosishypo."','".$lordosisnormal."','".$paraspinalpain."', '".$paraspinalspasm."','".$paraspinaledema."','".$paraspinaltp."','".$quadrl."','".$quadrl1."','".$hamstringrl."','".$hamstringrl1."','".$verfix."', '".$vernofix."','".$abdomentender."','".$abdomenpulse."','".$abdomenascites."','".$lumflexpain."','".$lumflexspasm."','".$lumflexstiff."',  '".$lumextpain."', '".$lumextspasm."','".$lumextstiff."','".$lumrlfpain."','".$lumrlfspasm."','".$lumrlfstiff."','".$lumllfpain."','".$lumllfspasm."','".$lumllfstiff."','".$lumrrpain."','".$lumrrspasm."','".$lumrrstiff."','".$lumlrpain."','".$lumlrspasm."','".$lumlrstiff."','".$lu1."','".$lu1right."','".$lu1left."','".$lu2."','".$lu2right."','".$lu2left."','".$lu3."','".$lu3right."','".$lu3left."','".$lu4."','".$lu4right."','".$lu4left."','".$lu5."','".$lu5right."','".$lu5left."','".$lu6."','".$lu6right."','".$lu6left."','".$lu7."','".$lu7right."','".$lu7left."','".$hipflexright."','".$hipflexleft."','".$legextright."','".$legextleft."','".$dorsiflexright."','".$dorsiflexleft."','".$digitflexright."','".$digitflexleft."','".$heelright."','".$heelleft."','".$toeright."','".$toeleft."','".$patellarright."','".$patellarleft."','".$achillesright."','".$achillesleft."','".$babinskiright."','".$babinskileft."')";



    //echo $sql3;

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'physicalexamdelete':
    {
        $patient_id= $_POST['username'];
       // $patient_id= "silvi";
        $sql4 ="delete from tbl_physicalexam where patient_id='".$patient_id."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "physicalexam Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>