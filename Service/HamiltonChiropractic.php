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
    case 'hamiltonchiropracticselect':
    {

       $patient_id = $_POST['pateint_id'];
       // $patient_id="sedhu";
        //$pname="proper";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_hamiltonchiropractic WHERE patient_id='$patient_id'";

        echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "Yes", "hamiltonchiropractic List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);

                    $json 		.= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "Yes","patient_id":"'.$row->patient_id.'","lumbopelvic":"'.$row->lumbopelvic.'","lumboright":"'.$row->lumboright.'","lumboleft":"'.$row->lumboleft.'","cervical":"'.$row->cervical.'","cervicalright":"'.$row->cervicalright.'","cervicalleft":"'.$row->cervicalleft.'","thoracic":"'.$row->thoracic.'","thoracicright":"'.$row->thoracicright.'","thoracicleft":"'.$row->thoracicleft.'","hacheck":"'.$row->hacheck.'","ha":"'.$row->ha.'","haa":"'.$row->haa.'","neckcheck":"'.$row->neckcheck.'","neck":"'.$row->neck.'","necka":"'.$row->necka.'","mbcheck":"'.$row->mbcheck.'","mb":"'.$row->mb.'","mba":"'.$row->mba.'","ribscheck":"'.$row->ribscheck.'","ribs":"'.$row->ribs.'","ribsa":"'.$row->ribsa.'","shouldercheck":"'.$row->shouldercheck.'","shoulder":"'.$row->shoulder.'","shouldera":"'.$row->shouldera.'","elbowcheck":"'.$row->elbowcheck.'","elbow":"'.$row->elbow.'","elbowa":"'.$row->elbowa.'","handcheck":"'.$row->handcheck.'","hand":"'.$row->hand.'","handa":"'.$row->handa.'","wristcheck":"'.$row->wristcheck.'","wrist":"'.$row->wrist.'","wrista":"'.$row->wrista.'","lbpcheck":"'.$row->lbpcheck.'","lbp":"'.$row->lbp.'","lbpa":"'.$row->lbpa.'","hipcheck":"'.$row->hipcheck.'","hip":"'.$row->hip.'","hipa":"'.$row->hipa.'","legcheck":"'.$row->legcheck.'","leg":"'.$row->leg.'","lega":"'.$row->lega.'","kneecheck":"'.$row->kneecheck.'","knee":"'.$row->knee.'","kneea":"'.$row->kneea.'","footcheck":"'.$row->footcheck.'","foot":"'.$row->foot.'","foota":"'.$row->foota.'","anklecheck":"'.$row->anklecheck.'","ankle":"'.$row->ankle.'","anklea":"'.$row->anklea.'","suddenly":"'.$row->suddenly.'","gradually":"'.$row->gradually.'","hours":"'.$row->hours.'","days":"'.$row->days.'","date":"'.$row->date.'","reason":"'.$row->reason.'","acute":"'.$row->acute.'","subacute":"'.$row->subacute.'","chronic":"'.$row->chronic.'","lyingdown":"'.$row->lyingdown.'","sitting":"'.$row->sitting.'","standing":"'.$row->standing.'","bending":"'.$row->bending.'","rest":"'.$row->rest.'","otherb":"'.$row->otherb.'","othere":"'.$row->othere.'","ice":"'.$row->ice.'","heat":"'.$row->heat.'","massage":"'.$row->massage.'","aspirin":"'.$row->aspirin.'","otherdone":"'.$row->otherdone.'","otherit":"'.$row->otherit.'","bendingworse":"'.$row->bendingworse.'","twisting":"'.$row->twisting.'","lifting":"'.$row->lifting.'","walking":"'.$row->walking.'","activity":"'.$row->activity.'","otherworse":"'.$row->otherworse.'","otherfeel":"'.$row->otherfeel.'","sharp":"'.$row->sharp.'","severe":"'.$row->severe.'","dull":"'.$row->dull.'","burning":"'.$row->burning.'","nagging":"'.$row->nagging.'","throbbing":"'.$row->throbbing.'","numb":"'.$row->numb.'","tingling":"'.$row->tingling.'","stiff":"'.$row->stiff.'","stabbing":"'.$row->stabbing.'","cramping":"'.$row->cramping.'","otherdescribe":"'.$row->otherdescribe.'","otherpain":"'.$row->otherpain.'","constant":"'.$row->constant.'","intermittent":"'.$row->intermittent.'","local":"'.$row->local.'","diffuse":"'.$row->diffuse.'","radiates":"'.$row->radiates.'","otherradiates":"'.$row->otherradiates.'","mild":"'.$row->mild.'","moderate":"'.$row->moderate.'","severepain":"'.$row->severepain.'","crippling":"'.$row->crippling.'","am":"'.$row->am.'","pm":"'.$row->pm.'","othertime":"'.$row->othertime.'","otherdn":"'.$row->otherdn.'","better":"'.$row->better.'","same":"'.$row->same.'","worse":"'.$row->worse.'","yes":"'.$row->yes.'","no":"'.$row->no.'","day":"'.$row->day.'","work":"'.$row->work.'","sleep":"'.$row->sleep.'","otherdaily":"'.$row->otherdaily.'","othercondition":"'.$row->othercondition.'","sameass":"'.$row->sameass.'","improved":"'.$row->improved.'","worseass":"'.$row->worseass.'","plateau":"'.$row->plateau.'","preinjury":"'.$row->preinjury.'","slight":"'.$row->slight.'","moderatly":"'.$row->moderatly.'","great":"'.$row->great.'","chiropractic":"'.$row->chiropractic.'","ems":"'.$row->ems.'","iceplan":"'.$row->iceplan.'","heatplan":"'.$row->heatplan.'","nimmo":"'.$row->nimmo.'","ultrasound":"'.$row->ultrasound.'","manualtraction":"'.$row->manualtraction.'","massageplan":"'.$row->massageplan.'","neuromuscular":"'.$row->neuromuscular.'","stretching":"'.$row->stretching.'","strengthening":"'.$row->strengthening.'","remobilization":"'.$row->remobilization.'","improvesubluxations":"'.$row->improvesubluxations.'","rehab":"'.$row->rehab.'","modificat":"'.$row->modificat.'","care":"'.$row->care.'","refer":"'.$row->refer.'","decreasepain":"'.$row->decreasepain.'","decreasespam":"'.$row->decreasespam.'","increaserom":"'.$row->increaserom.'","improveadl":"'.$row->improveadl.'","fullactivity":"'.$row->fullactivity.'","returntowork":"'.$row->returntowork.'","renewsports":"'.$row->renewsports.'","jacksonsr":"'.$row->jacksonsr.'","jacksonsl":"'.$row->jacksonsl.'","jacksonslo":"'.$row->jacksonslo.'","foramin_compr":"'.$row->foramin_compr.'","foramin_compl":"'.$row->foramin_compl.'","foramin_complo":"'.$row->foramin_complo.'","shoulder_deprr":"'.$row->shoulder_deprr.'","shoulder_deprl":"'.$row->shoulder_deprl.'","shoulder_deprlo":"'.$row->shoulder_deprlo.'","georgesr":"'.$row->georgesr.'","georgesl":"'.$row->georgesl.'","georgeslo":"'.$row->georgeslo.'","odonor":"'.$row->odonor.'","odonol":"'.$row->odonol.'","bakody_signr":"'.$row->bakody_signr.'","bakody_signl":"'.$row->bakody_signl.'","bakody_signlo":"'.$row->bakody_signlo.'","distraction_testr":"'.$row->distraction_testr.'","distraction_testl":"'.$row->distraction_testl.'","valsalvar":"'.$row->valsalvar.'","valsalval":"'.$row->valsalval.'","valsalvalo":"'.$row->valsalvalo.'","spinal_percuss":"'.$row->spinal_percuss.'","gripdynamomright":"'.$row->gripdynamomright.'","gripdynamomleft":"'.$row->gripdynamomleft.'","adsonsr":"'.$row->adsonsr.'","adsonsl":"'.$row->adsonsl.'","adsonslo":"'.$row->adsonslo.'","rustsignr":"'.$row->rustsignr.'","rustsignl":"'.$row->rustsignl.'","rustsignlo":"'.$row->rustsignlo.'","spinal_percusst":"'.$row->spinal_percusst.'","adams_testr":"'.$row->adams_testr.'","adams_testl":"'.$row->adams_testl.'","sheppal_signr":"'.$row->sheppal_signr.'","sheppal_signl":"'.$row->sheppal_signl.'","soto_hallr":"'.$row->soto_hallr.'","soto_halll":"'.$row->soto_halll.'","compression_testr":"'.$row->compression_testr.'","compression_testl":"'.$row->compression_testl.'","compression_testlo":"'.$row->compression_testlo.'","antalgiar":"'.$row->antalgiar.'","antalgial":"'.$row->antalgial.'","spinal_percusslr":"'.$row->spinal_percusslr.'","spinal_percussll":"'.$row->spinal_percussll.'","valsalvalr":"'.$row->valsalvalr.'","valsalvall":"'.$row->valsalvall.'","minors_signr":"'.$row->minors_signr.'","minors_signl":"'.$row->minors_signl.'","braggards_testr":"'.$row->braggards_testr.'","braggards_testl":"'.$row->braggards_testl.'","slrr":"'.$row->slrr.'","slrl":"'.$row->slrl.'","wlrr":"'.$row->wlrr.'","wlrl":"'.$row->wlrl.'","hooversr":"'.$row->hooversr.'","hooversl":"'.$row->hooversl.'","dbl_leg_raiser":"'.$row->dbl_leg_raiser.'","dbl_leg_raisel":"'.$row->dbl_leg_raisel.'","long_leg_testr":"'.$row->long_leg_testr.'","long_leg_testl":"'.$row->long_leg_testl.'","anvil_testr":"'.$row->anvil_testr.'","anvil_testl":"'.$row->anvil_testl.'","thomasr":"'.$row->thomasr.'","thomasl":"'.$row->thomasl.'","milgrams_testr":"'.$row->milgrams_testr.'","milgrams_testl":"'.$row->milgrams_testl.'","obersr":"'.$row->obersr.'","obersl":"'.$row->obersl.'","illiaccompr":"'.$row->illiaccompr.'","illiaccompl":"'.$row->illiaccompl.'","yeomansr":"'.$row->yeomansr.'","yeomansl":"'.$row->yeomansl.'","allis_signr":"'.$row->allis_signr.'","allis_signl":"'.$row->allis_signl.'","dugasr":"'.$row->dugasr.'","dugasl":"'.$row->dugasl.'","supraspinatusr":"'.$row->supraspinatusr.'","supraspinatusl":"'.$row->supraspinatusl.'","codmansr":"'.$row->codmansr.'","codmansl":"'.$row->codmansl.'","speeds_testr":"'.$row->speeds_testr.'","speeds_testl":"'.$row->speeds_testl.'","yergasonsr":"'.$row->yergasonsr.'","yergasonsl":"'.$row->yergasonsl.'","tinelser":"'.$row->tinelser.'","tinelsel":"'.$row->tinelsel.'","lingaminstabr":"'.$row->lingaminstabr.'","lingaminstabl":"'.$row->lingaminstabl.'","golfers_elbowr":"'.$row->golfers_elbowr.'","golfers_elbowl":"'.$row->golfers_elbowl.'","tennis_elbowr":"'.$row->tennis_elbowr.'","tennis_elbowl":"'.$row->tennis_elbowl.'","tinelsr":"'.$row->tinelsr.'","tinelsl":"'.$row->tinelsl.'","phalensr":"'.$row->phalensr.'","phalensl":"'.$row->phalensl.'","finkelsteins_testr":"'.$row->finkelsteins_testr.'","finkelsteins_testl":"'.$row->finkelsteins_testl.'","braceletr":"'.$row->braceletr.'","braceletl":"'.$row->braceletl.'","allensr":"'.$row->allensr.'","allensl":"'.$row->allensl.'","valgus_varusr":"'.$row->valgus_varusr.'","valgus_varusl":"'.$row->valgus_varusl.'","pat_ballr":"'.$row->pat_ballr.'","pat_balll":"'.$row->pat_balll.'","drawerr":"'.$row->drawerr.'","drawerl":"'.$row->drawerl.'","val_varusr":"'.$row->val_varusr.'","val_varusl":"'.$row->val_varusl.'","apleysr":"'.$row->apleysr.'","apleysl":"'.$row->apleysl.'","ankdrawr":"'.$row->ankdrawr.'","ankdrawl":"'.$row->ankdrawl.'","ankthomr":"'.$row->ankthomr.'","ankthoml":"'.$row->ankthoml.'","anktinelr":"'.$row->anktinelr.'","anktinell":"'.$row->anktinell.'","ankstrunkr":"'.$row->ankstrunkr.'","ankstrunkl":"'.$row->ankstrunkl.'","ankhomanr":"'.$row->ankhomanr.'","ankhomanl":"'.$row->ankhomanl.'","ankclaudicr":"'.$row->ankclaudicr.'","ankclaudicl":"'.$row->ankclaudicl.',""message"": "1" } }';



                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }








    case 'hamiltonchiropracticedit':
    {
        $patient_id=$_POST['patient_id'];
        $lumbopelvic=$_POST['lumbopelvic'];
        $lumboright=$_POST['lumboright'];
        $lumboleft=$_POST['lumboleft'];
        $cervical=$_POST['cervical'];

        $cervicalright=$_POST['cervicalright'];
        $cervicalleft=$_POST['cervicalleft'];
        $thoracic=$_POST['thoracic'];
        $thoracicright=$_POST['thoracicright'];

        $thoracicleft=$_POST['thoracicleft'];
        $hacheck=$_POST['hacheck'];
        $ha=$_POST['ha'];
        $haa=$_POST['haa'];
        $neckcheck=$_POST['neckcheck'];
        $neck=$_POST['neck'];

        $necka=$_POST['necka'];
        $mbcheck=$_POST['mbcheck'];
        $mb=$_POST['mb'];
        $mba=$_POST['mba'];
        $ribscheck=$_POST['ribscheck'];
        $ribs=$_POST['ribs'];
        $ribsa=$_POST['ribsa'];

        $shouldercheck=$_POST['shouldercheck'];
        $shoulder=$_POST['shoulder'];
        $shouldera=$_POST['shouldera'];
        $elbowcheck=$_POST['elbowcheck'];
        $elbow=$_POST['elbow'];

        $elbowa=$_POST['elbowa'];
        $handcheck=$_POST['handcheck'];
        $hand=$_POST['hand'];
        $handa=$_POST['handa'];
        $wristcheck=$_POST['wristcheck'];
        $wrist=$_POST['wrist'];

        $wrista=$_POST['wrista'];
        $lbpcheck=$_POST['lbpcheck'];
        $lbp=$_POST['lbp'];
        $lbpa=$_POST['lbpa'];
        $hipcheck=$_POST['hipcheck'];
        $hip=$_POST['hip'];
        $hipa=$_POST['hipa'];

        $legcheck=$_POST['legcheck'];
        $leg=$_POST['leg'];
        $lega=$_POST['lega'];
        $kneecheck=$_POST['kneecheck'];
        $knee=$_POST['knee'];
        $kneea=$_POST['kneea'];

        $footcheck=$_POST['footcheck'];
        $foot=$_POST['foot'];
        $foota=$_POST['foota'];
        $anklecheck=$_POST['anklecheck'];
        $ankle=$_POST['ankle'];

        $anklea=$_POST['anklea'];
        $suddenly=$_POST['suddenly'];
        $gradually=$_POST['gradually'];
        $hours=$_POST['hours'];
        $days=$_POST['days'];
        $date=$_POST['date'];

        $reason=$_POST['reason'];
        $acute=$_POST['acute'];
        $subacute=$_POST['subacute'];
        $chronic=$_POST['chronic'];
        $lyingdown=$_POST['lyingdown'];

        $sitting=$_POST['sitting'];
        $standing=$_POST['standing'];
        $bending=$_POST['bending'];
        $rest=$_POST['rest'];
        $otherb=$_POST['otherb'];
        $othere=$_POST['othere'];

        $ice=$_POST['ice'];
        $heat=$_POST['heat'];
        $massage=$_POST['massage'];
        $aspirin=$_POST['aspirin'];
        $otherdone=$_POST['otherdone'];
        $otherit=$_POST['otherit'];

        $bendingworse=$_POST['bendingworse'];
        $twisting=$_POST['twisting'];
        $lifting=$_POST['lifting'];
        $walking=$_POST['walking'];
        $activity=$_POST['activity'];

        $otherworse=$_POST['otherworse'];
        $otherfeel=$_POST['otherfeel'];
        $sharp=$_POST['sharp'];
        $severe=$_POST['severe'];
        $dull=$_POST['dull'];

        $burning=$_POST['burning'];
        $nagging=$_POST['nagging'];
        $throbbing=$_POST['throbbing'];
        $numb=$_POST['numb'];
        $tingling=$_POST['tingling'];
        $stiff=$_POST['stiff'];

        $stabbing=$_POST['stabbing'];
        $cramping=$_POST['cramping'];
        $otherdescribe=$_POST['otherdescribe'];
        $otherpain=$_POST['otherpain'];
        $constant=$_POST['constant'];

        $intermittent=$_POST['intermittent'];
        $local=$_POST['local'];
        $diffuse=$_POST['diffuse'];
        $radiates=$_POST['radiates'];
        $otherradiates=$_POST['otherradiates'];

        $mild=$_POST['mild'];
        $moderate=$_POST['moderate'];
        $severepain=$_POST['severepain'];
        $crippling=$_POST['crippling'];
        $am=$_POST['am'];
        $pm=$_POST['pm'];

        $othertime=$_POST['othertime'];
        $otherdn=$_POST['otherdn'];
        $better=$_POST['better'];
        $same=$_POST['same'];
        $worse=$_POST['worse'];
        $yes=$_POST['yes'];
        $no=$_POST['no'];

        $day=$_POST['day'];
        $work=$_POST['work'];
        $sleep=$_POST['sleep'];
        $otherdaily=$_POST['otherdaily'];
        $othercondition=$_POST['othercondition'];
        $sameass=$_POST['sameass'];

        $improved=$_POST['improved'];
        $worseass=$_POST['worseass'];
        $plateau=$_POST['plateau'];
        $preinjury=$_POST['preinjury'];
        $slight=$_POST['slight'];

        $moderatly=$_POST['moderatly'];
        $great=$_POST['great'];
        $chiropractic=$_POST['chiropractic'];
        $ems=$_POST['ems'];
        $iceplan=$_POST['iceplan'];
        $heatplan=$_POST['heatplan'];

        $nimmo=$_POST['nimmo'];
        $ultrasound=$_POST['ultrasound'];
        $manualtraction=$_POST['manualtraction'];
        $massageplan=$_POST['massageplan'];

        $neuromuscular=$_POST['neuromuscular'];
        $stretching=$_POST['stretching'];
        $strengthening=$_POST['strengthening'];
        $remobilization=$_POST['remobilization'];

        $improvesubluxations=$_POST['improvesubluxations'];
        $rehab=$_POST['rehab'];
        $modificat=$_POST['modificat'];
        $care=$_POST['care'];
        $refer=$_POST['refer'];

        $decreasepain=$_POST['decreasepain'];
        $decreasespam=$_POST['decreasespam'];
        $increaserom=$_POST['increaserom'];
        $improveadl=$_POST['improveadl'];

        $fullactivity=$_POST['fullactivity'];
        $returntowork=$_POST['returntowork'];
        $renewsports=$_POST['renewsports'];
        $jacksonsr=$_POST['jacksonsr'];

        $jacksonsl=$_POST['jacksonsl'];
        $jacksonslo=$_POST['jacksonslo'];
        $foramin_compr=$_POST['foramin_compr'];
        $foramin_compl=$_POST['foramin_compl'];

        $foramin_complo=$_POST['foramin_complo'];
        $shoulder_deprr=$_POST['shoulder_deprr'];
        $shoulder_deprl=$_POST['shoulder_deprl'];

        $shoulder_deprlo=$_POST['shoulder_deprlo'];
        $georgesr=$_POST['georgesr'];
        $georgesl=$_POST['georgesl'];
        $georgeslo=$_POST['georgeslo'];
        $odonor=$_POST['odonor'];

        $odonol=$_POST['odonol'];
        $bakody_signr=$_POST['bakody_signr'];
        $bakody_signl=$_POST['bakody_signl'];
        $bakody_signlo=$_POST['bakody_signlo'];

        $distraction_testr=$_POST['distraction_testr'];
        $distraction_testl=$_POST['distraction_testl'];
        $valsalvar=$_POST['valsalvar'];
        $valsalval=$_POST['valsalval'];

        $valsalvalo=$_POST['valsalvalo'];
        $spinal_percuss=$_POST['spinal_percuss'];
        $gripdynamomright=$_POST['gripdynamomright'];
        $gripdynamomleft=$_POST['gripdynamomleft'];

        $adsonsr=$_POST['adsonsr'];
        $adsonsl=$_POST['adsonsl'];
        $adsonslo=$_POST['adsonslo'];
        $rustsignr=$_POST['rustsignr'];
        $rustsignl=$_POST['rustsignl'];

        $rustsignlo=$_POST['rustsignlo'];
        $spinal_percusst=$_POST['spinal_percusst'];
        $adams_testr=$_POST['adams_testr'];
        $adams_testl=$_POST['adams_testl'];

        $sheppal_signr=$_POST['sheppal_signr'];
        $sheppal_signl=$_POST['sheppal_signl'];
        $soto_hallr=$_POST['soto_hallr'];
        $soto_halll=$_POST['soto_halll'];

        $compression_testr=$_POST['compression_testr'];
        $compression_testl=$_POST['compression_testl'];
        $compression_testlo=$_POST['compression_testlo'];

        $antalgiar=$_POST['antalgiar'];
        $antalgial=$_POST['antalgial'];
        $spinal_percusslr=$_POST['spinal_percusslr'];
        $spinal_percussll=$_POST['spinal_percussll'];

        $valsalvalr=$_POST['valsalvalr'];
        $valsalvall=$_POST['valsalvall'];
        $minors_signr=$_POST['minors_signr'];
        $minors_signl=$_POST['minors_signl'];

        $braggards_testr=$_POST['braggards_testr'];
        $braggards_testl=$_POST['braggards_testl'];
        $slrr=$_POST['slrr'];
        $slrl=$_POST['slrl'];
        $wlrr=$_POST['wlrr'];

        $wlrl=$_POST['wlrl'];
        $hooversr=$_POST['hooversr'];
        $hooversl=$_POST['hooversl'];
        $dbl_leg_raiser=$_POST['dbl_leg_raiser'];
        $dbl_leg_raisel=$_POST['dbl_leg_raisel'];

        $long_leg_testr=$_POST['long_leg_testr'];
        $long_leg_testl=$_POST['long_leg_testl'];
        $anvil_testr=$_POST['anvil_testr'];
        $anvil_testl=$_POST['anvil_testl'];

        $thomasr=$_POST['thomasr'];
        $thomasl=$_POST['thomasl'];
        $milgrams_testr=$_POST['milgrams_testr'];
        $milgrams_testl=$_POST['milgrams_testl'];
        $obersr=$_POST['obersr'];

        $obersl=$_POST['obersl'];
        $illiaccompr=$_POST['illiaccompr'];
        $illiaccompl=$_POST['illiaccompl'];
        $yeomansr=$_POST['yeomansr'];
        $yeomansl=$_POST['yeomansl'];

        $allis_signr=$_POST['allis_signr'];
        $allis_signl=$_POST['allis_signl'];
        $dugasr=$_POST['dugasr'];
        $dugasl=$_POST['dugasl'];
        $supraspinatusr=$_POST['supraspinatusr'];

        $supraspinatusl=$_POST['supraspinatusl'];
        $codmansr=$_POST['codmansr'];
        $codmansl=$_POST['codmansl'];
        $speeds_testr=$_POST['speeds_testr'];

        $speeds_testl=$_POST['speeds_testl'];
        $yergasonsr=$_POST['yergasonsr'];
        $yergasonsl=$_POST['yergasonsl'];
        $tinelser=$_POST['tinelser'];
        $tinelsel=$_POST['tinelsel'];

        $lingaminstabr=$_POST['lingaminstabr'];
        $lingaminstabl=$_POST['lingaminstabl'];
        $golfers_elbowr=$_POST['golfers_elbowr'];
        $golfers_elbowl=$_POST['golfers_elbowl'];

        $tennis_elbowr=$_POST['tennis_elbowr'];
        $tennis_elbowl=$_POST['tennis_elbowl'];
        $tinelsr=$_POST['tinelsr'];
        $tinelsl=$_POST['tinelsl'];
        $phalensr=$_POST['phalensr'];

        $phalensl=$_POST['phalensl'];
        $finkelsteins_testr=$_POST['finkelsteins_testr'];
        $finkelsteins_testl=$_POST['finkelsteins_testl'];
        $braceletr=$_POST['braceletr'];

        $braceletl=$_POST['braceletl'];
        $allensr=$_POST['allensr'];
        $allensl=$_POST['allensl'];
        $valgus_varusr=$_POST['valgus_varusr'];
        $valgus_varusl=$_POST['valgus_varusl'];

        $pat_ballr=$_POST['pat_ballr'];
        $pat_balll=$_POST['pat_balll'];
        $drawerr=$_POST['drawerr'];
        $drawerl=$_POST['drawerl'];
        $val_varusr=$_POST['val_varusr'];

        $val_varusl=$_POST['val_varusl'];
        $apleysr=$_POST['apleysr'];
        $apleysl=$_POST['apleysl'];
        $ankdrawr=$_POST['ankdrawr'];
        $ankdrawl=$_POST['ankdrawl'];

        $ankthomr=$_POST['ankthomr'];
        $ankthoml=$_POST['ankthoml'];
        $anktinelr=$_POST['anktinelr'];
        $anktinell=$_POST['anktinell'];
        $ankstrunkr=$_POST['ankstrunkr'];

        $ankstrunkl=$_POST['ankstrunkl'];
        $ankhomanr=$_POST['ankhomanr'];
        $ankhomanl=$_POST['ankhomanl'];
        $ankclaudicr=$_POST['ankclaudicr'];

        $ankclaudicl=$_POST['ankclaudicl'];
      //  $lumbopelvic="one";$lumboright="one";$lumboleft="one";$cervical="one";$cervicalright="one";$cervicalleft="one";$thoracic="one";$thoracicright="one";$thoracicleft="one";$hacheck="one";$ha="one";$haa="one";$neckcheck="one";$neck="one";$necka="one";$mbcheck="one";$mb="one";$mba="one";$ribscheck="one";$ribs="one";$ribsa="one";$shouldercheck="one";$shoulder="one";$shouldera="one";$elbowcheck="one";$elbow="one";$elbowa="one";$handcheck="one";$hand="one";$handa="one";$wristcheck="one";$wrist="one";$wrista="one";$lbpcheck="one";$lbp="one";$lbpa="one";$hipcheck="one";$hip="one";$hipa="one";$legcheck="one";$leg="one";$lega="one";$kneecheck="one";$knee="one";$kneea="one";$footcheck="one";$foot="one";$foota="one";$anklecheck="one";$ankle="one";$anklea="one";$suddenly="one";$gradually="one";$hours="one";$days="one";$date="one";$reason="one";$acute="one";$subacute="one";$chronic="one";$lyingdown="one";$sitting="one";$standing="one";$bending="one";$rest="one";$otherb="one";$othere="one";$ice="one";$heat="one";$massage="one";$aspirin="one";$otherdone="one";$otherit="one";$bendingworse="one";$twisting="one";$lifting="one";$walking="one";$activity="one";$otherworse="one";$otherfeel="one";$sharp="one";$severe="one";$dull="one";$burning="one";$nagging="one";$throbbing="one";$numb="one";$tingling="one";$stiff="one";$stabbing="one";$cramping="one";$otherdescribe="one";$otherpain="one";$constant="one";$intermittent="one";$local="one";$diffuse="one";$radiates="one";$otherradiates="one";$mild="one";$moderate="one";$severepain="one";$crippling="one";$am="one";$pm="one";$othertime="one";$otherdn="one";$better="one";$same="one";$worse="one";$yes="one";$no="one";$day="one";$work="one";$sleep="one";$otherdaily="one";$othercondition="one";$sameass="one";$improved="one";$worseass="one";$plateau="one";$preinjury="one";$slight="one";$moderatly="one";$great="one";$chiropractic="one";$ems="one";$iceplan="one";$heatplan="one";$nimmo="one";$ultrasound="one";$manualtraction="one";$massageplan="one";$neuromuscular="one";$stretching="one";$strengthening="one";$remobilization="one";$improvesubluxations="one";$rehab="one";$modificat="one";$care="one";$refer="one";$decreasepain="one";$decreasespam="one";$increaserom="one";$improveadl="one";$fullactivity="one";$returntowork="one";$renewsports="one";$jacksonsr="one";$jacksonsl="one";$jacksonslo="one";$foramin_compr="one";$foramin_compl="one";$foramin_complo="one";$shoulder_deprr="one";$shoulder_deprl="one";$shoulder_deprlo="one";$georgesr="one";$georgesl="one";$georgeslo="one";$odonor="one";$odonol="one";$bakody_signr="one";$bakody_signl="one";$bakody_signlo="one";$distraction_testr="one";$distraction_testl="one";$valsalvar="one";$valsalval="one";$valsalvalo="one";$spinal_percuss="one";$gripdynamomright="one";$gripdynamomleft="one";$adsonsr="one";$adsonsl="one";$adsonslo="one";$rustsignr="one";$rustsignl="one";$rustsignlo="one";$spinal_percusst="one";$adams_testr="one";$adams_testl="one";$sheppal_signr="one";$sheppal_signl="one";$soto_hallr="one";$soto_halll="one";$compression_testr="one";$compression_testl="one";$compression_testlo="one";$antalgiar="one";$antalgial="one";$spinal_percusslr="one";$spinal_percussll="one";$valsalvalr="one";$valsalvall="one";$minors_signr="one";$minors_signl="one";$braggards_testr="one";$braggards_testl="one";$slrr="one";$slrl="one";$wlrr="one";$wlrl="one";$hooversr="one";$hooversl="one";$dbl_leg_raiser="one";$dbl_leg_raisel="one";$long_leg_testr="one";$long_leg_testl="one";$anvil_testr="one";$anvil_testl="one";$thomasr="one";$thomasl="one";$milgrams_testr="one";$milgrams_testl="one";$obersr="one";$obersl="one";$illiaccompr="one";$illiaccompl="one";$yeomansr="one";$yeomansl="one";$allis_signr="one";$allis_signl="one";$dugasr="one";$dugasl="one";$supraspinatusr="one";$supraspinatusl="one";$codmansr="one";$codmansl="one";$speeds_testr="one";$speeds_testl="one";$yergasonsr="one";$yergasonsl="one";$tinelser="one";$tinelsel="one";$lingaminstabr="one";$lingaminstabl="one";$golfers_elbowr="one";$golfers_elbowl="one";$tennis_elbowr="one";$tennis_elbowl="one";$tinelsr="one";$tinelsl="one";$phalensr="one";$phalensl="one";$finkelsteins_testr="one";$finkelsteins_testl="one";$braceletr="one";$braceletl="one";$allensr="one";$allensl="one";$valgus_varusr="one";$valgus_varusl="one";$pat_ballr="one";$pat_balll="one";$drawerr="one";$drawerl="one";$val_varusr="one";$val_varusl="one";$apleysr="one";$apleysl="one";$ankdrawr="one";$ankdrawl="one";$ankthomr="one";$ankthoml="one";$anktinelr="one";$anktinell="one";$ankstrunkr="one";$ankstrunkl="one";$ankhomanr="one";$ankhomanl="one";$ankclaudicr="one";$ankclaudicl="one";
       // $patient_id="sedhu";

//        $patient_id="sedhu";
//        $lumbopelvic=two;$lumboright=two;$lumboleft=two;$cervical=two;$cervicalright=two;$cervicalleft=two;$thoracic=two;$thoracicright=two;$thoracicleft=two;$hacheck=two;$ha=two;$haa=two;$neckcheck=two;$neck=two;$necka=two;$mbcheck=two;$mb=two;$mba=two;$ribscheck=two;$ribs=two;$ribsa=two;$shouldercheck=two;$shoulder=two;$shouldera=two;$elbowcheck=two;$elbow=two;$elbowa=two;$handcheck=two;$hand=two;$handa=two;$wristcheck=two;$wrist=two;$wrista=two;$lbpcheck=two;$lbp=two;$lbpa=two;$hipcheck=two;$hip=two;$hipa=two;$legcheck=two;$leg=two;$lega=two;$kneecheck=two;$knee=two;$kneea=two;$footcheck=two;$foot=two;$foota=two;$anklecheck=two;$ankle=two;$anklea=two;$suddenly=two;$gradually=two;$hours=two;$days=two;$date=two;$reason=two;$acute=two;$subacute=two;$chronic=two;$lyingdown=two;$sitting=two;$standing=two;$bending=two;$rest=two;$otherb=two;$othere=two;$ice=two;$heat=two;$massage=two;$aspirin=two;$otherdone=two;$otherit=two;$bendingworse=two;$twisting=two;$lifting=two;$walking=two;$activity=two;$otherworse=two;$otherfeel=two;$sharp=two;$severe=two;$dull=two;$burning=two;$nagging=two;$throbbing=two;$numb=two;$tingling=two;$stiff=two;$stabbing=two;$cramping=two;$otherdescribe=two;$otherpain=two;$constant=two;$intermittent=two;$local=two;$diffuse=two;$radiates=two;$otherradiates=two;$mild=two;$moderate=two;$severepain=two;$crippling=two;$am=two;$pm=two;$othertime=two;$otherdn=two;$better=two;$same=two;$worse=two;$yes=two;$no=two;$day=two;$work=two;$sleep=two;$otherdaily=two;$othercondition=two;$sameass=two;$improved=two;$worseass=two;$plateau=two;$preinjury=two;$slight=two;$moderatly=two;$great=two;$chiropractic=two;$ems=two;$iceplan=two;$heatplan=two;$nimmo=two;$ultrasound=two;$manualtraction=two;$massageplan=two;$neuromuscular=two;$stretching=two;$strengthening=two;$remobilization=two;$improvesubluxations=two;$rehab=two;$modificat=two;$care=two;$refer=two;$decreasepain=two;$decreasespam=two;$increaserom=two;$improveadl=two;$fullactivity=two;$returntowork=two;$renewsports=two;$jacksonsr=two;$jacksonsl=two;$jacksonslo=two;$foramin_compr=two;$foramin_compl=two;$foramin_complo=two;$shoulder_deprr=two;$shoulder_deprl=two;$shoulder_deprlo=two;$georgesr=two;$georgesl=two;$georgeslo=two;$odonor=two;$odonol=two;$bakody_signr=two;$bakody_signl=two;$bakody_signlo=two;$distraction_testr=two;$distraction_testl=two;$valsalvar=two;$valsalval=two;$valsalvalo=two;$spinal_percuss=two;$gripdynamomright=two;$gripdynamomleft=two;$adsonsr=two;$adsonsl=two;$adsonslo=two;$rustsignr=two;$rustsignl=two;$rustsignlo=two;$spinal_percusst=two;$adams_testr=two;$adams_testl=two;$sheppal_signr=two;$sheppal_signl=two;$soto_hallr=two;$soto_halll=two;$compression_testr=two;$compression_testl=two;$compression_testlo=two;$antalgiar=two;$antalgial=two;$spinal_percusslr=two;$spinal_percussll=two;$valsalvalr=two;$valsalvall=two;$minors_signr=two;$minors_signl=two;$braggards_testr=two;$braggards_testl=two;$slrr=two;$slrl=two;$wlrr=two;$wlrl=two;$hooversr=two;$hooversl=two;$dbl_leg_raiser=two;$dbl_leg_raisel=two;$long_leg_testr=two;$long_leg_testl=two;$anvil_testr=two;$anvil_testl=two;$thomasr=two;$thomasl=two;$milgrams_testr=two;$milgrams_testl=two;$obersr=two;$obersl=two;$illiaccompr=two;$illiaccompl=two;$yeomansr=two;$yeomansl=two;$allis_signr=two;$allis_signl=two;$dugasr=two;$dugasl=two;$supraspinatusr=two;$supraspinatusl=two;$codmansr=two;$codmansl=two;$speeds_testr=two;$speeds_testl=two;$yergasonsr=two;$yergasonsl=two;$tinelser=two;$tinelsel=two;$lingaminstabr=two;$lingaminstabl=two;$golfers_elbowr=two;$golfers_elbowl=two;$tennis_elbowr=two;$tennis_elbowl=two;$tinelsr=two;$tinelsl=two;$phalensr=two;$phalensl=two;$finkelsteins_testr=two;$finkelsteins_testl=two;$braceletr=two;$braceletl=two;$allensr=two;$allensl=two;$valgus_varusr=two;$valgus_varusl=two;$pat_ballr=two;$pat_balll=two;$drawerr=two;$drawerl=two;$val_varusr=two;$val_varusl=two;$apleysr=two;$apleysl=two;$ankdrawr=two;$ankdrawl=two;$ankthomr=two;$ankthoml=two;$anktinelr=two;$anktinell=two;$ankstrunkr=two;$ankstrunkl=two;$ankhomanr=two;$ankhomanl=two;$ankclaudicr=two;$ankclaudicl=two;

        $sql2="update tbl_hamiltonchiropractic set lumbopelvic='".$lumbopelvic."',lumboright='".$lumboright."',lumboleft='".$lumboleft."',cervical='".$cervical."',cervicalright='".$cervicalright."',cervicalleft='".$cervicalleft."',thoracic='".$thoracic."',thoracicright='".$thoracicright."',thoracicleft='".$thoracicleft."',hacheck='".$hacheck."',ha='".$ha."',haa='".$haa."',neckcheck='".$neckcheck."',neck='".$neck."',necka='".$necka."',mbcheck='".$mbcheck."',mb='".$mb."',mba='".$mba."',ribscheck='".$ribscheck."',ribs='".$ribs."',ribsa='".$ribsa."',shouldercheck='".$shouldercheck."',shoulder='".$shoulder."',shouldera='".$shouldera."',elbowcheck='".$elbowcheck."',elbow='".$elbow."',elbowa='".$elbowa."',handcheck='".$handcheck."',hand='".$hand."',handa='".$handa."',wristcheck='".$wristcheck."',wrist='".$wrist."',wrista='".$wrista."',lbpcheck='".$lbpcheck."',lbp='".$lbp."',lbpa='".$lbpa."',hipcheck='".$hipcheck."',hip='".$hip."',hipa='".$hipa."',legcheck='".$legcheck."',leg='".$leg."',lega='".$lega."',kneecheck='".$kneecheck."',knee='".$knee."',kneea='".$kneea."',footcheck='".$footcheck."',foot='".$foot."',foota='".$foota."',anklecheck='".$anklecheck."',ankle='".$ankle."',anklea='".$anklea."',suddenly='".$suddenly."',gradually='".$gradually."',hours='".$hours."',days='".$days."',date='".$date."',reason='".$reason."',acute='".$acute."',subacute='".$subacute."',chronic='".$chronic."',lyingdown='".$lyingdown."',sitting='".$sitting."',standing='".$standing."',bending='".$bending."',rest='".$rest."',otherb='".$otherb."',othere='".$othere."',ice='".$ice."',heat='".$heat."',massage='".$massage."',aspirin='".$aspirin."',otherdone='".$otherdone."',otherit='".$otherit."',bendingworse='".$bendingworse."',twisting='".$twisting."',lifting='".$lifting."',walking='".$walking."',activity='".$activity."',otherworse='".$otherworse."',otherfeel='".$otherfeel."',sharp='".$sharp."',severe='".$severe."',dull='".$dull."',burning='".$burning."',nagging='".$nagging."',throbbing='".$throbbing."',numb='".$numb."',tingling='".$tingling."',stiff='".$stiff."',stabbing='".$stabbing."',cramping='".$cramping."',otherdescribe='".$otherdescribe."',otherpain='".$otherpain."',constant='".$constant."',intermittent='".$intermittent."',local='".$local."',diffuse='".$diffuse."',radiates='".$radiates."',otherradiates='".$otherradiates."',mild='".$mild."',moderate='".$moderate."',severepain='".$severepain."',crippling='".$crippling."',am='".$am."',pm='".$pm."',othertime='".$othertime."',otherdn='".$otherdn."',better='".$better."',same='".$same."',worse='".$worse."',yes='".$yes."',no='".$no."',day='".$day."',work='".$work."',sleep='".$sleep."',otherdaily='".$otherdaily."',othercondition='".$othercondition."',sameass='".$sameass."',improved='".$improved."',worseass='".$worseass."',plateau='".$plateau."',preinjury='".$preinjury."',slight='".$slight."',moderatly='".$moderatly."',great='".$great."',chiropractic='".$chiropractic."',ems='".$ems."',iceplan='".$iceplan."',heatplan='".$heatplan."',nimmo='".$nimmo."',ultrasound='".$ultrasound."',manualtraction='".$manualtraction."',massageplan='".$massageplan."',neuromuscular='".$neuromuscular."',stretching='".$stretching."',strengthening='".$strengthening."',remobilization='".$remobilization."',improvesubluxations='".$improvesubluxations."',rehab='".$rehab."',modificat='".$modificat."',care='".$care."',refer='".$refer."',decreasepain='".$decreasepain."',decreasespam='".$decreasespam."',increaserom='".$increaserom."',improveadl='".$improveadl."',fullactivity='".$fullactivity."',returntowork='".$returntowork."',renewsports='".$renewsports."',jacksonsr='".$jacksonsr."',jacksonsl='".$jacksonsl."',jacksonslo='".$jacksonslo."',foramin_compr='".$foramin_compr."',foramin_compl='".$foramin_compl."',foramin_complo='".$foramin_complo."',shoulder_deprr='".$shoulder_deprr."',shoulder_deprl='".$shoulder_deprl."',shoulder_deprlo='".$shoulder_deprlo."',georgesr='".$georgesr."',georgesl='".$georgesl."',georgeslo='".$georgeslo."',odonor='".$odonor."',odonol='".$odonol."',bakody_signr='".$bakody_signr."',bakody_signl='".$bakody_signl."',bakody_signlo='".$bakody_signlo."',distraction_testr='".$distraction_testr."',distraction_testl='".$distraction_testl."',valsalvar='".$valsalvar."',valsalval='".$valsalval."',valsalvalo='".$valsalvalo."',spinal_percuss='".$spinal_percuss."',gripdynamomright='".$gripdynamomright."',gripdynamomleft='".$gripdynamomleft."',adsonsr='".$adsonsr."',adsonsl='".$adsonsl."',adsonslo='".$adsonslo."',rustsignr='".$rustsignr."',rustsignl='".$rustsignl."',rustsignlo='".$rustsignlo."',spinal_percusst='".$spinal_percusst."',adams_testr='".$adams_testr."',adams_testl='".$adams_testl."',sheppal_signr='".$sheppal_signr."',sheppal_signl='".$sheppal_signl."',soto_hallr='".$soto_hallr."',soto_halll='".$soto_halll."',compression_testr='".$compression_testr."',compression_testl='".$compression_testl."',compression_testlo='".$compression_testlo."',antalgiar='".$antalgiar."',antalgial='".$antalgial."',spinal_percusslr='".$spinal_percusslr."',spinal_percussll='".$spinal_percussll."',valsalvalr='".$valsalvalr."',valsalvall='".$valsalvall."',minors_signr='".$minors_signr."',minors_signl='".$minors_signl."',braggards_testr='".$braggards_testr."',braggards_testl='".$braggards_testl."',slrr='".$slrr."',slrl='".$slrl."',wlrr='".$wlrr."',wlrl='".$wlrl."',hooversr='".$hooversr."',hooversl='".$hooversl."',dbl_leg_raiser='".$dbl_leg_raiser."',dbl_leg_raisel='".$dbl_leg_raisel."',long_leg_testr='".$long_leg_testr."',long_leg_testl='".$long_leg_testl."',anvil_testr='".$anvil_testr."',anvil_testl='".$anvil_testl."',thomasr='".$thomasr."',thomasl='".$thomasl."',milgrams_testr='".$milgrams_testr."',milgrams_testl='".$milgrams_testl."',obersr='".$obersr."',obersl='".$obersl."',illiaccompr='".$illiaccompr."',illiaccompl='".$illiaccompl."',yeomansr='".$yeomansr."',yeomansl='".$yeomansl."',allis_signr='".$allis_signr."',allis_signl='".$allis_signl."',dugasr='".$dugasr."',dugasl='".$dugasl."',supraspinatusr='".$supraspinatusr."',supraspinatusl='".$supraspinatusl."',codmansr='".$codmansr."',codmansl='".$codmansl."',speeds_testr='".$speeds_testr."',speeds_testl='".$speeds_testl."',yergasonsr='".$yergasonsr."',yergasonsl='".$yergasonsl."',tinelser='".$tinelser."',tinelsel='".$tinelsel."',lingaminstabr='".$lingaminstabr."',lingaminstabl='".$lingaminstabl."',golfers_elbowr='".$golfers_elbowr."',golfers_elbowl='".$golfers_elbowl."',tennis_elbowr='".$tennis_elbowr."',tennis_elbowl='".$tennis_elbowl."',tinelsr='".$tinelsr."',tinelsl='".$tinelsl."',phalensr='".$phalensr."',phalensl='".$phalensl."',finkelsteins_testr='".$finkelsteins_testr."',finkelsteins_testl='".$finkelsteins_testl."',braceletr='".$braceletr."',braceletl='".$braceletl."',allensr='".$allensr."',allensl='".$allensl."',valgus_varusr='".$valgus_varusr."',valgus_varusl='".$valgus_varusl."',pat_ballr='".$pat_ballr."',pat_balll='".$pat_balll."',drawerr='".$drawerr."',drawerl='".$drawerl."',val_varusr='".$val_varusr."',val_varusl='".$val_varusl."',apleysr='".$apleysr."',apleysl='".$apleysl."',ankdrawr='".$ankdrawr."',ankdrawl='".$ankdrawl."',Ankthomr='".$ankthomr."',ankthoml='".$ankthoml."',anktinelr='".$anktinelr."',anktinell='".$anktinell."',ankstrunkr='".$ankstrunkr."',ankstrunkl='".$ankstrunkl."',ankhomanr='".$ankhomanr."',ankhomanl='".$ankhomanl."',ankclaudicr='".$ankclaudicr."',ankclaudicl='".$ankclaudicl."' WHERE patient_id='".$patient_id."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'hamiltonchiropracticinsert':
    {
        $patient_id=$_POST['patient_id'];
        $lumbopelvic=$_POST['lumbopelvic'];
        $lumboright=$_POST['lumboright'];
        $lumboleft=$_POST['lumboleft'];
        $cervical=$_POST['cervical'];

        $cervicalright=$_POST['cervicalright'];
        $cervicalleft=$_POST['cervicalleft'];
        $thoracic=$_POST['thoracic'];
        $thoracicright=$_POST['thoracicright'];

        $thoracicleft=$_POST['thoracicleft'];
        $hacheck=$_POST['hacheck'];
        $ha=$_POST['ha'];
        $haa=$_POST['haa'];
        $neckcheck=$_POST['neckcheck'];
        $neck=$_POST['neck'];

        $necka=$_POST['necka'];
        $mbcheck=$_POST['mbcheck'];
        $mb=$_POST['mb'];
        $mba=$_POST['mba'];
        $ribscheck=$_POST['ribscheck'];
        $ribs=$_POST['ribs'];
        $ribsa=$_POST['ribsa'];

        $shouldercheck=$_POST['shouldercheck'];
        $shoulder=$_POST['shoulder'];
        $shouldera=$_POST['shouldera'];
        $elbowcheck=$_POST['elbowcheck'];
        $elbow=$_POST['elbow'];

        $elbowa=$_POST['elbowa'];
        $handcheck=$_POST['handcheck'];
        $hand=$_POST['hand'];
        $handa=$_POST['handa'];
        $wristcheck=$_POST['wristcheck'];
        $wrist=$_POST['wrist'];

        $wrista=$_POST['wrista'];
        $lbpcheck=$_POST['lbpcheck'];
        $lbp=$_POST['lbp'];
        $lbpa=$_POST['lbpa'];
        $hipcheck=$_POST['hipcheck'];
        $hip=$_POST['hip'];
        $hipa=$_POST['hipa'];

        $legcheck=$_POST['legcheck'];
        $leg=$_POST['leg'];
        $lega=$_POST['lega'];
        $kneecheck=$_POST['kneecheck'];
        $knee=$_POST['knee'];
        $kneea=$_POST['kneea'];

        $footcheck=$_POST['footcheck'];
        $foot=$_POST['foot'];
        $foota=$_POST['foota'];
        $anklecheck=$_POST['anklecheck'];
        $ankle=$_POST['ankle'];

        $anklea=$_POST['anklea'];
        $suddenly=$_POST['suddenly'];
        $gradually=$_POST['gradually'];
        $hours=$_POST['hours'];
        $days=$_POST['days'];
        $date=$_POST['date'];

        $reason=$_POST['reason'];
        $acute=$_POST['acute'];
        $subacute=$_POST['subacute'];
        $chronic=$_POST['chronic'];
        $lyingdown=$_POST['lyingdown'];

        $sitting=$_POST['sitting'];
        $standing=$_POST['standing'];
        $bending=$_POST['bending'];
        $rest=$_POST['rest'];
        $otherb=$_POST['otherb'];
        $othere=$_POST['othere'];

        $ice=$_POST['ice'];
        $heat=$_POST['heat'];
        $massage=$_POST['massage'];
        $aspirin=$_POST['aspirin'];
        $otherdone=$_POST['otherdone'];
        $otherit=$_POST['otherit'];

        $bendingworse=$_POST['bendingworse'];
        $twisting=$_POST['twisting'];
        $lifting=$_POST['lifting'];
        $walking=$_POST['walking'];
        $activity=$_POST['activity'];

        $otherworse=$_POST['otherworse'];
        $otherfeel=$_POST['otherfeel'];
        $sharp=$_POST['sharp'];
        $severe=$_POST['severe'];
        $dull=$_POST['dull'];

        $burning=$_POST['burning'];
        $nagging=$_POST['nagging'];
        $throbbing=$_POST['throbbing'];
        $numb=$_POST['numb'];
        $tingling=$_POST['tingling'];
        $stiff=$_POST['stiff'];

        $stabbing=$_POST['stabbing'];
        $cramping=$_POST['cramping'];
        $otherdescribe=$_POST['otherdescribe'];
        $otherpain=$_POST['otherpain'];
        $constant=$_POST['constant'];

        $intermittent=$_POST['intermittent'];
        $local=$_POST['local'];
        $diffuse=$_POST['diffuse'];
        $radiates=$_POST['radiates'];
        $otherradiates=$_POST['otherradiates'];

        $mild=$_POST['mild'];
        $moderate=$_POST['moderate'];
        $severepain=$_POST['severepain'];
        $crippling=$_POST['crippling'];
        $am=$_POST['am'];
        $pm=$_POST['pm'];

        $othertime=$_POST['othertime'];
        $otherdn=$_POST['otherdn'];
        $better=$_POST['better'];
        $same=$_POST['same'];
        $worse=$_POST['worse'];
        $yes=$_POST['yes'];
        $no=$_POST['no'];

        $day=$_POST['day'];
        $work=$_POST['work'];
        $sleep=$_POST['sleep'];
        $otherdaily=$_POST['otherdaily'];
        $othercondition=$_POST['othercondition'];
        $sameass=$_POST['sameass'];

        $improved=$_POST['improved'];
        $worseass=$_POST['worseass'];
        $plateau=$_POST['plateau'];
        $preinjury=$_POST['preinjury'];
        $slight=$_POST['slight'];

        $moderatly=$_POST['moderatly'];
        $great=$_POST['great'];
        $chiropractic=$_POST['chiropractic'];
        $ems=$_POST['ems'];
        $iceplan=$_POST['iceplan'];
        $heatplan=$_POST['heatplan'];

        $nimmo=$_POST['nimmo'];
        $ultrasound=$_POST['ultrasound'];
        $manualtraction=$_POST['manualtraction'];
        $massageplan=$_POST['massageplan'];

        $neuromuscular=$_POST['neuromuscular'];
        $stretching=$_POST['stretching'];
        $strengthening=$_POST['strengthening'];
        $remobilization=$_POST['remobilization'];

        $improvesubluxations=$_POST['improvesubluxations'];
        $rehab=$_POST['rehab'];
        $modificat=$_POST['modificat'];
        $care=$_POST['care'];
        $refer=$_POST['refer'];

        $decreasepain=$_POST['decreasepain'];
        $decreasespam=$_POST['decreasespam'];
        $increaserom=$_POST['increaserom'];
        $improveadl=$_POST['improveadl'];

        $fullactivity=$_POST['fullactivity'];
        $returntowork=$_POST['returntowork'];
        $renewsports=$_POST['renewsports'];
        $jacksonsr=$_POST['jacksonsr'];

        $jacksonsl=$_POST['jacksonsl'];
        $jacksonslo=$_POST['jacksonslo'];
        $foramin_compr=$_POST['foramin_compr'];
        $foramin_compl=$_POST['foramin_compl'];

        $foramin_complo=$_POST['foramin_complo'];
        $shoulder_deprr=$_POST['shoulder_deprr'];
        $shoulder_deprl=$_POST['shoulder_deprl'];

        $shoulder_deprlo=$_POST['shoulder_deprlo'];
        $georgesr=$_POST['georgesr'];
        $georgesl=$_POST['georgesl'];
        $georgeslo=$_POST['georgeslo'];
        $odonor=$_POST['odonor'];

        $odonol=$_POST['odonol'];
        $bakody_signr=$_POST['bakody_signr'];
        $bakody_signl=$_POST['bakody_signl'];
        $bakody_signlo=$_POST['bakody_signlo'];

        $distraction_testr=$_POST['distraction_testr'];
        $distraction_testl=$_POST['distraction_testl'];
        $valsalvar=$_POST['valsalvar'];
        $valsalval=$_POST['valsalval'];

        $valsalvalo=$_POST['valsalvalo'];
        $spinal_percuss=$_POST['spinal_percuss'];
        $gripdynamomright=$_POST['gripdynamomright'];
        $gripdynamomleft=$_POST['gripdynamomleft'];

        $adsonsr=$_POST['adsonsr'];
        $adsonsl=$_POST['adsonsl'];
        $adsonslo=$_POST['adsonslo'];
        $rustsignr=$_POST['rustsignr'];
        $rustsignl=$_POST['rustsignl'];

        $rustsignlo=$_POST['rustsignlo'];
        $spinal_percusst=$_POST['spinal_percusst'];
        $adams_testr=$_POST['adams_testr'];
        $adams_testl=$_POST['adams_testl'];

        $sheppal_signr=$_POST['sheppal_signr'];
        $sheppal_signl=$_POST['sheppal_signl'];
        $soto_hallr=$_POST['soto_hallr'];
        $soto_halll=$_POST['soto_halll'];

        $compression_testr=$_POST['compression_testr'];
        $compression_testl=$_POST['compression_testl'];
        $compression_testlo=$_POST['compression_testlo'];

        $antalgiar=$_POST['antalgiar'];
        $antalgial=$_POST['antalgial'];
        $spinal_percusslr=$_POST['spinal_percusslr'];
        $spinal_percussll=$_POST['spinal_percussll'];

        $valsalvalr=$_POST['valsalvalr'];
        $valsalvall=$_POST['valsalvall'];
        $minors_signr=$_POST['minors_signr'];
        $minors_signl=$_POST['minors_signl'];

        $braggards_testr=$_POST['braggards_testr'];
        $braggards_testl=$_POST['braggards_testl'];
        $slrr=$_POST['slrr'];
        $slrl=$_POST['slrl'];
        $wlrr=$_POST['wlrr'];

        $wlrl=$_POST['wlrl'];
        $hooversr=$_POST['hooversr'];
        $hooversl=$_POST['hooversl'];
        $dbl_leg_raiser=$_POST['dbl_leg_raiser'];
        $dbl_leg_raisel=$_POST['dbl_leg_raisel'];

        $long_leg_testr=$_POST['long_leg_testr'];
        $long_leg_testl=$_POST['long_leg_testl'];
        $anvil_testr=$_POST['anvil_testr'];
        $anvil_testl=$_POST['anvil_testl'];

        $thomasr=$_POST['thomasr'];
        $thomasl=$_POST['thomasl'];
        $milgrams_testr=$_POST['milgrams_testr'];
        $milgrams_testl=$_POST['milgrams_testl'];
        $obersr=$_POST['obersr'];

        $obersl=$_POST['obersl'];
        $illiaccompr=$_POST['illiaccompr'];
        $illiaccompl=$_POST['illiaccompl'];
        $yeomansr=$_POST['yeomansr'];
        $yeomansl=$_POST['yeomansl'];

        $allis_signr=$_POST['allis_signr'];
        $allis_signl=$_POST['allis_signl'];
        $dugasr=$_POST['dugasr'];
        $dugasl=$_POST['dugasl'];
        $supraspinatusr=$_POST['supraspinatusr'];

        $supraspinatusl=$_POST['supraspinatusl'];
        $codmansr=$_POST['codmansr'];
        $codmansl=$_POST['codmansl'];
        $speeds_testr=$_POST['speeds_testr'];

        $speeds_testl=$_POST['speeds_testl'];
        $yergasonsr=$_POST['yergasonsr'];
        $yergasonsl=$_POST['yergasonsl'];
        $tinelser=$_POST['tinelser'];
        $tinelsel=$_POST['tinelsel'];

        $lingaminstabr=$_POST['lingaminstabr'];
        $lingaminstabl=$_POST['lingaminstabl'];
        $golfers_elbowr=$_POST['golfers_elbowr'];
        $golfers_elbowl=$_POST['golfers_elbowl'];

        $tennis_elbowr=$_POST['tennis_elbowr'];
        $tennis_elbowl=$_POST['tennis_elbowl'];
        $tinelsr=$_POST['tinelsr'];
        $tinelsl=$_POST['tinelsl'];
        $phalensr=$_POST['phalensr'];

        $phalensl=$_POST['phalensl'];
        $finkelsteins_testr=$_POST['finkelsteins_testr'];
        $finkelsteins_testl=$_POST['finkelsteins_testl'];
        $braceletr=$_POST['braceletr'];

        $braceletl=$_POST['braceletl'];
        $allensr=$_POST['allensr'];
        $allensl=$_POST['allensl'];
        $valgus_varusr=$_POST['valgus_varusr'];
        $valgus_varusl=$_POST['valgus_varusl'];

        $pat_ballr=$_POST['pat_ballr'];
        $pat_balll=$_POST['pat_balll'];
        $drawerr=$_POST['drawerr'];
        $drawerl=$_POST['drawerl'];
        $val_varusr=$_POST['val_varusr'];

        $val_varusl=$_POST['val_varusl'];
        $apleysr=$_POST['apleysr'];
        $apleysl=$_POST['apleysl'];
        $ankdrawr=$_POST['ankdrawr'];
        $ankdrawl=$_POST['ankdrawl'];

        $ankthomr=$_POST['ankthomr'];
        $ankthoml=$_POST['ankthoml'];
        $anktinelr=$_POST['anktinelr'];
        $anktinell=$_POST['anktinell'];
        $ankstrunkr=$_POST['ankstrunkr'];

        $ankstrunkl=$_POST['ankstrunkl'];
        $ankhomanr=$_POST['ankhomanr'];
        $ankhomanl=$_POST['ankhomanl'];
        $ankclaudicr=$_POST['ankclaudicr'];

        $ankclaudicl=$_POST['ankclaudicl'];


        // $lumbopelvic="one";$lumboright="one";$lumboleft="one";$cervical="one";$cervicalright="one";$cervicalleft="one";$thoracic="one";$thoracicright="one";$thoracicleft="one";$hacheck="one";$ha="one";$haa="one";$neckcheck="one";$neck="one";$necka="one";$mbcheck="one";$mb="one";$mba="one";$ribscheck="one";$ribs="one";$ribsa="one";$shouldercheck="one";$shoulder="one";$shouldera="one";$elbowcheck="one";$elbow="one";$elbowa="one";$handcheck="one";$hand="one";$handa="one";$wristcheck="one";$wrist="one";$wrista="one";$lbpcheck="one";$lbp="one";$lbpa="one";$hipcheck="one";$hip="one";$hipa="one";$legcheck="one";$leg="one";$lega="one";$kneecheck="one";$knee="one";$kneea="one";$footcheck="one";$foot="one";$foota="one";$anklecheck="one";$ankle="one";$anklea="one";$suddenly="one";$gradually="one";$hours="one";$days="one";$date="one";$reason="one";$acute="one";$subacute="one";$chronic="one";$lyingdown="one";$sitting="one";$standing="one";$bending="one";$rest="one";$otherb="one";$othere="one";$ice="one";$heat="one";$massage="one";$aspirin="one";$otherdone="one";$otherit="one";$bendingworse="one";$twisting="one";$lifting="one";$walking="one";$activity="one";$otherworse="one";$otherfeel="one";$sharp="one";$severe="one";$dull="one";$burning="one";$nagging="one";$throbbing="one";$numb="one";$tingling="one";$stiff="one";$stabbing="one";$cramping="one";$otherdescribe="one";$otherpain="one";$constant="one";$intermittent="one";$local="one";$diffuse="one";$radiates="one";$otherradiates="one";$mild="one";$moderate="one";$severepain="one";$crippling="one";$am="one";$pm="one";$othertime="one";$otherdn="one";$better="one";$same="one";$worse="one";$yes="one";$no="one";$day="one";$work="one";$sleep="one";$otherdaily="one";$othercondition="one";$sameass="one";$improved="one";$worseass="one";$plateau="one";$preinjury="one";$slight="one";$moderatly="one";$great="one";$chiropractic="one";$ems="one";$iceplan="one";$heatplan="one";$nimmo="one";$ultrasound="one";$manualtraction="one";$massageplan="one";$neuromuscular="one";$stretching="one";$strengthening="one";$remobilization="one";$improvesubluxations="one";$rehab="one";$modificat="one";$care="one";$refer="one";$decreasepain="one";$decreasespam="one";$increaserom="one";$improveadl="one";$fullactivity="one";$returntowork="one";$renewsports="one";$jacksonsr="one";$jacksonsl="one";$jacksonslo="one";$foramin_compr="one";$foramin_compl="one";$foramin_complo="one";$shoulder_deprr="one";$shoulder_deprl="one";$shoulder_deprlo="one";$georgesr="one";$georgesl="one";$georgeslo="one";$odonor="one";$odonol="one";$bakody_signr="one";$bakody_signl="one";$bakody_signlo="one";$distraction_testr="one";$distraction_testl="one";$valsalvar="one";$valsalval="one";$valsalvalo="one";$spinal_percuss="one";$gripdynamomright="one";$gripdynamomleft="one";$adsonsr="one";$adsonsl="one";$adsonslo="one";$rustsignr="one";$rustsignl="one";$rustsignlo="one";$spinal_percusst="one";$adams_testr="one";$adams_testl="one";$sheppal_signr="one";$sheppal_signl="one";$soto_hallr="one";$soto_halll="one";$compression_testr="one";$compression_testl="one";$compression_testlo="one";$antalgiar="one";$antalgial="one";$spinal_percusslr="one";$spinal_percussll="one";$valsalvalr="one";$valsalvall="one";$minors_signr="one";$minors_signl="one";$braggards_testr="one";$braggards_testl="one";$slrr="one";$slrl="one";$wlrr="one";$wlrl="one";$hooversr="one";$hooversl="one";$dbl_leg_raiser="one";$dbl_leg_raisel="one";$long_leg_testr="one";$long_leg_testl="one";$anvil_testr="one";$anvil_testl="one";$thomasr="one";$thomasl="one";$milgrams_testr="one";$milgrams_testl="one";$obersr="one";$obersl="one";$illiaccompr="one";$illiaccompl="one";$yeomansr="one";$yeomansl="one";$allis_signr="one";$allis_signl="one";$dugasr="one";$dugasl="one";$supraspinatusr="one";$supraspinatusl="one";$codmansr="one";$codmansl="one";$speeds_testr="one";$speeds_testl="one";$yergasonsr="one";$yergasonsl="one";$tinelser="one";$tinelsel="one";$lingaminstabr="one";$lingaminstabl="one";$golfers_elbowr="one";$golfers_elbowl="one";$tennis_elbowr="one";$tennis_elbowl="one";$tinelsr="one";$tinelsl="one";$phalensr="one";$phalensl="one";$finkelsteins_testr="one";$finkelsteins_testl="one";$braceletr="one";$braceletl="one";$allensr="one";$allensl="one";$valgus_varusr="one";$valgus_varusl="one";$pat_ballr="one";$pat_balll="one";$drawerr="one";$drawerl="one";$val_varusr="one";$val_varusl="one";$apleysr="one";$apleysl="one";$ankdrawr="one";$ankdrawl="one";$ankthomr="one";$ankthoml="one";$anktinelr="one";$anktinell="one";$ankstrunkr="one";$ankstrunkl="one";$ankhomanr="one";$ankhomanl="one";$ankclaudicr="one";$ankclaudicl="one";
//$patient_id="sedhu";



        $sql3="INSERT INTO tbl_hamiltonchiropractic(initialexamid,patient_id,lumbopelvic,lumboright,lumboleft,cervical,cervicalright,cervicalleft,thoracic,thoracicright,thoracicleft,hacheck,ha,haa,neckcheck,neck,necka,mbcheck,mb,mba,ribscheck,ribs,ribsa,shouldercheck,shoulder,shouldera,elbowcheck,elbow,elbowa,handcheck,hand,handa,wristcheck,wrist,wrista,lbpcheck,lbp,lbpa,hipcheck,hip,hipa,legcheck,leg,lega,kneecheck,knee,kneea,footcheck,foot,foota,anklecheck,ankle,anklea,suddenly,gradually,hours,days,date,reason,acute,subacute,chronic,lyingdown,sitting,standing,bending,rest,otherb,othere,ice,heat,massage,aspirin,otherdone,otherit,bendingworse,twisting,lifting,walking,activity,otherworse,otherfeel,sharp,severe,dull,burning,nagging,throbbing,numb,tingling,stiff,stabbing,cramping,otherdescribe,otherpain,constant,intermittent,local,diffuse,radiates,otherradiates,mild,moderate,severepain,crippling,am,pm,othertime,otherdn,better,same,worse,yes,no,day,work,sleep,otherdaily,othercondition,sameass,improved,worseass,plateau,preinjury,slight,moderatly,great,chiropractic,ems,iceplan,heatplan,nimmo,ultrasound,manualtraction,massageplan,neuromuscular,stretching,strengthening,remobilization,improvesubluxations,rehab,modificat,care,refer,decreasepain,decreasespam,increaserom,improveadl,fullactivity,returntowork,renewsports,jacksonsr,jacksonsl,jacksonslo,foramin_compr,foramin_compl,foramin_complo,shoulder_deprr,shoulder_deprl,shoulder_deprlo,georgesr,georgesl,georgeslo,odonor,odonol,bakody_signr,bakody_signl,bakody_signlo,distraction_testr,distraction_testl,valsalvar,valsalval,valsalvalo,spinal_percuss,gripdynamomright,gripdynamomleft,adsonsr,adsonsl,adsonslo,rustsignr,rustsignl,rustsignlo,spinal_percusst,adams_testr,adams_testl,sheppal_signr,sheppal_signl,soto_hallr,soto_halll,compression_testr,compression_testl,compression_testlo,antalgiar,antalgial,spinal_percusslr,valsalvalr,valsalvall,minors_signr,minors_signl,braggards_testr,braggards_testl,slrr,slrl,wlrr,wlrl,hooversr,hooversl,dbl_leg_raiser,dbl_leg_raisel,long_leg_testr,long_leg_testl,anvil_testr,anvil_testl,thomasr,thomasl,milgrams_testr,milgrams_testl,obersr,obersl,illiaccompr,illiaccompl,yeomansr,yeomansl,allis_signr,allis_signl,dugasr,dugasl,supraspinatusr,supraspinatusl,codmansr,codmansl,speeds_testr,speeds_testl,yergasonsr,yergasonsl,tinelser,tinelsel,lingaminstabr,lingaminstabl,golfers_elbowr,golfers_elbowl,tennis_elbowr,tennis_elbowl,tinelsr,tinelsl,phalensr,phalensl,finkelsteins_testr,finkelsteins_testl,braceletr,braceletl,allensr,allensl,valgus_varusr,valgus_varusl,pat_ballr,pat_balll,drawerr,drawerl,val_varusr,val_varusl,apleysr,apleysl,ankdrawr,ankdrawl,ankthomr,ankthoml,anktinelr,anktinell,ankstrunkr,ankstrunkl,ankhomanr,ankhomanl,ankclaudicr,ankclaudicl) VALUES ('','".$patient_id."','".$lumbopelvic."','".$lumboright."','".$lumboleft."','".$cervical."','".$cervicalright."','".$cervicalleft."','".$thoracic."','".$thoracicright."','".$thoracicleft."','".$hacheck."','".$ha."','".$haa."','".$neckcheck."','".$neck."','".$necka."','".$mbcheck."','".$mb."','".$mba."','".$ribscheck."','".$ribs."','".$ribsa."','".$shouldercheck."','".$shoulder."','".$shouldera."','".$elbowcheck."','".$elbow."','".$elbowa."','".$handcheck."','".$hand."','".$handa."','".$wristcheck."','".$wrist."','".$wrista."','".$lbpcheck."','".$lbp."','".$lbpa."','".$hipcheck."','".$hip."','".$hipa."','".$legcheck."','".$leg."','".$lega."','".$kneecheck."','".$knee."','".$kneea."','".$footcheck."','".$foot."','".$foota."','".$anklecheck."','".$ankle."','".$anklea."','".$suddenly."','".$gradually."','".$hours."','".$days."','".$date."','".$reason."','".$acute."','".$subacute."','".$chronic."','".$lyingdown."','".$sitting."','".$standing."','".$bending."','".$rest."','".$otherb."','".$othere."','".$ice."','".$heat."','".$massage."','".$aspirin."','".$otherdone."','".$otherit."','".$bendingworse."','".$twisting."','".$lifting."','".$walking."','".$activity."','".$otherworse."','".$otherfeel."','".$sharp."','".$severe."','".$dull."','".$burning."','".$nagging."','".$throbbing."','".$numb."','".$tingling."','".$stiff."','".$stabbing."','".$cramping."','".$otherdescribe."','".$otherpain."','".$constant."','".$intermittent."','".$local."','".$diffuse."','".$radiates."','".$otherradiates."','".$mild."','".$moderate."','".$severepain."','".$crippling."','".$am."','".$pm."','".$othertime."','".$otherdn."','".$better."','".$same."','".$worse."','".$yes."','".$no."','".$day."','".$work."','".$sleep."','".$otherdaily."','".$othercondition."','".$sameass."','".$improved."','".$worseass."','".$plateau."','".$preinjury."','".$slight."','".$moderatly."','".$great."','".$chiropractic."','".$ems."','".$iceplan."','".$heatplan."','".$nimmo."','".$ultrasound."','".$manualtraction."','".$massageplan."','".$neuromuscular."','".$stretching."','".$strengthening."','".$remobilization."','".$improvesubluxations."','".$rehab."','".$modificat."','".$care."','".$refer."','".$decreasepain."','".$decreasespam."','".$increaserom."','".$improveadl."','".$fullactivity."','".$returntowork."','".$renewsports."','".$jacksonsr."','".$jacksonsl."','".$jacksonslo."','".$foramin_compr."','".$foramin_compl."','".$foramin_complo."','".$shoulder_deprr."','".$shoulder_deprl."','".$shoulder_deprlo."','".$georgesr."','".$georgesl."','".$georgeslo."','".$odonor."','".$odonol."','".$bakody_signr."','".$bakody_signl."','".$bakody_signlo."','".$distraction_testr."','".$distraction_testl."','".$valsalvar."','".$valsalval."','".$valsalvalo."','".$spinal_percuss."','".$gripdynamomright."','".$gripdynamomleft."','".$adsonsr."','".$adsonsl."','".$adsonslo."','".$rustsignr."','".$rustsignl."','".$rustsignlo."','".$spinal_percusst."','".$adams_testr."','".$adams_testl."','".$sheppal_signr."','".$sheppal_signl."','".$soto_hallr."','".$soto_halll."','".$compression_testr."','".$compression_testl."','".$compression_testlo."','".$antalgiar."','".$antalgial."','".$spinal_percusslr."','".$valsalvalr."','".$valsalvall."','".$minors_signr."','".$minors_signl."','".$braggards_testr."','".$braggards_testl."','".$slrr."','".$slrl."','".$wlrr."','".$wlrl."','".$hooversr."','".$hooversl."','".$dbl_leg_raiser."','".$dbl_leg_raisel."','".$long_leg_testr."','".$long_leg_testl."','".$anvil_testr."','".$anvil_testl."','".$thomasr."','".$thomasl."','".$milgrams_testr."','".$milgrams_testl."','".$obersr."','".$obersl."','".$illiaccompr."','".$illiaccompl."','".$yeomansr."','".$yeomansl."','".$allis_signr."','".$allis_signl."','".$dugasr."','".$dugasl."','".$supraspinatusr."','".$supraspinatusl."','".$codmansr."','".$codmansl."','".$speeds_testr."','".$speeds_testl."','".$yergasonsr."','".$yergasonsl."','".$tinelser."','".$tinelsel."','".$lingaminstabr."','".$lingaminstabl."','".$golfers_elbowr."','".$golfers_elbowl."','".$tennis_elbowr."','".$tennis_elbowl."','".$tinelsr."','".$tinelsl."','".$phalensr."','".$phalensl."','".$finkelsteins_testr."','".$finkelsteins_testl."','".$braceletr."','".$braceletl."','".$allensr."','".$allensl."','".$valgus_varusr."','".$valgus_varusl."','".$pat_ballr."','".$pat_balll."','".$drawerr."','".$drawerl."','".$val_varusr."','".$val_varusl."','".$apleysr."','".$apleysl."','".$ankdrawr."','".$ankdrawl."','".$ankthomr."','".$ankthoml."','".$anktinelr."','".$anktinell."','".$ankstrunkr."','".$ankstrunkl."','".$ankhomanr."','".$ankhomanl."','".$ankclaudicr."','".$ankclaudicl."')";


       //  echo $sql3;
        if(mysql_query($sql3))
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "Yes", "message" : "1" } }';


        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'hamiltonchiropracticdelete':
    {
        $patient_id = $_POST['pateint_id'];
        //$patient_id="thendral";
//
        $sql4 ="delete from tbl_hamiltonchiropractic where patient_id='".$patient_id."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "hamiltonchiropractic Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>