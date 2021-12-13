<div class="container p-5 my-5 login-wrapper" style="border-radius:0.5rem;background-color:var(--bg-primary);">

<img src="/e-learning/public/assets/svg/students.png" 
     alt="Icons made by Freepik" class="my-2" title="Freepik.com" 
     width="40%" height="100%" style="
    left: 50%;
    top: 50%;
    position: relative;
    transform: translate(-50%, 0px
);">

<form action="" method="post" class="text-light">
        <h1 class="text-center">Sign In</h1>
        <?php
                if(isset($validation)){
                    echo '<div class="alert alert-danger">';
                        echo $validation->listErrors();
                    echo '</div>';
                };

                if (session()->get('success')){
                    echo '<div class="alert alert-success">';
                        echo session()->get('success');
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