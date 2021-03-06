<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Constant;

class Event extends Model
{
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $dates = ['date_from', 'date_to'];

    protected $fillable = [
        'title',
        'description',
        'date_to',
        'date_from',
        'time',
        'type',
        'presenter_name',
        'location',
        'url',
        'tag',
        'event_attachment',
        'event_mime_type',
        'event_video',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function getEventAttachmentAttribute($value)
    {
        $path = $this->type == 'webinar'  ? webinarPath() : ( $this->type == 'virtual' ? virtualPath() : trainingPath() ) ;
        return $path.$value;
    }
    
    public function getEventVideoAttribute($value)
    {
        $path = $this->type == 'webinar'  ? webinarPath() : ( $this->type == 'virtual' ? virtualPath() : trainingPath() ) ;
        return $path.$value;
    }

    public function eventReaction()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }

    public function interact()
    {
        return $this->morphMany(Interact::class, 'model');
    }
}
