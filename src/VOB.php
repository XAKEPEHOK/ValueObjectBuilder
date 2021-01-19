<?php
/**
 * Created for VOB
 * Date: 19.01.2021
 * @author Timur Kasumov (XAKEPEHOK)
 */

namespace XAKEPEHOK\ValueObjectBuilder;


class VOB
{

    public static function build(string $classname, $value)
    {
        if (is_null($value)) {
            return null;
        }

        return new $classname($value);
    }

    public static function buildFromValues(string $classname, array $values)
    {
        $isNeedObject = false;
        foreach ($values as $value) {
            $isNeedObject = $isNeedObject || !is_null($value);
        }

        if (!$isNeedObject) {
            return null;
        }

        return new $classname(...$values);
    }

}