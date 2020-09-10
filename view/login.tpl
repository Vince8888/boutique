<br>

	<h1>Login</h1>
	<span>or <a href="register">register here</a></span>

	<form action="login" method="POST"+>
		
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="submit" >

	</form>
{if isset($message)}
     {$message}
{/if}

</div>