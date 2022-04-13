<h1>User Login</h1>
<form action="users" method="POST">
@csrf
    <input type="text" name="username" placeholder="Enter your username">
    <br><br>
    <input type="password" name="password" placeholder="Enter your password">
    <br><br>
    <button type="submit">Login</button>
</form>