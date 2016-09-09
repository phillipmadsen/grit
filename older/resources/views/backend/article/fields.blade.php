                <div class="tabbable panel-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#panel_tab_article_content"> Article Content </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_header_image">Header Image </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_seo"> SEO </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_social"> SOCIAL </a> </li>

                        <li>&nbsp;</li>
                        {{-- <li>{!! Form::submit('Update', ['class' => 'btn btn-primary btn-squared']) !!}</li> --}}
                        <li> <a href="{!! url('admin.pages.index') !!}" class="btn btn-default btn-squared">Cancel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="panel_tab_article_content" class="tab-pane active">
                            <div class="container-fluid">
                                <div class="row-fluid">

                                    <div class="col-md-10">
                                        <div class="row">


                                            <!-- Category -->
                                            <div class="col-md-6 control-group {!! $errors->has('category') ? 'error' : '' !!}">
                                                <label class="control-label" for="title">Category</label>
                                                <div class="controls">
                                                    {!! Form::select('category', $categories, null, array('class' => 'form-control', 'value'=>Input::old('category'))) !!}
                                                    @if ($errors->first('category'))
                                                    <span class="help-block">{!! $errors->first('category') !!}</span>
                                                    @endif
                                                </div>
                                            </div>



	                                        <!-- Published -->
                                            <!-- 'bootstrap / Toggle Switch is_published Field' -->
                                            <div class="form-group col-sm-3 {!! $errors->has('is_published') ? 'has-error' : '' !!}">
                                                {!! Form::label('is_published', 'PUBLISHED:') !!}
                                                <label class="checkbox-inline">
                                                {!! Form::checkbox('is_published', 1, true,  ['data-toggle' => 'toggle']) !!}
                                                </label>
                                                @if ($errors->first('is_published'))
                                                <span class="help-block">{!! $errors->first('is_published') !!}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                          <!-- Title -->
                                            <div class="form-group col-md-8 {!! $errors->has('title') ? 'has-error' : '' !!}">
                                                <label class="control-label" for="title">Title</label>
                                                <div class="controls">
                                                    {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                                                    @if ($errors->first('title'))
                                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Subtitle Field -->
                                            <div class="form-group col-md-8">
                                                {!! Form::label('subtitle', 'Subtitle:') !!}
                                                {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <!-- Excerpt Field -->
                                            <div class="form-group  col-md-8">
                                                {!! Form::label('excerpt', 'Excerpt:') !!}
                                                {!! Form::textarea('excerpt', null, ['class' => 'form-control summernote',  'value'=>Input::old('excerpt')]) !!}
                                            </div>

                                        </div>
                                    </div>

                                            <!-- Content Field -->
                                            <div class="form-group col-sm-12 col-lg-12 {!! $errors->has('content') ? 'has-error' : '' !!}" style="    visibility: visible;">
                                                {!! Form::label('content', 'Content:') !!}
                                                {!! Form::textarea('content', null, [ 'class' => 'form-control summernote', 'value'=>Input::old('content'), 'rows' => '30']) !!}
                                                @if ($errors->first('content'))
                                                <span class="help-block">{!! $errors->first('content') !!}</span>
                                                @endif
                                            </div>

                                </div>
                            </div>
                        </div>

                        <div id="panel_tab_header_image" class="tab-pane">
                        <div class="container-fluid">
                                <div class="row-fluid">







        <div class="form-group">

            <div class="col-sm-12 ">
                <label>
                    Image Upload for -- {!! $article->title !!}
                </label>
                <div class="fileupload fileupload-new  control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 1140px; height: 600px;">

                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 1140px; max-height: 600px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('image', null, ['class'=>'form-control', 'id' => 'image', 'files'=>true, 'value'=>Input::old('image')]) !!}
                        </span>
                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                        </a>
                    </div>
                </div>

            </div>
        </div>

    {!! Form::text('path', null, ['class' => 'form-control hidden']) !!}
  {!! Form::number('file_size', null, ['class' => 'form-control hidden']) !!}

                                        <hr />




<div class="clearfix"></div>





                        </div>
                        </div>
                        </div>
                        <div id="panel_tab_seo" class="tab-pane">

                        <div class="container-fluid">
                                <div class="row-fluid">
                            <!-- Meta Title Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('meta_title', 'Meta Title:') !!}
                                {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
                            </div>
                            <!-- Meta Keywords Field -->
                            <div class="form-group col-sm-12 col-lg-12 {!! $errors->has('meta_keywords') ? 'has-error' : '' !!}">
                                {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
                                {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
                                @if ($errors->first('meta_keywords'))
                                <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                @endif
                            </div>
                            <!-- Meta Description Field -->
                            <div class="form-group col-sm-12 col-lg-12 {!! $errors->has('meta_description') ? 'has-error' : '' !!}">
                                {!! Form::label('meta_description', 'Meta Description:') !!}
                                {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
                                @if ($errors->first('meta_description'))
                                <span class="help-block">{!! $errors->first('meta_description') !!}</span>
                                @endif
                            </div>
                        </div>

                                           </div>
                        </div>
                        <div id="panel_tab_social" class="tab-pane">
                                                <div class="container-fluid">
                                <div class="row-fluid">
                            <!-- Fb Title Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('fb_title', 'Facebook Title:') !!}
                                {!! Form::text('fb_title', null, ['class' => 'form-control']) !!}
                            </div>
                            <!-- Gp Title Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('gp_title', 'Google Plus Title:') !!}
                                {!! Form::text('gp_title', null, ['class' => 'form-control']) !!}
                            </div>


                         <!-- Link To Product Title Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('link_to_product_title', 'Link To Product Title:') !!}
                                        {!! Form::text('link_to_product_title', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Link To Product Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('link_to_product', 'Link To Product:') !!}
                                        {!! Form::text('link_to_product', null, ['class' => 'form-control']) !!}
                                    </div>


                                               </div>
                        </div>
                        </div>
                    </div>
                </div>
