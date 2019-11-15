<div class="col-xs-9">
    <div class="card">
        <div class="card-body">

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}

                @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                @if($errors->has('slug'))
                    <span class="help-block">{{ $errors->first('slug') }}</span>
                @endif
            </div>
            <div class="form-group col-xs-9 {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                {!! Form::label('excerpt') !!}
                {!! Form::textarea('excerpt', null, ['class' => 'form-control','style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
            </div>
            <div class="form-group col-xs-9 {{ $errors->has('body') ? 'has-error' : '' }}">
                {!! Form::label('body') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control','style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}

                @if($errors->has('body'))
                    <span class="help-block">{{ $errors->first('body') }}</span>
                @endif
            </div>
        </div>
    </div>
  <!-- /.box -->
</div>

<div class="col">


    <div class="card">
        <div class="card-header with-border">
            <h3 class="card-title">Category</h3>
        </div>
        <div class="card-body">
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                {!! Form::select('category_id', App\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

                @if($errors->has('category_id'))
                    <span class="help-block">{{ $errors->first('category_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header with-border">
            <h3 class="card-title">Tags</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                {!! Form::text('post_tags', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header with-border">
            <h3 class="card-title">Feature Image</h3>
        </div>
        <div class="card-body text-center">
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="justify-content-center fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="{{ ($post->image_thumb_url) ? $post->image_thumb_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                  <div>
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>

                @if($errors->has('image'))
                    <span class="help-block">{{ $errors->first('image') }}</span>
                @endif
            </div>
        </div>
    </div>



    <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Publish</h3>
            </div>
            <div class="card-body">
                <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                    {!! Form::label('published_at', 'Publish Date') !!}
                    <div class='input-group date' id='datetimepicker1'  data-target-input="nearest">
                        {!! Form::text('published_at', $post->exists ? null : date("Y-m-d H:i:s"), ['class' => 'form-control datetimepicker-input', 'placeholder' => 'YYYY-MM-DD HH:mm:ss','data-target'=>"#datetimepicker1"]) !!}
                        <span class="input-group-append"  data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
    
    
                    @if($errors->has('published_at'))
                        <span class="help-block">{{ $errors->first('published_at') }}</span>
                    @endif
                </div>
            </div>
            <div class="card-footer clearfix row d-flex justify-content-between">
                <div class="mr-auto">
                    <a id="draft-btn" class="btn btn-default">Save Draft</a>
                </div>
                <div class="ml-auto">
                    {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    
</div>
