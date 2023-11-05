<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete do Boris</title>
    <link rel="stylesheet" href="/Css/style.css">



<!--Script para imagem-->
    <script>
        // Função para aumentar a imagem quando clicada
        function ampliarImagem(imagem) {
            // Cria um elemento de sobreposição para exibir a imagem ampliada
            var overlay = document.createElement("div");
            overlay.className = "overlay";

            // Cria a imagem ampliada
            var imagemAmpliada = document.createElement("img");
            imagemAmpliada.src = imagem.src;
            imagemAmpliada.className = "imagem-ampliada";

            // Adiciona a imagem ampliada à sobreposição
            overlay.appendChild(imagemAmpliada);

            // Adiciona a sobreposição ao corpo do documento
            document.body.appendChild(overlay);

            // Fecha a imagem ampliada quando a sobreposição for clicada
            overlay.addEventListener("click", function() {
                document.body.removeChild(overlay);
                
            });
        }

        
        
    </script>
<!--Script para imagem-->



<!--CORPO DO SITE-->
</head>
<body>
    <header>
        <h1>Lanchonete do Boris</h1>
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section id="menu">
        <h2>Menu</h2>
        <div class="menu-container">
            <div class="item">
                <div class="card">
                    <img src="/Imagem/Hamburguer.jpg" alt="Hambúrguer" class="ampliavel" onclick="ampliarImagem(this)">
                    <h3>Hamburguer</h3>
                    <p>Um delicioso hambúrguer caseiro.</p>
                    <p class="price">R$ 10,00</p>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="/Imagem/Pizza.jpg" alt="Pizza" class="ampliavel" onclick="ampliarImagem(this)">
                    <h3>Pizza</h3>
                    <p>Uma pizza quentinha e saborosa.</p>
                    <p class="price">R$ 15,00</p>
                </div>
            </div>
            <!-- Adicionar mais itens no trabalho Futuro -->
        </div>
    </section>
    <section id="contato">
        <h2>Contato</h2>
        <p>Entre em contato conosco:</p>
        <address>
            Endereço: Rua Casemiro, 666<br>
            Telefone: (XX) XXXX-XXXX<br>
            Email: lucaspetito0511@hotmail.com
        </address>
    </section>
    <footer>
        <p>&copy; 2023 Lanchonete do Boris</p>
    </footer>
    
    
    
</body>
</html>
<!--CORPO DO SITE-->

