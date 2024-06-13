<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Nama -->
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" required autofocus />
    </div>

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required />
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required />
    </div>

    <!-- Role -->
    <div>
        <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="pembeli">Pembeli</option>
            <option value="pemasok">Pemasok</option>
            <option value="admin">Admin</option>
        </select>
    </div>

    <div>
        <button type="submit">
            Register
        </button>
    </div>
</form>
