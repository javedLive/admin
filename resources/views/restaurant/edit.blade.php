@extends('admin.dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Restaurants
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- INPUTS -->
        <div class="panel"> 
        <div class="panel-heading">
            <h3 class="panel-title">Update Restaurant
            </h3>
        </div>        
          <div class="panel-body">
       {!! Form::open(['method' => 'PUT', 'route' => ['restaurants.update',$restaurant->id], 'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
          {!! Form::token(); !!}
            <p class="input-label">Name:
            </p>
            <input type="text" required class="form-control" name="name" value="{{$restaurant->name}}">
            <a href="{{asset('restaurants')}}" class="btn btn-danger">Back</a>
            <button type="submit"  class="btn btn-primary submitButton">Save</button>
       {!!Form::close()!!}        
            
          </div>
        </div>
        <!-- END INPUTS -->
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')

<script type="text/javascript">

</script>
@endsection