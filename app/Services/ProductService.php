<?php
/**
 * Created by IntelliJ IDEA.
 * User: micha
 * Date: 23.01.19
 * Time: 15:37
 */

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ProductService
{
    public function getAllByMinFive(){
      return  DB::table('products')
            ->where('amount','>',5)
            ->get();
    }

    public function getWithNoResultAmount(){
        return  DB::table('products')
            ->where('amount','=',0)
            ->get();
    }
}
