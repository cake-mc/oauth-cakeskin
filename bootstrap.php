<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;

return function (Dispatcher $events, Filter $filter) {
    $events->listen(
        'SocialiteProviders\Manager\SocialiteWasCalled',
        'CakeSkinChina\BsSocialiteProviderCakeSkin\CakeSkinExtendSocialite@handle'
    );

    config(['services.cakeskin' => [
        'client_id' => env('CAKESKIN_KEY'),
        'client_secret' => env('CAKESKIN_SECRET'),
        'redirect' => env('CAKESKIN_REDIRECT_URI'),
    ]]);

    $filter->add('oauth_providers', function (Collection $providers) {
        $providers->put('cakeskin', [
            'icon' => 'cakeskin',
            'displayName' => 'CakeSkin',
        ]);

        return $providers;
    });
};
