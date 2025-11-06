<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::where('user_id', Auth::id())->get();
        return view('index', compact('tasks'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([ 
            'title' => 'required',
        
         ]);
         $validated['user_id'] = Auth::id();
         // Enegistrer le post en base de données
        Task::create($validated);
         // Rediriger vers la liste avec un message de succès
        return redirect()->route('index.index')->with('success', 'Tache créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $tasks)
    {
        
  // Validation des données
    $validated = $request->validate([
        'titre' => 'required|string|max:255'
    ]);

    // Mise à jour de la tâche
    $tasks->update([
        'title' => $validated['titre']
        ]);
          // Redirection avec message de succès
    return redirect()->route('index.index')->with('success', 'Tâche modifiée avec succès !');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $tasks, string $id)
    {
        $tasks=Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('index.index')->with('success', 'Tache supprimée avec succès !');
       
    }

    
}
