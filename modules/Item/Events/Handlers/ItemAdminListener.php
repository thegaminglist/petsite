<?php

namespace TGL\Item\Events\Handlers;

use App\Events\AdminMenuRegistration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ItemAdminListener
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
     * @param \App\Events\AdminMenuRegistration $event
     * @return void
     */
    public function handle(\App\Events\AdminMenuRegistration $event)
    {
        return array('item::admin.items' => array(
            '/admin/items' => array('icon' => 'fa-shopping-basket', 'title' => 'Items', 'children' => array(
                '/admin/items' => array('icon' => 'fa-shopping-basket', 'title' => 'Items'),
                '/admin/itemtypes' => array('icon' => 'fa-shopping-basket', 'title' => 'Item Types')
            ))));

    }
}
