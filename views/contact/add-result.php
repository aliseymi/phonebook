<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('css/all.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('css/index_style.css') ?>" />

    <style>
        .alert{
            display: block;
        }
    </style>

</head>
<body>
    
    <div class="container">

        <div class="row">

            <div class="col m-5 p-5">
                
                <?php if($alreadyExists): ?>
                    
                    <div class="alert alert-warning"><?= $message ?></div>

                <?php else: ?> 
                    
                    <div class="alert alert-<?= $success ? 'success' : 'danger' ?>"><?= $message ?></div>

                <?php endif ?>

            </div>

        </div>

        <div class="row m-5 p-5">

            <a href="<?= site_url('') ?>"><span class="text-white">&larr; Go Back</span></a>

        </div>

    </div>

</body>
</html>