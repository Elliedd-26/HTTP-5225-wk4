USE mydb;

CREATE TABLE developer (
    developer_id INT PRIMARY KEY,
    developer_name VARCHAR(255),
    country VARCHAR(255),
    team_size INT
);

CREATE TABLE game (
    game_id INT PRIMARY KEY,
    game_name VARCHAR(255),
    release_year INT,
    platform VARCHAR(255),
    developer_id INT,
    FOREIGN KEY (developer_id) REFERENCES developer(developer_id)
);

CREATE TABLE player (
    player_id INT PRIMARY KEY,
    player_name VARCHAR(255),
    age INT,
    country VARCHAR(255)
);

CREATE TABLE player_game (
    player_id INT,
    game_id INT,
    score INT,
    last_played DATE,
    PRIMARY KEY (player_id, game_id),
    FOREIGN KEY (player_id) REFERENCES player(player_id),
    FOREIGN KEY (game_id) REFERENCES game(game_id)
);

INSERT INTO developer VALUES
(1, 'Epic Devs', 'USA', 10),
(2, 'Star Studios', 'Japan', 15),
(3, 'Puzzle Makers', 'Canada', 8);

INSERT INTO game VALUES
(1, 'Team Adventure', 2024, 'PC', 1),
(2, 'Space Odyssey', 2023, 'PlayStation', 2),
(3, 'Puzzle Quest', 2022, 'Switch', 3);

INSERT INTO player VALUES
(1, 'Alice', 25, 'USA'),
(2, 'Bob', 30, 'Canada'),
(3, 'Charlie', 22, 'UK');

INSERT INTO player_game VALUES
(1, 1, 1000, '2024-04-01'),
(2, 2, 2000, '2024-04-02'),
(3, 3, 1500, '2024-04-03');

UPDATE game
SET game_name = 'Updated_Team Adventure',
    release_year = 2025,
    platform = 'Updated Platform',
    developer_id = 2
WHERE game_id = 1;

UPDATE developer
SET developer_name = 'Updated_Epic Devs',
    country = 'Updated Country',
    team_size = team_size + 5
WHERE developer_id = 1;

UPDATE player
SET player_name = 'Updated_Alice',
    age = age + 1,
    country = 'Updated Country'
WHERE player_id = 1;

UPDATE player_game
SET score = score + 500,
    last_played = '2025-01-01'
WHERE player_id = 1 AND game_id = 1;

SELECT * FROM developer;
SELECT * FROM game;
SELECT * FROM player;
SELECT * FROM player_game;
