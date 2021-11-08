<!-- loader -->
<div class="loader-wrapper">
    <img src="/e-learning/public/assets/gif/loader.gif" alt="">
</div>

<main class="p-5 mb-5">
    <div class="card mx-auto profile" style="font-size:1.2rem;z-index:-1;">
        <div class="card-header text-center text-light" style="background-color: var(--bg-primary);">
            <h3>Profile</h3>
        </div>

        <?php
            if(isset($firstname)){
                echo 
                "<svg class='card-img-top' data-jdenticon-value='".$firstname."' 
                style='width:100%; height:256px;'>
                        Image won't load
                </svg>";
            }
        ?>

        
        <div class="card-body border-top">
             <?php 
            
                if(isset($firstname)){
                    echo '
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p><b>Name:</b>'.$firstname.'</p>
                            </li>
                            <li class="list-group-item">
                            <p><b>Lastname:</b>'.$lastname.'</p>
                            </li>
                            <li class="list-group-item">
                                <p><b>Section:</b>'.$section.'</p>
                            </li>
                            <li class="list-group-item">
                                <p><b>Student-ID:</b>'.$studentId.'</p>
                            </li>
                        </ul>
                    ';
                }else{
                    echo
                    "
                        <div class='text-center'>
                            <b class='lead'>
                            "
                            .$error.
                            "</b>
                        </div>
                        
                    "; 
                }
            
            ?> 
             
        </div>
    </div>
</main>
