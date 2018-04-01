@extends('main')
@section('title',' | Create Post')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store']) !!}

                 {{ Form::label('title','Title:') }}
                 {{ Form::text('title',null, array('class'=>'form-control')) }}

            {{ Form::label('body','Description:') }}
            {{ Form::textarea('body',null, array('class'=>'form-control')) }}
            <br>

            {{Form::submit('Create Post',array('class'=>'btn btn-success btn-block'))}}

            {!! Form::close() !!}

        </div>

    </div>

    @endsection