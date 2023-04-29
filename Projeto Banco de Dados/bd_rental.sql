/* bd_fisico_rental: */

create database if not exists bd_retal_pdv
default character set utf8
collate utf8_general_ci;
use bd_rental_pdv;

CREATE TABLE veiculo (
    cod_veiculo int PRIMARY KEY,
    marca_veiculo vachar(50),
    modelo_veiculo vachar(50),
    descicao_veiculo vachar(100),
    ano_veiculo int,
    placa_veiculo vachar(7) UNIQUE,
    fk_categoria_cod_categoria int
);

CREATE TABLE categoria (
    cod_categoria int PRIMARY KEY,
    tipo_catagoria vachar(50)
);

CREATE TABLE cliente (
    cod_cliente int PRIMARY KEY,
    nome_cliente vahcar(100),
    cpf vachar(15) UNIQUE,
    telefone int
);

CREATE TABLE reservas (
    cod_reserva int PRIMARY KEY,
    dt_prev_retirada date,
    hora_prev_retirada time,
    dt_prev_devolucao date,
    hora_prev_devolucao time,
    dt_reserva date,
    fk_cliente_cod_cliente int,
    fk_veiculo_cod_veiculo int,
    fk_agencia_cod_agencia int
);

CREATE TABLE agencia (
    cod_agencia int PRIMARY KEY,
    end_agencia vachar(100),
    contato_agencia int,
    fk_cidade_cod_cidade int
);

CREATE TABLE cidade (
    cod_cidade int PRIMARY KEY,
    nome_cidade vachar(50),
    bairro_cidade vachar(100)
);

CREATE TABLE acao_retirada (
    cod_retirada int PRIMARY KEY,
    dt_retirada date,
    hora_retirada time,
    avaria vahcar(100),
    km_atual int,
    fk_agencia_cod_agencia int
);

CREATE TABLE acao_devolucao (
    hora_devolucao time,
    cod_devolucao int PRIMARY KEY,
    dt_devolucao date,
    avaria vachar(100),
    valor_pago double,
    fk_acao_retirada_cod_retirada int,
    fk_agencia_cod_agencia int
);

CREATE TABLE pagamento (
    cod_pgt int PRIMARY KEY,
    for_pgt vachar(50)
);

CREATE TABLE portal_login (
    id int PRIMARY KEY,
    Nome_completo vachar(100),
    usuario vachar(50),
    senha vachar(50),
    tipo int,
    UNIQUE (usuario, id)
);

CREATE TABLE realiza (
    fk_pagamento_cod_pgt int,
    fk_acao_devolucao_cod_devolucao int
);

CREATE TABLE pode (
    fk_reservas_cod_reserva int,
    fk_acao_retirada_cod_retirada int
);
 
ALTER TABLE veiculo ADD CONSTRAINT FK_veiculo_2
    FOREIGN KEY (fk_categoria_cod_categoria)
    REFERENCES categoria (cod_categoria)
    ON DELETE CASCADE;
 
ALTER TABLE reservas ADD CONSTRAINT FK_reservas_2
    FOREIGN KEY (fk_cliente_cod_cliente)
    REFERENCES cliente (cod_cliente)
    ON DELETE CASCADE;
 
ALTER TABLE reservas ADD CONSTRAINT FK_reservas_3
    FOREIGN KEY (fk_veiculo_cod_veiculo)
    REFERENCES veiculo (cod_veiculo)
    ON DELETE CASCADE;
 
ALTER TABLE reservas ADD CONSTRAINT FK_reservas_4
    FOREIGN KEY (fk_agencia_cod_agencia)
    REFERENCES agencia (cod_agencia)
    ON DELETE CASCADE;
 
ALTER TABLE agencia ADD CONSTRAINT FK_agencia_2
    FOREIGN KEY (fk_cidade_cod_cidade)
    REFERENCES cidade (cod_cidade)
    ON DELETE CASCADE;
 
ALTER TABLE acao_retirada ADD CONSTRAINT FK_acao_retirada_2
    FOREIGN KEY (fk_agencia_cod_agencia)
    REFERENCES agencia (cod_agencia)
    ON DELETE CASCADE;
 
ALTER TABLE acao_devolucao ADD CONSTRAINT FK_acao_devolucao_2
    FOREIGN KEY (fk_acao_retirada_cod_retirada)
    REFERENCES acao_retirada (cod_retirada)
    ON DELETE CASCADE;
 
ALTER TABLE acao_devolucao ADD CONSTRAINT FK_acao_devolucao_3
    FOREIGN KEY (fk_agencia_cod_agencia)
    REFERENCES agencia (cod_agencia)
    ON DELETE CASCADE;
 
ALTER TABLE realiza ADD CONSTRAINT FK_realiza_1
    FOREIGN KEY (fk_pagamento_cod_pgt)
    REFERENCES pagamento (cod_pgt)
    ON DELETE RESTRICT;
 
ALTER TABLE realiza ADD CONSTRAINT FK_realiza_2
    FOREIGN KEY (fk_acao_devolucao_cod_devolucao)
    REFERENCES acao_devolucao (cod_devolucao)
    ON DELETE SET NULL;
 
ALTER TABLE pode ADD CONSTRAINT FK_pode_1
    FOREIGN KEY (fk_reservas_cod_reserva)
    REFERENCES reservas (cod_reserva)
    ON DELETE RESTRICT;
 
ALTER TABLE pode ADD CONSTRAINT FK_pode_2
    FOREIGN KEY (fk_acao_retirada_cod_retirada)
    REFERENCES acao_retirada (cod_retirada)
    ON DELETE RESTRICT;