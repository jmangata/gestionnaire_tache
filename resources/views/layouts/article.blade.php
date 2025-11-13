<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Simple</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg text-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-blog text-2xl"></i>
                    <h1 class="text-2xl font-bold">MonBlog</h1>
                </div>
                
                <!-- Navigation Desktop -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">Accueil</a>
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">Articles</a>
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">Catégories</a>
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">À propos</a>
                </nav>
                
                <!-- Menu mobile -->
                <button id="mobile-menu-button" class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Navigation Mobile -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">Accueil</a>
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">Articles</a>
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">Catégories</a>
                    <a href="#" class="font-medium hover:text-blue-200 transition duration-300">À propos</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-16 md:py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Bienvenue sur mon blog</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Partage d'idées, réflexions et découvertes.</p>
            <button class="bg-white text-purple-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition duration-300">
                Découvrir les articles
            </button>
        </div>
    </section>

    <!-- Todo List Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Articles Récents</h2>
            
            <div class="max-w-4xl mx-auto">
                <!-- Todo Item 1 - Article 1 -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6 card-hover">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mt-1">
                                <i class="fas fa-pencil-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Les bases de Laravel</h3>
                                <p class="text-gray-600 mb-4">Découvrez les fondamentaux du framework PHP Laravel pour développer des applications web modernes.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded mr-3"> @foreach ($articles as $article )
                                            {{$article->user->name ?? 'Anonyme'}}
                                        @endforeach</span>
                                    <span><i class="far fa-calendar mr-1"></i> 20 Mars 2023</span>
                                    <span class="mx-2">•</span>
                                    <span><i class="far fa-clock mr-1"></i> 5 min de lecture</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium flex items-center">
                            Lire <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Todo Item 2 - Article 2 -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6 card-hover">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mt-1">
                                <i class="fas fa-paint-brush text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Introduction à Tailwind CSS</h3>
                                <p class="text-gray-600 mb-4">Apprenez à utiliser Tailwind CSS pour créer des interfaces modernes et responsives sans écrire de CSS personnalisé.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded mr-3">Design</span>
                                    <span><i class="far fa-calendar mr-1"></i> 15 Mars 2023</span>
                                    <span class="mx-2">•</span>
                                    <span><i class="far fa-clock mr-1"></i> 7 min de lecture</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium flex items-center">
                            Lire <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Todo Item 3 - Article 3 -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6 card-hover">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mt-1">
                                <i class="fas fa-lightbulb text-yellow-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Bonnes pratiques de développement</h3>
                                <p class="text-gray-600 mb-4">Explorez les meilleures pratiques pour écrire un code maintenable, efficace et de qualité.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded mr-3">Programmation</span>
                                    <span><i class="far fa-calendar mr-1"></i> 10 Mars 2023</span>
                                    <span class="mx-2">•</span>
                                    <span><i class="far fa-clock mr-1"></i> 10 min de lecture</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium flex items-center">
                            Lire <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Todo Item 4 - Article 4 -->
                <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mt-1">
                                <i class="fas fa-mobile-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Design responsive avancé</h3>
                                <p class="text-gray-600 mb-4">Techniques avancées pour créer des interfaces qui s'adaptent parfaitement à tous les appareils.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded mr-3">UI/UX</span>
                                    <span><i class="far fa-calendar mr-1"></i> 5 Mars 2023</span>
                                    <span class="mx-2">•</span>
                                    <span><i class="far fa-clock mr-1"></i> 8 min de lecture</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium flex items-center">
                            Lire <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Catégories</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-code text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Développement</h3>
                        <p class="text-gray-600 text-sm mt-1">Articles sur la programmation</p>
                    </div>
                </a>
                
                <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 flex items-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-palette text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Design</h3>
                        <p class="text-gray-600 text-sm mt-1">Conseils et tendances design</p>
                    </div>
                </a>
                
                <a href="#" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 flex items-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-tools text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">Outils</h3>
                        <p class="text-gray-600 text-sm mt-1">Outils pour développeurs</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">À propos</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Ce blog est un espace où je partage mes découvertes, réflexions et apprentissages dans le domaine du développement web et du design. 
                    J'explore des technologies modernes comme Laravel et Tailwind CSS, et je partage mes expériences pour aider la communauté.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition duration-300">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition duration-300">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <i class="fas fa-blog text-xl text-purple-400"></i>
                <h3 class="text-xl font-bold">MonBlog</h3>
            </div>
            <p class="text-gray-400 mb-4">Partage d'idées et de connaissances</p>
            <div class="flex justify-center space-x-6 mb-4">
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Accueil</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Articles</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Catégories</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">À propos</a>
            </div>
            <div class="border-t border-gray-700 pt-4 text-center text-gray-400">
                <p>&copy; 2023 MonBlog. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple script pour le menu mobile (sans dépendances)
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>