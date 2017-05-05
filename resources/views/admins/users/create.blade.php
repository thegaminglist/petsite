@extends('admin.layout.main')

@section('title')
    Create New user
@endsection

@section('pageheader')
    Create New user
@endsection

@section('content')
                <div class="box box-primary">
                    <div class="box-header"><h3 class="box-title">Create New user</h3></div>
                    <div class="box-body">
                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/users', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admins.users.form')

                        {!! Form::close() !!}

                    </div>
                </div>
@endsection
