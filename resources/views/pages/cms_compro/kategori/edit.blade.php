@extends('layouts.applte')

@section('content')

<!-- CK Editor -->
<script src="{{ asset('assets/lte/bower_components/ckeditor/ckeditor.js') }}"></script>
<script>
$(function () {
    CKEDITOR.replace('content_in');
    CKEDITOR.replace('content_en');
});
</script>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            &nbsp;
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}""><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('article')}}">Hal. Bertia/Artikel</a></li>
            <li class="active">Edit Kategori</li>
          </ol>
        </section>

<?php
// print_r($post);
?>
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">@lang('main.edit_product') {{ $post->name_in }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('kategori.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="box-body">
                      <div class="form-group">
                        <label for="name_en">@lang('main.kate_eng')</label>
                        <input type="text" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" id="name_en" placeholder="Category" value="{{ $post->name_en }}" required>
                        @if ($errors->has('name_en'))
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $errors->first('name_en') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="name_in">@lang('main.kate_indo')</label>
                        <input type="text" class="form-control{{ $errors->has('name_in') ? ' is-invalid' : '' }}" name="name_in" id="name_in" placeholder="Category in chinese" value="{{ $post->name_in }}" required>
                        @if ($errors->has('name_in'))
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $errors->first('name_in') }}</strong>
                            </span>
                        @endif
                    </div>

                    

                    <div class="form-group">
                        <label for="rowstate">@lang('main.status')</label>
                        <select class="form-control{{ $errors->has('rowstate') ? ' is-invalid' : '' }}" name="rowstate" id="rowstate" style="width: 100%;" required>
                            <option value="">--@lang('main.choose_product')--</option>
                            <option value="1" @if($post->rowstate==1) selected @endif>@lang('main.activity')</option>
                            <option value="2" @if($post->rowstate==2) selected @endif>@lang('main.non_activity')</option>
                        </select>
                        @if ($errors->has('rowstate'))
                            <span class="invalid-feedback" style="color: red">
                                <strong>{{ $errors->first('rowstate') }}</strong>
                            </span>
                        @endif
                    </div>

                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">@lang('main.update')</button>
                    <button type="button" class="btn btn-default" onclick="location.href='{{ route('kategori') }}'">@lang('main.cancel')</button>
                  </div>
                </form>
              </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
@endsection
