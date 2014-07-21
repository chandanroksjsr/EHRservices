<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'insurewaiverselect':
    {


        $user_name = $_POST['username'];
//         $user_name="sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_insuranceplan WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "Yes", "insurewaiveruser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "Yes", "no" : "'.$row->no.'", "username" : "'.$row->username.'", "insure_comp" : "'.$row->insure_comp.'", "addr" : "'.$row->addr.'", "pat_name" : "'.$row->pat_name.'", "accident_date" : "'.$row->accident_date.'", "enrollee" : "'.$row->enrollee.'", "no_objection" : "'.$row->no_objection.'", "agentname" : "'.$row->agentname.'", "fax" : "'.$row->fax.'", "name_of_clinic" : "'.$row->name_of_clinic.'", "pat" : "'.$row->pat.'", "authorized" : "'.$row->authorized.'","message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'insurewaiveredit':
    {
        $username=$_POST['username'];
        $insure_comp=$_POST['insure_comp'];
        $addr=$_POST['addr'];
        $pat_name=$_POST['pat_name'];
        $accident_date=$_POST['accident_date'];
        $enrollee=$_POST['enrollee'];
        $no_objection=$_POST['no_objection'];
        $agentname=$_POST['agentname'];
        $fax=$_POST['fax'];

        $name_of_clinic=$_POST['name_of_clinic'];
        $pat=$_POST['pat'];
        $authorized=$_POST['authorized'];




        /*  $username="priya";
          $insure_comp="sedhu";
          $addr="sedhu";
          $pat_name="sedhu";
          $accident_date="sedhu";
          $enrollee="sedhu";
          $no_objection="sedhu";
          $agentname="sedhu";
          $fax="sedhu";

          $name_of_clinic="sedhu";
          $pat="sedhu";
          $authorized="sedhu";
       */


        $sql2="update tbl_insuranceplan set insure_comp='".$insure_comp."',addr='".$addr."',pat_name='".$pat_name."',accident_date='".$accident_date."',enrollee='".$enrollee."',no_objection='".$no_objection."',agentname='".$agentname."',fax='".$fax."',name_of_clinic='".$name_of_clinic."',pat='".$pat."',authorized='".$authorized."' WHERE username='".$username."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'insurewaiverinsert':
    {
        $username=$_POST['username'];
        $insure_comp=$_POST['insure_comp'];
        $addr=$_POST['addr'];
        $pat_name=$_POST['pat_name'];
        $accident_date=$_POST['accident_date'];
        $enrollee=$_POST['enrollee'];
        $no_objection=$_POST['no_objection'];
        $agentname=$_POST['agentname'];
        $fax=$_POST['fax'];
        $name_of_clinic=$_POST['name_of_clinic'];
        $pat=$_POST['pat'];
        $authorized=$_POST['authorized'];




        /*   $username="sedhu";
            $insure_comp="thendral";
            $addr="20";
            $pat_name="12/1/1212";
            $accident_date="123";
           $enrollee="thendral";
           $no_objection="20";
           $agentname="12/1/1212";
           $fax="123";

           $name_of_clinic="sedhu";
           $pat="thendral";
           $authorized="20";



   */

        $sql3="insert into tbl_insuranceplan(no,username,insure_comp,addr,pat_name,accident_date,enrollee,no_objection,agentname,fax,name_of_clinic,pat,authorized) values ('','".$username."','".$insure_comp."','".$addr."','".$pat_name."','".$accident_date."','".$enrollee."','".$no_objection."','".$agentname."','".$fax."','".$name_of_clinic."','".$pat."','".$authorized."')";


        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'insurewaiverdelete':
    {
        $username=$_POST['username'];
        //   $username="priya";
        $sql4 ="delete from tbl_insuranceplan where username='".$username."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "insurewaiver Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>