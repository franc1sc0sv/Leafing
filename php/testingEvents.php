<?php

include_once('conexion.php');

$objconexion = new conection();
$objconexion->ejecutar("INSERT INTO `events` (`id_events`, `name_event`, `img_event`, `description_event`, `requirements_event`, `place_event`, `date_event`, `id_categories_events`, `id_user-data`, `id_state-events`) VALUES (NULL, 'Clases de Fisica con señ Cindy GOD', 'img.jpg', 'Lorem ipsum dolor sit amet consectetur adipiscing elit tempor montes, pharetra litora nascetur venenatis etiam sapien a duis, vitae lacus rhoncus semper sagittis erat class penatibus. Tellus inceptos nec rutrum conubia etiam convallis felis, ante habitasse volutpat dictumst torquent maecenas sem lacus, arcu ut ultrices aliquet eu tempor. Hendrerit et semper vel commodo platea tristique gravida egestas, aptent curae vitae mollis sociis viverra leo curabitur eu, sollicitudin torquent vivamus fermentum praesent libero sapien.\r\n\r\n', 'SI\r\nSI\r\nSI\r\n', 'Soyapango', '2022-07-31', '2', '6', '1');");

?>