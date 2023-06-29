<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin/Movies</title>
</head>

<body>
    <div>
        @csrf
        <!--<label for="tag">tag:</label>-->
        <div class="form-group">
            <label for="title">映画タイトル:</label>
            <input type="text" id="title" name="title"><br>

            <label for="image_url">画像URL:</label>
            <input type="text" id="image_url" name="image_url"><br>

            <label for="published_year">公開年:</label>
            <input type="number" id="published_year" name="published_year"><br>

            <label for="is_showing">公開中かどうか:</label>
            <input type="checkbox" id="is_showing" name="is_showing"><br>

            <label for="description">概要:</label>
            <textarea id="description" name="description"></textarea><br>
        </div>
        <br><br>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>


</body>

</html>