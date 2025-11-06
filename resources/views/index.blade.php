<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen py-8 px-4">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden ">
        <!-- En-tête -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6 text-white">
            <h1 class="text-2xl font-bold flex items-center">
                <i class="fas fa-tasks mr-3"></i>
                Ma Todo List
            </h1>
            <p class="text-blue-100 mt-2">Organisez vos tâches quotidiennes</p>
        </div>
        
        <!-- Formulaire d'ajout -->
          <div class="max-w-4xl mx-auto">
            <!-- Carte du formulaire de création -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">➕ Créer une nouvelle tâche</h2>
                
                <form method="POST" action="{{ route('tasks.store') }}" class="space-y-4">
                    @csrf
                    @method('post')
                    <div class="flex gap-4">
                        <input 
                            type="text" 
                            name="title" 
                            placeholder="Quelle est votre prochaine tâche ?" 
                            required
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                        >
                        <button 
                            type="submit"
                            class="px-6 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105"
                        >
                            ➕ Ajouter
                        </button>
                    </div>
                </form>
            </div>

             <!-- Section des messages -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 transition-all duration-300">
                    ✅ {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 transition-all duration-300">
                    ❌ {{ session('error') }}
                </div>
            @endif
        -


        <!-- Liste des tâches -->
        @foreach ($tasks as $task)
            
        
        <div class="divide-y divide-gray-200">
            <!-- Tâche en cours -->
            <div class="p-4 flex items-center hover:bg-gray-50 transition duration-150">
                <span class="flex-shrink-0 w-5 h-5 rounded-full border-2 border-blue-500 mr-3"></span>
                <span class="flex-grow"> {{ $task->title }}</span>


              <form method="POST" action="{{ route('task.destroy', $task) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            type="submit" 
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')"
                                            class="px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                            🗑️ Supprimer
                                        </button>
                                   </form>


                                              <!-- Bouton Modifier avec Bordure -->
                <form method="POST" action="{{ route('task.update', $task) }}">
                    @csrf
                    @method('PUT')
            <div class="flex gap-1 ">
                        <input 
                    type="text" 
                    name="titre" 
                    value="{{ old('titre', $task->title) }}"
                    placeholder="Modifier votre tâche..." 
                    required
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                >
                <button class="border-2 border-blue-500 text-blue-500 px-6 py-3 rounded-lg font-medium flex items-center hover:bg-blue-500 hover:text-white transition-all duration-300">
                    <i class="fas fa-edit mr-2"></i>
                    Modifier
                </button>
                   </form>
            </div>
            </div>
            

        @endforeach    

         
        
        <!-- Pied de page -->
        <div class="p-4 bg-gray-50 text-center text-gray-600">
            <p>Cliquez sur les cercles pour marquer comme terminé</p>
        </div>
    </div>
</body>
</html>