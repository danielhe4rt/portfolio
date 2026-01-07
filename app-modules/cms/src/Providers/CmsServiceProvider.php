<?php

namespace Kaster\Cms\Providers;

use Filament\Panel;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Kaster\Cms\CmsPanelPlugin;

class CmsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Panel::configureUsing(static function (Panel $panel): void {
            match ($panel->getId()) {
                'cms' => $panel->plugin(new CmsPanelPlugin()),
                default => null,
            };
        });
    }

	public function boot(): void
	{
        Blade::componentNamespace('Kaster\\Cms\\View', 'cms');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'cms');
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'cms');
	}
}
