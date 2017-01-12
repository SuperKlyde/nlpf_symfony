INSERT INTO USERS (FIRSTNAME, LASTNAME, PASSWORD, EMAIL)
VALUES ('Hugo', 'Capes', 'psw', 'hugo.capes@hotmail.fr'),
  ('Simon', 'Mace', 'puws', 'simon.mace@gmail.com'),
  ('Valentin', 'Zheng', 'tefaizeu', 'val.z@hotmail.com'),
  ('Gregoire', 'Dechene', 'zah', 'vicomte.arthur@epita.fr');

INSERT INTO PROJECT (NAME, DESCRIPTION, CURRENT, created ,OWNER_ID)
VALUES ('projet 1', 'description 1', 140, '2015-03-01' ,1),
  ('projet 2', 'description 2', 374, '2015-03-02' , 1),
  ('super projet', 'un projet vraiment super', 4450,'2015-03-03' , 3),
  ('EPITA Project', 'what else?', 246,'2015-03-03' , 2),
  ('projet raté', 'too bad...', 12, '2015-03-05' , 4),
  ('projet normale', 'un projet normal', 500, '2015-03-06' , 4);

INSERT INTO CONTERPART (NAME, DESCRIPTION, VALUE, PROJECTS_ID)
 VALUES ('casquette', 'une casquette renault', 15, 1),
('t-shirt', 'un t-shirt EPITA', 20, 1),
('téléphone', 'un téléphone', 150, 2),
('livre', 'un livre', 15, 2),
('chaise', 'une chaise', 30, 3),
('armoire', 'une armoire', 100, 3),
('tracteur', 'wtf?', 1500, 3),
('hérisson', 'tout mignon', 25, 2);

INSERT INTO INVEST (investor_id, PROJECT_ID, CONTERPART_ID)
VALUES (1, 1, 1),
  (1, 2, 3),
  (2, 2, 2),
  (3, 5, 6);