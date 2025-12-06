<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Registration</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $dob = htmlspecialchars($_POST['dob']);
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'Not Specified';
        $address = htmlspecialchars($_POST['address']);
        

        if(isset($_POST['hobbies'])){
            $hobbies = implode(", ", $_POST['hobbies']);
        } else {
            $hobbies = "None selected";
        }


        echo "
        <div class='card success-card'>
            <div class='success-header'>
                <h2>Registration Complete</h2>
                <p>Your information:</p>
            </div>
            <div class='data-group'>
                <div class='data-row'><strong>Name:</strong> <span>$name</span></div>
                <div class='data-row'><strong>Email:</strong> <span>$email</span></div>
                <div class='data-row'><strong>DOB:</strong> <span>$dob</span></div>
                <div class='data-row'><strong>Gender:</strong> <span>$gender</span></div>
                <div class='data-row'><strong>Hobbies:</strong> <span>$hobbies</span></div>
                <div class='data-row'><strong>Address:</strong> <span>$address</span></div>
            </div>
            <a href='index.php' class='btn-reset'>Register Another</a>
        </div>
        ";
    } else {
    ?>
        <div class="card form-card">
            <header>
                <p class="name" >Swasthik Yesh - 4MW23CS171</p>
                <h1>Registration Form</h1>
                <p></p>
            </header>
            
            <form id="regForm" action="index.php" method="POST">
                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="name">
                    <small class="error-msg">Name is required</small>
                </div>

                <div class="row-split">
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" placeholder="name@example.com">
                        <small class="error-msg">Valid email required</small>
                    </div>
                    <div class="input-group">
                        <label>Date of Birth</label>
                        <input type="date" id="dob" name="dob">
                        <small class="error-msg">Select a date</small>
                    </div>
                </div>

                <div class="input-group">
                    <label>Gender</label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="Male"> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                        <label><input type="radio" name="gender" value="Other"> Other</label>
                    </div>
                    <small class="error-msg">Please select a gender</small>
                </div>

                <div class="input-group">
                    <label>Hobbies (Select all that apply)</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="hobbies[]" value="Coding"> Coding</label>
                        <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
                        <label><input type="checkbox" name="hobbies[]" value="Gaming"> Gaming</label>
                        <label><input type="checkbox" name="hobbies[]" value="Traveling"> Traveling</label>
                        <label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
                        <label><input type="checkbox" name="hobbies[]" value="Fitness"> Fitness</label>
                    </div>
                    <small class="error-msg">Select at least one hobby</small>
                </div>

                <div class="input-group">
                    <label>Address</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter full address..."></textarea>
                    <small class="error-msg">Address is required</small>
                </div>

                <button type="submit" id="submitBtn">Submit Registration</button>
            </form>
        </div>
    <?php
    }
    ?>
</div>

<script src="script.js"></script>
</body>
</html>