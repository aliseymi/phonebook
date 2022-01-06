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
        .alert {
            display: block;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col m-5 p-5">

                <?php if ($alreadyExists) : ?>

                    <div class="alert alert-warning"><?= $message ?></div>

                <?php else : ?>

                    <div class="alert alert-<?= $success ? 'success' : 'danger' ?>"><?= $message ?></div>

                <?php endif ?>

            </div>

        </div>

        <div class="row">

            <?php if ($success) : ?>
                <div class="col text-center">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="75" cy="50" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.9166666666666666s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.9166666666666666s"></animate>
                        </circle>
                        <circle cx="71.65063509461098" cy="62.5" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.8333333333333334s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.8333333333333334s"></animate>
                        </circle>
                        <circle cx="62.5" cy="71.65063509461096" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.75s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.75s"></animate>
                        </circle>
                        <circle cx="50" cy="75" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.6666666666666666s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.6666666666666666s"></animate>
                        </circle>
                        <circle cx="37.50000000000001" cy="71.65063509461098" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.5833333333333334s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.5833333333333334s"></animate>
                        </circle>
                        <circle cx="28.34936490538903" cy="62.5" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.5s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.5s"></animate>
                        </circle>
                        <circle cx="25" cy="50" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.4166666666666667s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.4166666666666667s"></animate>
                        </circle>
                        <circle cx="28.34936490538903" cy="37.50000000000001" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.3333333333333333s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.3333333333333333s"></animate>
                        </circle>
                        <circle cx="37.499999999999986" cy="28.349364905389038" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.25s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.25s"></animate>
                        </circle>
                        <circle cx="49.99999999999999" cy="25" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.16666666666666666s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.16666666666666666s"></animate>
                        </circle>
                        <circle cx="62.5" cy="28.349364905389034" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="-0.08333333333333333s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="-0.08333333333333333s"></animate>
                        </circle>
                        <circle cx="71.65063509461096" cy="37.499999999999986" fill="#dcfff8" r="5">
                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1s" repeatCount="indefinite" begin="0s"></animate>
                            <animate attributeName="fill" values="#dcfff8;#dcfff8;#00e2ff;#dcfff8;#dcfff8" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1s" begin="0s"></animate>
                        </circle>
                    </svg>

                    Redirecting to Home page ...

                    <script>
                        setTimeout(() => {
                            location.href = '<?= site_url('') ?>';
                        }, 1500);
                    </script>

                </div>
            <?php else : ?>

                <div class="col m-5 p-5">
                    <a href="<?= site_url("contact/edit/{$id}") ?>"><span class="text-white">&larr; Go Back</span></a>
                </div>

            <?php endif; ?>

        </div>

    </div>

</body>

</html>