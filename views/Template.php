<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $viewData['company_name']; ?></title>
    </head>

    <body>
       
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    </body>

</html>