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
      <button type="button" id="todisable1" class="btn btn-info signal2" data-toggle="modal" data-target="#myModal2">General details
      </button>
    </div>
    
    <div class="btn-group">
        <button type="button" id="todisable2" class="btn btn-info signal3" data-toggle="modal" data-target="#myModal3">Earning Opportunities
      </button>
    </div>
  </div>
</div>

<script>
            $(document).ready(function(){
                  $(document).find("#todisable1").on({
                   hover: function(){
                   alert(hii);  
                });
                });
           </script>
</body>
</html>