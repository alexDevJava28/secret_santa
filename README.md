# Secret Santa Team Generator

This peace of code contains:
 - the random pairs generator
 - the logic for sending SMS to the user with the name of the other user to prepare for him or her Secret Present

## Getting Started

1. Clone the project from repository
2. Fill the array in the /data/numbers.php with data about users (names and phone numbers)
3. Run from shell 
````
php generator.php
````

### Prerequisites

1. The phone numbers should be used without '+' in the beginning
2. You should create the account in the https://www.textlocal.com. After that, enable the Email ti SMS
here https://control.txtlocal.co.uk/settings/emailtosms/. The email address you registered with should be used in the /generator.php
in $from variable.
