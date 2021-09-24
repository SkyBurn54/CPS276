<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Project</title>
  </head>
  <body>
    <div class="container">
    <form>
    <div class="form-row">
        <div class="col">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname">
        </div>
        
        <div class="col">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname">
        </div>
    </div>

    <p></p>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city">
        </div>

        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option value="iowa">Iowa</option>
                <option value="ohio">Ohio</option>
                <option value="michigan" selected="selected">Michigan</option>
                <option value="florida">Florida</option>
                <option value="newyork">New York</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip">
        </div>
    </div>

    <p></p>

    <div class="form-check form-check-inline">
        <label><input type="radio" name="Gender" value="male" > Male</label>
    </div>

    <div class="form-check form-check-inline">
        <label><input type="radio" name="Gender" value="female" > Female</label>
    </div>

    <p></p>

    <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
  </body>
</html>
