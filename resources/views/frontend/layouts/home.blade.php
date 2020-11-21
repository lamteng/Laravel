@extends('master') <!-- extending master blade -->
<!-- defining section named 'body-content' -->
@section('body-content') 
 <h1> This is the yeilded content from home.blade.php<h1>
@endsection
@section('page-script')<!-- script section with script of sidenav-->
$(document).ready(function(){
  $('.sidenav').sidenav();
});
@endsection