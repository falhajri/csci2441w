# Converted with pg2mysql-1.9
# Converted on Wed, 04 Apr 2012 22:57:29 +0000
# Lightbox Technologies Inc. http://www.lightbox.ca

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone="+00:00";

CREATE TABLE command (
    commandid int(11) not null auto_increment,
    name varchar(35) NOT NULL,
    `type` varchar(35) NOT NULL,
    aor varchar(35) NOT NULL,
    parent int(11),
    primary key(commandid)
) TYPE=MyISAM;

CREATE TABLE commandowners (
    command int(11) NOT NULL,
    emplid int(11) NOT NULL
) TYPE=MyISAM;

CREATE TABLE dutystation (
    dutystationid int(11) not null auto_increment,
    name varchar(255) NOT NULL,
    location point NOT NULL,
primary key(dutystationid)
) TYPE=MyISAM;

CREATE TABLE person (
    emplid int(11) unique NOT NULL,
    commandid int(11) NOT NULL,
    homelocation point NOT NULL,
    stationid int(11) NOT NULL,
    first varchar(255) NOT NULL,
    last varchar(255) NOT NULL,
    status int(11) NOT NULL,
primary key (emplid)
) TYPE=MyISAM;

CREATE TABLE roleassignment (
    roleassignmentid int(11) NOT NULL auto_increment,
    roleid int(11) NOT NULL,
    subordinate int(11) NOT NULL,
    userid int(11) NOT NULL,
    command int(11) NOT NULL,
primary key(roleassignmentid)
) TYPE=MyISAM;

CREATE TABLE roles (
    rolesid int(11) not null auto_increment,
    description varchar(255) NOT NULL,
primary key(rolesid)
) TYPE=MyISAM;

CREATE TABLE skill (
    skillid int(11) not null auto_increment,
    skill varchar(255) NOT NULL,
    helptext text NOT NULL,
    owner int(11) NOT NULL,
primary key(skillid)
) TYPE=MyISAM;

CREATE TABLE skillentry (
    skillentryid int(11) not null auto_increment,
    empid int(11) NOT NULL,
    skillid int(11) NOT NULL,
    lastupdated date NOT NULL,
    enteredby varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL,
primary key (skillentryid)
) TYPE=MyISAM;

CREATE TABLE skillquestions (
    id int(11) not null auto_increment,
    commandid int(11) NOT NULL,
    skillid int(11) NOT NULL,
    effectivedate date NOT NULL,
    subordinate bool NOT NULL,
primary key(id)
) TYPE=MyISAM;

CREATE TABLE surveychoices (
    id int(11) not null auto_increment,
    displayname varchar(255) NOT NULL,
    value varchar(255) NOT NULL,
    surveyquestionid int(11) NOT NULL,
primary key(id)
) TYPE=MyISAM;

CREATE TABLE surveyquestionresponsechoice (
    id int(11) not null auto_increment,
    skillentryid int(11) NOT NULL,
    surveychoiceid int(11) NOT NULL,
primary key(id)
) TYPE=MyISAM;

CREATE TABLE surveyquestionresponsetext (
    id int(11) not null auto_increment,
    skillentryid int(11) NOT NULL,
    surveyquestionid int(11) NOT NULL,
    value text NOT NULL,
primary key(id)
) TYPE=MyISAM;

CREATE TABLE surveyquestions (
    surveyquestionsid int(11) not null auto_increment,
    `type` int(11) NOT NULL,
    questiontext varchar(255) NOT NULL,
    helptext text NOT NULL,
    required bool NOT NULL,
    skillquestionid int(11) NOT NULL,
primary key(surveyquestionsid)
) TYPE=MyISAM;

CREATE TABLE tasks (
    tasksid int(11) not null auto_increment,
    name varchar(255) NOT NULL,
    roleid int(11) NOT NULL,
primary key (tasksid)
) TYPE=MyISAM;

CREATE TABLE users (
    userid int(11) not null auto_increment,
    emplid int(11) NOT NULL,
    passwordhash text NOT NULL,
primary key(userid)
) TYPE=MyISAM;

INSERT INTO command VALUES (1, 'Command 1                          ', 'AUX                                ', 'AOR                                ', NULL);
INSERT INTO command VALUES (2, 'Command 2                          ', 'AUX                                ', 'AOR                                ', 1);
INSERT INTO command VALUES (3, 'Command 3                          ', 'AUX                                ', 'AOR                                ', 1);
INSERT INTO command VALUES (4, 'Command 4                          ', 'AUX                                ', 'AOR                                ', 1);
INSERT INTO command VALUES (5, 'Command 5                          ', 'AUX                                ', 'AOR                                ', 1);
INSERT INTO command VALUES (6, 'Command 6                          ', 'ACTIVE                             ', 'Some AOR                           ', 1);
INSERT INTO commandowners VALUES (1, 1);
INSERT INTO commandowners VALUES (2, 2);
INSERT INTO commandowners VALUES (3, 3);
INSERT INTO commandowners VALUES (4, 4);
INSERT INTO commandowners VALUES (5, 5);
INSERT INTO dutystation VALUES(0, 'DS0', POINT(37,144));
INSERT INTO dutystation VALUES(1, 'DS1', POINT(37,144));
INSERT INTO dutystation VALUES(2, 'DS2', POINT(37,144));
INSERT INTO dutystation VALUES(3, 'DS3', POINT(37,144));
INSERT INTO dutystation VALUES(4, 'DS4', POINT(37,144));
INSERT INTO dutystation VALUES(5, 'DS5', POINT(37,144));

/*INSERT INTO dutystation VALUES (0, 'DS0', '(37,144)');
INSERT INTO dutystation VALUES (2, 'DS1', '(38.7999999999999972,77)');
INSERT INTO dutystation VALUES (3, 'DS2', '(38.7999999999999972,77)');
INSERT INTO dutystation VALUES (4, 'DS3', '(38.7999999999999972,77)');
INSERT INTO dutystation VALUES (5, 'DS4', '(38.7999999999999972,77)');
INSERT INTO dutystation VALUES (6, 'DS5', '(39.7999999999999972,78)');
INSERT INTO dutystation VALUES (7, 'DS6', '(39.7999999999999972,78)');
INSERT INTO dutystation VALUES (8, 'DS7', '(39.7999999999999972,78)');
INSERT INTO dutystation VALUES (9, 'DS8', '(39.7999999999999972,78)');
INSERT INTO dutystation VALUES (10, 'DS9', '(39.7999999999999972,78)');
INSERT INTO dutystation VALUES (11, 'DS10', '(40.7999999999999972,79)');
INSERT INTO dutystation VALUES (12, 'DS11', '(40.7999999999999972,79)');
INSERT INTO dutystation VALUES (13, 'DS12', '(40.7999999999999972,79)');
INSERT INTO dutystation VALUES (14, 'DS13', '(40.7999999999999972,79)');
INSERT INTO dutystation VALUES (15, 'DS14', '(40.7999999999999972,79)');
INSERT INTO dutystation VALUES (16, 'DS15', '(41.7999999999999972,80)');
INSERT INTO dutystation VALUES (17, 'DS16', '(41.7999999999999972,80)');
INSERT INTO dutystation VALUES (18, 'DS17', '(41.7999999999999972,80)');
INSERT INTO dutystation VALUES (19, 'DS18', '(41.7999999999999972,80)');
INSERT INTO dutystation VALUES (20, 'DS19', '(41.7999999999999972,80)');
INSERT INTO dutystation VALUES (21, 'DS20', '(42.7999999999999972,81)');
INSERT INTO dutystation VALUES (22, 'DS21', '(42.7999999999999972,81)');
INSERT INTO dutystation VALUES (23, 'DS22', '(42.7999999999999972,81)');
INSERT INTO dutystation VALUES (24, 'DS23', '(42.7999999999999972,81)');
INSERT INTO dutystation VALUES (25, 'DS24', '(42.7999999999999972,81)');
INSERT INTO dutystation VALUES (26, 'DS25', '(43.7999999999999972,82)');
INSERT INTO dutystation VALUES (27, 'DS26', '(43.7999999999999972,82)');
INSERT INTO dutystation VALUES (28, 'DS27', '(43.7999999999999972,82)');
INSERT INTO dutystation VALUES (29, 'DS28', '(43.7999999999999972,82)');
INSERT INTO dutystation VALUES (30, 'DS29', '(43.7999999999999972,82)');
INSERT INTO dutystation VALUES (31, 'DS30', '(44.7999999999999972,83)');
INSERT INTO dutystation VALUES (32, 'DS31', '(44.7999999999999972,83)');
INSERT INTO dutystation VALUES (33, 'DS32', '(44.7999999999999972,83)');
INSERT INTO dutystation VALUES (34, 'DS33', '(44.7999999999999972,83)');
INSERT INTO dutystation VALUES (35, 'DS34', '(44.7999999999999972,83)');
INSERT INTO dutystation VALUES (36, 'DS35', '(45.7999999999999972,84)');
INSERT INTO dutystation VALUES (37, 'DS36', '(45.7999999999999972,84)');
INSERT INTO dutystation VALUES (38, 'DS37', '(45.7999999999999972,84)');
INSERT INTO dutystation VALUES (39, 'DS38', '(45.7999999999999972,84)');
INSERT INTO dutystation VALUES (40, 'DS39', '(45.7999999999999972,84)');
INSERT INTO dutystation VALUES (41, 'DS40', '(46.7999999999999972,85)');
INSERT INTO dutystation VALUES (42, 'DS41', '(46.7999999999999972,85)');
INSERT INTO dutystation VALUES (43, 'DS42', '(46.7999999999999972,85)');
INSERT INTO dutystation VALUES (44, 'DS43', '(46.7999999999999972,85)');
INSERT INTO dutystation VALUES (45, 'DS44', '(46.7999999999999972,85)');
INSERT INTO dutystation VALUES (46, 'DS45', '(47.7999999999999972,86)');
INSERT INTO dutystation VALUES (47, 'DS46', '(47.7999999999999972,86)');
INSERT INTO dutystation VALUES (48, 'DS47', '(47.7999999999999972,86)');
INSERT INTO dutystation VALUES (49, 'DS48', '(47.7999999999999972,86)');
INSERT INTO dutystation VALUES (50, 'DS49', '(47.7999999999999972,86)');
INSERT INTO dutystation VALUES (51, 'DS50', '(48.7999999999999972,87)');*/
INSERT INTO person VALUES (1, 1, POINT(37,144), 0, 'Some', 'Person                                                                                                                 ', 1);
INSERT INTO person VALUES (2, 1, POINT(37,144), 0, 'Another                                                                                                                ', 'Person                                                                                                                 ', 1);
INSERT INTO person VALUES (3, 1, POINT(37,144), 0, 'Yetanother                                                                                                             ', 'Person                                                                                                                 ', 1);
INSERT INTO person VALUES (4, 1, POINT(37,144), 0, 'Ima ', 'Person                                                                                                                 ', 1);
INSERT INTO person VALUES (5, 1, POINT(37,144), 0, 'Imalso                                                                                                                 ', 'Person                                                                                                                 ', 1);
INSERT INTO roleassignment VALUES (2, 1, 0, 1, 1);
INSERT INTO roleassignment VALUES (3, 1, 0, 2, 1);
INSERT INTO roleassignment VALUES (4, 1, 0, 3, 1);
INSERT INTO roleassignment VALUES (6, 3, 0, 4, 1);
INSERT INTO roles VALUES (1, 'Member                                                                                                                 ');
INSERT INTO roles VALUES (2, 'Command Read-Only                                                                                                      ');
INSERT INTO roles VALUES (3, 'Command Read-Write                                                                                                     ');
INSERT INTO roles VALUES (4, 'Command Superuser                                                                                                      ');
INSERT INTO roles VALUES (5, 'Global Superuser                                                                                                       ');
INSERT INTO skill VALUES (1, 'Skill 1                                                                                                                ', 'Help Text', 1);
INSERT INTO skill VALUES (2, 'Skill 2                                                                                                                ', 'Help Text', 1);
INSERT INTO skill VALUES (3, 'Skill 3                                                                                                                ', 'Help Text', 1);
INSERT INTO skill VALUES (4, 'Skill 4                                                                                                                ', 'Help Text', 1);
INSERT INTO skill VALUES (5, 'Skill 5                                                                                                                ', 'Help Text', 1);
INSERT INTO skillentry VALUES (1, 1, 1, '2012-03-29', '1   ', '1   ');
INSERT INTO skillentry VALUES (2, 1, 2, '2012-03-29', '1   ', '1   ');
INSERT INTO skillentry VALUES (3, 3, 2, '2012-03-29', '1   ', '1   ');
INSERT INTO skillentry VALUES (4, 2, 2, '2012-03-29', '1   ', '1   ');
INSERT INTO skillentry VALUES (5, 4, 5, '2012-03-29', '1   ', '1   ');
INSERT INTO skillentry VALUES (6, 4, 4, '2012-03-29', '1   ', '1   ');
INSERT INTO skillquestions VALUES (1, 1, 1, '2012-01-01', true);
INSERT INTO skillquestions VALUES (2, 2, 2, '2012-01-01', true);
INSERT INTO skillquestions VALUES (3, 3, 2, '2012-01-01', true);
INSERT INTO skillquestions VALUES (4, 3, 4, '2012-01-01', true);
INSERT INTO skillquestions VALUES (5, 4, 4, '2012-01-01', true);
INSERT INTO skillquestions VALUES (6, 5, 4, '2012-01-01', true);
INSERT INTO surveychoices VALUES (7, 'Choice4                                                                                                                ', 'whoa', 3);
INSERT INTO surveychoices VALUES (8, 'Choice5                                                                                                                ', 'whoo', 4);
INSERT INTO surveychoices VALUES (9, 'Choice3                                                                                                                ', 'whoo', 5);
INSERT INTO surveychoices VALUES (10, 'Choice2                                                                                                                ', 'whoohoo                                                                                                                ', 6);
INSERT INTO surveychoices VALUES (11, 'Choice1                                                                                                                ', 'nope', 7);
INSERT INTO surveyquestionresponsechoice VALUES (2, 1, 7);
INSERT INTO surveyquestionresponsechoice VALUES (3, 1, 8);
INSERT INTO surveyquestionresponsechoice VALUES (4, 1, 9);
INSERT INTO surveyquestionresponsechoice VALUES (5, 1, 10);
INSERT INTO surveyquestionresponsechoice VALUES (6, 1, 11);
INSERT INTO surveyquestionresponsetext VALUES (1, 1, 3, 'freetext');
INSERT INTO surveyquestionresponsetext VALUES (2, 2, 4, 'freertext');
INSERT INTO surveyquestionresponsetext VALUES (3, 3, 5, 'evenfreertext');
INSERT INTO surveyquestionresponsetext VALUES (4, 4, 6, 'evenmorefreertext');
INSERT INTO surveyquestionresponsetext VALUES (5, 5, 7, 'freesttext');
INSERT INTO surveyquestions VALUES (3, 1, 'The question?                                                                                                          ', 'The Answer.', true, 1);
INSERT INTO surveyquestions VALUES (4, 1, 'The question?                                                                                                          ', 'The Answer.', true, 2);
INSERT INTO surveyquestions VALUES (5, 1, 'The question?                                                                                                          ', 'The Answer.', true, 3);
INSERT INTO surveyquestions VALUES (6, 1, 'The question?                                                                                                          ', 'The Answer.', true, 4);
INSERT INTO surveyquestions VALUES (7, 1, 'The question?                                                                                                          ', 'The Answer.', true, 5);
INSERT INTO tasks VALUES (1, 'view_self                                                                                                              ', 1);
INSERT INTO tasks VALUES (2, 'view_user                                                                                                              ', 2);
INSERT INTO tasks VALUES (3, 'view_user                                                                                                              ', 3);
INSERT INTO tasks VALUES (4, 'view_user                                                                                                              ', 4);
INSERT INTO tasks VALUES (5, 'view_user                                                                                                              ', 5);
INSERT INTO tasks VALUES (6, 'update_self                                                                                                            ', 1);
INSERT INTO tasks VALUES (7, 'update_self                                                                                                            ', 2);
INSERT INTO tasks VALUES (8, 'update_self                                                                                                            ', 3);
INSERT INTO tasks VALUES (9, 'update_self                                                                                                            ', 4);
INSERT INTO tasks VALUES (10, 'update_self                                                                                                            ', 5);
INSERT INTO tasks VALUES (11, 'update_user                                                                                                            ', 5);
INSERT INTO tasks VALUES (12, 'update_user                                                                                                            ', 4);
INSERT INTO tasks VALUES (13, 'update_user                                                                                                            ', 3);
INSERT INTO users VALUES (1, 1, 'imapasswordhash');
INSERT INTO users VALUES (2, 2, 'imapasswordhash');
INSERT INTO users VALUES (3, 3, 'imapasswordhash');
INSERT INTO users VALUES (4, 4, 'imapasswordhash');
INSERT INTO users VALUES (5, 5, 'imapasswordhash');
/*ALTER TABLE command
    ADD CONSTRAINT command_pk PRIMARY KEY (commandid);
ALTER TABLE dutystation
    ADD CONSTRAINT dutystation_pk PRIMARY KEY (dutystationid);
ALTER TABLE person
    ADD CONSTRAINT person_pk PRIMARY KEY (emplid);
ALTER TABLE roleassignment
    ADD CONSTRAINT roleassignment_pk PRIMARY KEY (roleassignmentid);
ALTER TABLE roles
    ADD CONSTRAINT roles_pk PRIMARY KEY (rolesid);
ALTER TABLE skill
    ADD CONSTRAINT skill_pk PRIMARY KEY (skillid);
ALTER TABLE skillentry
    ADD CONSTRAINT skillentry_pk PRIMARY KEY (skillentryid);
ALTER TABLE skillquestions
    ADD CONSTRAINT skillquestions_pk PRIMARY KEY (id);
ALTER TABLE surveychoices
    ADD CONSTRAINT surveychoices_pk PRIMARY KEY (id);
ALTER TABLE surveyquestionresponsechoice
    ADD CONSTRAINT surveyquestionresponsechoice_pk PRIMARY KEY (id);
ALTER TABLE surveyquestionresponsetext
    ADD CONSTRAINT surveyquestionresponsetext_pk PRIMARY KEY (id);
ALTER TABLE surveyquestions
    ADD CONSTRAINT surveyquestions_pk PRIMARY KEY (surveyquestionsid);
ALTER TABLE tasks
    ADD CONSTRAINT tasks_pk PRIMARY KEY (tasksid);
ALTER TABLE users
    ADD CONSTRAINT users_pk PRIMARY KEY (userid);
*/
