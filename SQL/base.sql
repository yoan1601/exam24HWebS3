create database immo;

\c immo;

create table habitation (
    id serial primary key,
    nom VARCHAR,
    idCategorie int,
    nbChambre int,
    loyer numeric,
    quartier VARCHAR,
    descri VARCHAR,
    idPhotoALaUne int
);

insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (1, 3, 120.5, 'ivato', 'Chambres Famille Classiques');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (2, 4, 85, 'analakely', 'Chambre dans chambre de hotes');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (3, 5, 98, 'amparibe', 'Chambre de hotes de luxe deux fois centrale avec balcon');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (4, 1, 100, 'ambanidia', 'Daybreak Guest Room');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (5, 3, 110, 'andoharanofotsy', 'Chambre Deluxe avec lit King Size');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (1, 3, 120.5, 'ivato', 'Chambres Famille Classiques');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (2, 4, 85, 'analakely', 'Chambre dans chambre de hotes');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (3, 5, 98, 'amparibe', 'Chambre de hotes de luxe deux fois centrale avec balcon');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (4, 1, 100, 'ambanidia', 'Daybreak Guest Room');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (5, 3, 110, 'andoharanofotsy', 'Chambre Deluxe avec lit King Size');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (1, 3, 120.5, 'ivato', 'Chambres Famille Classiques');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (2, 4, 85, 'analakely', 'Chambre dans chambre de hotes');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (3, 5, 98, 'amparibe', 'Chambre de hotes de luxe deux fois centrale avec balcon');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (4, 1, 100, 'ambanidia', 'Daybreak Guest Room');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (5, 3, 110, 'andoharanofotsy', 'Chambre Deluxe avec lit King Size');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (1, 3, 120.5, 'ivato', 'Chambres Famille Classiques');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (2, 4, 85, 'analakely', 'Chambre dans chambre de hotes');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (3, 5, 98, 'amparibe', 'Chambre de hotes de luxe deux fois centrale avec balcon');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (4, 1, 100, 'ambanidia', 'Daybreak Guest Room');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (5, 3, 110, 'andoharanofotsy', 'Chambre Deluxe avec lit King Size');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (1, 3, 120.5, 'ivato', 'Chambres Famille Classiques');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (2, 4, 85, 'analakely', 'Chambre dans chambre de hotes');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (3, 5, 98, 'amparibe', 'Chambre de hotes de luxe deux fois centrale avec balcon');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (4, 1, 100, 'ambanidia', 'Daybreak Guest Room');
insert into habitation (idCategorie, nbChambre, loyer, quartier, descri) values (5, 3, 110, 'andoharanofotsy', 'Chambre Deluxe avec lit King Size');

update habitation set nom = 'my home 1' where id = 1;
update habitation set nom = 'my home 2' where id = 2;
update habitation set nom = 'my home 3' where id = 3;
update habitation set nom = 'my home 4' where id = 4;
update habitation set nom = 'my home 5' where id = 5;
update habitation set nom = 'my home 6' where id = 6;
update habitation set nom = 'my home 7' where id = 7;
update habitation set nom = 'my home 8' where id = 8;
update habitation set nom = 'my home 9' where id = 9;
update habitation set nom = 'my home 10' where id = 10;
update habitation set nom = 'my home 11' where id = 11;
update habitation set nom = 'my home 12' where id = 12;
update habitation set nom = 'my home 13' where id = 13;
update habitation set nom = 'my home 14' where id = 14;
update habitation set nom = 'my home 15' where id = 15;
update habitation set nom = 'my home 16' where id = 16;
update habitation set nom = 'my home 17' where id = 17;
update habitation set nom = 'my home 18' where id = 18;
update habitation set nom = 'my home 19' where id = 19;
update habitation set nom = 'my home 20' where id = 20;
update habitation set nom = 'my home 21' where id = 21;
update habitation set nom = 'my home 22' where id = 22;
update habitation set nom = 'my home 23' where id = 23;
update habitation set nom = 'my home 24' where id = 24;
update habitation set nom = 'my home 25' where id = 25;

create table photo (
    id serial primary key,
    idhabitation int,
    repertoire VARCHAR
);

insert into photo (idhabitation, repertoire) values (1, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (1, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (1, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (1, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (1, 'images\maison1.PNG');

insert into photo (idhabitation, repertoire) values (2, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (2, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (2, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (2, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (2, 'images\maison2.PNG');

insert into photo (idhabitation, repertoire) values (3, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (3, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (3, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (3, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (3, 'images\maison3.PNG');

insert into photo (idhabitation, repertoire) values (4, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (4, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (4, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (4, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (4, 'images\maison4.PNG');

insert into photo (idhabitation, repertoire) values (5, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (5, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (5, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (5, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (5, 'images\maison5.PNG');

insert into photo (idhabitation, repertoire) values (6, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (6, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (6, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (6, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (6, 'images\maison1.PNG');

insert into photo (idhabitation, repertoire) values (7, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (7, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (7, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (7, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (7, 'images\maison2.PNG');

insert into photo (idhabitation, repertoire) values (8, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (8, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (8, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (8, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (8, 'images\maison3.PNG');

insert into photo (idhabitation, repertoire) values (9, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (9, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (9, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (9, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (9, 'images\maison4.PNG');

insert into photo (idhabitation, repertoire) values (10, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (10, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (10, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (10, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (10, 'images\maison5.PNG');

insert into photo (idhabitation, repertoire) values (11, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (11, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (11, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (11, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (11, 'images\maison1.PNG');

insert into photo (idhabitation, repertoire) values (12, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (12, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (12, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (12, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (12, 'images\maison2.PNG');

insert into photo (idhabitation, repertoire) values (13, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (13, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (13, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (13, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (13, 'images\maison3.PNG');

insert into photo (idhabitation, repertoire) values (14, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (14, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (14, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (14, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (14, 'images\maison4.PNG');

insert into photo (idhabitation, repertoire) values (15, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (15, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (15, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (15, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (15, 'images\maison5.PNG');

insert into photo (idhabitation, repertoire) values (16, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (16, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (16, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (16, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (16, 'images\maison1.PNG');

insert into photo (idhabitation, repertoire) values (17, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (17, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (17, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (17, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (17, 'images\maison2.PNG');

insert into photo (idhabitation, repertoire) values (18, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (18, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (18, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (18, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (18, 'images\maison3.PNG');

insert into photo (idhabitation, repertoire) values (19, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (19, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (19, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (19, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (19, 'images\maison4.PNG');

insert into photo (idhabitation, repertoire) values (20, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (20, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (20, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (20, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (20, 'images\maison5.PNG');

insert into photo (idhabitation, repertoire) values (21, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (21, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (21, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (21, 'images\maison1.PNG');
insert into photo (idhabitation, repertoire) values (21, 'images\maison1.PNG');

insert into photo (idhabitation, repertoire) values (22, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (22, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (22, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (22, 'images\maison2.PNG');
insert into photo (idhabitation, repertoire) values (22, 'images\maison2.PNG');

insert into photo (idhabitation, repertoire) values (23, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (23, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (23, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (23, 'images\maison3.PNG');
insert into photo (idhabitation, repertoire) values (23, 'images\maison3.PNG');

insert into photo (idhabitation, repertoire) values (24, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (24, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (24, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (24, 'images\maison4.PNG');
insert into photo (idhabitation, repertoire) values (24, 'images\maison4.PNG');

insert into photo (idhabitation, repertoire) values (25, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (25, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (25, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (25, 'images\maison5.PNG');
insert into photo (idhabitation, repertoire) values (25, 'images\maison5.PNG');


update habitation set idPhotoALaUne = 1 where id = 1;
update habitation set idPhotoALaUne = 6 where id = 2;
update habitation set idPhotoALaUne = 11 where id = 3;
update habitation set idPhotoALaUne = 16 where id = 4;
update habitation set idPhotoALaUne = 21 where id = 5;
update habitation set idPhotoALaUne = 26 where id = 6;
update habitation set idPhotoALaUne = 31 where id = 7;
update habitation set idPhotoALaUne = 36 where id = 8;
update habitation set idPhotoALaUne = 41 where id = 9;
update habitation set idPhotoALaUne = 46 where id = 10;
update habitation set idPhotoALaUne = 51 where id = 11;
update habitation set idPhotoALaUne = 56 where id = 12;
update habitation set idPhotoALaUne = 61 where id = 13;
update habitation set idPhotoALaUne = 66 where id = 14;
update habitation set idPhotoALaUne = 71 where id = 15;
update habitation set idPhotoALaUne = 76 where id = 16;
update habitation set idPhotoALaUne = 81 where id = 17;
update habitation set idPhotoALaUne = 86 where id = 18;
update habitation set idPhotoALaUne = 91 where id = 19;
update habitation set idPhotoALaUne = 96 where id = 20;
update habitation set idPhotoALaUne = 101 where id = 21;
update habitation set idPhotoALaUne = 106 where id = 22;
update habitation set idPhotoALaUne = 111 where id = 23;
update habitation set idPhotoALaUne = 116 where id = 24;
update habitation set idPhotoALaUne = 121 where id = 25;

create table utilisateur (
    id serial primary key,
    email VARCHAR,
    nom VARCHAR,
    mdp VARCHAR,
    tel VARCHAR,
    isAdmin int
);

insert into utilisateur (email, nom, mdp, tel, isAdmin) values ('admin@gmail.com', 'admin', '1234', '0348512269', 1);
insert into utilisateur (email, nom, mdp, tel, isAdmin) values ('client1@gmail.com', 'client1', '1234', '0348512269', 0);
insert into utilisateur (email, nom, mdp, tel, isAdmin) values ('client2@gmail.com', 'client2', '1234', '0348512269', 0);
insert into utilisateur (email, nom, mdp, tel, isAdmin) values ('client3@gmail.com', 'client3', '1234', '0348512269', 0);
insert into utilisateur (email, nom, mdp, tel, isAdmin) values ('client4@gmail.com', 'client4', '1234', '0348512269', 0);

create table reservation (
    id serial primary key,
    datearrivee date,
    datedepart date,
    idhabitation int,
    idUtilisateur int
);

insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-12-14', '2022-12-20', 1, 1);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-02-02', '2022-02-05', 1, 2);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-03-03', '2022-03-10', 1, 3);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-04-01', '2022-04-05', 1, 4);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-05-01', '2022-06-05', 1, 5);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-02-03', '2022-02-08', 2, 1);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-03-15', '2022-03-20', 3, 2);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-04-15', '2022-04-20', 4, 3);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-05-15', '2022-05-20', 5, 4);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-06-15', '2022-06-20', 6, 5);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-07-15', '2022-07-20', 7, 1);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-01-15', '2022-01-20', 8, 2);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-02-15', '2022-02-20', 9, 3);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-03-15', '2022-03-20', 10, 4);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-04-15', '2022-04-20', 11, 5);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-05-15', '2022-05-20', 12, 1);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-01-15', '2022-01-20', 13, 2);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-02-15', '2022-02-20', 14, 3);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-03-15', '2022-03-20', 15, 4);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-04-15', '2022-04-20', 16, 5);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-05-15', '2022-05-20', 17, 1);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-08-15', '2022-08-20', 18, 2);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-09-15', '2022-09-20', 19, 3);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-10-15', '2022-10-20', 20, 4);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-11-15', '2022-11-20', 21, 5);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-04-15', '2022-04-20', 22, 1);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-12-15', '2022-12-20', 23, 2);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-09-15', '2022-09-20', 24, 3);
insert into reservation (datearrivee, datedepart, idhabitation, idUtilisateur) values ('2022-11-15', '2022-11-20', 25, 4);

update reservation set idUtilisateur = 1 where idhabitation = 1;
update reservation set idUtilisateur = 2 where id = 2;
update reservation set idUtilisateur = 3 where id = 3;
update reservation set idUtilisateur = 4 where id = 4;
update reservation set idUtilisateur = 5 where id = 5;
update reservation set idUtilisateur = 1 where id = 6;
update reservation set idUtilisateur = 2 where id = 7;
update reservation set idUtilisateur = 3 where id = 8;
update reservation set idUtilisateur = 4 where id = 9;
update reservation set idUtilisateur = 5 where id = 10;
update reservation set idUtilisateur = 1 where id = 11;
update reservation set idUtilisateur = 2 where id = 12;
update reservation set idUtilisateur = 3 where id = 13;
update reservation set idUtilisateur = 4 where id = 14;
update reservation set idUtilisateur = 5 where id = 15;
update reservation set idUtilisateur = 1 where id = 16;
update reservation set idUtilisateur = 2 where id = 17;
update reservation set idUtilisateur = 3 where id = 18;
update reservation set idUtilisateur = 4 where id = 19;
update reservation set idUtilisateur = 5 where id = 20;
update reservation set idUtilisateur = 1 where id = 21;
update reservation set idUtilisateur = 2 where id = 22;
update reservation set idUtilisateur = 3 where id = 23;
update reservation set idUtilisateur = 4 where id = 24;

create table categorie (
    id serial primary key,
    nomCategorie VARCHAR
);

insert into categorie (nomCategorie) values ('maison');
insert into categorie (nomCategorie) values ('studio');
insert into categorie (nomCategorie) values ('appartement');
insert into categorie (nomCategorie) values ('villa');
insert into categorie (nomCategorie) values ('bungalow');

alter table photo 
add constraint fk_habitation_photo
foreign key (idhabitation)
references habitation (id);

alter table habitation 
add constraint fk_categorie_habitation
foreign key (idCategorie)
references categorie (id);

alter table reservation 
add constraint fk_reservation_habitation
foreign key (idhabitation)
references habitation (id);

