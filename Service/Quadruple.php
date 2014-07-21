<?php
session_start();
require("../config.php");
$case = $_REQUEST['service'];

switch($case)
{
    case 'quadrupleselect':
    {

       $username = $_POST['username'];
        $symptom = str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
//      $username="62";
        $flag=0;
        $sql1 ="SELECT * FROM tbl_quadraplevisual WHERE  username='".$username."' AND symptom='".$symptom."'";
//echo $sql1;

        if($query1 = mysql_query($sql1))
        {
            $flag =1;

            if($flag == '1')
            {

                $json = '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "Yes", "quadrupleuser List" : [ ';
                for($i=0;$i<mysql_num_rows($query1);$i++)
                {


                    $row		= mysql_fetch_object($query1);


                    $json 		.= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "Yes", "quadrapleno" : "'.$row->quadrapleno.'","symptom" : "'.$row->symptom.'", "name" : "'.$row->name.'", "number" : "'.$row->number.'", "date" : "'.$row->date.'", "painname" : "'.$row->painname.'","otherpainname" : "'.$row->otherpainname.'", "painscale" : "'.$row->painscale.'", "painscale1" : "'.$row->painscale1.'", "painscale2" : "'.$row->painscale2.'", "painscale3" : "'.$row->painscale3.'", "awakehours" : "'.$row->awakehours.'", "message" : "1" } }';

                }
                $json = rtrim($json,',');
                $json .= '], "message" : "1" } }';
            }
        }
        if($flag == '0')
        {
            $json 		= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'quadrupleedit':
    {
        $username=$_POST['username'];
        $symptom=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $symptom1=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['oldsymptom']);
        $name=$_POST['name'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $painname=addslashes($_POST['painname']);
        $otherpainname=$_POST['otherpainname'];
        $painscale=$_POST['painscale'];
        $painscale1=$_POST['painscale1'];
        $painscale2=$_POST['painscale2'];
        $painscale3=$_POST['painscale3'];
        $awakehours=$_POST['awakehours'];





//        $username="62";
//        $name="silvi";
//        $number="102";
//        $date="11/11/2014";
//        $painname="christina";
//        $painscale="1";
//        $painscale1="1";
//        $painscale2="1";
//        $painscale3="1";
//        $awakehours="1";
//        $patient_id="10";

        $sql2="update tbl_quadraplevisual set symptom='".$symptom."', name='".$name."',number='".$number."',date='".$date."',painname='".$painname."',otherpainname='".$otherpainname."',painscale='".$painscale."',painscale1='".$painscale1."',painscale2='".$painscale2."',painscale3='".$painscale3."',awakehours='".$awakehours."' WHERE username='".$username."' AND symptom='".$symptom1."'" ;

       // echo $sql2;

        if(mysql_query($sql2))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;


        break;
    }
    case 'quadrupleinsert':
    {
        $username=$_POST['username'];
        $symptom=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);
        $name=$_POST['name'];
        $number=$_POST['number'];
        $date=$_POST['date'];
        $painname=addslashes($_POST['painname']);
        $otherpainname=$_POST['otherpainname'];
        $painscale=$_POST['painscale'];
        $painscale1=$_POST['painscale1'];
        $painscale2=$_POST['painscale2'];
        $painscale3=$_POST['painscale3'];
        $awakehours=$_POST['awakehours'];






//        $name="silvi";
//        $number="112";
//        $date="11/12/2014";
//        $painname="angel";
//        $painscale="5";
//        $painscale1="4";
//        $painscale2="4";
//        $painscale3="2";
//        $awakehours="2";
//        $patient_id="11";


        $sql3="INSERT INTO tbl_quadraplevisual(quadrapleno,username,symptom,name,number,date,painname,otherpainname,painscale,painscale1,painscale2,painscale3,awakehours) VALUES ('','".$username."','".$symptom."','".$name."','".$number."','".$date."','".$painname."','".$otherpainname."','".$painscale."','".$painscale1."','".$painscale2."','".$painscale3."','".$awakehours."')";

        if(mysql_query($sql3))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
    case 'quadrupledelete':
    {
        $username=$_POST['username'];
        $symptom=str_replace(array("\r\n","\n","\t","\r"),'',$_POST['symptom']);

//        $username="62";

        $sql4 ="delete from tbl_quadraplevisual where username='".$username."' and symptom='".$symptom."'";
        if(mysql_query($sql4))
        {

            $json	= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "Yes", "message" : "1" } }';

        }
        else
        {
            $json	= '{ "serviceresponse" : { "servicename" : "quadruple Data", "success" : "No", "message" : "'.$error.'" } }';
        }

        echo $json;

        break;
    }
}
?>