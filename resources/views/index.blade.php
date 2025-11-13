<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto py-8 px-4">
        <!-- En-tête -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Ma Todo List</h1>
            <p class="text-lg text-gray-600">Organisez vos tâches quotidiennes</p>
        </div>

        <!-- Section d'ajout de tâche -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex items-center mb-4">
                <i class="fas fa-plus-circle text-blue-500 text-xl mr-3"></i>
                <h2 class="text-xl font-semibold text-gray-700">Créer une nouvelle tâche</h2>
            </div>
            
            <p class="text-gray-600 mb-4">Quelle est votre prochaine tâche</p>
            
            <form  method="POST" action="{{ route('tasks.store') }}" >
                 @csrf
                @method('post')
                <input 
                    type="text" 
                    name="title"
                    placeholder="Entrez votre nouvelle tâche..." 
                    class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <button 
                    type="submit" 
                    class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium transition duration-200"
                >
                    Ajouter
                </button>
            </form>
        </div>
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

        <!-- Liste des tâches -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-6">Mes Tâches</h2>
              @foreach ($tasks as $task)
            <div class="space-y-4">
                <!-- Tâche 1 -->
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                    <div class="flex items-center">
                        <div class="w-6 h-6 rounded-full border-2 border-gray-400 mr-4 flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                        <span class="text-gray-700">Tâche modifiée avec succès !</span>
                    </div>
                    <div class="flex gap-2">
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
                       
                         <form method="POST" action="{{ route('task.destroy', $task) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            type="submit" 
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')"
                                            class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>>
                                             
                                        </button>
                                   </form>
                       
                    </div>
                </div>
        </div>
        @endforeach    
    </div>
</body>
</html>