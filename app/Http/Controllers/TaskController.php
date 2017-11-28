<?php
namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function index()
    {
        return Task::latest()->get();
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'product' => 'required|max:500'
        ]);
        return Task::create([
        'product' => request('product'),
        'quantity' => request('quantity'),
        'price' => request('price'),
        'total' => request('total'),
      ]);
    }
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return 204;
    }
}
