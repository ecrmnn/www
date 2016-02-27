<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Article extends Model
{
    protected $guarded = ['id'];

    public function parsedContent()
    {
        return (new Parsedown)->text($this->content);
    }
}
