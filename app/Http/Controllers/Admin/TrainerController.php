<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index()
    {

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id',$category_id)->get();

        $trainer = DB::table('users')->join('roles')->join('role_user','users.id',)
        return view('admin.trainer.index');
    }
}
