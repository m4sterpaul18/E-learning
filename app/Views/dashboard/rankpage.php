
<main class="p-5 mb-5">
    <div class="mb-5">
        <h3 class="text-center ">Rankings</h3>
        <p class="text-center lead ">Leaderboard: Main</p>   
    </div>

    <button class="btn btn-primary mb-2" id="getScores">
        Get scores <i class="fas fa-medal"></i>
		<div class="spinner-border spinner-border-sm" role="status" id="spinner">
  			<span class="visually-hidden">Loading...</span>
		</div>
    </button>
	
		<table class="table table table-striped table-hover bg-dark">
			<thead class="text-light" style="background-color: var(--bg-primary);">
				<tr>
					<td>Rank</td>
					<td>Name</td>
					<td>Score</td>
				</tr>
			</thead>
			<tbody id="table-body">
			</tbody>
			
		</table>
	</div>
</main>

 