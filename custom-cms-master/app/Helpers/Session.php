<?php

namespace App\Helpers;

// Erstellt eine Session um einen nutzer zu Identifizieren
class Session {

    // Pfüft ob eine Session bereits existiert
    public static function exists(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    //holt die die Session aus dem superglobalen Array falls sie existiert
    public static function get(string $key): mixed
    {
        if (self::exists($key)) {
            return $_SESSION[$key];
        }

        return null;
    }

    //erstellt und speichert einen String im superglobalen Array Session 
    public static function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }
    
    //löscht einen String aus dem superglobalen Array Session 
    public static function delete(string $key): void
    {
        unset($_SESSION[$key]);
    }

    // Sets a session once, deletes it again when looked up next
    public static function flash(string $key, string $message = null): ?string
    {
        if (self::exists($key)) {
            $message = self::get($key);
            self::delete($key);

            return $message;
        }

        self::set($key, $message);
        return null;
    }
}
