<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function index()
    {
      $topics = Topic::where('is_completed', false)
                          ->orderBy('created_at', 'desc')
                          ->withCount(['topic_contents' => function ($query) {
                            $query->where('is_completed', false);
                          }])
                          ->get();

      return $topics->toJson();
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
      ]);

      $topic = Topic::create([
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
      ]);

      return response()->json('Topic created!');
    }

    public function show($id)
    {
      $topic = Topic::with(['topic_contents' => function ($query) {
        $query->where('is_completed', false);
      }])->find($id);

      return $topic->toJson();
    }

    public function markAsCompleted(Topic $topic)
    {
      $topic->is_completed = true;
      $topic->update();

      return response()->json('Topic updated!');
    }    
}
