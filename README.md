# sql-injection-vulnerable-website
 this website uses mysql as the backend and is vunlerable to sql injection attack

This branch consist the fixed version of the website. This version replaces the string interpolation with sql prepared statement. This avoids user input being directly placed inside of the sql query. Instead, the prepared statement inserts the user input into the sql statement as a string argument. Therefore, when the userinputs an sql code as the username or password, the entire text will be treated as a string and then inserted into the query.

Example:

Before, this command would return success: 
' OR 1=1; #
because 1=1 will always result to true and the rest of the check will be commented out.

Now with prepare statement, the query will simply search for "' OR 1=1; #" in the database, and return invalid username or password.