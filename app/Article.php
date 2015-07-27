<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = ['title', 'body', 'published_at' ];

	protected $dates = ['published_at'];

	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	public function setPublishedAtAttribute($date)
	{
		/*$this->attributes['published_at'] = Carbon::createFormFormat('d-m-Y', $date);*/
		$this->attributes['published_at'] = Carbon::parse($date);
	}
	
}
