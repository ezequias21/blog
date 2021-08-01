<?php include APP . "/Views/paginas/header.php" ?>

<div class="ui horizontal divider">

</div>

<div class="ui container">

    <div class="ui ignored info message">
        <div class="header">Compartilhe ideias</div>
        <ul class="list">
            <li>Compartilhe suas ideias como a comunidade escrevendo um post. Abaixo existe algumas funcionalidades que você usar para escrever.</li>
        </ul>
    </div>


    <div class="ui segment">
        <div class="ui form">
            <div class="ui stackable grid">


                <div class="six wide column">
                    <div class="ui yellow message">
                        No momento é possível adicionar somente uma imagem por post.
                    </div>

                    <div class="field">

                        <img class=" centered medium rounded ui image" src="../public/img/animal.jpg">

                    </div>


                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" tabindex="0" class="hidden">
                            <label>Usar essa mesma imagem como thumbnail.</label>
                        </div>
                    </div>

                    <div class="field">

                        <div class="fields">



                            <img class=" centered small rounded ui image" src="../public/img/animal.jpg">
                        </div>

                    </div>


                </div>



                <div class="ten wide column">


                    <div class="inline field">

                        
                        
                        <div class="inline field">
                        <div class="ui large label">
                            <i class="mail icon"></i> Título
                        </div>
                            <input type="text" name="first-name" placeholder="Título de seu post">
                        </div>
                    </div>


                    <div class="field">
                        <div class="ui large label">
                            <i class="pencil alternate icon"></i> Texto
                        </div>


                        <div class="ui icon  right floated buttons" style="margin: 0.25rem">
                            <button class="ui button"><i class="align left icon"></i></button>
                            <button class="ui button"><i class="align center icon"></i></button>
                            <button class="ui button"><i class="align right icon"></i></button>
                            <button class="ui button"><i class="align justify icon"></i></button>
                        </div>
                        <div class="ui icon right floated buttons" style="margin: 0.25rem">
                            <button class="ui button"><i class="bold icon"></i></button>
                            <button class="ui button"><i class="underline icon"></i></button>
                            <button class="ui button"><i class="text width icon"></i></button>
                        </div>
                        <div class="ui icon  right floated buttons" style="margin: 0.25rem">
                            <button class="ui icon button"><i class="plus icon"></i></button>
                            <button class="ui icon button"><i class="minus icon"></i></button>
                        </div>
                        <textarea rows=22></textarea>

                        <div class="ui right floated olive button" style="margin-top: 0.5rem">
                            Criar
                            <i class="right chevron icon"></i>
                        </div>
                    </div>

                </div>

            </div>
            <!--Ui grid-->
        </div>
    </div>
</div>


<?php include APP . "/Views/paginas/footer.php" ?>