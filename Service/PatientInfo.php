<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'patient_detailsselect':
    {
//        $username = "silviya";
//        $patient_id = "57";
        $username = $_POST['username'];

        $flag=0;
       // $sql1 ="SELECT * FROM patient_details t1 INNER JOIN  tbl_symptom t2  on t1.Patient_id=t2.patient_id WHERE username='$username'";

        $sql1 ="SELECT * FROM patient_details  WHERE username='$username'";

//echo $sql1;
        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes", "patient_detailsuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes","Patient_id":"'.$row->Patient_id.'","Name":"'.$row->Name.'","username":"'.$row->username.'","Date":"'.$row->Date.'","StreetAddress":"'.$row->StreetAddress.'","City":"'.$row->City.'","State":"'.$row->State.'","ZipCode":"'.$row->ZipCode.'","Homephone":"'.$row->Homephone.'","Emailid":"'.$row->Emailid.'","MobileNumber":"'.$row->MobileNumber.'","DateOfBirth":"'.$row->DateOfBirth.'","SocialSecurityNumber":"'.$row->SocialSecurityNumber.'","Gender":"'.$row->Gender.'","MaritalStatus":"'.$row->MaritalStatus.'","Areyou":"'.$row->Areyou.'","Student":"'.$row->Student.'","EmployerName":"'.$row->EmployerName.'","Occupation":"'.$row->Occupation.'","EmployerAddress":"'.$row->EmployerAddress.'","Workphone":"'.$row->Workphone.'","zip":"'.$row->zip.'","EmployerCity":"'.$row->EmployerCity.'","Estate":"'.$row->Estate.'","Ezip":"'.$row->Ezip.'","SpousesName":"'.$row->SpousesName.'","SpousesEmp":"'.$row->SpousesEmp.'","Spousesph":"'.$row->Spousesph.'","Name_friend":"'.$row->Name_friend.'","Phone_friend":"'.$row->Phone_friend.'","Chiropratic_care":"'.$row->Chiropratic_care.'","Symptom_Accident":"'.$row->Symptom_Accident.'","Type_Of_Accident":"'.$row->Type_Of_Accident.'","accident":"'.$row->accident.'","Date_Of_Accident":"'.$row->Date_Of_Accident.'","Accident_Reported":"'.$row->Accident_Reported.'","when1":"'.$row->when1.'","where1":"'.$row->where1.'","Attorney_accident":"'.$row->Attorney_accident.'","retain":"'.$row->retain.'","record":"'.$row->record.'","phyname":"'.$row->phyname.'","phyphone":"'.$row->phyphone.'","car11":"'.$row->car11.'","xray":"'.$row->xray.'","treat":"'.$row->treat.'","NameOfAttorney":"'.$row->NameOfAttorney.'","Phone_Number":"'.$row->Phone_Number.'","Fault_accident":"'.$row->Fault_accident.'","claim_open":"'.$row->claim_open.'","Insurance":"'.$row->Insurance.'","Insurance_phone":"'.$row->Insurance_phone.'","Name_auto":"'.$row->Name_auto.'","Phone_auto":"'.$row->Phone_auto.'","Policy":"'.$row->Policy.'","Name_health":"'.$row->Name_health.'","Health_phone":"'.$row->Health_phone.'","Prev_accident":"'.$row->Prev_accident.'","Prev_When":"'.$row->Prev_When.'","Anemia":"'.$row->Anemia.'","Muscular":"'.$row->Muscular.'","Rheumatic":"'.$row->Rheumatic.'","Allergies":"'.$row->Allergies.'","Cancer":"'.$row->Cancer.'","Polio1":"'.$row->Polio1.'","Multiple":"'.$row->Multiple.'","Scarlet":"'.$row->Scarlet.'","HIV":"'.$row->HIV.'","Sinus":"'.$row->Sinus.'","Asthma":"'.$row->Asthma.'","German":"'.$row->German.'","Nervousness":"'.$row->Nervousness.'","Numbness":"'.$row->Numbness.'","Convulsions":"'.$row->Convulsions.'","Epilepsy":"'.$row->Epilepsy.'","Concussion":"'.$row->Concussion.'","Dizziness":"'.$row->Dizziness.'","Neuritis":"'.$row->Neuritis.'","Rheumatism":"'.$row->Rheumatism.'","Diabetes":"'.$row->Diabetes.'","Arthritis":"'.$row->Arthritis.'","Venereal":"'.$row->Venereal.'","Backaches":"'.$row->Backaches.'","Tuberculosis":"'.$row->Tuberculosis.'","Liver":"'.$row->Liver.'","Kidney":"'.$row->Kidney.'","Thyroid":"'.$row->Thyroid.'","Alcoholism":"'.$row->Alcoholism.'","Hepatitis":"'.$row->Hepatitis.'","Mental":"'.$row->Mental.'","High":"'.$row->High.'","Digestive":"'.$row->Digestive.'","Heart":"'.$row->Heart.'","Other":"'.$row->Other.'","Ifother":"'.$row->Ifother.'","Illness":"'.$row->Illness.'","Dates":"'.$row->Dates.'","Medications":"'.$row->Medications.'","Drink":"'.$row->Drink.'","Smoke":"'.$row->Smoke.'","Drugs":"'.$row->Drugs.'","Diet":"'.$row->Diet.'","Exercise":"'.$row->Exercise.'","Hazardous":"'.$row->Hazardous.'","Hazardousyes":"'.$row->Hazardousyes.'","Female":"'.$row->Female.'","Dr":"'.$row->Dr.'","Patient":"'.$row->Patient.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'patient_detailsedit':
    {
       // $Patient_id="Patient_id";$Name="Name";$username="username";$Date="DDFSGate";$StreetAddress="StreeDFSGtAddress";$City="CiDFGty";$State="State";$ZipCode="ZipCode";$Homephone="Homephone";$Emailid="Emailid";$MobileNumber="MobileNumber";$DateOfBirth="DateOfBirth";$SocialSecurityNumber="SocialSecurityNumber";$Gender="Gender";$MaritalStatus="MaritalStatus";$Areyou="Areyou";$Student="Student";$EmployerName="EmployerName";$Occupation="Occupation";$EmployerAddress="EmployerAddress";$Workphone="Workphone";$zip="zip";$EmployerCity="EmployerCity";$Estate="Estate";$Ezip="Ezip";$SpousesName="SpousesName";$SpousesEmp="SpousesEmp";$Spousesph="Spousesph";$Name_friend="Name_friend";$Phone_friend="Phone_friend";$Chiropratic_care="Chiropratic_care";$Symptoms="Symptoms";$Symptomid="Symptomid";$Symptom_Accident="Symptom_Accident";$Type_Of_Accident="Type_Of_Accident";$accident="accident";$Date_Of_Accident="Date_Of_Accident";$Accident_Reported="Accident_Reported";$when1="when1";$where1="where1";$Attorney_accident="Attorney_accident";$retain="retain";$record="record";$phyname="phyname";$phyphone="phyphone";$xray="xray";$treat="treat";$NameOfAttorney="NameOfAttorney";$Phone_Number="Phone_Number";$Fault_accident="Fault_accident";$Insurance="Insurance";$Insurance_phone="Insurance_phone";$Name_auto="Name_auto";$Phone_auto="Phone_auto";$Policy="Policy";$Name_health="Name_health";$Health_phone="Health_phone";$Prev_accident="Prev_accident";$Prev_When="Prev_When";$Anemia="Anemia";$Muscular="Muscular";$Rheumatic="Rheumatic";$Allergies="Allergies";$Cancer="Cancer";$Polio1="Polio1";$Multiple="Multiple";$Scarlet="Scarlet";$HIV="HIV";$Sinus="Sinus";$Asthma="Asthma";$German="German";$Nervousness="Nervousness";$Numbness="Numbness";$Convulsions="Convulsions";$Epilepsy="Epilepsy";$Concussion="Concussion";$Dizziness="Dizziness";$Neuritis="Neuritis";$Rheumatism="Rheumatism";$Diabetes="Diabetes";$Arthritis="Arthritis";$Venereal="Venereal";$Backaches="Backaches";$Tuberculosis="Tuberculosis";$Liver="Liver";$Kidney="Kidney";$Thyroid="Thyroid";$Alcoholism="Alcoholism";$Hepatitis="Hepatitis";$Mental="Mental";$High="High";$Digestive="Digestive";$Heart="Heart";$Other="Other";$Ifother="Ifother";$Illness="Illness";$Dates="Dates";$Medications="Medications";$Drink="Drink";$Smoke="Smoke";$Drugs="Drugs";$Diet="Diet";$Exercise="Exercise";$Hazardous="Hazardous";$Hazardousyes="Hazardousyes";$Female="Female";$Dr="Dr";$Patient="Patient";

        $username=$_POST['username'];
        $Name=$_POST['Name'];
        $Date=$_POST['Date'];
        $StreetAddress=$_POST['StreetAddress'];
        $City=$_POST['City'];
        $State=$_POST['State'];
        $ZipCode=$_POST['ZipCode'];
        $Homephone=$_POST['Homephone'];
        $Emailid=$_POST['Emailid'];
        $MobileNumber=$_POST['MobileNumber'];
        $DateOfBirth=$_POST['DateOfBirth'];
        $SocialSecurityNumber=$_POST['SocialSecurityNumber'];
        $Gender=$_POST['Gender'];
        $MaritalStatus=$_POST['MaritalStatus'];
        $Areyou=$_POST['Areyou'];
        $Student=$_POST['Student'];
        $EmployerName=$_POST['EmployerName'];
        $Occupation=$_POST['Occupation'];
        $EmployerAddress=$_POST['EmployerAddress'];
        $Workphone=$_POST['Workphone'];
        $zip=$_POST['zip'];
        $EmployerCity=$_POST['EmployerCity'];
        $Estate=$_POST['Estate'];
        $Ezip=$_POST['Ezip'];
        $SpousesName=$_POST['SpousesName'];
        $SpousesEmp=$_POST['SpousesEmp'];
        $Spousesph=$_POST['Spousesph'];
        $Name_friend=$_POST['Name_friend'];
        $Phone_friend=$_POST['Phone_friend'];
        $Chiropratic_care=$_POST['Chiropratic_care'];

        $Symptom_Accident=$_POST['Symptom_Accident'];
        $Type_Of_Accident=$_POST['Type_Of_Accident'];
        $accident=$_POST['accident'];
        $Date_Of_Accident=$_POST['Date_Of_Accident'];
        $Accident_Reported=$_POST['Accident_Reported'];
        $when1=$_POST['when1'];
        $where1=$_POST['where1'];
        $Attorney_accident=$_POST['Attorney_accident'];
        $retain=$_POST['retain'];
        $record=$_POST['record'];
        $phyname=$_POST['phyname'];
        $phyphone=$_POST['phyphone'];
        $car11=$_POST['car11'];
        $xray=$_POST['xray'];
        $treat=$_POST['treat'];
        $NameOfAttorney=$_POST['NameOfAttorney'];
        $Phone_Number=$_POST['Phone_Number'];
        $Fault_accident=$_POST['Fault_accident'];
        $claim_open=$_POST['claim_open'];
        $Insurance=$_POST['Insurance'];
        $Insurance_phone=$_POST['Insurance_phone'];
        $Name_auto=$_POST['Name_auto'];
        $Phone_auto=$_POST['Phone_auto'];
        $Policy=$_POST['Policy'];
        $Name_health=$_POST['Name_health'];
        $Health_phone=$_POST['Health_phone'];
        $Prev_accident=$_POST['Prev_accident'];
        $Prev_When=$_POST['Prev_When'];
        $Anemia=$_POST['Anemia'];
        $Muscular=$_POST['Muscular'];
        $Rheumatic=$_POST['Rheumatic'];
        $Allergies=$_POST['Allergies'];
        $Cancer=$_POST['Cancer'];
        $Polio1=$_POST['Polio1'];
        $Multiple=$_POST['Multiple'];
        $Scarlet=$_POST['Scarlet'];
        $HIV=$_POST['HIV'];
        $Sinus=$_POST['Sinus'];
        $Asthma=$_POST['Asthma'];
        $German=$_POST['German'];
        $Nervousness=$_POST['Nervousness'];
        $Numbness=$_POST['Numbness'];
        $Convulsions=$_POST['Convulsions'];
        $Epilepsy=$_POST['Epilepsy'];
        $Concussion=$_POST['Concussion'];
        $Dizziness=$_POST['Dizziness'];
        $Neuritis=$_POST['Neuritis'];
        $Rheumatism=$_POST['Rheumatism'];
        $Diabetes=$_POST['Diabetes'];
        $Arthritis=$_POST['Arthritis'];
        $Venereal=$_POST['Venereal'];
        $Backaches=$_POST['Backaches'];
        $Tuberculosis=$_POST['Tuberculosis'];
        $Liver=$_POST['Liver'];
        $Kidney=$_POST['Kidney'];
        $Thyroid=$_POST['Thyroid'];
        $Alcoholism=$_POST['Alcoholism'];
        $Hepatitis=$_POST['Hepatitis'];
        $Mental=$_POST['Mental'];
        $High=$_POST['High'];
        $Digestive=$_POST['Digestive'];
        $Heart=$_POST['Heart'];
        $Other=$_POST['Other'];
        $Ifother=$_POST['Ifother'];
        $Illness=$_POST['Illness'];
        $Dates=$_POST['Dates'];
        $Medications=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['Medications']);
        $Drink=$_POST['Drink'];
        $Smoke=$_POST['Smoke'];
        $Drugs=$_POST['Drugs'];
        $Diet=$_POST['Diet'];
        $Exercise=$_POST['Exercise'];
        $Hazardous=$_POST['Hazardous'];
        $Hazardousyes=$_POST['Hazardousyes'];
        $Female=$_POST['Female'];
        $Dr=$_POST['Dr'];
        $Patient=$_POST['Patient'];
        $patient_id = $_POST['username'];
        $nubofcontent=$_POST['no'];


        $sql2="update patient_details set Name='".$Name."',Date='".$Date."',StreetAddress='".$StreetAddress."',City='".$City."',State='".$State."',ZipCode='".$ZipCode."',Homephone='".$Homephone."',Emailid='".$Emailid."',MobileNumber='".$MobileNumber."',DateOfBirth='".$DateOfBirth."',SocialSecurityNumber='".$SocialSecurityNumber."',Gender='".$Gender."',MaritalStatus='".$MaritalStatus."',Areyou='".$Areyou."',Student='".$Student."',EmployerName='".$EmployerName."',Occupation='".$Occupation."',EmployerAddress='".$EmployerAddress."',Workphone='".$Workphone."',zip='".$zip."',EmployerCity='".$EmployerCity."',Estate='".$Estate."',Ezip='".$Ezip."',SpousesName='".$SpousesName."',SpousesEmp='".$SpousesEmp."',Spousesph='".$Spousesph."',Name_friend='".$Name_friend."',Phone_friend='".$Phone_friend."',Chiropratic_care='".$Chiropratic_care."',Symptom_Accident='".$Symptom_Accident."',Type_Of_Accident='".$Type_Of_Accident."',accident='".$accident."',Date_Of_Accident='".$Date_Of_Accident."',Accident_Reported='".$Accident_Reported."',when1='".$when1."',where1='".$where1."',Attorney_accident='".$Attorney_accident."',retain='".$retain."',record='".$record."',phyname='".$phyname."',phyphone='".$phyphone."',car11='".$car11."',xray='".$xray."',treat='".$treat."',NameOfAttorney='".$NameOfAttorney."',Phone_Number='".$Phone_Number."',Fault_accident='".$Fault_accident."',claim_open='".$claim_open."',Insurance='".$Insurance."',Insurance_phone='".$Insurance_phone."',Name_auto='".$Name_auto."',Phone_auto='".$Phone_auto."',Policy='".$Policy."',Name_health='".$Name_health."',Health_phone='".$Health_phone."',Prev_accident='".$Prev_accident."',Prev_When='".$Prev_When."',Anemia='".$Anemia."',Muscular='".$Muscular."',Rheumatic='".$Rheumatic."',Allergies='".$Allergies."',Cancer='".$Cancer."',Polio1='".$Polio1."',Multiple='".$Multiple."',Scarlet='".$Scarlet."',HIV='".$HIV."',Sinus='".$Sinus."',Asthma='".$Asthma."',German='".$German."',Nervousness='".$Nervousness."',Numbness='".$Numbness."',Convulsions='".$Convulsions."',Epilepsy='".$Epilepsy."',Concussion='".$Concussion."',Dizziness='".$Dizziness."',Neuritis='".$Neuritis."',Rheumatism='".$Rheumatism."',Diabetes='".$Diabetes."',Arthritis='".$Arthritis."',Venereal='".$Venereal."',Backaches='".$Backaches."',Tuberculosis='".$Tuberculosis."',Liver='".$Liver."',Kidney='".$Kidney."',Thyroid='".$Thyroid."',Alcoholism='".$Alcoholism."',Hepatitis='".$Hepatitis."',Mental='".$Mental."',High='".$High."',Digestive='".$Digestive."',Heart='".$Heart."',Other='".$Other."',Ifother='".$Ifother."',Illness='".$Illness."',Dates='".$Dates."',Medications='".$Medications."',Drink='".$Drink."',Smoke='".$Smoke."',Drugs='".$Drugs."',Diet='".$Diet."',Exercise='".$Exercise."',Hazardous='".$Hazardous."',Hazardousyes='".$Hazardousyes."',Female='".$Female."',Dr='".$Dr."',Patient='".$Patient."' WHERE  username ='".$username."'";

    // echo $sql2;


        if(mysql_query($sql2))
        {
            $success=1;
            $sql4 ="delete from tbl_symptom where patient_id='".$patient_id."'";
            mysql_query($sql4);
            for($i=0;$i<$nubofcontent;$i++)
            {
                $name="symptom".$i."";

                $diagnosis=addslashes(str_replace(array("\r\n","\n","\t","\r"),'',$_POST["$name"]));

                $sql3="insert into tbl_symptom(symptom_no,symptom,patient_id) values ('','".$diagnosis."','".$patient_id."')";

                // echo $sql3;
                if(mysql_query($sql3))
                {
                    $success=1;
                }
                else
                {
                    $success=0;
                }
            }


            if($success==1)
            {

                $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes", "message" : "1" } }';

            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
            }


        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'patient_detailsinsert':
    {



       // $Patient_id="Patient_id";$Name="Name";$username="thendral";$Date="Date";$StreetAddress="StreetAddress";$City="City";$State="State";$ZipCode="ZipCode";$Homephone="Homephone";$Emailid="Emailid";$MobileNumber="MobileNumber";$DateOfBirth="DateOfBirth";$SocialSecurityNumber="SocialSecurityNumber";$Gender="Gender";$MaritalStatus="MaritalStatus";$Areyou="Areyou";$Student="Student";$EmployerName="EmployerName";$Occupation="Occupation";$EmployerAddress="EmployerAddress";$Workphone="Workphone";$zip="zip";$EmployerCity="EmployerCity";$Estate="Estate";$Ezip="Ezip";$SpousesName="SpousesName";$SpousesEmp="SpousesEmp";$Spousesph="Spousesph";$Name_friend="Name_friend";$Phone_friend="Phone_friend";$Chiropratic_care="Chiropratic_care";$Symptoms="Symptoms";$Symptomid="Symptomid";$Symptom_Accident="Symptom_Accident";$Type_Of_Accident="Type_Of_Accident";$accident="accident";$Date_Of_Accident="Date_Of_Accident";$Accident_Reported="Accident_Reported";$when1="when1";$where1="where1";$Attorney_accident="Attorney_accident";$retain="retain";$record="record";$phyname="phyname";$phyphone="phyphone";$xray="xray";$treat="treat";$NameOfAttorney="NameOfAttorney";$Phone_Number="Phone_Number";$Fault_accident="Fault_accident";$Insurance="Insurance";$Insurance_phone="Insurance_phone";$Name_auto="Name_auto";$Phone_auto="Phone_auto";$Policy="Policy";$Name_health="Name_health";$Health_phone="Health_phone";$Prev_accident="Prev_accident";$Prev_When="Prev_When";$Anemia="Anemia";$Muscular="Muscular";$Rheumatic="Rheumatic";$Allergies="Allergies";$Cancer="Cancer";$Polio1="Polio1";$Multiple="Multiple";$Scarlet="Scarlet";$HIV="HIV";$Sinus="Sinus";$Asthma="Asthma";$German="German";$Nervousness="Nervousness";$Numbness="Numbness";$Convulsions="Convulsions";$Epilepsy="Epilepsy";$Concussion="Concussion";$Dizziness="Dizziness";$Neuritis="Neuritis";$Rheumatism="Rheumatism";$Diabetes="Diabetes";$Arthritis="Arthritis";$Venereal="Venereal";$Backaches="Backaches";$Tuberculosis="Tuberculosis";$Liver="Liver";$Kidney="Kidney";$Thyroid="Thyroid";$Alcoholism="Alcoholism";$Hepatitis="Hepatitis";$Mental="Mental";$High="High";$Digestive="Digestive";$Heart="Heart";$Other="Other";$Ifother="Ifother";$Illness="Illness";$Dates="Dates";$Medications="Medications";$Drink="Drink";$Smoke="Smoke";$Drugs="Drugs";$Diet="Diet";$Exercise="Exercise";$Hazardous="Hazardous";$Hazardousyes="Hazardousyes";$Female="Female";$Dr="Dr";$Patient="Patient";

        $username=$_POST['username'];
        $Name=$_POST['Name'];

        $Date=$_POST['Date'];
        $StreetAddress=$_POST['StreetAddress'];
        $City=$_POST['City'];
        $State=$_POST['State'];
        $ZipCode=$_POST['ZipCode'];
        $Homephone=$_POST['Homephone'];
        $Emailid=$_POST['Emailid'];
        $MobileNumber=$_POST['MobileNumber'];
        $DateOfBirth=$_POST['DateOfBirth'];
        $SocialSecurityNumber=$_POST['SocialSecurityNumber'];
        $Gender=$_POST['Gender'];
        $MaritalStatus=$_POST['MaritalStatus'];
        $Areyou=$_POST['Areyou'];
        $Student=$_POST['Student'];
        $EmployerName=$_POST['EmployerName'];
        $Occupation=$_POST['Occupation'];
        $EmployerAddress=$_POST['EmployerAddress'];
        $Workphone=$_POST['Workphone'];
        $zip=$_POST['zip'];
        $EmployerCity=$_POST['EmployerCity'];
        $Estate=$_POST['Estate'];
        $Ezip=$_POST['Ezip'];
        $SpousesName=$_POST['SpousesName'];
        $SpousesEmp=$_POST['SpousesEmp'];
        $Spousesph=$_POST['Spousesph'];
        $Name_friend=$_POST['Name_friend'];
        $Phone_friend=$_POST['Phone_friend'];
        $Chiropratic_care=$_POST['Chiropratic_care'];

        $Symptom_Accident=$_POST['Symptom_Accident'];
        $Type_Of_Accident=$_POST['Type_Of_Accident'];
        $accident=$_POST['accident'];
        $Date_Of_Accident=$_POST['Date_Of_Accident'];
        $Accident_Reported=$_POST['Accident_Reported'];
        $when1=$_POST['when1'];
        $where1=$_POST['where1'];
        $Attorney_accident=$_POST['Attorney_accident'];
        $retain=$_POST['retain'];
        $record=$_POST['record'];
        $phyname=$_POST['phyname'];
        $phyphone=$_POST['phyphone'];
        $car11=$_POST['car11'];
        $xray=$_POST['xray'];
        $treat=$_POST['treat'];
        $NameOfAttorney=$_POST['NameOfAttorney'];
        $Phone_Number=$_POST['Phone_Number'];
        $Fault_accident=$_POST['Fault_accident'];
        $claim_open=$_POST['claim_open'];
        $Insurance=$_POST['Insurance'];
        $Insurance_phone=$_POST['Insurance_phone'];
        $Name_auto=$_POST['Name_auto'];
        $Phone_auto=$_POST['Phone_auto'];
        $Policy=$_POST['Policy'];
        $Name_health=$_POST['Name_health'];
        $Health_phone=$_POST['Health_phone'];
        $Prev_accident=$_POST['Prev_accident'];
        $Prev_When=$_POST['Prev_When'];
        $Anemia=$_POST['Anemia'];
        $Muscular=$_POST['Muscular'];
        $Rheumatic=$_POST['Rheumatic'];
        $Allergies=$_POST['Allergies'];
        $Cancer=$_POST['Cancer'];
        $Polio1=$_POST['Polio1'];
        $Multiple=$_POST['Multiple'];
        $Scarlet=$_POST['Scarlet'];
        $HIV=$_POST['HIV'];
        $Sinus=$_POST['Sinus'];
        $Asthma=$_POST['Asthma'];
        $German=$_POST['German'];
        $Nervousness=$_POST['Nervousness'];
        $Numbness=$_POST['Numbness'];
        $Convulsions=$_POST['Convulsions'];
        $Epilepsy=$_POST['Epilepsy'];
        $Concussion=$_POST['Concussion'];
        $Dizziness=$_POST['Dizziness'];
        $Neuritis=$_POST['Neuritis'];
        $Rheumatism=$_POST['Rheumatism'];
        $Diabetes=$_POST['Diabetes'];
        $Arthritis=$_POST['Arthritis'];
        $Venereal=$_POST['Venereal'];
        $Backaches=$_POST['Backaches'];
        $Tuberculosis=$_POST['Tuberculosis'];
        $Liver=$_POST['Liver'];
        $Kidney=$_POST['Kidney'];
        $Thyroid=$_POST['Thyroid'];
        $Alcoholism=$_POST['Alcoholism'];
        $Hepatitis=$_POST['Hepatitis'];
        $Mental=$_POST['Mental'];
        $High=$_POST['High'];
        $Digestive=$_POST['Digestive'];
        $Heart=$_POST['Heart'];
        $Other=$_POST['Other'];
        $Ifother=$_POST['Ifother'];
        $Illness=$_POST['Illness'];
        $Dates=$_POST['Dates'];
        $Medications=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['Medications']);
        $Drink=$_POST['Drink'];
        $Smoke=$_POST['Smoke'];
        $Drugs=$_POST['Drugs'];
        $Diet=$_POST['Diet'];
        $Exercise=$_POST['Exercise'];
        $Hazardous=$_POST['Hazardous'];
        $Hazardousyes=$_POST['Hazardousyes'];
        $Female=$_POST['Female'];
        $Dr=$_POST['Dr'];
        $Patient=$_POST['Patient'];
        $nubofcontent=$_POST['no'];


        $sql3="insert into patient_details(Patient_id,Name,username,Date,StreetAddress,City,State,ZipCode,Homephone,Emailid,MobileNumber,DateOfBirth,SocialSecurityNumber,Gender,MaritalStatus,Areyou,Student,EmployerName,Occupation,EmployerAddress,Workphone,zip,EmployerCity,Estate,Ezip,SpousesName,SpousesEmp,Spousesph,Name_friend,Phone_friend,Chiropratic_care,Symptom_Accident,Type_Of_Accident,accident,Date_Of_Accident,Accident_Reported,when1,where1,Attorney_accident,retain,record,phyname,phyphone,car11,xray,treat,NameOfAttorney,Phone_Number,Fault_accident,claim_open,Insurance,Insurance_phone,Name_auto,Phone_auto,Policy,Name_health,Health_phone,Prev_accident,Prev_When,Anemia,Muscular,Rheumatic,Allergies,Cancer,Polio1,Multiple,Scarlet,HIV,Sinus,Asthma,German,Nervousness,Numbness,Convulsions,Epilepsy,Concussion,Dizziness,Neuritis,Rheumatism,Diabetes,Arthritis,Venereal,Backaches,Tuberculosis,Liver,Kidney,Thyroid,Alcoholism,Hepatitis,Mental,High,Digestive,Heart,Other,Ifother,Illness,Dates,Medications,Drink,Smoke,Drugs,Diet,Exercise,Hazardous,Hazardousyes,Female,Dr,Patient) values ('','".$Name."','".$username."','".$Date."','".$StreetAddress."','".$City."','".$State."','".$ZipCode."','".$Homephone."','".$Emailid."','".$MobileNumber."','".$DateOfBirth."','".$SocialSecurityNumber."','".$Gender."','".$MaritalStatus."','".$Areyou."','".$Student."','".$EmployerName."','".$Occupation."','".$EmployerAddress."','".$Workphone."','".$zip."','".$EmployerCity."','".$Estate."','".$Ezip."','".$SpousesName."','".$SpousesEmp."','".$Spousesph."','".$Name_friend."','".$Phone_friend."','".$Chiropratic_care."','".$Symptom_Accident."','".$Type_Of_Accident."','".$accident."','".$Date_Of_Accident."','".$Accident_Reported."','".$when1."','".$where1."','".$Attorney_accident."','".$retain."','".$record."','".$phyname."','".$phyphone."','".$car11."','".$xray."','".$treat."','".$NameOfAttorney."','".$Phone_Number."','".$Fault_accident."','".$claim_open."','".$Insurance."','".$Insurance_phone."','".$Name_auto."','".$Phone_auto."','".$Policy."','".$Name_health."','".$Health_phone."','".$Prev_accident."','".$Prev_When."','".$Anemia."','".$Muscular."','".$Rheumatic."','".$Allergies."','".$Cancer."','".$Polio1."','".$Multiple."','".$Scarlet."','".$HIV."','".$Sinus."','".$Asthma."','".$German."','".$Nervousness."','".$Numbness."','".$Convulsions."','".$Epilepsy."','".$Concussion."','".$Dizziness."','".$Neuritis."','".$Rheumatism."','".$Diabetes."','".$Arthritis."','".$Venereal."','".$Backaches."','".$Tuberculosis."','".$Liver."','".$Kidney."','".$Thyroid."','".$Alcoholism."','".$Hepatitis."','".$Mental."','".$High."','".$Digestive."','".$Heart."','".$Other."','".$Ifother."','".$Illness."','".$Dates."','".$Medications."','".$Drink."','".$Smoke."','".$Drugs."','".$Diet."','".$Exercise."','".$Hazardous."','".$Hazardousyes."','".$Female."','".$Dr."','".$Patient."')";

       //echo $sql3;
        if(mysql_query($sql3))
        {

            $patient_id=$_POST['username'];
            $success=1;
            $sql4 ="delete from tbl_symptom where patient_id='".$patient_id."'";
            mysql_query($sql4);
            for($i=0;$i<$nubofcontent;$i++)
            {
                $name="symptom".$i."";

                $diagnosis=addslashes(str_replace(array("\r\n","\n","\t","\r"),'',$_POST["$name"]));

                $sql3="insert into tbl_symptom(symptom_no,symptom,patient_id) values ('','".$diagnosis."','".$patient_id."')";

               // echo $sql3;
                if(mysql_query($sql3))
                {
                    $success=1;
                }
                else
                {
                    $success=0;
                }
            }


            if($success==1)
            {

                $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes", "message" : "1" } }';

            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
            }


        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'patient_detailsdelete':
    {
        $username= $_POST['username'];

        $sql4 ="delete from patient_details where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            $sql4 ="delete from tbl_symptom where patient_id='".$username."'";
            if(mysql_query($sql4))
            {
                //echo $sql4;

                $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes", "message" : "1" } }';

            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
            }


        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
    case 'patientselect':
    {


        $flag=0;
        $sql1 ="SELECT username,Name,Type_Of_Accident,NameOfAttorney,Insurance FROM patient_details";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes", "patient_detailsuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "Yes","username":"'.$row->username.'","Name":"'.$row->Name.'","typeofacc":"'.$row->Type_Of_Accident.'","attorney":"'.$row->NameOfAttorney.'","insurance":"'.$row->Insurance.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';

            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "patient_details Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'patientinfodiagnosisselect':
    {

        $patient_id = $_POST['patient_id'];

        $flag=0;
        $sql1 ="SELECT * FROM tbl_symptom WHERE patient_id='$patient_id'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "patientinfodiagnosis Data", "success" : "Yes", "patientinfodiagnosisuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "patientinfodiagnosis Data", "success" : "Yes", "symptom":"'.$row->symptom.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';

            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "patientinfodiagnosis Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>