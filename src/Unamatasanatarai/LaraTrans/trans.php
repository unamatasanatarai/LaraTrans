<?php
use Unamatasanatarai\LaraTrans\LaraTrans;
/**
 * Translate the given message and store its key in database for use with TranslationController
 *
 * @param  string  $id
 * @param  array   $parameters
 * @param  string  $domain
 * @param  string  $locale
 * @return string
 */

function __($id = null, $parameters = [], $domain = 'messages', $locale = null)
{
    return LaraTrans::__($id, $parameters, $domain, $locale);
}
