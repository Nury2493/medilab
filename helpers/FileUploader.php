<?php

namespace helpers;

class FileUploader
{
    private static $instance = null;
    protected $targetDir;
    protected $allowedTypes;
    protected $maxFileSize;

    // Constructor privado para evitar la creación de instancias directas
    private function __construct($targetDir = "files/", $allowedTypes = ['application/pdf'], $maxFileSize = 5 * 1024 * 1024)
    {
        $this->targetDir = $targetDir;
        $this->allowedTypes = $allowedTypes;
        $this->maxFileSize = $maxFileSize;
    }

    // Método estático para obtener la instancia única de la clase
    public static function getInstance($targetDir = "files/", $allowedTypes = ['application/pdf'], $maxFileSize = 5 * 1024 * 1024)
    {
        if (self::$instance == null) {
            self::$instance = new self($targetDir, $allowedTypes, $maxFileSize);
        }
        return self::$instance;
    }

    public function upload($file)
    {

        // Ensure target directory exists
        if (!is_dir($this->targetDir)) {
            if (!mkdir($concurrentDirectory = $this->targetDir, 0777, true) && !is_dir($concurrentDirectory)) {
                throw new \Exception(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }

        // Generate unique file name
        $targetFile = $this->targetDir . uniqid() . "-" . basename($file["name"]);

        // Move uploaded file to target directory
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile;
        } else {
            throw new \Exception("Failed to move uploaded file.");
        }
    }
}
