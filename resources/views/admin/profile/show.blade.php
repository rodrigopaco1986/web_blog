@extends('layouts.admin.default')

@section('title')
    Profile - <small>View</small>
@endsection

@section('breadcrumb')
    <div class="breadcrumb float-sm-right">
        <a href="{{ route('profile.edit') }}" class="btn btn-block btn-primary">Edit</a>
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
        'method' => 'GET',
        'class' => '',
    ]) !!}

        @include ('admin.profile.form', ['profile' => $profile, 'disabled' => $disabled])

    {!! Form::close() !!}

    </div>

    @endsection
