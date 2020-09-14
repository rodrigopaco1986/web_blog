@extends('layouts.admin.default')

@section('title')
    Posts - <small>Edit</small>
@endsection

@section('breadcrumb')
    <div class="breadcrumb float-sm-right">
        <a href="{{ route('posts.index') }}" class="btn btn-block btn-default">Cancel</a>
    </div>
@endsection

@section('content')

<div class="card mt-1">

    <div class="card-header bg-light header-elements-inline">
        <h5 class="card-title">
            <b>Information</b>
            <span class="d-block font-size-base text-muted">
                You have to fill out the fields with the symbol (*).
            </span>
        </h5>
    </div>

    {!! Form::model($post, [
        'method' => 'PATCH',
        'url' => route('posts.update', $post->id),
        'class' => '',
    ]) !!}

        @include ('admin.post.form', ['post' => $post, 'disabled' => $disabled])

    {!! Form::close() !!}

    </div>

    @endsection

    @section('js')
        <script type="text/javascript">
            $(document).ready(function(){
                $('textarea[name=description]').summernote({
                    height: 300,
                });
            });
        </script>
    @endsection
