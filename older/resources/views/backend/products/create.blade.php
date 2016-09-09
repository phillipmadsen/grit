@extends('backend/layout/clip')

@section('topscripts')
        <link rel="stylesheet" href="/clip/assets/plugins/select2/select2.css">
        <link rel="stylesheet" href="/clip/assets/plugins/datepicker/css/datepicker.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="/clip/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
        <link rel="stylesheet" href="/clip/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="/clip/assets/plugins/summernote/build/summernote.css">
 
@endsection

@section('pagetitle')
    <div class="row">
    <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Products</li>
            </ol>
            <div class="page-header">
                     <h1 class="pull-left">Create New Product</h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection

@section('content')
<div class="row">

    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                    @include('core-templates::common.errors')


                        <div class="clearfix"></div>
                        {!! Form::open(['action' => '\Fully\Http\Controllers\ProductController@store', 'files'=>true]) !!}

                            {{-- @include('backend.products.fields') --}}




<div class="col-lg-12">
  <div class="tabbable">
  <h3>TAB SELECTION:</h3>
    <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
        <li class="active"> <a data-toggle="tab" href="#panel_tab_overview"> OVERVIEW </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_image"> IMAGES &amp; FILES </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_pricing"> PRICING / TAX / SHIPPING </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_meta"> META / SEO </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_additional"> ADDITIONAL </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_developer"> DEVELOPER </a> </li>
    </ul>
    <div class="tab-content">
        <div id="panel_tab_overview" class="tab-pane active">
        @include('backend.products.create-sections.overview-fields')
        <br style="clear:both" />
        </div>
        <div id="panel_tab_image" class="tab-pane">
        @include('backend.products.create-sections.image-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_pricing" class="tab-pane">
        @include('backend.products.create-sections.pricing-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_meta" class="tab-pane">
        @include('backend.products.create-sections.meta-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_additional" class="tab-pane">
        @include('backend.products.create-sections.additional-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_developer" class="tab-pane">
        @include('backend.products.create-sections.developer-fields')
         <br style="clear:both" />
        </div>
        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{!! url(getLang().'.admin.products.index') !!}" class="btn btn-default">Cancel</a>
        </div>

         <br style="clear:both" />
    </div>
  </div>
</div>













                        {!! Form::close() !!}
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')
                FormElements.init();

@endsection
