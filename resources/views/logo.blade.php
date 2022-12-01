<form enctype="multipart/form-data" method="POST" action="{{ route('createLogo') }}">
            @csrf
  <label for="image">images</label><br>
  <input type="file" id="image" name="image" />
    <input type="submit" value="Submit">
   

        </form>