
<div class="col-md-12">
    <div class="row col-md-12" style="top-margin:10%;"></div>
    <div class="row">
        <br/> <br/> <br/>
        <div class="form-group">
            <div class="col-md-8">
           <h3>   {!! Form::label('thumbnail', trans('product.primary-photo')) !!} </h3>

                <input id="thumbnail" name="thumbnail" type="file" class="file input-preview">
            </div>
        </div>
    </div>
    <div class="row">
         <br style="clear:both" />

        <div class="form-group">
            <div class="col-md-8">
                <h3>   {!! Form::label('thumbnail2', trans('product.secondary-photo')) !!} </h3>

                <input id="thumbnail2" name="thumbnail2" type="file" class="file input-preview">
            </div>
        </div>
    </div>
    <br/> <br/> <br/>
    <div class="line"></div>
    <br/> <br/> <br/>

        <div class="row">
            <div class="col-md-12">
                <h3>Additional Images</h3>
                <table id="additional-images" class="table">
                    <thead>
                    <tr>
                        <th style="min-width:100px"><strong>Preview</strong>
                        <th style="min-width:150px"><strong>Label</strong>
                        </th>
                        <th><strong>Main image</strong>
                        </th>
                        <th><strong>Thumbnail</strong>
                        </th>
                        <th><strong>Gallery</strong>
                        </th>
                        <th class="text-center"><strong>Actions</strong>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width:40%">
{{-- style="width: 100%; height: 100%;min-width: 200px; min-height: 200px; max-width: 500px; max-height: 400px;" --}}
                            <div class="form-group col-md-12 ">

                            <input type="file" id="album" name="album[]" class="file form-control input-preview ">
                            </div>
                        </td>
                        <td style="width:30%">
                            <div class="form-group col-md-12 ">
                                <div class="input-group">
                                    <input type="text" id="caption" name="caption[]" class="form-control">
                                    <div class="input-group-addon">caption</div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 ">
                                <div class="input-group">
                                    <input type="text" id="alt" name="alt[]" class="form-control">
                                    <div class="input-group-addon">alt</div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 ">
                                <div class="input-group">
                                    <div class="input-group-addon">info</div>
                                    <input type="text" id="alt" name="photoinfo[]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td >
                            <input type="checkbox" name="use_main[]" value="1" class="m-t-10" checked>
                        </td>
                        <td>
                            <input type="checkbox" name="use_thumb[]" value="1" class="m-t-10" checked>
                        </td>
                        <td>
                            <input type="checkbox" name="use_gallery[]" value="1" class="m-t-10" checked>
                        </td>
                        <td class="text-center">
                            <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                        </td>
                    </tr>



                    </tbody>
                </table>
            </div>
        </div>



    {{--<a href="http://placehold.it/1000x600?text=Admin+View" class="magnific" title="Nature 1">--}}
        {{--<img src="http://placehold.it/300x180?text=Admin+thumb" alt="animal1" class="img-responsive">--}}
    {{--</a>--}}







    {{--<div class="additional">--}}

    {{--</div>--}}

    <br style="clear:both"/>
    <div class="row">
        <div class="col-md-12">
            <br/> <br/> <br/>
            <button id="add_album_image" class="btn btn-danger" type="button"><i class="fa fa-plus"></i> Add Photo
            </button>
            <br/> <br/> <br/>
        </div>
    </div>


</div>


<!-- Image 3 Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--<div class="fileinput fileinput-new control-group {!! $errors->has('thumbnail') ? 'has-error' : '' !!}" data-provides="fileinput">--}}
        {{--{!! Form::label('thumbnail', 'Image 3:') !!}--}}
        {{--<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 100%;min-width: 200px; min-height: 200px; max-width: 500px; max-height: 400px;">--}}
        {{--</div>--}}
        {{--<div>--}}
        {{--<span class="btn btn-default btn-file">--}}
        {{--<span class="fileinput-new">Select Image 3</span>--}}
        {{--<span class="fileinput-exists">Change</span>--}}
            {{--{!! Form::file('thumbnail', null, ['class'=>'form-control', 'id' => 'thumbnail', 'placeholder'=>'Image 3', 'value'=>Input::old('thumbnail')]) !!}--}}
            {{--@if ($errors->first('thumbnail'))--}}
                {{--<span class="help-block">{!! $errors->first('thumbnail') !!}</span>--}}
            {{--@endif--}}
        {{--</span>--}}
            {{--<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
