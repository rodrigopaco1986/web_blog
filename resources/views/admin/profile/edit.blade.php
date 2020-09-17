@extends('layouts.admin.default')

@section('title')
    Profile - <small>Edit</small>
@endsection

@section('breadcrumb')
    <div class="breadcrumb float-sm-right">
        <a href="{{ route('profile.show') }}" class="btn btn-block btn-default">Cancel</a>
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

    {!! Form::model($profile, [
        'method' => 'PATCH',
        'url' => route('profile.update'),
        'class' => '',
    ]) !!}

        @include ('admin.profile.form', ['profile' => $profile, 'disabled' => $disabled])

    {!! Form::close() !!}

    </div>

    @endsection