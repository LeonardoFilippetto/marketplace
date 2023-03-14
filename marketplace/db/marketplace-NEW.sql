# Host: localhost:3399  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2023-03-07 10:27:02
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "anuncios"
#

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE `anuncios` (
  `id_anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) DEFAULT NULL,
  `categoria_produto` varchar(45) DEFAULT NULL,
  `preco` decimal(9,2) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `img_princ` varchar(50) DEFAULT NULL,
  `imgs_sec` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_anuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "anuncios"
#


#
# Structure for table "armazenamento"
#

DROP TABLE IF EXISTS `armazenamento`;
CREATE TABLE `armazenamento` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `fator_de_forma` varchar(20) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "armazenamento"
#


#
# Structure for table "avaliacoes"
#

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE `avaliacoes` (
  `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuarios` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `opiniao` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "avaliacoes"
#


#
# Structure for table "comentarios"
#

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_anunucio` int(11) DEFAULT NULL,
  `id_resposta` int(11) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `data` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "comentarios"
#


#
# Structure for table "coolers"
#

DROP TABLE IF EXISTS `coolers`;
CREATE TABLE `coolers` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `ian` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `liquid_cooler` tinyint(4) DEFAULT NULL,
  `rpm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "coolers"
#


#
# Structure for table "fontes"
#

DROP TABLE IF EXISTS `fontes`;
CREATE TABLE `fontes` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `selo` varchar(30) DEFAULT NULL,
  `potencia` int(11) DEFAULT NULL,
  `fator_de_froma` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "fontes"
#


#
# Structure for table "gabinetes"
#

DROP TABLE IF EXISTS `gabinetes`;
CREATE TABLE `gabinetes` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `ian` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `fator_de_forma` varchar(20) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `conprimento` int(11) DEFAULT NULL,
  `largura` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "gabinetes"
#


#
# Structure for table "memoria_ram"
#

DROP TABLE IF EXISTS `memoria_ram`;
CREATE TABLE `memoria_ram` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `quantidade_pentes` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `tipo_de_memoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "memoria_ram"
#


#
# Structure for table "placas_de_video"
#

DROP TABLE IF EXISTS `placas_de_video`;
CREATE TABLE `placas_de_video` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `Id_anuncio` int(11) DEFAULT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `quantidade_pentes` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `tipo_memoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "placas_de_video"
#


#
# Structure for table "placas_mae"
#

DROP TABLE IF EXISTS `placas_mae`;
CREATE TABLE `placas_mae` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `Id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `slots_ram` int(11) DEFAULT NULL,
  `max_espaÃ§o_ram` int(11) DEFAULT NULL,
  `soquete` varchar(25) DEFAULT NULL,
  `slots_pcie_x1` int(11) DEFAULT NULL,
  `slots_pcie_x4` int(11) DEFAULT NULL,
  `slots_pcie_x16` int(11) DEFAULT NULL,
  `slots_m2` int(11) DEFAULT NULL,
  `slots_sata` int(11) DEFAULT NULL,
  `tipo_memoria` varchar(20) DEFAULT NULL,
  `fator_de_forma` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "placas_mae"
#


#
# Structure for table "processadores"
#

DROP TABLE IF EXISTS `processadores`;
CREATE TABLE `processadores` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_anuncio` int(11) DEFAULT NULL,
  `ean` varchar(13) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `soquete` varchar(25) DEFAULT NULL,
  `serie` varchar(20) DEFAULT NULL,
  `nucelo` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `video_integrado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "processadores"
#


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `data_nasc` date DEFAULT current_timestamp(),
  `celular` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `razao_social` varchar(150) DEFAULT NULL,
  `tributo` varchar(20) DEFAULT NULL,
  `nome_fantasia` varchar(50) DEFAULT NULL,
  `telefone_empresa` varchar(10) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#


#
# Structure for table "vendas"
#

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE `vendas` (
  `id_vendas` int(11) NOT NULL AUTO_INCREMENT,
  `id_comprador` int(11) DEFAULT NULL,
  `ids_anuncios` text DEFAULT NULL,
  `qunatidades` text DEFAULT NULL,
  `preco_total` decimal(9,2) DEFAULT NULL,
  `data` timestamp NULL DEFAULT current_timestamp(),
  `transportadora` varchar(40) DEFAULT NULL,
  `valor_frete` decimal(9,2) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_vendas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "vendas"
#

