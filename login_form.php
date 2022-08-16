<div class="well" style="width: 450px; margin-top: 15px;">
    <h3 style="text-align:center;">Admin Login</h3>
	<form method="post" autocomplete="off" action="" id="login_form1">
		<div class="form-group">
			<label class="control-label">Username:</label>
			<input type="text" name="username" class="form-control" required>
		</div>

		<div class="form-group">
			<label class="control-label">Password:</label>
			<input type="password" name="password" class="form-control" required>
		</div>

		<button type="submit" class="btn btn-sm btn-primary" style="margin-left: 150px;
    width: 100px; background-color:black">Log in</button>
	</form>
</div>

<div class="well" style="box-shadow:none">
	<label><a href="password.php" style="color:black">Forget Password ?</a></label>
</div>

<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "login.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				
				var delay = 1000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    
			}
			}
		});
		return false;
	});
});
</script>