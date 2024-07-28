<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'status', 'notes', 'user_id', 'invoice', 'invoice_amount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
