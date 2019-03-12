@extends('layouts.app')
@section('content')

<div class="site-content">
<div class="card col-md-12">
  <div class="card-body" style="padding:12px">
  	   <h5>Hello <i>tolu samklef</i></h5>
       <p>Email body</p>
  </div> 
  <div class="card-footer">
     <div class="col-md-12"><a href="abc.com">abc.com</a> | info@abc.com | Phone Number | Contact address</div>
     <small>Powered by Mywork</small>
  </div>
</div>
</div>

<!-- Vendor JS -->
    <script type="text/javascript" src="{{ asset('back/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/tether/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/mwheelIntent.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/waves/waves.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/switchery/dist/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/dropify/dist/js/dropify.min.js')}}"></script>

    <!-- Neptune JS -->
    <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>
@endsection