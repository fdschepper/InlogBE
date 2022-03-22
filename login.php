<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=login_script" method="post">
                <div class="form-group">
                    <label for="email">Enter your email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email" required>
                    <small id="email" class="form-text text-muted">I will share your email with everyone :)</small>
                </div>
                <div class="form-group">
                    <label for="password">Enter your password</label>
                    <input name="password" type="password" class="form-control" id="password" aria-describedby="password" required>
                    <small id="password" class="form-text text-muted">no whitespace</small>
                </div>
                <button type="submit" class="btn btn-danger">Register</button>
            </form>
        </div>
        <div class="col-6">
            <img src="./img/kle.jpg" alt="KEL:)" class="w-50 d-block">
        </div>
    </div>
</div>