<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        <div class="logo"> </div>
		<div class="nav"> 
            <h1 class="titl"> Fashionista Model </h1>
            <h3 class="desc"> Query form to collaborate with Aanchal Jaggi </h3>
        </div>
		<div class="side"> 
            <a href="about.php" class="link"> About ME </a>
            <br><br>
            <a href="blog.php" class="link"> Popular Portfolio Shoots </a>
            <br><br>
            <a href="motto.php" class="link"> Quotation Requests </a>
            <br><br>
            <a href="contact.php" class="link"> Online Collaboration Form </a>
            <br><br>

        </div>
		<div class="main"> 
            <h1 class="mainHead"> To contact Please Fill this form</h1>
            <form style="color:white;">
			<table>
				<tr>
					<td>
						First Name
					</td>
					<td>
						<input type="text" name="firstName">
					</td>
				</tr>

				<tr>
					<td>
						Last Name
					</td>
					<td>
						<input type="text" name="lastName">
					</td>
				</tr>
	
				<tr>
					<td>
						Email
					</td>
					<td>
						<input type="Email" name="email">
					</td>
				</tr>

				<tr>
					<td>
						Gender
					</td>
					<td>
						<input type="radio" name="gender" value="Male"> Male
					</td>
					<td>
						<input type="radio" name="gender" value="Female"> Female
					</td>
				</tr>
				<tr>
					<td>
						DOB
					</td>
					<td>
						<select name="date">
							
								<?php
									for($i=1; $i<=31; $i++){
								?>
								<option value=<?php echo $i; ?>> <?php echo $i;  ?> </option>
								<?php } ?>
						</select>

						<select name="month">
								<?php 
									$month = array('jan','feb','mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sept', 'oct', 'nov', 'dec' );
									foreach($month as $mahina){
								?>
								<option value=<?php echo $mahina; ?>> <?php echo $mahina; ?> </option>
								<?php } ?>
						</select>

						<select name="year">
								<?php 
									for($year=1990; $year<2020; $year++) {
								?>
								<option value=<?php echo $year; ?>> <?php echo $year; ?> </option>
								<?php } ?>
						</select>
					</td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="submit">
                    </td>
                </tr>
			    </table>
            </form>
        </div>
	    <div class="foot"> </div>
    </body>
</html>
		