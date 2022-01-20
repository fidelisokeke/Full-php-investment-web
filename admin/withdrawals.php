<table class="table table-bordered table-hover">
    <h1 class="title">Withdrawals</h1>
    <thead class="thead-dark"> 
        <tr>
            <th>ID</th>
            <th>User Email</th>
            <th>Amount</th>
            <th>Wallet Address</th>
            <th>Network</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody id="tbody">
    <?php
    
        function get_time_ago( $time )
        {
            $time_difference = time() - $time;
            
            echo $time_difference;
        
            if( $time_difference < 1 ) { return 'less than 1 second ago'; }
            $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                        30 * 24 * 60 * 60       =>  'month',
                        24 * 60 * 60            =>  'day',
                        60 * 60                 =>  'hour',
                        60                      =>  'minute',
                        1                       =>  'second'
            );
        
            foreach( $condition as $secs => $str )
            {
                $d = $time_difference / $secs;
        
                if( $d >= 1 )
                {
                    $t = round( $d );
                    return '' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
                }
            }
        }


    $query = "SELECT * FROM withdrawals ORDER BY id DESC";
    $select_user_details = mysqli_query($conn, $query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($select_user_details)) {
        $userEmail = $row['userEmail'];
        $withdrawAmount = $row['withdrawAmount'];
        $walletAddress = $row['walletAddress'];
        $walletType = $row['walletType'];
        $created_at = get_time_ago(strtotime($row['created_at']));

        echo "<tr>";
        echo "<td>{$count}</td>";
        echo "<td>{$userEmail}</td>";
        echo "<td>{$withdrawAmount}</td>";
        echo "<td>{$walletAddress}</td>";
        echo "<td>{$walletType}</td>";
        echo "<td>{$created_at}</td>";
        echo "</tr>";
        $count += 1;
    }
    ?>
    </tbody>
</table>
                