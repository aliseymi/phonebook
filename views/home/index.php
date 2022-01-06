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


        <div class="row">


            <div class="col-lg-4 inp">

                <form action="">
                    <input name="search" onkeyup="searchFunction()" id="myInput" class="form-control mt-2" placeholder="search">
                    <span class="icon text-primary"><i class="fas fa-search"></i></span>
                </form>

                <h5 class="mt-5">Add New Contact</h5>

                <form action="<?= site_url('contact/add') ?>" method="POST">

                    <input name="name" class="form-control mb-3 mt-3" placeholder="add name" id="userName" autocomplete="off">
                    <div id="nameAlert" class="alert alert-danger text-justify p-2 ">Please add name</div>
                    <input name="mobile" class="form-control mb-3" placeholder="add phone" id="userPhone" autocomplete="off">
                    <div id="phoneAlert" class="alert alert-danger text-justify p-2 ">Please add a valid number</div>
                    <input name="email" type="email" class="form-control mb-3" placeholder="add e-mail" id="userEmail" autocomplete="off">
                    <div id="mailAlert" class="alert alert-danger text-justify p-2 ">Please add a valid e-mail</div>

                    <button type="submit" onclick="addContact()" class="btn btn-info w-100 btn1">Add</button>

                </form>

            </div>


            <div class="col-lg-8">
                <?php if (!is_null($search_keyword)) : ?>

                    <h3 class="mb-3">search results for: <span class="text-warning"><?= $search_keyword ?></span></h3>

                <?php endif; ?>

                <table id="myTable" class="table text-justify table-striped">

                    <thead class="tableh1">
                        <th class="">id</th>
                        <th class="">Name</th>
                        <th class="">Phone</th>
                        <th class="">E-mail</th>
                        <th class="col-1">Actions</th>
                    </thead>

                    <tbody id="tableBody">

                        <?php

                        foreach ($contacts as $contact) : ?>

                            <tr>
                                <td class=""><?= $contact->id ?></td>
                                <td class=""><?= $contact->name ?></td>
                                <td class=""><?= $contact->mobile ?></td>
                                <td class=""><?= $contact->email ?></td>
                                <td class="col-1">
                                    <a href="<?= site_url("contact/edit/{$contact->id}") ?>" class="mr-2" title="edit"><img src="<?= asset_url('images/edit-icon2.png') ?>" alt="edit"></a>
                                    <a href="<?= site_url("contact/delete/{$contact->id}") ?>" onclick="return confirm('you want to delete this contact,are you sure?')" title="delete"><img src="<?= asset_url('images/delete-icon.png') ?>" alt="delete"></a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

                <?php

                use App\Models\Contact;

                $contactModel = new Contact();

                $pageSize = $contactModel->getPageSize();
                $totalRows = $contactModel->count([]);
                $display = 'block';
                if ($totalRows < $pageSize) {
                    $display = 'none';
                }

                ?>

                <div class="mt-5" style="display:<?= $display ?>;">
                    <ul class="pagination justify-content-center flex-wrap">
                        <?php paginationItems($contactModel); ?>
                    </ul>
                </div>

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