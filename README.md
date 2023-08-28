
![Logo](https://cobalt-network.com/dl/logos/dark-logo.png)


#  Intranet

This project is a website in Laravel created for the Cobalt Group company.
It is reserved for an internal usage.




## Installation

To run this website, run the commands below in a shell.

```bash
  git clone https://github.com/SyFizz/CobaltGroup.git
  cd CobaltGroup
  cp .env.example .env
  php artisan key:generate
  npm install
  npm run build
```

Then, configure the .env file to your needs :
```env
APP_NAME="Cobalt Group - Instranet"
APP_DEBUG=false
APP_URL= <The URL of your website>

DB_HOST=<The IP of your MySQL server>
DB_PORT=3306
DB_DATABASE=<MySQL Database Name>
DB_USERNAME=<MySQL User that have access to the database>
DB_PASSWORD=<MySQL Password of the susmentionned user>
```

To finalize the deployment, run `php artisan migrate`

You can then create the first user with `php artisan make:user` command.

## Authors

- [@SyFizz](https://www.github.com/SyFizz)

