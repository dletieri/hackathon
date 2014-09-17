
INSERT INTO _DATABASE_.`tb_entity` (`objid`, `name`, `type`) VALUES (1, 'Hard Rock', 'Restaurante');
INSERT INTO _DATABASE_.`tb_entity` (`objid`, `name`, `type`) VALUES (2, 'Pizza Hut', 'Restaurante');
INSERT INTO _DATABASE_.`tb_entity` (`objid`, `name`, `type`) VALUES (3, 'Green Life Restaurant', 'Restaurante');

INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (1, 'Menu', 'Barbecue');
INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (2, 'Menu', 'Sushi');
INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (3, 'Menu', 'Vegetarian');
INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (4, 'Menu', 'Pasta');
INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (5, 'Menu', 'Pizza');
INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (6, 'Happy Hour', 'Y');
INSERT INTO _DATABASE_.`tb_metadata` (`objid`, `type`, `value`) VALUES (7, 'Happy Hour', 'N');

INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 1);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 2);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 3);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 4);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 5);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 6);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (1, 7);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (2, 5);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (2, 7);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (3, 2);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (3, 3);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (3, 4);
INSERT INTO _DATABASE_.`tbnn_entity_metadata` (`entity_id`, `metadata_id`) VALUES (3, 7);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (1, 1, 'M', 'Y', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (2, 1, 'M', 'A', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (3, 1, 'M', 'O', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (4, 1, 'F', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (5, 1, 'F', 'A', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (6, 1, 'F', 'O', 1);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (7, 2, 'M', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (8, 2, 'M', 'A', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (9, 2, 'M', 'O', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (10, 2, 'F', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (11, 2, 'F', 'A', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (12, 2, 'F', 'O', 3);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (13, 3, 'M', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (14, 3, 'M', 'A', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (15, 3, 'M', 'O', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (16, 3, 'F', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (17, 3, 'F', 'A', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (18, 3, 'F', 'O', 3);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (19, 4, 'M', 'Y', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (20, 4, 'M', 'A', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (21, 4, 'M', 'O', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (22, 4, 'F', 'Y', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (23, 4, 'F', 'A', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (24, 4, 'F', 'O', 3);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (25, 5, 'M', 'Y', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (26, 5, 'M', 'A', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (27, 5, 'M', 'O', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (28, 5, 'F', 'Y', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (29, 5, 'F', 'A', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (30, 5, 'F', 'O', 1);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (31, 6, 'M', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (32, 6, 'M', 'A', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (33, 6, 'M', 'O', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (34, 6, 'F', 'Y', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (35, 6, 'F', 'A', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (36, 6, 'F', 'O', 2);

INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (37, 7, 'M', 'Y', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (38, 7, 'M', 'A', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (39, 7, 'M', 'O', 2);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (40, 7, 'F', 'Y', 3);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (41, 7, 'F', 'A', 1);
INSERT INTO _DATABASE_.`tb_score` (`objid`, `metadata_id`, `gender`, `age`, `score`) VALUES (42, 7, 'F', 'O', 2);

