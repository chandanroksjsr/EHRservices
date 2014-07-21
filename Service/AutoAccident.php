<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'autoaccidentselect':
    {

        $username = $_POST['username'];
       // $username = "priya";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_autoaccident WHERE username='$username'";
       // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
               // echo "in flag==1";
               // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "Yes", "autoaccidentuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "Yes", "patient_number" : "'.$row->patient_number.'", "username" : "'.$row->username.'", "claimnumber" : "'.$row->claimnumber.'", "adjustersname" : "'.$row->adjustersname.'", "estimate" : "'.$row->estimate.'", "seating" : "'.$row->seating.'","companion" : "'.$row->companion.'","vehicle_make" : "'.$row->vehicle_make.'","vehicle_model" : "'.$row->vehicle_model.'","vehicle_year" : "'.$row->vehicle_year.'","vehicle_hit" : "'.$row->vehicle_hit.'","other_vehicle_make" : "'.$row->other_vehicle_make.'","other_vehicle_model" : "'.$row->other_vehicle_model.'","other_vehicle_year" : "'.$row->other_vehicle_year.'","carstopped" : "'.$row->carstopped.'","driverposition" : "'.$row->driverposition.'","vehicle_moving_time" : "'.$row->vehicle_moving_time.'","wascar" : "'.$row->wascar.'","estimated_rate" : "'.$row->estimated_rate.'","time_of_day" : "'.$row->time_of_day.'","road_conditions" : "'.$row->road_conditions.'","conditions" : "'.$row->conditions.'","head_restraints" : "'.$row->head_restraints.'","seatpos_after_accident" : "'.$row->seatpos_after_accident.'","seat_after_accident" : "'.$row->seat_after_accident.'","lap_seat_belt" : "'.$row->lap_seat_belt.'","shoulder_seat_belt" : "'.$row->shoulder_seat_belt.'","airbag" : "'.$row->airbag.'","wereyou" : "'.$row->wereyou.'","body_position" : "'.$row->body_position.'" ,"body_position1" : "'.$row->body_position1.'","head_position" : "'.$row->head_position.'","head_position1": "'.$row->head_position1.'","hands_on_wheel": "'.$row->hands_on_wheel.'","aware_of_crash": "'.$row->aware_of_crash.'","brace": "'.$row->brace.'","ifyes" : "'.$row->ifyes.'","further_injury": "'.$row->further_injury.'","injurytext": "'.$row->injurytext.'","patient_body": "'.$row->patient_body.'","patient_body1": "'.$row->patient_body1.'","body_strike": "'.$row->body_strike.'","head_hit": "'.$row->head_hit.'","rlshoulder_hit": "'.$row->rlshoulder_hit.'","rlhip_hit" : "'.$row->rlhip_hit.'","rlknee_hit" : "'.$row->rlknee_hit.'","chest_hit" : "'.$row->chest_hit.'","rlarm_hit" : "'.$row->rlarm_hit.'","rlleg_hit" : "'.$row->rlleg_hit.'","otherpart_hit": "'.$row->otherpart_hit.'","wearing_glasses" : "'.$row->wearing_glasses.'","glasses_impact" : "'.$row->glasses_impact.'","unconscious" : "'.$row->unconscious.'","uncon" : "'.$row->uncon.'","estimated_amount": "'.$row->estimated_amount.'","damage": "'.$row->damage.'","was_anyone_cited" : "'.$row->was_anyone_cited.'","who" : "'.$row->who.'","headache": "'.$row->headache.'","dizziness" : "'.$row->dizziness.'","nausea": "'.$row->nausea.'","confusion": "'.$row->confusion.'","disorientation": "'.$row->disorientation.'","neckpain" : "'.$row->neckpain.'","otherpain" : "'.$row->otherpain.'","otherpaintext" : "'.$row->otherpaintext.'","first_symptom" : "'.$row->first_symptom.'","symptom": "'.$row->symptom.'","after_accident" : "'.$row->after_accident.'","accident" : "'.$row->accident.'","hosname" : "'.$row->hosname.'","city" : "'.$row->city.'","staylength": "'.$row->staylength.'","hospitalget": "'.$row->hospitalget.'","hospital1" : "'.$row->hospital1.'","xray": "'.$row->xray.'","wrong" : "'.$row->wrong.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'autoaccidentedit':
    {
           $username=$_POST['username'];
         $claimnumber=$_POST['claimnumber'];
         $adjustersname=$_POST['adjustersname'];
         $estimate=addslashes($_POST['estimate']);

         $seating=$_POST['seating'];
         $companion=$_POST['companion'];
         $vehicle_make=$_POST['vehicle_make'];
         $vehicle_model=$_POST['vehicle_model'];
         $vehicle_year=$_POST['vehicle_year'];
         $vehicle_hit=$_POST['vehicle_hit'];
         $other_vehicle_make=$_POST['other_vehicle_make'];
         $other_vehicle_model=$_POST['other_vehicle_model'];
         $other_vehicle_year=$_POST['other_vehicle_year'];
         $carstopped=$_POST['carstopped'];
         $driverposition=$_POST['driverposition'];
         $vehicle_moving_time=$_POST['vehicle_moving_time'];
         $wascar=$_POST['wascar'];
         $estimated_rate=$_POST['estimated_rate'];
         $time_of_day=$_POST['time_of_day'];
         $road_conditions=$_POST['road_conditions'];
         $conditions=$_POST['conditions'];
         $head_restraints=addslashes($_POST['head_restraints']);
         $seatpos_after_accident=addslashes($_POST['seatpos_after_accident']);
         $seat_after_accident=$_POST['seat_after_accident'];
         $lap_seat_belt=addslashes($_POST['lap_seat_belt']);
         $shoulder_seat_belt=addslashes($_POST['shoulder_seat_belt']);
         $airbag=$_POST['airbag'];
         $wereyou=$_POST['wereyou'];
         $body_position=$_POST['body_position'];
         $body_position1=$_POST['body_position1'];
         $head_position=$_POST['head_position'];
         $head_position1=$_POST['head_position1'];
         $hands_on_wheel=$_POST['hands_on_wheel'];
         $aware_of_crash=$_POST['aware_of_crash'];
         $brace=$_POST['brace'];
         $ifyes=$_POST['ifyes'];
         $further_injury=$_POST['further_injury'];
         $injurytext=$_POST['injurytext'];
         //$ifyes_explain=$_POST['ifyes_explain'];
         //$during_after_crash=$_POST['during_after_crash'];
         $patient_body=$_POST['patient_body'];
         $patient_body1=$_POST['patient_body1'];
         $body_strike=$_POST['body_strike'];
         $head_hit=$_POST['head_hit'];
         $rlshoulder_hit=$_POST['rlshoulder_hit'];
         $rlhip_hit=$_POST['rlhip_hit'];
         $rlknee_hit=$_POST['rlknee_hit'];
         $chest_hit=$_POST['chest_hit'];
         $rlarm_hit=$_POST['rlarm_hit'];
         $rlleg_hit=$_POST['rlleg_hit'];
         $otherpart_hit=$_POST['otherpart_hit'];
         $wearing_glasses=$_POST['wearing_glasses'];
         $glasses_impact=$_POST['glasses_impact'];
         $unconscious=$_POST['unconscious'];
         $uncon=$_POST['uncon'];
         $estimated_amount=$_POST['estimated_amount'];
         $damage=$_POST['damage'];
         $was_anyone_cited=$_POST['was_anyone_cited'];
         $who=$_POST['who'];
         $headache=$_POST['headache'];
         $dizziness=$_POST['dizziness'];
         $nausea=$_POST['nausea'];
         $confusion=$_POST['confusion'];
         $disorientation=$_POST['disorientation'];
         $neckpain=$_POST['neckpain'];
         $otherpain=$_POST['otherpain'];
         $otherpaintext=$_POST['otherpaintext'];
         $first_symptom=$_POST['first_symptom'];
         $symptom=$_POST['symptom'];
         $after_accident=$_POST['after_accident'];
         $accident=$_POST['accident'];
         $hosname=$_POST['hosname'];
         $city=$_POST['city'];
         $staylength=$_POST['staylength'];
         $hospitalget=$_POST['hospitalget'];
         $hospital1=$_POST['hospital1'];
         $xray=$_POST['xray'];
         $wrong=$_POST['wrong'];


     /*   $username="priya";
        $claimnumber="claimnumber";
        $adjustersname="adjustersname";
        $estimate="estimate";
        $seating="seating";
        $companion="companion";
        $vehicle_make="vehicle_make";
        $vehicle_model="vehicle_model";
        $vehicle_year="vehicle_year";
        $vehicle_hit="vehicle_hit";
        $other_vehicle_make="other_vehicle_make";
        $other_vehicle_model="other_vehicle_model";
        $other_vehicle_year="other_vehicle_year";
        $carstopped="carstopped";
        $driverposition="driver_position";
        $vehicle_moving_time="vehicle_moving_time";
        $wascar="wascar";
        $estimated_rate="estimated_rate";
        $time_of_day="time_of_day";
        $road_conditions="road_conditions";
        $conditions="conditions";
        $head_restraints="head_restraints";
        $seatpos_after_accident="seatpos_after_accident";
        $seat_after_accident="seat_after_accident";
        $lap_seat_belt="lap_seat_belt";
        $shoulder_seat_belt="shoulder_seat_belt";
        $airbag="airbag";
        $wereyou="wereyou";
        $body_position="body_position";

        $body_position1="body_position1";
        $head_position="head_position";
        $head_position1="head_position1";
        $hands_on_wheel="hands_on_wheel";
        $aware_of_crash="aware_of_crash";
        $brace="brace";
        $ifyes="ifyes";
        $further_injury="further_injury";
        $injurytext="injury_text";
        $ifyes_explain="ifyes_explain";
        $during_after_crash="during_after_crash";
        $patient_body="patient_body";
        $patient_body1="patient_body1";
        $body_strike="body_strike";
        $head_hit="head_hit";
        $rlshoulder_hit="rlshoulder_hit";
        $rlhip_hit="rlhip_hit";
        $rlknee_hit="rlknee_hit";
        $chest_hit="chest_hit";
        $rlarm_hit="rlarm_hit";
        $rlleg_hit="rlleg_hit";
        $otherpart_hit="otherpart_hit";
        $wearing_glasses="wearing_glasses";
        $glasses_impact="glasses_impact";
        $unconscious="unconscious";
        $uncon="uncon";
        $estimated_amount="estimated_amount";
        $damage="damage";
        $was_anyone_cited="was_anyone_cited";
        $who="who";
        $headache="headache";
        $dizziness="dizziness";
        $nausea="nausea";
        $confusion="confusion";
        $disorientation="disorientation";
        $neckpain="neckpain";
        $otherpain="otherpain";
        $otherpaintext="otherpaintext";
        $first_symptom="first_symptom";
        $symptom="symptom";
        $after_accident="after_accident";
        $accident="accident";
        $hosname="hosname";
        $city="city";
        $staylength="staylength";
        $hospitalget="hospitalget";
        $hospital1="hospital1";
        $xray="xray";
        $wrong="wrong";
*/

    $sql2="update tbl_autoaccident set username ='".$username."',claimnumber ='".$claimnumber."',adjustersname ='" .$adjustersname."',estimate ='".$estimate."',seating ='" .$seating."',companion ='" .$companion."',vehicle_make ='" .$vehicle_make."',vehicle_model ='" .$vehicle_model."',vehicle_year ='" .$vehicle_year."',vehicle_hit ='" .$vehicle_hit."',other_vehicle_make ='" .$other_vehicle_make."',other_vehicle_model ='" .$other_vehicle_model."',other_vehicle_year ='" .$other_vehicle_year."',carstopped ='" .$carstopped."',driverposition ='" .$driverposition."',vehicle_moving_time ='" .$vehicle_moving_time."',wascar ='" .$wascar."',estimated_rate ='" .$estimated_rate."',time_of_day ='" .$time_of_day."',road_conditions ='" .$road_conditions."',conditions ='" .$conditions."',head_restraints ='" .$head_restraints."',seatpos_after_accident ='" .$seatpos_after_accident."',seat_after_accident ='" .$seat_after_accident."',lap_seat_belt ='" .$lap_seat_belt."',shoulder_seat_belt ='" .$shoulder_seat_belt."',airbag ='" .$airbag."',wereyou ='" .$wereyou."',body_position ='" .$body_position. "',body_position1 ='" .$body_position1."',head_position ='" .$head_position."',head_position1='" .$head_position1."',hands_on_wheel='" .$hands_on_wheel."',aware_of_crash='" .$aware_of_crash."',brace='" .$brace."',ifyes ='" .$ifyes."',further_injury='" .$further_injury."',injurytext='" .$injurytext."',patient_body='" .$patient_body."',patient_body1='" .$patient_body1."',body_strike='" .$body_strike."',head_hit='" .$head_hit."',rlshoulder_hit='" .$rlshoulder_hit."',rlhip_hit ='" .$rlhip_hit."',rlknee_hit ='" .$rlknee_hit."',chest_hit ='" .$chest_hit."',rlarm_hit ='" .$rlarm_hit."',rlleg_hit ='" .$rlleg_hit."',otherpart_hit='" .$otherpart_hit."',wearing_glasses ='" .$wearing_glasses."',glasses_impact ='" .$glasses_impact."',unconscious ='" .$unconscious."',uncon ='" .$uncon."',estimated_amount='" .$estimated_amount."',damage='" .$damage."',was_anyone_cited ='" .$was_anyone_cited."',who ='" .$who."',headache='" .$headache."',dizziness ='" .$dizziness."',nausea='" .$nausea."',confusion='" .$confusion."',disorientation='" .$disorientation."',neckpain ='" .$neckpain."',otherpain ='" .$otherpain."',otherpaintext ='" .$otherpaintext."',first_symptom ='" .$first_symptom."',symptom='" .$symptom."',after_accident ='" .$after_accident."',accident ='" .$accident."',hosname ='" .$hosname."',city ='" .$city."',staylength='" .$staylength."',hospitalget='" .$hospitalget."',hospital1 ='" .$hospital1."',xray='" .$xray."',wrong ='".$wrong."' WHERE  username ='".$username."'";

       // echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'autoaccidentinsert':
    {



        $username=$_POST['username'];
        $claimnumber=$_POST['claimnumber'];
        $adjustersname=$_POST['adjustersname'];
        $estimate=addslashes($_POST['estimate']);
        //$estimate=$_POST['estimate'];
        $seating=$_POST['seating'];
        $companion=$_POST['companion'];
        $vehicle_make=$_POST['vehicle_make'];
        $vehicle_model=$_POST['vehicle_model'];
        $vehicle_year=$_POST['vehicle_year'];
        $vehicle_hit=$_POST['vehicle_hit'];
        $other_vehicle_make=$_POST['other_vehicle_make'];
        $other_vehicle_model=$_POST['other_vehicle_model'];
        $other_vehicle_year=$_POST['other_vehicle_year'];
        $carstopped=$_POST['carstopped'];
        $driverposition=$_POST['driverposition'];
        $vehicle_moving_time=$_POST['vehicle_moving_time'];
        $wascar=$_POST['wascar'];
        $estimated_rate=$_POST['estimated_rate'];
        $time_of_day=$_POST['time_of_day'];
        $road_conditions=$_POST['road_conditions'];
        $conditions=$_POST['conditions'];
        $head_restraints=addslashes($_POST['head_restraints']);
        $seatpos_after_accident=addslashes($_POST['seatpos_after_accident']);
        $seat_after_accident=$_POST['seat_after_accident'];
        $lap_seat_belt=addslashes($_POST['lap_seat_belt']);
        $shoulder_seat_belt=addslashes($_POST['shoulder_seat_belt']);
        $airbag=$_POST['airbag'];
        $wereyou=$_POST['wereyou'];
        $body_position=$_POST['body_position'];
        $body_position1=$_POST['body_position1'];
        $head_position=$_POST['head_position'];
        $head_position1=$_POST['head_position1'];
        $hands_on_wheel=$_POST['hands_on_wheel'];
        $aware_of_crash=$_POST['aware_of_crash'];
        $brace=$_POST['brace'];
        $ifyes=$_POST['ifyes'];
        $further_injury=$_POST['further_injury'];
        $injurytext=$_POST['injurytext'];
      //  $ifyes_explain=$_POST['ifyes_explain'];
       // $during_after_crash=$_POST['during_after_crash'];
        $patient_body=$_POST['patient_body'];
        $patient_body1=$_POST['patient_body1'];
        $body_strike=$_POST['body_strike'];
        $head_hit=$_POST['head_hit'];
        $rlshoulder_hit=$_POST['rlshoulder_hit'];
        $rlhip_hit=$_POST['rlhip_hit'];
        $rlknee_hit=$_POST['rlknee_hit'];
        $chest_hit=$_POST['chest_hit'];
        $rlarm_hit=$_POST['rlarm_hit'];
        $rlleg_hit=$_POST['rlleg_hit'];
        $otherpart_hit=$_POST['otherpart_hit'];
        $wearing_glasses=$_POST['wearing_glasses'];
        $glasses_impact=$_POST['glasses_impact'];
        $unconscious=$_POST['unconscious'];
        $uncon=$_POST['uncon'];
        $estimated_amount=$_POST['estimated_amount'];
        $damage=$_POST['damage'];
        $was_anyone_cited=$_POST['was_anyone_cited'];
        $who=$_POST['who'];
        $headache=$_POST['headache'];
        $dizziness=$_POST['dizziness'];
        $nausea=$_POST['nausea'];
        $confusion=$_POST['confusion'];
        $disorientation=$_POST['disorientation'];
        $neckpain=$_POST['neckpain'];
        $otherpain=$_POST['otherpain'];
        $otherpaintext=$_POST['otherpaintext'];
        $first_symptom=$_POST['first_symptom'];
        $symptom=$_POST['symptom'];
        $after_accident=$_POST['after_accident'];
        $accident=$_POST['accident'];
        $hosname=$_POST['hosname'];
        $city=$_POST['city'];
        $staylength=$_POST['staylength'];
        $hospitalget=$_POST['hospitalget'];
        $hospital1=$_POST['hospital1'];
        $xray=$_POST['xray'];
        $wrong=$_POST['wrong'];


         /* $username="username";
          $claimnumber="claimnumber";
          $adjustersname="adjustersname";
          $estimate="estimate";
          $seating="seating";
          $companion="companion";
          $vehicle_make="vehicle_make";
          $vehicle_model="vehicle_model";
          $vehicle_year="vehicle_year";
          $vehicle_hit="vehicle_hit";
          $other_vehicle_make="other_vehicle_make";
          $other_vehicle_model="other_vehicle_model";
          $other_vehicle_year="other_vehicle_year";
          $carstopped="carstopped";
          $driverposition="driver_position";
          $vehicle_moving_time="vehicle_moving_time";
          $wascar="wascar";
          $estimated_rate="estimated_rate";
          $time_of_day="time_of_day";
          $road_conditions="road_conditions";
          $conditions="conditions";
          $head_restraints="head_restraints";
          $seatpos_after_accident="seatpos_after_accident";
          $seat_after_accident="seat_after_accident";
          $lap_seat_belt="lap_seat_belt";
          $shoulder_seat_belt="shoulder_seat_belt";
          $airbag="airbag";
          $wereyou="wereyou";
          $body_position="body_position";

        $body_position1="body_position1";
        $head_position="head_position";
        $head_position1="head_position1";
        $hands_on_wheel="hands_on_wheel";
        $aware_of_crash="aware_of_crash";
        $brace="brace";
        $ifyes="ifyes";
        $further_injury="further_injury";
        $injury_text="injury_text";
        $ifyes_explain="ifyes_explain";
        $during_after_crash="during_after_crash";
        $patient_body="patient_body";
        $patient_body1="patient_body1";
        $body_strike="body_strike";
        $head_hit="head_hit";
        $rlshoulder_hit="rlshoulder_hit";
        $rlhip_hit="rlhip_hit";
        $rlknee_hit="rlknee_hit";
        $chest_hit="chest_hit";
        $rlarm_hit="rlarm_hit";
        $rlleg_hit="rlleg_hit";
        $otherpart_hit="otherpart_hit";
        $wearing_glasses="wearing_glasses";
        $glasses_impact="glasses_impact";
        $unconscious="unconscious";
        $uncon="uncon";
        $estimated_amount="estimated_amount";
        $damage="damage";
        $was_anyone_cited="was_anyone_cited";
        $who="who";
        $headache="headache";
        $dizziness="dizziness";
        $nausea="nausea";
        $confusion="confusion";
        $disorientation="disorientation";
        $neckpain="neckpain";
        $otherpain="otherpain";
        $otherpaintext="otherpaintext";
        $first_symptom="first_symptom";
        $symptom="symptom";
        $after_accident="after_accident";
        $accident="accident";
        $hosname="hosname";
        $city="city";
        $staylength="staylength";
        $hospitalget="hospitalget";
        $hospital1="hospital1";
        $xray="xray";
        $wrong="wrong";
*/

        $sql3="insert into tbl_autoaccident(patient_number,username,claimnumber,adjustersname,estimate,seating,companion,vehicle_make,vehicle_model,vehicle_year,vehicle_hit,other_vehicle_make,other_vehicle_model,other_vehicle_year,carstopped,driverposition,vehicle_moving_time,wascar,estimated_rate,time_of_day,road_conditions,conditions,head_restraints,seatpos_after_accident,seat_after_accident,lap_seat_belt,shoulder_seat_belt,airbag,wereyou,body_position,body_position1,head_position,head_position1,hands_on_wheel,aware_of_crash,brace,ifyes,further_injury,injurytext,patient_body,patient_body1,body_strike,head_hit,rlshoulder_hit,rlhip_hit,rlknee_hit,chest_hit,rlarm_hit,rlleg_hit,otherpart_hit,wearing_glasses,glasses_impact,unconscious,uncon,estimated_amount,damage,was_anyone_cited,who,headache,dizziness,nausea,confusion,disorientation,neckpain,otherpain,otherpaintext,first_symptom,symptom,after_accident,accident,hosname,city,staylength,hospitalget,hospital1,xray,wrong) values ('','".$username."', '".$claimnumber."','".$adjustersname."', '".$estimate."','".$seating."', '".$companion."', '".$vehicle_make."', '".$vehicle_model."', '".$vehicle_year."','".$vehicle_hit."', '".$other_vehicle_make."','".$other_vehicle_model."', '".$other_vehicle_year."','".$carstopped."', '".$driverposition."', '".$vehicle_moving_time."', '".$wascar."','".$estimated_rate."', '".$time_of_day."', '".$road_conditions."', '".$conditions."', '".$head_restraints."', '".$seatpos_after_accident."', '".$seat_after_accident."','".$lap_seat_belt."','".$shoulder_seat_belt."', '".$airbag."','".$wereyou."', '".$body_position."' ,'".$body_position1."','".$head_position."','".$head_position1."', '".$hands_on_wheel."', '".$aware_of_crash."','".$brace."','".$ifyes."', '".$further_injury."','".$injurytext."','".$patient_body."','".$patient_body1."','".$body_strike."','".$head_hit."','".$rlshoulder_hit."','".$rlhip_hit."','".$rlknee_hit."','".$chest_hit."', '".$rlarm_hit."','".$rlleg_hit."','".$otherpart_hit."','".$wearing_glasses."','".$glasses_impact."','".$unconscious."','".$uncon."','".$estimated_amount."', '".$damage."', '".$was_anyone_cited."', '".$who."','".$headache."','".$dizziness."','".$nausea."','".$confusion."','".$disorientation."','".$neckpain."','".$otherpain."','".$otherpaintext."','".$first_symptom."','".$symptom."','".$after_accident."','".$accident."','".$hosname."','".$city."','".$staylength."','".$hospitalget."','".$hospital1."','".$xray."','".$wrong."')";
       // echo $sql3;
       // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'autoaccidentdelete':
    {
        $username= $_POST['username'];
       // $username= "priya";
        $sql4 ="delete from tbl_autoaccident where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "autoaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>