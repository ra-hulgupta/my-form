<?php     
/*   if(isset($_SESSION['start'])){
     if($_SESSION['update'] - $_SESSION['start'] >= 10){
    ?> 
    <meta http-equiv="refresh" content="2; URL='./second.php'"/> 
  <?php 
}
    }*/
    session_start();
     if (!isset($_SESSION['views'])) { 
                 $_SESSION['views'] = 0;}

            $_SESSION['views'] += 1;

        if ($_SESSION['views'] == 1) {
            header("location:./validation for 1st.php");
              }  
    if($_SESSION['variable1'] == 1)
      echo "<style> .signal1{    background-color: #5cb85c !important;
                                }
                                </style>";
   
    if($_SESSION['variable2'] == 1)
      echo "<style> .signal2{    background-color: #5cb85c !important;
                                }
                                </style>";

    if($_SESSION['variable3'] == 1)
      echo "<style> .signal3{    background-color: #5cb85c !important;
                                }
                                </style>" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>a job specific form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/stylesheet.css" type="text/css">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=mei8cnuxsgal84oak3lu4zxhyeb95goxu8teyrdyak7a1jyb"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>

<div class="container-fluid">
  <h2>Job recruiter form</h2>
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <button type="button"  class="btn btn-info signal1" data-toggle="modal" data-target="#myModal1">Specific info
        </button>
    </div>
    
    <div class="btn-group">
      <button type="button" id="todisable2" class="btn btn-info signal2" data-toggle="modal" data-target="#myModal2">General details
      </button>
    </div>
    
    <div class="btn-group">
        <button type="button" id="todisable3" class="btn btn-info signal3" data-toggle="modal" data-target="#myModal3">Earning Opportunities
      </button>
    </div>
  </div>
</div>

<div class="container">
  <!--  first Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header mystyle3">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="color:red;">Specific info</h3>
        </div>
        <div class="modal-body jumbotron mystyle3">
         <form class="form-horizontal" method="post" action="./validation for 1st.php" enctype="multipart/form-data">
          
          <div class="form-group" id="firstidforcheck" style="padding-left:50px;" onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'">
          <label for="check1" style="font-size:2em;font-family:sans-serif;color:red;"><span><i class="glyphicon glyphicon-user"></i></span>Type of work</label><br><span id="countch1" class="badge"></span><span id="countchwithnumber" class="badge"></span><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input class="check11" type="checkbox" name="check1" value="part time"> Part time </lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input class="check11" type="checkbox" name="check1" value="full time"> full time </lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input class="check11" type="checkbox" name="check1" value="intern"> Intern </lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input class="check11" type="checkbox" name="check1" value="work from home"> work from home </lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input class="check11" type="checkbox" name="check1" value="live project"> live project </lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input class="check11" type="checkbox" name="check1" value="cotractual"> contractual </lable><br>
          </div>

          <div class="form-group" onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'" style="padding-left:50px;font-size:1.1em;font-family:sans-serif;color:red;">
            <label><input type="radio" id="yeargap" name="checkbox for year gap" value="yes" onclick="myfunction1()" required>
              <mark>Are you willing application from candidate who have taken gap?</mark></label>
      
            <div id="option1" style="display:none;"> 
 
            <label><input class="check13" type="radio" name="gaps" value="1-2 years" required> is it of 2yrs? </label><br>
            <label><input class="check13" type="radio" name="gaps" value="2-4 years"> is it of 4yrs? </label><br>
            <label><input class="check13" type="radio" name="gaps" value="4-6 years"> is it of 6yrs? </label><br>      
            </div>
          </div><br>
        
        <div style="border-bottom:5px solid rgba(211,30,30,0.5);width:100%;"></div><br>

      <div class="form-group" onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'" style="padding-left:8%;">
        <span class="glyphicon glyphicon-shopping-cart" style="float:left;font-size:1.8em;color:red;"></span><p style="font-size:1.8em;color:red;">&nbsp;<b>Preferences</b></p><br>
        <div style="align-content:center;padding-left:5%;">
        <ul type="disk">
            <li><b style="font-size:1.4em;color:red;"><span class="glyphicon glyphicon-user"></span> Gender </b></li><br><span id="countch2" class="badge"></span><span id="countchwithnumber2" class="badge"></span><br>
        <label style="font-size:1.3em;font-family:sans-serif;"><input class="check12" type="checkbox" name="check2" value="male" > Male </label><br>
        <label style="font-size:1.3em;font-family:sans-serif;"><input class="check12" type="checkbox" name="check2" value="female"> Female </label><br>
        <label style="font-size:1.3em;font-family:sans-serif;"><input class="check12" type="checkbox" name="check2" value="other" > Other </label><br><br>
        
            <li><b style="font-size:1.4em;color:red;"><span class="glyphicon glyphicon-tasks"></span> Add Languages </b></li>
         <p style="font-size:1.4em;color:red;">press <kbd> ctrl + leftclick </kbd> to select multiple options not more then <kbd>5</kbd> and choose them in priority from high to low.</p><br>
          <span id="langlimit" class="badge"></span><span id="langlimitwithnumber" class="badge"></span><br>
         <select name="languages" id="selectid" multiple="multiple" style="font-size:1.2em;" required>
         <option value="english">English</option>
         <option value="hindi">Hindi</option>
         <option value="malyalam">Malyalam</option>
         <option value="marathi">Marathi</option>
         <option value="gujrati">gujrati</option>
         <option value="bengali">bengali</option>
         <option value="urdu">urdu</option>
         <option value="kannad">kannad</option>
        </select><br><br>

        <li><p style="font-size:1.3em;color:red;"><b>location</b> select from which location you want your intern.</p></li><br>
           <span id="locationlimit" class="badge"></span><span id="locationlimitwithnumber" class="badge"></span><br>
         <select name="location" id="selectidforlocation" multiple="multiple" required>
         <option value="mumbai">Mumbai</option>
         <option value="chennai">Chennai</option>
         <option value="bengaluru">Bengaluru</option>
         <option value="kolkata">Kolkata</option>
         <option value="pune">Pune</option>
         <option value="hyderabad">Hyderabad</option>
         <option value="ahmedabad">Ahmedabad</option> 
         <option value="jaipur">Jaipur</option>
        </select>
         <br> <br>
          <li><div>
            <input type="file" name="my_file[]" accept="application/pdf,application/xsl" multiple>
              </div></li>  
          </ul>
      </div> 
    </div>  <br><br>
         <div class="modal-footer"> 
          <div class="container-fluid">
            <div class="row">
             <div class="col-sm-4">
            <input id="submit3" type="submit" class="btn btn-link" style="float:left;" 
            onMouseOver="this.style.border='1px solid rgba(255,0,0,1)'" onMouseOut="this.style.border='none'">.</div>
            <div class="col-sm-4"><a class="btn btn-link" href="./destroysession.php" role="button">Fresh form start</a></div> 
            <div class="col-sm-4"><label><input type="checkbox" name="remember" checked>Remember me</label></div>
          </div>
        </div>
        </div>
      </form>
    </div> </div></div>
</div>  
</div>

<!-- second modal -->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header mystyle3">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="color:red;">General info(for candidate)</h3>
        </div>
        <div class="modal-body jumbotron mystyle3">
         <form class="form-horizontal" method="post" action="./validation for 2nd.php" enctype="multipart/form-data">
          
          <div class="form-group"  onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'">
           <ul>
            <li style="color:red;font-size:1.5em;"><b>Job Title</b> select for which designation you are willing to hire.</li><br>
           <span id="joblimit" class="badge"></span><span id="joblimitwithnumber" class="badge"></span><br>
         <select name="jobtitle" id="selectidforjob" multiple="multiple" style="font-size:1.5em;" required>
         <option value="software engineer">Software Engineer</option>
         <option value="network engineer">Network Engineer</option>
         <option value="network administrator">Network Administrator</option>
         <option value="Computer Scientist">Computer Scientist</option>
         <option value="system analyst">System Analyst</option>
         <option value="business analyst">Business Analyst</option>
         <option value="tech support">Tech Support</option> 
         <option value="it consultant">IT Consultant</option>
         </select>
         <br> <br>

          <li style="color:red;font-size:1.5em;"><b>Job Description</b></li><br><br>
          <textarea class="job_description" id="tinymce1" placeholder="tell something about your jobs..." ></textarea><br><br>
          
         <li style="color:red;font-size:1.5em;"><b>Key Skills required</b></li><br>
         <span id="skillslimit" class="badge"></span><span id="skillslimitwithnumber" class="badge"></span><br>
         <select name="skills" id="selectidforskills" multiple="multiple" style="font-size:1.5em;" required>
         <option value="htmlcss">HTML/CSS</option>
         <option value="js">JS</option>
         <option value="php">php</option>
         <option value="c/c++">C/C++</option>
         <option value="sql">SQL</option>
         <option value="java">JAVA</option>
         <option value="go">GO</option> 
         <option value="rubyonrails">Ruby on Rails</option>
         </select><br><br>

          <li style="font-size:1.5em;color:red;"><b>Experience</b></li><br>
          <input type="number" id="min_experience" placeholder="default from 0" step="0.5" min="0" max="10" style="width:30%;"> to
          <input type="number" id="max_experience" placeholder="to....." step="0.5" min="0" max="10" style="width:30%;">years<br><br>

          <li style="font-size:1.5em;color:red;"><b>Salary</b></li><br>
          <input type="number" id="salary_id" placeholder="salary upto..." step="0.5" min="0" style="width:30%;">&#x20b9;<br><br>
          
          <li style="font-size:1.5em;color:red;"><b>Provide your company's name</b></li><br>
          <input type="text" id="company_name" name="company name" placeholder="name of the company..." style="width:30%;"><br><br>

          <li style="font-size:1.5em;color:red;"><b>Provide your company's WEB ADDRESS</b></li><br>
          <input type="text" id="web_add" name="web address" placeholder="web address" style="width:30%;"><br><br>
          
          <li style="font-size:1.5em;color:red;"><b>Company's Head quarter address</b></li>
          <textarea id="tinymce2" class="main_physical_address" ></textarea><br><br>
          
          <li style="font-size:1.5em;color:red;"><b>Upload your logo if any</b></li><br>
          <input id="logo_id" type="file" name="myImage" accept="image/*" /><br><br>
          </ul>
           </div><br><br>
         <div class="modal-footer"> 
            <div class="container-fluid"> 
            <div class="row" id="row2" >
             <div class="col-sm-4">
            <input id="submit2" type="submit" class="btn btn-link" style="float:left;" 
            onMouseOver="this.style.border='1px solid rgba(255,0,0,1)'" onMouseOut="this.style.border='none'">.</div>
            <div class="col-sm-4"><a class="btn btn-link" href="./destroysession.php" role="button">Fresh form start</a></div> 
            <div class="col-sm-4"><label><input type="checkbox" name="remember" checked>Remember me</label></div>
          </div>
        </div></div>
    </form>
  </div></div></div></div></div>

<!-- third modal-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header mystyle3">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="color:red;">Earning Opprtunities</h3>
        </div>
        <div class="modal-body jumbotron mystyle3">
         <form class="form-horizontal" method="post" action="./validation for 3rd.php" enctype="multipart/form-data">
          
          <div class="form-group"  onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'">
          <ul>
          <li style="font-size:1.5em;color:red;"><b>Allow refferal to this jobs</b></li><br>
          <lable style="font-size:1.5em;"><input class="refferal_class" type="radio" name="refferal"  value="yes" required /> Yes </lable><br>
          <span><lable style="font-size:1.5em;"><input class="refferal_class" type="radio" name="refferal" value="no"/> No </lable></span><br><br>
          
          
          <li style="font-size:1.5em;color:red;"><b>Salary type</b></li><br>
          <lable style="font-size:1.5em;"><input type="radio" class="classforsalarytype" value="flat_salary" name="salarytype" required /> Flat </lable><br>
          <label style="font-size:1.5em;"><input type="radio" class="classforsalarytype" id="salaryid" name="salarytype" value="commission_based" />
            Commission based </label><br>
      
            <div id="option2" style="display:none;"> 
             <input id="commission" type="number" value="10" step="0.5" min="0" max="100" />%
           </div><br><br>
          <!--<li><b>Do you allow outplacing to this jobs</b></li><br>
          <lable><input type="radio" value="notoutplaced" name="outplacingname" checked/>No</lable><br>
          <label><input type="radio" id="outplacing" name="outplacingname" value="outplaced" onclick="myfunction3()">
            Yes</label><br><br>
             
             <div id="option3" style="display:none;"> 
             <input type="number" value="10" step="0.5" min="0" max="100" />%
           </div><br><br>

            <div id="option4" style="display:none;"> 
            <input type="email" placeholder="Email"><br>
            <input type="number" placeholder="Phone no."><br>
            <input type="text" placeholder="Name of...">
           </div><br><br>
           -->
          <li style="font-size:1.5em;color:red;"><b>Do you allow outplacing for this job</b></li><br>
          <label style="font-size:1.5em;"><input class="outplacing_class" type="radio" value="No" name="outplacing" required /> No </lable><br>
          <label style="font-size:1.0em;"><input class="outplacing_class" type="radio" id="outplacingid" name="outplacing" value="Yes" /> Yes </label><br>
      
            <div id="option3" style="display:none;">
              <table>
            <tr> <td><label style="font-size:1.2em;">Name:</label></td><td><input class="last_class" id="name_id" type="text" placeholder="Name" /></td></tr>
            <tr> <td><label style="font-size:1.2em;">Email id:</label></td><td><input class="last_class" id="email_id" type="email" placeholder="email id" /></td></tr>
            <tr> <td><label style="font-size:1.2em;">Phone no.</label></td><td><input class="last_class" id="phone_no" type="tel" placeholder="phone no." maxlength="10" minlength="10" /></td></tr>  </table>  
           </div><br><br>
           
         </ul>
          </div>  <br><br>
         <div class="modal-footer"> 
            <div class="container-fluid"> 
            <div class="row" id="row3">
             <div class="col-sm-4">
            <input id="submit3" type="submit" class="btn btn-link" style="float:left;" 
            onMouseOver="this.style.border='1px solid rgba(255,0,0,1)'" onMouseOut="this.style.border='none'">.</div>
            <div class="col-sm-4"><a class="btn btn-link" href="./destroysession.php" role="button">Fresh form start</a></div> 
            <div class="col-sm-4"><label><input type="checkbox" name="remember" checked>Remember me</label></div>
          </div>
        </div></div>
    </form>
  </div></div></div></div></div>
<!-- for 3rd -->
<script>
  $(document).ready(function(){
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
    now.setTime(expireTime);
  $(".classforsalarytype").change(function(){
      var variable = $("input[name=salarytype]:checked").val();
      if(variable == "commission_based"){
       option2.style.display = "block";
       $("#row3").hover(function(){
        var commission = document.getElementById("commission").value;
        document.cookie="commission="+commission+"; expires="+now.toGMTString()+"; path=/";
        document.cookie="flat_salary="+commission+"; expires=Sun, 6 May 2018 10:21:00 UTC; path=/";
      });
     }
      else{
        option2.style.display = "none";
      document.cookie="flat_salary=Flat_salary; expires="+now.toGMTString()+"; path=/";
      document.cookie="commission="+commission+"; expires=-(1); path=/";
      }
    });
  $(".refferal_class").change(function(){
      var refferal = $("input[name=refferal]:checked").val();
      document.cookie="refferal="+refferal+"; expires="+now.toGMTString()+"; path=/";
  });
});
</script>
<script>
    $(document).ready(function(){
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000*36000;
      now.setTime(expireTime);
      $(".outplacing_class").change(function(){
    var variable = $("input[name=outplacing]:checked").val();
      if (variable == "Yes"){     
        option3.style.display = "block";
        $(".last_class").attr("required","required");
        $(".last_class").change(function(){
        var name = document.getElementById("name_id").value;
        var email = document.getElementById("email_id").value;
        var phone = document.getElementById("phone_no").value;
        document.cookie="outplacing=No; expires=Sun, 6 May 2018 10:21:00 UTC; path=/";
        document.cookie="outplacing_name="+name+"; expires="+now.toGMTString()+"; path=/";
        document.cookie="outplacing_email="+email+"; expires="+now.toGMTString()+"; path=/";
        document.cookie="outplacing_phone="+phone+"; expires="+now.toGMTString()+"; path=/";
    });
    } else {
       option3.style.display = "none";
        $(".last_class").removeAttr("required");
        document.cookie="outplacing=No; expires="+now.toGMTString()+"; path=/";
        document.cookie="outplacing_name=useless; expires=Sun, 6 May 2018 10:21:00 UTC; path=/";
        document.cookie="outplacing_email=useless; expires=Sun, 6 May 2018 10:21:00 UTC; path=/";
        document.cookie="outplacing_phone=useless; expires=Sun, 6 May 2018 10:21:00 UTC; path=/";
    }
        });
    });
</script>
<!-- for 2nd part -->
<script>$(document).ready(function(){
    $("#min_experience").change(function(){
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000*36000;
      now.setTime(expireTime);
      var min_experience = document.getElementById("min_experience").value;
      document.cookie="min_experience="+min_experience+"; expires="+now.toGMTString()+"; path=/";
    });
    $("#max_experience").change(function(){
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000*36000;
      now.setTime(expireTime);
      var max_experience = document.getElementById("max_experience").value;
      document.cookie="max_experience="+max_experience+"; expires="+now.toGMTString()+"; path=/";
    });
    $("#salary_id").change(function(){
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000*36000;
      now.setTime(expireTime);
      var salary_id = document.getElementById("salary_id").value;
      document.cookie="salary_id="+salary_id+"; expires="+now.toGMTString()+"; path=/";
    });  
    $("#company_name").change(function(){
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000*36000;
      now.setTime(expireTime);
      var company_name = document.getElementById("company_name").value;
      document.cookie="company_name="+company_name+"; expires="+now.toGMTString()+"; path=/";
    });
    $("#web_add").change(function(){
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000*36000;
      now.setTime(expireTime);
      var web_add = document.getElementById("web_add").value;
      document.cookie="web_add="+web_add+"; expires="+now.toGMTString()+"; path=/";
    });
  });
  </script>
  <script> $(()=>{
  tinymce.init({ selector:'textarea' });
  $("#row2").on("mouseenter",()=>{
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
    now.setTime(expireTime);
   var content2 = tinymce.get('tinymce2').getContent({format:'text'});
   var content1 = tinymce.get('tinymce1').getContent({format:'html'});  
      document.cookie="job_description="+content2+"; expires="+now.toGMTString()+"; path=/";
      document.cookie="main_physical_address="+content1+"; expires="+now.toGMTString()+"; path=/";
  });
});
</script>
<script type="text/javascript">
$("document").ready(function() {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
    now.setTime(expireTime);
   var last_selected_val=null;
   $("#selectidforskills").change(function(event){
    if ($(this).val().length > 5) {
        $(this).val(last_seledcted_val);
      }
        else
          last_selected_val=$(this).val();
          document.getElementById("skillslimit").innerHTML=last_selected_val;
          document.getElementById("skillslimitwithnumber").innerHTML=last_selected_val.length;
          document.cookie="skills_selected="+last_selected_val+"; expires="+now.toGMTString()+"; path=/";
          //alert("hey this is cookie"+document.cookie);
        });
    });
</script>
<script type="text/javascript">
$("document").ready(function() {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
    now.setTime(expireTime);
   var last_selected_val=null;
    $("#selectidforjob").change(function(event){
    if ($(this).val().length > 2) {
        $(this).val(last_selected_val);
      }
        else
          last_selected_val=$(this).val();
          document.getElementById("joblimit").innerHTML=last_selected_val;
          document.getElementById("joblimitwithnumber").innerHTML=last_selected_val.length;
          document.cookie="job_titles="+last_selected_val+"; expires="+now.toGMTString()+"; path=/";
          });
    });
</script>
<!-- for general script -->
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "rgba(255,0,0,0.5)");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
  });
</script>
<!-- for sessions -->
<script>
  var session2='<?php echo $_SESSION['variable1']; ?>';
      $(document).ready(function(){
        $("#todisable2").on({
          mouseenter:function () {
            if(session2 == 0){
              alert('first fill the 1st part of the form');
            $(this).attr("disabled","disabled");}
             }
              });
                });
</script>
  <script type="text/javascript">
  var session3='<?php echo $_SESSION['variable1']; ?>';
  var session4='<?php echo $_SESSION['variable2']; ?>';
    $(document).ready(function(){
     $("#todisable3").on({
           mouseenter:function(){
            if(session3 == 0 || session4 == 0){
              alert('first fill the 1st and 2nd part of the form');
              $(this).attr("disabled","disabled");}
           }
        });
 });
</script>
<!--scripts for 1st parts -->
<script type="text/javascript">
 //var selected = [];
  //var checkBox = document.getElementByName("check1");
//$(document).ready(function() {/*
 //$("input:checkbox[name=check1]:checked").each(function() {
   //    selected.push($(this).val());
  //});*/
$(document).ready(function(){
  $(".check11").change(function(){
    var favorite1 = [];
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
   now.setTime(expireTime);
     $.each($("input[name='check1']:checked"), function(){            
                favorite1.push($(this).val());
                // alert("My favourite sports are: " + favorite.join(", "));
 document.getElementById("countch1").innerHTML=favorite1; 
   });       
 document.cookie ="typeofwork="+favorite1+"; expires="+now.toGMTString()+"; path=/";
  });
  $(".check12").change(function(){
    var favorite2 = [];
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
   now.setTime(expireTime);
            $.each($("input[name='check2']:checked"), function(){            
                favorite2.push($(this).val());
           // alert("My favourite sports are: " + favorite.join(", "));
 document.getElementById("countch2").innerHTML=favorite2;
   });
 document.cookie ="Genders="+favorite2+"; expires="+now.toGMTString()+"; path=/";
   });
});
</script>
<script type="text/javascript">
$("document").ready(function() {
       var last_selected_location=null;
   $("#selectidforlocation").change(function(event){
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000*36000;
    now.setTime(expireTime);
    if ($(this).val().length > 3) {
        $(this).val(last_selected_location);
      }
        else
          last_selected_location=$(this).val();
          document.getElementById("locationlimit").innerHTML=last_selected_location;
          document.getElementById("locationlimitwithnumber").innerHTML=last_selected_location.length;
          document.cookie ="locations="+last_selected_location+"; expires="+now.toGMTString()+"; path=/";
 });
    });
</script>
<script type="text/javascript">
$("document").ready(function() {
     var last_val_selected=null;
     var now = new Date();
     var time = now.getTime();
     var expireTime = time + 1000*36000;
     now.setTime(expireTime);
   $("#selectid").change(function(event){
   
    if ($(this).val().length > 5) {
        $(this).val(last_val_selected);
      }
        else
          last_val_selected=$(this).val();

          document.getElementById("langlimit").innerHTML=last_val_selected;
          document.getElementById("langlimitwithnumber").innerHTML=last_val_selected.length;
          document.cookie ="languages="+last_val_selected+"; expires="+now.toGMTString()+"; path=/";
 });
    });
</script>
<script>
   $(document).ready(function(){
          $(".check13").change(function(){
        var yeargaps=$("input[name=gaps]:checked").val();
        var now = new Date();
        var time = now.getTime();
        var expireTime = time + 1000*36000;
        now.setTime(expireTime);
       document.cookie ="year_gap="+yeargaps+"; expires="+now.toGMTString()+"; path=/";
   });
    });
  </script>
  <script type="text/javascript">
function myfunction1() {
    var checkBox1 = document.getElementById("yeargap");
    if (checkBox1.checked == true){
        option1.style.display = "block";
      }
     else {
       option1.style.display = "none";
    }
   }       
</script>
</body>
</html>
