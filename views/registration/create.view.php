
<div>
    <form action="/register" method="POST">
        <div>
            <label for="email">Email address</label>
            <input name="email" type="email" id="email" required>
        </div>

        <div>
            <label for="first_name">First Name</label>
            <input name="first_name" type="text" id="first_name" required>
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input name="last_name" type="text" id="last_name" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input name="password" type="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input name="password_confirmation" type="password" id="password_confirmation" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</div>
