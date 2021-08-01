<?php include APP . "/Views/paginas/header.php" ?>

<div class="ui container">

    <div class="ui center aligned basic segment">
        <div class="ui horizontal divider header">
        </div>
    </div>

    <div class="ui stackable grid">




        <div class="eleven wide column">




            <div class="ui basic segment">

                <h1 class="ui header">
                    Animals
                    <div class="sub header"> Criado por alexsandra junior, em 12/08/12</div>
                </h1>

                <button class="ui right floated red button">
                    <i class="trash icon"></i>
                    Excluir
                </button>
                <button class="ui right floated yellow button">
                    <i class="edit icon"></i>

                    Editar
                </button>

            </div>



            <div class="ui label">
                <i class="eye icon"></i> 204 visualizações
            </div>









            <div class="ui large basic segment">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et blandit ante, sit amet dignissim mauris. Duis non magna risus. Vestibulum convallis aliquam placerat. Pellentesque accumsan nunc nec erat maximus, eget lobortis nisi interdum. Nunc vitae ante iaculis, suscipit sapien ac, lobortis diam. Integer cursus pellentesque elementum. Etiam in dui id tellus dignissim sollicitudin ut at purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ac massa quis mi efficitur sodales. Duis in dolor augue. Fusce accumsan, augue sit amet maximus dapibus, lectus nibh luctus nibh, eget tristique massa justo quis odio.
                </p>

                <img class="ui centered medium rounded image" src="../public/img/animal.jpg">

                <p>
                    Duis lobortis posuere magna vel auctor. Cras ullamcorper sollicitudin justo, ac ultricies massa pretium quis. Proin suscipit, massa in luctus maximus, sem ipsum tincidunt enim, non laoreet dui purus ac tellus. Vestibulum tempus risus scelerisque arcu imperdiet venenatis. Donec non porta neque, ac ultricies nibh. In eget fermentum mauris. Sed pulvinar consectetur augue. Suspendisse consequat molestie placerat. Maecenas at convallis nisi, a porttitor purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut vel est id libero pretium tincidunt non vitae erat.
                </p>
                <p>
                    Cras nec eros erat. Nunc ex nibh, fringilla vitae est vel, ultricies iaculis velit. Vestibulum ultricies feugiat velit, nec faucibus leo hendrerit sit amet. Aliquam egestas orci neque, eu euismod augue posuere eu. Sed in tortor nunc. Suspendisse interdum purus finibus felis luctus lacinia. In hac habitasse platea dictumst. Praesent congue ipsum a efficitur finibus. Aliquam volutpat justo ultrices urna feugiat tempus. Aliquam erat volutpat. Maecenas tincidunt eleifend arcu in imperdiet. Nunc nec lorem et leo commodo laoreet.
                </p>
            </div>


            <div class="ui labeled button" tabindex="0">
                <div class="ui red button">
                    <i class="heart icon"></i> Like
                </div>
                <a class="ui basic red left pointing label">
                    1,048
                </a>
            </div>

            <div class="ui yellow message">
                <i class="star icon"></i>
                To make the entire content of an item link, check out the link variation below
            </div>

            <div class="ui items">
                <div class="item">
                    <a class="ui tiny image">
                        <img src="../public/img/avatar2.png">
                    </a>
                    <div class="content">
                        <a class="header">Stevie Feliciano</a>
                        <div class="description">
                            <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend her time reading, running, and writing.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!--comentários-->
            <div class="ui threaded comments">
                <h3 class="ui dividing header">Comments</h3>
                <div class="comment">
                    <a class="avatar">
                        <img src="../public/img/avatar1.png">
                    </a>
                    <div class="content">
                        <a class="author">Matt</a>
                        <div class="metadata">
                            <span class="date">Today at 5:42PM</span>
                        </div>
                        <div class="text">
                            How artistic!
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <a class="avatar">
                        <img src="../public/img/avatar2.png">
                    </a>
                    <div class="content">
                        <a class="author">Elliot Fu</a>
                        <div class="metadata">
                            <span class="date">Yesterday at 12:30AM</span>
                        </div>
                        <div class="text">
                            <p>This has been very useful for my research. Thanks as well!</p>
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                    <div class="comments">
                        <div class="comment">
                            <a class="avatar">
                                <img src="../public/img/avatar3.jpg">
                            </a>
                            <div class="content">
                                <a class="author">Jenny Hess</a>
                                <div class="metadata">
                                    <span class="date">Just now</span>
                                </div>
                                <div class="text">
                                    Elliot you are always so right :)
                                </div>
                                <div class="actions">
                                    <a class="reply">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <a class="avatar">
                        <img src="../public/img/avatar1.png">
                    </a>
                    <div class="content">
                        <a class="author">Joe Henderson</a>
                        <div class="metadata">
                            <span class="date">5 days ago</span>
                        </div>
                        <div class="text">
                            Dude, this is awesome. Thanks so much
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <form class="ui reply form">
                    <div class="field">
                        <textarea></textarea>
                    </div>
                    <div class="ui olive labeled submit icon button">
                        <i class="icon edit"></i> Add Reply
                    </div>
                </form>
            </div>

            <!--Fim dos comentários-->
        </div>
        <div class="five wide column" style="background-color: #FAFAFA;">



            <div class="ui aligned centered basic segment">

                <div class="ui horizontal divider header">
                    Nos siga nas redes sociais
                </div>

                <div class="five ui buttons">

                    <button class="ui facebook button">
                        <i class="facebook icon"></i>
                        Facebook
                    </button>

                    <button class="ui instagram button">
                        <i class="instagram icon"></i>
                        Instagram
                    </button>
                </div>



                <div class="ui horizontal divider header">
                    Posts mais lidos
                </div>

                <a class="ui centered card" href="http://www.dog.com">
                    <div class="content">
                        <div class="floated header">Cute Dog</div>
                        <div class="meta">
                            <span class="category">Animals</span>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et blandit ante, sit amet dignissim mauris. Duis non magna risus.
                            </p>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="right floated author">
                            <img class="ui avatar image" src="../public/img/avatar1.png"> Matt
                        </div>
                    </div>
                </a>


                <a class="ui centered card" href="http://www.dog.com">
                    <div class="content">
                        <div class="floated header">Cute Dog</div>
                        <div class="meta">
                            <span class="category">Animals</span>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et blandit ante, sit amet dignissim mauris. Duis non magna risus.
                            </p>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="right floated author">
                            <img class="ui avatar image" src="../public/img/avatar1.png"> Matt
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>

</div>

<?php include APP . "/Views/paginas/footer.php" ?>