<!DOCTYPE html>
<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/styles.css" rel="stylesheet">
    <title>Contacts</title>
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 1%">
        <div class="col-md-4 col-md-offset-4">
            <div id="alertArea" role="alert"></div>
            <form class="form" id="updateForm">
                <div class="form-group">
                    <input class="form-control" name="id" type="text" id="id" placeholder="Id" required disabled>
                </div>
                <div class="form-group">
                    <input class="form-control" name="firstName" type="text" id="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="lastName" type="text" id="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="email" type="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="phoneNumber" type="text" id="phoneNumber" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" type="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" aria-label="Update">
    Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row" style="margin-top: 1%">
        <div class="col-md-4 col-md-offset-4">
            <a href="contact_manager.html">View Users</a>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="contact_calls.js"></script>
<script>
    $(document).ready(function(){
        getContactById(<?php echo $_GET["id"];?>);
    });

$("#updateForm").submit(function updateForm(event){
    var id = document.getElementById("id").value;
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    updateContact(id,firstName, lastName, phoneNumber,email, password);
    event.preventDefault()
    });
</script>





</body>

</html>