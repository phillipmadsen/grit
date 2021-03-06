 <div class="container">
        <div class="welcome">
            <h3>My Account</h3>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <!--main content-->
                    <div class="position-center">
                        <!-- Notifications -->
                        @include('notifications')

                        <div>
                            <h3 class="text-primary">Personal Information</h3>
                        </div>
                        <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" action="{{ route('my-account') }}" method="post" >
                             Form::token() !!}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Avatar:</label>
                                <div class="col-md-10">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 150px;">
                                            @if($user->profile->pic)
                                                <img src=" url('/').'/uploads/users/'.$user->profile->pic !!}" alt="img"/>
                                            @else
                                                <img src="http://placehold.it/200x150" alt="..." />
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="pic" id="pic" />
                                                            </span>
                                            <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    First Name:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw fa-user-md text-primary"></i>
                                    </span>
                                        <input type="text" placeholder=" " name="first_name" id="u-name" class="form-control" value=" Input::old('first_name',$user->first_name) !!}"></div>
                                    <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                </div>

                            </div>

                            <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            Last Name:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                            </span>
                                                <input type="text" placeholder=" " name="last_name" id="u-name" class="form-control" value=" Input::old('last_name',$user->last_name) !!}"></div>
                                            <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                        </div>
                                    </div>

                            <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                <label class="col-lg-2 control-label">
                                    Email:
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-envelope text-primary"></i>
                                                                </span>
                                        <input type="text" placeholder=" " id="email" name="email" class="form-control" value=" Input::old('email',$user->email) !!}"></div>
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>

                            </div>

                            <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                        <p class="text-warning col-md-offset-2"><strong>If you don't want to change password... please leave them empty</strong></p>
                                        <label class="col-lg-2 control-label">
                                            Password:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-key text-primary"></i>
                                            </span>
                                                <input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>
                                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                        </div>
                                    </div>

                            <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            Confirm Password:
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-key text-primary"></i>
                                            </span>
                                                <input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>
                                            <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                                        </div>
                                    </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Gender: </label>
                                <div class="col-lg-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />
                                            Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="other" @if($user->gender === "other") checked="checked" @endif />
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-primary">Contact: </h3>
                            </div>

                            <div class="form-group">
                                        <label class="col-lg-2 control-label">
                                            Address:
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea rows="5" cols="30" class="form-control" id="add1" name="address"> Input::old('address',$user->address) !!}</textarea>
                                        </div>
                                    </div>

                            <div class="form-group {{ $errors->first('country', 'has-error') }}">
                                                <label class="control-label  col-md-2">Select Country: </label>
                                                <div class="col-md-6">
                                                     Form::select('country', $countries, $user->country,['class' => 'form-control select2', 'id' => 'countries']) !!}
                                                    <span class="help-block">{{ $errors->first('country', ':message') }}</span>
                                                </div>
                                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="state">State:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="state" class="form-control" name="state"  value=" Input::old('state',$user->state) !!}" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="city">City:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="city" class="form-control" name="city"  value=" Input::old('city',$user->city) !!}" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('postal', 'has-error') }}">
                                <label class="col-lg-2 control-label" for="postal">Postal:</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                        </span>
                                        <input type="text" placeholder=" " id="postal" class="form-control" name="postal"  value=" Input::old('postal',$user->postal) !!}" />
                                    </div>
                                    <span class="help-block">{{ $errors->first('postal', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                        <label class="col-lg-2 control-label">
                                            DOB:
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar text-primary"></i>
                                            </span>
                                              Form::text('dob', Input::old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'yyyy-mm-dd','readonly'=>'readonly'))  !!} </div>
                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                        </div>
                                    </div>

                            <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>

                        </form>{{--  Form::close()  !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
