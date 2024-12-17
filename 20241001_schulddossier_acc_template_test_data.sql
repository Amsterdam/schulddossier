TRUNCATE public.dossier CASCADE;
TRUNCATE public.schuld_item CASCADE;
TRUNCATE public.voorlegger CASCADE;
SELECT pg_catalog.setval('public.dossier_id_seq', 1, true);
SELECT pg_catalog.setval('public.schuld_item_id_seq', 1, true);
SELECT pg_catalog.setval('public.voorlegger_id_seq', 1, true);
INSERT INTO public.dossier VALUES (1437, 1, 4, 397, 'v1', 'Salmagundi', NULL, NULL, NULL, '2024-07-22 13:47:33', 386, 'bezig_shv', true, 'T.', 'Man', '1980-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO public.dossier VALUES (1440, 1, 1, 436, 'v1', 'Test SD 1S', NULL, NULL, NULL, '2024-07-23 11:44:48', 436, 'bezig_shv', false, '1', 'Vrouw', '1980-01-01', '676037197', 'Rabobank', '06-12345678', 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', true, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1441, 1, 3, 448, 'v1', 'TEST SD 1S', NULL, NULL, NULL, '2024-07-23 13:12:34', 448, 'bezig_shv', false, '2', 'Vrouw', '1990-03-01', '615988052', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', 'Ongehuwd', '["03-04-2024"]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1442, 1, 3, 448, 'v1', 'TEST SD FT MS P', 'TEST SD FT MS', NULL, NULL, '2024-07-23 13:28:14', 448, 'bezig_shv', false, '1', 'Man', '1972-12-05', '247558709', 'ABN AMRO', NULL, 'Jan van Galen', '323', '1056 CH', 'Amsterdam', 'Gehuwd in gemeenschap van goederen', '[]', false, 'H', 'Vrouw', '1976-08-21', '433250422', 'ABN AMRO', false, NULL, NULL, NULL, NULL, NULL, '1999-06-06 00:00:00', 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1443, 1, 3, 448, 'v1', 'TEST SD FT MS JSS', NULL, NULL, '2453088.01', '2024-07-23 14:28:52', 448, 'bezig_shv', false, '2', 'Man', '1999-07-07', '378479611', 'ING', NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', true, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1444, 1, 3, 448, 'v1', 'Test SD FT GS', NULL, NULL, '2453142.01', '2024-07-23 15:42:50', 448, 'bezig_shv', false, '1', 'Vrouw', '1982-07-23', '305454304', NULL, NULL, 'jan van galenstraat', '323', '1056CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1445, 1, 3, 448, 'v1', 'TEST SD GS', NULL, NULL, NULL, '2024-07-23 15:51:37', 448, 'bezig_shv', false, '2', 'Man', '2001-09-18', '181565808', 'ING', NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1446, 1, 3, 448, 'v1', 'TEST SD GS', NULL, NULL, NULL, '2024-07-23 16:15:01', 448, 'bezig_shv', false, '1', 'Vrouw', '1991-01-11', '671102758', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1447, 1, 3, 448, 'v1', 'Test SD FT GS', NULL, NULL, '2453150.01', '2024-07-23 16:18:16', 448, 'bezig_shv', false, '2', 'Man', '2000-05-31', '214622484', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', NULL, '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1448, 1, 3, 448, 'v1', 'TEST SD FT 1S', NULL, NULL, '2453169.01', '2024-07-23 16:41:45', 448, 'bezig_shv', false, '1', 'Man', '1999-09-22', '581641838', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, '2021-01-01 00:00:00', 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1449, 1, 3, 448, 'v1', 'TEST SD FT 1S', NULL, NULL, '2453193.01', '2024-07-24 10:43:30', 448, 'bezig_shv', false, '2', 'Vrouw', '1966-07-24', '038348640', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1450, 1, 3, 448, 'v1', 'TEST SD FT MS', NULL, NULL, '2453177.01', '2024-07-24 11:31:51', 448, 'bezig_shv', false, '3', 'Vrouw', '1973-08-09', '628315739', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1451, 1, 3, 448, 'v1', 'TEST SD FT MS', NULL, NULL, '2453185.01', '2024-07-24 11:40:16', 448, 'bezig_shv', false, '4', 'Man', '1969-05-13', '285822512', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1452, 1, 3, 448, 'v1', 'TEST SD FT MS', NULL, NULL, '2453207.01', '2024-07-24 11:55:09', 448, 'bezig_shv', false, '5', NULL, '1985-02-17', '448484791', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1453, 1, 3, 448, 'v1', 'TEST SD FT MS JSS', NULL, NULL, '2453096.01', '2024-07-25 13:56:38', 448, 'bezig_shv', false, '6', 'Vrouw', '2003-07-31', '068581932', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1454, 1, 3, 448, 'v1', 'TEST SD FT MS JSS P', 'TEST SD FT MS JSS', NULL, '2453118.01', '2024-07-25 14:07:33', 448, 'bezig_shv', false, '7', 'Man', '2000-01-07', '465078278', NULL, NULL, 'Jan van Galenstraat', '323', '1056 CH', 'Amsterdam', 'Samenwonend', '[]', false, 'P', 'Vrouw', NULL, '489298448', NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1455, 1, 3, 448, 'v1', 'TEST SD FT MS P', 'TEST SD FT MS', NULL, '2453215.01', '2024-07-25 14:37:28', 448, 'bezig_shv', false, '8', 'Vrouw', '1955-06-25', '618622718', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', 'Gehuwd in gemeenschap van goederen', '[]', false, 'P', 'Man', '1956-10-07', '613105941', NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1456, 1, 3, 448, 'v1', 'TEST SD FT MS P', 'TEST SD FT MS P', NULL, '2453061.01', '2024-07-25 15:18:27', 448, 'bezig_shv', false, '9', 'Man', '1960-01-03', '698979072', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', 'Gehuwd in gemeenschap van goederen', '[]', false, 'K', 'Vrouw', '1961-02-01', '399876728', NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1457, 1, 3, 448, 'v1', 'TEST SD MS', NULL, NULL, NULL, '2024-07-25 15:51:16', 448, 'bezig_shv', false, '1', 'Man', '1980-01-01', '409744153', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', 'Ongehuwd', '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1458, 1, 3, 448, 'v1', 'TEST SD MS JSS', NULL, NULL, NULL, '2024-07-25 17:03:27', 448, 'bezig_shv', false, '2', 'Man', '2000-01-01', '048540468', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', NULL, '[]', false, NULL, NULL, NULL, NULL, NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.dossier VALUES (1459, 1, 3, 448, 'v1', 'TEST SD MS P', 'TEST SD MS', NULL, NULL, '2024-07-25 17:10:47', 448, 'bezig_shv', false, '3', 'Man', '1979-06-09', '500869546', NULL, NULL, 'Jan van Galenstraat', '323', '1056CH', 'Amsterdam', 'Samenwonend', '[]', false, 'P', 'Vrouw', '1980-08-19', '596727884', NULL, false, NULL, NULL, NULL, NULL, NULL, NULL, 'schulddossier.beheer@amsterdam.nl');
INSERT INTO public.schuld_item VALUES (8398, 1448, 448, 4212, '2024-08-07 14:12:58', '2024-08-07 14:12:58', false, '3216598', 'concurrent', 2000.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8399, 1449, 448, 2789, '2024-08-07 14:13:57', '2024-08-07 14:13:57', false, '946549', 'concurrent', 1000.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8400, 1443, 448, 2904, '2024-08-07 14:47:07', '2024-08-07 14:47:07', false, '66666', 'concurrent', 3521.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8401, 1443, 448, 4212, '2024-08-07 14:47:44', '2024-08-07 14:47:44', false, '7777777777', 'concurrent', 1200.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8402, 1443, 448, 2789, '2024-08-07 14:48:13', '2024-08-07 14:48:13', false, '2135689', 'concurrent', 256.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8403, 1453, 448, 2878, '2024-08-07 15:57:25', '2024-08-07 15:57:25', false, 'wolf', 'concurrent', 500.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8404, 1453, 448, 4283, '2024-08-07 15:57:49', '2024-08-07 15:57:49', false, 'fiat panda', 'concurrent', 2300.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8405, 1453, 448, 3410, '2024-08-07 15:58:16', '2024-08-07 15:58:16', false, '123', 'concurrent', 123.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8406, 1454, 448, 2789, '2024-08-07 16:02:41', '2024-08-07 16:02:41', false, 'huphup', 'concurrent', 3000.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8407, 1454, 448, 4212, '2024-08-07 16:03:05', '2024-08-07 16:03:05', false, 'PB', 'concurrent', 6548.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8408, 1454, 448, 3410, '2024-08-07 16:03:37', '2024-08-07 16:03:37', false, '321', 'concurrent', 321.00, '2024-08-07', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8409, 1456, 448, 3410, '2024-08-08 16:09:30', '2024-08-08 16:09:30', false, '231', 'concurrent', 1000.00, '2024-08-08', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8410, 1456, 448, 4212, '2024-08-08 16:10:02', '2024-08-08 16:10:02', false, 'bolletje', 'concurrent', 80085.00, '2024-08-08', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8411, 1456, 448, 2789, '2024-08-08 16:10:40', '2024-08-08 16:10:40', false, 'preferent', 'concurrent', 777.00, '2024-08-08', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8412, 1450, 448, 3410, '2024-08-08 16:23:35', '2024-08-08 16:23:35', false, 'three of life', 'concurrent', 1000.00, '2024-08-08', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8413, 1450, 448, 4212, '2024-08-08 17:07:10', '2024-08-08 17:07:10', false, 'puntjes', 'preferent', 2000.00, '2024-08-08', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8414, 1450, 448, 2878, '2024-08-08 17:08:36', '2024-08-08 17:08:36', false, 'rood', 'concurrent', 800.85, '2024-08-08', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8418, 1452, 448, 2667, '2024-08-14 13:27:32', '2024-08-14 13:27:32', false, 'balsamico', 'concurrent', 1000.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8419, 1452, 448, 2789, '2024-08-14 13:54:25', '2024-08-14 13:54:25', false, 'barba', 'concurrent', 845.84, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8420, 1452, 448, 2904, '2024-08-14 14:05:54', '2024-08-14 14:05:54', false, 'koekjes', 'concurrent', 2000.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8415, 1451, 448, 3410, '2024-08-14 13:04:20', '2024-08-14 13:04:20', false, '456', 'concurrent', 2500.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8416, 1451, 448, 4212, '2024-08-14 13:05:23', '2024-08-14 13:05:23', false, 'PB', 'preferent', 1500.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8417, 1451, 448, 2904, '2024-08-14 13:07:44', '2024-08-14 13:07:44', false, 'Boatie McBoatface', 'concurrent', 1000.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8421, 1455, 448, 3410, '2024-08-14 15:04:55', '2024-08-14 15:04:55', false, '123', 'concurrent', 123.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8422, 1455, 448, 4212, '2024-08-14 15:07:09', '2024-08-14 15:07:09', false, 'PB', 'preferent', 1000.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.schuld_item VALUES (8423, 1455, 448, 2667, '2024-08-14 15:08:02', '2024-08-14 15:08:02', false, '2000', 'concurrent', 2000.00, '2024-08-14', NULL, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1265', 1448, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, false, 0, false, false, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1266', 1449, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, false, false, true, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, true, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, true, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, true, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1260', 1443, 0, 0, 0, true, false, false, true, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, true, true, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, true, 0, false, true, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1267', 1450, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, true, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, true, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, true, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1256', 1440, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, false, 0, false, false, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1258', 1437, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, false, 0, false, false, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1257', 1441, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, true, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, true, true, false, true, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, true, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1268', 1451, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, false, 0, true, 0, false, 0, true, 0, true, true, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, false, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, false, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1261', 1444, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, false, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1262', 1445, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, false, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1263', 1446, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, false, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1264', 1447, 0, 0, 0, false, false, false, false, false, NULL, 0, false, 0, false, 0, false, 0, false, 0, false, 0, false, false, 0, false, 0, false, 0, false, 0, false, 0, 0, 0, 0, false, false, 0, false, 0, false, 0, false, 0, false, false, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, false, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, false, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, false, 0, false, false, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1269', 1452, 0, 0, 0, false, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, false, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, 'Energiedirect', '88533210', NULL, 1248, 1111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 0.00, true, 0, true, 0, 0, 0, 0, 0, false, true, true, false, false, NULL, NULL, NULL, NULL, true, false, false, false, false, false, NULL, NULL, true, 0, false, false, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1270', 1453, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, true, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, true, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, true, 0, false, true, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1272', 1455, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, true, 0, false, 0, 0.00, 0, 500.00, false, 0, true, 0, 0, 0, 0, 0, false, false, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, false, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1273', 1456, 0, 0, 0, true, false, false, false, true, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, false, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 0.00, true, 0, true, 0, 0, 0, 0, 0, false, false, false, false, false, NULL, NULL, NULL, NULL, false, false, false, false, false, false, NULL, NULL, true, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1274', 1457, 0, 0, 0, false, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 200.00, true, 0, true, 0, 0, 0, 0, 0, false, false, true, false, false, NULL, NULL, NULL, NULL, true, false, false, false, false, false, NULL, NULL, true, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1275', 1458, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, false, 0, true, 0, false, 0, true, 0, true, true, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, false, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, false, 0, false, true, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1259', 1442, 0, 0, 0, false, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, false, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 300.00, true, 0, true, 0, 0, 0, 0, 0, false, false, true, false, false, NULL, NULL, NULL, NULL, true, false, false, false, false, false, NULL, NULL, true, 0, false, false, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1271', 1454, 0, 0, 0, false, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, false, 0, false, 0, 0.00, 0, 0.00, true, 0, true, 0, 0, 0, 0, 0, false, false, true, false, false, NULL, 'Tijdelijk contract', NULL, NULL, true, false, false, false, false, false, NULL, NULL, true, 0, false, true, false, false, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
INSERT INTO public.voorlegger VALUES ('1276', 1459, 0, 0, 0, true, true, false, false, false, NULL, 0, true, 0, true, 0, false, 0, false, 0, true, 0, true, false, 0, false, 0, true, 0, true, 0, true, 0, 0, 0, 0, false, false, 0, true, 0, true, 0, true, 0, true, true, false, false, false, NULL, 0, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, true, false, true, 0, false, 0, 0.00, 0, 0.00, false, 0, true, 0, 0, 0, 0, 0, false, true, true, false, false, NULL, NULL, NULL, NULL, false, false, true, false, false, false, NULL, NULL, false, 0, false, false, false, true, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, false, false, NULL, NULL, NULL);
SELECT pg_catalog.setval('public.dossier_id_seq', 1459, true);
SELECT pg_catalog.setval('public.schuld_item_id_seq', 8423, true);
SELECT pg_catalog.setval('public.voorlegger_id_seq', 1276, true);
