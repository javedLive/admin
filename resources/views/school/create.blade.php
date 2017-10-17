@extends('admin.dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Schools
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- INPUTS -->
        <div class="panel"> 
        <div class="panel-heading">
            <h3 class="panel-title">Create School
            </h3>
        </div>        
          <div class="panel-body">
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('schools.store') }}">          
         {{ csrf_field() }}
            <p class="input-label">Name:
            </p>
            <input type="text" required class="form-control" name="name" placeholder="Enter School Name">
            <div class="floatRight">
              <a href="{{asset('schools')}}" class="btn btn-danger">Back</a>
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