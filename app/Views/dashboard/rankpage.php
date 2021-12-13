<!-- loader -->


<div class="loader-wrapper">
    <img src="/e-learning/public/assets/gif/loader.gif" alt="">
</div>

<main class="p-5 mb-5">
    <div class="mb-3">
		<div style="width:35%;" class="mx-auto text-center">
			<label for="ld_name" class="mb-2 lead"><b>Leaderboard Name</b></label>
			<select id="ld_name" class="form-control" name="ld_name" style="border: 2px solid var(--bg-primary);">
				>
				<option selected value="C-planes">C-planes</option>
				<option value="C-foods">C-foods</option>
				<option value="Game-3">Game 3</option>
			</select>

		<button class="btn btn-primary my-2" id="getScores">Get scores <i class="fas fa-medal"></i>
			<div class="spinner-border spinner-border-sm" role="status" id="spinner">
				<span class="visually-hidden">Loading...</span>
			</div>
   		</button>
		</div>
    </div>

<!-- ranking top 1-3 -->
<div class="row mb-3" id="top" style="display: none;">
</div>

	<!-- rank 4 below -->
		<table class="table table table-striped table-hover bg-dark">
			<thead class="text-light" style="background-color: var(--bg-primary);">
				<tr>
					<td style="width: 10%;">Rank</td>
					<td style="width: 40%;">Name</td>
					<td style="width: 30%;">Score</td>
					<td style="width: 20%;">Action</td>
				</tr>
			</thead>
			<tbody id="table-body">
			</tbody>
			
		</table>
	</div>
</main>

 