<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16/06/14
 * Time: 11:57 AM
 */

session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'symptomselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silviya";
        $flag=0;
        $sql1 ="SELECT pname,number,date FROM symptom WHERE username='".$user_name."'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "symptomuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "patient_no" : "'.$row->patient_no.'", "username" : "'.$row->username.'", "name" : "'.$row->pname.'", "number" : "'.$row->number.'", "date" : "'.$row->date.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'symptomedit':
    {
        $user_name=$_POST['username'];
        $name=$_POST['name'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $frontcount=$_POST['frontcount'];
        $backcount=$_POST['backcount'];
        $headcount=$_POST['headcount'];

        /*       $user_name="silvi";
               $name="silviyarani";
               $number="100";
               $date="10/12/2014";
               $frontcount="resources/images/aches.png";
              $backcount="10";
               $headcount="10";
        */


        $sql2="update symptom set pname='".$name."',number='".$number."',date='".$date."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $success=1;
            $sql4 ="delete from ios_symptom where username='".$user_name."'";
            mysql_query($sql4);
            if(mysql_query($sql4))
            {

                $success=1;
                for($i=0;$i<$frontcount;$i++)
                {
                    $tag="fronttag".$i."";
                    $tag=$_POST["$tag"];
                    $frontx="frontx".$i."";
                    $frontx=$_POST["$frontx"];
                    $fronty="fronty".$i."";
                    $fronty=$_POST["$fronty"];

                    $sql3="insert into ios_symptom(symptom_no,username,diag,tagnumber,xpos,ypos) values ('','".$user_name."','bodyfront.png','".$tag."','".$frontx."','".$fronty."')";

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
                for($i=0;$i<$backcount;$i++)
                {
                    $tag="backtag".$i."";
                    $tag=$_POST["$tag"];
                    $frontx="backx".$i."";
                    $frontx=$_POST["$frontx"];
                    $fronty="backy".$i."";
                    $fronty=$_POST["$fronty"];



                    $sql3="insert into ios_symptom(symptom_no,username,diag,tagnumber,xpos,ypos) values ('','".$user_name."','bodyback.png','".$tag."','".$frontx."','".$fronty."')";

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
                for($i=0;$i<$headcount;$i++)
                {
                    $tag="headtag".$i."";
                    $tag=$_POST["$tag"];
                    $frontx="headx".$i."";
                    $frontx=$_POST["$frontx"];
                    $fronty="heady".$i."";
                    $fronty=$_POST["$fronty"];


                    $sql3="insert into ios_symptom(symptom_no,username,diag,tagnumber,xpos,ypos) values ('','".$user_name."','face.png','".$tag."','".$frontx."','".$fronty."')";

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

                    $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "message" : "1" } }';

                }
                else
                {
                    $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
                }

            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
            }

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'symptominsert':
    {
        $user_name=$_POST['username'];
        $name=$_POST['name'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $frontcount=$_POST['frontcount'];
        $backcount=$_POST['backcount'];
        $headcount=$_POST['headcount'];
        /*$user_name="silvi";
         $name="silviya";
         $number="54";
         $date="12/03/2014";
         $frontcount="resources/images/aches.png";
         $backcount="15";
         $headcount="15";
 */
        $sql4 ="delete from ios_symptom where username='".$user_name."'";
        mysql_query($sql4);
        $sql3="INSERT INTO symptom(symptomno,username,pname,number,date) VALUES ('','".$user_name."','".$name."','".$number."','".$date."')";
        if(mysql_query($sql3))
        {

        $success=1;
        for($i=0;$i<$frontcount;$i++)
        {
            $tag="fronttag".$i."";
            $tag=$_POST["$tag"];
            $frontx="frontx".$i."";
            $frontx=$_POST["$frontx"];
            $fronty="fronty".$i."";
            $fronty=$_POST["$fronty"];


            $sql3="insert into ios_symptom(symptom_no,username,diag,tagnumber,xpos,ypos) values ('','".$user_name."','bodyfront.png','".$tag."','".$frontx."','".$fronty."')";

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
            for($i=0;$i<$backcount;$i++)
            {
                $tag="backtag".$i."";
                $tag=$_POST["$tag"];
                $frontx="backx".$i."";
                $frontx=$_POST["$frontx"];
                $fronty="backy".$i."";
                $fronty=$_POST["$fronty"];


                $sql3="insert into ios_symptom(symptom_no,username,diag,tagnumber,xpos,ypos) values ('','".$user_name."','bodyback.png','".$tag."','".$frontx."','".$fronty."')";

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
            for($i=0;$i<$headcount;$i++)
            {
                $tag="headtag".$i."";
                $tag=$_POST["$tag"];
                $frontx="headx".$i."";
                $frontx=$_POST["$frontx"];
                $fronty="heady".$i."";
                $fronty=$_POST["$fronty"];


                $sql3="insert into ios_symptom(symptom_no,username,diag,tagnumber,xpos,ypos) values ('','".$user_name."','face.png','".$tag."','".$frontx."','".$fronty."')";

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

            $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
        }
        echo $json;

        break;
    }
    case 'symptomdelete':
    {
        $user_name=$_POST['username'];
//        $user_name="silvi";
        $sql4 ="delete from ios_symptom where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $sql4 ="delete from symptom where username='".$user_name."'";
            if(mysql_query($sql4))
            {
                $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "message" : "1" } }';
            }
            else
            {
                $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
            }


        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'symptomscaleselect':
    {

        $user_name=$_POST['username'];

        $flag=0;
        $sql1 ="SELECT * FROM ios_symptom WHERE username='".$user_name."'";
//echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "symptomuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "symptom Data", "success" : "Yes", "username":"'.$row->username.'","diag":"'.$row->diag.'","tagnumber":"'.$row->tagnumber.'","xpos":"'.$row->xpos.'","ypos":"'.$row->ypos.'","message" : "1" } }';


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