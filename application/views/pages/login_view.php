<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
 </head>
 <body>
 	<div id="wrapper">
		<header id="head">
			<nav>
				<a href="/CodeIgniter_2.1.3/index.php/home" target="_self"><span id="home">Home</span></a>
				<a href="/CodeIgniter_2.1.3/index.php/projects" target="_self"><span id="assignments">Projects</span></a>
				<a href="/CodeIgniter_2.1.3/index.php/about" target="_self"><span id="labs">About</span></a>
				<a href="/CodeIgniter_2.1.3/index.php/contact" target="_self"><span id="labs">Contact</span></a>
			</nav>
		</header>
-->
	   <h1>Login Below</h1>
	   <?php echo validation_errors(); ?>
	   <?php echo form_open('pages/verifylogin'); ?>
	     <label for="username">Username:</label>
	     <input type="text" size="20" id="username" name="username"/>
	     <br/>
	     <label for="password">Password:</label>
	     <input type="password" size="20" id="passowrd" name="password"/>
	     <br/>
	     <input type="submit" value="Login"/>
	   </form>
