<main class="p-5">
    <div class="row">
        <div class="col-12 text-center p-4" 
        style="background-color: var(--bg-primary); color:var(--text-primary);
        border-radius:7px;">
            <h3>Welcome <?=session()->get('firstname')?>!</h3>
            <p>Go learn and Enjoy!</p>
        </div>
        <div class="jumbotron col-md-6 col-12-sm p-5 mt-3" style="background-color: var(--bg-primary); color:var(--text-primary);">
            <div class="row">
                <div class="col-md-6">
                    <img src="/e-learning/public/assets/svg/read.svg" alt="Icons made by Freepik" class="img-fluid my-2" title="Freepik.com">
                </div>
                <div class="col-md-6">
                    <h3>Start Learning</h3>
                    <p>Let's go learn some basic programming fundamentals</p>
                    <a href="/e-learning/public/lessons" class="btn btn-primary">Learn</a>
                </div>
                
            </div>  
        </div>
        <div class="col-md-6 bg-dark col-12-sm p-5 mt-3" style="background-color: var(--bg-primary); color:var(--text-primary);">
            <div class="row">
                <div class="col-md-6">
                    <h3>Check Ranking</h3>
                    <p>Check top player scores on our leaderboard</p>
                    <a href="/e-learning/public/ranking" class="btn btn-primary">Learn</a>
                </div>
                <div class="col-md-6">
                    <img src="/e-learning/public/assets/svg/top.svg" alt="Icons made by Freepik" class="img-fluid my-2" title="Freepik.com">
                </div>
            </div>
        </div>    
       
    </div>
</main>