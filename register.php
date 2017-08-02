<form class="form col-sm-10 pull-center" action="user.php" method="POST">
    <div class="row">
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Full Name(s):</label><br>
                <input type="text" class="form-control input-sm" name="name" placeholder="First Name(s)" required>
            </div>
        </div>
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Surname:</label><br>
                <input type="text" class="form-control input-sm" name="surname" placeholder="Surname" required>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>E-Mail Address:</label><br>
                <input type="email" class="form-control input-sm" name="email" placeholder="E-mail Address" required>
            </div>
        </div>
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Cell Number:</label><br>
                <input type="tel" class="form-control input-sm" name="number" placeholder="Tel. Number" required>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Password:</label><br>
                <input type="password" class="form-control input-sm" name="password" placeholder="Password" required>
            </div>
        </div>
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Nearest Shop:</label><br>
                <select class="form-control input-sm" name="shop" required>
                    <option value="Select">--Select a Shop--</option>
                    <option value="Shop 1">Shop 1</option>
                    <option value="Shop 2">Shop 2</option>
                    <option value="Shop 3">Shop 3</option>
                    <option value="Shop 4">Shop 4</option>
                    <option value="Shop 5">Shop 5</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="row">    
        <div class="col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-info pull-right" name="submit">Register</button>
            </div>
        </div>
    </div>

</form> 