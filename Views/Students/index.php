<h1>Student</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/students/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Student</a>
        <tr>
            <th>StudentId</th>
            <th>StudentName</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php

        foreach ($students as $student) {
            echo '<tr>';
            echo "<td>" . $student->getStudentId() . "</td>";
            echo "<td>" . $student->getStudentName() . "</td>";
            if ($student->getGender() == '0') {
                echo "<td>" . 'Nam' . "</td>";
            } else {
                echo "<td>" . 'Nữ' . "</td>";
            }
            echo "<td>" . $student->getDob() . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/students/edit/" . $student->getStudentId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/students/delete/" . $student->getStudentId() . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>