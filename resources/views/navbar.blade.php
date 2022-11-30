<form method="POST" action="{{ route('createNav') }}">
            @csrf
  <label for="title">Title</label><br>
  <input type="text" id="title" name="title" value=""><br>
  <label for="url">URL</label><br>
  <input type="text" id="url" name="url" value=""><br><br>
  <input type="submit" value="Submit">

        </form>