<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/Option.css">
</head>
<body>
    <form>
        <p id="chooseUserOption">Choose User Option</p>
        <p id="select">Select user type:</p><br>
        <div>
            <input id="customer" type="radio" ><label for="customer">Customer</label> 
            <input id="owner" type="radio" ><label for="owner">Owner</label>
            <p id="alert"></p>
        </div>
        <br>
        <p id="note">Customer option are unable to post and only for viewing and 
            renting apartments. The apartment owner option are able to 
            post their apartments and manage accounts.  </p>
            <a id="btnNext" onclick="next()">Next</a>
    </form> 
    
    <script src="JS/option.js"></script>

</body>
</html>