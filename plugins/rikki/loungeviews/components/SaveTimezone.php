<?php namespace Rikki\LoungeViews\Components;

use Cms\Classes\ComponentBase;
use Rikki\Heroeslounge\Classes\Helpers\TimezoneHelper;

use Url;

class SaveTimezone extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Save Timezone',
            'description' => 'Saves the session timezone from client side js'
        ];
    }

    public function onRender() {
        $this->page['redirectUrl'] = Url::previous();
    }

    public function onTimezoneDetection() {
        return TimezoneHelper::setTimezone($_POST['redirectUrl']);
    }

    public function defineProperties()
    {
        return [];
    }
}
