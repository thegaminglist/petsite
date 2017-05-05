<?php

namespace App\Listeners;

use App\Events\CoreEventRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CoreEventListener
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
     * @param  CoreEventRegister  $event
     * @return void
     */
    public function handle(CoreEventRegister $event)
    {
        return [
            'admin.system' => [
                'Illuminate\Auth\Events\Registered' => array(
                    'name' => 'When new user registers',
                    'desc' => 'Raised when a new user registration is completed.'
                ),
                'Illuminate\Auth\Events\Login' => array(
                    'name' => 'When user successfully logs in',
                    'desc' => 'Raised when a user has logged into the site.'
                ),
                'Illuminate\Auth\Events\Logout' => array(
                    'name' => 'When user logs out',
                    'desc' => 'Raised when a user logs out of the site.'
                ),
            ]
        ];
    }
}
