@extends('admin.dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Foods
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- INPUTS -->
        <div class="panel"> 
        <div class="panel-heading">
            <h3 class="panel-title">Create Food
            </h3>
        </div>        
          <div class="panel-body">
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('foods.store') }}">          
         {{ csrf_field() }}
            <p class="input-label">Name:
            </p>
            <input type="text" required class="form-control" name="name" placeholder="Enter food name">

            <p class="input-label">Restaurant:
            </p>

            <select required name="restaurant_id" class="form-control">
				<option value="cheese">Chose a Restaurant</option>
			@foreach($restaurants as $row)
				<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach							
			</select>

            <p class="input-label">Price:
            </p>

            <input type="text" required class="form-control" name="price" placeholder="Enter Price">

            <p class="input-label">Upload display picture:
            </p>
            <input type="file" required class="form-control" name="display_image">
            <div class="floatRight marginTop20">
              <a href="{{asset('foods')}}" class="btn btn-danger">Back</a>
              <button type="submit"  class="btn btn-primary submitButton">Save</button>
            </div>
            
      </form>        
            
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