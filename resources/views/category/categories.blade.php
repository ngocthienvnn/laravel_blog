@extends('layouts.layout')
@section('com_js')
   <script src="/js/admin/category/category.js"></script>
@endsection
@section('content')
   <div class="row">
      <div class="col-md-12">
         <div class="text">
         </div>
         <form>
            <div class="form-group">
               <label for="exampleInputEmail1">Title</label>
               <input type="text" class="form-control" id="title"  placeholder="title"> </div> <div class="form-group">
               <label for="exampleInputPassword1">Description</label>
               <input type="text" class="form-control" id="discription" placeholder="discription">
            </div>
            <button id="postCategory" type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div>
@endsection
