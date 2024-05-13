CREATE TABLE IF NOT EXISTS movies(
	id INT UNSIGNED auto_increment NOT NULL PRIMARY KEY,
    moviename NVARCHAR(100) default NULL,
    wheretofind NVARCHAR(50) default NULL,
    addpeople tinyint(1) default NULL,
    watched tinyint(1) default NULL,
    comments NVARCHAR(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;