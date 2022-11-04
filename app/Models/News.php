<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $news_img_pc
 * @property string $news_img_phone
 * @property string $news_title
 * @property string $news_content
 * @property string $start_date
 * @property string $end_date
 */
class News extends Model
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
    protected $fillable = ['created_at', 'updated_at', 'news_img_pc', 'news_img_phone', 'news_title', 'news_content', 'start_date', 'end_date'];
}
