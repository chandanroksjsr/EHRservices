<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/05/14
 * Time: 4:34 PM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'patientattorneyselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM patientattorney WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "Yes", "patientattorneyuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);



                    $json 		.= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "Yes", "patientid" : "'.$row->patientid.'", "username" : "'.$row->username.'", "name" : "'.$row->name.'", "address" : "'.$row->address.'", "reg" : "'.$row->reg.'", "patientname" : "'.$row->patientname.'", "date" : "'.$row->date.'", "dearsir" : "'.$row->dearsir.'", "nameofclinic" : "'.$row->nameofclinic.'", "treat" : "'.$row->treat.'",  "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'patientattorneyedit':
    {
        $user_name=$_POST['username'];
        $name=$_POST['name'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $reg=$_POST['reg'];
        $patientname=$_POST['patientname'];
        $date=$_POST['date'];
        $dearsir=$_POST['dearsir'];
        $nameofclinic=$_POST['nameofclinic'];
        $treat=$_POST['treat'];


//        $user_name="silvi";
//        $name="silvi";
//        $address="Jakkappan nagar";
//        $reg="silvi";
//
//        $patientname="silviya";
//        $date="06/12/2014";
//
//        $dearsir="silviya";
//        $nameofclinic="14/12/2014";
//        $treat="angel";
//

        $sql2="update patientattorney set name='".$name."',address='".$address."',reg='".$reg."',patientname='".$patientname."',date='".$date."',dearsir='".$dearsir."',nameofclinic='".$nameofclinic."',treat='".$treat."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'patientattorneyinsert':
    {
        $user_name=$_POST['username'];
        $name=$_POST['name'];
        $address=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['address']);
        $reg=$_POST['reg'];

        $patientname=$_POST['patientname'];
        $date=$_POST['date'];
        $dearsir=$_POST['dearsir'];
        $nameofclinic=$_POST['nameofclinic'];
        $treat=$_POST['treat'];


//        $user_name="silvi";
//        $name="proofof";
//        $address="september";
//        $reg="silvi";
//
//        $patientname="asdf";
//        $date="asdf";
//        $dearsir="silviya";
//        $nameofclinic="12/12/2012";
//        $treat="angel";

        $sql3="INSERT INTO patientattorney(patientid,username,name,address,reg,patientname,date,dearsir,nameofclinic,treat) VALUES ('','".$user_name."','".$name."','".$address."','".$reg."','".$patientname."','".$date."','".$dearsir."','".$nameofclinic."','".$treat."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'patientattorneydelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from patientattorney where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "patientattorney Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}

?>