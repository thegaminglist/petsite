@extends('admin.layout.main')

@section('title')
    Modules
@endsection

@section('pageheader')
    PetSite Modules
    <small>Add additional functionality through additional packages</small>
@endsection

@section('content')
<div class="col-md-12">
    <div class="pull-right">
        <button class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Install Module</button>
    </div>
    <h4>{{count($modules['enabled'])}} enabled and {{count($modules['disabled'])}} disabled modules discovered.</h4>
    <hr />
</div>
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enabled Modules</h3><br/>
            <small>These modules are active and adding functionality to your site.</small>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Module</th>
                    <th>State</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($modules['enabled'] as $module)
                <tr>
                    <td>
                        <strong>{{$module->getName()}}</strong><br/>
                        <small class="light">{{$module->getDescription()}}</small>
                    </td>
                    <td width="80"><span class="label label-success">Enabled</span></td>
                    <td width="120">
                        <div class="btn-group" role="group" aria-label="">
                            <a href="/admin/module/disable/{{$module->getLowerName()}}" class="btn btn-sm btn-default"><i class="fa fa-stop-circle"></i></a>
                            <button class="btn btn-sm btn-default"><i class="fa fa-cog"></i></button>
                            <button class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="col-md-6">
    <div class="box box-defualt">
        <div class="box-header with-border">
            <h3 class="box-title">Disabled Modules</h3><br/>
            <small>Inactive or unused modules. Not providing functionality to your site currently.</small>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Module</th>
                    <th>State</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($modules['disabled'] as $module)
                <tr>
                    <td>
                        <strong>{{$module->getName()}}</strong><br/>
                        <small class="light">{{$module->getDescription()}}</small>
                    </td>
                    <td width="80"><span class="label label-default">Disabled</span></td>
                    <td width="120">
                        <div class="btn-group" role="group" aria-label="">
                            <a href="/admin/module/enable/{{$module->getLowerName()}}" class="btn btn-sm btn-default"><i class="fa fa-play-circle"></i></a>
                            <button class="btn btn-sm btn-default"><i class="fa fa-cog"></i></button>
                            <button class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection