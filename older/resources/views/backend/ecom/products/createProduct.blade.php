@extends('backend/layout/clip')

@section('topscripts')
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link href="{!! asset('/clip/bower_components/select2/dist/css/select2.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/clip/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/clip/assets/plugin/bootstrap-timepicker.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/clip/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/clip/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/clip/bower_components/jquery.tagsinput/dist/jquery.tagsinput.min.css') !!}" rel="stylesheet" />
{{--    <link href="{!! asset('/clip/bower_components/summernote/dist/summernote.css') !!}" rel="stylesheet" />--}}
    <link href="{!! asset('/clip/bower_components/bootstrap-fileinput/css/fileinput.min.css') !!}" rel="stylesheet" />
    {{--<link rel="stylesheet" href="{!! asset('/clip/assets/data-tables/DT_bootstrap.css') !!}" />--}}
    {{--<link rel="stylesheet" href="{!! asset('/assets/css/bootstrap-table.css') !!}" />--}}
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->



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
<div class="container-fluid add-product">
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif
	<form action="{!! route('product.store') !!}" method="post" enctype="multipart/form-data">


<div class="col-lg-12">
    <!-- Submit Field -->
    <div class="form-group col-sm-12 pull_right">
        {!! Form::submit('Add Product', ['class' => 'btn btn-primary' ]) !!}
        <a href="{!! url(getLang().'/admin/products/') !!}" class="btn btn-default">Cancel</a>
    </div>


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <div class="tabbable">
  <h3>TAB SELECTION:</h3>
    <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
        <li class="active"> <a data-toggle="tab" href="#panel_tab_overview"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp; OVERVIEW </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_image"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; IMAGES &amp; FILES </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_pricing"><i class="fa fa-money" aria-hidden="true"></i>&nbsp; PRICING / TAX / SHIPPING </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_meta"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; META / SEO </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_additional"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp; ADDITIONAL </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_developer"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; DEVELOPER </a> </li>
    </ul>
    <div class="tab-content">
        <div id="panel_tab_overview" class="tab-pane active">
        @include('backend.ecom.products.create-sections.overview-fields')



        <br style="clear:both" />
        </div>
        {{--@if($product->prices)--}}
        <div id="panel_tab_image" class="tab-pane">
        @include('backend.ecom.products.create-sections.image-fields')
         <br style="clear:both" />
        </div>
        {{--@endif--}}
        <div id="panel_tab_pricing" class="tab-pane">
        @include('backend.ecom.products.create-sections.pricing-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_meta" class="tab-pane">
        @include('backend.ecom.products.create-sections.meta-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_additional" class="tab-pane">
        @include('backend.ecom.products.create-sections.additional-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_developer" class="tab-pane">
        @include('backend.ecom.products.create-sections.developer-fields')
         <br style="clear:both" />
        </div>


         <br style="clear:both" />
    </div>
  </div>




<div class="line"></div>



	<input type="hidden" name="_token" value="{{csrf_token()}}">
        {!! Form::close() !!}
        <div class="clearfix"></div>
</div>
@endsection

@section('bottomscripts')
            <script src="{!! asset('/clip/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('/clip/assets/js/min/form-elements.min.js') !!}"></script>
            {{--<script type="text/javascript" src="{!! asset('/clip/bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js') !!}"></script>--}}
            <script type="text/javascript" src="{!! asset('/assets/js/jquery-maskmoney/dist/jquery.maskMoney.js') !!}"></script>




            <script>
                $().ready(function() {
                    $(window).load(function(){
                        $(function () {
                            var options_counter = 0;
                            $('.sidebar #products').addClass('active-section');
                            $('#add_album_image').click(function () {
                                $("#additional-images").find('tbody')
                                        .append('<tr><td style="width:40%"> <div class="form-group col-md-12 ">' +
                                                '<input type="file" id="album" name="album[]" class="file form-control input-preview"></div> </td> ' +
                                                '<td style="width:30%"> <div class="form-group col-md-12 "> <div class="input-group"> ' +
                                                '<input type="text" id="caption" name="caption[]" class="form-control"> ' +
                                                '<div class="input-group-addon">caption</div> </div> </div> <div class="form-group col-md-12 "> ' +
                                                '<div class="input-group"> <input type="text" id="alt" name="alt[]" class="form-control"> ' +
                                                '<div class="input-group-addon">alt</div> </div> </div> <div class="form-group col-md-12 "> ' +
                                                '<div class="input-group"> <div class="input-group-addon">info</div> <input type="text" id="photoinfo" name="photoinfo[]" class="form-control"> ' +
                                                '</div> </div> </td> <td > <input type="checkbox" name="use_main[]" value="1" class="m-t-10" checked> </td> <td> ' +
                                                '<input type="checkbox" name="use_thumb[]" value="1" class="m-t-10"> </td> <td> <input type="checkbox" name="use_gallery[]" value="1" class="m-t-10"> </td> ' +
                                                '<td class="text-center"> <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a> </td>');
                                $(".input-preview").fileinput();
                            });
//                            $('#add_product_option').click(function () {
//                                options_counter++;
//                                $('.options-group').append('<div class="option col-md-3" op-index="' + options_counter + '">' +
//                                        '<span class="fa fa-times fa-lg remove-option"></span>' +
//                                        '<label for="options">Option Name:</label>' +
//                                        '<strong><input type="text" name="options[' + options_counter + '][name]"></strong><br>' +
//                                        '<div class="add_option_value">+ Add Value</div>' +
//                                        '<ul class="values"><li>' +
//                                        '<input type="text" name="options[' + options_counter + '][values][]"></li>' +
//                                        '</ul>' +
//                                        '</div>');
//                            });
//                            $(document).on("click", ".remove-option", function () {
//                                $(this).parent().remove();
//                            });
//                            $(document).on("click", ".add_option_value", function () {
//                                $(this).parent().find('.values').append('<li>' +
//                                        '<input type="text" name="options[' + $(this).parent().attr('op-index') + '][values][]">' +
//                                        '<i class="fa fa-minus remove-value"></i>' +
//                                        '</li>');
//                            });
//                            $(document).on("click", ".remove-value", function () {
//                                $(this).parent().remove();
//                            });


                        });
                    });
                });
            </script>

@endsection

@section('clipinline')
            {{--FormElements.init();--}}
            {{--EditableTable.init();--}}
@endsection
