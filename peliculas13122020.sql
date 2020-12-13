/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : peliculas

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 13/12/2020 02:11:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoria_pelis
-- ----------------------------
DROP TABLE IF EXISTS `categoria_pelis`;
CREATE TABLE `categoria_pelis`  (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoria_pelis
-- ----------------------------
INSERT INTO `categoria_pelis` VALUES (1, 'Acción');
INSERT INTO `categoria_pelis` VALUES (2, 'Aventura');
INSERT INTO `categoria_pelis` VALUES (3, 'Comedia');
INSERT INTO `categoria_pelis` VALUES (4, 'Drama');
INSERT INTO `categoria_pelis` VALUES (5, 'Terror');
INSERT INTO `categoria_pelis` VALUES (6, 'Ciencia y Ficción');
INSERT INTO `categoria_pelis` VALUES (7, 'Suspenso');
INSERT INTO `categoria_pelis` VALUES (8, 'Triller');

-- ----------------------------
-- Table structure for pelis
-- ----------------------------
DROP TABLE IF EXISTS `pelis`;
CREATE TABLE `pelis`  (
  `id_pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `protagonistas` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `year` date NOT NULL,
  `pais` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `resumen` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `duracion` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelicula`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelis
-- ----------------------------
INSERT INTO `pelis` VALUES (1, 4, '365 DNI , 365 Days', 'Anna Maria Sieklucka, Michele Morrone', '2020-02-07', 'Poland', 'La directora de ventas, Laura Belle, se entera de que su novio la engaña y está deprimida. Ella conoce a Massimo Toricelli, sintiéndose amargado después de haber matado a su padre, quien dirigió la mafia siciliana, y ahora tendrá que tomar su lugar. La niña impresiona a Massimo y él la abraza por la fuerza, dándose tiempo a sí mismo y a ella para que la pasión brote entre ellos en 365 días. Laura, que se distinguía por su carácter complejo, comenzó a burlarse de Massimo, y no le quedaba más que soportar todas sus travesuras, pero también estaba listo para mostrarle de qué se estaba privando. La pasión entre ellos estallará y tendrá que terminar con una ceremonia de boda, solo los enemigos del joven jefe de la mafia no se retirarán.', '90', '365_d_as-992282930-large1.jpg');
INSERT INTO `pelis` VALUES (4, 6, 'El día del fin del mundo', 'Gerard Butler, Morena Baccarin, King Bach, Scott Glenn', '2020-11-19', 'Canada', 'Una familia se embarca en un peligroso viaje mientras un cometa se lanza hacia la Tierra. A medida que el apocalipsis global se acerca, su increíble viaje culmina en un vuelo desesperado y de última hora a un posible refugio seguro.', '140', 'greenlandppal1.jpg');

-- ----------------------------
-- Table structure for sys_usuario
-- ----------------------------
DROP TABLE IF EXISTS `sys_usuario`;
CREATE TABLE `sys_usuario`  (
  `id_sys_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `sys_usuario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sys_nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sys_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_sys_usuario`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sys_usuario
-- ----------------------------
INSERT INTO `sys_usuario` VALUES (1, 'admin', 'Natacha', '123');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha_alta` datetime(0) NOT NULL,
  `ultimo_acceso` datetime(0) NULL DEFAULT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sexo` enum('M','H') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'Natacha', '', 'naty@gmail.com', '123456', '2020-11-22 16:31:17', NULL, NULL, 1, NULL, 'M');
INSERT INTO `usuario` VALUES (2, 'Pepito', 'Lopez Perez', 'pepito@gmail.com', '123', '2020-11-23 04:44:06', NULL, '::1', 1, '5514451223', 'H');

SET FOREIGN_KEY_CHECKS = 1;
