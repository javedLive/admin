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
            <h3 class="panel-title">Edit Food Item
            </h3>
        </div>        
          <div class="panel-body">
       {!! Form::open(['method' => 'PUT', 'route' => ['foods.update',$food->id], 'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
          {!! Form::token(); !!}
            <p class="input-label">Name:
            </p>
            <input type="text" required class="form-control" name="name" value
            ="{{$food->name}}">

            <p class="input-label">Restaurant:
            </p>

            <select required name="restaurant_id" class="form-control">
            <option value="">Chose a Restaurant</option>
              @foreach($restaurants as $row)
            <option value="{{$row->id}}"
                @if($row->id==$food->restaurant_id) selected='selected' 
                @endif >
               {{$row->name}}
            </option>
      @endforeach             
      </select>

            <p class="input-label">Price:
            </p>

            <input type="text" required class="form-control" name="price" value="{{$food->price}}">

            <p class="input-label">Upload display picture:
            </p>
            <input type="file"  class="form-control" name="display_image" id="image"></br>
            <img src="{{asset('files/'.$food->display_image) }}" id="food-img-tag" width="200px" />

            <a href="{{asset('foods')}}" class="btn btn-danger">Back</a>
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


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#food-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
      }
       $("#image").change(function(){
            readURL(this);
        }); 
</script>
@endsection