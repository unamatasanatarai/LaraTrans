<?php
use Unamatasanatarai\LaraTrans\Trans;

class LaraTrans{

    static $collect = false;

    public static function __($id = null, $parameters = [], $domain = 'messages', $locale = null)
    {
        if (!is_null($id) && self::$collect) {
           Trans::firstOrCreate(['key' => $id]);
        }

        return trans($id, $parameters, $domain, $locale);
    }
}
