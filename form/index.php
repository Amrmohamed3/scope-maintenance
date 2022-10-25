<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v5</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="../style.css">
	<style>
		.wizard-v5-content .wizard-form {
    background: #0549a372;
	
		}
		.page-content {

    background: #fff;
}
.form-register .steps li:first-child {
    width: 37.59%;
    background-color: #0040ff79;

}
.form-register .steps li, .form-register .steps li.current {
	background-color: #0040ff79;

}.form-register .steps li a .step-text {
    color: #fff;
}

.actions ul li {

    background: #134294c2;
}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Scopy maintenance company</a>
        </div>
        <ul class=" navbar-nav">
            <li class="active"><a href="../index.php">Home</a></li>
            <li class="active"><a href="index.php">form</a></li>
			<li class="active"><a href="../services.php">service</a></li>

        </ul>
    </nav>
	<div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">scope Information</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="first_name">scope name</label>
										<input type="text" placeholder="ex: Laura" class="form-control" id="first_name" name="first_name">
									</div>
									<div class="form-holder">
										<label for="last_name">model</label>
										<input type="text" placeholder="ex: Vaughn" class="form-control" id="last_name" name="last_name">
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="address">Address Location</label>
										<input type="text" placeholder="622 Dixie Path, South Tobinchester, UT 98336" class="form-control" id="address" name="address">
										<span><i class="zmdi zmdi-pin"></i></span>
									</div>
								</div>
								<div class="form-row">
								
									<div class="form-holder">
										<label for="code">serial number</label>
										<input type="text" class="form-control" id="code" name="code">
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Entry date:</label>
										<select name="date" id="date" class="form-control">
											<option value="1" selected>1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select name="month" id="month" class="form-control">
											<option value="Jan" selected>Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
											<option value="june">june</option>
											<option value="july">july</option>
											<option value="august">august</option>
											<option value="september">september</option>
											<option value="november">november</option>
											<option value="december">december</option>
										</select>
										<select name="year" id="year" class="form-control">
											<option value="2027" selected>2027</option>
											<option value="2026">2026</option>
											<option value="2025">2025</option>
											<option value="2024">2024</option>
											<option value="2023">2023</option>
											<option value="2022">2022</option>
										</select>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Assay date:</label>
										<select name="date" id="date" class="form-control">
											<option value="1" selected>1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select name="month" id="month" class="form-control">
											<option value="Jan" selected>Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
											<option value="june">june</option>
											<option value="july">july</option>
											<option value="august">august</option>
											<option value="september">september</option>
											<option value="november">november</option>
											<option value="december">december</option>
										</select>
										<select name="year" id="year" class="form-control">
											<option value="2027" selected>2027</option>
											<option value="2026">2026</option>
											<option value="2025">2025</option>
											<option value="2024">2024</option>
											<option value="2023">2023</option>
											<option value="2022">2022</option>
										</select>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">out date:</label>
										<select name="date" id="date" class="form-control">
											<option value="1" selected>1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select name="month" id="month" class="form-control">
											<option value="Jan" selected>Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
											<option value="june">june</option>
											<option value="july">july</option>
											<option value="august">august</option>
											<option value="september">september</option>
											<option value="november">november</option>
											<option value="december">december</option>
										</select>
										<select name="year" id="year" class="form-control">
											<option value="2027" selected>2027</option>
											<option value="2026">2026</option>
											<option value="2025">2025</option>
											<option value="2024">2024</option>
											<option value="2023">2023</option>
											<option value="2022">2022</option>
										</select>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">End of assay date:</label>
										<select name="date" id="date" class="form-control">
											<option value="1" selected>1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select name="month" id="month" class="form-control">
											<option value="Jan" selected>Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
											<option value="june">june</option>
											<option value="july">july</option>
											<option value="august">august</option>
											<option value="september">september</option>
											<option value="november">november</option>
											<option value="december">december</option>
										</select>
										<select name="year" id="year" class="form-control">
											<option value="2027" selected>2027</option>
											<option value="2026">2026</option>
											<option value="2025">2025</option>
											<option value="2024">2024</option>
											<option value="2023">2023</option>
											<option value="2022">2022</option>
										</select>
									</div>
								</div>
								
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">owner Information</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="bank">First Name:</label>
										<input type="text"  class="form-control input-step-2" id="bank" name="bank">
									</div>
									<div class="form-holder">
										<label for="branch">second name:</label>
										<input type="text" placeholder="EG290KPL" class="form-control input-step-2" id="branch" name="branch">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">phone number:</label>
										<input type="number" name="email" class="email input-step-2-1" id="email"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">account name:</label>
										<input type="text" placeholder="Account Name" class="form-control input-step-2-1" id="account_name" name="account_name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_number">accont number</label>
										<input type="text" placeholder="4576-6970-3801-2620" class="form-control input-step-2-2" id="account_number" name="account_number">
										<span class="card"><i class="zmdi zmdi-card"></i></span>
									</div>
								</div>
								<div class="form-row form-row-date form-row-step-2">
									<div class="form-holder form-holder-2">
										<label for="date_2" class="special-label">Expiry Date:</label>
										<select name="date_2" id="date_2" class="form-control">
											<option value="15" selected>15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="month_2" id="month_2" class="form-control">
											<option value="Jan" selected>Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year_2" id="year_2" class="form-control">
											<option value="2018" selected>2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Confirm Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Comfirm Details</h3>
								<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>scope Name:</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>model:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>serial number:</th>
												<td id="phone-val"></td>
											</tr>
											<tr class="space-row">
												<th>Entry date</th>
												<td id="address-val"></td>
											</tr>
											<tr class="space-row">
												<th>assay date</th>
												<td id="gender-val"></td>
											</tr>
											<tr class="space-row">
												<th>out date</th>
												<td id="account-name-val"></td>
											</tr>
											<tr class="space-row">
												<th>describtion</th>
												<td id="account-number-val"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body>
</html>