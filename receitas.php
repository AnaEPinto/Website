<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Recipe</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class= "bg-[#F6F4F3]">
        
        <?php require('includes/nav.php'); ?>

        <div class="px-12 py-8">
    
            <div class="flex">

                <div class="w-64 sticky top-4 bg-white p-5 rounded-xl shadow-md border border-gray-100">

                    <h2 class="font-bold text-xl text-gray-800">Categoria</h2>
                    
                    <div class="border-b border-gray-200 my-2"></div>
                
                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="ms-2 text-sm font-medium text-gray-700 cursor-pointer">Entradas</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="ms-2 text-sm font-medium text-gray-700 cursor-pointer">Pratos Principais</label>
                    </div>

                    <div class="flex items-center m-2 px-4">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="ms-2 text-sm font-medium text-gray-700 cursor-pointer">Carne</label>
                    </div>

                    <div class="flex items-center m-2 px-4">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="ms-2 text-sm font-medium text-gray-700 cursor-pointer">Peixe</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="ms-2 text-sm font-medium text-gray-700 cursor-pointer">Sobremesas</label>
                    </div>
                </div>


                <div class="flex-1 px-4">
                    <h1 class="text-3xl font-bold mb-6 text-gray-800">Receitas</h1>

                    <div class="grid grid-cols-3 gap-6">

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1551248429-40975aa4de74?q=80&w=600&auto=format&fit=crop" alt="Salada Caesar" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Prato Principal</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        45 min
                                    </span>
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                        </svg>
                                        Fácil
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Salada Caesar com Frango</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Uma salada fresca com frango grelhado, croutons crocantes e molho caseiro...</p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#D1C8C1]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1551248429-40975aa4de74?q=80&w=600&auto=format&fit=crop" alt="Salada Caesar" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Prato Principal</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        45 min
                                    </span>
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                        </svg>
                                        Fácil
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Salada Caesar com Frango</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Uma salada fresca com frango grelhado, croutons crocantes e molho caseiro...</p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#D1C8C1]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1551248429-40975aa4de74?q=80&w=600&auto=format&fit=crop" alt="Salada Caesar" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Prato Principal</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        45 min
                                    </span>
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                        </svg>
                                        Fácil
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Salada Caesar com Frango</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Uma salada fresca com frango grelhado, croutons crocantes e molho caseiro...</p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#D1C8C1]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1551248429-40975aa4de74?q=80&w=600&auto=format&fit=crop" alt="Salada Caesar" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Prato Principal</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        45 min
                                    </span>
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                        </svg>
                                        Fácil
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Salada Caesar com Frango</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Uma salada fresca com frango grelhado, croutons crocantes e molho caseiro...</p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#D1C8C1]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="flex space-x-1 items-center justify-center ">
            <button class="rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                Prev.
            </button>
            <button class="min-w-9 rounded-md bg-slate-800 py-2 px-3 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                1
            </button>
            <button class="min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                2
            </button>
            <button class="min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                3
            </button>
            <button class="min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                Next
            </button>
        </div>

        <?php require('includes/footer.php'); ?>

    </body>

</html>