<div class="contenedor-principal-login">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Iniciar sesion</span>
                <form id="formulario-login">
                    <div class="input-field">
                        <input type="email" name="email-login" placeholder="Ingresa tu email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="clave-login" class="password" placeholder="Ingresa tu contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <input type="hidden" id="recuerdame" name="recuerdame" value="0">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" name="recuerdame" onchange="updateRecuerdame()">
                            <label for="logCheck" class="text">Recuérdame</label>
                        </div>


                        <a href="#" class="text olvidaste_clave">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Iniciar sesion">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">¿Aún no tienes cuenta?
                        <a href="#" class="text signup-link">Registrarse Ahora</a>
                    </span>
                </div>
            </div>
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registrarse</span>
                <form id="formulario-register">
                    <form id="formulario-register">
                        <div class="input-field">
                            <input type="text" name="nombre" placeholder="Ingresa tu nombre" pattern="[\p{L} ]+" title="Solo letras y espacios permitidos" maxlength="15" required>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email-register" placeholder="Ingresa tu email" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="clave-register" class="password" placeholder="Crear contraseña" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$" title="La contraseña debe tener al menos 8 caracteres, incluyendo mayúsculas, minúsculas, números y caracteres especiales." required>
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="confirmarClave" class="password" placeholder="Confirmar contraseña" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon">
                                <label for="termCon" class="text">Acepto todos los términos y condiciones</label>
                            </div>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Registrarse">
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">¿Ya tienes una cuenta?
                            <a href="#" class="text login-link">Ingresa Ahora</a>
                        </span>
                    </div>
            </div>
        </div>
    </div>
</div>