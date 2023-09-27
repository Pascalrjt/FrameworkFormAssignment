<!DOCTYPE html>
<html>
<head>
    <title>Memorial Form</title>
</head>
<body>
    <h1>Memorial Form</h1>
    <form method="POST" action="/submit">
        @csrf
        <label for="data">Name of Loved One:</label>
        <input type="text" name="data" id="data">
        <br>

        <label for="image">Upload Image (max 2MB, .png, .jpg, .jpeg):</label>
        <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg" maxlength="2097152">
        <br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" name="date_of_birth" id="date_of_birth">
        <br>

        <label for="date_of_death">Date of Death:</label>
        <input type="date" name="date_of_death" id="date_of_death">
        <br>

        <label for="description">Description:<br></label>
        <textarea name="description" id="description"></textarea>
        <br>

        <label for="height">Height:</label>
        <input type="number" name="double_value" id="double_value" step="0.01" min="2.50" max="99.99">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
