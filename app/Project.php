<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'benef', 'campaign_goal', 'expiry', 'file', 'title', 'body', 'raised'
    ];

    protected $with =['user', 'category'];

    protected $dates = ['created_at', 'updated_at', 'expiry'];

    protected $appends = ['slug', 'days_to_go', 'published_ago', 'formatted_goal', 'formatted_raised'];



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\ProjectCategory');
    }

    public function project()
    {
        return $this->belongsTo('App\ProjectType');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value);
    }

    public function setBodyAttribute($value)
    {
        $this->attributes['body'] = ucfirst($value);
    }

    public function setBenefAttribute($value)
    {
        $this->attributes['benef'] = ucwords($value);
    }

    public function setCampaignGoalAttribute($value)
    {
        $this->attributes['campaign_goal'] = $value * 100;
    }

    // public function setRaisedAttribute($value)
    // {
    //     $this->attributes['raised'] = $value * 100;
    // }

    public function getSlugAttribute($value)
    {
        $slug = str_slug($this->title);

        return $slug;
    }

    public function getFormattedGoalAttribute($value)
    {
        $fgoal = number_format($this->campaign_goal/100, 2, '.', ',');
        return $fgoal;
    }

    // public function getCampaignGoalAttribute($value)
    // {
    //     $goal = number_format($value/100, 2, '.', ',');
    //     return $goal;
    // }

    public function getFormattedRaisedAttribute($value)
    {
        $raised = number_format($this->raised/100, 2, '.', ',');
        return $raised;
    }

    public function getDaysToGoAttribute($value)
    {
        $now = Carbon::now();
        $expiry = $this->expiry;
        return $now->startOfDay()->diffInDays($expiry);
    }

    public function getPublishedAgoAttribute($value)
    {
        return $this->created_at->diffForHumans();
    }
}
