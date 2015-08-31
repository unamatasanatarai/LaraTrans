<?php
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
    if (is_null($id)) {
        return app('translator');
    }
    if (\Unamatasanatarai\Options\Opt::get('collect_translations') == 1){
        \App\Models\Trans::truncate();
        \App\Models\Trans::firstOrCreate(['key' => $id]);
    }

    return app('translator')->trans($id, $parameters, $domain, $locale);
}
