<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'assignmentselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM assignment_details WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "Yes", "assignmentuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "Yes", "assignment_no" : "'.$row->assignment_no.'", "username" : "'.$row->username.'", "day" : "'.$row->day.'", "month" : "'.$row->month.'", "year" : "'.$row->year.'", "day1" : "'.$row->day1.'", "month1" : "'.$row->month1.'", "patientname" : "'.$row->patientname.'", "patientsign" : "'.$row->patientsign.'", "patientdate" : "'.$row->patientdate.'", "parentname" : "'.$row->parentname.'", "parentsign" : "'.$row->parentsign.'", "parentdate" : "'.$row->parentdate.'", "representative" : "'.$row->representative.'", "representativedate" : "'.$row->representativedate.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'assignmentedit':
    {
        $user_name=$_POST['username'];
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $day1=$_POST['day1'];
        $month1=$_POST['month1'];
        $patientname=$_POST['patientname'];
        $patientsign=$_POST['patientsign'];
        $patientdate=$_POST['patientdate'];
        $parentname=$_POST['parentname'];
        $parentsign=$_POST['parentsign'];
        $parentdate=$_POST['parentdate'];
        $rep=$_POST['representative'];
        $repdate=$_POST['representativedate'];

//        $user_name="silvi";
//        $day="proofof";
//        $month="september";
//        $year="silvi";

//        $day1="12";
//        $month1="06";
//        $patientname="silviya";
//        $patientsign="silviya";
//        $patientdate="14/12/2014";
//        $parentname="angel";
//        $parentsign="angel";
//        $parentdate="14/12/2012";
//        $rep="angel";
//        $repdate="14/12/2012";

        $sql2="update assignment_details set day='".$day."',month='".$month."',year='".$year."',day1='".$day1."',month1='".$month1."',patientname='".$patientname."',patientsign='".$patientsign."',patientdate='".$patientdate."',parentname='".$parentname."',parentsign='".$parentsign."',parentdate='".$parentdate."',representative='".$rep."',representativedate='".$repdate."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'assignmentinsert':
    {
        $user_name=$_POST['username'];
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];

        $day1=$_POST['day1'];
        $month1=$_POST['month1'];
        $patientname=$_POST['patientname'];
        $patientsign=$_POST['patientsign'];
        $patientdate=$_POST['patientdate'];
        $parentname=$_POST['parentname'];
        $parentsign=$_POST['parentsign'];
        $parentdate=$_POST['parentdate'];
        $rep=$_POST['representative'];
        $repdate=$_POST['representativedate'];

//        $user_name="silvi";
//        $day="proofof";
//        $month="september";
//        $year="silvi";

//        $day1="asdf";
//        $month1="asdf";
//        $patientname="silviya";
//        $patientsign="silviya";
//        $patientdate="12/12/2012";
//        $parentname="angel";
//        $parentsign="angel";
//        $parentdate="12/12/2012";
//        $rep="angel";
//        $repdate="12/12/2012";
        $sql3="INSERT INTO assignment_details(assignment_no,username,day,month,year,day1,month1,patientname,patientsign,patientdate,parentname,parentsign,parentdate,representative,representativedate) VALUES ('','".$user_name."','".$day."','".$month."','".$year."','".$day1."','".$month1."','".$patientname."','".$patientsign."','".$patientdate."','".$parentname."','".$parentsign."','".$parentdate."','".$rep."','".$repdate."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'assignmentdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from assignment_details where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "assignment Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>