<nav>
   <div class="flex justify-between items-center px-10 pt-4">
        <div class="hidden md:flex items-center h-16 w-16">
            <a href="index.php">
                <img class="w-full" src="imagem/The Recipe - logo.png" alt="Logo The Recipe">
            </a>
        </div>

        <div class="flex flex-1 justify-end">
            <input class="w-52 bg-transparent text-sm border border-slate-950 rounded-md  py-1 px-2 focus:outline-none" placeholder="Procure a receita..." type="text" />
            <div class="translate-y-1 -translate-x-8">   
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
        </div>
       

        <div class="hidden md:flex">
            <a href="index.php" class="p-4 font-sans text-lg font-bold hover:underline">Home</a>
            <a href="receitas.php" class="p-4 font-sans text-lg font-bold hover:underline">Receitas</a>  
            <a href="sobre.php" class="p-4 font-sans text-lg font-bold hover:underline">Sobre Nós</a>                
            <a href="favoritos.php" class="p-4 font-sans text-lg font-bold hover:underline">Favoritos</a>   
            <a href="login.php" class="p-4 font-sans text-lg font-bold hover:underline">Login</a>
        </div>

        <div class="flex items-center md:hidden">
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div> 
    <div class="">
        <hr class="border-black mx-10 my-2">
    </div>          
</nav>
