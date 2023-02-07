

CREATE TABLE `korisnik` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `hashing` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO korisnik VALUES("aaaa","aaaa@gmail.com","aaaa","M","bd686fd640be98efaae0091fa301e613");
INSERT INTO korisnik VALUES("dario.rada@aspira.hr","asdasd@gmail.com","asd","M","ef575e8837d065a1683c022d2077d342");



CREATE TABLE `pitanja` (
  `pitanjeID` int(11) NOT NULL,
  `pitanje` varchar(255) NOT NULL,
  `opcija1` varchar(255) NOT NULL,
  `opcija2` varchar(255) NOT NULL,
  `opcija3` varchar(255) NOT NULL,
  `opcija4` varchar(255) NOT NULL,
  `odgovor` varchar(255) NOT NULL,
  `korOdg` text NOT NULL,
  PRIMARY KEY (`pitanjeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO pitanja VALUES("1","Koji je glavni grad Hrvatske?","Zagreb","Rijeka","Osijek","Split","Zagreb","Split");
INSERT INTO pitanja VALUES("2","Koji je glavni grad Poljske?","Poznan","Varšava","Gdansk","Lublin","Varšava","Lublin");
INSERT INTO pitanja VALUES("3","Koji je glavni grad Njemačke?","Hamburg","Munchen","Essen","Berlin","Berlin","Berlin");
INSERT INTO pitanja VALUES("4","Koji je glavni grad Bosne i Hercegovine?","Sarajevo","Mostar","Banja Luka","Tuzla","Sarajevo","Tuzla");
INSERT INTO pitanja VALUES("5","Koji je glavni grad Turske?","Ankara","Izmir","Adana","Istanbul","Ankara","Ankara");
INSERT INTO pitanja VALUES("6","Koji je glavni grad Italije?","Rim","Napulj","Venecija","Milano","Rim","Napulj");
INSERT INTO pitanja VALUES("7","Koji je glavni grad Španjolske?","Madrid","Bilbao","Barcelona","Zaragoza","Madrid","Bilbao");
INSERT INTO pitanja VALUES("8","Koji je glavni grad Velike Britanije?","London","Manchester","Cardiff","Edinburgh","London","London");
INSERT INTO pitanja VALUES("9","Koji je glavni grad Japana?","Osaka","Tokio","Nagasaki","Yokohama","Tokio","Tokio");
INSERT INTO pitanja VALUES("10","Koji je glavni grad Kine?","Šangaj","Guangzhou","Peking","Kingdao","Peking","Kingdao");
INSERT INTO pitanja VALUES("11","Koji je glavni grad Kolumbije?","Cali","Medellin","Bogota","Barranquilla","Bogota","Bogota");
INSERT INTO pitanja VALUES("12","Koji je glavni grad Salvador?","San Salvador","Santa Ana","San Miguel","Santa Tecla","San Salvador","Santa Ana");
INSERT INTO pitanja VALUES("13","Koji je glavni grad Australije?","Sidney","Melbourne","Canberra","Adelaide","Canberra","Sidney");
INSERT INTO pitanja VALUES("14","Koji je glavni grad Grenlanda?","Atammik","Arsuk","Nuuk","Kulusuk","Nuuk","Kulusuk");

