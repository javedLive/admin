@extends('admin.dashboard')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
  <div class="container-fluid">
    <h3 class="page-title">Foods
    </h3>
    <div class="row">
      <div class="col-md-9">
        <!-- BASIC TABLE -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Available Foods
            </h3>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Display Picture</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
    <?php $i=1; ?>
            @foreach($foods as $row)
                <tr>
                  <td>{{$i}}</td>
                  <td>
                  	<img width="80" height="80" src="files/{!!$row->display_image!!}" alt="Food Name">  
                  </td>
                  <td>{{$row->name}}</td> 
                  <td>{{$row->price}}</td> 
                  <td>
                  	   <a href="{{Route('foods.edit',$row->id)}}" class="btn btn-primary">Edit</a>
                  	
                  {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['foods.destroy',$row->id],
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