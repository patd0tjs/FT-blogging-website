<center>
    <h1>Register</h1>
    <form action="<?=base_url()?>Users/register" method="post" class="p-3">
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            <label>Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="pw" class="form-control" placeholder="Password" required>
            <label>Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control"placeholder="Name" required>
            <label>Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="bday" class="form-control"placeholder="Name" required>
            <label>Birthdate</label>
        </div>
        <input type="submit" class="btn btn-success" value="Register">
    </form>
</center>