## to start project in dev mode

# start local db (own or example below)
`docker run --detach -p 127.0.0.1:3306:3306 --name mydb --env MARIADB_ROOT_PASSWORD=root  --env MARIADB_DATABASE=insight mariadb:latest`

`cd src`

# start assets live compiler
`npm i`

`npm run dev`

# run db migrations
`./artisan migrate`

# seed database (create demo user and import json file)
`./artisan db:seed DatabaseSeeder`

`./artisan db:seed NewsSeeder`

# start dev server
`./artisan serve`


# demo credentials:

user: test@example.com

password: test

