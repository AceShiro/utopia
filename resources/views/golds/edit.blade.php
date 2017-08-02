@extends('layouts.main')

@section('title')
	<h1 class="page_header">Edit a value</h1>
@endsection


@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                Value Num {{ $gold->id }}
            </div>
              <!-- /.panel-heading -->
            <div class="panel-body">
				<form method="post" action="{{action('GoldController@update', $gold->id)}}">
				    <div class="form-group row">
				    	{{csrf_field()}}
				    	<input name="_method" type="hidden" value="PATCH">
				    	<label for="lgFormGroupInput"></label>
				    	<div class="col-lg-6">
				        	<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Example: 190" name="title" value="{{$gold->value}}">
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