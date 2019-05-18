create DATABASE BDusuarios;

use BDusuarios;

CREATE TABLE `user`
(
    `id`       int(11)     NOT NULL,
    `name`     varchar(30) NOT NULL,
    `password` varchar(50) NOT NULL
);

INSERT INTO `user`(`name`, `password`)
VALUES ('user01', '12345678');
INSERT INTO `user`(`name`, `password`)
VALUES ('user02', '87654321');
INSERT INTO `user`(`name`, `password`)
VALUES ('user03', '19559657');
INSERT INTO `user`(`name`, `password`)
VALUES ('user04', '98198147');
INSERT INTO `user`(`name`, `password`)
VALUES ('user05', '12345456');