
CREATE TABLE public.user(
 id SERIAL NOT NULL PRIMARY KEY,
 username VARCHAR(100) NOT NULL UNIQUE,
 displayName VARCHAR(100) NOT NULL
);

CREATE TABLE public.boardGame(
	id SERIAL NOT NULL PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	author VARCHAR(100) NOT NULL,
	rating FLOAT(3) NOT NULL,
	type VARCHAR(100) NOT NULL,
	playersMin SMALLINT NOT NULL,
	playersMax SMALLINT NOT NULL,
	cooperative BOOLEAN NOT NULL,
	length int
);


CREATE TABLE public.wantToPlay (
	id SERIAL NOT NULL PRIMARY KEY,
	userID INT NOT NULL REFERENCES public.user(id),
	boardID INT NOT NULL REFERENCES public.boardGame(id),
	wantToPlay BOOLEAN NOT NULL
);

CREATE TABLE public.hasPlayed (
	id SERIAL NOT NULL PRIMARY KEY,
	userID INT NOT NULL REFERENCES public.user(id),
	boardID INT NOT NULL REFERENCES public.boardGame(id),
	hasPlayed BOOLEAN NOT NULL
);


INSERT INTO public.boardGame (title, author, rating, type, playersMin, playersMax, cooperative, length) VALUES ('Smallworld', 'Days of Wonder', 7.3, 'Strategy', 2, 5, 'false', 60);
INSERT INTO public.boardGame (title, author, rating, type, playersMin, playersMax, cooperative, length) VALUES ('GloomHaven', 'Cephalofair Games', 8.8, 'Adventure', 1, 4, 'true', 90);
INSERT INTO public.boardGame (title, author, rating, type, playersMin, playersMax, cooperative, length) VALUES ('The Lord of the Rings: Journeys in Middle-Earth','Fantasy Flight Games', 8.1, 'adventure', 1, 5, 'true', 90);
INSERT INTO public.boardGame (title, author, rating, type, playersMin, playersMax, cooperative, length) VALUES ('The Lord of the Rings: Journeys in Middle-Earth','Fantasy Flight Games', 8.1, 'adventure', 1, 5, 'true', 90);
INSERT INTO public.boardGame (title, author, rating, type, playersMin, playersMax, cooperative, length) VALUES ('Hellapagos','999 Games', 6.6, 'survival', 3, 12, 'true', 20);
INSERT INTO public.boardGame (title, author, rating, type, playersMin, playersMax, cooperative, length) VALUES ('Coup','Indie Boards and Cards', 7.0, 'Deduction', 2, 6, 'false', 15);


INSERT INTO public.wantToPlay (userID, boardID, wantToPlay) VALUES(1, 2, 'true');



INSERT INTO public.hasPlayed (userID, boardID, hasPlayed) VALUES(1, 1, 'true');
INSERT INTO public.hasPlayed (userID, boardID, hasPlayed) VALUES(1, 3, 'true');
INSERT INTO public.hasPlayed (userID, boardID, hasPlayed) VALUES(1, 4, 'true');
INSERT INTO public.hasPlayed (userID, boardID, hasPlayed) VALUES(1, 5, 'true');






INSERT INTO public.user (username, displayName) VALUES( 'Eli', 'Oso');
INSERT INTO public.user (username, displayName) VALUES( 'Morgan', 'FaerBear');
INSERT INTO public.user (username, displayName) VALUES( 'Andrew', 'Andross');
INSERT INTO public.user (username, displayName) VALUES( 'Maggie', 'Muggles');
INSERT INTO public.user (username, displayName) VALUES( 'Micah', 'Mighty Man');

SELECT * FROM public.user;
SELECT * FROM public.boardGame;
SELECT * FROM public.wantToPlay;
SELECT * FROM public.hasPlayed;


INSERT INTO topic (name) VALUES( 'Faith');
INSERT INTO topic (name) VALUES( 'Sacrifice');
INSERT INTO topic (name) VALUES( 'Charity');


CREATE TABLE scriptures_topic(
	id SERIAL NOT NULL PRIMARY KEY,
	scripture_id INT NOT NULL REFERENCES topic(id),
	topic_id INT NOT NULL REFERENCES scriptures(id)
);

INSERT INTO public.boardgame(title, author, rating, type, playersmin, playersmax, cooperative, length) VALUES (:title, :author, :rating, :type, :playersmin, :playersmax, :cooperative, :length);
