<?php

namespace App\Models;

use App\History\Traits\Historyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory,Historyable;
    protected $guarded=[];
    public function ignoreHistoryColumns(){
        return[
            'updated_at',
        ];
    }
}
