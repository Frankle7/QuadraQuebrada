<?php


session_start();

if(!isset($_SESSION['login']) || $_SESSION['login'] == false) {
    header("location:login.php");
    die();
}

$_SESSION['login'] = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-arearestrita.css" type="text/css">
    <title>Quadra da quebrada</title>
</head>

<body>
    <main>
        <header>
            <!-- Casinhas coloridas -->
        </header>
        <!-- logo -->
        <div id="logo-links">
            <div id="LogoDoSite">
                <img src="imagem/logo 1.png" alt="">
            </div>

            
    <!-- <?php if(isset($_SESSION['login']) && $_SESSION['login']) :
    ?> -->
   <a href="logout.php">
<div id="navMenu"> <!-- o id é como o css identifica a parte da página-->
<ul> <!-- inicia a lista -->
<li> <a href="#" class="img-proff"><img src="imagem/perfil-icon.png"></a> <!-- item de lista porque começa com a tag <li> -->
<ul> <!-- outra lista dentro de um item de lista! lista-cepção!-->
<li><a href="logout.php" class="sairr">SAIR</a></li> <!-- este é um item de lista para a segunda lista-->
</ul> <!-- isso termina a segunda lista-->
</li> <!-- esta é a tag final do item da lista que contém outra lista e não está no final da linha original para mostrar que a segunda lista está dentro dela-->

<!-- <?php endif; ?> -->


        </div>

        <!-- Menu -->

        <hr>
        <section id="perfil">
            <div id="perfil_container">
                <div id="perfil_bg">
                    <img src="imagem/ss.jpg" alt="" srcset="">
                </div>
                <div id="perfil_foto">
                    <img src="imagem/proofil.jpg">
                </div>

                <div id="pefil_nome">
                    <h1>Debora Paixão</h1>
                </div>
                <br>

                <div class="perfil_textos">
                    <p>Esportes que você pratica</p>
                </div>
                <div id="perfil_sports">

                    <div><img src="imagem/icon/icons8-basquete-50 1.png" alt="" /></div>
                    <div><img src="imagem/icon/icons8-quimono-48 1.png" alt="" /></div>
                    <div><img src="imagem/icon/icons8-maratona-de-natação-90 1.png" alt="" /></div>
                </div>
                
                <div id="perfil_acesso">

                    <div id="perfil_ra">R. A 52256632247</div>

                    <div id="perfil_qrcode">
                        <img src="imagem/qr.webp" alt="">
                    </div>
                </div>
            </div>



            <section id="carteirinha_container">
                <button id="print">
                    <img src="imagem/printer.png" alt="" srcset="">
                </button>
                <div id="titulo_carterinha">
                    <h3>
                        Visualização da sua carteirinha
                    </h3>
                </div>
                <div id="carteirinha_frente">
                    <div id="foto_perfil">
                        <img src="imagem/proofil.jpg">
                    </div>
                    <div id="container_label">
                        <div id="carterinha_nome">
                            <h5>Nome</h5>
                            <label for="name">Debora Paixão</label>
                        </div>
                        <div class="divisao"></div>
                        <div id="carterinha_nascimento">
                            <h5>Nascimento</h5>
                            <label for="name">00/00/0000</label>
                        </div>
                        <div class="divisao"></div>

                        <div id="carterinha_ra">
                            <h5>RA</h5>
                            <label for="name">52256632247</label>
                        </div>
                        <div class="divisao"></div>

                    </div>

                </div>

                <div id="carteirinha_verso">
                    <img src="imagem/CARTEIRINHA_VERSO.png" alt="" srcset="">
                </div>
                <div id="qrcdd">
                    <img src="imagem/qr.png" alt="" class="">
                </div>

                <!-- <div id="imprimir">
                    <a href="#" >
                        <img src="imagem/printer.png" alt="" srcset="">
                    </a>
                </div> -->
            </section>
            
            <script>
                const printBtn = document.getElementById('carteirinha_container');
                printBtn.addEventListener('click', function(){
                    print();
                })
            </script>

        </section>
        
        <section id="section-formularios">
            <h1>DADOS CADASTRAIS</h1>
            <hr>
            <div>
                <label for="NomeCompleto" class="Label TamanhoFonte">Nome Completo:</label><br>
                <input type="text" id="NomeCompleto" name="NomeCompleto">
                <br><br>

                <label for="Email" class="Label">Email:</label><br>
                <input type="email" id="Email" name="Email">
                
                <label for="password" class="password">Senha:</label><br>
                <input type="password" id="Senha" name="Senha">
                <br><br>

                <label for="Telefone" class="Label">Telefone:</label><br>
                <input type="tel" id="Telefone" name="Telefone">

                <label for="Celular" class="LabelCell">Celular:</label><br>
                <input type="tel" id="Celular" name="Celular">
                <br><br>

                <div id="formulario-Radio">
                    <p class="TamanhoFonte">Sexo:</p>
                    <br>
                    <input type="radio" class="Label" name="Genero">
                    <label for="Genero" id="masc">Masculino</label><br><br>
                    <input type="radio" class="Label" name="Genero">
                    <label for="Genero" id="Fem">Feminino</label><br><br>
                    <input type="radio" class="Label" name="Genero">
                    <label for="Genero" id="outr">Outro</label><br><br>
                </div>
                
                <label for="Nome-Mae" id="nmae">Nome da Mãe:</label><br>
                <input type="text" id="NomeMae" name="NomeMae">

            </div>
        </section>
        <br>    
        <section id="sessao3">
            <div class="titulos-ModalidadeCursos">
                <div>
                    <h2>Modalidades Cadastradas</h2>
                </div>
                <div>
                    <h2>Cursos Cadastrados</h2>
                </div>
            </div>

            <div class="botoes-ModalidadeCursos">
                <div>
                    <input type="button" value="Futesal" id="botao-1">
                    <input type="button" value="Tenis-de-Mesa" id="botao-2">
                    <input type="button" value="Basquete" id="botao-3">
                    <input type="button" value="Volei" id="botao-4">
                    <input type="button" value="Treino-de-força" id="botao-5">
                    <input type="button" value="Natação" id="botao-6">
                    <input type="button" value="Hidroginastica" id="botao-7">
                </div>
                <div>
                    <input type="button" value="Pia" id="botao-8">
                    <input type="button" value="Palhaçaria" id="botao-9">
                    <input type="button" value="Ginsastica" id="botao-10">
                    <input type="button" value="Bale" id="botao-11">
                    <input type="button" value="Samba/Rock" id="botao-12">
                    <input type="button" value="Kambam" id="botao-13">
                    <input type="button" value="Artesanato" id="botao-14">
                </div>
            </div>
        </section>
        <br>
        <footer id="contatos">
            <div id="footerdivA">
                <h1> Mais informações </h1>
            </div>

            <div id="footerdivB">
                <div id="footerdivC">
                    <a href="#">SOBRE NÓS</a>
                    <a href="#">NOTICIAS</a>
                    <a href="#">PROJETOS</a>
                    <a href="#">CAMPEONATOS</a>
                    <a href="#">DOAÇÕES</a>
                </div>

                <div id="footerdivD">
                    <address>CONTATO</address>
                    <address>EMAIL:quadradaquebrada@org.com.br</address>
                    <address>TELEFONE:(11)9.6304-3003</address>
                    <address>ENDEREÇO: Rua antonio Garcia, 104 - São Mateus, São Paulo</address>
                </div>

                <div id="footerdivE">
                    <p>
                        REDES SOCIAIS
                    </p>
                    <div id="footerdivF foto1">
                        <div class="footerdivGHI">
                            <a href="#"><img src="imagem/icon/Facebook.png"></a>
                        </div>
                        <div class="footerdivGHI foto1">
                            <a href="#"><img src="imagem/icon/WhatsApp.png"></a>
                        </div>
                        <div class="footerdivGHI foto1">
                            <a href="#"><img src="imagem/icon/Instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </main>
</body>

</html>