<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'healthinsureverifselect':
    {


        $user_name = $_POST['username'];
       // $user_name="sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_insuranceinformation WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "Yes", "healthinsureverifuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "Yes", "Number" : "'.$row->Number.'", "username" : "'.$row->username.'", "patient_name" : "'.$row->patient_name.'", "date_of_accident" : "'.$row->date_of_accident.'", "have_insurance" : "'.$row->have_insurance.'", "employers_name" : "'.$row->employers_name.'", "insurance_company" : "'.$row->insurance_company.'", "phone" : "'.$row->phone.'", "policy" : "'.$row->policy.'", "infono" : "'.$row->infono.'", "supplemental_company" : "'.$row->supplemental_company.'", "sup_phone" : "'.$row->sup_phone.'", "patient_sign" : "'.$row->patient_sign.'", "date" : "'.$row->date.'", "spouse_sign" : "'.$row->spouse_sign.'", "date1" : "'.$row->date1.'","message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'healthinsureverifedit':
    {
          $username=$_POST['username'];
          $patient_name=$_POST['patient_name'];
          $date_of_accident=$_POST['date_of_accident'];
          $have_insurance=$_POST['have_insurance'];
          $employers_name=$_POST['employers_name'];
          $insurance_company=$_POST['insurance_company'];
          $phone=$_POST['phone'];
          $policy=$_POST['policy'];
          $infono=$_POST['infono'];

          $supplemental_company=$_POST['supplemental_company'];
          $sup_phone=$_POST['sup_phone'];
          $patient_sign=$_POST['patient_sign'];
          $date=$_POST['date'];
          $spouse_sign=$_POST['spouse_sign'];
          $date1=$_POST['date1'];



      /*  $username="priya";
        $patient_name="sedhu";
        $date_of_accident="sedhu";
        $have_insurance="sedhu";
        $employers_name="sedhu";
        $insurance_company="sedhu";
        $phone="sedhu";
        $policy="sedhu";
        $infono="sedhu";

        $supplemental_company="sedhu";
        $sup_phone="sedhu";
        $patient_sign="sedhu";
        $date="sedhu";
        $spouse_sign="sedhu";
        $date1="thendral";*/


        $sql2="update tbl_insuranceinformation set patient_name='".$patient_name."',date_of_accident='".$date_of_accident."',have_insurance='".$have_insurance."',employers_name='".$employers_name."',insurance_company='".$insurance_company."',phone='".$phone."',policy='".$policy."',infono='".$infono."',supplemental_company='".$supplemental_company."',sup_phone='".$sup_phone."',patient_sign='".$patient_sign."',date='".$date."',spouse_sign='".$spouse_sign."',date1='".$date1."' WHERE username='".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'healthinsureverifinsert':
    {
        $username=$_POST['username'];
        $patient_name=$_POST['patient_name'];
        $date_of_accident=$_POST['date_of_accident'];
        $have_insurance=$_POST['have_insurance'];
        $employers_name=$_POST['employers_name'];
        $insurance_company=$_POST['insurance_company'];
        $phone=$_POST['phone'];
        $policy=$_POST['policy'];
        $infono=$_POST['infono'];

        $supplemental_company=$_POST['supplemental_company'];
        $sup_phone=$_POST['sup_phone'];
        $patient_sign=$_POST['patient_sign'];
        $date=$_POST['date'];
        $spouse_sign=$_POST['spouse_sign'];
        $date1=$_POST['date1'];



     /*   $username="sedhu";
         $patient_name="thendral";
         $date_of_accident="20";
         $have_insurance="12/1/1212";
         $employers_name="123";
        $insurance_company="thendral";
        $phone="20";
        $policy="12/1/1212";
        $infono="123";

        $supplemental_company="sedhu";
        $sup_phone="thendral";
        $patient_sign="20";
        $date="12/1/1212";
        $spouse_sign="123";
        $date1="thendral";


*/

        $sql3="insert into tbl_insuranceinformation(Number,username,patient_name,date_of_accident,have_insurance,employers_name,insurance_company,phone,policy,infono,supplemental_company,sup_phone,patient_sign,date,spouse_sign,date1) values ('','".$username."','".$patient_name."','".$date_of_accident."','".$have_insurance."','".$employers_name."','".$insurance_company."','".$phone."','".$policy."','".$infono."','".$supplemental_company."','".$sup_phone."','".$patient_sign."','".$date."','".$spouse_sign."','".$date1."')";


        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'healthinsureverifdelete':
    {
       $username=$_POST['username'];
      //   $username="priya";
        $sql4 ="delete from tbl_insuranceinformation where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "healthinsureverif Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>