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

SELECT teams.name AS team1, teams2.name AS team2, games.status, leagues.name AS league, games.time_date AS unix_time, scores.teamOneScore AS score1, scores.teamTwoScore AS score2,scores.scope FROM games JOIN teams ON games.team1_id=teams.id JOIN teams AS teams2 ON games.team2_id=teams2.id JOIN leagues ON games.league_id=leagues.id JOIN scores ON games.id=scores.game_id ORDER BY games.time_date DESC;



