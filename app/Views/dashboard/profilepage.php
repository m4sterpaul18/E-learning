<main class="p-5 mb-5">
    <div class="row jumbotron p-5 text-light" style="background-color:var(--bg-primary);">
        <h3 class="text-center mb-5 display-4">Profile</h3>
        <div class="col-md-6">
            <svg data-jdenticon-value="<?= session()->get('firstname')?>" width="100%" height="50%" style="display: block;
    margin: auto;">
                Image won't load
            </svg>
        </div>
        <div class="col-md-6" style="font-size:1.3rem;">
            <p><b>Name:</b> <?= session()->get('firstname')?></p>
            <p><b>Lastname:</b> <?= session()->get('lastname')?></p>
            <p><b>Section:</b> <?= session()->get('section')?></p>
            <p><b>Student-ID:</b> <?= session()->get('student-id')?></p>

            <button class="btn btn-primary disabled">
                Edit Profile
            </button>
        </div>
    </div>
</main>
