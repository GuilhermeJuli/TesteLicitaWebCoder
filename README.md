    Olá a todos e muito obrigado pela opotunidade de estar participando desse processo seletivo com vcs!!!
    
    Antes de rodar o build do PHP, existe um Dockerfile com a imagem e um script que ira criar o banco de dados em sua maquina, basta disparar docker-compose up.
   
    Existe um erro que eu infelizmente não consegui localizar no banco de dados, as vezes a conexão pode falhar, caso isso aconteça abra um terminal e executo o comando | mysql -h 127.0.0.1 -P 3306 -u user -p | e vc ira destravar o banco de dados.

    Apos o docker terminar o build ter 3 tabelas em seu banco de dados ja criadas pelo setup.sql, não tera dados no banco.

    Infelizmente eu não consegui fazer o delete dos dados a tempo, parece que existe uma trapaça por tras do laravel que eu não consegui desvendar a tempo, peço mil perdões!

    Obrigado !