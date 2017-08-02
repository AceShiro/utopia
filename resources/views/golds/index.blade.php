@extends('layouts.main')

@section('title')
	<h1 class="page_header">Gold Market Graph</h1>
@endsection



@section('content')

<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Gold Graph
            </div>
              <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-line-chart-gold"></div>
                </div>
            </div>
              <!-- /.panel-body -->
        </div>
          <!-- /.panel -->
    </div>

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Raw Data
            </div>
          <!-- /.panel-heading -->
            <div class="panel-body">
                <table class="table table-striped table-hover" id="gold-table">
					<thead>
						<tr>
							<th>Time</th>
							<th>Value</th>
							<th>Action</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($golds as $post)
							<tr>
							    <td>{{$post['created_at']}}</td>
							    <td>{{$post['value']}}</td>
							    <td><a href="{{action('GoldController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
							    <td>
							        <form action="{{action('GoldController@destroy', $post['id'])}}" method="post">
							            {{csrf_field()}}
							            <input name="_method" type="hidden" value="DELETE">
							            <button class="btn btn-danger" type="submit">Delete</button>
							        </form>
							    </td>
							</tr>
						@endforeach
					</tbody>
				</table>

            </div>
                        <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
    </div>


    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Value
            </div>
          <!-- /.panel-heading -->
            <div class="panel-body">
                <form method="post" action="{{url('golds')}}">
				    <div class="form-group row">
				    	{{csrf_field()}}
				    	<label for="lgFormGroupInput"></label>
				    	<div class="col-lg-8">
				    		<div class="form-group input-group">
				        		<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Example: 190" name="value">
				        		<span class="input-group-addon">Pa</span>
				    		</div>
				    	</div>

				    	<input type="submit" class="btn btn-success">
				    </div>

				    <div class="row">
				    	<div class="col-lg-8">
				    		Current Albion Time: <br/>
				    		{{ date('H:i:s') }}
				    	</div>
				    </div>
				</form>
            </div>
                        <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
    </div>
                <!-- /.col-lg-12 -->
</div>


@endsection