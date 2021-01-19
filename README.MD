Example without VOB:
```php
<?php
$value = $_POST['value'] ?? null;
$object = $value ? new Object($value) : null;
```

Example with VOB:
```php
<?php
$object = \XAKEPEHOK\ValueObjectBuilder\VOB::build($_POST['value'] ?? null);
```