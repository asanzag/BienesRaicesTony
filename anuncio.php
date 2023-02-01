<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">€3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

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