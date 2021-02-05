CREATE TABLE scriptures(
 id SERIAL NOT NULL PRIMARY KEY,
 book VARCHAR(100) NOT NULL,
 chapter INT NOT NULL,
 verse INT NOT NULL,
 content VARCHAR(100) NOT NULL
);

INSERT INTO scriptures (book, chapter, verse, content) VALUES( 'JOHN', 1, 5, 'And the alight shineth in bdarkness; and the darkness ccomprehended it not.');
INSERT INTO scriptures (book, chapter, verse, content) VALUES('Doctrine and Covenants', 88, 49, 'The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless,');
INSERT INTO scriptures(book, chapter, verse, content)  VALUES('Doctrine and Covenants', 93, 28, 'Ye were also in the beginning with the Father; that which is aSpirit, even the Spirit of truth');
INSERT INTO scriptures (book, chapter, verse, content) VALUES('Mosiah', 16, 9, 'He is the alight and the life of the world; yea, a light that is endless');




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



INSERT INTO public.boardGame VALUES( 0, 'Smallworld', 'Days of Wonder', 7.3, 'strategy', 2, 5, 'false', 60);
INSERT INTO public.boardGame VALUES(1, 'The Lord of the Rings: Journeys in Middle-Earth','Fantasy Flight Games', 8.1, 'adventure', 1, 5, 'true', 90);

INSERT INTO public.user VALUES(0, 'Eli Bear', 'Oso');

INSERT INTO public.wantToPlay VALUES(0, 0, 1, 'true');

INSERT INTO public.hasPlayed VALUES(1, 0, 0, 'true');

SELECT * FROM public.user;
SELECT * FROM public.boardGame;
SELECT * FROM public.wantToPlay;
SELECT * FROM public.hasPlayed;