<form enctype="multipart/form-data" method="POST" action="{{ route('createSlider') }}">
            @csrf

  <label for="sliderText">Text</label><br>
  <input type="text" id="sliderText" name="sliderText" value=""><br><br>
  <label for="image">image</label><br>
  <input type="file" id="image" name="image" />
    </select>
    <input type="submit" value="Submit">
   

        </form>