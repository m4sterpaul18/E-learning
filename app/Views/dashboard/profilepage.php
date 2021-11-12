<!-- loader -->
<div class="loader-wrapper">
    <img src="/e-learning/public/assets/gif/loader.gif" alt="">
</div>
<main class="p-5 mb-5">
    <div class="card mx-auto profile" style="font-size:1.2rem;z-index:0;">
        <div class="card-header text-center text-light" style="background-color: var(--bg-primary);">
            <h3>Profile</h3>
        </div>
        <svg class="card-img-top" data-jdenticon-value="<?= session()->get('firstname')?>" 
        style="width:100%; height:256px;">
                Image won't load
        </svg>
        <div class="card-body border-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p><b>Name:</b> <?= session()->get('firstname')?></p>
                </li>
                <li class="list-group-item">
                <p><b>Lastname:</b> <?= session()->get('lastname')?></p>
                </li>
                <li class="list-group-item">
                    <p><b>Section:</b> <?= session()->get('section')?></p>
                </li>
                <li class="list-group-item">
                    <p><b>Student-ID:</b> <?= session()->get('student-id')?></p>
                </li>
                
            </ul> 
        </div>
    </div>
</main>
