# Cloud App

The project cloud app is just a minimal simple app for storing the files to your web cloud directory. Built on tall stack an individual can easily create an account on it as save your file(images) to this web app and check your image on it byaccessing your dashboard. 

After cloning the project into your directory, follow the given commands for the its working.


### Prerequisites
- PHP ^7.4.33
- Composer
- Node.js & npm


## Technologies Used

- **Backend**: Laravel
- **Frontend**: Tailwind CSS, Blade (template engine), Alpine.js
- **JavaScript**: Node.js, npm
- **Build Tools**: (Webpack)
- **Database**: MySQL
- **Version Control**: Git
- **Others**: Daisy UI (Layout and Components).


# Navigate into the project directory:

cd your-repo
composer install


# Create a .env file:
cp .env.example .env


# Generate an application key:
php artisan key:generate


# Run migrations:
php artisan migrate

# Generate Node dependencies
npm install

# Run the command for assets compiling
npm run dev

# On New Terminal:

Start the local development server:
php artisan serve
