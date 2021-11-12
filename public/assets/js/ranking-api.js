$(function(){
    // onload
    console.log('documents is ready');
    hideSpinner();


    // variable configuration for API
    let api_key = "eZTxjtuvCn6VTH78JQAbTaO25xOJ4AZj9DOKML8d";
    let game_id = "CAdventures";
    let game_version = 	"1.0";
    let maximum = "10";
    let period_offset = "0";

    
    
    // functions for hide spinner on load
    function hideSpinner(){
        $('#spinner').hide();
        $('#getScores').removeAttr('disabled')
    }
    // function for show spiner and disable button
    function showSpinner(){
        $('#spinner').show();
        $('#getScores').attr('disabled','true')
    }
    
    // function to get scores
    const getScores = async (url) => {
        const response = await fetch(url,{
            headers:{
                'x-api-key': api_key
            }
        });
        const data = await response.json();
        return data;
    }
    // render leaderboard
    const showLeaderBoard = async () =>{
        // empty top 3 first
        $('#top').empty();
        // empty the table first 
        $('#table-body').empty();

        // set ldboard_name
        let ldboard_name = $('#ld_name').val();
        console.log("requested leaderboard: ", ldboard_name)
        // make get request url

        var request_url = `https://api.silentwolf.com/get_top_scores/${game_id}?version=${game_version}&max=${maximum}&ldboard_name=${ldboard_name}&period_offset=${period_offset}`;
        console.log(request_url)

        // show spinner while still gathering data
        showSpinner();

        const scores = await getScores(request_url);

        // hide spinner after gathering data
        hideSpinner();

        console.log(scores)
        for(var i = 0; i < scores.top_scores.length; i++ ){

            let playerNames = scores.top_scores[i].player_name;
            let playerScores = scores.top_scores[i].score;
            let studentId = scores.top_scores[i].metadata['studentId']
            console.log(playerNames);
            console.log(playerScores);
            // top 1
            if(i == 0){
                $('#top').append(
                `
                <div class="col-md-6 offset-md-3 my-3">
                    <div class="card rank-1">
                        <div class="card-header text-center">
                            <h4 class="card-title">Rank #1  <i class="fas fa-trophy"></i></h4>
                        </div>
                        <div class="card-body">
                            <p>Name: ${playerNames}</p>
                            <p>Score: ${playerScores}</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="/e-learning/public/profiles/search/${studentId}">Profile</a>
                        </div>
                    </div>
                </div>
                `
                );

                $('#top').slideDown();
            }
            // top 2
            else if(i == 1){
                $('#top').append(
                    `
                    <div class="col-md-6 my-3">
                        <div class="card rank-2">
                            <div class="card-header text-center">
                                <h4 class="card-title">Rank #2  <i class="fas fa-trophy"></i></h4>
                            </div>
                            <div class="card-body">
                                <p>Name: ${playerNames}</p>
                                <p>Score: ${playerScores}</p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="/e-learning/public/profiles/search/${studentId}">Profile</a>
                            </div>
                        </div>
                    </div>
                    `
                    );

                $('#top').slideDown();
            }
            // top 3
            else if(i == 2){
                $('#top').append(
                    `
                    <div class="col-md-6 my-3">
                        <div class="card rank-3">
                            <div class="card-header text-center">
                                <h4 class="card-title">Rank #3  <i class="fas fa-trophy"></i></h4>
                            </div>
                            <div class="card-body">
                                <p>Name: ${playerNames}</p>
                                <p>Score: ${playerScores}</p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="/e-learning/public/profiles/search/${studentId}">Profile</a>
                            </div>
                        </div>
                    </div>
                    `
                    );

                $('#top').slideDown();
            }
            // default
            else{
                $('#table-body').append(
                `
                <tr style="color:var(--text-secondary);">
                    <td>${i+1}</td>
                    <td>${playerNames}</td>
                    <td>${playerScores}</td>
                    <td>
                        <a class="btn btn-primary" href="/e-learning/public/profiles/search/${studentId}">Profile</a>
                    </td>
                </tr>
                `
                );
            }
        }
    }


    $( "#getScores" ).click(function() {
        showLeaderBoard();
      });

    
});
