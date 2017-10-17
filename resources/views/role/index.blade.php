@extends('admin.dashboard')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Roles
    </h3>
    <div class="row">
      <div class="col-md-7">
        <!-- BASIC TABLE -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">List of Roles
            </h3>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
    <?php $i=1; ?>
            @foreach($roles as $row)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$row->label}}</td> 
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