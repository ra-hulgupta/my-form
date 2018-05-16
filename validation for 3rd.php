<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') //if every thing is fine then it will send a variable with value 1 
    {
    	$a=1;
        $_SESSION['variable3'] = $a;
      //  $_SESSION['start']=time();
        //$_SESSION['update']=$_SESSION['start'] + (600);
        ini_set('SMTP','localhost');
        ini_set('smtp_port',25);
        $to = "hr@idealvillage.in";
        $subject = "My form contents";
        $message = "This info is from page 1"."\n Type of work : ".$_COOKIE['typeofwork']."\r\n\r\n";
        $message .="Year_gaps for candidates:".$_COOKIE['year_gap']."\r\n\r\n";
        $message .= "Under preferences \n Genders : ".$_COOKIE['Genders']."\r\n\r\n";
        $message .= "Languages candidate should know : ".$_COOKIE['languages']."\r\n\r\n";
        $message .= "Locations from where interns should apply : ".$_COOKIE['locations']."\r\n\r\n";
        $message .= "Ihis info is from 2nd page \n Job_titles for candidates needed :". $_COOKIE['job_titles']."\r\n\r\n";
        $message .= "Job_Description : ".$_COOKIE['job_description']."\r\n\r\n";
        $message .= "keyskills required : ".$_COOKIE['skills_selected']."\r\n\r\n";
        $message .= "Experience : ". $_COOKIE['min_experience']."to".$_COOKIE['max_experience']."\r\n\r\n";
        $message .= "Salary : ".$_COOKIE['salary_id']."\r\n\r\n";
        $message .= "Company_name : ".$_COOKIE['company_name']."\r\n\r\n";
        $message .= "Website : ".$_COOKIE['web_add']."\r\n\r\n";
        $message .= "Address of the company headquarter : ".$_COOKIE['main_physical_address']."\r\n\r\n";
        $message .= "This info is from 3rd page \n Allow refferal to the job : ". $_COOKIE['refferal']."\r\n\r\n";
        if (isset($_COOKIE['commission']))
          $message .= "Salary_type : commission_based(".$_COOKIE['commission'].")"."\r\n\r\n";
        else
          $message .= "Salary_type : ".$_COOKIE['flat_salary']."\r\n\r\n";
        if (!(isset($_COOKIE['outplacing'])))
         { $message .= "Allowed outplacing \nName : ".$_COOKIE['outplacing_name']."\r\n\r\n";
           $message .= "Email_id : ".$_COOKIE['outplaing_email']."\r\n\r\n";
           $message .= "Phone no. : ".$_COOKIE['outplacing_phone'];
         }else
         $message .="Outplacing : ".$_COOKIE['outplacing'];
        $headers = "From: rahul6288282@gmail.com\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8";
        $success = mail($to, $subject, $message, $headers);      
      } 
    else 
      { 
      	$a=0;
        $_SESSION['variable3'] = $a;
        //$_SESSION['start']=time();
        //$_SESSION['update']=$_SESSION['start'] + (600);
      }

   ?>
   <script>
        alert("Your response recorded thank you!");</script>
<meta http-equiv="refresh" content="1; URL='./destroysession.php'"/>
</head>
</html>