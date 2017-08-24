
<!DOCTYPE html>
<html>
<head>
  <title>Text Summarization- CNwang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
  <h1>Text Summarization</h1>
  <h6>by Charles Wang</h6>
  <p>Automatic summarization is the process of shortening a text document with software, in order to create a summary with the major points of the original document. Technologies that can make a coherent summary take into account variables such as length, writing style and syntax.</p>
  <div class="row">
    
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
	<form action="index.php" method="get" enctype="multipart/form-data">


	<div class="form-group">
    <label for="exampleTextarea">Paste your text into the box:</label>
    <textarea class="form-control" id="exampleTextarea" name="text" rows="10"></textarea>
  	</div>

	<!--<textarea name="json" name="json" cols="150" rows="40"></textarea>-->
  <p>Type the summarized sentence number you need: ex. 1 or 2 or 3</p>
  <input type="text" class="form-control" id="SN" name="SN">
  <br/>
	<input type="submit"  class="btn btn-primary" value="Submit" />
	
	</form>
    </div>
    
  </div>


  <div class="row">
    <div class="col-sm-12">
    
      <?php 
	  
      @$text= $_GET["text"];
      @$N= $_GET["SN"]; 
	  //echo $text."#".$N;
	$file_path = '"C:\Program Files\R\R-3.4.1\bin\x64\Rscript.exe"'.' '.'"C:\xampp56\htdocs\autotext\autotext.R"'.' '. '"'.$text.'"'. " $N";
	 //exec($file_path);
	 
	 echo '<br>';
	 
	 
	 if (exec($file_path)){
	 echo '<pre>';
     echo  system($file_path);
	 echo '</pre>';
	 }
      ?>      
    </div>
  </dir>
</div>

<!--footer-->
<div class="container">
  <div class="row">
  <hr>
    <div class="col-lg-12">
      <div class="col-md-8">
        <a href="http://www.asia.edu.tw/" target="_blank">Asia University</a> | <a href="http://www.tshedata.com/" target="_blank">TsheData</a> | <a href="https://cnwang.me" target="_blank">My Blog</a>    
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">© 2017 Charles Wang. All rights reserved</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
