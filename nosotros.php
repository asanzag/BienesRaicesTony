<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

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
        </div>

    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui eius voluptatem provident, veritatis veniam libero nulla possimus fugit aspernatur aliquam, inventore fugiat dignissimos commodi laborum eaque nihil, consectetur eveniet odio.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui eius voluptatem provident, veritatis veniam libero nulla possimus fugit aspernatur aliquam, inventore fugiat dignissimos commodi laborum eaque nihil, consectetur eveniet odio.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui eius voluptatem provident, veritatis veniam libero nulla possimus fugit aspernatur aliquam, inventore fugiat dignissimos commodi laborum eaque nihil, consectetur eveniet odio.
                </p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer'); 
?>