CREATE TABLE cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(100) NOT NULL,
    description TEXT,
    image VARCHAR(255) NOT NULL,
    height DECIMAL(4,1),
    weight DECIMAL(4,1),
    abilities TEXT,
    evolution_stage VARCHAR(100),
    hp INT,
    attack INT,
    defense INT
);

INSERT INTO cards (name, type, description, image, height, weight, abilities, evolution_stage, hp, attack, defense) VALUES
('Pikachu', 'Elektrisch', 'Pikachu is een schattig en krachtig elektrisch Pokémon. Het kan elektrische schokken afgeven en is een van de meest herkenbare Pokémon ter wereld.', 'pikachu.png', 0.4, 6.0, 'Statische elektriciteit, Bliksemschicht', 'Tweede evolutie', 35, 55, 40),
('Bulbasaur', 'Gras', 'Bulbasaur is een uniek Pokémon dat geboren wordt met een zaad op zijn rug. Dit zaad groeit samen met het Pokémon en geeft het speciale krachten.', 'bulbasaur.png', 0.7, 6.9, 'Overgroeien, Chlorofyl', 'Basis', 45, 49, 49),
('Charmander', 'Vuur', 'Charmander is een vuur Pokémon met een vurig karakter. De vlam op zijn staart brandt zijn hele leven en geeft aan hoe gezond het Pokémon is.', 'charmander.png', 0.6, 8.5, 'Vlammenwerper, Zonne-energie', 'Basis', 39, 52, 43),
('Squirtle', 'Water', 'Squirtle is een water Pokémon met een hard schild. Het kan krachtige waterstralen afgeven en is erg goed in zwemmen.', 'squirtle.png', 0.5, 9.0, 'Waterkanon, Schild', 'Basis', 44, 48, 65),
('Eevee', 'Normaal', 'Eevee is een uniek Pokémon dat kan evolueren in verschillende vormen. Het heeft een onstabiele genetische code die het mogelijk maakt om zich aan te passen aan verschillende omgevingen.', 'eevee.png', 0.3, 6.5, 'Aanpassingsvermogen, Vlucht', 'Basis', 55, 55, 50),
('Mewtwo', 'Psychisch', 'Mewtwo is een van de krachtigste Pokémon ooit gemaakt. Het is een genetisch experiment met enorme psychische krachten.', 'mewtwo.png', 2.0, 122.0, 'Psychische kracht, Druk', 'Legendarisch', 106, 110, 90);    
