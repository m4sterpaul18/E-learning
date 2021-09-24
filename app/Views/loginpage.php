<div class="container p-5 mb-5 mt-5" style="width:40%;border-radius:0.5rem;background-color:var(--bg-primary);">
    <form action="" method="post" class="text-light">
        <h1 class="text-center">Sign In</h1>
        <?php
                if(isset($validation)){
                    echo '<div class="alert alert-danger">';
                        echo $validation->listErrors();
                    echo '</div>';
                };
        ?>
        <div>
            <label for="Student-ID">Student-ID</label>
            <input type="text" class="form-control" id="Student-ID" name="student-id" 
            value="<?= set_value('student-id')?>" placeholder="xxxx-xxxxx" autocomplete="off">
        </div>
        <div>
            <label for="Password">Password</label>  
            <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
        </div>
        <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn btn-success">Login <i class="fas fa-sign-in-alt"></i></button>
        <div>
    </form>
    <div class="mt-3">
        <a href="/e-learning/public/register" class="text-light">Don't have an account yet?</a>
    </div>
</div>