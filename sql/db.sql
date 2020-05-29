CREATE DATABASE carat_district;

USE carat_disrict;

CREATE TABLE IF NOT EXISTS products (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	link VARCHAR(255),
	name VARCHAR(255),
	imageSrc VARCHAR(500),
	price INT(10),
	description VARCHAR(2000)
);

CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstName VARCHAR(255),
	middleName VARCHAR(255),
	lastName VARCHAR(255),
	suffix VARCHAR(255),
	email VARCHAR(255),
	username VARCHAR(255),
	password VARCHAR(255),
	address VARCHAR(500)
);


INSERT INTO products (name, link, imageSrc, price, btn_id, description) VALUES 
	('17 Carat', 'products.php?productId=1', 'http://localhost/carat-district/images/album1.jpg', 699, 'Pledis Entertainment, the agency of After School and NU’EST, is debuting the new boy band Seventeen. The group has been on the fan radar for a long time thanks to the pre-debut show Seventeen TV which followed the members as trainees, and their debut process is being documented in the MBC Music reality program Seventeen Project.'),
	('Boys Be', 'products.php?productId=2', 'http://localhost/carat-district/images/album2.png', 829, 'Boys Be is the second extended play from South Korean boy band Seventeen. It was released on September 10, 2015, by Pledis Entertainment. The album consists of five tracks, including the title track, "Mansae".'),
	('Love & Letter', 'products.php?productId=3', 'http://localhost/carat-district/images/album3.png', 959, 'Seventeen conveys the passion of teenage boys falling in love for the first time in their romantic spring album First “Love & Letter”. The album contains various numbers including the unreleased songs performed in their previous concert, songs composed by Lee Hyun Do and hip-hop group Phantom’s Kiggen, remix versions of the album’s standard tracks by different Seventeen subunits and a fan song.'),
	('Love & Letter (Repackaged)', 'products.php?productId=4', 'http://localhost/carat-district/images/album4.png', 999, 'Seventeen is back to show everyone and have a refreshing hot summer! After receiving much love from their Pretty U promotions, Seventeen is set to release their repackage album to show their love and appreciation to all Carats!'),
	('Going Seventeen', 'products.php?productId=5', 'http://localhost/carat-district/images/album5.png', 949, 'Going Seventeen is the third mini-album by SEVENTEEN. It was released on December 5, 2016 with "BOOMBOOM" serving as the title track. The physical release comes in three versions: Make A Wish, Make It Happen, and Make The Seventeen.'),
	('AL1', 'products.php?productId=6', 'http://localhost/carat-district/images/album6.png', 999,'Al1 (pronounce as Alone) is the fourth extended play by South Korean boy group Seventeen. It was released on May 22, 2017, by Pledis Entertainment. The album contains eight tracks, including the lead single "Dont Wanna Cry".'),
	('Teen Age', 'products.php?productId=7', 'http://localhost/carat-district/images/album7.png', 1099, 'Teen, Age (stylized as TEEN, AGE) is the second studio album by South Korean boy group Seventeen. It was released on November 6, 2017 by Pledis Entertainment with the lead single "Clap".[1] Teen, Age was the groups 2nd No.1 on Billboard World Album Charts.'),
	('Directors Cut', 'products.php?productId=8', 'http://localhost/carat-district/images/album8.png', 1170, 'Directors Cut is the first special album. It was released on February 5, 2018 with "THANKS" serving as the title track. The album contains all their songs from Teen, Age and four new songs. Internationally, it was released as a separate four-track EP with only their newest songs'),
	('We Make You', 'products.php?productId=9', 'http://localhost/carat-district/images/album9.png', 1100, 'We Make You is the debut Japanese mini album by SEVENTEEN. It was released on May 30, 2018 with "Call Call Call!" serving as the title track. The physical release comes in four versions: Type A Ver., Type B Ver., Regular Ver. and CARAT Edition Ver.'),
	('You Make My Day', 'products.php?productId=10', 'http://localhost/carat-district/images/album10.jpg', 900, 'You Make My Day is the fifth mini-album by SEVENTEEN. It was released on July 16, 2018 with "Oh My!" serving as the title track. The physical release comes in three CD version (Meet, Follow, and Set The Sun) and Kihno album Set The Sun ver.'),
	('You Make My Dawn', 'products.php?productId=11', 'http://localhost/carat-district/images/album11.png', 840, 'You Made My Dawn is the sixth mini album by SEVENTEEN. It was released on January 21, 2019 with "Home" serving as the title track. The physical release comes in three versions, along with their Kihno counterparts: Before Dawn Ver., Dawn Ver., and Eternal Sunshine Ver.'),
	('Hit', 'products.php?productId=12', 'http://localhost/carat-district/images/album12.jpg', 900, '"HIT" is the first digital single by SEVENTEEN. It was released on August 5, 2019. It was then compiled in the 3rd full length album An Ode as the first track.'),
	('Happy Ending', 'products.php?productId=13', 'http://localhost/carat-district/images/album13.jpg', 1120, 'Happy Ending" is the first Japanese single by SEVENTEEN. It was released on May 29, 2019, with "Happy Ending" serving as the title track.'),
	('An Ode', 'products.php?productId=14', 'http://localhost/carat-district/images/album14.jpg', 1035, 'An Ode is the third full-length album by SEVENTEEN. It was released on September 16, 2019, with "Fear" serving as the albums title track. The physical album comes two formats: CD (with five different versions: Begin, The Poet, Hope, Truth, and Real.) and Kihno album.'),
	('Fallin Flower', 'products.php?productId=15', 'http://localhost/carat-district/images/album15.jpg', 1135, '"Fallin Flower" or Maiochiruhanabira (舞い落ちる花びら) is the second Japanese single by SEVENTEEN. It was released on April 1, 2020, with Fallin Flower serving as the title track.'),
	('Carat Bong Ver.1', 'products.php?productId=16', 'http://localhost/carat-district/images/cbv1.jpg', 1950, 'SEVENTEEN Official Lightstick Year 2017 - "Carat Bong". No batteries included.'),
	('Carat Bong Ver.2', 'products.php?productId=17', 'http://localhost/carat-district/images/cbv1.jpg', 2350, 'SEVENTEEN Official Lightstick Year 2019 - "Carat Bong". No batteries included.')
);
