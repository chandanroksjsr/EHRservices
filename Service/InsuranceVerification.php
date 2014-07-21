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
    case 'insuranceverifselect':
    {

        $pusername = $_POST['pusername'];

        //$pusername="thendral";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_insuranceverification WHERE pusername='$pusername'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {



                $json = '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "Yes", "insuranceverif List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "Yes", "form_no":"'.$row->form_no.'","pusername":"'.$row->pusername.'","verify_name":"'.$row->verify_name.'","spoke_with":"'.$row->spoke_with.'","date":"'.$row->date.'","fax":"'.$row->fax.'","amount_deduct":"'.$row->amount_deduct.'","amount_deduct_met":"'.$row->amount_deduct_met.'","max_visit":"'.$row->max_visit.'","is_chiropractic":"'.$row->is_chiropractic.'","at_what":"'.$row->at_what.'","xray_cover":"'.$row->xray_cover.'","atwhat":"'.$row->atwhat.'","subject_deduct":"'.$row->subject_deduct.'","benefits_honored":"'.$row->benefits_honored.'","network_benefits":"'.$row->network_benefits.'","deductible":"'.$row->deductible.'","covered":"'.$row->covered.'","cm":"'.$row->cm.'","pt":"'.$row->pt.'","ov":"'.$row->ov.'","xray_deduct":"'.$row->xray_deduct.'","doctors_assign":"'.$row->doctors_assign.'","mail_claims":"'.$row->mail_claims.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';

            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'insuranceverifedit':
    {
        $pusername=$_POST['pusername'];$verify_name=$_POST['verify_name'];$spoke_with=$_POST['spoke_with'];$date=$_POST['date'];$fax=$_POST['fax'];$amount_deduct=$_POST['amount_deduct'];$amount_deduct_met=$_POST['amount_deduct_met'];$max_visit=$_POST['max_visit'];$is_chiropractic=$_POST['is_chiropractic'];$at_what=$_POST['at_what'];$xray_cover=$_POST['xray_cover'];$atwhat=$_POST['atwhat'];$subject_deduct=$_POST['subject_deduct'];$benefits_honored=$_POST['benefits_honored'];$network_benefits=$_POST['network_benefits'];$deductible=$_POST['deductible'];$covered=$_POST['covered'];$cm=$_POST['cm'];$pt=$_POST['pt'];$ov=$_POST['ov'];$xray_deduct=$_POST['xray_deduct'];$doctors_assign=$_POST['doctors_assign'];$mail_claims=$_POST['mail_claims'];
       //  $pusername="pusername";$verify_name="verify_fsdfname";$spoke_with="spoke_with";$date="date";$fax="fax";$amount_deduct="amount_deduct";$amount_deduct_met="amount_deduct_met";$max_visit="max_visit";$is_chiropractic="is_chiropractic";$at_what="at_what";$xray_cover="xray_cover";$atwhat="atwhat";$subject_deduct="subject_deduct";$benefits_honored="benefits_honored";$network_benefits="network_benefits";$deductible="deductible";$covered="covered";$cm="cm";$pt="pt";$ov="ov";$xray_deduct="xray_deduct";$doctors_assign="doctors_assign";$mail_claims="mail_claims";


        $sql2="update tbl_insuranceverification set verify_name='".$verify_name."',spoke_with='".$spoke_with."',date='".$date."',fax='".$fax."',amount_deduct='".$amount_deduct."',amount_deduct_met='".$amount_deduct_met."',max_visit='".$max_visit."',is_chiropractic='".$is_chiropractic."',at_what='".$at_what."',xray_cover='".$xray_cover."',atwhat='".$atwhat."',subject_deduct='".$subject_deduct."',benefits_honored='".$benefits_honored."',network_benefits='".$network_benefits."',deductible='".$deductible."',covered='".$covered."',cm='".$cm."',pt='".$pt."',ov='".$ov."',xray_deduct='".$xray_deduct."',doctors_assign='".$doctors_assign."',mail_claims='".$mail_claims."' WHERE pusername='".$pusername."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'insuranceverifinsert':
    {
      $pusername=$_POST['pusername'];
        $verify_name=$_POST['verify_name'];
        $spoke_with=$_POST['spoke_with'];
        $date=$_POST['date'];
        $fax=$_POST['fax'];
        $amount_deduct=$_POST['amount_deduct'];
        $amount_deduct_met=$_POST['amount_deduct_met'];
        $max_visit=$_POST['max_visit'];
        $is_chiropractic=$_POST['is_chiropractic'];
        $at_what=$_POST['at_what'];
        $xray_cover=$_POST['xray_cover'];
        $atwhat=$_POST['atwhat'];
        $subject_deduct=$_POST['subject_deduct'];
        $benefits_honored=$_POST['benefits_honored'];
        $network_benefits=$_POST['network_benefits'];
        $deductible=$_POST['deductible'];
        $covered=$_POST['covered'];
        $cm=$_POST['cm'];$pt=$_POST['pt'];
        $ov=$_POST['ov'];
        $xray_deduct=$_POST['xray_deduct'];
        $doctors_assign=$_POST['doctors_assign'];
        $mail_claims=$_POST['mail_claims'];
       //$form_no="form_no";$pusername="thendral";$verify_name="verify_name";$spoke_with="spoke_with";$date="date";$fax="fax";$amount_deduct="amount_deduct";$amount_deduct_met="amount_deduct_met";$max_visit="max_visit";$is_chiropractic="is_chiropractic";$at_what="at_what";$xray_cover="xray_cover";$atwhat="atwhat";$subject_deduct="subject_deduct";$benefits_honored="benefits_honored";$network_benefits="network_benefits";$deductible="deductible";$covered="covered";$cm="cm";$pt="pt";$ov="ov";$xray_deduct="xray_deduct";$doctors_assign="doctors_assign";$mail_claims="mail_claims";
        $sql3="INSERT INTO tbl_insuranceverification(form_no,pusername,verify_name,spoke_with,date,fax,amount_deduct,amount_deduct_met,max_visit,is_chiropractic,at_what,xray_cover,atwhat,subject_deduct,benefits_honored,network_benefits,deductible,covered,cm,pt,ov,xray_deduct,doctors_assign,mail_claims) VALUES ('','".$pusername."','".$verify_name."','".$spoke_with."','".$date."','".$fax."','".$amount_deduct."','".$amount_deduct_met."','".$max_visit."','".$is_chiropractic."','".$at_what."','".$xray_cover."','".$atwhat."','".$subject_deduct."','".$benefits_honored."','".$network_benefits."','".$deductible."','".$covered."','".$cm."','".$pt."','".$ov."','".$xray_deduct."','".$doctors_assign."','".$mail_claims."')";

      // echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'insuranceverifdelete':
    {
        $pusername=$_POST['pusername'];
       // $pusername="thendral";
        $sql4 ="delete from tbl_insuranceverification where pusername='".$pusername."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "insuranceverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>