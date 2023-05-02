## to start project in dev mode

# start local db
`docker run --detach -p 127.0.0.1:3306:3306 --name mydb --env MARIADB_ROOT_PASSWORD=root  --env MARIADB_DATABASE=insight mariadb:latest`

cd src

`npm i`

`npm run dev`

`./artisan migrate`
`./artisan db:seed DatabaseSeeder`
`./artisan db:seed NewsSeeder`
`./artisan serve`

demo credentials:
user: test@example.com
password: test

