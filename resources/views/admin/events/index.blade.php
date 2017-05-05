@extends('admin.layout.main')

@section('title')
    Events
@endsection

@section('pageheader')
    Events
    <small>Customize your game through events.</small>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Events</h3><br/>
            <small>Add additional behavior on game events to make your game unique.</small>
        </div>
        <table class="table table-hover">
            @foreach($events as $section => $eventlist)
            <thead>
                <tr>
                    <th colspan="4"><h5>{{$section}}</h5></th>
                </tr>
                <tr>
                    <th colspan="3">Name</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventlist as $event)
                <tr>
                    <td colspan="3"><strong>{{$event['name']}}</strong><br/><small>{{$event['desc']}}</td>
                    <td width="60">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> &nbsp; Add Event</a>
                    </td>
                </tr>
                <tr>
                    <td>Do something interesting</td>
                    <td><span class="label label-success">Active</span></td>
                    <td>2017-05-03</td>
                    <td style="text-align: right">
                        <div class="btn-group" role="group">
                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-stop-circle"></i></a>
                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
                        <div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @endforeach
        </table>
    </div>
@endsection