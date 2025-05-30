<?php
$toolId = $_GET['id'] ?? '';

// In a real app, you would fetch this from a database
$tools = [
    'pdf-to-word' => [
        'name' => 'PDF to Word',
        'description' => 'Convert your PDF files to editable Word documents easily.',
        'icon' => 'file-pdf',
        'icon_class' => 'icon-pdf'
    ],
    'background-remover' => [
        'name' => 'Background Remover',
        'description' => 'Automatically remove the background from any image.',
        'icon' => 'image',
        'icon_class' => 'icon-image'
    ],
    // Add more tools...
];

$tool = $tools[$toolId] ?? null;

if (!$tool) {
    header("Location: index.php?page=tools");
    exit;
}
?>

<section class="py-5">
    <div class="container">
        <a href="index.php?page=tools" class="btn btn-outline-primary mb-4">
            <i class="fas fa-arrow-left me-2"></i>Back to Tools
        </a>
        
        <div class="card shadow-sm">
            <div class="card-body tool-container">
                <h2 class="card-title mb-4">
                    <i class="fas fa-<?= $tool['icon'] ?> <?= $tool['icon_class'] ?> me-2"></i>
                    <?= $tool['name'] ?>
                </h2>
                <p class="card-text mb-4"><?= $tool['description'] ?></p>
                
                <?php if ($toolId === 'pdf-to-word'): ?>
                    <!-- PDF to Word Tool Interface -->
                    <div class="text-center">
                        <div class="file-upload mb-4">
                            <label for="pdf-upload" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                <p class="fw-bold">Click to upload PDF file</p>
                                <p class="file-name text-muted">No file selected</p>
                            </label>
                            <input type="file" id="pdf-upload" class="file-upload-input d-none" accept=".pdf">
                        </div>
                        
                        <button class="process-btn btn btn-primary btn-lg" disabled>
                            Convert to Word
                        </button>
                        
                        <div class="progress-bar mt-4">
                            <div class="progress"></div>
                        </div>
                        
                        <div class="result-container mt-4 p-4 bg-success text-white rounded d-none">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-check-circle fa-2x me-2"></i>
                                <h4 class="mb-0">Conversion complete!</h4>
                            </div>
                            <button class="download-btn btn btn-light">
                                <i class="fas fa-download me-2"></i>Download Word File
                            </button>
                        </div>
                    </div>
                
                <?php elseif ($toolId === 'background-remover'): ?>
                    <!-- Background Remover Tool Interface -->
                    <div class="text-center">
                        <div class="file-upload mb-4">
                            <label for="image-upload" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                <p class="fw-bold">Click to upload image</p>
                                <p class="file-name text-muted">No file selected</p>
                            </label>
                            <input type="file" id="image-upload" class="file-upload-input d-none" accept="image/*">
                        </div>
                        
                        <div id="image-preview" class="mb-4 d-none">
                            <img src="#" class="img-fluid rounded" style="max-height: 300px;">
                        </div>
                        
                        <button class="process-btn btn btn-primary btn-lg" disabled>
                            Remove Background
                        </button>
                        
                        <div class="progress-bar mt-4">
                            <div class="progress"></div>
                        </div>
                        
                        <div class="result-container mt-4 p-4 bg-success text-white rounded d-none">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-check-circle fa-2x me-2"></i>
                                <h4 class="mb-0">Background removed!</h4>
                            </div>
                            <img src="#" class="img-fluid rounded mb-3" style="max-height: 300px;">
                            <button class="download-btn btn btn-light">
                                <i class="fas fa-download me-2"></i>Download Image
                            </button>
                        </div>
                    </div>
                
                <?php else: ?>
                    <!-- Default Coming Soon Message -->
                    <div class="text-center py-5">
                        <i class="fas fa-<?= $tool['icon'] ?> <?= $tool['icon_class'] ?> fa-5x mb-4"></i>
                        <h3>This tool is coming soon!</h3>
                        <p class="text-muted">We're working hard to bring you this tool as soon as possible.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>