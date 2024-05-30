<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabalhando definicao de area</title> 
</head>
<body>
    <style>
        *{ /*** Reset do css */
            padding: 0; /***  */
            margin: 0;
            box-sizing: border-box;
        }
        .topo{
            background-color: yellow;
        }
        .row1{
            /** aplicando tamanho nos elementos */


            /** Flex box */
            display: flex;
            justify-content: center;
        }
            
        /** Classes */
        .row2{
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        
        .cat:hover{
            background-color: blue;
            padding: 10px;
        }
        .ofertas:hover{
            background-color: darkorchid;
            padding: 10px;
        }
        .moda:hover{
            background-color: orange;
            padding: 10px;
        }


        /** Id */
        #ml{
            width: 60px;
            height: 50px;
        }
        #disney{
           width: 460px;
        }

        /** Tag ou elemento */
        input{
            border: none;
            outline: none;
            width: 500px;
        }
        
        ul{
            display: flex;
            gap: 10px;
            list-style: none;
        }
        li{
            cursor: pointer;
            padding: 10px;
           
        }
        li:hover{
            cursor: pointer;
            font-size: 18px;
            border-radius: 10px;
            color: white;
            background-color: green;
        }
        h1{
           /**************************
            ESTILIZANDO O H1
           */
           color: #000;
           font-size: 22px;
           margin-top: 20px;
           text-align: center;
        }
    
    

    </style>
    <!-- esse e o topo -->
    <!-- html5
        <header></header>
        <main></main>
        <section></section>
        <article></article>
    -->
    

    <div class="topo">
        <div class="row1">
            <img id="ml" src="./ml.png" alt="">
            <input type="text" placeholder="Buscar produtos, marcas e muito mais...">
            <img id="disney" src="https://http2.mlstatic.com/D_NQ_802965-MLA75056376619_032024-OO.webp" alt="">
        </div>
        <div class="row2">
            <div class="menu1">
                <ul>
                    <li class="cat">Categorias</li>
                    <li class="ofertas">Ofertas</li>
                    <li>Historico</li>
                    <li>Supermecado</li>
                    <li class="moda">Moda</li>
                    <li>Mercado Play</li>
                    <li>Vender</li>
                    <li>Contato</li>

                </ul>
            </div>
            <div class="menu2">
                <ul>
                    <li>Crie a sua conta</li>
                    <li>Entre</li>
                    <li>Compras</li>
                    <li>Carrinho</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- esse e o corpo -->
    <div class="content">
        
        <h1>CATEGORIAS EM DESTAQUE</h1>

        <section>

            <div class="card">
                <img src="./img/brinquedos.webp" alt="">
                <h4>brinquedo</h4>
            </div>
            
            <div class="card">
                <img src="" alt="">
                <h4>quarto</h4>
            </div>

            <div class="card">
                <img src="" alt="">
                <h4>higiene</h4>
            </div>

            <div class="card">
                <img src="" alt="">
                <h4>roupas</h4>
            </div>

            <div class="car">
                <img src="" alt="">
                <h4>passeio do bebe</h4>
            </div>

            <div class="car">
                <img src="" alt="">
                <h4>segurança</h4>
            </div>

            <div class="card">
                <img src="" alt="">
                <h4>banho</h4>
            </div>

            <div class="card">
                <img src="" alt="">
                <h4>saude</h4>
            </div>

        </section>

    </div>
</body>
</html>