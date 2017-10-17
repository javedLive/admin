@extends('admin.dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Permission
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- INPUTS -->
        <div class="panel"> 
        <div class="panel-heading">
            <h3 class="panel-title">Assign Permission to Role
            </h3>
        </div>        
          <div class="panel-body">
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('assignedPermission') }}">          
         {{ csrf_field() }}
            <p class="input-label">Role :
            </p>
            <select required name="role_id" class="form-control">
              <option value="">Chose a Role</option>
            @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->role}}</option>
            @endforeach   
            </select>
            <p class="input-label">Permission:
            </p>

            <select required name="permission_id" class="form-control">
              <option value="">Chose a Permission</option>
            @foreach($permissions as $permission)
              <option value="{{$permission->id}}">{{$permission->label}}</option>
            @endforeach   
            </select>
            <div class="floatRight">
              <a href="{{asset('permissions')}}" class="btn btn-danger">Back</a>
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