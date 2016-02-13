<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assert/date/jquery.datetimepicker.css"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style type="text/css">

.custom-date-style {
  background-color: red !important;
}

.input{ 
}
.input-wide{
  width: 500px;
}

</style>
</head>
<body>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div class="col-xs-6 col-sm-4">
  </div>

<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
<h2 style="text-align: center;"> Planner </h2>
</div>
<div class="col-xs-6 col-sm-4">
  </div>
<form class="form-horizontal" action="<?=base_url()?>entry-form-detail" method="post">
  <div class="form-group">
   <div class="col-xs-12">
   <div class="col-xs-4 col-sm-1 col-md-offset-3">
    <label for="inputEmail3">Planner : <span style="color: red;">*</span></label>
    </div>
    <div class="col-xs-6 col-sm-4">
      <input type="text" class="form-control" required="true" name="plan_detail" placeholder="Planner Title">
    </div>
  </div>
  </div>
  <div class="form-group">
   <div class="col-xs-12">
   <div class="col-xs-4 col-sm-1 col-md-offset-3">
    <label for="inputEmail3">Starting Day: <span style="color: red;">*</span></label>
    </div>
    <div class="col-xs-6 col-sm-4">
       <input type="text" value="" id="datetimepicker_dark" name="start" required="true" class="form-control"/>
    </div>
  </div>
  </div>
  <div class="form-group">
   <div class="col-xs-12 ">
   <div class="col-xs-4 col-sm-1 col-md-offset-3">
    <label for="inputEmail3">Ending Day: <span style="color: red;">*</span></label>
    </div>
    <div class="col-xs-6 col-sm-4">
       <input type="text" value="" id="datetimepicker_dark1" name="end" required="true" class="form-control"/>
    </div>
  </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-default">ADD</button>
      <a href="<?=base_url()?>get-event" class="btn btn-default">Back</a>
    </div>
  </div>
</form>

</div>
</div>
</div>
</body>

<script src="<?=base_url()?>assert/date/jquery.js"></script>
<script src="<?=base_url()?>assert/date/build/jquery.datetimepicker.full.js"></script>
<script>
/*window.onerror = function(errorMsg) {
  $('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');






$('#datetimepicker_dark').datetimepicker({theme:'dark'})
$('#datetimepicker_dark1').datetimepicker({theme:'dark'})

</script>
</html>