<?php
if (isset($_GET['u_id'])) {
    $user_id = $_GET['u_id'];

    // $query = "SELECT * FROM users WHERE id = $user_id";
    // $select_user_query = mysqli_query($conn, $query);
    // while ($row = mysqli_fetch_assoc($select_user_query)) {
    //     $user_account_type = $row['account_type'];
    //     $user_currency = $row['currency'];
    //     $user_balance = $row['balance'];
    // }
    
    // get the updated diff currency balance values
    $sql = "SELECT * FROM balance WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$balance_usd = $row["usd"];
	    	$balance_btc = $row["btc"];
	    	$balance_eth = $row["eth"];
	    	$balance_xrp = $row["xrp"];
		}
	}
	
	// get the updated account balance values
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$month_profit = $row["month_profit"];
	    	$year_profit = $row["year_profit"];
	    	$balance = $row["balance"];
	    	$walletType = $row["walletType"];
	    	$walletAddress = $row["walletAddress"];
		}
	}
	
	// get the updated account partner values
    $sql = "SELECT * FROM partners WHERE id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$active_partners = $row["active"];
	    	$inactive_partners = $row["inactive"];
		}
	}
	
	// get the updated payout values
    $sql = "SELECT * FROM payouts WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$payouts_usd = $row["usd"];
	    	$payouts_btc = $row["btc"];
	    	$payouts_eth = $row["eth"];
	    	$payouts_xrp = $row["xrp"];
		}
	}
	
	// get the updated referral earning values
    $sql = "SELECT * FROM referral_earning WHERE user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$referral_earning_usd = $row["usd"];
	    	$referral_earning_btc = $row["btc"];
	    	$referral_earning_eth = $row["eth"];
	    	$referral_earning_xrp = $row["xrp"];
		}
	}
	
	// get the updated active deposits
    $sql = "SELECT * FROM deposit WHERE user_id = '$user_id' AND active = 1";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$active_deposit_usd = $row["usd"];
	    	$active_deposit_btc = $row["btc"];
	    	$active_deposit_eth = $row["eth"];
	    	$active_deposit_xrp = $row["xrp"];
		}
	}
	
	// get the updated earned deposits
    $sql = "SELECT * FROM deposit WHERE user_id = '$user_id' AND earned = 1";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if($result_check > 0){
		if($row = mysqli_fetch_assoc($result)){
	    	/// 
	    	$earned_deposit_usd = $row["usd"];
	    	$earned_deposit_btc = $row["btc"];
	    	$earned_deposit_eth = $row["eth"];
	    	$earned_deposit_xrp = $row["xrp"];
		}
    }
}

if (isset($_POST['profit'])) {
    $balance = $_POST['balance'];
    $month_profit = $_POST['month_profit'];
    $year_profit = $_POST['year_profit'];

    $query = "UPDATE users 
        SET balance = '$balance', year_profit = '$year_profit', month_profit = '$month_profit'
        WHERE id = $user_id";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

if (isset($_POST['currency_balance'])) {
    $balance_usd = $_POST['balance_usd'];
    $balance_btc = $_POST['balance_btc'];
    $balance_eth = $_POST['balance_eth'];
    $balance_xrp = $_POST['balance_xrp'];

    $query = "UPDATE balance 
        SET usd = '$balance_usd', btc = '$balance_btc', eth = '$balance_eth', 
        xrp = '$balance_xrp' WHERE user_id = $user_id";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

if (isset($_POST['partners'])) {
    $active_partners = $_POST['active_partners'];
    $inactive_partners = $_POST['inactive_partners'];

    $query = "UPDATE partners 
        SET active = '$active_partners', inactive = '$inactive_partners'
        WHERE user_id = $user_id";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

if (isset($_POST['payouts'])) {
    $payouts_usd = $_POST['payouts_usd'];
    $payouts_btc = $_POST['payouts_btc'];
    $payouts_eth = $_POST['payouts_eth'];
    $payouts_xrp = $_POST['payouts_xrp'];

    $query = "UPDATE payouts 
        SET usd = '$payouts_usd', btc = '$payouts_btc', eth = '$payouts_eth', 
        xrp = '$payouts_xrp' WHERE user_id = $user_id";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

if (isset($_POST['referral_earning'])) {
    $referral_earning_usd = $_POST['referral_earning_usd'];
    $referral_earning_btc = $_POST['referral_earning_btc'];
    $referral_earning_eth = $_POST['referral_earning_eth'];
    $referral_earning_xrp = $_POST['referral_earning_xrp'];

    $query = "UPDATE referral_earning 
        SET usd = '$referral_earning_usd', btc = '$referral_earning_btc', eth = '$referral_earning_eth', 
        xrp = '$referral_earning_xrp' WHERE user_id = $user_id";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

if (isset($_POST['active_deposit'])) {
    $active_deposit_usd = $_POST['active_deposit_usd'];
    $active_deposit_btc = $_POST['active_deposit_btc'];
    $active_deposit_eth = $_POST['active_deposit_eth'];
    $active_deposit_xrp = $_POST['active_deposit_xrp'];

    $query = "UPDATE deposit 
        SET usd = '$active_deposit_usd', btc = '$active_deposit_btc', eth = '$active_deposit_eth', 
        xrp = '$active_deposit_xrp' WHERE user_id = '$user_id' AND active = 1";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

if (isset($_POST['earned_deposit'])) {
    $earned_deposit_usd = $_POST['earned_deposit_usd'];
    $earned_deposit_btc = $_POST['earned_deposit_btc'];
    $earned_deposit_eth = $_POST['earned_deposit_eth'];
    $earned_deposit_xrp = $_POST['earned_deposit_xrp'];

    $query = "UPDATE deposit 
        SET usd = '$earned_deposit_usd', btc = '$earned_deposit_btc', eth = '$earned_deposit_eth', 
        xrp = '$earned_deposit_xrp' WHERE user_id = '$user_id' AND earned = 1";

    $update = mysqli_query($conn, $query);
    if (!$update) {
        die("FATAL ERROR" . mysqli_error($conn));
    } else {
        echo "Record Updated!!!!";
    }
}

?>
<div>
    <div class="no-mb no-mt">
        <p class="text-center">Withdrawal Data</p>
        <div class="col-lg-6 no-pl">
            <div class="form-group">
                <label class="form-label">Wallet Type</label>
                <div class="controls">
                    <input value="<?php echo $walletType; ?>" class="form-control"  disabled  type="text" >
                </div>
            </div>
        </div>

        <div class="col-lg-6 no-pr">
            <div class="form-group">
                <label class="form-label">Wallet Address</label>
                <div class="controls">
                    <input value="<?php echo $walletAddress; ?>"  class="form-control" disabled  type="text">
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
        <input type="hidden" name="profit" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">Total earning</label>
                        <div class="controls">
                            <input value="<?php echo $balance; ?>" name="balance" class="form-control"  required=""  type="text" placeholder="Total earning">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label"><? echo date("F") ?> profit (%)</label>
                        <div class="controls">
                            <input value="<?php echo $month_profit; ?>" name="month_profit" class="form-control" required=""  type="text" placeholder="<? echo date("F") ?> Profit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">Year Profit (%)</label>
                        <div class="controls">
                            <input value="<?php echo $year_profit; ?>" name="year_profit" class="form-control" required=""  type="text" placeholder="Year Profit">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
        <input type="hidden" name="currency_balance" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">USD Balance</label>
                        <div class="controls">
                            <input value="<?php echo $balance_usd; ?>" name="balance_usd" class="form-control"  required=""  type="text" placeholder="USD Balance">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">BTC Balance</label>
                        <div class="controls">
                            <input value="<?php echo $balance_btc; ?>" name="balance_btc" class="form-control" required=""  type="text" placeholder="BTC Balance">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">ETH Balance</label>
                        <div class="controls">
                            <input value="<?php echo $balance_eth; ?>" name="balance_eth" class="form-control" required=""  type="text" placeholder="ETH Balance">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">XRP Balance</label>
                        <div class="controls">
                            <input value="<?php echo $balance_xrp; ?>" name="balance_xrp" class="form-control" required=""  type="text" placeholder="XRP Balance">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="mx-4">
        <input type="hidden" name="partners" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">Active Partners</label>
                        <div class="controls">
                            <input value="<?php echo $active_partners; ?>" name="active_partners" class="form-control"  required=""  type="text" placeholder="Active Partners">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">Inactive Partners</label>
                        <div class="controls">
                            <input value="<?php echo $inactive_partners; ?>" name="inactive_partners" class="form-control" required=""  type="text" placeholder="Inactive Partners">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
        <input type="hidden" name="payouts" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">USD Payout</label>
                        <div class="controls">
                            <input value="<?php echo $payouts_usd; ?>" name="payouts_usd" class="form-control"  required=""  type="text" placeholder="USD Payout">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">BTC Payout</label>
                        <div class="controls">
                            <input value="<?php echo $payouts_btc; ?>" name="payouts_btc" class="form-control" required=""  type="text" placeholder="BTC Payout">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">ETH Payout</label>
                        <div class="controls">
                            <input value="<?php echo $payouts_eth; ?>" name="payouts_eth" class="form-control" required=""  type="text" placeholder="ETH Payout">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">XRP Payout</label>
                        <div class="controls">
                            <input value="<?php echo $payouts_xrp; ?>" name="payouts_xrp" class="form-control" required=""  type="text" placeholder="XRP Payout">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
        <input type="hidden" name="referral_earning" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">USD Referral Earning</label>
                        <div class="controls">
                            <input value="<?php echo $referral_earning_usd; ?>" name="referral_earning_usd" class="form-control"  required=""  type="text" placeholder="USD Referral Earning">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">BTC Referral Earning</label>
                        <div class="controls">
                            <input value="<?php echo $referral_earning_btc; ?>" name="referral_earning_btc" class="form-control" required=""  type="text" placeholder="BTC Referral Earning">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">ETH Referral Earning</label>
                        <div class="controls">
                            <input value="<?php echo $referral_earning_eth; ?>" name="referral_earning_eth" class="form-control" required=""  type="text" placeholder="ETH Referral Earning">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">XRP Referral Earning</label>
                        <div class="controls">
                            <input value="<?php echo $referral_earning_xrp; ?>" name="referral_earning_xrp" class="form-control" required=""  type="text" placeholder="XRP Referral Earning">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
        <input type="hidden" name="active_deposit" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">USD Active Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $active_deposit_usd; ?>" name="active_deposit_usd" class="form-control"  required=""  type="text" placeholder="USD Active Deposit">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">BTC Active Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $active_deposit_btc; ?>" name="active_deposit_btc" class="form-control" required=""  type="text" placeholder="BTC Active Deposit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">ETH Active Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $active_deposit_eth; ?>" name="active_deposit_eth" class="form-control" required=""  type="text" placeholder="ETH Active Deposit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">XRP Active Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $active_deposit_xrp; ?>" name="active_deposit_xrp" class="form-control" required=""  type="text" placeholder="XRP Active Deposit">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    
    <hr>
    
    <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
        <input type="hidden" name="earned_deposit" value="checker"/>
        <div class="row">
            <div class="col-xs-12">
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">USD Earned Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $earned_deposit_usd; ?>" name="earned_deposit_usd" class="form-control"  required=""  type="text" placeholder="USD Earned Deposit">
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">BTC Earned Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $earned_deposit_btc; ?>" name="earned_deposit_btc" class="form-control" required=""  type="text" placeholder="BTC Earned Deposit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pl">
                    <div class="form-group">
                        <label class="form-label">ETH Earned Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $earned_deposit_eth; ?>" name="earned_deposit_eth" class="form-control" required=""  type="text" placeholder="ETH Earned Deposit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 no-pr">
                    <div class="form-group">
                        <label class="form-label">XRP Earned Deposit</label>
                        <div class="controls">
                            <input value="<?php echo $earned_deposit_xrp; ?>" name="earned_deposit_xrp" class="form-control" required=""  type="text" placeholder="XRP Earned Deposit">
                            <button class="btn btn-primary mt-10 btn-corner right-15" name="update_user">Update</button>
                        </div>
                    </div>
                </div>
                <td>
                <form action="delete_user.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
    <input type="hidden" name="user_id" value="<?php echo $user['u_id']; ?>">
    <button type="submit">Delete</button>
</form>

            </td>
            </div>
    </form>
</div>
