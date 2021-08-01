<?php include APP . "/Views/paginas/header.php" ?>
<style>

</style>
<div class="ui container" style="margin-top: 40px">
    <div class="ui centered grid">
        <div class="seven wide column">

            <div class="ui attached segment">


                <div class="ui top large attached label">Registre-se</div>

                <img class="ui small centered image" src="../public/img/profile.png">


                <form class="ui large left icon form" action="<?= URL ?>/usuarios/cadastrar" method="post">
                    <div class="required field <?= $errors["nome_erro"] ? "error" : "" ?>">
                        <label>Seu nome</label>
                        <input type="text" name="nome" placeholder="Seu nome" value="<?= $dados["nome"] ?>">
                    </div>



                    <div class="required field <?= $errors["email_erro"] ? "error" : "" ?> ">
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="joe@gmail.com" value="<?= $dados["email"] ?>">
                    </div>
                    <div class="required field <?= $errors["senha1_erro"] ? "error" : "" ?>">
                        <label>Senha</label>
                        <input type="password" name="password1" placeholder="Senha" value="<?= $dados["senha1"] ?>">
                    </div>

                    <div class="big required field <?= $errors["senha2_erro"] ? "error" : "" ?>">
                        <label>Cofirme a senha</label>
                        <input type="password" name="password2" placeholder="Digite novamente a senha" value="<?= $dados["senha1"] ?>">
                    </div>

                    <div class="field ">
                        <div class="ui checkbox">
                            <input type="checkbox" tabindex="0" class="hidden">
                            <label>I agree to the Terms and Conditions</label>
                        </div>
                    </div>

                    <div class="field">

                        <button class="ui olive large button" type="submit">Submit</button>
                    </div>

                </form>

                <?php
                if (count($errors) == 0) {
                    echo "<h1>Erros</h1>";
                } else { ?>
                    <div class="ui error message">
                        <ul class="list">
                            <?php
                            foreach ($errors as $key => $error) {
                                if (strcmp("", $key) != 0)
                                    echo "<li>$error</li>";
                            }
                            ?>

                        </ul><?php
                            }
                                ?>
                    <!-- <div class="ui error message">
                    <ul class="list">
                        
                       
                    </ul>

                </div> -->
                    </div>
                    <div class="ui bottom attached warning message">
                        <i class="icon help"></i>
                        Já tem uma conta? <a href="#">clique aqui.</a>
                    </div>
            </div>
        </div>
    </div>

    <?php include APP . "/Views/paginas/footer.php" ?>