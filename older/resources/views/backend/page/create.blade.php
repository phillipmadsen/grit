@extends('backend/layout/clip')

@section('topscripts')
    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap-tagsinput.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}" type="text/css" />

    {!! HTML::script('ckeditor/ckeditor.js') !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $("#title").slug();

        });
    </script>
    <style>
    .tab-pane{min-height:800px;height:100%;}
    </style>
@endsection

@section('pagetitle')
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin/page') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
            <li class="active">Add Page</li>
        </ol>
        <div class="page-header">
            <h1> Page <small> | Add Page</small> </h1>
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
                Panel Data
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">



<div class="space12">
    <div class="btn-group btn-group-lg">
        <a class="btn btn-default active" href="{!! route('admin.menu') !!}"> Menus </a>
        <a class="btn btn-default hidden-xs" href="javascript:;">
         <i class="fa fa-plus"></i> Add Link To Menu</a>
    </div>
</div>
<br style="clear:both" />



                <div class="tabbable panel-tabs">
                 {!! Form::open(['action' => '\App\Http\Controllers\Admin\PageController@store']) !!}
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#panel_tab_content"> Article Content </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_seo"> SEO < META > </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_social"> SOCIAL </a> </li>
                        <li>{!! Form::submit('Save', array('class' => 'success')) !!}</li>
                        <li class="cancel"> <a href="{!! url(getLang(). '/admin/page') !!}" class=" ">Cancel</a></li>
                    </ul>

                    <div class="tab-content">
                        @include('backend.page.fields')
                    </div>
                {!! Form::close() !!}
                </div>
             </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')
    TableData.init();
@endsection
