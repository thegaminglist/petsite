@extends('admin.layout.main')

@section('title')
    Administrators
@endsection

@section('pageheader')
    Administrators
    <small>PetSite Administrators with access to the backend panel.</small>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Administrators</h3><br/>
            <small>These users are not accounts that are accessible on the front-end, and only are used to access the backend.</small>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>E-mail Address</th>
                    <th>Role / Title</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->title}}</td>
                    <td width="60">
                        <div class="btn-group" role="group">
                            <a href="{{route('admins.edit', ['id' => $user->id])}}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('admins.destroy', ['id' => $user->id])}}" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
                        <div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection