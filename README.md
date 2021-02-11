APCu Unit
===

 Saved value is separated from other App and Unit.

# Usage

 Share the key in the App world.

```php
$apcu = Unit('APCu');
$apcu->Set('value', $value);
D($apcu->Get('value');
```

 How to implement on the unit.
 Even if you use the same key in different UNITs, they will not collide.

```php
//  ...
Unit::Load('apcu');

//  ...
class UnitA implements IF_UNIT
{
    /** use
     *
     */
    use OP_CORE, OP_UNIT, OP_UNIT_APCU {
        OP_UNIT_APCU::Get as GetAPCu;
        OP_UNIT_APCU::Set as SetAPCu;
    };

    //  ...
    function APCu($key, $val=null)
    {
        //  ...
        if( $val ){
            self::SetAPCu($key, $val);
        }

        //  ...
        return self::GetAPCu($key);
    }
}
```
