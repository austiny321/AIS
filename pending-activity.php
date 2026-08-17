<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Activities</title>
    <link rel="stylesheet" href="style.css">
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

            <h1>Pending Activities</h1>
            <div class="user">Account Name</div>

        </div>

        <div>
            <div class="toggle-bar">

                <button
                    class="transactions-btn" onclick="window.location.href='transactions.php'">

                    Transactions

                </button>

                <button
                    class="transactions-btn" onclick="window.location.href='pending-activity.php'">

                    Pending Activity


                </button>

                <button
                    class="transactions-btn" onclick="window.location.href='expense.php'">

                    Create Expense

                </button>


                <button
                    class="transactions-btn" onclick="window.location.href='revenue.php'">

                    Create Revenue

                </button>

                <button
                    class=" transactions-btn" onclick="window.location.href=''">

                    Activity History

                </button>
            </div>

            <div>



                <div>

                    <!-- TRANSACTIONS -->

                    <div class="transactions-table">

                        <h3>Pending Activities</h3>

                        <table>

                            <thead>

                                <tr>

                                    <th>Date</th>

                                    <th>Description</th>

                                    <th>Category</th>

                                    <th>Amount</th>

                                    <th>Type</th>

                                    <th>Created By</th>

                                    <th>Action</th>

                                    <!--Will Include Number of items and Total Amount later-->

                                </tr>

                            </thead>

                            <tbody>

                                <tr class="clickable-row" onclick="window.location.href='edit-transactions.php'">

                                    <td>15 Aug</td>

                                    <td>Laptop Sale</td>

                                    <td>Sales Revenue</td>

                                    <td class="green">
                                        +GH₵ 8,000
                                    </td>

                                    <td>
                                        Revenue
                                    </td>

                                    <td>
                                        John Mensah
                                    </td>

                                    <td>
                                        <button
                                            class="approve-btn">

                                            ✓

                                        </button>
                                        <button
                                            class="reject-btn">

                                            ✕

                                        </button>
                                    </td>

                                </tr>


                                <tr class="clickable-row" onclick="window.location.href='edit-activity.php'">

                                    <td>14 Aug</td>

                                    <td>ECG Bill</td>

                                    <td>Electricity</td>

                                    <td class="red">
                                        -GH₵ 750
                                    </td>

                                    <td>
                                        Expense
                                    </td>

                                    <td>
                                        John Mensah
                                    </td>

                                    <td>
                                        <button
                                            class="approve-btn">

                                            ✓

                                        </button>
                                        <button
                                            class="reject-btn">

                                            ✕

                                        </button>
                                    </td>

                                </tr>


                                <tr class="clickable-row" onclick="window.location.href='edit-activity.php'">

                                    <td>13 Aug</td>

                                    <td>Office Rent</td>

                                    <td>Rent Expense</td>

                                    <td class="red">
                                        -GH₵ 4,000
                                    </td>

                                    <td>
                                        Expense
                                    </td>

                                    <td>
                                        John Mensah
                                    </td>

                                    <td>
                                        <button
                                            class="approve-btn">

                                            ✓

                                        </button>
                                        <button
                                            class="reject-btn">

                                            ✕

                                        </button>
                                    </td>

                                </tr>


                                <tr class="clickable-row" onclick="window.location.href='edit-activity.php'">

                                    <td>12 Aug</td>

                                    <td>Customer Payment</td>

                                    <td>Accounts Receivable</td>

                                    <td class="green">
                                        +GH₵ 2,000
                                    </td>

                                    <td>
                                        Revenue
                                    </td>

                                    <td>
                                        John Mensah
                                    </td>

                                    <td>
                                        <button
                                            class="approve-btn">

                                            ✓

                                        </button>
                                        <button
                                            class="reject-btn">

                                            ✕

                                        </button>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
    </main>


</body>

</html>