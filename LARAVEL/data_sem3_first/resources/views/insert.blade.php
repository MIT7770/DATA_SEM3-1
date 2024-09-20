<form action="{{ route('insertdata') }}" method="POST"> <!--  action is the url where the form data will be sent -->
    @csrf <!--  csrf token is used to protect the form from cross-site request forgery -->
    <label for="username">Username: </label>
    <input type="text" name="name" id="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br><br>

    <input type="submit" value="Submit">
</form>
