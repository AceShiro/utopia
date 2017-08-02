@extends('layouts.main')



@section('title')
    <h1 class="page_header">Dashboard</h1>
@endsection



@section ('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Ads Spot</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <i class="fa fa-credit-card fa-5x"></i>
                    </div>
                    <div class="col-xs-7 text-right">
                        <div class="huge">Gold</div>
                        <div>Market</div>
                    </div>
                </div>
            </div>
            <a href="golds">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <i class="fa fa-signal fa-5x"></i>
                    </div>
                    <div class="col-xs-7 text-right">
                        <div class="huge">#2</div>
                        <div>Lorem ipsum</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <i class="fa fa-inbox fa-5x"></i>
                    </div>
                    <div class="col-xs-7 text-right">
                        <div class="huge">#3</div>
                        <div>Lorem ipsum</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>


@endsection