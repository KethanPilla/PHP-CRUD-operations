CREATE DATABASE march;

USE march;
CREATE TABLE team
(
  id int auto_increment PRIMARY KEY,
  seed int,
  school varchar(50),
  conference varchar(50)
);

CREATE TABLE users 
(
    id int primary key auto_increment, 
    username varchar(255), 
    password varchar(255) 
);

-- insert a row into the users table for the administrator:
-- username = admin
-- password = pwd
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$6EagpQz90eekX4cIlXjWdu/iCCo3jmSPrLmm9kJ/OVzbmwHaJZGzG');

INSERT INTO team (seed, school, conference) VALUES( 1,'Dayton Flyers','A10');
INSERT INTO team (seed, school, conference) VALUES( 1,'SMU Mustangs','ACC');
INSERT INTO team (seed, school, conference) VALUES( 1,'UC Irvine Anteaters','BW');
INSERT INTO team (seed, school, conference) VALUES( 1,'San Francisco Dons','WCC');
INSERT INTO team (seed, school, conference) VALUES( 2,'George Mason Patriots','A10');
INSERT INTO team (seed, school, conference) VALUES( 2,'Stanford Cardinal','ACC');
INSERT INTO team (seed, school, conference) VALUES( 2,'North Texas Mean Green','Amer');
INSERT INTO team (seed, school, conference) VALUES( 2,'Santa Clara Broncos','WCC');
INSERT INTO team (seed, school, conference) VALUES( 3,'Saint Josephs Hawks','A10');
INSERT INTO team (seed, school, conference) VALUES( 3,'St. Bonaventure Bonnies','A10');
INSERT INTO team (seed, school, conference) VALUES( 3,'Bradley Braves','MVC');
INSERT INTO team (seed, school, conference) VALUES( 3,'Arkansas State Red Wolves','SB');
INSERT INTO team (seed, school, conference) VALUES( 4,'Georgia Tech Yellow Jackets','ACC');
INSERT INTO team (seed, school, conference) VALUES( 4,'Oklahoma State Cowboys','B12');
INSERT INTO team (seed, school, conference) VALUES( 4,'Middle Tennessee Blue Raiders','CUSA');
INSERT INTO team (seed, school, conference) VALUES( 4,'San Jose State Spartans','MWC');
INSERT INTO team (seed, school, conference) VALUES( 5,'Loyola Chicago Ramblers','A10');
INSERT INTO team (seed, school, conference) VALUES( 5,'Wichita State Shockers','Amer');
INSERT INTO team (seed, school, conference) VALUES( 5,'Jacksonville State Gamecocks','CUSA');
INSERT INTO team (seed, school, conference) VALUES( 5,'Chattanooga Mocs','SC');
INSERT INTO team (seed, school, conference) VALUES( 6,'Saint Louis Billikens','A10');
INSERT INTO team (seed, school, conference) VALUES( 6,'UAB Blazers','Amer');
INSERT INTO team (seed, school, conference) VALUES( 6,'North Alabama Lions','ASun');
INSERT INTO team (seed, school, conference) VALUES( 6,'Kent State Golden Flashes','MAC');
INSERT INTO team (seed, school, conference) VALUES( 7,'Cal State Northridge Matadors','BW');
INSERT INTO team (seed, school, conference) VALUES( 7,'UC Riverside Highlanders','BW');
INSERT INTO team (seed, school, conference) VALUES( 7,'Samford Bulldogs','SC');
INSERT INTO team (seed, school, conference) VALUES( 7,'Furman Paladins','SC');
INSERT INTO team (seed, school, conference) VALUES( 8,'Florida Atlantic Owls','Amer');
INSERT INTO team (seed, school, conference) VALUES( 8,'Northern Colorado Bears','BSky');
INSERT INTO team (seed, school, conference) VALUES( 8,'Northern Iowa Panthers','MVC');
INSERT INTO team (seed, school, conference) VALUES( 8,'Utah Valley Wolverines','WAC');
