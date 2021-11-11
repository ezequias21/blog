<div class="ul container">

    <div class="ui large inverted menu">
        <a href="../paginas/home" class="olive item active">Home</a>
        <a href="../paginas/colaboradores" class="olive item">Colegas</a>
        <a href="../posts/postagens" class="olive item">Postagens</a>
        <a href="../paginas/sobre" class="olive item">Sobre nós</a>

        <div class="right menu">
            <div class="item">

                <?php if (isset($_SESSION["usuario_nome"])) { ?>

                    <div class="ui button circular black" data-tooltip="Crie um novo post" data-position="bottom center" onclick="window.location.href='<?=URL?>/posts/criar'">
                        <i class="plus icon"></i>
                    </div>

                    <a class="ui image large label">
                        <img src="../public/img/avatar1.png">
                       <?= $_SESSION["usuario_nome"]?>
                    </a>

                    <a href="../usuarios/sair" class="ui basic label large">Sair</a>
                <?php } else { ?>


                    <button class="ui olive button" onclick="window.location.href = '../usuarios/cadastrar'" style="margin-right: 10px">Registre-se</button>
                    <button class="ui olive button" onclick="window.location.href='../usuarios/login'">Conecte-se</button>
                <?php } ?>
            </div>
        </div>

    </div>

</div>