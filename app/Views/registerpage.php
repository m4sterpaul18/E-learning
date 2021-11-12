<div class="container my-5">
    <div class="jumbotron p-5 text-light register-wrapper" style="background-color:var(--bg-primary);border-radius:0.5rem;">
        <h1 class="text-center">Register</h1>
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
        <form action="" method="post">
            <div class="row">
                <div class="form-group col-sm-12 col-md-6 mb-2">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                </div>
                <div class="form-group col-sm-12 col-md-6 mb-2">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div>
                <div class="form-group col-sm-12 mb-2">
                    <label for="">Section</label>
                    <select id="" class="form-control" name="section">
                        <option selected value="">Choose</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group col-sm-12 mb-2">
                <label for="">Student-ID</label>
                <input type="text" class="form-control" name="student-id" placeholder="xxxx-xxxxx">
                <small class="form-text text-light lead">Student ID will be used to login. Ex: 2018-xxxxx </small>
            </div>
            <div class="form-group col-sm-12 mb-2">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group col-sm-12 mb-2">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            </div>
            <div class="form-group d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-success">Register <i class="fab fa-wpforms"></i></button>
            <div>
            
        </form>
    </div>
</div>