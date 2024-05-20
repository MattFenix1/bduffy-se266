CREATE TABLE IF NOT EXISTS movies(
        id INT UNSIGNED auto_increment NOT NULL PRIMARY KEY,
        moviename NVARCHAR(100) default NULL,
        wheretofind NVARCHAR(50) default NULL,
        addpeople tinyint(1) default NULL,
        watched tinyint(1) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity', 'Max',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity 2','Max',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity 3','Max',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity 4','Max',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity: The Marked Ones','Max',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity: The Ghost Dimension','Paramount+',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Paranormal Activity: Next of Kin','Paramount+',0,1);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Beethoven', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Madagascar', 'Peacock',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Madagascar: Escape 2 Africa', 'Netflix',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Madagascar 3: Europes Most Wanted', 'Prime',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Alien', 'Hulu',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The rocky Horror Picture Show', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('21 Jump Street', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('22 Jump Street', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Assassins Creed', 'Youtube', 0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Evil Dead', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Godfather', 'Prime',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Godfather Part II', 'Prime',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Godfather Part III', 'Prime',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Oppenheimer', 'Peacock',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Quarantine', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Poltergeist', 'Fandango at Home',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Chronicles of Narnia: The Lion, the Witch, and the Wardrobe', 'Disney+',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Exorcist', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Visit', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The VVitch', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Godzilla: King of the Monsters', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Blazing Saddles', 'Prime', 0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Corpse Bride', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Naked Gun: From the Files of Police Squad', 'Max', 0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Naked Gun 2 1/2: The Smell of Fear', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Naked Gun 33 1/3: The Final Insult', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Muppets Wizard of Oz', 'Fandango at Home',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Wizard of Oz', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Napoleon Dynamite', 'Hulu',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Back To The Future', 'Fandango at Home',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Back To The Future Part II', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Back To The Future Part III', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Mighty Ducks 2', 'Disney+',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Mighty Ducks 3', 'Disney+',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Hitchhikers Guide to the Galaxy', 'Hulu',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Scarface', 'Hulu',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Lilo and Stitch', 'Disney+',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Silence of the Lambs', 'Fandango at Home',1,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Manhunter', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Red Dragon', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Hannibal', 'Tubi',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Hannibal Rising', 'Tubi',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Suicide Squad', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Suicide Squad', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Grease', 'Hulu',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Night Swim', 'Peacock',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Masters of Disguise', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Real Steel', 'Youtube',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Persona 3: Spring of Birth', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Persona 3: Midsummer Knights Dream', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Persona 3: Falling Down', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Persona 3: Winter of Rebirth', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Igor', 'Tubu',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Space Jame', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('Space Jame: A New legacy', 'Max',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('The Adventure of Sharkboy and Lavagirl in 3-D', 'Prime',0,0);
INSERT INTO movies (`movietitle`,`wheretofind`,`addpeople`,`watched`) VALUES ('17 Again', 'Prime',0,0);