
## Prerequisites

* [composer](https://getcomposer.org/download/) needs to be installed on your and available globally.
* Your local machine needs PHP 7.4 or later.

# Installation
1. [Clone this project](https://github.com/dpoarch/ttp-interview-submission.git)
2. **Important** Make an initial commit with the unzipped files.
3. From the command line run 'composer install'.
4. Start the local server `php artisan serve` and open http://localhost:8000/widgets in your browser.


# Project URL

Note: you can create additional routes + urls to support the UI if needed.

### GET:http://localhost:8000/widgets

### GET:http://localhost:8000/api/widgets

### GET:https://localhost:8000/api/widget/delete/{id}

# Bonus Points

* Given more time, what improvements to the existing codebase would you make? 

Answer: improvements to make by adding a passport for secure api and adding ajax for no page refresh. also updating the laravel project 4.2 to latest version
