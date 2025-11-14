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

        <div class="">
            <div class="hidden md:flex px-10">
                <img class="w-full rounded-sm" src="imagem/cozinha1.png" alt="Imagem de uma cozinha">
            </div>

            <div class="max-w-7xl mx-auto relative md:hidden px-10">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-2 bg-[rgb(245,245,245)]/75 font-bold text-lg text-center border rounded-md backdrop-blur-sm">
                    Bem-vindo(a) a The Recipe!
                </div>
                <img class="w-auto h-52 rounded-sm object-center" src="imagem/cozinha1.png" alt="Imagem de uma cozinha">
            </div>
        </div>


        <div class="">
            <hr class="border-black mx-10 my-2">
        </div> 

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 px-8 md:px-14 py-4 items-center">

            <div class="space-y-2">
                <h1 class="hidden md:flex font-bold text-gray-900 text-3xl">
                    Bem-vindo(a) a The Recipe!
                </h1>
                <p class="text-gray-700 text-base sm:text-lg">
                    Entre, puxe uma cadeira e sinta-se em casa. Este é o seu novo ponto de encontro digital para quem adora boa comida, mas não tem tempo a perder. 
                    Sabemos que a vida anda depressa - entre o trabalho, o trânsito e a rotina - por isso, aqui a regra é clara: deixamos de lado as receitas complicadas, 
                    as técnicas intimidantes e as listas de ingredientes intermináveis que ninguém tem na despensa.
                </p>
            </div>
            <div class="hidden md:block">
                <img class="w-full h-48 object-cover rounded-sm" src="imagem/cozinhados_1.jpg" alt="Cozinha com molho">
            </div>

            <div class="space-y-2">
                <h2 class="text-2xl font-semibold text-gray-800"> 
                    Simples, Rápido e Delicioso
                </h2>
                <p class="text-gray-700 text-base sm:text-lg">
                    Acreditamos que cozinhar não deve ser um bicho de sete cabeças, nem uma tarefa aborrecida no fim de um dia longo. 
                    Aqui, vai encontrar soluções que se encaixam perfeitamente na sua rotina: seja para um almoço de última hora, um lanche nutritivo ou aquele jantar descontraído em família. 
                    Queremos provar que é possível criar pratos com sabor incrível e aspeto de restaurante, usando apenas o básico e gastando metade do tempo.
                </p>
            </div>

            <div class="hidden md:block">
                <img class="w-full h-48 object-cover rounded-sm" src="imagem/cozinhados_2.png" alt="Prato delicioso">
            </div>

            <div class="space-y-2">
                <h2 class="text-2xl font-semibold text-gray-800">
                    A Sua Cozinha Virtual
                </h2>
                <p class="text-gray-700 text-base sm:text-lg">
                    Este espaço é tanto para quem está a começar a cozinhar e precisa de uma mão amiga, como para os cozinheiros mais experientes que procuram uma inspiração fresca. 
                    A The Recipe está sempre de portas abertas para transformar o eterno dilema do "o que é que há para o jantar?" no melhor momento do dia. 
                    Pare de complicar e comece a desfrutar da magia de comer bem. Aqui, a simplicidade é o ingrediente secreto para refeições inesquecíveis.
                </p>
            </div>

            <div class="hidden md:block">
                <img class="w-full h-48 object-cover rounded-sm" src="imagem/cozinhados_3.jpg" alt="Frigedeira com comida">
            </div>

            <div class="">
                <h3 class="text-xl sm:text-2xl font-semibold text-gray-800">
                    Vamos por as mãos na massa?
                </h3>
            </div>
        </div>

       <button class="w-full px-6 sm:px-10 sm:py-5 md:px-16 lg:px-24  flex justify-center items-center">
            <a href="receitas.php" class="bg-black text-white px-6 py-3 rounded-full text-base sm:text-lg font-semibold hover:bg-gray-800 transition">
                Explore as Receitas
            </a>
        </button>
      
        <?php require('includes/footer.php'); ?>
    

    </body>
</html>