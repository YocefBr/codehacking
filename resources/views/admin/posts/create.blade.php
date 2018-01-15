@extends('layouts.admin')
@section('content')
    {!! Form::open(['method' => 'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('title', 'Title: ') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category: ') !!}
            {!! Form::select('category_id',[1=>'PHP', 0=>'Javascript'], null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo: ') !!}
            {!! Form::file('photo_id')  !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Content: ') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    @include('includes.error')
@stop