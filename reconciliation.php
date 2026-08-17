<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reconciliation</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Menu -->

    <div class="sidebar">
        <div class="logo">Smart<span>Accounts</span></div>
        <ul class="menu">

            <li onclick="window.location.href='index.php'">📊 Dashboard</li>
            <li onclick="window.location.href='transactions.php'">💰 Transactions</li>
            <li class=" active" onclick="window.location.href='reconciliation.php'">🔄 Reconciliation</li>
            <li onclick="window.location.href='report.php'">📑 Financial Reports</li>

        </ul>
    </div>

    <!-- Main-->

    <main>
        <div class="topbar">

            <h1>Reconciliation</h1>
            <div class="user">Account Name</div>

        </div>

        <div class="toggle-bar">

            <button
                onclick="window.location.href='transactions.php'">

                🏦 Import Bank Statement

            </button>

        </div>

        <div class="cards">

            <div class="card">

                <h4>Bank Balance</h4>

                <h2 class="green">
                    GH₵ 10,000
                </h2>

            </div>


            <div class="card">

                <h4>System Balance</h4>

                <h2 class="red">
                    GH₵ 6,000
                </h2>

            </div>


            <div class="card">

                <h4>Difference</h4>

                <h2 class="blue">
                    GH₵ 4,000
                </h2>

            </div>

        </div>

        <div>

            <div>

                <!-- TRANSACTIONS -->

                <div class="transactions-table">

                    <h3>Transactions Requiring Action</h3>

                    <table>

                        <thead>

                            <tr>

                                <th>Date</th>

                                <th>Description</th>

                                <th>Type</th>

                                <th>System Amount</th>

                                <th>Bank Amount</th>

                                <th>Difference</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr class="clickable-row" onclick="window.location.href='review-transaction.php'">

                                <td>15 Aug</td>

                                <td>Laptop Sale</td>

                                <td>Revenue</td>

                                <td class="green">+GH₵ 1,000</td>

                                <td class="green">
                                    +GH₵ 500
                                </td>

                                <td>+GH₵ 500</td>

                            </tr>

                            <tr class="clickable-row" onclick="window.location.href='review-transaction.php'">

                                <td>15 Aug</td>

                                <td>Office Rent</td>

                                <td>Expense</td>

                                <td class="red">-GH₵ 2,000</td>

                                <td class="red">
                                    +GH₵ 1,000
                                </td>

                                <td>-GH₵ 1,000</td>

                            </tr>
                            <tr class="clickable-row" onclick="window.location.href='review-transaction.php'">

                                <td>15 Aug</td>

                                <td>Laptop Sale</td>

                                <td>Revenue</td>

                                <td class="green">+GH₵ 1,000</td>

                                <td class="green">
                                    +GH₵ 500
                                </td>

                                <td>+GH₵ 500</td>

                            </tr>




                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </main>
</body>

</html>