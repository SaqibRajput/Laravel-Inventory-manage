@extends('layouts.app_invent')
@section('content')
<link href="{{ asset('angular_inventory/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('angular_inventory/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('angular_inventory/css/font-awesome.min.css') }}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<div class="container">
        <div class="row">
        <!--<div class="col-md-8 col-md-offset-2">-->
        <div class="col-md-12">

              <div class="blog-masthead">
                  <div class="container">
                    <nav class="blog-nav">
                      <a class="blog-nav-item active" href="#">Inventory</a>
                    </nav>
                  </div>
                </div>

                <div class="page-content">
                  <div ng-view="" id="ng-view"></div>
                </div>

    </div>
</div>   
  
@endsection

@section('js') 

<script language="javascript">
//var url = "<?php //echo url('/'); ?>";
</script>

<!-- Libraries -->
<script src="{{ asset('angular_inventory/js/angular.min.js') }}"></script>
<script src="{{ asset('angular_inventory/js/ui-bootstrap-tpls-0.11.2.min.js') }}"></script>
<script src="{{ asset('angular_inventory/js/angular-route.min.js') }}"></script>
<script src="{{ asset('angular_inventory/js/angular-animate.min.js') }}"></script>

<!-- AngularJS custom codes -->
<script src="{{ asset('angular_inventory/app/app.js') }}"></script>
<script src="{{ asset('angular_inventory/app/data.js') }}"></script>
<script src="{{ asset('angular_inventory/app/directives.js') }}"></script>
<script src="{{ asset('angular_inventory/app/productsCtrl.js') }}"></script>

<!-- Some Bootstrap Helper Libraries -->

<script src="{{ asset('angular_inventory/js/jquery.min.js') }}"></script>
<script src="{{ asset('angular_inventory/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('angular_inventory/js/underscore.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('angular_inventory/js/ie10-viewport-bug-workaround.js') }}"></script>


@endsection   