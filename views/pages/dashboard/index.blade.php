@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-map-marker color-blue"></em>
                        <div class="large">{{ $placesCount }}</div>
                        <div class="text-muted">Lugares</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-calendar color-orange"></em>
                        <div class="large">{{ $eventsCount }}</div>
                        <div class="text-muted">Eventos</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-beer color-teal"></em>
                        <div class="large">{{ $productsCount }}</div>
                        <div class="text-muted">Productos</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-cog color-red"></em>
                        <div class="large">{{ $categoriesCount }}</div>
                        <div class="text-muted">Categorías</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
@endsection
