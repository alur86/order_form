@extends('layouts.app')

@section('content')


</head>
<body>


<div class="container spark-screen">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
  <div class="panel-heading"><h1>Send Order</h1></div>
  <div class="panel-body">
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/postform') }}">
  <input id="site_id" type="hidden" class="form-control" name="site_id" value="100">
  <input id="order" type="hidden" class="form-control" name="type" value="order">
   {{ csrf_field() }}
<div class="form-group{{ $errors->has('datetimepicker1') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">From:</label>
<div class="col-md-6">
<div class="form-group">
<div class='input-group date'>
 <input type='text' name='datetimepicker1' id='datetimepicker1'  class="date form-control" />
<span class="input-group-addon">
 <span class="glyphicon glyphicon-calendar"></span>
</span>
 </div>
 @if ($errors->has('datetimepicker1'))
<span class="help-block">
<strong>{{ $errors->first('datetimepicker1') }}</strong>
</span>
 @endif
</div>
</div>

 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
</script>
<br>

<div class="form-group{{ $errors->has('datetimepicker2') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">To:</label>
<div class="col-md-6">
<div class="form-group">
<div class='input-group date'>
 <input type='text' name='datetimepicker2' id='datetimepicker2'  class="date form-control" />
<span class="input-group-addon">
 <span class="glyphicon glyphicon-calendar"></span>
</span>
 </div>
 @if ($errors->has('datetimepicker2'))
<span class="help-block">
<strong>{{ $errors->first('datetimepicker2') }}</strong>
</span>
 @endif
</div>
</div>

 <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker();
            });
</script>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Name:</label>
<div class="col-md-6">
<input id="name" type="text" class="form-control" name="name">
@if ($errors->has('name'))
<span class="help-block">
<strong>{{ $errors->first('name') }}</strong>
</span>
 @endif
 </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Phone:</label>
<div class="col-md-6">
<input id="phone" type="text" class="form-control" name="phone">
@if ($errors->has('phone'))
<span class="help-block">
<strong>{{ $errors->first('phone') }}</strong>
</span>
 @endif
 </div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
 <i class="fa fa-btn fa-user"></i> Send
</button>
</div>
</form>
  
</div>
</div>

@endsection