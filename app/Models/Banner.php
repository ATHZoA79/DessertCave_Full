<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $banner_img1_pc
 * @property string $banner_img1_phone
 * @property string $banner_img2_pc
 * @property string $banner_img2_phone
 */
class Banner extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'banner_img1_pc', 'banner_img1_phone', 'banner_img2_pc', 'banner_img2_phone'];
}
