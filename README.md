# sistemaVotacao
 
 Sistema de Votação:
 
 Tecnologias utilizadas:
- PHP 7.3.29 (cli) (built: Jun 29 2021 12:30:04)
- Laravel Framework 8.55.0
- Jquery 3.6
- Boostrap 3.3.7
- DB: MYSQL 

#Passos para rodar a aplicação:
- Clonar o repositorio ( git clone: URL )
- Renomear o arquivo .env.example para .env
- Dentro do repositiorio abrir o CMD
- No CMD executar: composer update (baixar as dependencias)
- No CMD executar: php artisan key:generate e apos php artisan migrate
- Popular a tabela de usuarios com o script PopulaBD.sql
- No CMD executar: php artisan serve

