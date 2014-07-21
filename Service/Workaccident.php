<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'workaccidentselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_workaccident WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "Yes", "workaccidentuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "Yes", "patient_no" : "'.$row->patient_no.'", "username" : "'.$row->username.'", "job_classification" : "'.$row->job_classification.'", "doyou_pos" : "'.$row->doyou_pos.'", "doyou" : "'.$row->doyou.'", "pick" : "'.$row->pick.'", "carry" : "'.$row->carry.'", "injury_occur" : "'.$row->injury_occur.'", "saw_accident" : "'.$row->saw_accident.'", "title" : "'.$row->title.'", "present_job" : "'.$row->present_job.'", "time_loss" : "'.$row->time_loss.'", "absenteeism" : "'.$row->absenteeism.'", "type_of_light" : "'.$row->type_of_light.'", "lighting" : "'.$row->lighting.'", "pick_lift" : "'.$row->pick_lift.'","how_much" : "'.$row->how_much.'","how_often" : "'.$row->how_often.'","where_to_where" : "'.$row->where_to_where.'","lift_from" : "'.$row->lift_from.'","liftin_orout" : "'.$row->liftin_orout.'","workpos" : "'.$row->workpos.'","push_pull" : "'.$row->push_pull.'","jobpp" : "'.$row->jobpp.'","work_area" : "'.$row->work_area.'","warea" : "'.$row->warea.'","levers" : "'.$row->levers.'","overhead" : "'.$row->overhead.'","no_of_employees" : "'.$row->no_of_employees.'","like_job" : "'.$row->like_job.'","pre_employment" : "'.$row->pre_employment.'","return_job" : "'.$row->return_job.'","changes_in_job" : "'.$row->changes_in_job.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'workaccidentedit':
    {
        $user_name=$_POST['username'];
        $job_classification=$_POST['job_classification'];
        $doyou_pos=$_POST['doyou_pos'];
        $doyou=$_POST['doyou'];
        $pick=$_POST['pick'];
        $carry=$_POST['carry'];
        $injury_occur=$_POST['injury_occur'];
        $saw_accident=$_POST['saw_accident'];
        $title=$_POST['title'];
        $present_job=$_POST['present_job'];
        $time_loss=$_POST['time_loss'];
        $absenteeism=$_POST['absenteeism'];
        $type_of_light=$_POST['type_of_light'];
        $lighting=$_POST['lighting'];
        $pick_lift=$_POST['pick_lift'];
        $how_much=$_POST['how_much'];
        $how_often=$_POST['how_often'];
        $where_to_where=$_POST['where_to_where'];
        $lift_from=$_POST['lift_from'];
        $liftin_orout=$_POST['liftin_orout'];
        $workpos=$_POST['workpos'];
        $push_pull=$_POST['push_pull'];
        $jobpp=$_POST['jobpp'];
        $work_area=$_POST['work_area'];
        $warea=$_POST['warea'];
        $levers=$_POST['levers'];
        $overhead=$_POST['overhead'];
        $no_of_employees=$_POST['no_of_employees'];
        $like_job=$_POST['like_job'];
        $pre_employment=$_POST['pre_employment'];
        $return_job=$_POST['return_job'];
        $changes_in_job=$_POST['changes_in_job'];



//        $user_name="silvi";
//        $job_classification="proofof";
//        $doyou_pos="sit_desk";
//        $doyou="sit_desk";
//        $pick="yes";
//        $carry="";
//        $injury_occur="in leg";
//        $saw_accident="silviya";
//        $title="workacc";
//        $present_job="developer";
//        $time_loss="yes";
//        $absenteeism="angel";
//        $type_of_light="flurescent";
//        $lighting="angel";
//        $pick_lift="yes";
//        $how_much="1500";
//        $how_often="12";
//        $where_to_where="chennai to krishnagiri";
//        $lift_from="ground";
//        $liftin_orout="No";
//        $workpos="sit";
//        $push_pull="No";
//        $jobpp="";
//        $work_area="oily";
//        $warea="";
//        $levers="No";
//        $overhead="No";
//        $no_of_employees="12";
//        $like_job="No";
//        $pre_employment="No";
//        $return_job="No";
//        $changes_in_job="No";


        $sql2="update tbl_workaccident set job_classification='".$job_classification."',doyou_pos='".$doyou_pos."',doyou='".$doyou."',pick='".$pick."',carry='".$carry."',injury_occur='".$injury_occur."',saw_accident='".$saw_accident."',title='".$title."',present_job='".$present_job."',time_loss='".$time_loss."',absenteeism='".$absenteeism."',type_of_light='".$type_of_light."',lighting='".$lighting."',pick_lift='".$pick_lift."',how_much='".$how_much."',how_often='".$how_often."',where_to_where='".$where_to_where."',lift_from='".$lift_from."',liftin_orout='".$liftin_orout."',workpos='".$workpos."',push_pull='".$push_pull."',jobpp='".$jobpp."',work_area='".$work_area."',warea='".$warea."',levers='".$levers."',overhead='".$overhead."',no_of_employees='".$no_of_employees."',like_job='".$like_job."',pre_employment='".$pre_employment."',return_job='".$return_job."',changes_in_job='".$changes_in_job."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'workaccidentinsert':
    {
        $user_name=$_POST['username'];
        $job_classification=$_POST['job_classification'];
        $doyou_pos=$_POST['doyou_pos'];
        $doyou=$_POST['doyou'];
        $pick=$_POST['pick'];
        $carry=$_POST['carry'];
        $injury_occur=$_POST['injury_occur'];
        $saw_accident=$_POST['saw_accident'];
        $title=$_POST['title'];
        $present_job=$_POST['present_job'];
        $time_loss=$_POST['time_loss'];
        $absenteeism=$_POST['absenteeism'];
        $type_of_light=$_POST['type_of_light'];
        $lighting=$_POST['lighting'];
        $pick_lift=$_POST['pick_lift'];
        $how_much=$_POST['how_much'];
        $how_often=$_POST['how_often'];
        $where_to_where=$_POST['where_to_where'];
        $lift_from=$_POST['lift_from'];
        $liftin_orout=$_POST['liftin_orout'];
        $workpos=$_POST['workpos'];
        $push_pull=$_POST['push_pull'];
        $jobpp=$_POST['jobpp'];
        $work_area=$_POST['work_area'];
        $warea=$_POST['warea'];
        $levers=$_POST['levers'];
        $overhead=$_POST['overhead'];
        $no_of_employees=$_POST['no_of_employees'];
        $like_job=$_POST['like_job'];
        $pre_employment=$_POST['pre_employment'];
        $return_job=$_POST['return_job'];
        $changes_in_job=$_POST['changes_in_job'];



//        $user_name="silvi";
//        $job_classification="proofof";
//        $doyou_pos="sit_desk";
//        $doyou="christina";
//        $pick="No";
//        $carry="";
//        $injury_occur="in leg";
//        $saw_accident="christina";
//        $title="workacc";
//        $present_job="developer";
//        $time_loss="No";
//        $absenteeism="christina";
//        $type_of_light="flurescent";
//        $lighting="christina";
//        $pick_lift="No";
//        $how_much="2500";
//        $how_often="12";
//        $where_to_where="chennai ";
//        $lift_from="chennai";
//        $liftin_orout="Yes";
//        $workpos="sit";
//        $push_pull="Yes";
//        $jobpp="";
//        $work_area="oily";
//        $warea="";
//        $levers="Yes";
//        $overhead="Yes";
//        $no_of_employees="12";
//        $like_job="Yes";
//        $pre_employment="Yes";
//        $return_job="Yes";
//        $changes_in_job="Yes";

        $sql3="INSERT INTO tbl_workaccident(patient_no,username,job_classification,doyou_pos,doyou,pick,carry,injury_occur,saw_accident,title,present_job,time_loss,absenteeism,type_of_light,lighting,pick_lift,how_much,how_often,where_to_where,lift_from,liftin_orout,workpos,push_pull,jobpp,work_area,warea,levers,overhead,no_of_employees,like_job,pre_employment,return_job,changes_in_job) VALUES ('','".$user_name."','".$job_classification."','".$doyou_pos."','".$doyou."','".$pick."','".$carry."','".$injury_occur."','".$saw_accident."','".$title."','".$present_job."','".$time_loss."','".$absenteeism."','".$type_of_light."','".$lighting."','".$pick_lift."','".$how_much."','".$how_often."','".$where_to_where."','".$lift_from."','".$liftin_orout."','".$workpos."','".$push_pull."','".$jobpp."','".$work_area."','".$warea."','".$levers."','".$overhead."','".$no_of_employees."','".$like_job."','".$pre_employment."','".$return_job."','".$changes_in_job."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'workaccidentdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from tbl_workaccident where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "workaccident Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>