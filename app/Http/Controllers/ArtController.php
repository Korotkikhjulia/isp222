<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eloquent;
class ArtController extends Controller
{
    public function getAll()
    {
        $data = Eloquent::all();
        dd($data);
        // echo "<table>
        // <tr><th>id</th><th>title</th><th>desc</th></tr>";
        // foreach ($data as $user) {
        // echo "<tr>";
        // echo "<td >" . $user->id . "</td>";
        // echo "<td >" . $user->title . "</td>";
        // echo "<td >" . $user->desc . "</td>";
        // echo "</tr>" ;
        // }
        // echo "</table>";
 
        // return view('home');

     }
     public function getOne($id)
     {
        $data = Eloquent::find($id);
         dd($data);
      }
}