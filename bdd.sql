-- Création de la base de données
CREATE DATABASE IF NOT EXISTS bdd;

-- Sélection de la base de données
USE bdd;

-- Création de la table Articles
CREATE TABLE IF NOT EXISTS Articles (
    id_article INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

-- Insertion des données dans la table Articles
INSERT INTO Articles (nom, prix, stock) VALUES
('UNO', 8.00, 100),
('Schotten Totten', 15.00, 70),
('Skyjo', 16.00, 99);
