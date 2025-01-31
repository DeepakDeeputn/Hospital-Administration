<div class="container-fluid">
	<h2>Example: Hospital Management System with PHP and MySQL</h2>			
	<div class="col-md-6">                    
	<div class="panel panel-info">
		<div class="panel-heading" style="background:#00796B;color:white;">
			<div class="panel-title">Admin Log In</div>                        
		</div> 
		<div style="padding-top:30px" class="panel-body" >
			<?php if ($loginMessage != '') { ?>
				<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $loginMessage; ?></div>                            
			<?php } ?>
			<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="email" name="email" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" placeholder="email" style="background:white;" required>                                        
				</div>                                
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" class="form-control" id="password" name="password" value="<?php if(!empty($_POST["password"])) { echo $_POST["password"]; } ?>" placeholder="password" required>
				</div>	

				<label class="radio-inline">
				  <input type="radio" name="loginType" value="admin">Administrator
				</label>
				<label class="radio-inline">
				  <input type="radio" name="loginType" value="doctor">Doctor
				</label>
				<label class="radio-inline">
				  <input type="radio" name="loginType" value="patient">Patient
				</label>
				
				<div style="margin-top:10px" class="form-group">                               
					<div class="col-sm-12 controls">
					  <input type="submit" name="login" value="Login" class="btn btn-info">						  
					</div>						
				</div>				
			</form>   
		</div>                     
	</div>  
</div>