<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quatrtext extends Model
{
    use  HasFactory;

    public $timestamps = false;

    const SELECT_ORDER = [
        1 => 'Первый',
        2 => 'Второй',
        3 => 'Третий',
        4 => 'Четвертый',
        5 => 'Пятый',
        6 => 'Шестой',
    ];

    protected $fillable = [
        'name',
    ];

    /**
     * Получить родителя.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
