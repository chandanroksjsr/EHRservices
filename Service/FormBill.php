<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'formselect':
    {

        $username = $_POST['username'];
       // $username = "sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM formbill WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "form Data", "success" : "Yes", "formuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "Yes", "date":"'.$row->date.'","insurance":"'.$row->insurance.'","address1":"'.$row->address1.'","name":"'.$row->name.'","address3":"'.$row->address3.'","patientsname":"'.$row->patientsname.'","address5":"'.$row->address5.'","medicalfee":"'.$row->medicalfee.'","amount":"'.$row->amount.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'formedit':
    {


        $username = $_POST['username'];

        $date=addslashes($_POST['date']);$insurance=addslashes($_POST['insurance']);
        $address1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address1']);
        $name=addslashes($_POST['name']);
        $address3=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address3']);
        $patientsname=addslashes($_POST['patientsname']);
        $address5=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address5']);
        $medicalfee=addslashes($_POST['medicalfee']);$amount=addslashes($_POST['amount']);
      //  $username="sedhu";

      //  $date="date";$insurance="insurance";$address1="address1";$name="name";$address3="address3";$patientsname="patientsname";$address5="address5";$medicalfee="medicalfee";$amount="amount";

        $sql2="update formbill set  date='".$date."',insurance='".$insurance."',address1='".$address1."',name='".$name."',address3='".$address3."',patientsname='".$patientsname."',address5='".$address5."',medicalfee='".$medicalfee."',amount='".$amount."' WHERE  username ='".$username."'";

       // echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'forminsert':
    {
        $username = $_POST['username'];

        $date=addslashes($_POST['date']);$insurance=addslashes($_POST['insurance']);
        $address1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address1']);
        $name=addslashes($_POST['name']);
        $address3=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address3']);
        $patientsname=addslashes($_POST['patientsname']);
        $address5=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address5']);
        $medicalfee=addslashes($_POST['medicalfee']);$amount=addslashes($_POST['amount']);
//$username="thendral";

       //  $date="date";$insurance="insurance";$address1="address1";$name="name";$address3="address3";$patientsname="patientsname";$address5="address5";$medicalfee="medicalfee";$amount="amount";
        $sql3="insert into formbill(formid,username,date,insurance,address1,name,address3,patientsname,address5,medicalfee,amount) values ('','".$username."','".$date."','".$insurance."','".$address1."','".$name."','".$address3."','".$patientsname."','".$address5."','".$medicalfee."','".$amount."')";

        //echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'formdelete':
    {
          $username= $_POST['username'];
       // $username= "thendral";
        $sql4 ="delete from formbill where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {
            //echo $sql4;

            $json	= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "form Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>