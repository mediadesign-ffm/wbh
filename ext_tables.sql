CREATE TABLE fe_users (
    ansprechpartner tinytext,
    firmenzusatz tinytext,
    sonstigemerkmale text,
    beratungszeiten text,
    freigabe tinyint(3) DEFAULT '0' NOT NULL,
    gesellschaftsform varchar(255) DEFAULT '' NOT NULL,
    geschaeftsfuehrer varchar(255) DEFAULT '' NOT NULL,
    hauptzielgruppen varchar(255) DEFAULT '' NOT NULL,
    gruendungsjahr varchar(255) DEFAULT '' NOT NULL,
    unterrichtsformen tinytext,
);