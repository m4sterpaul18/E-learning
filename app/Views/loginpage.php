<div class="container bg-primary p-5" style="width:40%;border-radius:0.5rem;margin-top:15vh;">
    <form action="/" method="post" class="text-light">
        <h1 class="text-center">Sign In</h1>
        <div>
            <label for="Student-ID">Student-ID</label>
            <input type="text" class="form-control" id="Student-ID" name="student-id" 
            value="<?= set_value('student-id')?>">
        </div>
        <div>
            <label for="Password">Password</label>  
            <input type="password" class="form-control" id="Password" name="password">
        </div>
        <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn btn-success">Login <i class="fas fa-sign-in-alt"></i></button>
        <div>
    </form>
    <div class="mt-3">
        <a href="" class="text-light">Don't have an account yet?</a>
    </div>
</div>