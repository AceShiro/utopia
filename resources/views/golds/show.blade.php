@extends('layouts.main')

@section('title')
	<h1 class="page_header">Value Num. {{ $gold->id }}</h1>
@endsection



@section('content')

<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
            <div class="panel-heading">
                Gold Value
            </div>
              <!-- /.panel-heading -->
            <div class="panel-body">
                <p>
		            <strong>Value:</strong> {{ $gold->value }}<br>
		            <strong>Date:</strong> {{ $gold->created_at }}
		        </p>
            </div>
              <!-- /.panel-body -->
        </div>
          <!-- /.panel -->
	</div>
</div>

@endsection