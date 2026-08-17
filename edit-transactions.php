<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Transaction</title>

</head>

<body>
    <!-- Menu -->

    <div class="sidebar">
        <div class="logo">Smart<span>Accounts</span></div>
        <ul class="menu">

            <li onclick="window.location.href='index.php'">📊 Dashboard</li>
            <li class=" active" onclick="window.location.href='transactions.php'">💰 Transactions</li>
            <li onclick="window.location.href='reconciliation.php'">🔄 Reconciliation</li>
            <li onclick="window.location.href='report.php'">📑 Financial Reports</li>

        </ul>
    </div>

    <!-- Main-->

    <main>
        <div class="topbar">

            <h1>Transactions</h1>
            <div class="user">Account Name</div>

        </div>

        <div class="form-section">
            <div class="form-section-container">
                <h1>Edit Transaction</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="eg. ECG electricity bill" value="">
                    <label for="amount">Amount (GH₵)</label>
                    <input type="number" name="amount" value="">
                    <label for="date">Date</label>
                    <input type="date" name="date" value="">


                    <label for="category">Category</label>
                    <select name="category">
                        <option value="">Start typing a description and the system will suggest a category.</option>
                        <option value="">ECG Bills</option>
                        <option value="">Rent</option>
                        <option value="">Department Item</option>
                        <option value="">Taxes</option>
                    </select>

                    <label for="payment-method">Payment Method</label>
                    <select name="category">
                        <option value="">Bank</option>
                        <option value="">Cash</option>
                        <option value="">Mobile Money</option>
                    </select>

                    <label for="supporting-document">Supporting Document</label>
                    <input type="file" name="supporting-document" id="supporting-document"><br>

                    <input type="submit" class="submit-btn" name="confirm" value="Confirm">

                    <input type="submit" class="clear-btn" name="clear" value="Clear">
                </form>
            </div>
        </div>
    </main>
</body>

</html>