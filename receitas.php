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
                        <label class="mx-2 text-sm font-medium text-gray-700 cursor-pointer">Entradas</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="mx-2 text-sm font-medium text-gray-700 cursor-pointer">Massas</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="mx-2 text-sm font-medium text-gray-700 cursor-pointer">Carne</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="mx-2 text-sm font-medium text-gray-700 cursor-pointer">Peixe</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="mx-2 text-sm font-medium text-gray-700 cursor-pointer">Vegetariano</label>
                    </div>

                    <div class="flex items-center m-2">
                        <input type="radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label class="mx-2 text-sm font-medium text-gray-700 cursor-pointer">Sobremesas</label>
                    </div>
                </div>

                <div class="flex-1 px-4">
                    <h1 class="text-3xl font-bold mb-6 text-gray-800">Receitas</h1>

                    <div class="grid grid-cols-3 gap-6">

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="imagem/coxa_frango.jpg" alt="Coxa de frango no forno com batata" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Carne</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        45 min
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Coxa de frango no forno com batata</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Uma receita clássica de frango assado, com coxas suculentas envolvidas em temperos caseiros, batatas douradas e alho. </p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#B09B80]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="imagem/robalo_assado.jpg" alt="Salada Caesar" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Peixe</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        50 min
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Robalo no Forno</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Este prato de robalo assado com ervas aromáticas e gengibre combina intensidade e delicadeza, saúde e cor, frescura e complexidade.</p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#B09B80]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="imagem/coxa_frango.jpg" alt="Coxa de frango no forno com batata" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Carne</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        45 min
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Coxa de frango no forno com batata</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Uma receita clássica de frango assado, com coxas suculentas envolvidas em temperos caseiros, batatas douradas e alho. </p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#B09B80]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100 group">
                            
                            <div class="relative">
                                <img src="imagem/robalo_assado.jpg" alt="Salada Caesar" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                <button class="absolute top-3 right-3 bg-white/90 p-2 rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                </button>
                                <span class="absolute top-3 left-3 bg-[#F6F4F3] text-black text-xs font-bold px-2 py-1 rounded-md">Peixe</span>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between mb-2 ">
                                    <span class="text-sm text-gray-500 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        50 min
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">Robalo no Forno</h3>

                                <p class="text-gray-600 text-sm line-clamp-2 mb-4">Este prato de robalo assado com ervas aromáticas e gengibre combina intensidade e delicadeza, saúde e cor, frescura e complexidade.</p>

                                <button class="w-full sm:py-5 md:py-2 flex justify-center items-center">
                                    <a href="receita.php" class="w-full py-2 bg-[#F6F4F3] text-black font-semibold rounded-lg hover:bg-[#B09B80]"> Ver Detalhes </a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="flex gap-2 items-center justify-center">
            <button class="rounded-md border border-black py-2 px-3 text-sm hover:bg-[#B09B80]">Prev.</button>
            <button class="rounded-md border border-black py-2 px-3 text-sm hover:bg-[#B09B80]">1</button>
            <button class="rounded-md border border-black py-2 px-3 text-sm hover:bg-[#B09B80]">2</button>
            <button class="rounded-md border border-black py-2 px-3 text-sm hover:bg-[#B09B80]">3</button>
            <button class="rounded-md border border-black py-2 px-3 text-sm hover:bg-[#B09B80]">Next</button>
        </div>

        <?php require('includes/footer.php'); ?>

    </body>

</html>