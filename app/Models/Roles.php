<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Roles
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Roles whereUpdatedAt($value)
 */
class Roles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_name', 'guard_name',
    ];

}
