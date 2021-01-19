Installation
```shell script
composer require xakepehok/value-object-builder
```

Example without VOB:
```php
<?php
$value = $_POST['value'] ?? null;
$object = $value ? new Object($value) : null;
```

Example with VOB:
```php
<?php
$object = \XAKEPEHOK\ValueObjectBuilder\VOB::build(Object::class, $_POST['value'] ?? null);
```