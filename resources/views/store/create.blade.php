<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('store.store') }}" method="post">
@csrf
  <label for="title">First name:</label><br>
  <input type="text" id="title" name="title" value="{{ $data->title ?? 'sjdbfksjdfhkjsh' }}" ><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
