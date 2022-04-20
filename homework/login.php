<body> 
<div>

    <form action="controller.php" method="post">
        <label for="first_name">First name</label>
        <input type="text" id="first_name" name="first_name" required><br>
        <label for="last_name">Last name</label>
        <input type="text" id="last_name" name="last_name" required><br>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" required><br>
        <input type="hidden" name="action" value="create_user">
        <input type="submit" value="submit">
    </form>
</div>
</body>
