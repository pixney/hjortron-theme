<?php namespace Pixney\HjortronTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;
use Illuminate\Pagination\AbstractPaginator;
use Pixney\HjortronTheme\Http\Controller\Admin\PreferencesController;
use Pixney\HjortronTheme\Http\Controller\Admin\SettingsController;
use Pixney\HjortronTheme\Listener\ApplySorting;

/**
 * Class HjortronThemeServiceProvider
 *
 * @link   https://pixney.com/
 * @author Pixney AB. <hello@pixney.com>
 * @author William Åström <william@pixney.com>
 */
class HjortronThemeServiceProvider extends AddonServiceProvider
{

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
