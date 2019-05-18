CREATE DATABASE app_gerenciador;

use app_gerenciador;

CREATE TABLE tarefas
(
    `id`         INT(30)     NOT NULL AUTO_INCREMENT,
    `tarefa`    VARCHAR(50) NOT NULL,
    `prioridade` INT(50)     NOT NULL,
    `criado_em`  DATETIME    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);
