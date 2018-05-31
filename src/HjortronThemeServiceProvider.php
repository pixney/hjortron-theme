<?php

namespace Pixney\HjortronTheme;

use Illuminate\Pagination\AbstractPaginator;
use Pixney\HjortronTheme\Listener\ApplySorting;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;

/**
 * Class HjortronThemeServiceProvider
 *
 * @link   https://pixney.com/
 * @author Pixney AB. <hello@pixney.com>
 * @author William Åström <william@pixney.com>
 */
class HjortronThemeServiceProvider extends AddonServiceProvider
{
    // protected $overrides = [
    //     'streams::errors/404' => 'theme::errors/404',
    //     'streams::errors/500' => 'theme::errors/500',
    // ];

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        SortNavigation::class => [
            ApplySorting::class,
        ],
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        AbstractPaginator::$defaultView       = 'pixney.theme.hjortron::pagination/bootstrap-4';
        AbstractPaginator::$defaultSimpleView = 'streams::pagination/simple-bootstrap-4';
    }
}
