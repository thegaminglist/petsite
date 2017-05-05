<?php

namespace App\Listeners;

use App\Events\AdminMenuRegistration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AdminMenuRegistration  $event
     * @return void
     */
    public function handle(AdminMenuRegistration $event)
    {
        $menu = array();
        $menu['admin.system'] = array(
            '/admin/modules' => array('icon' => 'fa-archive', 'title' => 'Modules'),
            '/admin/users' => array('icon' => 'fa-user', 'title' => 'Users', 'children' => array(
                '/admin/users' => array('icon' => 'fa-user', 'title' => 'Users'),
                '/admin/admins' => array('icon' => 'fa-user', 'title' => 'Admins'),
                '/admin/roles' => array('icon' => 'fa-key', 'title' => 'Roles')
            )),
        );

        return $menu;
    }
}
