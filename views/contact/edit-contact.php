<html>

<head>

    <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('css/all.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('css/index_style.css') ?>" />




</head>

<body>



    <div class="jumbotron jum">

        <div class=" navbar">
            <h3>Phone Book <i class="far fa-address-book"></i></h3>

        </div>


        <div class="row justify-content-center">


            <div class="col-lg-4 inp">

                <h5 class="mt-5">Edit Contact</h5>

                <form action="<?= site_url("contact/edit/{$contact->id}") ?>" method="POST">

                    <input name="name" value="<?= $contact->name ?>" class="form-control mb-3 mt-3" placeholder="add name" id="userName" autocomplete="off">
                    <div id="nameAlert" class="alert alert-danger text-justify p-2 ">Please add name</div>
                    <input name="mobile" value="<?= $contact->mobile ?>" class="form-control mb-3" placeholder="add phone" id="userPhone" autocomplete="off">
                    <div id="phoneAlert" class="alert alert-danger text-justify p-2 ">Please add a valid number</div>
                    <input name="email" value="<?= $contact->email ?>" type="email" class="form-control mb-3" placeholder="add e-mail" id="userEmail" autocomplete="off">
                    <div id="mailAlert" class="alert alert-danger text-justify p-2 ">Please add a valid e-mail</div>

                    <button type="submit" onclick="addContact()" class="btn btn-info w-100 btn1 mt-3">Edit</button>

                </form>

            </div>

        </div>



    </div>



    <footer class="text-center">Ahmad Al-Shahawi 2019.All rights reserved</footer>

    <script src="<?= asset_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= asset_url('js/popper.min.js') ?>"></script>
    <script src="<?= asset_url('js/bootstrap.min.js') ?>"></script>
    <!-- <script src="<?= asset_url('js/index.js') ?>"></script> -->
</body>

</html>