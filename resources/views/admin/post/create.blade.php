@extends('layouts.admin.default')

@section('title')
    Posts - <small>Create</small>
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

    {!! Form::open([
        'route' => ['posts.store'],
    ]) !!}

        @include ('admin.post.form', ['post' => null, 'disabled' => $disabled])

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
