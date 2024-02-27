<?php

namespace App\Models;

use App\Http\Controllers\libraryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;

    protected $table = 'library'; 
    protected $primaryKey = 'books'; 
}

class libraryContr extends libraryController
{
    public function index()
    {
        $nazivModela = library::all();
        return view('naziv-modela.index', ['library' => $nazivModela]);
    }

}
