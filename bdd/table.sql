/*--------------------------------------------------------*/
/*---------------------AJOUT-TABLES-----------------------*/
/*--------------------------------------------------------*/

/*version SQL*/

/*
 Le format BLOP est un format permettant d'accepter tout type de fichier (.exe, .txt, .png...),
 ici, nous nous en servirons pour stocker des images, tel que les logos des commerces,
 le logo representatif de chaque catégorie de commerce...

 ci-dessous dans la table ADMIN, 'mdp' correspondra au mot de passe de l'utilisateur
*/
CREATE TABLE ADMIN (
	id			smallint(3) NOT NULL PRIMARY KEY AUTOINCREMENT,
	prenom		varchar(32),
	nom	 		varchar(32),
	mail		varchar(32) NOT NULL,
	pseudo		varchar(32) NOT NULL,
	mdp			varchar(32) NOT NULL,
	avatar		BLOB
);

/*
 'auteur'peut etre remplacer par une clef étrangère liè à l''id' de ADMIN
*/
CREATE TABLE ARTICLE (
	id			integer(6) NOT NULL PRIMARY KEY AUTOINCREMENT,
	nom			varchar(32) NOT NULL,
	description	text NOT NULL,
	image		BLOB,
	auteur		varchar(32) NOT NULL
);

/*
 Ci-dessous, dans la table COMMERCE, j'ai mis un attribut 'facebook',
 sachant que de nombreux commerces possèdent un facebook.
 Cependant je n'ai pas mis twitter sachant qu'aucun commerce ne l'avait,
 donc à rajouter ?

 Pour les numéros de telephone, certains commerces (3 je crois sur les 17 commerces)
 en possède 2. Est-ce qu'on en selectionnne un seul sachant que généralement, il y a 
 un 03 et un 06, ou créons-nous un attribut 'fixe' et un attribut 'mobile' ?
 Je pense qu'il faudrait se renseigner auprès des commerces concernés/demander à Delahaye.
*/
CREATE TABLE COMMERCE (
	id			smallint(3) NOT NULL PRIMARY KEY AUTOINCREMENT,
	nom			varchar(32) NOT NULL,
	telephone	varchar(18),
	mail		varchar(32),
	siteWeb		text,
	facebook	text,
	proprietaire varchar(32),
	description	text NOT NULL,
	logo		BLOB,
	numType		integer(2) NOT NULL,
	FOREIGN KEY(numType) REFERENCES TYPE(id)
);

/*
 Les events concerneront un commerce,
 ou toute la halle aux frais (sachant que la halle sera conidérée comme un commerce)
 En effet, les events dépendent de chaques commerces, ou parfois de toute la halle. 
*/
CREATE TABLE EVENT ( 
	id			integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	nom			varchar(32) NOT NULL,
	description	text NOT NULL,
	dateDeb		date NOT NULL,
	dateFin		date NOT NULL,
	image		BLOB,
	numCommerce	integer(3) NOT NULL,
	FOREIGN KEY(numCommerce) REFERENCES COMMERCE(id)
);

/*
 liste de type de commerce, avec le logo correspondant, j'y ai mis les 9 type + un type spécial pour
 la Halle, le type 'association'
*/
CREATE TABLE TYPE (
	id			integer(2) PRIMARY KEY AUTOINCREMENT,
	label		varchar(20) NOT NULL,
	logo		BLOB
);

/*
 Voici les 10 différents types créés
*/
INSERT INTO TYPE(id, label) VALUES
	(0, 'Association'),
	(1, 'Primeurs'),
	(2, 'Rotissiers'),
	(3, 'Poissonniers'),
	(4, 'Fromagers'),
	(5, 'Epiciers'),
	(6, 'Traiteurs'),
	(7, 'Bouchers'),
	(8, 'Cavistes'),
	(9, 'Boulangers');


INSERT INTO COMMERCE(id, nom, telephone, mail, siteWeb, facebook, proprietaire, description, numType) VALUES
	(0, 'Halle au frais','','','','','','Association des commerçants d''Amiens',0),
	(1, 'Au pêché mignon','+33 3 22 92 04 50','','','','','Vins & spiritueux',8),
	(2, 'Aux quatre saisons','+33 3 22 92 48 58','alexandradecaux3@orange.fr','','','M. Joel Decaux','Primeurs',1),
	(3, 'Au roi du boudin','+33 6 86 12 20 49','','http://www.auroiduboudin.fr/','','M. Gysel Van','Le spécialiste du boudin blanc et noir ',7),
	(4, 'Aux papilles du monde','+33 3 22 91 14 22','','http://www.auxpapillesdumonde.fr/','','M&Mme Alves','Produit du monde',5),
	(5, 'Boucherie Amiénoise Pocholle','+33 3 22 91 74 09','','','','','Boucherie Charcuterie ',7),
	(6, 'Héripré volaille','+33 3 22 92 61 54','','http://www.heripre.com/','https://www.facebook.com/heripre.maison','M. Geoffrey Héripré','Volaille et gibier',2),
	(7, 'Hong Duc','+33 3 22 92 39 09','','','https://www.facebook.com/Hong.Duc.Amiens','','Produits Asiatiques ',5),
	(8, 'La boucherie des Halles','+33 6 85 20 93 63','stephane.wiotte@orange.fr','','','M. Stéphane Wiotte','1er prix National en boucherie artisanale',7),
	(9, 'L''épicerie Italienne','+33 3 22 72 49 52','l-epicerie341@orange.fr','','','Mme Nathalie Rubignay','Produits Italiens',5),
	(10, 'L''étale de Planchon','+33 3 22 91 96 22','leblogdejulienplanchon@gmail.com','http://leblogdejulienplanchon.blogspot.fr/','','M. Julien Planchon','Fromager Affineur',4),
	(11, 'Les artisans du pain','+33 6 44 37 09 99','','','https://www.facebook.com/Nature-de-Pain-1726363787599598/','M. Sainneville','Boulangerie pâtisserie',9),
	(12, 'Boucherie Legrand','+33 3 22 92 04 63','philippelegrand73@gmail.com','','','M. Philippe LEGRAND','',7),
	(13, 'Nature du pain','+33 3 22 91 25 36','','http://www.naturedepain.com/','','','Boulangerie pâtisserie ',9),
	(14, 'Philippe Olivier','+33 3 22 92 33 54','info@philippeolivier.fr','http://www.philippeolivier.fr/','','','L''affineur des Fromages',4),
	(15, 'Poissonerie chez Dupuis','+33 3 22 92 05 39','','','','','Poissons et moules',3),
	(16, 'Primeurs et maraîchers Pierre Quillet', '+33 3 22 31 61 63','pierre.quillet4@wanadoo.fr','','https://www.facebook.com/quilletpierre','','',1),
	(17, 'Au palais gourmand','+33 3 22 91 72 77','apgamiens@wanadoo.fr','','https://www.facebook.com/apgamiens/?frer=ts','Cédric Hely ','',6);



/*
LISTE DES DONNEES SAISIE SOUS FORME DE TABLEAU CLAIR :

INSERT INTO COMMERCE(id, nom, 						telephone, 				mail, 									siteWeb, 										facebook, 														proprietaire, 				description, 								numType) VALUES
	(0, 'Halle au frais',							'',						'',										'',												'',																'',							'Association des commerçants d''Amiens',		0),
	(1, 'Au pêché mignon',							'+33 3 22 92 04 50',	'',										'',												'',																'',							'Vins & spiritueux',							8),
	(2, 'Aux quatre saisons',						'+33 3 22 92 48 58',	'alexandradecaux3@orange.fr',			'',												'',																'M. Joel Decaux',			'Primeurs',										1),
	(3, 'Au roi du boudin',							'+33 6 86 12 20 49',	'',										'http://www.auroiduboudin.fr/',					'',																'M. Gysel Van',				'Le spécialiste du boudin blanc et noir ',		7),
	(4, 'Aux papilles du monde',					'+33 3 22 91 14 22',	'',										'http://www.auxpapillesdumonde.fr/',			'',																'M&Mme Alves',				'Produit du monde',								5),
	(5, 'Boucherie Amiénoise Pocholle',				'+33 3 22 91 74 09',	'',										'',												'',																'',							'Boucherie Charcuterie ',						7),
	(6, 'Héripré volaille',							'+33 3 22 92 61 54',	'',										'http://www.heripre.com/',						'https://www.facebook.com/heripre.maison',						'M. Geoffrey Héripré',		'Volaille et gibier',							2),
	(7, 'Hong Duc',									'+33 3 22 92 39 09',	'',										'',												'https://www.facebook.com/Hong.Duc.Amiens',						'',							'Produits Asiatiques ',							5),
	(8, 'La boucherie des Halles',					'+33 6 85 20 93 63',	'stephane.wiotte@orange.fr',			'',												'',																'M. Stéphane Wiotte',		'1er prix National en boucherie artisanale',	7),
	(9, 'L''épicerie Italienne',					'+33 3 22 72 49 52',	'l-epicerie341@orange.fr',				'',												'',																'Mme Nathalie Rubignay',	'Produits Italiens',							5),
	(10, 'L''étale de Planchon',					'+33 3 22 91 96 22',	'leblogdejulienplanchon@gmail.com',		'http://leblogdejulienplanchon.blogspot.fr/',	'',																'M. Julien Planchon',		'Fromager Affineur',							4),
	(11, 'Les artisans du pain',					'+33 6 44 37 09 99',	'',										'',												'https://www.facebook.com/Nature-de-Pain-1726363787599598/',	'M. Sainneville',			'Boulangerie pâtisserie',						9),
	(12, 'Boucherie Legrand',						'+33 3 22 92 04 63',	'philippelegrand73@gmail.com',			'',												'',																'M. Philippe LEGRAND',		'',												7),
	(13, 'Nature du pain',							'+33 3 22 91 25 36',	'',										'http://www.naturedepain.com/',					'',																'',							'Boulangerie pâtisserie ',						9),
	(14, 'Philippe Olivier',						'+33 3 22 92 33 54',	'info@philippeolivier.fr',				'http://www.philippeolivier.fr/',				'',																'',							'L''affineur des Fromages',						4),
	(15, 'Poissonerie chez Dupuis',					'+33 3 22 92 05 39',	'',										'',												'',																'',							'Poissons et moules',							3),
	(16, 'Primeurs et maraîchers Pierre Quillet', 	'+33 3 22 31 61 63',	'pierre.quillet4@wanadoo.fr',			'',												'https://www.facebook.com/quilletpierre',						'',							'',												1),
	(17, 'Au palais gourmand',						'+33 3 22 91 72 77',	'apgamiens@wanadoo.fr',					'',												'https://www.facebook.com/apgamiens/?frer=ts',					'Cédric Hely',				'',												6);
*/