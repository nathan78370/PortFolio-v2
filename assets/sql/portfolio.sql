Drop database if exists portfolio;
Create database portfolio;
Use portfolio;

Create table categorie (
	id_cat int(11) not null auto_increment,
	libelle varchar(50),
	primary key (id_cat)
) ENGINE=InnoDB;

Create table projets (
	id_p int(11) not null auto_increment,
	titre varchar(50),
	description text,
	lien_local varchar(255),
	lien_git varchar(255),
	primary key (id_p)
) ENGINE=InnoDB;

Create table images (
	id_img int(11) not null auto_increment,
	lien varchar(255),
	primary key (id_img)
) ENGINE=InnoDB;

Create table competences (
	id_comp int(11) not null auto_increment,
	libelle varchar(50),
	primary key (id_comp)
) ENGINE=InnoDB;

CREATE TABLE tbl_user (
  user_id int(11) NOT NULL,
  username varchar(15) NOT NULL,
  email varchar(40) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Nathan', 'nathan.wendling@moniris.com', '$2y$10$5yHwLD.bpnnnXL/HmytZIOsyhZ39a8ccA/sF.q64cY9s0xvuV7lC6');
--(Moniris -> $2y$10$5yHwLD.bpnnnXL/HmytZIOsyhZ39a8ccA/sF.q64cY9s0xvuV7lC6)
