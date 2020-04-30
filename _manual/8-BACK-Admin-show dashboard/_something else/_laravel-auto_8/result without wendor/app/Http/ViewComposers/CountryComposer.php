<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Country;

class CountryComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('countries', Country::select('id', 'name')->get());
    }
}
