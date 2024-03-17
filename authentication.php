<?php



class TwoFactorAuthentication {
 
    public function authenticate($username, $password, $otp) {

        if ($username === "usuario" && $password === "contraseña") {

            if ($otp === "123456") {
                return true;
            } else {
                return false; 
            }
        } else {
            return false; 
        }
    }
    

    public function updateDocumentation($changes) {

        echo "Documentación actualizada con los siguientes cambios: " . $changes;
    }
}


$auth = new TwoFactorAuthentication();
$isAuthenticated = $auth->authenticate("usuario", "contraseña", "123456");


if ($isAuthenticated) {
    echo "Autenticación exitosa. Usuario autenticado.";
} else {
    echo "Autenticación fallida. Usuario no autenticado.";
}


$auth->updateDocumentation("Se agregaron instrucciones adicionales para la autenticación de dos factores.");
?>

