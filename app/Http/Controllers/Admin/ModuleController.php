<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nwidart\Modules\Facades\Module;

class ModuleController extends Controller
{
    public function index() {
        $modules = array();
        $modules['enabled'] = Module::enabled();
        $modules['disabled'] = Module::disabled();

        return view('admin.modules.index', ['modules' => $modules]);
    }

    public function enable($key) {
        $module = Module::find($key);
        $module->enable();
        return redirect('/admin/modules');
    }

    public function disable($key) {
        $module = Module::find($key);
        $module->disable();
        return redirect('/admin/modules');
    }
}
