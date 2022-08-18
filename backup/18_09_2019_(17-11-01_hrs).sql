SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS vitrumhn;

USE vitrumhn;

DROP TABLE IF EXISTS clientes;

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `telefono_cliente` varchar(15) DEFAULT NULL,
  `direccion_instalacion` varchar(50) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_empleado_registro` int(11) DEFAULT NULL,
  `codigo_pedido` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `id_empleado_registro` (`id_empleado_registro`),
  KEY `codigo_pedido` (`codigo_pedido`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_empleado_registro`) REFERENCES `empleados` (`id_empleado`),
  CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`codigo_pedido`) REFERENCES `pedidos` (`codigo_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO clientes VALUES("1","Jarod Manrrique","Espinal Sanchez","98123819","Col. La Esperanza","2019-09-18 16:25:57","1","8QW5H");
INSERT INTO clientes VALUES("2","Juan Antonio","Perez","98123193","Col. Carrizal","2019-09-18 16:25:57","2","8QW5H");
INSERT INTO clientes VALUES("3","Carlos Alberto","Morazan Lopez","98216317","Col. La Esperanza","2019-09-18 16:25:57","3","8QW5H");
INSERT INTO clientes VALUES("4","Xiomara Yamileth","Fernandez Ramirez","98127732","Col. Camosa","2019-09-18 16:25:57","2","8QW5H");



DROP TABLE IF EXISTS datos_empresa;

CREATE TABLE `datos_empresa` (
  `nombre_empresa` varchar(40) NOT NULL,
  `informacion_empresa` varchar(200) NOT NULL,
  `mision` varchar(200) NOT NULL,
  `vision` varchar(200) NOT NULL,
  `telefono1` varchar(15) NOT NULL,
  `telefono2` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo_electronico` varchar(35) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `logo2` varchar(50) DEFAULT NULL,
  `fondo` varchar(50) DEFAULT NULL,
  `fondo2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS empleados;

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `correo_elec` varchar(35) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `numero_identidad` varchar(15) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO empleados VALUES("1","Lester","Alejandro","Vasquez","Colindres","alevasquez841@gmail.com","32867346","0604199700178","Col. Brisas Del Valle","2019-09-18 16:25:57","1");
INSERT INTO empleados VALUES("2","Melvin","Alexander","Alberto","Romero","melxander27@hotmail.es","88667725","0801199206829","Col.Torocagua","2019-09-18 16:25:57","1");
INSERT INTO empleados VALUES("3","Kevin","Francisco","Rodriguez","Maradiaga","rodriguezkevin973@gmail.com","97803860","0801199603613","Col. Las Uvas","2019-09-18 16:25:57","1");
INSERT INTO empleados VALUES("4","Gabriel","Eduardo","Obando","Barahona","geobjaja@hotmail.com","96333560","0801199902356","Col.Loma Linda","2019-09-18 16:37:55","2");



DROP TABLE IF EXISTS estado;

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO estado VALUES("1","Actualizar Contraseña");
INSERT INTO estado VALUES("2","Usuario Activo");
INSERT INTO estado VALUES("3","Usuario Inactivo");



DROP TABLE IF EXISTS log;

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_cambio` varchar(50) NOT NULL,
  `tabla_cambio` varchar(30) NOT NULL,
  `campo_cambio` varchar(30) NOT NULL,
  `cambio_realizado` varchar(100) NOT NULL,
  `dato_anterior` varchar(100) NOT NULL,
  `fecha_cambio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_log`),
  KEY `id_empleado` (`id_empleado`),
  CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS materiales;

CREATE TABLE `materiales` (
  `codigo_material` varchar(5) NOT NULL,
  `descripcion_material` varchar(30) NOT NULL,
  `tipo_material` varchar(20) NOT NULL,
  `precio_blanco_negro` float DEFAULT NULL,
  `precio_madera` float DEFAULT NULL,
  `precio_estandar` float DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `codigo_producto` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`codigo_material`),
  KEY `codigo_producto` (`codigo_producto`),
  CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO materiales VALUES("VAE02","Umbral C/M","Todos","259.84","349.98","245.38","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE03","Cabezal Umbral y Hoja","Todos","254.09","329.38","223.56","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE04","Jamba Hoja","Todos","195.03","262.21","179.94","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE05","Jamba llavin Economico","Todos","286.82","336.97","247.56","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE06","Cuadricula","Todos","0","0","0","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE07","Llavin de Impacto","Todos","50","50","50","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE08","Rodos P/Ventana","Todos","11","11","11","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE09","Fleje","Todos","77.15","77.15","77.15","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE10","Escuadras","Todos","11.5","11.5","11.5","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VAE11","Felpa","Todos","6.91","6.91","6.91","2019-09-18 16:25:57","VAB01");
INSERT INTO materiales VALUES("VCP02","Umbral Contra Marco con Canal","Todos","482.49","556.88","456.39","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP03","Jamba Contra Marco","Todos","688.45","807.85","640.35","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP04","Umbral Hoja","Todos","423.84","528.31","413.05","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP05","Jamba Chapa","Todos","543.72","629.61","506.68","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP06","Jamba Traslape","todos","510.29","596.41","483.35","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP07","Silicone","Todos","70","70","70","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP08","Llavines Para Puerta o Ventana","Todos","55","55","55","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP09","Rodos Para Ventana","Todos","30","30","30","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP10","Moldura P Maya Usa","Todos","752","752","752","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP11","Rodo P Maya de Resorte","Todos","27","27","27","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VCP12","Guias","Todos","3","3","3","2019-09-18 16:25:57","VPB01");
INSERT INTO materiales VALUES("VVC01","Contramarco pvc","Blanco y Madera","318","783.54","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC02","Refuerzo de Hierro","Blanco y Madera","190","190","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC03","Hoja Para Ventana","Blanco y Madera","195","499.84","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC05","Batiente Upvc","Blanco y Madera","53.25","221.58","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC06","Traslape Upvc","Blanco y Madera","62.72","182.37","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC07","Cerradura Auto Trancable","Blanco y Madera","56","56","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC08","Manecilla Para Puerta","Blanco y Madera","120.57","120.57","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC09","Cremona","Blanco y Madera","113.55","113.55","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC10","Marco para Malla Upvc","Blanco y Madera","136","317.47","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC11","Rompeviento","Blanco y Madera","8","8","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC12","Rodo de Acero Doble","Blanco y Madera","19","19","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC13","Riel de Aluminio","Blanco y Madera","77","77","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC14","Rodo de Malla Corrediza","Blanco y Madera","6","6","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC15","Contramarco Fijo 80","Blanco y Madera","296.64","641.7","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC16","Contramarco Fijo 60","Blanco y Madera","260.29","672.29","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC17","Vidrio 3.30*2.14","Transparente","1585","1585","1585","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC18","Vinil","Blanco y Madera","6.91","6.91","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC19","Felpa","Blanco y Madera","11","11","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC20","Masilla","Blanco y Madera","45","45","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVC21","tela","Blanco y Madera","11.58","11.58","0","2019-09-18 16:25:57","VCP01");
INSERT INTO materiales VALUES("VVP04","Hoja Para Puerta","Blanco y Madera","262.19","648.45","0","2019-09-18 16:25:57","VCP01");



DROP TABLE IF EXISTS pedidos;

CREATE TABLE `pedidos` (
  `codigo_pedido` varchar(5) NOT NULL,
  `direccion_instalacion` varchar(100) NOT NULL,
  `cantidad_pedido` int(11) NOT NULL,
  `total` float NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `codigo_producto` varchar(5) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_pedido`),
  KEY `fk_codigo_producto` (`codigo_producto`),
  KEY `fk_id_empleado` (`id_empleado`),
  CONSTRAINT `fk_codigo_producto` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_productos`),
  CONSTRAINT `fk_id_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO pedidos VALUES("3F23F","Col.Brisas","2","23243","2019-09-18 16:25:57","VCP01","2");
INSERT INTO pedidos VALUES("5GD34","Col.La Esperanza","4","2345","2019-09-18 16:25:57","VPN03","1");
INSERT INTO pedidos VALUES("74FT6","Col.Los Almendros","23243","1","2019-09-18 16:25:57","VAN02","3");
INSERT INTO pedidos VALUES("8QW5H","Col.Carrizal","2","2325","2019-09-18 16:25:57","VAM03","2");



DROP TABLE IF EXISTS permisos;

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_permiso` varchar(10) NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS presupuestos;

CREATE TABLE `presupuestos` (
  `cod_presupuesto` varchar(5) NOT NULL,
  `precio_uni` varchar(10) DEFAULT NULL,
  `presupuesto_externo` varchar(10) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_empleado` int(11) DEFAULT NULL,
  `codigo_producto` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`cod_presupuesto`),
  KEY `id_empleado` (`id_empleado`),
  KEY `codigo_producto` (`codigo_producto`),
  CONSTRAINT `presupuestos_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`),
  CONSTRAINT `presupuestos_ibfk_2` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO presupuestos VALUES("9AS9D","1269.93","2100","2019-09-18 16:25:57","2","VAM03");
INSERT INTO presupuestos VALUES("A8A92","1142.75","2000","2019-09-18 16:25:57","3","VAB01");
INSERT INTO presupuestos VALUES("CBA21","3110.40","4000","2019-09-18 16:25:57","1","VPN03");



DROP TABLE IF EXISTS productos;

CREATE TABLE `productos` (
  `codigo_productos` varchar(5) NOT NULL,
  `nombre_producto` varchar(40) DEFAULT NULL,
  `imagen_producto` varchar(100) DEFAULT NULL,
  `precio_producto` float DEFAULT NULL,
  `formato_img_producto` varchar(5) DEFAULT NULL,
  `descripcion_producto` varchar(200) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codigo_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO productos VALUES("PAP01","Puerta Aluminio Pesada Blanco O Negro","../imagenes/direccion_productos/puerta_aluminio_pesada_blanco_negro.jpg","3402.89","jpg","Puerta de aluminio de tipo pesada de color blanco o negro","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VAB01","Ventana Aluminio Económico Blanco/Negro","../imagenes/direccion_productos/ventana_aluminio_economica_blanco_negro.jpg","1142.75","jpg","Ventana de aluminio de económico color blanco o negro","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VAM03","Ventana Aluminio Económico Madera","../imagenes/direccion_productos/ventana_aluminio_economica_madera.jpg","1269.93","jpg","Ventana de aluminio de económico color madera","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VAN02","Ventana Aluminio Económico Natural","../imagenes/direccion_productos/ventana_aluminio_economica_natural.jpg","1098.77","jpg","Ventana de aluminio de económico color natural","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VCB02","Ventana Corrediza PVC Blanco/Negro","../imagenes/direccion_productos/ventana_corrediza_pvc_blanco_negro.jpg","2476.81","jpg","Ventana corrediza color de color blanco y negro","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VCP01","Ventana Corrediza PVC Europea","../imagenes/direccion_productos/ventana_corrediza_pvc_auropea.jpg","3956.58","jpg","Ventana corrediza color de tipo europeo color madera","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VPB01","Ventana Aluminio Pesada Blanco/Negro","../imagenes/direccion_productos/ventana_aluminio_pesada_blanco_negro.jpg","3146.86","jpg","Ventana de aluminio de tipo pesada de color blanco o negro","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VPM02","Ventana Aluminio Pesada Madera","../imagenes/direccion_productos/ventana_aluminio_pesada_madera.jpg","3269.87","jpg","Ventana de aluminio de tipo pesada de color madera.","2019-09-18 16:25:57");
INSERT INTO productos VALUES("VPN03","Ventana Aluminio Pesada Natural","../imagenes/direccion_productos/ventana_aluminio_pesada_natural.jpg","3110.4","jpg","Ventana de aluminio de tipo pesada de color madera.","2019-09-18 16:25:57");



DROP TABLE IF EXISTS proveedores;

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(50) NOT NULL,
  `descripcion_proveedor` varchar(100) NOT NULL,
  `telefono_proveedor` varchar(15) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion_proveedor` varchar(70) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO proveedores VALUES("1","Vidrios OIM","Proveedor principal de vidrios","88342377","oimvidrios@gmail.com","Villas Del Sol","2019-09-18 16:25:57");
INSERT INTO proveedores VALUES("2","Canaletas Rodriguez","Proveedor de Lances","22219232","Rodriguezcan@hotmail.es","Centro Comercial La Norteña","2019-09-18 16:25:57");
INSERT INTO proveedores VALUES("3","Mallas El Paraiso","Proveedor de mallas metalicas para puestas y ventanas","98371245","Parai.Mall@yahoo.com","Plaza Miraflores","2019-09-18 16:25:57");



DROP TABLE IF EXISTS tipo_usuario;

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO tipo_usuario VALUES("1","Programador");
INSERT INTO tipo_usuario VALUES("2","Administrador");
INSERT INTO tipo_usuario VALUES("3","Gerente");
INSERT INTO tipo_usuario VALUES("4","Empleados");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(10) NOT NULL,
  `contras` varchar(80) NOT NULL,
  `correo_electronico` varchar(35) NOT NULL,
  `dir_imagen` varchar(200) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_tipo_usuario` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_tipo_usuario` (`id_tipo_usuario`),
  KEY `fk_id_estado` (`id_estado`),
  CONSTRAINT `fk_id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  CONSTRAINT `fk_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES("1","admin","aENhMEFoNmdONmJIVUJ6ZU1tMDVSQT09","alevasquez841@gmail.com","../imagenes/fotos_perfil/perfil.png","2019-09-18 16:30:52","1","1");
INSERT INTO usuarios VALUES("2","maalb829","aENhMEFoNmdONmJIVUJ6ZU1tMDVSQT09","melxander27@hotmail.es","../imagenes/fotos_perfil/perfil_marvin.jpg","2019-09-18 16:25:57","1","1");
INSERT INTO usuarios VALUES("3","kfrod613","T21xd0xudGNyR2NTWHNPQXhQaXdOQT09","rodriguezkevin973@gmail.com","../imagenes/fotos_perfil/perfil_kevin.jpg","2019-09-18 16:25:57","1","1");
INSERT INTO usuarios VALUES("4","geoba356","ME1HL3QyU21KNHFGb3lJbXR3R1pkdz09","geobjaja@hotmail.com","../imagenes/fotos_perfil/perfil_lechu.png","2019-09-18 16:37:55","1","2");



DROP TABLE IF EXISTS viabilidad;

CREATE TABLE `viabilidad` (
  `id_viabilidad` int(11) NOT NULL AUTO_INCREMENT,
  `veredicto_viabilidad` varchar(20) DEFAULT NULL,
  `descripcion_viabilidad` varchar(50) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_empleado` int(11) DEFAULT NULL,
  `codigo_pedido` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_viabilidad`),
  KEY `id_empleado` (`id_empleado`),
  KEY `fk_codigo_pedido` (`codigo_pedido`),
  CONSTRAINT `fk_codigo_pedido` FOREIGN KEY (`codigo_pedido`) REFERENCES `pedidos` (`codigo_pedido`),
  CONSTRAINT `viabilidad_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




SET FOREIGN_KEY_CHECKS=1;