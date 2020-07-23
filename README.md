### Install the package

```shell
composer require caddydz/nova-preview-resource
```

### Use the field on any resource

```php
use Caddydz\NovaPreviewResource\NovaPreviewResource;

NovaPreviewResource::make(__('Preview'))
		->image($this->avatar)
		->options([
			__('Key') => $this->value,
			__('Foo') => $this->bar,
			__('Bar') => $this->baz,
		]),
```
