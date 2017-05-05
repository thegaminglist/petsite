<?php

namespace TGL\Item\Events\Handlers;

use \App\Events\CoreEventRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ItemCoreEventListener
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
     * @param \TGL\Item\Events\\App\Events\CoreEventRegister $event
     * @return void
     */
    public function handle(CoreEventRegister $event)
    {
        return [
            'item::admin.items' => [
                'TGL\Item\Events\ItemAdded' => array(
                    'name' => 'When item is added to inventory',
                    'desc' => 'Raised when an item is added to a players inventory.'
                ),
                'TGL\Item\Events\ItemRemoved' => array(
                    'name' => 'When item is removed from inventory',
                    'desc' => 'Raised when an item is removed from a players inventory.'
                ),
            ]
        ];
    }
}
