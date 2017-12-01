<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JBT</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
  <h1>JBT</h1>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <table>
      <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Report Type</label>
          <select class="form-control" id="exampleFormControlSelect1" name = "report_type">
            <option>Select report type</option>
            <option>users</option>
            <option>test report</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">
            <input type="file" id="file" class="custom-file-input" name= "file" required>
            <span class="custom-file-control"></span>
          </label>          
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">
             <button class="btn btn-primary" type="submit" name = 'submit'>Submit </button>
          </label>          
        </div>
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>
