<?php include APP . "/Views/paginas/header.php" ?>


<div class="ui container">
    <div class="ui center aligned basic segment">

        <div class="ui horizontal divider header">

        </div>

    </div>

    <div class="ui stackable grid">

        <div class="ten wide column">


            <form>

                <div class="ui action input" style="float: right; margin-bottom: 1rem">
                    <input type="text" placeholder="Search...">
                    <button class="ui icon button">
                        <i class="search icon"></i>
                    </button>
                </div>
            </form>




            <!--Card Postagens -->
            <div class="ui big olive fluid card">

                <div class="content">
                    <div class="header">Cute Dog</div>
                    <div class="meta">
                        <span class="right floated time">2 days ago</span>
                        <span class="category">Animals</span>
                    </div>
                    <div class="description">
                        <img class="ui middle aligned left floated small image" src="../public/img/animal.jpg">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        sit amet nulla nibh. Mauris facilisis nunc et purus pellentesque
                        varius. Integer egestas vestibulum elit ac ultrices. Aliquam tristique
                        nunc massa, at pretium tellus malesuada vel. Aenean vehicula augue
                        scelerisque rutrum euismod. Donec mi sem, maximus a magna non,
                        congue porta nisl. Sed convallis ante elit, ut volutpat dui eleifend
                        eu. Nunc congue scelerisque nisi in convallis. Aenean arcu neque,
                        aliquet sit amet maximus vel, luctus vitae turpis. Morbi eleifend
                        metus eget dui euismod, porta finibus lectus semper. Vivamus iaculis
                        tellus ac commodo blandit. Vestibulum non cursus arcu, at fringilla
                        elit. Nam id sapien gravida, pulvinar mi eu, ornare elit.
                    </div>
                </div>
                <div class="extra content">

                    <div class="left floated author">
                        <button class="ui olive button">Ler mais</button>

                        <button class="ui yellow button">
                            <i class="edit icon"></i>

                            Editar
                        </button>

                        <button class="ui red button">
                            <i class="trash icon"></i>
                            Excluir
                        </button>
                    </div>

                    <div class="right floated author">
                        <img class="ui avatar image" src="../public/img/avatar2.png"> Eva
                    </div>
                </div>
            </div>




            <div class="ui big olive fluid card">
                <div class="content">
                    <div class="header">Big palacies</div>
                    <div class="meta">
                        <span class="right floated time">3 days ago</span>
                        <span class="category">Houses</span>
                    </div>
                    <div class="description">
                        <img class="ui middle aligned left floated small image" src="../public/img/animal1.jpg">
                        Praesent interdum nunc quam, sed mattis felis vulputate id. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        Nulla facilisi. Duis bibendum libero tortor, a condimentum arcu egestas vel. Sed sem metus,
                        efficitur nec dui sit amet, pulvinar ultrices nulla. Vivamus et facilisis turpis. Donec
                        sollicitudin ipsum at orci tristique luctus. Fusce rutrum faucibus consequat.
                    </div>
                </div>
                <div class="extra content">
                    <div class="left floated author">
                        <button class="ui olive button">Ler mais</button>
                    </div>
                    <div class="right floated author">
                        <img class="ui avatar image" src="../public/img/avatar1.png"> Eva
                    </div>
                </div>
            </div>


        </div>
        <!--Fim dos cards postagens-->
        <div class="one wide column">

        </div>
        <div class="five wide column" style="background-color: #FAFAFA;">


            <div class="ui center aligned basic segment">

                <div class="ui horizontal divider header">
                    Conecte-se
                </div>

            </div>

            <!--Card amigos-->

            <div class="ui centered cards">
                <div class="card">
                    <div class="content">
                        <img class="right floated mini ui image" src="../public/img/avatar1.png">
                        <div class="header">
                            Elliot Fu
                        </div>
                        <div class="meta">
                            Friends of Veronika
                        </div>
                        <div class="description">
                            Elliot requested permission to view your contact details
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic green button">Approve</div>
                            <div class="ui basic red button">Decline</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <img class="right floated mini ui image" src="../public/img/avatar3.jpg">
                        <div class="header">
                            Jenny Hess
                        </div>
                        <div class="meta">
                            New Member
                        </div>
                        <div class="description">
                            Jenny wants to add you to the group <b>best friends</b>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic green button">Approve</div>
                            <div class="ui basic red button">Decline</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim dos cards amigos-->

    </div>
</div>


<div class="ui mini test modal transition">
    <div class="header">
        Delete Your Account
    </div>
    <div class="content">
        <p>Are you sure you want to delete your account</p>
    </div>
    <div class="actions">
        <div class="ui negative button">
            No
        </div>
        <div class="ui positive right labeled icon button">
            Yes
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>


<?php include APP . "/Views/paginas/footer.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
<script>
    // $('.mini.modal').modal('show');
</script>