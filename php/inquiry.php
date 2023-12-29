<?php include '../layouts/partials/shared/head.html';?>
<link href="static/css/bootstrap-icons.css" rel="stylesheet">
<link href="static/css/bootstrap.min.css" rel="stylesheet">
<link href="../static/css/templatemo-topic-listing.css" rel="stylesheet">

<style>
.form-container {
    position: relative;
    max-width: 500px;
    width: 100%;
    background: #FCEDDA;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.form-container form-header {
    font-size: 1.2rem;
    color: #000;
    font-weight: 600;
    text-align: center;
}

.form-container .form {
    margin-top: 15px;
}

.form .input-box {
    width: 100%;
    margin-top: 10px;
}

.input-box label {
    color: #000;
}

.form :where(.input-box input, .select-box) {
    position: relative;
    height: 35px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    color: #808080;
    margin-top: 5px;
    border: 1px solid #EE4E34;
    border-radius: 6px;
    padding: 0 15px;
    background: #FCEDDA;
}

.input-box input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
    display: flex;
    column-gap: 15px;
}

.form .gender-box {
    margin-top: 10px;
}

.form :where(.gender-option, .gender) {
    display: flex;
    align-items: center;
    column-gap: 50px;
    flex-wrap: wrap;
}

.form .gender {
    column-gap: 5px;
}

.gender input {
    accent-color: #EE4E34;
}

.form :where(.gender input, .gender label) {
    cursor: pointer;
}

.gender label {
    color: #000;
}

.address :where(input, .select-box) {
    margin-top: 10px;
}

.select-box select {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    color: #808080;
    font-size: 1rem;
    background: #FCEDDA;
}

.form button {
    height: 40px;
    width: 100%;
    color: #000;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
    background: #EE4E34;
}

.form button:hover {
    background: #EE3E34;
}
</style>
<?php include '../layouts/partials/shared/nav.html';?>
<body>
    <section class="form-container">
        <form-header>Registration Form</form-header>
        <form class="form" action="https://formsubmit.co/joelwsy-pm22@student.tarc.edu.my" method="POST">
            <div class="input-box">
                <label>Full Name</label>
                <input required="" placeholder="Enter full name" type="text" name="fullname">
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input required="" placeholder="Enter phone number" type="telephone" name="telephone">
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input required="" placeholder="Enter birth date" type="date" name="birthdate">
                </div>
            </div>
            <div class="gender-box">
                <label>Gender</label>
                <div class="gender-option">
                    <div class="gender">
                        <input checked="" name="gender" id="check-male" type="radio">
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input name="gender" id="check-female" type="radio">
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input name="gender" id="check-other" type="radio">
                        <label for="check-other">Prefer not to say</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input required="" placeholder="Enter street address" type="text" name="address">
                <div class="column">
                    <div class="select-box">
                        <select>
                            <option hidden="">Country</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>Germany</option>
                            <option>Japan</option>
                        </select>
                    </div>
                    <input required="" placeholder="Enter your city" type="text" name="city">
                </div>
            </div>
            <button>Submit</button>
        </form>
    </section>
</body>

<?php include '../layouts/partials/shared/footer.html';?>
<?php include '../layouts/partials/shared/scripts.html';?>
</html>