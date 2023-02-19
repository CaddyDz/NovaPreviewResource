<?php

declare(strict_types=1);

namespace Caddydz\NovaPreviewResource;

use Laravel\Nova\Fields\Field;

class NovaPreviewResource extends Field
{
	/**
	 * The field's component.
	 *
	 * @var string
	 */
	public $component = 'nova-preview-resource';

	/**
	 * The text alignment for the field's text in tables.
	 *
	 * @var string
	 */
	public $textAlign = 'center';

	/**
	 * The text to be used when there are no values to show.
	 *
	 * @var string
	 */
	public string $noValueText = 'No Data';

	/**
	 * Set the image for the preview.
	 *
	 * @param string image path
	 *
	 * @return $this
	 */
	public function image(string $path): NovaPreviewResource
	{
		return $this->withMeta([
			'image' => $path,
		]);
	}

	/**
	 * Set the image width for the preview.
	 *
	 * @param int image width
	 *
	 * @return $this
	 */
	public function width(int $width)
	{
		return $this->withMeta([
			'width' => $width,
		]);
	}

	/**
	 * Set the text to be used when there are no booleans to show.
	 *
	 * @param string $text
	 * @return $this
	 */
	public function noValueText(string $text): NovaPreviewResource
	{
		return $this->withMeta([
			'noValueText' => $text,
		]);
	}

	/**
	 * Set the options for the field.
	 *
	 * @param array|\Closure|\Illuminate\Support\Collection
	 * @return $this
	 */
	public function options($options): NovaPreviewResource
	{
		if (is_callable($options)) {
			$options = $options();
		}

		return $this->withMeta([
			'options' => with(collect($options), function ($options) {
				return $options->map(function ($label, $name) use ($options) {
					return $options->isAssoc()
						? ['label' => $label, 'name' => $name]
						: ['label' => $label, 'name' => $label];
				})->values()->all();
			}),
		]);
	}
}
