INSERT INTO categories (category_name) VALUES ("Horror"), ("Dramat"), ("Komedia"), ("Animacja"), ("Przygodowy"), ("Romantyczny");

INSERT INTO users (name, lastname, nick, password, admin) VALUES ("Henryk", "Szop", "Szopek", "Szop321", "0"), ("Grażyna", "Fajdło", "Grażyna43", "F412G", "0"), ("Bartosz", "Bartosiewicz", "okb-777", "okb", "1"), ("Jan", "Żemło", "Żemianko", "żeJ", "0"), ("Allan", "Jasiński", "Vydumo", "hasło123", "0"), ("Fabian", "Pietrzak", "Wkazeg", "jasfj", "0"), ("Bianka", "Pawlak", "Riscah", "riffa", "1"), ("Natasza", "Cieślak", "Hil", "pumpernikiel13", "0")

INSERT INTO films (title, description, director, user_id, categorie_id, accept) VALUES ("Skazani na Shawshank", "Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.", "Frank Darabont", "1", "2", "1"), 

("NIETYKALNI", "Sparaliżowany milioner zatrudnia do opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia.", "Olivier Nakache, Éric Toledano", "2", "3", "1"),

("WŁADCA PIERŚCIENI: POWRÓT KRÓLA", "Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów.","Peter Jackson", "1", "5", "1"),

("COCO", "Dwunastoletni meksykański chłopiec imieniem Miguel usiłuje zgłębić tajemnice rodzinnej legendy.", "Lee Unkrich, Adrian Molina", "4", "4", "1"),

("CZARNY ŁABĘDŹ", "Ambitna tancerka bierze udział w walce o główna rolę w spektaklu 'Jezioro łabędzie'. Jest gotowa wiele poświęcić, by osiągnąć cel.", "Darren Aronofsky", "5", "2", "0"),

("Klaus", "Początkujący listonosz zostaje wysłany na niewielką wyspę za kołem podbiegunowym. Jej mieszkańcy są ze sobą skłóceni, a - co gorsza - nikt nie wysyła tam listów.", "Sergio Pablos", "2", "4", "1"),

("JAK ROZPĘTAŁEM DRUGĄ WOJNĘ ŚWIATOWĄ", "Pechowy szeregowiec Franek Dolas myśli, że rozpętał II wojnę światową. Chcąc zabłysnąć bohaterskimi czynami, plącze się w coraz większe tarapaty.", "Tadeusz Chmielewski", "6", "3", "0"),

("SKRZYPEK NA DACHU", "Ubogi mleczarz Tewje postanawia wydać za mąż piątkę swoich córek.", "Norman Jewison", "8", "2", "1")

INSERT INTO orders (data_end, data_start, film_id, user_id) VALUES 
('2022-11-23', '2022-12-07', '8', '2'), 
('2022-11-22', '2022-12-01', '1', '6'),
('2022-11-02', '2022-11-14', '3', '5'),
('2022-12-01', '2022-12-10', '4', '8'),
('2022-11-13', '2022-11-26', '6', '4'),
('2022-11-26', '2022-12-04', '2', '1'),