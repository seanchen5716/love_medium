<?php

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model {

  public function blogs()
  {
    return $this->hasMany('Blog');
  }

  public function blogswithonlyids()
  {
    return $this->hasMany('Blog')->select(array('id'));
  }

  public function blogsWithMessages()
  {
    return $this->hasMany('Blog')->with('receivedMessages', 'sentMessages');
  }

  public function likes()
  {
    return $this->belongsToMany('Post','likes')->withTimestamps();
  }

  public function follows()
  {
    return $this->belongsToMany('Blog', 'follows')->withTimestamps();
  }

  public function followswithonlyids()
  {
    return $this->belongsToMany('Blog', 'follows')->withTimestamps()->select(array('blog_id'));
  }

  public function groups()
  {
    return $this->belongsToMany('Group')->withTimestamps();
  }

  public function throttle()
  {
    return $this->belongsTo('Throttle');
  }

  // Override the SentryUser getPersistCode method.

    public function getPersistCode()
    {
        if (!$this->persist_code)
        {
            $this->persist_code = $this->getRandomString();

            // Our code got hashed
            $persistCode = $this->persist_code;

            $this->save();

            return $persistCode;            
        }
        return $this->persist_code;
    }

}
