<main class="p-5 mb-5">
    <div class="row jumbotron p-5 text-light" style="background-color:var(--bg-primary);">
        <h3 class="text-center mb-5 display-4">Profile Page</h3>
        <div class="col-md-6">
            <img class="img-fluid" src="/e-learning/public/assets/images/nezuko_OP.png" alt="test">
        </div>
        <div class="col-md-6" style="font-size:1.3rem;">
            <p><b>Name:</b> <?= session()->get('firstname')?></p>
            <p><b>Lastname:</b> <?= session()->get('lastname')?></p>
            <p><b>Section:</b> <?= session()->get('section')?></p>
        </div>
    </div>
</main>
