<?php
/**
 * Created by PhpStorm.
 * User: admin
 * dateofinjury: 17/05/14
 * Time: 11:18 AM
 */


session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'narrativeselect':
    {

        $username = $_POST['username'];
//         $username = "silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_narrativereport WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "narrativeuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "narrativeno" : "'.$row->narrativeno.'", "username" : "'.$row->username.'", "reportdate" : "'.$row->reportdate.'", "name" : "'.$row->name.'", "patient" : "'.$row->patient.'", "dateofinjury" : "'.$row->dateofinjury.'","dateoffirstvisit" : "'.$row->dateoffirstvisit.'","towhom" : "'.$row->towhom.'","patientname" : "'.$row->patientname.'","gender" : "'.$row->gender.'","accident" : "'.$row->accident.'","dateofconsultation" : "'.$row->dateofconsultation.'","gender1" : "'.$row->gender1.'","gender2" : "'.$row->gender2.'","accidentdate" : "'.$row->accidentdate.'","gender3" : "'.$row->gender3.'","gender4" : "'.$row->gender4.'","gender5" : "'.$row->gender5.'","name1" : "'.$row->name1.'","gendernew" : "'.$row->gendernew.'","gender6" : "'.$row->gender6.'","gender7" : "'.$row->gender7.'","gender8" : "'.$row->gender8.'","gender9" : "'.$row->gender9.'","name2" : "'.$row->name2.'","body" : "'.$row->body.'","gender10" : "'.$row->gender10.'","slammed" : "'.$row->slammed.'","slammed1" : "'.$row->slammed1.'","symptom" : "'.$row->symptom.'","appeared" : "'.$row->appeared.'" ,"priordate" : "'.$row->priordate.'","gender11" : "'.$row->gender11.'","name3": "'.$row->name3.'","gender12": "'.$row->gender12.'","pastmedicalhistory": "'.$row->pastmedicalhistory.'","gender13": "'.$row->gender13.'","gender14" : "'.$row->gender14.'","gender15": "'.$row->gender15.'","gender16": "'.$row->gender16.'","gender17": "'.$row->gender17.'","gender18": "'.$row->gender18.'","name4": "'.$row->name4.'","clinicdate": "'.$row->clinicdate.'","gender19": "'.$row->gender19.'","vehicleaccident" : "'.$row->vehicleaccident.'","gender20" : "'.$row->gender20.'","gender21" : "'.$row->gender21.'","allieviated" : "'.$row->allieviated.'","gender22" : "'.$row->gender22.'","gender23": "'.$row->gender23.'","gender24" : "'.$row->gender24.'","gendernew2" : "'.$row->gendernew2.'","gendernew3" : "'.$row->gendernew3.'","gender25": "'.$row->gender25.'","gender26": "'.$row->gender26.'","gender27" : "'.$row->gender27.'","gender28": "'.$row->gender28.'","gender29" : "'.$row->gender29.'","gender30": "'.$row->gender30.'","age": "'.$row->age.'","age1": "'.$row->age1.'","lb" : "'.$row->lb.'","gender31" : "'.$row->gender31.'","gender32" : "'.$row->gender32.'","gender33": "'.$row->gender33.'","gender34" : "'.$row->gender34.'","gendernew4" : "'.$row->gendernew4.'","gender35" : "'.$row->gender35.'","gender36": "'.$row->gender36.'","gender37": "'.$row->gender37.'","gender38" : "'.$row->gender38.'","gender39": "'.$row->gender39.'","gendernew5" : "'.$row->gendernew5.'", "tenderness" : "'.$row->tenderness.'", "gender40" : "'.$row->gender40.'", "gendernew6" : "'.$row->gendernew6.'", "gender41" : "'.$row->gender41.'","noted" : "'.$row->noted.'","rangeofmotion" : "'.$row->rangeofmotion.'","painres1" : "'.$row->painres1.'","tonicity1" : "'.$row->tonicity1.'","painres2" : "'.$row->painres2.'","tonicity2" : "'.$row->tonicity2.'","painres3" : "'.$row->painres3.'","tonicity3" : "'.$row->tonicity3.'","painres4" : "'.$row->painres4.'","tonicity4" : "'.$row->tonicity4.'","painres5" : "'.$row->painres5.'","tonicity5" : "'.$row->tonicity5.'","painres6" : "'.$row->painres6.'","tonicity6" : "'.$row->tonicity6.'","painres7" : "'.$row->painres7.'","tonicity7" : "'.$row->tonicity7.'","painres8" : "'.$row->painres8.'","tonicity8" : "'.$row->tonicity8.'","painres9" : "'.$row->painres9.'","tonicity9" : "'.$row->tonicity9.'","painres10" : "'.$row->painres10.'","tonicity10" : "'.$row->tonicity10.'" ,"painres11" : "'.$row->painres11.'","tonicity11" : "'.$row->tonicity11.'","painres12": "'.$row->painres12.'","tonicity12": "'.$row->tonicity12.'","dermatome": "'.$row->dermatome.'","gender42": "'.$row->gender42.'","gender43": "'.$row->gender43.'","gender44": "'.$row->gender44.'","level1" : "'.$row->level1.'","level": "'.$row->level.'","gender45": "'.$row->gender45.'","level2": "'.$row->level2.'","orthopedictest1": "'.$row->orthopedictest1.'","jacksonsr": "'.$row->jacksonsr.'","jacksonsl": "'.$row->jacksonsl.'","orthopedictest2": "'.$row->orthopedictest2.'","doublelegraiser" : "'.$row->doublelegraiser.'","doublelegraisel" : "'.$row->doublelegraisel.'","orthopedictest3" : "'.$row->orthopedictest3.'","yeomansr" : "'.$row->yeomansr.'","yeomansl": "'.$row->yeomansl.'","orthopedictest4" : "'.$row->orthopedictest4.'","foraminalr" : "'.$row->foraminalr.'","foraminall" : "'.$row->foraminall.'","orthopedictest5" : "'.$row->orthopedictest5.'","shoulderr": "'.$row->shoulderr.'","shoulderl": "'.$row->shoulderl.'","orthopedictest6" : "'.$row->orthopedictest6.'","orthopedicr" : "'.$row->orthopedicr.'","orthopedicl" : "'.$row->orthopedicl.'","gender46": "'.$row->gender46.'","gender47": "'.$row->gender47.'","gender48" : "'.$row->gender48.'","gender49" : "'.$row->gender49.'","gender50" : "'.$row->gender50.'","gender51": "'.$row->gender51.'","fracture" : "'.$row->fracture.'","gender52" : "'.$row->gender52.'","gender53" : "'.$row->gender53.'","gender54": "'.$row->gender54.'","presentlevel": "'.$row->presentlevel.'","gender55": "'.$row->gender55.'","osteophytes" : "'.$row->osteophytes.'", "gender56" : "'.$row->gender56.'", "tholrnormal" : "'.$row->tholrnormal.'", "gender57" : "'.$row->gender57.'", "gender58" : "'.$row->gender58.'","gender59" : "'.$row->gender59.'","gender60" : "'.$row->gender60.'","subluxations" : "'.$row->subluxations.'","icd1" : "'.$row->icd1.'","description1" : "'.$row->description1.'","icd2" : "'.$row->icd2.'","description2" : "'.$row->description2.'","icd3" : "'.$row->icd3.'","description3" : "'.$row->description3.'","icd4" : "'.$row->icd4.'","description4" : "'.$row->description4.'","gender61" : "'.$row->gender61.'","pname" : "'.$row->pname.'","date9" : "'.$row->date9.'","gender62" : "'.$row->gender62.'","gender63" : "'.$row->gender63.'","pname1" : "'.$row->pname1.'","datenew" : "'.$row->datenew.'", "gender64" : "'.$row->gender64.'", "gender65" : "'.$row->gender65.'", "poor" : "'.$row->poor.'", "gender67" : "'.$row->gender67.'","gender68" : "'.$row->gender68.'","gender69" : "'.$row->gender69.'","gender70" : "'.$row->gender70.'","pname2" : "'.$row->pname2.'","gender71" : "'.$row->gender71.'","highhpsisright" : "'.$row->highhpsisright.'","highhpsisleft" : "'.$row->highhpsisleft.'","highhpsisnormal" : "'.$row->highhpsisnormal.'" ,"gender75" : "'.$row->gender75.'","pname3" : "'.$row->pname3.'","sign": "'.$row->sign.'","message" : "1" } }';



                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'narrativeedit':
    {
       $username = $_POST['username'];
        $reportdate=$_POST['reportdate'];

        $patient=$_POST['patient'];
        $dateofinjury=$_POST['dateofinjury'];
        $dateoffirstvisit=$_POST['dateoffirstvisit'];
        $towhom=$_POST['towhom'];
        $patientname=$_POST['patientname'];
        $gender=$_POST['gender'];
        $accident=$_POST['accident'];
        $name=$_POST['name'];
        $dateofconsultation=$_POST['dateofconsultation'];
        $gender1=$_POST['gender1'];
        $gender2=$_POST['gender2'];
        $accidentdate=$_POST['accidentdate'];
        $gender3=$_POST['gender3'];
        $gender4=$_POST['gender4'];
        $gender5=$_POST['gender5'];
        $name1=$_POST['name1'];
        $gendernew=$_POST['gendernew'];
        $gender6=$_POST['gender6'];
        $gender7=$_POST['gender7'];
        $gender8=$_POST['gender8'];
        $gender9=$_POST['gender9'];
        $name2=$_POST['name2'];
        $body=$_POST['body'];
        $gender10=$_POST['gender10'];
        $slammed=$_POST['slammed'];
        $slammed1=$_POST['slammed1'];
        $symptom=$_POST['symptom'];
        $appeared=$_POST['appeared'];
        $priordate=$_POST['priordate'];
        $gender11=$_POST['gender11'];
        $name3=$_POST['name3'];
        $gender12=$_POST['gender12'];
        $pastmedicalhistory=$_POST['pastmedicalhistory'];
        $gender13=$_POST['gender13'];
        $gender14=$_POST['gender14'];
        $gender15=$_POST['gender15'];
        $gender16=$_POST['gender16'];
        $gender17=$_POST['gender17'];
        $gender18=$_POST['gender18'];
        $name4=$_POST['name4'];
        $clinicdate=$_POST['clinicdate'];
        $gender19=$_POST['gender19'];
        $vehicleaccident=$_POST['vehicleaccident'];
        $gender20=$_POST['gender20'];
        $gender21=$_POST['gender21'];
        $allieviated=$_POST['allieviated'];
        $gender22=$_POST['gender22'];
        $gender23=$_POST['gender23'];
        $gender24=$_POST['gender24'];
        $gendernew2=$_POST['gendernew2'];
        $gendernew3=$_POST['gendernew3'];
        $gender25=$_POST['gender25'];
        $gender26=$_POST['gender26'];
        $gender27=$_POST['gender27'];
        $gender28=$_POST['gender28'];
        $gender29=$_POST['gender29'];
        $gender30=$_POST['gender30'];
        $age=$_POST['age'];
        $age1=$_POST['age1'];
        $lb=$_POST['lb'];
        $gender31=$_POST['gender31'];
        $gender32=$_POST['gender32'];
        $gender33=$_POST['gender33'];
        $gender34=$_POST['gender34'];
        $gendernew4=$_POST['gendernew4'];
        $gender35=$_POST['gender35'];
        $gender36=$_POST['gender36'];
        $gender37=$_POST['gender37'];
        $gender38=$_POST['gender38'];
        $gender39=$_POST['gender39'];
        $gendernew5=$_POST['gendernew5'];
        $tenderness=$_POST['tenderness'];
        $gender40=addslashes($_POST['gender40']);
        $gendernew6=addslashes($_POST['gendernew6']);
        $gender41=addslashes($_POST['gender41']);
        $gender40=$_POST['gender40'];
        $gendernew6=$_POST['gendernew6'];
        $gender41=$_POST['gender41'];
        $noted=$_POST['noted'];
        $rangeofmotion=$_POST['rangeofmotion'];
        $painres1=$_POST['painres1'];
        $tonicity1=$_POST['tonicity1'];
        $painres2=$_POST['painres2'];
        $tonicity2=$_POST['tonicity2'];
        $painres3=$_POST['painres3'];
        $tonicity3=$_POST['tonicity3'];
        $painres4=$_POST['painres4'];
        $tonicity4=$_POST['tonicity4'];
        $painres5=$_POST['painres5'];
        $tonicity5=$_POST['tonicity5'];
        $painres6=$_POST['painres6'];
        $tonicity6=$_POST['tonicity6'];
        $painres7=$_POST['painres7'];
        $tonicity7=$_POST['tonicity7'];
        $painres8=$_POST['painres8'];
        $tonicity8=$_POST['tonicity8'];
        $painres9=$_POST['painres9'];
        $tonicity9=$_POST['tonicity9'];
        $painres10=$_POST['painres10'];
        $tonicity10=$_POST['tonicity10'];
        $painres11=$_POST['painres11'];
        $tonicity11=$_POST['tonicity11'];
        $painres12=$_POST['painres12'];
        $tonicity12=$_POST['tonicity12'];
        $dermatome=$_POST['dermatome'];
        $gender42=$_POST['gender42'];
        $gender43=$_POST['gender43'];
        $gender44=$_POST['gender44'];
        $level1=$_POST['level1'];
        $level=$_POST['level'];
        $gender45=$_POST['gender45'];
        $level2=$_POST['level2'];
        $orthopedictest1=$_POST['orthopedictest1'];
        $jacksonsr=$_POST['jacksonsr'];
        $jacksonsl=$_POST['jacksonsl'];
        $orthopedictest2=$_POST['orthopedictest2'];
        $doublelegraiser=$_POST['doublelegraiser'];
        $doublelegraisel=$_POST['doublelegraisel'];
        $orthopedictest3=$_POST['orthopedictest3'];
        $yeomansr=$_POST['yeomansr'];
        $yeomansl=$_POST['yeomansl'];
        $orthopedictest4=$_POST['orthopedictest4'];
        $foraminalr=$_POST['foraminalr'];
        $foraminall=$_POST['foraminall'];
        $orthopedictest5=$_POST['orthopedictest5'];
        $shoulderr=$_POST['shoulderr'];
        $shoulderl=$_POST['shoulderl'];
        $orthopedictest6=$_POST['orthopedictest6'];
        $orthopedicr=$_POST['orthopedicr'];
        $orthopedicl=$_POST['orthopedicl'];
        $gender46=$_POST['gender46'];
        $gender47=$_POST['gender47'];
        $gender48=$_POST['gender48'];
        $gender49=$_POST['gender49'];
        $gender50=$_POST['gender50'];
        $gender51=$_POST['gender51'];
        $fracture=$_POST['fracture'];
        $gender52=$_POST['gender52'];
        $gender53=$_POST['gender53'];
        $gender54=$_POST['gender54'];
        $presentlevel=$_POST['presentlevel'];
        $gender55=$_POST['gender55'];
        $osteophytes=$_POST['osteophytes'];
        $gender56=$_POST['gender56'];
        $gender57=$_POST['gender57'];
        $gender58=$_POST['gender58'];
        $gender59=$_POST['gender59'];
        $gender60=$_POST['gender60'];
        $subluxations=$_POST['subluxations'];
        $icd1=$_POST['icd1'];
        $description1=$_POST['description1'];
        $icd2=$_POST['icd2'];
        $description2=$_POST['description2'];
        $icd3=$_POST['icd3'];
        $description3=$_POST['description3'];
        $icd4=$_POST['icd4'];
        $description4=$_POST['description4'];
        $gender61=$_POST['gender61'];
        $pname=$_POST['pname'];
        $date9=$_POST['date9'];
        $gender62=$_POST['gender62'];
        $gender63=$_POST['gender63'];
        $pname1=$_POST['pname1'];
        $datenew=$_POST['datenew'];
        $gender64=$_POST['gender64'];
        $gender65=$_POST['gender65'];
        $poor=$_POST['poor'];
        $gender67=$_POST['gender67'];
        $gender68=$_POST['gender68'];
        $gender69=$_POST['gender69'];
        $gender70=$_POST['gender70'];
        $pname2=$_POST['pname2'];
        $gender71=$_POST['gender71'];
        $gender72=$_POST['gender72'];
        $gender73=$_POST['gender73'];
        $gender74=$_POST['gender74'];
        $gender75=$_POST['gender75'];
        $pname3=$_POST['pname3'];
        $sign=$_POST['sign'];





      /*      $username="silvi";
               $reportdate="sivliyarani";
               $name="sivliya";
               $patient="07";
               $dateofinjury="07/05/2014";
               $dateoffirstvisit="dateoffirstvisit";
               $towhom="towhom";
               $patientname="sivliya radasdf";
            $gender="gender";
            $accident="accident";
               $dateofconsultation="dateofconsultation";
               $gender1="gender1";
               $gender2="gender2";
               $accidentdate="accidentdate";
               $gender3="gender3";
               $gender4="gender4";
               $gender5="gender5";
               $name1="name1";
               $gendernew="gendernew";
               $gender6="gender6";
               $gender7="gender7";
               $gender8="gender8";
               $gender9="gender9";
               $name2="name2";
               $body="body";
               $gender10="gender10";
               $slammed="slammed";
               $slammed1="slammed1";
               $symptom="symptom";
               $appeared="appeared";

               $priordate="priordate";
               $gender11="gender11";
               $name3="name3";
               $gender12="gender12";
               $pastmedicalhistory="pastmedicalhistory";
               $gender13="gender13";
               $gender14="gender14";
               $gender15="gender15";
               $gender16="gender16";

               $gender17="gender17";
               $gender18="gender18";
               $name4="name4";
               $clinicdate="clinicdate";
               $gender19="gender19";
            $vehicleaccident="vehicleaccident";
            $gender20="gender20";
            $gender21="gender21";
               $allieviated="allieviated";
               $gender22="gender22";

               $gender23="gender23";
               $gender24="gender24";
               $gendernew2="gendernew2";

               $gendernew3="gendernew3";
               $gender25="gender25";
               $gender26="gender26";

               $gender27="gender27";
               $gender28="gender28";
               $gender29="gender29";

               $gender30="gender30";
               $age="age";
        $age1="age1";
               $lb="lb";

               $gender31="gender31";
               $gender32="gender32";
               $gender33="gender33";

               $gender34="gender34";
               $gendernew4="gendernew4";
               $gender35="gender35";
               $gender36="gender36";
               $gender37="gender37";
               $gender38="gender38";
               $gender39="gender39";
               $gendernew5="gendernew5";
            $tenderness="tenderness";
               $gender40="gender40";
               $gendernew6="gendernew6";
               $gender41="gender41";
               $noted="noted";
               $rangeofmotion="rangeofmotion";
               $painres1="painres1";
               $tonicity1="tonicity1";
               $painres2="painres2";
               $tonicity2="tonicity2";
               $painres3="painres3";
               $tonicity3="tonicity3";
               $painres4="painres4";
               $tonicity4="tonicity4";
               $painres5="painres5";
               $tonicity5="tonicity5";
               $painres6="painres6";
               $tonicity6="tonicity6";
               $painres7="painres7";
               $tonicity7="tonicity7";
               $painres8="painres8";
               $tonicity8="tonicity8";
               $painres9="painres9";

               $tonicity9="tonicity9";
               $painres10="painres10";
               $tonicity10="tonicity10";

               $painres11="painres11";
               $tonicity11="tonicity11";
               $painres12="painres12";
            $tonicity12="tonicity12";
            $dermatome="dermatome";
               $gender42="gender42";
               $gender43="gender43";
               $gender44="gender44";
               $level1="level1";
               $level="level";
               $gender45="gender45";
               $level1_explain="level1_explain";
               $during_after_crash="during_after_crash";
               $level2="level2";
               $orthopedictest1="orthopedictest1";
               $jacksonsr="jacksonsr";
               $jacksonsl="jacksonsl";
               $orthopedictest2="orthopedictest2";
               $doublelegraiser="doublelegraiser";
               $doublelegraisel="doublelegraisel";

               $orthopedictest3="orthopedictest3";
               $yeomansr="yeomansr";
               $yeomansl="yeomansl";
               $orthopedictest4="orthopedictest4";
               $foraminalr="foraminalr";
               $foraminall="foraminall";
               $orthopedictest5="orthopedictest5";
               $shoulderr="shoulderr";
               $shoulderl="shoulderl";
               $orthopedictest6="orthopedictest6";
               $orthopedicr="orthopedicr";

               $orthopedicl="orthopedicl";
               $gender46="gender46";
               $gender47="gender47";

               $gender48="gender48";
               $gender49="gender49";
               $gender50="gender50";

               $gender51="gender51";
               $fracture="fracture";
               $gender52="gender52";

               $gender53="gender53";
               $gender54="gender54";
               $presentlevel="presentlevel";

               $gender55="gender55";
               $osteophytes="osteophytes";
            $gender56="gender56";

               $gender57="gender57";
               $gender58="gender58";
               $gender59="gender59";
               $gender60="gender60";
               $subluxations="subluxations";
               $icd1="icd1";
               $description1="description1";
               $icd2="icd2";
               $description2="description2";
               $icd3="icd3";
               $description3="description3";
               $icd4="icd4";
               $description4="description4";
               $gender61="gender61";
               $pname="pname";
               $date9="date9";
               $gender62="gender62";
               $gender63="gender63";
               $pname1="pname1";
               $datenew="datenew";
            $gender64="gender64";
            $gender65="gender65";
            $poor="poor";
            $gender67="gender67";
            $gender68="gender68";
            $gender69="gender69";
               $gender70="gender70";
               $pname2="pname2";
               $gender71="gender71";
               $gender72="gender72";
               $gender73="gender73";
               $gender74="gender74";

               $gender75="gender75";
               $pname3="pname3";
               $sign="sign";

*/

        $sql2="update tbl_narrativereport set username ='".$username."',reportdate ='".$reportdate."',name ='" .$name."',patient ='".$patient."',dateofinjury ='" .$dateofinjury."',dateoffirstvisit ='" .$dateoffirstvisit."',towhom ='" .$towhom."',patientname ='" .$patientname."',gender ='" .$gender."',accident ='" .$accident."',dateofconsultation ='" .$dateofconsultation."',gender1 ='" .$gender1."',gender2 ='" .$gender2."',accidentdate ='" .$accidentdate."',gender3 ='" .$gender3."',gender4 ='" .$gender4."',gender5 ='" .$gender5."',name1 ='" .$name1."',gendernew ='" .$gendernew."',gender6 ='" .$gender6."',gender7 ='" .$gender7."',gender8 ='" .$gender8."',gender9 ='" .$gender9."',name2 ='" .$name2."',body ='" .$body."',gender10 ='" .$gender10."',slammed ='" .$slammed."',slammed1 ='" .$slammed1."',symptom ='" .$symptom."',appeared ='" .$appeared. "',priordate ='" .$priordate."',gender11 ='" .$gender11."',name3='" .$name3."',gender12='" .$gender12."',pastmedicalhistory='" .$pastmedicalhistory."',gender13='" .$gender13."',gender14 ='" .$gender14."',gender15='" .$gender15."',gender16='" .$gender16."',gender17='" .$gender17."',gender18='" .$gender18."',name4='" .$name4."',clinicdate='" .$clinicdate."',gender19='" .$gender19."',vehicleaccident ='" .$vehicleaccident."',gender20 ='" .$gender20."',gender21 ='" .$gender21."',allieviated ='" .$allieviated."',gender22 ='" .$gender22."',gender23='" .$gender23."',gender24 ='" .$gender24."',gendernew2 ='" .$gendernew2."',gendernew3 ='" .$gendernew3."',gender25='" .$gender25."',gender26='" .$gender26."',gender27 ='" .$gender27."',gender28='" .$gender28."',gender29 ='" .$gender29."',gender30='" .$gender30."',age='" .$age."',age1='" .$age1."',lb ='" .$lb."',gender31 ='" .$gender31."',gender32 ='" .$gender32."',gender33='" .$gender33."',gender34 ='" .$gender34."',gendernew4 ='" .$gendernew4."',gender35 ='" .$gender35."',gender36='" .$gender36."',gender37='" .$gender37."',gender38 ='" .$gender38."',gender39='" .$gender39."',gendernew5 ='".$gendernew5."' ,tenderness ='".$tenderness."',gender40 ='" .$gender40."',gendernew6 ='".$gendernew6."',gender41 ='" .$gender41."',noted ='" .$noted."',rangeofmotion ='" .$rangeofmotion."',painres1 ='" .$painres1."',tonicity1 ='" .$tonicity1."',painres2 ='" .$painres2."',tonicity2 ='" .$tonicity2."',painres3 ='" .$painres3."',tonicity3 ='" .$tonicity3."',painres4 ='" .$painres4."',tonicity4 ='" .$tonicity4."',painres5 ='" .$painres5."',tonicity5 ='" .$tonicity5."',painres6 ='" .$painres6."',tonicity6 ='" .$tonicity6."',painres7 ='" .$painres7."',tonicity7 ='" .$tonicity7."',painres8 ='" .$painres8."',tonicity8 ='" .$tonicity8."',painres9 ='" .$painres9."',tonicity9 ='" .$tonicity9."',painres10 ='" .$painres10."',tonicity10 ='" .$tonicity10. "',painres11 ='" .$painres11."',tonicity11 ='" .$tonicity11."',painres12='" .$painres12."',tonicity12='" .$tonicity12."',dermatome='" .$dermatome."',gender42='" .$gender42."',gender43='" .$gender43."',gender44='" .$gender44."',level1 ='" .$level1."',level='" .$level."',gender45='" .$gender45."',level2='" .$level2."',orthopedictest1='" .$orthopedictest1."',jacksonsr='" .$jacksonsr."',jacksonsl='" .$jacksonsl."',orthopedictest2='" .$orthopedictest2."',doublelegraiser ='" .$doublelegraiser."',doublelegraisel ='" .$doublelegraisel."',orthopedictest3 ='" .$orthopedictest3."',yeomansr ='" .$yeomansr."',yeomansl='" .$yeomansl."',orthopedictest4 ='" .$orthopedictest4."',foraminalr ='" .$foraminalr."',foraminall ='" .$foraminall."',orthopedictest5 ='" .$orthopedictest5."',shoulderr='" .$shoulderr."',shoulderl='" .$shoulderl."',orthopedictest6 ='" .$orthopedictest6."',orthopedicr ='" .$orthopedicr."',orthopedicl ='" .$orthopedicl."',gender46='" .$gender46."',gender47='" .$gender47."',gender48 ='" .$gender48."',gender49 ='" .$gender49."',gender50 ='" .$gender50."',gender51='" .$gender51."',fracture ='" .$fracture."',gender52 ='" .$gender52."',gender53 ='" .$gender53."',gender54='" .$gender54."',presentlevel='" .$presentlevel."',gender55='" .$gender55."',osteophytes ='".$osteophytes."' ,gender56 ='".$gender56."',gender57 ='".$gender57."',gender58 ='" .$gender58."',gender59 ='" .$gender59."',gender60 ='" .$gender60."',subluxations ='" .$subluxations."',icd1 ='" .$icd1."',description1 ='" .$description1."',icd2 ='" .$icd2."',description2 ='" .$description2."',icd3 ='" .$icd3."',description3 ='" .$description3."',icd4 ='" .$icd4."',description4 ='" .$description4."',gender61 ='" .$gender61."',pname ='" .$pname."',date9 ='" .$date9."',gender62 ='" .$gender62."',gender63 ='" .$gender63."',pname1 ='" .$pname1."',datenew ='" .$datenew."',gender64 ='".$gender64."',gender65 ='" .$gender65."',poor ='".$poor."',gender67 ='" .$gender67."',gender68 ='" .$gender68."',gender69 ='" .$gender69."',gender70 ='" .$gender70."',pname2 ='" .$pname2."',gender71 ='" .$gender71."',gender72 ='" .$gender72."',gender73 ='" .$gender73."',gender74 ='" .$gender74. "',gender75 ='" .$gender75."',pname3 ='" .$pname3."',sign='" .$sign."' WHERE  username ='".$username."'";




//echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'narrativeinsert':
    {


        $username=$_POST['username'];
        $reportdate=$_POST['reportdate'];

        $patient=$_POST['patient'];
        $dateofinjury=$_POST['dateofinjury'];
        $dateoffirstvisit=$_POST['dateoffirstvisit'];
        $towhom=$_POST['towhom'];
        $patientname=$_POST['patientname'];
        $gender=$_POST['gender'];
        $accident=$_POST['accident'];
        $name=$_POST['name'];
        $dateofconsultation=$_POST['dateofconsultation'];
        $gender1=$_POST['gender1'];
        $gender2=$_POST['gender2'];
        $accidentdate=$_POST['accidentdate'];
        $gender3=$_POST['gender3'];
        $gender4=$_POST['gender4'];
        $gender5=$_POST['gender5'];
        $name1=$_POST['name1'];
        $gendernew=$_POST['gendernew'];
        $gender6=$_POST['gender6'];
        $gender7=$_POST['gender7'];
        $gender8=$_POST['gender8'];
        $gender9=$_POST['gender9'];
        $name2=$_POST['name2'];
        $body=$_POST['body'];
        $gender10=$_POST['gender10'];
        $slammed=$_POST['slammed'];
        $slammed1=$_POST['slammed1'];
        $symptom=$_POST['symptom'];
        $appeared=$_POST['appeared'];
        $priordate=$_POST['priordate'];
        $gender11=$_POST['gender11'];
        $name3=$_POST['name3'];
        $gender12=$_POST['gender12'];
        $pastmedicalhistory=$_POST['pastmedicalhistory'];
        $gender13=$_POST['gender13'];
        $gender14=$_POST['gender14'];

        $gender15=$_POST['gender15'];
        $gender16=$_POST['gender16'];
        $gender17=$_POST['gender17'];
        $gender18=$_POST['gender18'];
        $name4=$_POST['name4'];
        $clinicdate=$_POST['clinicdate'];
        $gender19=$_POST['gender19'];
        $vehicleaccident=$_POST['vehicleaccident'];
        $gender20=$_POST['gender20'];
        $gender21=$_POST['gender21'];

        $allieviated=$_POST['allieviated'];
        $gender22=$_POST['gender22'];
        $gender23=$_POST['gender23'];
        $gender24=$_POST['gender24'];
        $gendernew2=$_POST['gendernew2'];
        $gendernew3=$_POST['gendernew3'];
        $gender25=$_POST['gender25'];
        $gender26=$_POST['gender26'];
        $gender27=$_POST['gender27'];
        $gender28=$_POST['gender28'];
        $gender29=$_POST['gender29'];
        $gender30=$_POST['gender30'];
        $age=$_POST['age'];
        $age1=$_POST['age1'];
        $lb=$_POST['lb'];
        $gender31=$_POST['gender31'];
        $gender32=$_POST['gender32'];
        $gender33=$_POST['gender33'];
        $gender34=$_POST['gender34'];
        $gendernew4=$_POST['gendernew4'];
        $gender35=$_POST['gender35'];

        $gender36=$_POST['gender36'];
        $gender37=$_POST['gender37'];
        $gender38=$_POST['gender38'];
        $gender39=$_POST['gender39'];
        $gendernew5=$_POST['gendernew5'];

        $tenderness=$_POST['tenderness'];
        $gender40=addslashes($_POST['gender40']);
        $gendernew6=addslashes($_POST['gendernew6']);
        $gender41=addslashes($_POST['gender41']);
        $noted=$_POST['noted'];
        $rangeofmotion=$_POST['rangeofmotion'];
        $painres1=$_POST['painres1'];
        $tonicity1=$_POST['tonicity1'];
        $painres2=$_POST['painres2'];
        $tonicity2=$_POST['tonicity2'];
        $painres3=$_POST['painres3'];
        $tonicity3=$_POST['tonicity3'];
        $painres4=$_POST['painres4'];
        $tonicity4=$_POST['tonicity4'];
        $painres5=$_POST['painres5'];
        $tonicity5=$_POST['tonicity5'];
        $painres6=$_POST['painres6'];
        $tonicity6=$_POST['tonicity6'];
        $painres7=$_POST['painres7'];
        $tonicity7=$_POST['tonicity7'];
        $painres8=$_POST['painres8'];
        $tonicity8=$_POST['tonicity8'];
        $painres9=$_POST['painres9'];
        $tonicity9=$_POST['tonicity9'];
        $painres10=$_POST['painres10'];
        $tonicity10=$_POST['tonicity10'];
        $painres11=$_POST['painres11'];
        $tonicity11=$_POST['tonicity11'];
        $painres12=$_POST['painres12'];
        $tonicity12=$_POST['tonicity12'];
        $dermatome=$_POST['dermatome'];

        $gender42=$_POST['gender42'];
        $gender43=$_POST['gender43'];
        $gender44=$_POST['gender44'];
        $level1=$_POST['level1'];
        $level=$_POST['level'];
        $gender45=$_POST['gender45'];
        $level2=$_POST['level2'];
        $orthopedictest1=$_POST['orthopedictest1'];
        $jacksonsr=$_POST['jacksonsr'];
        $jacksonsl=$_POST['jacksonsl'];
        $orthopedictest2=$_POST['orthopedictest2'];
        $doublelegraiser=$_POST['doublelegraiser'];
        $doublelegraisel=$_POST['doublelegraisel'];

        $orthopedictest3=$_POST['orthopedictest3'];
        $yeomansr=$_POST['yeomansr'];
        $yeomansl=$_POST['yeomansl'];
        $orthopedictest4=$_POST['orthopedictest4'];
        $foraminalr=$_POST['foraminalr'];
        $foraminall=$_POST['foraminall'];
        $orthopedictest5=$_POST['orthopedictest5'];
        $shoulderr=$_POST['shoulderr'];
        $shoulderl=$_POST['shoulderl'];
        $orthopedictest6=$_POST['orthopedictest6'];
        $orthopedicr=$_POST['orthopedicr'];

        $orthopedicl=$_POST['orthopedicl'];
        $gender46=$_POST['gender46'];
        $gender47=$_POST['gender47'];

        $gender48=$_POST['gender48'];
        $gender49=$_POST['gender49'];
        $gender50=$_POST['gender50'];

        $gender51=$_POST['gender51'];
        $fracture=$_POST['fracture'];
        $gender52=$_POST['gender52'];

        $gender53=$_POST['gender53'];
        $gender54=$_POST['gender54'];
        $presentlevel=$_POST['presentlevel'];

        $gender55=$_POST['gender55'];
        $osteophytes=$_POST['osteophytes'];
        $gender56=$_POST['gender56'];

        $gender57=$_POST['gender57'];

        $gender58=$_POST['gender58'];
        $gender59=$_POST['gender59'];
        $gender60=$_POST['gender60'];
        $subluxations=$_POST['subluxations'];
        $icd1=$_POST['icd1'];
        $description1=$_POST['description1'];
        $icd2=$_POST['icd2'];
        $description2=$_POST['description2'];
        $icd3=$_POST['icd3'];
        $description3=$_POST['description3'];
        $icd4=$_POST['icd4'];
        $description4=$_POST['description4'];
        $gender61=$_POST['gender61'];
        $pname=$_POST['pname'];
        $date9=$_POST['date9'];
        $gender62=$_POST['gender62'];
        $gender63=$_POST['gender63'];
        $pname1=$_POST['pname1'];
        $datenew=$_POST['datenew'];
        $gender64=$_POST['gender64'];
        $gender65=$_POST['gender65'];
        $poor=$_POST['poor'];
        $gender67=$_POST['gender67'];
        $gender68=$_POST['gender68'];
        $gender69=$_POST['gender69'];

        $gender70=$_POST['gender70'];
        $pname2=$_POST['pname2'];
        $gender71=$_POST['gender71'];
        $gender72=$_POST['gender72'];
        $gender73=$_POST['gender73'];
        $gender74=$_POST['gender74'];
        $gender75=$_POST['gender75'];
        $pname3=$_POST['pname3'];
        $sign=$_POST['sign'];





 /*       $username="silvi";
         $reportdate="reportdate";
         $name="name";
         $patient="patient";
         $dateofinjury="dateofinjury";
         $dateoffirstvisit="dateoffirstvisit";
         $towhom="towhom";
         $patientname="patientname";
        $gender="gender";
         $accident="accident";
         $dateofconsultation="dateofconsultation";
         $gender1="gender1";
         $gender2="gender2";
         $accidentdate="accidentdate";
         $gender3="gender3";
         $gender4="gender4";
         $gender5="gender5";
         $name1="name1";
         $gendernew="gendernew";
         $gender6="gender6";
         $gender7="gender7";
         $gender8="gender8";
         $gender9="gender9";
         $name2="name2";
         $body="body";
         $gender10="gender10";
         $slammed="slammed";
         $slammed1="slammed1";
         $symptom="symptom";
         $appeared="appeared";

       $priordate="priordate";
       $gender11="gender11";
       $name3="name3";
       $gender12="gender12";
       $pastmedicalhistory="pastmedicalhistory";
       $gender13="gender13";
       $gender14="gender14";
       $gender15="gender15";
       $gender16="gender16";
       $gender17="gender17";
       $gender18="gender18";
       $name4="name4";
       $clinicdate="clinicdate";
       $gender19="gender19";
        $vehicleaccident="vehicleaccident";
        $gender20="gender20";
        $gender21="gender21";
       $allieviated="allieviated";
       $gender22="gender22";
       $gender23="gender23";
       $gender24="gender24";
       $gendernew2="gendernew2";

       $gendernew3="gendernew3";
       $gender25="gender25";
       $gender26="gender26";

       $gender27="gender27";
       $gender28="gender28";
       $gender29="gender29";

       $gender30="gender30";
       $age="age";
        $age1="age1";
       $lb="lb";

       $gender31="gender31";
       $gender32="gender32";
       $gender33="gender33";

       $gender34="gender34";
       $gendernew4="gendernew4";
       $gender35="gender35";
       $gender36="gender36";
       $gender37="gender37";
       $gender38="gender38";
       $gender39="gender39";
       $gendernew5="gendernew5";
        $tenderness="tenderness";
         $gender40="gender40";
         $gendernew6="gendernew6";
         $gender41="gender41";
         $noted="noted";
         $rangeofmotion="rangeofmotion";
         $painres1="painres1";
         $tonicity1="tonicity1";
         $painres2="painres2";
         $tonicity2="tonicity2";
         $painres3="painres3";
         $tonicity3="tonicity3";
         $painres4="painres4";
         $tonicity4="tonicity4";
         $painres5="painres5";
         $tonicity5="tonicity5";
         $painres6="painres6";
         $tonicity6="tonicity6";
         $painres7="painres7";
         $tonicity7="tonicity7";
         $painres8="painres8";
         $tonicity8="tonicity8";
         $painres9="painres9";

         $tonicity9="tonicity9";
         $painres10="painres10";
         $tonicity10="tonicity10";

       $painres11="painres11";
       $tonicity11="tonicity11";
       $painres12="painres12";
        $tonicity12="tonicity12";
        $dermatome="dermatome";
       $gender42="gender42";
       $gender43="gender43";
       $gender44="gender44";
       $level1="level1";
       $level="level";
       $gender45="gender45";
       $level2="level2";
       $orthopedictest1="orthopedictest1";
       $jacksonsr="jacksonsr";
       $jacksonsl="jacksonsl";
       $orthopedictest2="orthopedictest2";
       $doublelegraiser="doublelegraiser";
       $doublelegraisel="doublelegraisel";

       $orthopedictest3="orthopedictest3";
       $yeomansr="yeomansr";
       $yeomansl="yeomansl";
       $orthopedictest4="orthopedictest4";
       $foraminalr="foraminalr";
       $foraminall="foraminall";
       $orthopedictest5="orthopedictest5";
       $shoulderr="shoulderr";
       $shoulderl="shoulderl";
       $orthopedictest6="orthopedictest6";
       $orthopedicr="orthopedicr";

       $orthopedicl="orthopedicl";
       $gender46="gender46";
       $gender47="gender47";

       $gender48="gender48";
       $gender49="gender49";
       $gender50="gender50";

       $gender51="gender51";
       $fracture="fracture";
       $gender52="gender52";

       $gender53="gender53";
       $gender54="gender54";
       $presentlevel="presentlevel";

       $gender55="gender55";
       $osteophytes="osteophytes";
        $gender56="gender56";

           $gender57="gender57";
           $gender58="gender58";
           $gender59="gender59";
           $gender60="gender60";
           $subluxations="subluxations";
           $icd1="icd1";
           $description1="description1";
           $icd2="icd2";
           $description2="description2";
           $icd3="icd3";
           $description3="description3";
           $icd4="icd4";
           $description4="description4";
           $gender61="gender61";
           $pname="pname";
           $date9="date9";
           $gender62="gender62";
           $gender63="gender63";
           $pname1="pname1";
           $datenew="datenew";
        $gender64="gender64";
        $gender65="gender65";
        $poor="poor";
        $gender67="gender67";
        $gender68="gender68";
        $gender69="gender69";
           $gender70="gender70";
           $pname2="pname2";
           $gender71="gender71";
           $gender72="gender72";
           $gender73="gender73";
           $gender74="gender74";

           $gender75="gender75";
           $pname3="pname3";
           $sign="sign";


*/


        $sql3="insert into tbl_narrativereport(narrativeno,username,reportdate,name,patient,dateofinjury,dateoffirstvisit,towhom,patientname,gender,accident,dateofconsultation,gender1,gender2,accidentdate,gender3,gender4,gender5,name1,gendernew,gender6,gender7,gender8,gender9,name2,body,gender10,slammed,slammed1,symptom,appeared,priordate,gender11,name3,gender12,pastmedicalhistory,gender13,gender14,gender15,gender16,gender17,gender18,name4,clinicdate,gender19,vehicleaccident,gender20,gender21,allieviated,gender22,gender23,gender24,gendernew2,gendernew3,gender25,gender26,gender27,gender28,gender29,gender30,age,age1,lb,gender31,gender32,gender33,gender34,gendernew4,gender35,gender36,gender37,gender38,gender39,gendernew5,tenderness,gender40,gendernew6,gender41,noted,rangeofmotion,painres1,tonicity1,painres2,tonicity2,painres3,tonicity3,painres4,tonicity4,painres5,tonicity5,painres6,tonicity6,painres7,tonicity7,painres8,tonicity8,painres9,tonicity9,painres10,tonicity10,painres11,tonicity11,painres12,tonicity12,dermatome,gender42,gender43,gender44,level1,level,gender45,level2,orthopedictest1,jacksonsr,jacksonsl,orthopedictest2,doublelegraiser,doublelegraisel,orthopedictest3,yeomansr,yeomansl,orthopedictest4,foraminalr,foraminall,orthopedictest5,shoulderr,shoulderl,orthopedictest6,orthopedicr,orthopedicl,gender46,gender47,gender48,gender49,gender50,gender51,fracture,gender52,gender53,gender54,presentlevel,gender55,osteophytes,gender56,gender57,gender58,gender59,gender60,subluxations,icd1,description1,icd2,description2,icd3,description3,icd4,description4,gender61,pname,date9,gender62,gender63,pname1,datenew,gender64,gender65,poor,gender67,gender68,gender69,gender70,pname2,gender71,gender72,gender73,gender74,gender75,pname3,sign)values ('', '".$username."', '".$reportdate."','".$name."', '".$patient."','".$dateofinjury."', '".$dateoffirstvisit."', '".$towhom."', '".$patientname."','".$gender."', '".$accident."','".$dateofconsultation."', '".$gender1."','".$gender2."', '".$accidentdate."','".$gender3."', '".$gender4."', '".$gender5."', '".$name1."','".$gendernew."', '".$gender6."', '".$gender7."', '".$gender8."', '".$gender9."', '".$name2."', '".$body."','".$gender10."','".$slammed."', '".$slammed1."','".$symptom."', '".$appeared."' ,'".$priordate."','".$gender11."','".$name3."', '".$gender12."', '".$pastmedicalhistory."','".$gender13."','".$gender14."', '".$gender15."','".$gender16."','".$gender17."','".$gender18."','".$name4."','".$clinicdate."','".$gender19."','".$vehicleaccident."','".$gender20."','".$gender21."','".$allieviated."', '".$gender22."','".$gender23."','".$gender24."','".$gendernew2."','".$gendernew3."','".$gender25."', '".$gender26."', '".$gender27."','".$gender28."','".$gender29."','".$gender30."','".$age."','".$age1."','".$lb."','".$gender31."','".$gender32."','".$gender33."','".$gender34."','".$gendernew4."','".$gender35."','".$gender36."','".$gender37."','".$gender38."','".$gender39."','".$gendernew5."', '".$tenderness."','".$gender40."', '".$gendernew6."','".$gender41."', '".$noted."', '".$rangeofmotion."', '".$painres1."', '".$tonicity1."','".$painres2."', '".$tonicity2."','".$painres3."', '".$tonicity3."','".$painres4."', '".$tonicity4."', '".$painres5."', '".$tonicity5."','".$painres6."', '".$tonicity6."', '".$painres7."', '".$tonicity7."', '".$painres8."', '".$tonicity8."', '".$painres9."', '".$tonicity9."','".$painres10."', '".$tonicity10."' ,'".$painres11."','".$tonicity11."','".$painres12."','".$tonicity12."','".$dermatome."', '".$gender42."', '".$gender43."','".$gender44."','".$level1."', '".$level."','".$gender45."','".$level2."','".$orthopedictest1."','".$jacksonsr."','".$jacksonsl."','".$orthopedictest2."','".$doublelegraiser."','".$doublelegraisel."', '".$orthopedictest3."','".$yeomansr."','".$yeomansl."','".$orthopedictest4."','".$foraminalr."','".$foraminall."','".$orthopedictest5."','".$shoulderr."', '".$shoulderl."', '".$orthopedictest6."', '".$orthopedicr."','".$orthopedicl."','".$gender46."','".$gender47."','".$gender48."','".$gender49."','".$gender50."','".$gender51."','".$fracture."','".$gender52."','".$gender53."','".$gender54."','".$presentlevel."','".$gender55."','".$osteophytes."', '".$gender56."', '".$gender57."','".$gender58."', '".$gender59."', '".$gender60."', '".$subluxations."', '".$icd1."','".$description1."', '".$icd2."','".$description2."', '".$icd3."','".$description3."', '".$icd4."', '".$description4."', '".$gender61."','".$pname."', '".$date9."', '".$gender62."', '".$gender63."', '".$pname1."', '".$datenew."','".$gender64."','".$gender65."', '".$poor."','".$gender67."', '".$gender68."', '".$gender69."', '".$gender70."','".$pname2."','".$gender71."', '".$gender72."','".$gender73."', '".$gender74."' ,'".$gender75."','".$pname3."','".$sign."')";



       // echo $sql3;

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'narrativedelete':
    {
        $username= $_POST['username'];
//       $username= "silvi";
        $sql4 ="delete from tbl_narrativereport where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
    case 'narrativepatientnameselect':
    {

        $username = $_POST['username'];
//        $username = "silvi";
        $flag=0;
        $sql1 ="SELECT t1.weight,t1.gait,t1.posture,t1.weight1, t2.Name FROM tbl_physicalexam t1 Inner join patient_details t2 ON t1.patient_id=t2.username where username='".$username."'";

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "narrativeuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);
                    $json 		.= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "Yes", "Name" : "'.$row->Name.'","weight" : "'.$row->weight.'","weight1" : "'.$row->weight1.'","gait" : "'.$row->gait.'","posture" : "'.$row->posture.'","message" : "1" } }';

                }



                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "narrative Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>