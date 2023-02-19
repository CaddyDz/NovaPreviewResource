<?php

declare(strict_types=1);

namespace Caddydz\NovaPreviewResource;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(): void
	{
		Nova::serving(function (ServingNova $event) {
			Nova::script('nova-preview-resource', __DIR__ . '/../dist/js/field.js');
		});
	}
}
