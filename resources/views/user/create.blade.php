@extends('admin.dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Users
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- INPUTS -->
        <div class="panel"> 
        <div class="panel-heading">
            <h3 class="panel-title">Create User
            </h3>
        </div>        
          <div class="panel-body">
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('users.store')}}">          
         {{ csrf_field() }}
            <p class="input-label">Name:
            </p>
            <input type="text" required class="form-control" name="name" placeholder="Enter User Name">
           
            <p class="input-label">Email:
            </p>
            <input type="email" required class="form-control" name="email" placeholder="Enter User Email">
            <br>
            <p class="input-label">Password:
            </p>
            <input type="password" name="password" required class="form-control" placeholder="Enter password">
            <div class="floatRight">
              <a href="{{asset('users')}}" class="btn btn-danger">Back</a>
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