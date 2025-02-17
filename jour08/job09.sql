SELECT * FROM jour8.étudiants WHERE STR_TO_DATE(`date de naissance`, '%d%m%Y') > DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
