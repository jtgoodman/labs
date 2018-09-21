<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>Put any text you want into the annoying ad. No need to use Chinese.
</p></div>';
} // End of the function definition.

$page_title = 'Lab5';
include('includes/header.html');

// Call the function:
create_ad();
?>

<div class="page-header"><h1>Content Header</h1></div>
<p>In computer programming, create, read, update, and delete[1] (CRUD) are the four basic functions of persistent storage.[2] Alternate words are sometimes used when defining the four basic functions of CRUD, such as retrieve instead of read, modify instead of update, or destroy instead of delete..</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operation</th>
      <th scope="col">SQL</th>
      <th scope="col">HTTP</th>
      <th scope="col">RESTful WS</th>
      <th scope="col">DDS</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="col">Create</th>
      <th scope="col">Insert</th>
      <th scope="col">PUT / POST</th>
      <th scope="col">POST</th>
      <th scope="col">write</th>
    </tr>
    <tr>
      <th scope="col">Read (retrieve)</th>
      <th scope="col">SELECT</th>
      <th scope="col">GET</th>
      <th scope="col">GET</th>
      <th scope="col">read / take</th>
    </tr>
    <tr>
      <th scope="col">Update(Modify)</th>
      <th scope="col">UPDATE</th>
      <th scope="col">PUT / POST / PATCH</th>
      <th scope="col">PUT</th>
      <th scope="col">write</th>
    </tr>
    <tr>
      <th scope="col">Delete (Destroy)</th>
      <th scope="col">DELETE</th>
      <th scope="col">Delete</th>
      <th scope="col">Delete</th>
      <th scope="col">dispose</th>
    </tr>
  </tbody>
</table>
<?php
// Call the function again:
create_ad();

include('includes/footer.html');
?>