<section class="py-5">
    <div class="container">
        <h1 class="mb-4">Contact Us</h1>
        
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Process form submission
                            $name = $_POST['name'] ?? '';
                            $email = $_POST['email'] ?? '';
                            $message = $_POST['message'] ?? '';
                            
                            // Validate inputs
                            $errors = [];
                            if (empty($name)) $errors[] = 'Name is required';
                            if (empty($email)) $errors[] = 'Email is required';
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email format';
                            if (empty($message)) $errors[] = 'Message is required';
                            
                            if (empty($errors)) {
                                // In a real app, you would save to database and/or send email
                                echo '<div class="alert alert-success">Thank you for your message! We will get back to you soon.</div>';
                            } else {
                                echo '<div class="alert alert-danger"><ul>';
                                foreach ($errors as $error) {
                                    echo "<li>$error</li>";
                                }
                                echo '</ul></div>';
                            }
                        }
                        ?>
                        
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Other Ways to Reach Us</h5>
                        
                        <div class="mb-4">
                            <h6><i class="fas fa-envelope text-primary me-2"></i> Email</h6>
                            <p>support@toolhub.example</p>
                        </div>
                        
                        <div class="mb-4">
                            <h6><i class="fas fa-phone text-primary me-2"></i> Phone</h6>
                            <p>+1 (555) 123-4567</p>
                        </div>
                        
                        <div class="mb-4">
                            <h6><i class="fas fa-map-marker-alt text-primary me-2"></i> Address</h6>
                            <p>123 Tool Street, San Francisco, CA 94107</p>
                        </div>
                        
                        <div>
                            <h6><i class="fas fa-clock text-primary me-2"></i> Hours</h6>
                            <p>Monday - Friday: 9am - 5pm PST</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>