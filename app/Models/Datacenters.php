<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Datacenters
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Datacenters whereUpdatedAt($value)
 */
class Datacenters extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'datacenter_id',
        'datacenter_name'
    ];


}

