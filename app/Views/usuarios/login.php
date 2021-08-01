<?php include APP . "/Views/paginas/header.php" ?>

<div class="ui container" style="margin-top: 40px">
    <div class="ui centered grid">
        <div class="six wide column">

           <!--  <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">
                    Conta não encontrada
                </div>
                <p>O e-mail ou senha estão incorretos.
                </p>
            </div>

            <div class="ui success message">
                <i class="close icon"></i>
                <div class="header">
                    Conta criada com sucesso!
                </div>
                <p>Realize o login e fique por dentro.</p>
            </div>-->
            <div class="ui attached segment"> 


                <!--    <i class="exclamation icon"></i> -->

                <div class="ui top large attached label">Entrar</div>



                <form class="ui large left icon form" action="<?=URL?>/usuarios/login" method="POST">


                    <div class="ui hidden divider"></div>
                    <div class="required field">
                        <label>E-mail</label>
                        <input type="email" placeholder="joe@gmail.com" name="email" >
                    </div>
                    <div class="required field">
                        <label>Senha</label>


                        <div class="ui action input">
                            <input type="password" placeholder="Sua senha..." name="senha">
                            <button class="ui icon button">
                                <!--  <i class="eye icon"></i> -->
                                <i class="eye slash icon"></i>
                            </button>
                        </div>
                    </div>



                    <div class="field">

                        <button class="ui olive large button" type="submit">Logar</button>
                    </div>



                   <!--  <div class="ui horizontal small divided">
                        Ainda não tem uma conta?
                        <a class="item" href="http://semantic-ui.mit-license.org/">Clique aqui</a>
                    </div> -->
                </form>

            </div>
            <div class="ui bottom attached warning message">
                <i class="icon help"></i>
                Ainda não tem uma conta? <a href="#">clique aqui.</a>
            </div>
        </div>
    </div>
</div>

<?php include APP . "/Views/paginas/footer.php" ?>