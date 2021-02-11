<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getAll()
    {
        $data = Todo::all();

        return response()
                ->json([
                    'message' => 'get All data',
                    'statusCode' => 200,
                    'data' => $data,
                ]);
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save(); 

        return response()
                ->json([
                    'message' => 'success save data',
                    'statusCode' => 200
                ]);
    }

    public function update(Request $req)
    {
        $todo = Todo::find($req->id);
        $todo->title = $req->title;
        $todo->save();

        return response()
                ->json([
                    'message' => 'Updated',
                    'statusCode' => 200
                ]);
    }
    
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return response()
                ->json([
                    'message' => 'delete id = '.$id,
                    'statusCode' => 200
                ]);
    }
}
