<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {

    static $columns = ['sl_man','','sl_all','sl_base','sl_prize','sl_lifetime','sl_line','sl_harmful',
        'sl_night','sl_weekend','sl_transport','sl_food','sl_balance','sl_annual','sl_balance'];

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
     
        return view('journal');
    }

    public function update_salary($salary_id, $column, $value) {
        $colName = static::$columns[$column-1];
        $query = 'update salary set '.$colName.'='.$value.' where salary_id='.$salary_id;
        DB::update($query);
        return $query; // for debug
    }
}
