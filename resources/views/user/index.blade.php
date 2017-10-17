@extends('admin.dashboard')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Users
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- BASIC TABLE -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title"> Users List
            </h3>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
    <?php $i=1; ?>
            @foreach($users as $row)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->name}}</td> 
                  <td>{{$row->email}}</td>
                  <td>
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['users.destroy',$row->id],
                        'style'=>'display:inline',
                        'onsubmit' => 'return confirm("Are you sure?")'
                        ]) !!}
                        {!! Form::hidden('id',$row->id) !!}
                        <button type="submit" class="btn btn-danger">Delete
                        </button>
                  {!!Form::close()!!}  

                  </td>


                </tr>
    <?php $i++; ?>                                       			@endforeach               
              </tbody>
            </table>
          </div>
        </div>
        <!-- END BASIC TABLE -->
      </div>

    </div>
  </div>
</div>
	

@endsection
@section('scripts')

<script type="text/javascript">

</script>
@endsection