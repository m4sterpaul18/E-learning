<main class="p-5 mb-5">
    <div class="jumbotron" style="height:100vh;">
        <div class="row">
            <div class="col-sm-4 card rank-1 mb-3" style="">
                <div class="card-header">
                    <h3 class="card-title">Rank 1</h3>
                </div>
                <div class="card-body">
                    <p>IGN:</p>
                    <p>Points:</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">View profile</button>
                </div>
            </div>
            <div class="col-sm-4 card rank-2 mb-3" style="">
                <div class="card-header">
                    <h3 class="card-title">Rank 2</h3>
                </div>
                <div class="card-body">
                    <p>IGN:</p>
                    <p>Points:</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">View profile</button>
                </div>
            </div>
            <div class="col-sm-4 card rank-3 mb-3" style="">
                <div class="card-header">
                    <h3 class="card-title">Rank 3</h3>
                </div>
                <div class="card-body">
                    <p>IGN:</p>
                    <p>Points:</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">View profile</button>
                </div>
            </div> 
            <table class="table table-dark table-striped table-hover table-bordered mt-3">
                <thead>
                    <tr>
                        <td>Rank</td>
                        <td>IGN</td>
                        <td>Points</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($i=4;$i<11;$i++)
                        echo 
                        '<tr>
                            <td>'.$i.'</td>
                            <td>Test</td>
                            <td>21</td>
                        </tr>';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>