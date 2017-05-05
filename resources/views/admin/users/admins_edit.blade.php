@extends('admin.layout.main')

@section('title')
    Admins
@endsection

@section('pageheader')

@endsection

@section('content')
 <div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Modify Administrator: {{$user->name}}</h3>
        </div>
        <form method="post" action="/admin/admins/{{$user->id}}/update">
        <div class="box-body">
            

                {{csrf_field()}}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="title">Role / Title:</label>
                    <input type="text" id="title" name="title" value="{{$user->title}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">E-mail Address:</label>
                    <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control" required>
                </div>

                <hr/>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control">
                        </div>
                    </div>
                </div>
              </div>  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
    </div>
 </div>
@endsection