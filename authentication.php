<?php
// Archivo: authentication.php

// Clase para la autenticación de dos factores
class TwoFactorAuthentication {
    // Método para autenticar al usuario
    public function authenticate($username, $password, $otp) {
        // Verificar si el usuario y la contraseña son correctos
        if ($username === "usuario" && $password === "contraseña") {
            // Verificar si el código OTP es correcto
            if ($otp === "123456") {
                return true; // Autenticación exitosa
            } else {
                return false; // Código OTP incorrecto
            }
        } else {
            return false; // Credenciales incorrectas
        }
    }
}

// Ejemplo de uso de la autenticación de dos factores
$auth = new TwoFactorAuthentication();
$isAuthenticated = $auth->authenticate("usuario", "contraseña", "123456");

// Mostrar el resultado de la autenticación
if ($isAuthenticated) {
    echo "Autenticación exitosa. Usuario autenticado.";
} else {
    echo "Autenticación fallida. Usuario no autenticado.";
}
?>
