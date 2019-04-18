<?php namespace Rikki\LoungeViews\Components;

use Cms\Classes\ComponentBase;
use Rikki\Heroeslounge\Classes\Helpers\TimezoneHelper;

use Redirect;

class SetTimezone extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Set Timezone',
            'description' => 'Redirects if no timezone set yet'
        ];
    }

    public function onRun() {
        if (!TimezoneHelper::hasTimezone()) {
            return Redirect::to('/savetimezone');
        }
    }

    public function defineProperties()
    {
        return [];
    }
}
