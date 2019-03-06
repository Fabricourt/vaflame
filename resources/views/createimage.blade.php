@extends('layout.app')

<div class="container">
   <h3 class="jumbotron">Laravel  Image Intervention </h3>
   <form method="post" action="{{url('create')}}" enctype="multipart/form-data">
       @csrf
       <div class="row">
         <div class="col-md-4"></div>
         <div class="form-group col-md-4">
         <input type="file" name="filename" class="form-control">
         </div>
       </div>
       <div class="row">
         <div class="col-md-4"></div>
         <div class="form-group col-md-4">
         <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
         </div>
       </div>
 </form>
 </div>
