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

            <h2 class="text-4xl font-bold text-gray-900 text-center my-4">Coxa de frango no forno com batata</h2>

            <div class="flex justify-center text-gray-600 text-lg gap-10">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    40 minutos
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                    4 pessoas
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    económico</div>
                <div class="flex items-center gap-2">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>

                    </button>
                    favorito
                </div>

            </div>

            <div class="flex justify-center w-full my-4">
                <div class="w-[900px] h-[500px] max-w-full">
                    <img class="rounded-md w-full h-full object-cover mx-auto" src="imagem/coxa_frango.jpg" alt="Coxa de frango">
                </div>
            </div>

            <div class="mx-10 my-6"> <!-- Colocar na div ou na linha horizontal-->
                <hr class="border-black">
            </div> 

            <div class="w-full max-w-5xl mx-auto my-8 px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Ingredientes:</h3>
                        <ul class="list-disc text-lg text-gray-950 space-y-2 pl-8">
                            <li>4 pernas de frango</li>
                            <li>3 dentes de alho</li>
                            <li>300 ml vinho branco</li>
                            <li>50 ml azeite</li>
                            <li>1 colher de chá de pimenta doce</li>
                            <li>Sal q.b.</li>
                            <li>Pimenta preta q.b.</li>
                            <li>Tomilho fresco q.b.</li>
                            <li>Batata Doce</li>
                            <li>3 batatas doces grandes</li>
                            <li>1 c. chá de alho em pó</li>
                            <li>Pimenta preta q.b.</li>
                            <li>Azeite q.b.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Preparação:</h3>
                        <ol class="list-decimal text-lg text-gray-950 space-y-2 pl-8">
                            <li>Pré-aqueça o forno a 180°C.</li>
                            <li>Arranje as pernas de frango retirando os excessos de gordura e coloque-as num tabuleiro de ir ao forno.</li>
                            <li>Tempere-as com os dentes de alho esmagados, tomilho, pimenta e sal, a pimenta, o azeite e o vinho.</li>
                            <li>Envolva bem o frango na marinada e deixe repousar durante 10 minutos.</li>
                            <li>Entretanto, descasque as batatas, corte-as em gomos e disponha num tabuleiro.</li>
                            <li>Tempere as batatas com azeite, pimenta preta, alho em pó e sal.</li>
                            <li>Leve ambas as batatas ao forno e leve as coxas de frango ao forno durante cerca de 35 min a 180°C.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="mx-10 my-6"> <!-- Colocar na div ou na linha horizontal-->
                <hr class="border-black">
            </div> 

            <div class="w-full max-w-xl mx-auto">
                <h4 class="text-xl font-semibold mb-2">Deixe aqui a sua opinião:</h4>
                <form class="flex flex-col gap-4">
                    <textarea class="border border-black rounded-md p-3 text-lg" rows="4" placeholder="Escreva aqui o que achou desta receita..."></textarea>
                    <button type="submit" class="self-end bg-[#B09B80] text-white px-6 py-2 rounded-md hover:bg-[#4E2D0C] transition">
                        Enviar
                    </button>
                </form>
            </div>

        <?php require('includes/footer.php'); ?>
    </body>
</html>