	CREATE DATABASE itlabike;
	USE itlabike;

	CREATE TABLE usuarios(
		idUsuario INT NOT NULL AUTO_INCREMENT,
		nombreUsuario VARCHAR(50) NOT NULL,
		correo VARCHAR(200) NOT NULL,
		contrasena VARCHAR(50) NOT NULL,
		nombre VARCHAR(50) NOT NULL,
		apellido VARCHAR(50) NOT NULL,
		telefono VARCHAR(10) NOT NULL,
		tipo VARCHAR(100) DEFAULT 'Cliente',


		CONSTRAINT PK_Usuarios PRIMARY KEY (idUsuario),
		CONSTRAINT UC_nombreUsuario UNIQUE (nombreUsuario),
		CONSTRAINT UC_correoUsuario UNIQUE (correo)

	);

	CREATE TABLE LK_condiciones(
		idCondicion INT NOT NULL AUTO_INCREMENT,
		condicion VARCHAR(100),

		CONSTRAINT PK_Condiciones PRIMARY KEY (idCondicion),
		CONSTRAINT UC_condicion UNIQUE (condicion)


	);

	CREATE TABLE LK_colores(
		idColor INT NOT NULL AUTO_INCREMENT,
		color VARCHAR(50) NOT NULL,

		CONSTRAINT PK_Colores PRIMARY KEY (idColor),
		CONSTRAINT UC_color UNIQUE (color)

	);

	CREATE TABLE LK_estilos(
		idEstilos INT NOT NULL AUTO_INCREMENT,
		estilo VARCHAR(100),

		CONSTRAINT PK_estilos PRIMARY KEY (idEstilos),
		CONSTRAINT UC_estilo UNIQUE (estilo)

	);


	CREATE TABLE bicicletas(
		idBicicleta INT NOT NULL AUTO_INCREMENT,
		marca VARCHAR(100),
		modelo VARCHAR(100),
		frenos VARCHAR(100),
		pinon VARCHAR(100),
		cambios VARCHAR(100),
		cadena VARCHAR(100),
		pedales VARCHAR(100),
		tijera VARCHAR(100),
		ruedas VARCHAR(100),
		cuadro VARCHAR(100),
		condicion INT NOT NULL,
		color INT NOT NULL,
		estilo INT NOT NULL,
		manubrio VARCHAR(100),
		tija VARCHAR(100),
		sillin VARCHAR(100),
		biela VARCHAR(100),
		plato VARCHAR(100),

		CONSTRAINT PK_bicicletas PRIMARY KEY (idBicicleta),
		CONSTRAINT FK_bicicletaCondicion FOREIGN KEY (condicion)
		REFERENCES LK_condiciones(idCondicion),
		CONSTRAINT FK_bicicletaColor FOREIGN KEY (color)
		REFERENCES LK_colores(idColor),
		CONSTRAINT FK_bicicletaEstilo FOREIGN KEY (estilo)
		REFERENCES LK_estilos(idEstilos)

	);

	CREATE TABLE LK_tiposParte(
		idTipo INT NOT NULL AUTO_INCREMENT,
		tipo VARCHAR(100),

		CONSTRAINT PK_tiposParte PRIMARY KEY (idTipo),
		CONSTRAINT UC_tipoParte UNIQUE (tipo)

	);

	CREATE TABLE partes(
		idParte INT NOT NULL AUTO_INCREMENT,
		tipo INT NOT NULL,
		marca VARCHAR(100),
		modelo VARCHAR(100),
		color INT NOT NULL,

		CONSTRAINT PK_partes PRIMARY KEY (idParte),
		CONSTRAINT FK_partesColor FOREIGN KEY (color)
		REFERENCES LK_colores(idColor),
		CONSTRAINT FK_partesTipo FOREIGN KEY (tipo)
		REFERENCES LK_tiposParte(idTipo)

	);

	CREATE TABLE accesorios(
		idAccesorio INT NOT NULL AUTO_INCREMENT,
		modelo VARCHAR(100),
		marca VARCHAR(100),

		CONSTRAINT PK_accesorios PRIMARY KEY (idAccesorio)

	);

	CREATE TABLE tipoArticulos(
		idTipoArticulo INT NOT NULL,
		tipoArticulo VARCHAR(100),

		CONSTRAINT PK_tipoArticulo PRIMARY KEY (idTipoArticulo)

	);

	CREATE TABLE anuncios(
		idAnuncio INT NOT NULL AUTO_INCREMENT,
		titulo VARCHAR(100),
		precio INT NOT NULL,
		provincia VARCHAR(100),
		descripcion VARCHAR(300),
		cantidad_clicks INT,
		fecha_publicacion DATETIME,
		idUsuario INT NOT NULL,
		idBicicleta INT NULL,
		idParte INT NULL,
		idAccesorio INT NULL,


		CONSTRAINT PK_anuncio PRIMARY KEY (idAnuncio),
		CONSTRAINT CHK_precio CHECK (precio > 0),
		CONSTRAINT FK_anuncioUsuario FOREIGN KEY (idUsuario)
		REFERENCES usuarios(idUsuario),
		CONSTRAINT FK_anuncioBicicleta FOREIGN KEY (idBicicleta)
		REFERENCES bicicletas(idBicicleta),
		CONSTRAINT FK_anuncioParte FOREIGN KEY (idParte)
		REFERENCES partes(idParte),
		CONSTRAINT FK_anuncioAccesorio FOREIGN KEY (idAccesorio)
		REFERENCES accesorios(idAccesorio)

	);


	CREATE TABLE comentarios(
		idComentario INT NOT NULL AUTO_INCREMENT,
		comentario VARCHAR(300) NOT NULL,
		fecha DATETIME,
		idUsuario INT NOT NULL,
		idAnuncio INT NOT NULL,

		CONSTRAINT PK_comentarios PRIMARY KEY (idComentario),
		CONSTRAINT FK_comentarioUsuario FOREIGN KEY (idUsuario)
		REFERENCES usuarios(idUsuario),
		CONSTRAINT FK_comentarioAnuncio FOREIGN KEY (idAnuncio)
		REFERENCES anuncios(idAnuncio)

	);

	CREATE TABLE wishlist(
		idWishlist INT NOT NULL AUTO_INCREMENT,
		idUsuario INT NOT NULL,

		CONSTRAINT PK_wishlist PRIMARY KEY (idWishlist),
		CONSTRAINT FK_idUsuario FOREIGN KEY (idUsuario)
		REFERENCES usuarios(idUsuario)

	);

	CREATE TABLE articulosWishlist(
		idArticuloWishlist INT NOT NULL AUTO_INCREMENT,
		idBicicleta INT NULL,
		idParte INT NULL,
		idAccesorio INT NULL,
		fechaAgregado DATETIME,

		CONSTRAINT PK_articulosWishlist PRIMARY KEY (idArticuloWishlist),
		CONSTRAINT FK_wishlistBicicleta FOREIGN KEY (idBicicleta)
		REFERENCES bicicletas(idBicicleta),
		CONSTRAINT FK_wishlistParte FOREIGN KEY (idParte)
		REFERENCES partes(idParte),
		CONSTRAINT FK_wishlistAccesorio FOREIGN KEY (idAccesorio)
		REFERENCES accesorios(idAccesorio)

	);

	CREATE TABLE fotosAnuncio(
		idFoto INT NOT NULL AUTO_INCREMENT,
		foto VARCHAR(300),

		CONSTRAINT PK_fotosAnuncios PRIMARY KEY (idFoto)

	);


INSERT INTO LK_condiciones(condicion) VALUES('Nuevo');
INSERT INTO LK_condiciones(condicion) VALUES('Usado');

INSERT INTO LK_estilos(estilo) VALUES('Carretera');
INSERT INTO LK_estilos(estilo) VALUES('De montana');
INSERT INTO LK_estilos(estilo) VALUES('BMX');
INSERT INTO LK_estilos(estilo) VALUES('Urbana');
INSERT INTO LK_estilos(estilo) VALUES('Playera');
INSERT INTO LK_estilos(estilo) VALUES('Infantil');
INSERT INTO LK_estilos(estilo) VALUES('Otra');

INSERT INTO LK_colores(color) VALUES('Negro');
INSERT INTO LK_colores(color) VALUES('Marron');
INSERT INTO LK_colores(color) VALUES('Gris');
INSERT INTO LK_colores(color) VALUES('Blanco');
INSERT INTO LK_colores(color) VALUES('Azul');
INSERT INTO LK_colores(color) VALUES('Verde');
INSERT INTO LK_colores(color) VALUES('Amarillo');
INSERT INTO LK_colores(color) VALUES('Naranja');
INSERT INTO LK_colores(color) VALUES('Rojo');
INSERT INTO LK_colores(color) VALUES('Rosado');
INSERT INTO LK_colores(color) VALUES('Purpura');
INSERT INTO LK_colores(color) VALUES('Otro');

INSERT INTO LK_tiposParte(tipo) VALUES('Frenos');
INSERT INTO LK_tiposParte(tipo) VALUES('Pinon');
INSERT INTO LK_tiposParte(tipo) VALUES('Cambios');
INSERT INTO LK_tiposParte(tipo) VALUES('Cadena');
INSERT INTO LK_tiposParte(tipo) VALUES('Pedal');
INSERT INTO LK_tiposParte(tipo) VALUES('Tijera');
INSERT INTO LK_tiposParte(tipo) VALUES('Cuadro');
INSERT INTO LK_tiposParte(tipo) VALUES('Manubrio');
INSERT INTO LK_tiposParte(tipo) VALUES('Tija');
INSERT INTO LK_tiposParte(tipo) VALUES('Sillin');
INSERT INTO LK_tiposParte(tipo) VALUES('Biela');
INSERT INTO LK_tiposParte(tipo) VALUES('Plato');



