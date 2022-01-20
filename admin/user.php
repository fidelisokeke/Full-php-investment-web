<table class="table table-bordered table-hover">
    <h1 class="title">USERS</h1>
    <thead class="thead-dark"> 
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>E-Mail</th>
            <!--<th>Country</th>-->
            <th>Plan</th>
            <th>Total earning</th>
            <th><? echo date("F"); ?> Profit</th>
            <th>Year Profit</th>
            <th>Referral Count</th>
            <th>Reg Date</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody id="tbody">
    <?php
    $query = "SELECT * FROM users";
    $select_user_details = mysqli_query($conn, $query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($select_user_details)) {
        $user_id = $row['id'];
        $user_name = $row['username'];
        $user_email = $row['email'];
        // $user_country = $row['country'];
        $plan = $row['plan'];
        $user_balance = $row['balance'];
        $month_profit = $row['month_profit'];
        $year_profit = $row['year_profit'];
        $referal_count = $row['referal_count'];
        $reg_date = $row['joined_date'];

        echo "<tr>";
        echo "<td>{$count}</td>";
        echo "<td>{$user_name}</td>";
        echo "<td>{$user_email}</td>";
        // echo "<td>{$user_country}</td>";
        echo "<td>{$plan}</td>";
        echo "<td>{$user_balance}</td>";
        echo "<td>{$month_profit}</td>";
        echo "<td>{$year_profit}</td>";
        echo "<td>{$referal_count}</td>";
        echo "<td>{$reg_date}</td>";
        echo "<td> <a  href='admin.php?source=edit_user&u_id={$user_id}' class = 'btn btn-primary'>edit</a></td>";
        echo "<td> <a href='delete_user.php?delete={$user_id}' class='btn btn-danger'>delete</a></td>";
        echo "</tr>";
        $count += 1;
    }
    ?>
    </tbody>
</table>
                