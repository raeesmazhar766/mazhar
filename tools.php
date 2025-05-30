<section class="py-5">
    <div class="container">
        <h1 class="mb-4">All Tools</h1>
        
        <div class="row g-4">
            <?php
            // In a real app, you would fetch these from a database
            $tools = [
                [
                    'id' => 'pdf-to-word',
                    'name' => 'PDF to Word',
                    'icon' => 'file-pdf',
                    'icon_class' => 'icon-pdf',
                    'description' => 'Convert your PDF files to editable Word documents easily.'
                ],
                [
                    'id' => 'background-remover',
                    'name' => 'Background Remover',
                    'icon' => 'image',
                    'icon_class' => 'icon-image',
                    'description' => 'Automatically remove the background from any image.'
                ],
                // Add more tools...
            ];
            
            foreach ($tools as $tool) {
                echo '
                <div class="col-md-4">
                    <div class="tool-card">
                        <i class="fas fa-' . $tool['icon'] . ' ' . $tool['icon_class'] . ' fa-3x mb-3"></i>
                        <h3>' . $tool['name'] . '</h3>
                        <p>' . $tool['description'] . '</p>
                        <a href="index.php?page=tool&id=' . $tool['id'] . '" class="btn btn-primary mt-3">Use Tool</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>