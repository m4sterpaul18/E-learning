$(function(){
    // onload
    console.log('documents is ready');
    hideSpinner();


    // variable configuration for API
    let api_key = "eZTxjtuvCn6VTH78JQAbTaO25xOJ4AZj9DOKML8d";
    let game_id = "CAdventures";
    let game_version = 	"1.0";
    let maximum = "10";
    let ldboard_name = "main";
    let period_offset = "0";

    var request_url = `https://api.silentwolf.com/get_top_scores/${game_id}?version=${game_version}&max=${maximum}&ldboard_name=${ldboard_name}&period_offset=${period_offset}`;
    
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
                'x-api-key': "eZTxjtuvCn6VTH78JQAbTaO25xOJ4AZj9DOKML8d"
            }
        });
        const data = await response.json();
        return data;
    }
    // render leaderboard
    const showLeaderBoard = async () =>{
        $('#table-body').empty();

        // show spinner
        showSpinner();
        const scores = await getScores(request_url);
        // hide spinner
        hideSpinner();

        console.log(scores)
        for(var i = 0; i < scores.top_scores.length; i++ ){

            let playerNames = scores.top_scores[i].player_name;
            let playerScores = scores.top_scores[i].score;
            console.log(playerNames);
            console.log(playerScores);
            // top 1
            if(i == 0){
                $('#table-body').append(
                `
                <tr style="color:yellow;">
                    <td>${i+1}</td>
                    <td>${playerNames} <i class="fas fa-trophy"></i></td>
                    <td>${playerScores}</td>
                </tr>
                `
                );
            }
            // top 2
            else if(i == 1){
                $('#table-body').append(
                `
                <tr style="color:silver;">
                    <td>${i+1}</td>
                    <td>${playerNames} <i class="fas fa-trophy"></i></td>
                    <td>${playerScores}</td>
                </tr>
                `
                );
            }
            // top 3
            else if(i == 2){
                $('#table-body').append(
                `
                <tr style="color:#ea953d;">
                    <td>${i+1}</td>
                    <td>${playerNames} <i class="fas fa-trophy"></i></td>
                    <td>${playerScores}</td>
                </tr>
                `
                );
            }
            // default
            else{
                $('#table-body').append(
                `
                <tr style="color:var(--text-secondary);">
                    <td>${i+1}</td>
                    <td>${playerNames}</td>
                    <td>${playerScores}</td>
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
