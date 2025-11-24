<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Amount: <input type="number" name="amount" required>
    <select name="action">
        <option value="deposit">Deposit</option>
        <option value="withdraw">Withdraw</option>
    </select>
    <button type="submit">Submit</button>
</form>

<?php
if ($_POST) {

    class BankAccount {
        private $balance = 1000;

        public function deposit($amt) {
            $this->balance += $amt;
            return "Deposited ₹$amt<br>New Balance: ₹$this->balance";
        }

        public function withdraw($amt) {
            if ($amt > $this->balance) {
                return "Insufficient balance!";
            }
            $this->balance -= $amt;
            return "Withdrawn ₹$amt<br>New Balance: ₹$this->balance";
        }
    }

    $amount = $_POST['amount'];
    $action = $_POST['action'];

    $acc = new BankAccount();

    if ($action === "deposit") {
        echo "<h3>".$acc->deposit($amount)."</h3>";
    } else {
        echo "<h3>".$acc->withdraw($amount)."</h3>";
    }
}
?>

</body>
</html>
