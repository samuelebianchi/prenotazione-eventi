<?php
require "connect.php";

$crea_tb = $connessione->exec("CREATE TABLE IF NOT EXISTS Eventi (
    IDEvento int(10) NOT NULL AUTO_INCREMENT,
    denominazione varchar(32) NOT NULL,
    citta varchar(32) NOT NULL,
    via varchar(32) NOT NULL,
    tipologia varchar(32) NOT NULL,
    descrizione varchar(64) NOT NULL,
    data_inizio varchar(32) NOT NULL,
    data_fine varchar(32) NOT NULL,
    iscritti INT(10) NOT NULL,
    max_iscritti INT(10) NOT NULL,
    prezzo varchar(32) NOT NULL,
    sito varchar(32) NOT NULL,
    recapito varchar(16) NOT NULL,    
    PRIMARY KEY (IDEvento)
  )");