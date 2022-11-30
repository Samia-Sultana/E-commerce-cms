<form method="POST" action="{{ route('createSocialMedia') }}">
            @csrf
  <label for="title">Name</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="link">Link</label><br>
  <input type="text" id="link" name="link" value=""><br><br>
  <input type="submit" value="Submit">

        </form>