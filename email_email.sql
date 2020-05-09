create table email
(
    id          int auto_increment
        primary key,
    username    varchar(50)                          not null,
    email       varchar(100)                         not null,
    auth_key    varchar(100)                         not null,
    validate    tinyint(1) default 0                 null,
    crated_add  timestamp  default CURRENT_TIMESTAMP null,
    abdated_add timestamp  default CURRENT_TIMESTAMP null,
    constraint email_email_uindex
        unique (email)
);

INSERT INTO email.email (id, username, email, auth_key, validate, crated_add, abdated_add) VALUES (18, 'htre', 'tgrfe@fcg', 'z94rJPNuwdptO9BRK9Zv', 1, '2020-05-09 11:50:29', '2020-05-09 11:50:41');
INSERT INTO email.email (id, username, email, auth_key, validate, crated_add, abdated_add) VALUES (23, 'ghjk', 'vkolyasev1999@mail.ru', '7jm98VddI42nfwsUdluT', 1, '2020-05-09 12:55:56', '2020-05-09 12:56:19');