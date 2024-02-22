# Laravel API Project

This project is a simple Laravel API that demonstrates proficiency with Laravel's job queues, database operations, migrations, and event handling.

## Setup Instructions

1. Clone the repository to your local machine:

git clone <repository_url>


2. Navigate to the project directory:

cd <project_directory>


3. Install composer dependencies:

composer install


4. Copy the `.env.example` file and rename it to `.env`:

cp .env.example .env


5. Generate an application key:

php artisan key:generate


6. Update the database settings in the `.env` file to match your local environment.

7. Run database migrations to create the necessary tables:

php artisan migrate


## Testing the API Endpoint

To test the API endpoint, you can use a tool like Postman or curl.

1. Make a `POST` request to the `/api/submit` endpoint with the following JSON payload structure:

{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}


2. If the data is valid, the API will respond with a status code of 200 and a JSON message indicating that the submission was received.

3. If the data is invalid, the API will respond with a status code of 422 and a JSON object containing validation errors.


## Testing the API Endpoint

To test the API endpoint, you can use a tool like Postman. Follow these steps:

1. Import the provided Postman collection by opening Postman and selecting **File > Import**. Choose the file `LARAVEL-API-DEMO.postman_collection.json` and import it into Postman.

2. Open the imported collection in Postman. You will find a request named `/submit`.

3. Click on the request to open it. You can modify the request body if needed.

4. Click on the "Send" button to send the request to the API endpoint.

5. If the data is valid, the API will respond with a status code of 200 and a JSON message indicating that the submission was received.

6. If the data is invalid, the API will respond with a status code of 422 and a JSON object containing validation errors.

## Running Unit Tests

To run unit tests, use the following command:

php artisan test


This command will run all the tests located in the `tests` directory and display the results.

