<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserBalance
 *
 * @property int $id
 * @property int $user_id
 * @property float $value
 * @property float $balance
 * @property string $created_at
 * @method static \Database\Factories\UserBalanceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBalance whereValue($value)
 * @mixin \Eloquent
 */
class UserBalance extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'user_balance';
}
