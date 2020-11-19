<!DOCTYPE html>
<html>

<head>
	<script src="views/js/modify_question_view.js"></script>
</head>

<body onload="getCategory()">
	<div class="container content">
		<form id="deleteForm" class="form-group">
			<div class="row justify-content-md-center">
				<div class="col col-3 text-center">
					<h5>Category:</h5>
					<select onchange="openQuestionList()" class="custom-select custom-select-sm" name="category" id="category" required>
						<option value=""></option>
						<!-- <option value="1">Family</option>
            <option value="2">Tense</option> -->
					</select>
				</div>

				<div class="col col-3 text-center">
					<h5>Level:</h5>
					<select onchange="openQuestionList()" class="custom-select custom-select-sm" name="level" id="level" required>
						<option value=""></option>
						<option value="1">Easy</option>
						<option value="2">Medium</option>
						<option value="3">Hard</option>
					</select>
				</div>
			</div>
			<br>

			<div id="questionForm" style="display:none;">
				<table class="table table-bordered">
					<thead>
						<tr class="text-center">
							<th scope="col"></th>
							<th scope="col">Question</th>
							<th scope="col">Answer</th>
							<th scope="col">Correct</th>
						</tr>
					</thead>

					<tbody id="questionTable">
					</tbody>
				</table>

				<input id="btn" type="button" class="btn btn-primary btn-block" value="Detele All Selected Questions" onclick="submitForm()">
			</div>
			<br>

			<div class="alert alert-primary" role="alert" id="nothing" style="display:none;">
				You have not changed anything!!!
				<button type="button" class="close" aria-label="Close" onclick="closeNothingNoti()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="alert alert-success" role="alert" id="success" style="display:none;">
				Modify question(s) successfully!
				<button type="button" class="close" aria-label="Close" onclick="closeDelSuccess()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="alert alert-danger" role="alert" id="error" style="display:none;">
				Failed to modify question(s)!!!
				<button type="button" class="close" aria-label="Close" onclick="closeDelError()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<p id="demo"></p>
		</form>
	</div>
</body>

</html>