create database if not exists pet_rescue_db;
use pet_rescue_db;

create table if not exists users (
	id tinyint unsigned primary key auto_increment,
    firstname varchar(45) not null,
    lastname varchar(45) not null,
    email varchar(110) not null,
    number varchar(13) not null,
    genero varchar(15) not null,
    password char(30) not null
);

create table if not exists OwnerlessAnimal (
	id tinyint unsigned primary key auto_increment,
    specie varchar(30) not null,
    age tinyint,
    description text not null,
    additionalinfo text,
    user_number varchar(13) not null,
    constraint fk_users foreign key (user_number) references users(number)
);

create table if not exists LostPet (
	id tinyint unsigned primary key auto_increment,
    pet_owner tinyint unsigned not null,
    petname varchar(110) not null,
    specie varchar(30) not null,
    age tinyint not null,
    description text not null,
    additionalinfo text not null,
    constraint fk_pet_owner foreign key (pet_owner) references users(id)
);

/*create table if not exists institution (
	id tinyint unsigned primary key auto_increment,
    institutename varchar(110) not null,
    institutetype varchar(110) not null,
    responsible varchar(110) not null,
    contact varchar(13) not null,
    constraint fk_responsible foreign key (responsible) references users(id),
    constraint fk_contact foreign key (contact) references users(number)
); */

select * from users;
/*	select * from OwnerlessAnimal;
	select * from LostPet;
	select * from institution	*/