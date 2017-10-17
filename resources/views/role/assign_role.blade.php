@extends('admin.dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Roles
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- INPUTS -->
        <div class="panel"> 
        <div class="panel-heading">
            <h3 class="panel-title">Assign Role to User
            </h3>
        </div>        
          <div class="panel-body">
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('assignedRole') }}">          
         {{ csrf_field() }}
            <p class="input-label">User Name:
            </p>
            <select required name="user_id" class="form-control">
              <option value="">Chose a user</option>
            @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach   
            </select>
            <p class="input-label">Role:
            </p>

            <select required name="role_id" class="form-control">
              <option value="">Chose a Role</option>
            @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->label}}</option>
            @endforeach   
            </select>
            <div class="floatRight">
              <a href="{{asset('roles')}}" class="btn btn-danger">Back</a>
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