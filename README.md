# Karuna Laravel
Karuna Laravel Test

## Project Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/5a5i/karuna-laravel.git
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Copy the `.env.example` file and create a `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Generate an application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations (and seeders if applicable):
   ```bash
   php artisan migrate --seed
   ```
