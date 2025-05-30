<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToolHub - Free Online Tools</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4A90E2;
            --secondary-color: #F8F9FA;
            --text-color: #333;
            --card-bg: #FFFFFF;
            --border-color: #EAEAEA;
            --success-color: #28a745;
            --error-color: #dc3545;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .hero-section {
            background: linear-gradient(to right, #E3F2FD, #BBDEFB);
            padding: 4rem 0;
            text-align: center;
        }
        
        .tool-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 25px;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
        }
        
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        }
        
        .icon-pdf { color: #D9534F; }
        .icon-image { color: #5CB85C; }
        .icon-video { color: #F0AD4E; }
        .icon-file { color: #5BC0DE; }
        .icon-ai { color: #6e54e4; }
        
        .file-upload-label {
            display: block;
            padding: 20px;
            border: 2px dashed var(--border-color);
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s;
        }
        
        .file-upload-label:hover {
            border-color: var(--primary-color);
        }
        
        .progress-bar {
            height: 20px;
            border-radius: 4px;
            overflow: hidden;
            display: none;
        }
        
        .progress {
            height: 100%;
            background-color: var(--primary-color);
            width: 0%;
            transition: width 0.3s;
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 5px;
            color: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 1000;
            display: none;
            animation: fadeIn 0.3s ease-out;
        }
        
        .notification.success {
            background-color: var(--success-color);
        }
        
        .notification.error {
            background-color: var(--error-color);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-sm sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="index.php">ToolHub</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tools.php">All Tools</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <?php
        // Check which page to show
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        
        if ($page === 'home') {
            include 'home.php';
        } elseif ($page === 'tools') {
            include 'tools.php';
        } elseif ($page === 'tool') {
            include 'tool.php';
        } elseif ($page === 'contact') {
            include 'contact.php';
        } else {
            include 'home.php';
        }
        ?>
    </main>

    <!-- Footer -->
    <footer class="bg-light border-top mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">ToolHub</h5>
                    <p>All your favorite tools in one place. Simple, free, and easy to use.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-decoration-none">Home</a></li>
                        <li><a href="tools.php" class="text-decoration-none">All Tools</a></li>
                        <li><a href="contact.php" class="text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Popular Tools</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php?page=tool&id=pdf-to-word" class="text-decoration-none">PDF to Word</a></li>
                        <li><a href="index.php?page=tool&id=background-remover" class="text-decoration-none">Background Remover</a></li>
                        <li><a href="index.php?page=tool&id=ai-writer" class="text-decoration-none">AI Writer</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Connect With Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center pt-4 border-top">
                <p class="text-muted">&copy; <?php echo date('Y'); ?> ToolHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Notification -->
    <div id="notification" class="notification"></div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Show notification
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.style.display = 'block';
            
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }
        
        // File upload handling
        document.querySelectorAll('.file-upload-input').forEach(input => {
            input.addEventListener('change', function(e) {
                const fileName = this.files[0]?.name || 'No file selected';
                this.closest('.file-upload').querySelector('.file-name').textContent = fileName;
                
                // Enable process button
                if (this.files[0]) {
                    document.querySelector('.process-btn').disabled = false;
                }
            });
        });
        
        // Process button handling
        document.querySelectorAll('.process-btn').forEach(button => {
            button.addEventListener('click', function() {
                const progressBar = this.closest('.tool-container').querySelector('.progress-bar');
                const progress = this.closest('.tool-container').querySelector('.progress');
                
                this.disabled = true;
                progressBar.style.display = 'block';
                
                // Simulate processing
                let progressValue = 0;
                const interval = setInterval(() => {
                    progressValue += 5;
                    progress.style.width = `${progressValue}%`;
                    
                    if (progressValue >= 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                            const resultContainer = this.closest('.tool-container').querySelector('.result-container');
                            resultContainer.style.display = 'block';
                            showNotification('Processing complete!', 'success');
                        }, 500);
                    }
                }, 200);
            });
        });
    </script>
</body>
</html>