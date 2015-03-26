<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at',
	];

	protected $dates = ['published_at'];

	public function scopePublished($query)
	{
		$query->where('published_at' , '<=' , Carbon::now()) -> orWhere('published_at' , NULL);
	}

	public function scopeUnpublished($query)
	{
		$query->where('published_at' , '>=' , Carbon::now()) -> orWhere('published_at' , NULL);
	}

	public function setPublishedAtAttribute($date)
	{
			//$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
			$this->attributes['published_at'] = Carbon::parse($date);
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	//get the  tags associated with this article
	public function tags()
	{
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}
	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}
}
