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

<style>
    :root {
        --primary-color: #0f5132;
        --primary-hover: #0b3d26;
        --bg-light: #f4f7f6;
        --card-shadow: 0 15px 35px rgba(0,0,0,0.08);
        --border-radius: 20px;
    }

    body {
        background-color: var(--bg-light);
    }

    .auth-card {
        background: #ffffff;
        border-radius: var(--border-radius);
        padding: 40px;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: var(--card-shadow);
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(15, 81, 50, 0.15);
    }

    .btn-auth {
        background-color: var(--primary-color);
        color: #ffffff;
        border-radius: 12px;
        padding: 12px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-auth:hover {
        background-color: var(--primary-hover);
        color: #ffffff;
        transform: translateY(-2px);
    }
</style>

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
                             
                                        
                        </div>
                             <span class="error text-danger" id="nameError"></span>
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