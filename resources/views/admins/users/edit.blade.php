@extends('admin.layout.main')

@section('title')
    Edit user #{{ $user->id }}
@endsection

@section('pageheader')
    Edit user #{{ $user->id }}
@endsection

@section('content')
                <div class="box box-primary">
                    <div class="box-header with-border"><h4 class="box-title">Edit user #{{ $user->id }}</h3></div>
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

                        {!! Form::model($user, [
                            'method' => 'PATCH',
                            'url' => ['/admin/users', $user->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admins.users.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
        
@endsection
