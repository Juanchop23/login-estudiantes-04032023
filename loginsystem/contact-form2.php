<?php

 include './includes/header.php';

?>



<div class="container work-container">
        <h3>Trabaja con nosotros o contáctanos</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Nombres</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Número de contacto</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Descripción del motivo de contacto</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary mt-2" type="submit">Enviar</button>
                <button class="btn btn-danger mt-2" type="reset">Formatear</button>
            </div>
        </form>
</div>



<?php

 include './includes/footer.php';

?>