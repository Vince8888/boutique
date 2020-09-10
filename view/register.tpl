<div>

    <h1>Register</h1>

    {if !empty($message)}
        <div><a href="index">login here</a></div>
        <h1>{$message}</h1>
    {else}
        <div>or <a href="index">login here</a></div>
        <form action="register" method="POST">

            <input type="email" placeholder="Enter your email" name="email">
            <input type="password" placeholder="and password" name="password">
            <input type="password" placeholder="confirm password" name="confirm_password">
            <input type="submit">
        </form>
        {if !empty($erreur)}
            <h1>{$erreur}</h1>
        {/if}
    {/if}
</div>