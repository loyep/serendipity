<?php

namespace App\Events;

use App\Entities\MenuGroup;
use Illuminate\Queue\SerializesModels;

class MenuGroupDisplay
{
    use SerializesModels;

    public $group;

    public function __construct(MenuGroup $group)
    {
        $this->group = $group;

        // @deprecate
        //
        event('serendipity.menu-group.display', $group);
    }
}
