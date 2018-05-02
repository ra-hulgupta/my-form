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
          <h3 class="modal-title" style="color:red;">Specific info</h4>
        </div>
        <div class="modal-body jumbotron mystyle3">
         <form class="form-horizontal" method="post" action="./validation for 1st.php" enctype="multipart/form-data">
          
          <div class="form-group" style="padding-left:50px;" onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'">
          <label for="check1" style="font-size:2em;font-family:sans-serif;color:red;"><span><i class="glyphicon glyphicon-user"></i></span>Type of work</label><br><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="check1" value="part time">&nbsp;Part time</lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="check1" value="full time">&nbsp;full time</lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="check1" value="intern">&nbsp;Intern</lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="check1" value="work from home">&nbsp;work from home</lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="check1" value="live project">&nbsp;live project</lable><br>
          <lable style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="check1" value="cotractual">&nbsp;contractual</lable><br>
          </div>

          <div class="form-group" onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'" style="padding-left:50px;font-size:1.1em;font-family:sans-serif;color:red;">
            <label><input type="radio" id="yeargap" name="checkbox for year gap" value="yes" onclick="myfunction1()" required>
              <mark>Are you willing application from candidate who have taken gap?</mark></label>
      
            <div id="option1" style="display:none;"> 
 
            <label><input type="radio" name="gaps" value="1_2"> is it of 2yrs?></label><br>
            <label><input type="radio" name="gaps" value="2_4"> is it of 4yrs?></label><br>
            <label><input type="radio" name="gaps" value="4_6"> is it of 6yrs?></label><br>      
            </div>
          </div><br>
        
        <div style="border-bottom:5px solid rgba(211,30,30,0.5);width:100%;"></div><br>

      <div class="form-group" onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'" style="padding-left:8%;">
        <span class="glyphicon glyphicon-shopping-cart" style="float:left;font-size:1.8em;color:red;"></span><p style="font-size:1.8em;color:red;">&nbsp;<b>Preferences</b></p><br>
        <div style="align-content:center;padding-left:5%;">
        <ul type="disk">
            <li><b style="font-size:1.4em;colo:red;"><span class="glyphicon glyphicon-user"></span> Gender </b></li><br>
        <label style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="checkmale" value="male" checked> Male </label><br>
        <label style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="checkfemale" value="female"> Female </label><br>
        <label style="font-size:1.3em;font-family:sans-serif;"><input type="checkbox" name="checkother" value="other" > Other </label><br><br>
        
            <li><b style="font-size:1.4em;color:red;"><span class="glyphicon glyphicon-tasks"></span> Add Languages </b></li><br>
         <p style="font-size:1.4em;color:red;">press <kbd> ctrl + leftclick </kbd> to select multiple options not more then <kbd>5</kbd> and choose them in priority from high to low.<br>
          <span id="langlimit" class="badge"></span><span id="langlimitwithnumber" class="badge"></span></p><br>
         <select name="languages" id="selectid" multiple="multiple" style="font-size:1.2em;" required>
         <option value="english" selected>English</option>
         <option value="hindi">Hindi</option>
         <option value="malyalam">Malyalam</option>
         <option value="marathi">Marathi</option>
         <option value="gujrati">gujrati</option>
         <option value="bengali">bengali</option>
         <option value="urdu">urdu</option>
         <option value="kannad">kannad</option>
        </select><br><br>

        <li><p style="font-size:1.3em;color:red;"><b>location</b> select from which location you want your intern.</p></li><br>
           <span id="locationlimit" class="badge"></span><span id="locationlimitwithnumber" class="badge"></span></p><br>
         <select name="location" id="selectidforlocation" multiple="multiple" required>
         <option value="mumbai" selected>Mumbai</option>
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
          <h3 class="modal-title" style="color:red;">General info(for candidate)</h4>
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
          <textarea placeholder="tell something about your jobs..." ></textarea><br><br>
          
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
          <input type="number" placeholder="default from 0" step="0.5" min="0" max="10" style="width:30%;"> to
          <input type="number" placeholder="to....." step="0.5" min="0" max="10" style="width:30%;">years<br><br>

          <li style="font-size:1.5em;color:red;"><b>Salary</b></li><br>
          <input type="number" placeholder="salary upto..." step="0.5" min="0" max="10" style="width:30%;">&#x20b9;<br><br>
          
          <li style="font-size:1.5em;color:red;"><b>Provide your company's name</b></li><br>
          <input type="text" name="company name" placeholder="name of the company..." style="width:30%;"><br><br>

          <li style="font-size:1.5em;color:red;"><b>Provide your company's WEB ADDRESS</b></li><br>
          <input type="text" name="web address" placeholder="web address" style="width:30%;"><br><br>
          
          <li style="font-size:1.5em;color:red;"><b>Company's Head quarter address</b></li>
          <textarea></textarea><br><br>
          
          <li style="font-size:1.5em;color:red;"><b>Upload your logo if any</b></li><br>
          <input type="file" name="myImage" accept="image/*" /><br><br>
          </ul>
           </div>  <br><br>
         <div class="modal-footer"> 
            <div class="container-fluid"> 
            <div class="row">
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
          <h3 class="modal-title" style="color:red;">Earning Opprtunities</h4>
        </div>
        <div class="modal-body jumbotron mystyle3">
         <form class="form-horizontal" method="post" action="./validation for 3rd.php" enctype="multipart/form-data">
          
          <div class="form-group"  onMouseOver="this.style.border='1px solid rgba(50,150,70,0.5)'" onMouseOut="this.style.border='none'">
          <ul>
          <li style="font-size:1.5em;color:red;"><b>Allow refferal to this jobs</b></li><br>
          <lable style="font-size:1.5em;"><input type="radio" value="yes" name="refferal" checked/> Yes </lable><br>
          <span><lable style="font-size:1.5em;"><input type="radio" name="refferal" value="no"/> No </lable></span><br><br>
          
          
          <li style="font-size:1.5em;color:red;"><b>Salary type</b></li><br>
          <lable style="font-size:1.5em;"><input type="radio" value="salaryflat" name="salarytype" checked/> Flat </lable><br>
          <label style="font-size:1.5em;"><input type="radio" id="address" name="salarytype" value="salarycommission" onclick="myfunction2()">
            Commission based</label><br>
      
            <div id="option2" style="display:none;"> 
             <input type="number" value="10" step="0.5" min="0" max="100" />%
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
          <lable style="font-size:1.5em;"><input type="radio" value="salaryflat" name="salarytype" checked/> No </lable><br>
          <label style="font-size:1.5em;"><input type="radio" id="addresss" name="salarytype" value="salarycommission" onclick="myfunction3()"> Yes </label><br>
      
            <div id="option3" style="display:none;"> 
            <label style="font-size:1.5em;">Name:<input type="text" placeholder="Name"></label><br>
            <label style="font-size:1.5em;">Email id:<input type="email id" placeholder="email id"></label><br>
            <label style="font-size:1.5em;">Phone no.<input type="tel" placeholder="phone no."></label><br>    
           </div><br><br>
           
         </ul>
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
        </div></div>
    </form>
  </div></div></div></div></div>
  
<script type="text/javascript">
$("document").ready(function() {
   var last_selected_location=null;

   $("#selectidforskills").change(function(event){
   
    if ($(this).val().length > 5) {
        $(this).val(last_selected_location);
      }
        else
          last_selected_location=$(this).val();

          document.getElementById("skillslimit").innerHTML=last_selected_location;
          document.getElementById("skillslimitwithnumber").innerHTML=last_selected_location.length;
          });
    });

</script>

<script type="text/javascript">
$("document").ready(function() {
   var last_selected_location=null;

   $("#selectidforjob").change(function(event){
   
    if ($(this).val().length > 2) {
        $(this).val(last_selected_location);
      }
        else
          last_selected_location=$(this).val();

          document.getElementById("joblimit").innerHTML=last_selected_location;
          document.getElementById("joblimitwithnumber").innerHTML=last_selected_location.length;
          });
    });

</script>

<script>
function myfunction1() {
    var checkBox1 = document.getElementById("yeargap");
    if (checkBox1.checked == true){
        option1.style.display = "block";
    } else {
       option1.style.display = "none";
    }
}
</script>

<script>
function myfunction2() {
    var checkBox2 = document.getElementById("address");
    if (checkBox2.checked == true){
        option2.style.display = "block";
    } else {
       option2.style.display = "none";
    }
}
</script>

<script>
function myfunction3() {
    var checkBox3 = document.getElementById("addresss");
    if (checkBox3.checked == true){
        option3.style.display = "block";
    } else {
       option3.style.display = "none";
    }
}
</script>


<script type="text/javascript">
$("document").ready(function() {
   var last_val_selected=null;

   $("#selectid").change(function(event){
   
    if ($(this).val().length > 5) {
        $(this).val(last_val_selected);
      }
        else
          last_val_selected=$(this).val();

          document.getElementById("langlimit").innerHTML=last_val_selected;
          document.getElementById("langlimitwithnumber").innerHTML=last_val_selected.length;
          });
    });

</script>
<script type="text/javascript">
$("document").ready(function() {
   var last_selected_location=null;

   $("#selectidforlocation").change(function(event){
   
    if ($(this).val().length > 3) {
        $(this).val(last_selected_location);
      }
        else
          last_selected_location=$(this).val();

          document.getElementById("locationlimit").innerHTML=last_selected_location;
          document.getElementById("locationlimitwithnumber").innerHTML=last_selected_location.length;
          });
    });
</script>
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "rgba(255,0,0,0.6)");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
  });
</script>

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
</body>
</html>
