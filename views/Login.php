<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conta Azul</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    </head>

    <body>
        <section class="section">
            <div class="column ">
                <form method="POST" class="containers">
                    <div class="field col-md-5">
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
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input is-medium" name="password" type="password" placeholder="Digite sua senha">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button class="button is-success" value="Entrar">
                                Login
                            </button>

                        </p>
                    </div>
                    <?php if (isset($error) && !empty($error)) : ?>
                        <div class="notification is-danger">
                            <button class="delete"> </button>
                            <strong><?php echo $error; ?></strong>
                        <?php endif; ?>
                    </div>

                </form>
            </div>
        </section>
        <script src="https://kit.fontawesome.com/6133a4c519.js" crossorigin="anonymous"></script>
    </body>

</html>