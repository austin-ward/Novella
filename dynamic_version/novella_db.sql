CREATE TABLE users (
  id INT IDENTITY(1,1) PRIMARY KEY,
  username NVARCHAR(50) NOT NULL UNIQUE,
  password NVARCHAR(255) NOT NULL
);

CREATE TABLE books (
    id INT IDENTITY(1,1) PRIMARY KEY,
    title NVARCHAR(255),
    author NVARCHAR(255),
    genre NVARCHAR(100),
    price DECIMAL(5,2) NOT NULL
);

INSERT INTO books (title, author, genre, price) VALUES ('The Paper Garden', 'Molly Peacock', 'Biography', 16.95);
INSERT INTO books (title, author, genre, price) VALUES ('The Midnight Library', 'Matt Haig', 'Fiction', 13.5);
INSERT INTO books (title, author, genre, price) VALUES ('Educated', 'Tara Westover', 'Memoir', 14.99);
INSERT INTO books (title, author, genre, price) VALUES ('Circe', 'Madeline Miller', 'Fantasy', 12.75);
INSERT INTO books (title, author, genre, price) VALUES ('The Silent Patient', 'Alex Michaelides', 'Thriller', 11.95);
INSERT INTO books (title, author, genre, price) VALUES ('Braiding Sweetgrass', 'Robin Wall Kimmerer', 'Nature', 18.0);
INSERT INTO books (title, author, genre, price) VALUES ('The Alchemist', 'Paulo Coelho', 'Fiction', 10.0);
INSERT INTO books (title, author, genre, price) VALUES ('The Seven Husbands of Evelyn Hugo', 'Taylor Jenkins Reid', 'Romance', 13.99);
INSERT INTO books (title, author, genre, price) VALUES ('Where the Crawdads Sing', 'Delia Owens', 'Mystery', 15.95);
INSERT INTO books (title, author, genre, price) VALUES ('A Man Called Ove', 'Fredrik Backman', 'Fiction', 12.99);
INSERT INTO books (title, author, genre, price) VALUES ('The Song of Achilles', 'Madeline Miller', 'Historical', 13.75);
INSERT INTO books (title, author, genre, price) VALUES ('The Four Agreements', 'Don Miguel Ruiz', 'Self-Help', 9.99);
INSERT INTO books (title, author, genre, price) VALUES ('Normal People', 'Sally Rooney', 'Literary', 11.5);
INSERT INTO books (title, author, genre, price) VALUES ('The Book Thief', 'Markus Zusak', 'Historical', 10.95);
INSERT INTO books (title, author, genre, price) VALUES ('Atomic Habits', 'James Clear', 'Self-Help', 17.0);
INSERT INTO books (title, author, genre, price) VALUES ('The Night Circus', 'Erin Morgenstern', 'Fantasy', 13.25);
INSERT INTO books (title, author, genre, price) VALUES ('Becoming', 'Michelle Obama', 'Memoir', 18.5);
INSERT INTO books (title, author, genre, price) VALUES ('The Subtle Art of Not Giving a F*ck', 'Mark Manson', 'Psychology', 14.75);
INSERT INTO books (title, author, genre, price) VALUES ('The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 10.99);
INSERT INTO books (title, author, genre, price) VALUES ('How to Win Friends and Influence People', 'Dale Carnegie', 'Self-Help', 11.5);
