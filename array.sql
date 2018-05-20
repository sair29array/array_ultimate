-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2018 a las 05:36:00
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `array`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso_admin_controller`
--

CREATE TABLE `acceso_admin_controller` (
  `id_acceso` int(11) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `user_admin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin_user`
--

INSERT INTO `admin_user` (`id`, `email`, `pass`) VALUES
(2, 'admin@admin', 'admin'),
(3, 'secretary@adminarray', '123456'),
(4, 'sairsanchez@array.com.co', '981129');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos_servicios_users`
--

CREATE TABLE `contratos_servicios_users` (
  `id_solicitud` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `servicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_plan_escojido` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_plan` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `facturacion_a_empresa` int(11) NOT NULL,
  `total_cobrar` int(11) NOT NULL,
  `cuota_plazo` int(11) NOT NULL,
  `valor_por_cuota` int(11) NOT NULL,
  `dia_defacturacion` int(11) NOT NULL,
  `fecha_finalizacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_unica_pago` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `total_pagado` int(11) NOT NULL,
  `deuda_pendiente` int(11) NOT NULL,
  `contrato_activo` int(11) NOT NULL,
  `fecha_activacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo_y_cancelado` int(11) NOT NULL,
  `tener_en_cuenta` varchar(10000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contratos_servicios_users`
--

INSERT INTO `contratos_servicios_users` (`id_solicitud`, `id_usuario`, `servicio`, `id_plan_escojido`, `nombre_plan`, `facturacion_a_empresa`, `total_cobrar`, `cuota_plazo`, `valor_por_cuota`, `dia_defacturacion`, `fecha_finalizacion`, `fecha_unica_pago`, `total_pagado`, `deuda_pendiente`, `contrato_activo`, `fecha_activacion`, `activo_y_cancelado`, `tener_en_cuenta`) VALUES
(1, 1, 'radio_online_streaming_hd', '2', 'Medium', 0, 499990, 0, 0, 0, '', '2018-05-03', 0, 0, 1, '03-05-2018', 0, 'ok\r\n                                            '),
(2, 1, 'radio_online_streaming_hd', '2', 'Medium', 0, 499999, 4, 124999, 4, '2018-09-04', '', 0, 0, 1, '04-05-2018', 0, 'ok ok\r\n                                            '),
(3, 1, 'diseÃ±o_grafico_corporativo', '[][][][][][][][][8][][][][][][][1]', 'no se que no se que', 0, 159999, 0, 0, 0, '', '2018-05-04', 0, 0, 1, '04-05-2018', 0, 'ok ok ok\r\n                                            '),
(4, 1, 'software_multiproposito', '3', 'Premium', 0, 999999, 0, 0, 0, '', '2018-05-05', 0, 0, 1, '05-05-2018', 0, 'ok\r\n                                            ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno_grafico_corporativo`
--

CREATE TABLE `diseno_grafico_corporativo` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno_paginas_web`
--

CREATE TABLE `diseno_paginas_web` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diseno_paginas_web`
--

INSERT INTO `diseno_paginas_web` (`id_planes`, `planes`, `precio`, `cotizacion`, `cuota_inicial`) VALUES
(1, 'basico', 599999, 0, 599999),
(2, 'medium', 1199990, 1, 599999),
(3, 'premium', 1599990, 1, 799990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto_estudio_y_realizacion_aud_visual`
--

CREATE TABLE `foto_estudio_y_realizacion_aud_visual` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(190) NOT NULL,
  `precio` int(11) NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento_soporte_tecnico`
--

CREATE TABLE `mantenimiento_soporte_tecnico` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento_y_soporte`
--

CREATE TABLE `mantenimiento_y_soporte` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(190) NOT NULL,
  `precio` int(11) NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_o_tareas_admin`
--

CREATE TABLE `notas_o_tareas_admin` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `nota_o_tarea` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producion_comerciales_r_t_i`
--

CREATE TABLE `producion_comerciales_r_t_i` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(190) NOT NULL,
  `precio` int(11) NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_descuentos`
--

CREATE TABLE `puntos_descuentos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `aplica` varchar(60) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `fecha_fin_descuento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radio_online_streaming_hd`
--

CREATE TABLE `radio_online_streaming_hd` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(53) NOT NULL,
  `precio` double NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `radio_online_streaming_hd`
--

INSERT INTO `radio_online_streaming_hd` (`id_planes`, `planes`, `precio`, `cotizacion`, `cuota_inicial`) VALUES
(1, 'basico', 299990, 0, 299990),
(2, 'medium', 499990, 0, 499990),
(3, 'premium', 699990, 1, 349990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software_multiproposito`
--

CREATE TABLE `software_multiproposito` (
  `id_planes` int(11) NOT NULL,
  `planes` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `cotizacion` int(11) NOT NULL,
  `cuota_inicial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `software_multiproposito`
--

INSERT INTO `software_multiproposito` (`id_planes`, `planes`, `precio`, `cotizacion`, `cuota_inicial`) VALUES
(1, 'basico', 999999, 1, 249999),
(2, 'medium', 999999, 1, 249999),
(3, 'premium', 999999, 1, 249999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_recibos_de_pago_servicios`
--

CREATE TABLE `user_recibos_de_pago_servicios` (
  `id` int(11) NOT NULL,
  `id_contrato_activo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `tipo_factura` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `fecha_limite_de_pago` varchar(90) NOT NULL,
  `dias_de_atraso_mora` int(11) NOT NULL,
  `valor_a_pagar_por_mora` int(11) NOT NULL,
  `factura_pagada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `departamento_ciudad` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nit_empresa` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `dealta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso_admin_controller`
--
ALTER TABLE `acceso_admin_controller`
  ADD PRIMARY KEY (`id_acceso`);

--
-- Indices de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contratos_servicios_users`
--
ALTER TABLE `contratos_servicios_users`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `diseno_grafico_corporativo`
--
ALTER TABLE `diseno_grafico_corporativo`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `diseno_paginas_web`
--
ALTER TABLE `diseno_paginas_web`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `foto_estudio_y_realizacion_aud_visual`
--
ALTER TABLE `foto_estudio_y_realizacion_aud_visual`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `mantenimiento_soporte_tecnico`
--
ALTER TABLE `mantenimiento_soporte_tecnico`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `mantenimiento_y_soporte`
--
ALTER TABLE `mantenimiento_y_soporte`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `notas_o_tareas_admin`
--
ALTER TABLE `notas_o_tareas_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producion_comerciales_r_t_i`
--
ALTER TABLE `producion_comerciales_r_t_i`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `puntos_descuentos`
--
ALTER TABLE `puntos_descuentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `radio_online_streaming_hd`
--
ALTER TABLE `radio_online_streaming_hd`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `software_multiproposito`
--
ALTER TABLE `software_multiproposito`
  ADD PRIMARY KEY (`id_planes`);

--
-- Indices de la tabla `user_recibos_de_pago_servicios`
--
ALTER TABLE `user_recibos_de_pago_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso_admin_controller`
--
ALTER TABLE `acceso_admin_controller`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contratos_servicios_users`
--
ALTER TABLE `contratos_servicios_users`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `diseno_grafico_corporativo`
--
ALTER TABLE `diseno_grafico_corporativo`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diseno_paginas_web`
--
ALTER TABLE `diseno_paginas_web`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `foto_estudio_y_realizacion_aud_visual`
--
ALTER TABLE `foto_estudio_y_realizacion_aud_visual`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimiento_soporte_tecnico`
--
ALTER TABLE `mantenimiento_soporte_tecnico`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimiento_y_soporte`
--
ALTER TABLE `mantenimiento_y_soporte`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas_o_tareas_admin`
--
ALTER TABLE `notas_o_tareas_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producion_comerciales_r_t_i`
--
ALTER TABLE `producion_comerciales_r_t_i`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puntos_descuentos`
--
ALTER TABLE `puntos_descuentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `radio_online_streaming_hd`
--
ALTER TABLE `radio_online_streaming_hd`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `software_multiproposito`
--
ALTER TABLE `software_multiproposito`
  MODIFY `id_planes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_recibos_de_pago_servicios`
--
ALTER TABLE `user_recibos_de_pago_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
