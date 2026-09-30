<?php
$page_title = "Register - Re-NewTech";

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(!empty($name) && !empty($email) && !empty($password)) {
        header("Location: login.php");
        exit();
    } else {
        $message = "";
    }
}

ob_start();
?>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="auth-card">
                <div class="text-center mb-4">
                    <div class="d-inline-block bg-success bg-opacity-10 p-3 rounded-circle text-success mb-2">
                        <i class="bi bi-person-plus-fill fs-1"></i>
                    </div>
                    <h3 class="fw-bold text-dark">Create Account</h3>
                    <p class="text-muted small">Join Re-NewTech for eco-friendly electronics</p>
                </div>

                <?php if($message): ?>
                    <div class="alert alert-danger py-2 small"><?php echo $message; ?></div>
                <?php endif; ?>

                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold text-secondary">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                            <input type="text" name="name" class="form-control border-start-0" placeholder="John Doe" 
                             name="fullname" data-validation="required alpha">
                              <span class="error text-danger" id="nameError"></span>
                                        
                        </div>
                            
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold text-secondary">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                            <input type="email" name="email" class="form-control border-start-0"  name="email"
                                        placeholder="Enter email" data-validation="required email">
                        </div>
                         <span class="error text-danger" id="emailError"></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold text-secondary">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-muted"></i></span>
                            <input type="password" name="password" class="form-control border-start-0" placeholder="Create strong password" data-validation="required strongPassword min max" id="password"
                                        data-min="8" data-max="25">
                        </div>
                         <span class="error text-danger" id="passwordError"></span>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" data-validation="required terms" data-min-items="1" name="terms">
                        <label class="form-check-label small text-secondary" for="terms">
                            I accept the <a href="#" class="text-success text-decoration-none">Terms & Privacy Policy</a>
                        </label>
                         
                    </div>
                       <span class="error text-danger" id="termsError"></span>
                    <button type="submit" class="btn btn-auth w-100 mb-3">Register</button>

                    <p class="text-center small text-muted mb-0">
                        Already have an account? <a href="login.php" class="text-success fw-bold text-decoration-none">Login Here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$page_content = ob_get_clean();
require_once 'layout.php';
?>