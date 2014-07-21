<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'screenselect':
    {

        $user_name = $_POST['username'];
//      $user_name="silvi";
        $flag=0;
        $sql1 ="SELECT * FROM screening_details WHERE username='$user_name'";


        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "Yes", "screenuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "Yes", "screen_no" : "'.$row->screen_no.'", "username" : "'.$row->username.'", "date" : "'.$row->date.'", "name" : "'.$row->name.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'screenedit':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $name=$_POST['name'];


//        $user_name="silvi";
//        $date="11/11/2014";
//        $name="silvi";
//


        $sql2="update screening_details set date='".$date."',name='".$name."' WHERE username='".$user_name."'";

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'screeninsert':
    {
        $user_name=$_POST['username'];
        $date=$_POST['date'];
        $name=$_POST['name'];


//        $user_name="silvi";
//        $date="12/12/2014";
//        $name="silvi";


        $sql3="insert into screening_details(screen_no,username,date,name) values ('','".$user_name."','".$date."','".$name."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'screendelete':
    {
        $user_name=$_POST['username'];

//        $user_name="silvi";

        $sql4 ="delete from screening_details where username='".$user_name."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "screen Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>