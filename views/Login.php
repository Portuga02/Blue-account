<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blue Account</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    </head>

    <body>
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="box">
                        <div class="field">
                            <figure class="image container image is-96x96">
                                <img src="https://image.freepik.com/fotos-gratis/pena-azul-isolada-no-fundo-branco_32525-141.jpg">
                            </figure>
                            <h1 class="title has-text-centered">
                                Blue Account 
                            </h1>
                            <form method="POST">

                                <div class="columns">
                                    <div class="column">
                                        <p class="control has-icons-left has-icons-right">
                                            <input class="input is-medium is-medium" name="email" type="email" placeholder="Digite seu Email" ">
                                            <span class=" icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <p class="control has-icons-left">
                                            <input class="input is-medium" name="password" type="password" placeholder="Digite sua senha">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <p class="control">
                                            <button class="button is-success" value="Entrar">
                                                Login
                                            </button>

                                        </p>
                                    </div>
                                </div>

                                <?php if (isset($error) && !empty($error)) : ?>
                                
                                    <div class="notification is-danger">
                                        <button class="delete"> </button>
                                        <strong><?php echo $error; ?></strong>
                                    <?php endif; ?>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/6133a4c519.js" crossorigin="anonymous"></script>
    </body>

</html>