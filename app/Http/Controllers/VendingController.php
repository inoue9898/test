<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendingRequest;
use Illuminate\Http\Request;
use App\Models\Vending;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
class VendingController extends Controller
{
    /**
     * 
     * 
     * 
     */
    public function showList() {
        $model = new Vending();
        $vendings = $model->getList();

        return view('list', ['vendings' =>$vendings]);
    }

    public function showRegistForm() {
        return view('regist');
    }

    public function registSubmit(VendingRequest $request) {
        DB::beginTransaction();

        try {
            $model = new Vending();
            $model->registVending($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back();
        }
        return redirect(route('regist'));
    }
}
