<?php

namespace App\Models;

use App\Helpers\Str;
use Exception;

//erstellt ein Array mit extentions currentLocation und generatedName

class FileStorage {
    private array $file;
    private string $extension;
    private string $currentLocation;
    private string $generatedName;

    //legt das Bild im TmpOrdner ab und benennt es um in token und Dateiendung
    public function __construct(array $file)
    {
        $this->file = $file;
        $this->extension = strtolower(pathinfo($this->file['name'], PATHINFO_EXTENSION));
        $this->currentLocation = $this->file['tmp_name'];
        $this->generatedName = Str::token() . '.' . $this->extension;
    }   

    //gibt den erstellten Namen zurück als String

    public function getGeneratedName(): string
    {
        return $this->generatedName;
    }
    //speichert das Bild im ImagesOrdner oder gibt eine Fehlermeldung raus 
    public function saveIn(string $folder): void
    {
        $destination = "{$folder}/{$this->generatedName}";

        if (!move_uploaded_file($this->currentLocation, $destination)) {
            throw new Exception('We encountered an error uploading the file.');
        }
    }
    
    public static function delete(string $path): bool
    {
        return unlink(ltrim($path, DIRECTORY_SEPARATOR));
    }
}
