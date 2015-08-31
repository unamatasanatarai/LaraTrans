<?php
/**
 * trans() key's database storage
 *
 * PHP version 5.6
 *
 * @category   Model
 * @package    TiXER
 * @subpackage Ticket
 * @author     Laravel Ninja <ninja@example.com>
 * @license    http://tixer.pl/ MIT
 * @link       http://tixer.pl/
 */
namespace Unamatasanatarai\LaraTrans;

use Illuminate\Database\Eloquent\Model;

/**
 * Trans
 */
class Trans extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'key',
    ];
}
