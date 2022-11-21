CREATE DATABASE project;

USE project;

CREATE TABLE `user` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `no_telp` VARCHAR(15),
    `password` VARCHAR(255)
);

/*DATA DUMMY ADMIN*/
INSERT INTO user VALUES(
    '',     /*ID AUTO INCREMENT KASE KOSONG*/
    '123',  /*NOMOR TELPON*/
    'qwe'   /*PASSWORD*/
);
