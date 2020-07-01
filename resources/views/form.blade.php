<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Buat Akun Baru!</h1>
    <form action="welcome" method="POST">
        {{ csrf_field() }}  
        <fieldset>
        <legend>Sign Up Form</legend>
        <p>
            <label>First name :</label>
        </p>
        <p>
            <input type="text" name="firstname" placeholder="first name..." />
        </p>
        <p>
            <label>Last name :</label>
        </p>
        <p>
            <input type="text" name="lastname" placeholder="last name..." />
        </p>
        <p>
            <label>Gender :</label>
        </p>
        <p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </p>
        <p>
            <label>Nationality :</label>
        </p>
        <p>
            <select id="nationality" name="nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Singapura">Singapura</option>
                <option value="Australia">Australia</option>
              </select>
        </p>
        <p>
            <label>Language Spoken :</label>
        </p>
        <p>
            <input type="checkbox" id="bahasa_indonesia" name="bahasa_indonesia" value="Bahasa Indonesia">
            <label for="vehicle1"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="bahasa_english" name="bahasa_english" value="Bahasa English">
            <label for="vehicle2"> Bahasa English</label><br>
            <input type="checkbox" id="other" name="other" value="Other">
            <label for="vehicle3"> Other</label><br>
        </p>
        <p>
            <label>Bio :</label>
        </p>
        <p>
            <textarea id="bio" name="bio" rows="10" cols="25"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Sign Up" />
        </p>
        </fieldset>
    </form>
</body>
</html>