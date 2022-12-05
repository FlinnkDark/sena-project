/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : sistema_control_de_actividades

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 29/11/2022 15:25:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for actividades
-- ----------------------------
DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades`  (
  `actividad_id` int NOT NULL AUTO_INCREMENT,
  `documento` int NOT NULL,
  `fecha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actividad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`actividad_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of actividades
-- ----------------------------
INSERT INTO `actividades` VALUES (1, 1004342102, '2022-09-21', 'Prueba de actividad');
INSERT INTO `actividades` VALUES (2, 1004342102, '2022-09-21', 'Prueba de actividad');
INSERT INTO `actividades` VALUES (3, 1004342102, '2022-09-21', 'Prueba de actividad');
INSERT INTO `actividades` VALUES (4, 1004342102, '2022-11-23', 'Pruebas de ingreso');
INSERT INTO `actividades` VALUES (5, 1008367465, '2022-11-23', 'Reabastecimiento de huevos');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `documento` int NOT NULL,
  `contraseña` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`usuario_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Andres Torres', 1004342102, '671dd1db41cb5b8a328e9c019c363b4e01e96a93', 'Colanta');
INSERT INTO `usuarios` VALUES (2, 'Luisa Fernandez', 100238495, 'a2f37b919e60ffb32fb488816e1d9e6ab00939b9', 'Alqueria');
INSERT INTO `usuarios` VALUES (3, 'Luis Guzman', 100238435, 'cc2766d460dba3605e843da6a89d6e586f3eb1ae', 'Alqueria');
INSERT INTO `usuarios` VALUES (4, 'Andrea Fernandez', 100238496, '09cff47615902d7d6e268cbb631dc9497df85148', 'Klim');
INSERT INTO `usuarios` VALUES (5, 'Luisa Torres', 1008367465, '9bba73593fdf4c3c9e6dc0ade8c9dfd4865f5132', 'Prueba');

SET FOREIGN_KEY_CHECKS = 1;
