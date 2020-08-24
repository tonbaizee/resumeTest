<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductList
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductList query()
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
class ProductList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_name',
        'provider',
        'location',
        'city',
        'country',
        'datacenter',
        'brand_label',
        'brand',
        'model',
        'cpu',
        'core',
        'ram',
        'drive_label',
        'drive',
        'bandwidth',
        'ip',
        'price',
        'show_bw',
        'sell_out_start',
        'sell_out_end',
        'discount',
    ];


}

