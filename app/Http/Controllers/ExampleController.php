<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Example;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function example(Request $request, ?int $id = null) {
        $example = $id ? Example::find($id) : new Example();

        if($request->isMethod('post')) {
            $example->title = $request->input('title');
            $example->body = $request->input('body');
            $example->save();

            return redirect(route('content', [ 'id' => $example->id ]));
        }
        return view('content', ['model' => $example]);
    }

    public function create(Request $request) {
        return $this->example($request, null);
    }
}
