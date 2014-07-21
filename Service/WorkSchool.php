<?php

session_start();
require("../config.php");
$case = $_REQUEST['service'];
switch($case)
{
    case 'workschoolselect':
    {

        $username = $_POST['username'];
      // $username = "sedhu";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_workschool WHERE username='$username'";
        // echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {
                // echo "in flag==1";
                // echo $sql1;
                $json = '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "Yes", "workschooluser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "Yes", "workid" : "'.$row->workid.'", "username" : "'.$row->username.'", "date" : "'.$row->date.'", "letter" : "'.$row->letter.'", "beexcused" : "'.$row->beexcused.'", "excused" : "'.$row->excused.'","beconfined" : "'.$row->beconfined.'","confined" : "'.$row->confined.'","lifting" : "'.$row->lifting.'","lift" : "'.$row->lift.'","pushing" : "'.$row->pushing.'","push" : "'.$row->push.'","drive" : "'.$row->drive.'","sitting" : "'.$row->sitting.'","sit" : "'.$row->sit.'","standing" : "'.$row->standing.'","stand" : "'.$row->stand.'","bend" : "'.$row->bend.'","entry" : "'.$row->entry.'","light" : "'.$row->light.'","froms" : "'.$row->froms.'","tos" : "'.$row->tos.'","returns" : "'.$row->returns.'","regular" : "'.$row->regular.'","returndate" : "'.$row->returndate.'","diagnosis" : "'.$row->diagnosis.'","message" : "1" } }';


                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
                //echo $json;
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'workschooledit':
    {
         $username=$_POST['username'];
         $date=$_POST['date'];
         $letter=$_POST['letter'];
         $beexcused=addslashes($_POST['beexcused']);
         //$beexcused=$_POST['beexcused'];
         $excused=$_POST['excused'];
         $beconfined=$_POST['beconfined'];
         $confined=$_POST['confined'];
         $lifting=$_POST['lifting'];
         $lift=$_POST['lift'];
         $pushing=$_POST['pushing'];
         $push=$_POST['push'];
         $drive=$_POST['drive'];
         $sitting=$_POST['sitting'];
         $sit=$_POST['sit'];
         $standing=$_POST['standing'];
         $stand=$_POST['stand'];
         $bend=$_POST['bend'];
         $entry=$_POST['entry'];
         $light=$_POST['light'];
         $froms=$_POST['froms'];
         $tos=$_POST['tos'];
         $returns=$_POST['returns'];
        $regular=$_POST['regular'];
         $returndate=$_POST['returndate'];
         $diagnosis=$_POST['diagnosis'];



       /* $username="sedhu";
        $date="datey";
        $letter="lettery";
        $beexcused="beexcusedy";
        $excused="excusedy";
        $beconfined="beconfinedy";
        $confined="confinedy";
        $lifting="liftingy";
        $lift="lifty";
        $pushing="pushingy";
        $push="pushy";
        $drive="drivey";
        $sitting="sittingy";
        $sit="sity";
        $standing="standingy";
        $stand="standy";
        $bend="bendy";
        $entry="entryy";
        $light="lighty";
        $froms="fromsy";
        $tos="tosy";
        $returns="returnsy";
        $returndate="returndatey";
        $diagnosis="diagnosisy";
*/
        $sql2="update tbl_workschool set username ='".$username."',date ='".$date."',letter ='" .$letter."',beexcused ='".$beexcused."',excused ='" .$excused."',beconfined ='" .$beconfined."',confined ='" .$confined."',lifting ='" .$lifting."',lift ='" .$lift."',pushing ='" .$pushing."',push ='" .$push."',drive ='" .$drive."',sitting ='" .$sitting."',sit ='" .$sit."',standing ='" .$standing."',stand ='" .$stand."',bend ='" .$bend."',entry ='" .$entry."',light ='" .$light."',froms ='" .$froms."',tos ='" .$tos."',returns ='" .$returns."',regular ='" .$regular."',returndate ='" .$returndate."',diagnosis ='" .$diagnosis."' WHERE  username ='".$username."'";

       // echo $sql2;


        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'workschoolinsert':
    {



        $username=$_POST['username'];
        $date=$_POST['date'];
        $letter=$_POST['letter'];
        $beexcused=addslashes($_POST['beexcused']);
        //$beexcused=$_POST['beexcused'];
        $excused=$_POST['excused'];
        $beconfined=$_POST['beconfined'];
        $confined=$_POST['confined'];
        $lifting=$_POST['lifting'];
        $lift=$_POST['lift'];
        $pushing=$_POST['pushing'];
        $push=$_POST['push'];
        $drive=$_POST['drive'];
        $sitting=$_POST['sitting'];
        $sit=$_POST['sit'];
        $standing=$_POST['standing'];
        $stand=$_POST['stand'];
        $bend=$_POST['bend'];
        $entry=$_POST['entry'];
        $light=$_POST['light'];
        $froms=$_POST['froms'];
        $tos=$_POST['tos'];
        $returns=$_POST['returns'];
        $regular=$_POST['regular'];
        $returndate=$_POST['returndate'];
        $diagnosis=$_POST['diagnosis'];



    /*    $username="sedhu";
         $date="date";
         $letter="letter";
         $beexcused="beexcused";
         $excused="excused";
         $beconfined="beconfined";
         $confined="confined";
         $lifting="lifting";
         $lift="lift";
         $pushing="pushing";
         $push="push";
         $drive="drive";
         $sitting="sitting";
         $sit="sit";
         $standing="standing";
         $stand="stand";
         $bend="bend";
         $entry="entry";
         $light="light";
         $froms="froms";
         $tos="tos";
         $returns="returns";
         $returndate="returndate";
         $diagnosis="diagnosis";

    */
        $sql3="insert into tbl_workschool(workid,username,date,letter,beexcused,excused,beconfined,confined,lifting,lift,pushing,push,drive,sitting,sit,standing,stand,bend,entry,light,froms,tos,returns,regular,returndate,diagnosis) values ('','".$username."', '".$date."','".$letter."', '".$beexcused."','".$excused."', '".$beconfined."', '".$confined."', '".$lifting."', '".$lift."','".$pushing."', '".$push."','".$drive."', '".$sitting."','".$sit."', '".$standing."', '".$stand."', '".$bend."','".$entry."', '".$light."', '".$froms."', '".$tos."', '".$returns."', '".$regular."','".$returndate."', '".$diagnosis."')";

        //  echo $sql3;
        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'workschooldelete':
    {
        $username= $_POST['username'];
        // $username= "sedhu";
        $sql4 ="delete from tbl_workschool where username='".$username."'";
        //echo $sql4;
        if(mysql_query($sql4))
        {


            $json	= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "workschool Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;

    }
}
?>