CREATE DATABASE carat_district;

USE carat_disrict;

CREATE TABLE IF NOT EXISTS products (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	link VARCHAR(255),
	name VARCHAR(255),
	img_src VARCHAR(500),
	price INT(10),
	btn_id VARCHAR(100),
	description VARCHAR(2000)
);

CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	middle_name VARCHAR(255),
	last_name VARCHAR(255),
	suffix VARCHAR(255),
	email VARCHAR(255),
	username VARCHAR(255),
	password VARCHAR(255),
	address VARCHAR(500)
);


INSERT INTO products (name, link, img_src, price, btn_id, description) VALUES 
	('17 Carat', 'album1.php', 'http://localhost/carat-district/images/album1.jpg', 699, 'btn-album1', 'Pledis Entertainment, the agency of After School and NU’EST, is debuting the new boy band Seventeen. The group has been on the fan radar for a long time thanks to the pre-debut show Seventeen TV which followed the members as trainees, and their debut process is being documented in the MBC Music reality program Seventeen Project.'),
	('Boys Be', 'album2.php', 'http://localhost/carat-district/images/album2.png', 829, 'btn-album2', 'Boys Be is the second extended play from South Korean boy band Seventeen. It was released on September 10, 2015, by Pledis Entertainment. The album consists of five tracks, including the title track, "Mansae".'),
	('Love & Letter', 'album3.php', 'http://localhost/carat-district/images/album3.png', 959, 'btn-album3', 'Seventeen conveys the passion of teenage boys falling in love for the first time in their romantic spring album First “Love & Letter”. The album contains various numbers including the unreleased songs performed in their previous concert, songs composed by Lee Hyun Do and hip-hop group Phantom’s Kiggen, remix versions of the album’s standard tracks by different Seventeen subunits and a fan song.'),
	('Love & Letter (Repackaged)', 'album4.php', 'http://localhost/carat-district/images/album4.png', 999, 'btn-album4', 'Seventeen is back to show everyone and have a refreshing hot summer! After receiving much love from their Pretty U promotions, Seventeen is set to release their repackage album to show their love and appreciation to all Carats!'),
	('Going Seventeen', 'album5.php', 'http://localhost/carat-district/images/album5.png', 949, 'btn-album5', 'Going Seventeen is the third mini-album by SEVENTEEN. It was released on December 5, 2016 with "BOOMBOOM" serving as the title track. The physical release comes in three versions: Make A Wish, Make It Happen, and Make The Seventeen.'),
	('AL1', 'album6.php', 'http://localhost/carat-district/images/album6.png', 999, 'btn-album6', 'Al1 (pronounce as Alone) is the fourth extended play by South Korean boy group Seventeen. It was released on May 22, 2017, by Pledis Entertainment. The album contains eight tracks, including the lead single "Dont Wanna Cry".'),
	('Teen Age', 'album7.php', 'http://localhost/carat-district/images/album7.png', 1099, 'btn-album7', 'Teen, Age (stylized as TEEN, AGE) is the second studio album by South Korean boy group Seventeen. It was released on November 6, 2017 by Pledis Entertainment with the lead single "Clap".[1] Teen, Age was the groups 2nd No.1 on Billboard World Album Charts.'),
	('Directors Cut', 'album8.php', 'http://localhost/carat-district/images/album8.png', 1170, 'btn-album8', 'Directors Cut is the first special album. It was released on February 5, 2018 with "THANKS" serving as the title track. The album contains all their songs from Teen, Age and four new songs. Internationally, it was released as a separate four-track EP with only their newest songs'),
	('We Make You', 'album9.php', 'http://localhost/carat-district/images/album9.png', 1100, 'btn-album9', 'We Make You is the debut Japanese mini album by SEVENTEEN. It was released on May 30, 2018 with "Call Call Call!" serving as the title track. The physical release comes in four versions: Type A Ver., Type B Ver., Regular Ver. and CARAT Edition Ver.'),
	('You Make My Day', 'album10.php', 'http://localhost/carat-district/images/album10.jpg', 900, 'btn-album10', 'You Make My Day is the fifth mini-album by SEVENTEEN. It was released on July 16, 2018 with "Oh My!" serving as the title track. The physical release comes in three CD version (Meet, Follow, and Set The Sun) and Kihno album Set The Sun ver.'),
	('You Make My Dawn', 'album11.php', 'http://localhost/carat-district/images/album11.png', 840, 'btn-album11', 'You Made My Dawn is the sixth mini album by SEVENTEEN. It was released on January 21, 2019 with "Home" serving as the title track. The physical release comes in three versions, along with their Kihno counterparts: Before Dawn Ver., Dawn Ver., and Eternal Sunshine Ver.'),
	('Hit', 'album12.php', 'http://localhost/carat-district/images/album12.jpg', 900, 'btn-album12', '"HIT" is the first digital single by SEVENTEEN. It was released on August 5, 2019. It was then compiled in the 3rd full length album An Ode as the first track.'),
	('Happy Ending', 'album13.php', 'http://localhost/carat-district/images/album13.jpg', 1120, 'btn-album13', 'Happy Ending" is the first Japanese single by SEVENTEEN. It was released on May 29, 2019, with "Happy Ending" serving as the title track.'),
	('An Ode', 'album14.php', 'http://localhost/carat-district/images/album14.jpg', 1035, 'btn-album14', 'An Ode is the third full-length album by SEVENTEEN. It was released on September 16, 2019, with "Fear" serving as the albums title track. The physical album comes two formats: CD (with five different versions: Begin, The Poet, Hope, Truth, and Real.) and Kihno album.'),
	('Fallin Flower', 'album15.php', 'http://localhost/carat-district/images/album15.jpg', 1135, 'btn-album15', '"Fallin Flower" or Maiochiruhanabira (舞い落ちる花びら) is the second Japanese single by SEVENTEEN. It was released on April 1, 2020, with Fallin Flower serving as the title track.'),
	('Carat Bong Ver.1', 'cbv1.php', 'http://localhost/carat-district/images/cbv1.jpg', 1950, 'btn-cbv1', 'SEVENTEEN Official Lightstick Year 2017 - "Carat Bong". No batteries included.'),
	('Carat Bong Ver.2', 'cbv2.php', 'http://localhost/carat-district/images/cbv1.jpg', 2350, 'btn-cbv2', 'SEVENTEEN Official Lightstick Year 2019 - "Carat Bong". No batteries included.')
);
