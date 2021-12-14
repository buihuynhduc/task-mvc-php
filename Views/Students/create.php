<h1>Create Infomation</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">StudentName</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="studentname">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
        <input type="radio" name="gender" value="1"> Nam
        <input type="radio" style="margin-left: 20px;"  name="gender" value="0"> Nữ
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>