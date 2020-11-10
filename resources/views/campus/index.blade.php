@extends('layouts.app')

@section('title', 'Sedes')

@section('content')

<div class="container-fluid">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="row" style="display: block;
                         margin-top: 76px;
                         margin-left: auto;
                         margin-right: auto;">
        <div class="">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title" style="font-weight: 600">Sedes</h3>
                    @can('create_users')
                    @include('campus.modal')
                    @endcan

                    <!--<div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        @include('campus.table')
                    </div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body 
            <div class="box-footer clearfix">
            </div>
             /.box-footer -->
        </div>
    </div>
</div>
@endsection