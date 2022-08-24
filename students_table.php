<?php
echo 
"
<table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
    </thead>
    <tbody>
";

foreach ($students as $row){
        if ($row['status'] == "AAST"){
            echo 
            "
                <tr style=color:red;>
                    <td>" 
                        .
                        $row['name'] 
                        .
                    "</td>
                    <td>" 
                        .
                        $row['email'] 
                        .
                    "</td>
                    <td>" 
                        .
                        $row['status'] 
                        .
                    "</td>

                </tr>
            ";
        }
        else{
            echo 
            "
                <tr>
                    <td>" 
                        .
                        $row['name'] 
                        .
                    "</td>
                    <td>" 
                        .
                        $row['email'] 
                        .
                    "</td>
                    <td>" 
                        .
                        $row['status'] 
                        .
                    "</td>

                </tr>
            ";
        }

    
}

echo 
"
</tbody>
</table>
";