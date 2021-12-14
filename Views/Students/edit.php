<h1>Edit Infomation</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">StudentName</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name"
               value="<?php if ($student->getstudentName()) echo $student->getStudentName(); ?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="date" class="form-control" id="dob" name="dob"
               value="<?php if ($student->getDob()) echo $student->getDob(); ?>">
    </div>
    <div class="form-group">
        <input class="radio" id="radio-man" type="radio" name="gender" value="0"> Nam
        <input type="radio" class="radio" id="radio-nu" name="gender" value="1" style="margin-left: 20px;"> Nữ
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
    $check = document.getElementsByClassName("radio");
    $valuegender = <?php echo $student->getGender()?>;
    console.log($valuegender);
    if ($valuegender == '0') {
        $check[0].setAttribute("checked", "checked");
    } else {
        $check[1].setAttribute("checked", "checked");
    }
</script>