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
use \XAKEPEHOK\ValueObjectBuilder\VOB;

$object = VOB::build(Object::class, $_POST['value'] ?? null);
```

--------------------

Example without VOB:
```php
<?php
$value_1 = $_POST['value_1'] ?? null;
$value_2 = $_POST['value_2'] ?? null;
$value_3 = $_POST['value_3'] ?? null;

$object = null;
if (!is_null($value_1) || !is_null($value_2) || !is_null($value_3)) {
    $object = new Object($value_1, $value_2, $value_3);
}
```

Example with VOB:
```php
<?php
use \XAKEPEHOK\ValueObjectBuilder\VOB;

$object = VOB::buildFromValues(Object::class, [$_POST['value_1'] ?? null, $_POST['value_2'] ?? null, $_POST['value_3'] ?? null]);
```