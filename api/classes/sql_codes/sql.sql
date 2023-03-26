CREATE TABLE teams(
id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    PRIMARY KEY(id)
)

CREATE TABLE leagues(
id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    PRIMARY KEY(id)
)

CREATE TABLE games(
id INT NOT NULL AUTO_INCREMENT,
    team1_id INT ,
    team2_id INT,
    league_id INT,
    status INT,
    
    PRIMARY KEY(id),
    FOREIGN KEY(team2_id) REFERENCES teams(id),
    FOREIGN KEY(team1_id) REFERENCES leagues(id),
    FOREIGN KEY(league_id) REFERENCES leagues(id)
)

CREATE TABLE scores(
id INT NOT NULL AUTO_INCREMENT,
    game_id INT,
    scope VARCHAR(10),
    teamOneScore INT,
    teamTwoScore INT,
    
    PRIMARY KEY(id),
    
    FOREIGN KEY(game_id) REFERENCES games(id)
    
)



