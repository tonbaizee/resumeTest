<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ModelHasRoles
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ModelHasRoles whereUpdatedAt($value)
 */
class ModelHasRoles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_id',
    ];

}
