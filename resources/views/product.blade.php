<form enctype="multipart/form-data" method="POST" action="{{ route('createProduct') }}">
            @csrf
  <label for="productName">Product Name</label><br>
  <input type="text" id="productName" name="productName" value=""><br>
  <label for="price">Price</label><br>
  <input type="text" id="price" name="price" value=""><br><br>
  <label for="image">images</label><br>
  <input type="file" id="image" name="image" />
  <label for="catagory">Choose a catagory:</label>
    <select name="catagory" id="catagory" >
        @foreach($catagories as $catagory )
        <option value="{{$catagory->catagoryName}}">{{$catagory->catagoryName}}</option>
        @endforeach
    </select>
    <input type="checkbox" id="latest" name="latest" value="0">
    <label for="latest"> Latest</label>
    <input type="checkbox" id="toprated" name="toprated" value="1">
    <label for="toprated"> Top Rated</label><br>
    <input type="submit" value="Submit">
        </form>