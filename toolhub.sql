-- Create the database
CREATE DATABASE IF NOT EXISTS `toolhub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `toolhub`;

-- Table structure for `tools`
CREATE TABLE `tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `icon_color` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `seo_title` varchar(100) DEFAULT NULL,
  `seo_description` varchar(200) DEFAULT NULL,
  `seo_keywords` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for `tools`
INSERT INTO `tools` (`id`, `name`, `slug`, `icon`, `icon_color`, `description`, `category`, `seo_title`, `seo_description`, `seo_keywords`) VALUES
(1, 'PDF to Word', 'pdf-to-word', 'file-pdf', 'text-danger', 'Convert your PDF files to editable Word documents easily.', 'document', 'Free PDF to Word Converter Online | ToolHub', 'Convert PDF to editable Word documents instantly with our free online tool. No registration required.', 'pdf to word, convert pdf, pdf converter, free online tool'),
(2, 'Background Remover', 'background-remover', 'image', 'text-success', 'Automatically remove the background from any image.', 'image', 'Remove Background from Images Online - Free Tool', 'Remove image backgrounds automatically with our free online tool. No skills required!', 'background remover, remove bg, image editor, transparent background'),
(3, 'JPG to PDF', 'jpg-to-pdf', 'file-image', 'text-primary', 'Combine multiple JPG images into a single PDF file.', 'document', 'Convert JPG to PDF Online - Free Image to PDF Converter', 'Easily convert JPG images to PDF documents with our free online converter.', 'jpg to pdf, image to pdf, convert jpg, photo to pdf'),
(4, 'AI Writer', 'ai-writer', 'pen-nib', 'text-purple', 'Generate paragraphs, blog posts, and ideas with AI.', 'text', 'Free AI Writer Tool - Generate Content Online', 'Create high-quality content instantly with our free AI writing assistant.', 'ai writer, content generator, text generator, blog post writer'),
(5, 'Video Trimmer', 'video-trimmer', 'cut', 'text-warning', 'Cut and trim your video files without losing quality.', 'video', 'Online Video Trimmer - Cut Videos for Free', 'Trim and cut video files online without quality loss. No software needed!', 'video trimmer, cut video, video editor, online video cutter'),
(6, 'File Compressor', 'file-compressor', 'file-zipper', 'text-info', 'Compress large files to save space and for easy sharing.', 'file', 'File Compressor - Reduce File Size Online for Free', 'Compress files online to reduce their size while maintaining quality.', 'file compressor, reduce file size, zip files, online compression');

-- Table structure for `contacts`
CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for `conversions` (for tracking file conversions)
CREATE TABLE `conversions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tool_id` int(11) NOT NULL,
  `original_filename` varchar(255) NOT NULL,
  `converted_filename` varchar(255) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `tool_id` (`tool_id`),
  CONSTRAINT `conversions_ibfk_1` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;