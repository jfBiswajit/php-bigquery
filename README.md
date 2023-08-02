# PHP BigQuery Package for Laravel

![PHP BigQuery](https://miro.medium.com/v2/resize:fit:1000/format:webp/0*so3fsH1wwvLmKcuC.png)

## Description

PHP BigQuery is a Laravel package that provides seamless integration with Google BigQuery using the `google/cloud-bigquery` library. This package allows you to interact with BigQuery effortlessly and perform various operations on datasets and tables.

## Installation

To get started with PHP BigQuery in your Laravel project, follow these steps:

1. Install the package via Composer:

```bash
composer require jfbiswajit/php-bigquery
```

2. Generate a service account key for your Google Cloud project. Follow the steps below to create and download the key in JSON format:

### Generate Service Key

1. Go to the Google Cloud Console by visiting https://console.cloud.google.com/ and sign in with your Google account.

2. Select the project where your BigQuery data is located from the project selector at the top of the page.

3. In the left-hand menu, click on "IAM & Admin," and then select "Service Accounts" from the sub-menu.

4. Click on the "CREATE SERVICE ACCOUNT" button to create a new service account.

5. Enter a name and description for the service account. Leave the "Service account ID" field as it is, as it will be automatically generated.

6. In the "Role" dropdown, select the appropriate role that grants the service account the necessary permissions to access your BigQuery data. For example, you can choose the "BigQuery User" role for read access to datasets and tables.

7. Click on the "CREATE" button to create the service account.

8. Locate the newly created service account on the "Service Accounts" page. Click on the three dots (vertical ellipsis) to the right of the service account's entry, and then click on "Create key."

9. Choose the "JSON" key type and click on the "CREATE" button. This will download a JSON file containing the service account key to your computer.

10. Move the downloaded JSON key file to a secure location in your Laravel project. A common practice is to store it in the "storage" directory with the name "bigquery-credentials.json," but you can choose any suitable location. Just ensure that the file is not publicly accessible on your web server to keep your credentials secure.

### Finding Project ID

To find your Google Cloud Project ID, follow these steps:

1. Go to the Google Cloud Console by visiting https://console.cloud.google.com/ and sign in with your Google account.

2. If you are not already in the project, use the project selector at the top of the page to select the project where your BigQuery data is located.

3. After selecting the correct project, you will see the project name displayed in the top-left corner of the Cloud Console.

4. Click on the project name (or the project ID, if it's shown next to the name) in the top-left corner. This will open the project details page.

5. On the project details page, you will find the "Project info" section. The "Project ID" will be listed there.

The Project ID is a unique identifier for your Google Cloud project and is used for various purposes, including accessing APIs, managing resources, and setting up credentials like we discussed for BigQuery.

## Configuration

Once you have obtained the service account key and the Project ID, you can set the following environment variables in your Laravel project's `.env` file:

```dotenv
GOOGLE_APPLICATION_CREDENTIALS=/path/to/your/bigquery-credentials.json
GOOGLE_CLOUD_PROJECT_ID=your-project-id
```

## Usage

With PHP BigQuery integrated into your Laravel project, you can use the package to interact with Google BigQuery and perform various data operations. The package provides an easy-to-use facade to access the functionalities.

```php
// Example code to retrieve data from BigQuery
use JfBiswajit\PHPBigQuery\Facades\BigQuery;

$results = BigQuery::query('SELECT * FROM your_dataset.your_table');
```

For detailed usage and available methods, please refer to the package documentation.

## Contribution

Your contributions to this project are highly appreciated. If you encounter any bugs, have feature requests, or want to contribute to the codebase, feel free to submit a pull request or open an issue on GitHub.

## License

This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Author

- Name: Biswajit Biswas
- Email: jfbiswajit@gmail.com

---

Thank you for choosing PHP BigQuery for Laravel! We hope this package simplifies your BigQuery integration and data management tasks. If you have any questions or need assistance, please don't hesitate to reach out to the author or the community for support. Happy coding!