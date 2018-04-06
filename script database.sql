drop database db_dream;
create database db_dream;
use db_dream;
create table participantes
(
    par_id int not null auto_increment,
    par_nombre varchar(250) not null,
    par_apelli varchar(250) not null,
    par_foto varchar(250) not null,
    primary key(par_id)
);
insert into participantes values
(0, 'Zebek', 'Adriano', './View/images/img_participante_1.png'),
(0, 'Stalin', 'Escobar', './View/images/img_participante_2.png'),
(0, 'Henry', 'Zurita', './View/images/img_participante_3.png'),
(0, 'Paty', 'Amaya', './View/images/img_participante_4.png'),
(0, 'Pablo', 'Santos', './View/images/img_participante_5.png'),
(0, 'David', 'Arias', './View/images/img_participante_6.png'),
(0, 'Monika', 'Tamayo', './View/images/img_participante_7.png'),
(0, 'Gabo', 'Rojas', './View/images/img_participante_8.png'),
(0, 'Ana', 'Gordillo', './View/images/img_participante_9.png'),
(0, 'David', 'Cabrera', './View/images/img_participante_10.png'),
(0, 'Rafael', 'Ospina', './View/images/img_participante_11.png'),
(0, 'Henry', 'Manosalvas', './View/images/img_participante_12.png');