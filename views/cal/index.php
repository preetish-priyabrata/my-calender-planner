<!DOCTYPE html>
<html>
<head>
	<title>Mars Event Planner</title>

	<meta name="description" content="Full view calendar component for twitter bootstrap with year, month, week, day views.">
	<meta name="keywords" content="jQuery,Bootstrap,Calendar,HTML,CSS,JavaScript,responsive,month,week,year,day">
	<meta name="author" content="Serhioromano">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="<?=base_url()?>assert/red/components/bootstrap2/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>assert/red/components/bootstrap2/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?=base_url()?>assert/red/css/calendar.css">

	<style type="text/css">
		.btn-twitter {
			padding-left: 30px;
			background: rgba(0, 0, 0, 0) url(https://platform.twitter.com/widgets/images/btn.27237bab4db188ca749164efd38861b0.png) -20px 6px no-repeat;
			background-position: -20px 11px !important;
		}
		.btn-twitter:hover {
			background-position:  -20px -18px !important;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="hero-unit">
		<h1>Mars Planner</h1>

		
	</div>

	<div class="page-header">

		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>

		<h3></h3>
		<small>To See Event In Planner</small>
	</div>

	<div class="row">
		<div class="span9">
			<div id="calendar"></div>
		</div>
		<div class="span3">
			<div class="row-fluid">
			<a href="<?=base_url()?>add-event"   class="btn btn-primary">Add Event</a>
			</div>


		</div>
	</div>

	<div class="clearfix"></div>
	<br><br>
	

	<div id="disqus_thread"></div>
	

	<div class="modal hide fade" id="events-modal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Event</h3>
		</div>
		<div class="modal-body" style="height: 400px">
		</div>
		<div class="modal-footer">
			<a href="#" data-dismiss="modal" class="btn">Close</a>
		</div>
	</div>

	<script type="text/javascript" src="<?=base_url()?>assert/red/components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/components/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/components/bootstrap2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/components/jstimezonedetect/jstz.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/bg-BG.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/nl-NL.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/fr-FR.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/de-DE.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/el-GR.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/it-IT.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/hu-HU.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/pl-PL.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/pt-BR.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/ro-RO.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/es-CO.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/es-MX.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/es-ES.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/ru-RU.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/sk-SR.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/sv-SE.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/zh-CN.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/cs-CZ.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/ko-KR.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/zh-TW.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/id-ID.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/language/th-TH.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/calendar.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assert/red/js/app.js"></script>


</div>
</body>
</html>
