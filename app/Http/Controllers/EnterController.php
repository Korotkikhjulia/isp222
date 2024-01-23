<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\City;
use App\Models\Country;
use App\Models\Rubric;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Product;
use App\Models\enterr;
class EnterController extends Controller

{
    public function create()

    {
        $title = 'Enter';

        return view('enter', compact('title'));
    }

    public function enter(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:5|max:100',
                'email' => 'required',
                'phone' => 'required|integer',
            ],
            [
            'name.required'=> 'Заполните все поля',
            'name.min'=> 'Минимум 5 символов',
            'name.max'=> 'Максимум 100 символов',
            'email.required'=>'Заполните поле email',
            'phone.required'=>'Заполните поле phone',
            'phone.integer'=>'Поле является числом'
            ]
        );

        Enterr::create($request->all());
        return redirect()->route('home');
    }
}