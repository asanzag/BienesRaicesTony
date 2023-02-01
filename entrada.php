<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

            <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti facere quibusdam ratione incidunt
                neque velit animi illum, voluptatum perferendis quod sapiente, autem necessitatibus quisquam
                asperiores molestias recusandae accusantium? Placeat, obcaecati? Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Enim, dicta doloremque. Voluptatum totam ipsa, exercitationem aperiam
                animi similique, dolor, sint natus nostrum cum dolorem qui distinctio velit? Asperiores, esse atque.
            </p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic id explicabo error cum aliquid saepe
                minus dolore asperiores itaque, rerum assumenda nisi corporis odit obcaecati deleniti neque eum
                nulla veniam!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer'); 
?>