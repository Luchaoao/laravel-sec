<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Allclasse;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = Allclasse::get();
        // dd($class[0]->class_name);
        $data = [
            'id' => $class[0]->id,
            'className' => $class[0]->class_name,
            'classIntroduce' => $class[0]->class_introduce,
        ];
        // dd($data);
        return Inertia::render('ClassList', [
            'response' => $data,
        ]);
    }

    public function add(Request $request)
    {
        // dd($request->all());

        $message = '';

        try {
            Allclasse::create([
                'name' => $request->name,
                'classIntroduce' => $request->classIntroduce,
            ]);
            $message = 'success';
        }catch (\Throwable $th) {
            $message = 'fail';
        }

        // 回到test頁面
        return redirect('/ClassList')->with(['message' => $message]);
    }
}
