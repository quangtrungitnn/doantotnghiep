## Requirement

php 7.1 or greater
mysql 5.7
nginx

## Development

- Create folder with name "products"

- Cd to folder products and:
	
	+ Clone laradock: git clone https://github.com/Laradock/laradock.git
	+ Clone project: git clone https://github.com/quangtrungitnn/doantotnghiep.git source

- Config project:
	+ cd to folder source and copy .env.example to .env: cp .env.example .env
	+ open file .env and config database

- Config laradock:
	+ cd to laradock folder and copy env-example to .env: cp env-example .env
	+ open file .env and config workspace, php, mysql and nginx

- Build laradock
- Up laradock
- ssh to container of workspace and run:
	+ composer install
	+ php artisan key:generate
	+ php artisan migrate
