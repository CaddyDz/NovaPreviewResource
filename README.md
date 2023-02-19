### Install the package

```shell
composer require caddydz/nova-preview-resource
```
For Laravel Nova 3 and below
```shell
composer require caddydz/nova-preview-resource:0.0.2
```

### Use the field on any resource

```php
use Caddydz\NovaPreviewResource\NovaPreviewResource;

NovaPreviewResource::make(__('Preview'))
	->image($this->avatar) // Optional
	->width(150) // Optional (in pixels)
	->options([
		__('Key') => $this->value,
		__('Foo') => $this->bar,
		__('Bar') => $this->baz,
	])
	->noValueText('No options available'), // Optional
```
