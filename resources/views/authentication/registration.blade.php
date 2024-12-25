<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <!-- Confirm Password -->
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <!-- Role -->
    <div>
        <label for="role">Register as:</label>
        <select id="role" name="role" required>
            <option value="jobseeker" selected>Jobseeker</option>
            <option value="employer">Employer</option>
        </select>
    </div>

    <!-- Submit -->
    <button type="submit">Register</button>
</form>