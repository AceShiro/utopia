@extends('layouts.main')

@section('title')
	<h1 class="page_header">Add a value</h1>
@endsection


@section('content')

<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">
            <div class="panel-heading">
                New Value
            </div>
              <!-- /.panel-heading -->
            <div class="panel-body">
                <form method="post" action="{{url('golds')}}">
				    <div class="form-group row">
				    	{{csrf_field()}}
				    	<label for="lgFormGroupInput"></label>
				    	<div class="col-lg-6">
				        	<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Example: 190" name="value">
				    	</div>

				    	<input type="submit" class="btn btn-primary">
				    </div>
				</form>
            </div>
              <!-- /.panel-body -->
        </div>
          <!-- /.panel -->
	</div>
</div>

@endsection