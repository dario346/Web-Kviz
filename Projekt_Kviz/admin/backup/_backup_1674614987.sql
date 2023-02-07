

CREATE TABLE `adminopcije` (
  `trajanjecookie` int(11) NOT NULL,
  `pokusajlogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO adminopcije VALUES("5","5");



CREATE TABLE `highscore` (
  `korisnikID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  PRIMARY KEY (`korisnikID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO highscore VALUES("1","stipe","400");
INSERT INTO highscore VALUES("2","snte","679");
INSERT INTO highscore VALUES("3","jure","12");



CREATE TABLE `korisnik` (
  `korisnikID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `hashing` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) DEFAULT NULL,
  `stanjeracuna` varchar(255) NOT NULL,
  PRIMARY KEY (`korisnikID`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO korisnik VALUES("92","aaaa","aaaaa@gmail.com","aaaa","M","9b70e8fe62e40c570a322f1b0b659098","1","unlocked");
INSERT INTO korisnik VALUES("93","bbb","bbbbb@gmail.com","bbb","M","26dd0dbc6e3f4c8043749885523d6a25","1","locked");
INSERT INTO korisnik VALUES("94","ccc","ccc@gmail.com","ccc","M","621bf66ddb7c962aa0d22ac97d69b793","1","unlocked");



CREATE TABLE `pitanja` (
  `pitanjeID` int(11) NOT NULL AUTO_INCREMENT,
  `pitanje` varchar(255) NOT NULL,
  `opcija1` varchar(255) NOT NULL,
  `opcija2` varchar(255) NOT NULL,
  `opcija3` varchar(255) NOT NULL,
  `opcija4` varchar(255) NOT NULL,
  `odgovor` varchar(255) NOT NULL,
  `korOdg` text NOT NULL,
  PRIMARY KEY (`pitanjeID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO pitanja VALUES("1","Koji je glavni grad Hrvatske?","Zagreb","Rijeka","Osijek","Split","Zagreb","Split");
INSERT INTO pitanja VALUES("2","Koji je glavni grad Poljske?","Poznan","Varšava","Gdansk","Lublin","Varšava","Lublin");
INSERT INTO pitanja VALUES("3","Koji je glavni grad Njemačke?","Hamburg","Munchen","Essen","Berlin","Berlin","Berlin");
INSERT INTO pitanja VALUES("4","Koji je glavni grad Bosne i Hercegovine?","","","","","","Tuzla");
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

